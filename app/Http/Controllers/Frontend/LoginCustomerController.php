<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginCustomerController extends Controller
{
    public function getLogin(){
        return view('frontend.login');
    }

    public function postLogin(Request $request){
        $arr = ['email'=>$request->email, 'password'=>$request->password, 'status'=>1, 'role_id'=>[2]];

        if($request->rememberPasswordCheck == 'Remember password'){
            $remember = true;
        }
        else{
            $remember = false;
        }

        if(Auth::attempt($arr, $remember)){
//            dd(1);
            return redirect()->guest(route('/'));
//            return redirect()->intended('/');
        }
        else{
            return back()->withInput()->with('error', 'Email or password incorrect!');
        }

    }

    public function getLogout(){
        Auth::logout();
//        return redirect()->intended('/');

        if (Auth::guest()) {
            return redirect()->guest('/');
        }
    }
}
