<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Color;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function getAddCart($id, Request $request){
        $product =Product::find($id);

        $availableQty = $product->qty;

        $qty = $request->quantity;
        $color = Color::whereId($request->select_color)->first()->color_name;
        $size = Size::whereId($request->select_size)->first()->size_name;

        if($qty > $availableQty){
            session()->flash('error_qty', 'This product is not enough quantity!');
            return back();
        }

        Cart::add([
            'id' => $id,
            'name' => $product->product_name,
            'qty' => $qty,
            'price' => (!empty($product->sale_price) ? $product->sale_price : $product->price ),
            'options' => ['img' => $product->thumbnail,
                          'size'=> $size,
                          'color'=>$color,
                        ]
        ]);

        return redirect('cart/show');

    }

    public function getShowCart(){
        $data['items'] =Cart::content();
        $data['totalPrice'] = Cart::total();
        return view('frontend/cart', $data);
    }

    public function getDeleteCart($id){
        if($id == 'all'){
            Cart::destroy();
        }else{
            Cart::remove($id);
        }
        return back();
    }

    public function getUpdateCart(Request $request){
        $cartUpdate = Cart::update($request->rowId, $request->qty);
        //return $cartUpdate;
    }

}
