<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddCouponRequest;
use App\Http\Requests\EditCouponRequest;
use App\Models\Coupon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCoupon()
    {
        $coupons = Coupon::paginate(10);
        return view('backend.coupon.list')->with('coupons',$coupons)->with('i', $i=1);
    }

    public function getAddCoupon(){
        $categories = Coupon::all();

        return view('backend.coupon.add');
    }

    public function postAddCoupon(AddCouponRequest $request){

        $coupon = new Coupon();

        $coupon->code = $request->code;
        $coupon->coupon_type = $request->coupon_type;
        $coupon->coupon_value = $request->coupon_value;
        $coupon->times_limit = $request->times_limit;
        $coupon->expired_date = $request->expired_coupon;
        $coupon->description = $request->description;

        $coupon->save();

        return redirect('admin/coupon');

    }


    public function getEditCoupon($id){
        $coupon = Coupon::where('id',$id)->first();

        //dd($sizeChoosed ) ;
        return view('backend.coupon.edit')
            ->with('coupon', $coupon);
    }


    public function postEditCoupon($id, EditCouponRequest $request){
        $coupon = Coupon::where('id', $id)->first();

        $coupon->code = $request->code;
        $coupon->coupon_type = $request->coupon_type;
        $coupon->coupon_value = $request->coupon_value;
        $coupon->times_limit = $request->times_limit;
        $coupon->expired_date = $request->expired_coupon;
        $coupon->description = $request->description;
        $coupon->status = $request->status;

        $coupon->save();

        return redirect('admin/coupon');
    }

    public function getDeleteCoupon($id){
        Coupon::destroy($id);
        return back();
    }
}
