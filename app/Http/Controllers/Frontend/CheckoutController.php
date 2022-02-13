<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\InfoCheckoutRequest;
use App\Models\Coupon;
use App\Models\Order;
use App\Models\Product;
use App\Models\Transaction;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class CheckoutController extends Controller
{
    public function getCheckout(){
        $data['items'] =Cart::content();
        $data['totalPrice'] = Cart::total();
        return view('frontend/checkout', $data);
    }

    public function postCheckout(InfoCheckoutRequest $request){
        $data['info'] = $request->all();

        $email = $request->email;

        $data['cart'] = Cart::content();

        $data['totalPrice'] = Cart::total();


        DB::beginTransaction();
        try {
            //update product qty
            foreach ($data['cart'] as $item) {
                $product = Product::where('id', $item->id)->first();

                $product->qty = ($product->qty) - ($item->qty);

                $product->save();
            }

            //insert data transaction table
            $transaction = new Transaction();
            $transaction->customer_id = (!empty(Auth::user()->id)) ? Auth::user()->id : null;
            $transaction->customer_name = $request->fullname;
            $transaction->customer_email = $request->email;
            $transaction->customer_phone = $request->telephone;
            $transaction->payment_method = 1;
            $transaction->address = $request->street . ' - ' . $request->city;
            $transaction->amount = $data['totalPrice'];

            $transaction->save();

            //insert data order table
            foreach ($data['cart'] as $item) {
                $product = Product::where('id', $item->id)->first();
                $order = new Order();
                $order->transaction_id = $transaction->id;
                $order->product_id = $item->id;
                $order->product_name = $item->name;
                $order->qty = $item->qty;
                $order->color = $item->options->color;
                $order->size = $item->options->size;
                $order->amount = $item->qty * $item->price;

                $order->save();
            }


            //send mail
            $data['detailOrder'] = DB::table('transactions')->join('orders','transactions.id','=','orders.transaction_id')
                ->select(
                    'transactions.id as transaction_id',
                    'orders.id as order_id',
                    'transactions.*',
                    'orders.*',
                    'transactions.amount as total_price'

                )->where('transactions.id', $transaction->id)
                ->get();

            Mail::send('frontend.email', $data, function ($message) use ($email) {
                $message->from('lamtuancong2807@gmail.com', 'CongLam'); //admin

                $message->to($email, $email); //khach hang

                $message->cc('conglt2807@gmail.com', 'Flowers World'); //chu cua hang

                $message->subject('Bill FlowersWorld Confirmation');
            });

            Cart::destroy();
            DB::commit();
        } catch (\Exception $e){
            DB::rollBack();

//            throw new \Exception($e->getMessage());
        }

        return redirect('complete');
    }

    public function postApplyCoupon(Request $request){
        $couponCode = $request->coupon_code;
        $coupon = Coupon::where('code', $couponCode)->first();

        if(!empty($coupon)){
            //mai cho input coupon sang ben checkout
        }else{
//            dd('khong co coupon');
        }
    }

    public function getComplete(){

        return view('frontend.complete');
    }
}
