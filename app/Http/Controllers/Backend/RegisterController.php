<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterAdminRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function getRegister(){
        return view('backend.register');
    }

    public function postRegister(RegisterAdminRequest $request){
        DB::beginTransaction();
        try{
            $user = new User();
            $user->name = $request->first_name.' '.$request->last_name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->role_id = 1;
            $user->status = 1;
            $user->remember_token = Str::random(10);

            $user->save();
            DB::commit();
            session()->flash('success', 'Register successfully! Waiting Super Admin Approve!');
        }catch (\Exception $e){
            DB::rollBack();
            session()->flash('failed', 'Register failed.');
        }
        return redirect('login');
    }


    public function postRegisterCustomer(RegisterAdminRequest $request){
        $user = new User();
        $user->name = $request->first_name.' '.$request->last_name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role_id = 2;
        $user->status = 1;
        $user->remember_token = Str::random(10);

        $user->save();

        return redirect('login');
    }

}
