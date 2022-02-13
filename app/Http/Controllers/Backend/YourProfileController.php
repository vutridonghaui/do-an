<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChangeInfoProfileRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class YourProfileController extends Controller
{
    public function getYourProfile(){
        $yourProfile = Auth::user();

        return view('backend.profile.your_profile')
            ->with('yourProfile', $yourProfile);
    }

    public function getEditYourProfile(){
        $yourProfile = Auth::user();
        return view('backend.profile.edit')
            ->with('yourProfile', $yourProfile);
    }

    public function postEditYourProfile(ChangeInfoProfileRequest $request){

        $name = $request->name;
        $phone = $request->phone;
        $address = $request->address;
        $gender = $request->gender;
        $birthday = $request->birthday;
        if(!empty($request->old_password)){
            $oldPassword = $request->old_password;
        }

        if(!empty($request->new_password)){
            $newPassword = $request->new_password;
        }

        if(!empty($request->confirm_password)){
            $confirmPassword = $request->confirm_password;
        }

        $user = DB::table('users')->where('id', Auth::user()->id)
            ->update(['name' => $name,
                'phone' => $phone,
                'address'=> $address,
                'gender' => $gender,
                'birthday' => $birthday,
                'password' =>  !(empty($request->confirm_password)) ? Hash::make($request->confirm_password) : Auth::user()->getAuthPassword(),
                'avatar'=>(!empty($request->avatar)) ? $request->avatar->getClientOriginalName() : Auth::user()->avatar
                ]);

        if($request->hasFile('avatar')){
            $file = $request->avatar;
            $file->move('storage/avatar', $file->getClientOriginalName());
        }

        return redirect('/admin/your_profile');

    }

}
