<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function getLogin(){
        return view('backend.login');
    }

    public function postLogin(Request $request){
        $arr = ['email'=>$request->email, 'password'=>$request->password, 'role_id'=>[0,1], 'status'=>1 ];

        if($request->rememberPasswordCheck == 'Remember password'){
            $remember = true;
        }
        else{
            $remember = false;
        }

        if(Auth::attempt($arr, $remember)){
            return redirect()->intended('admin/home');
        }
        else{
            return back()->withInput()->with('error', 'Email or password incorrect!');
        }

    }



}
