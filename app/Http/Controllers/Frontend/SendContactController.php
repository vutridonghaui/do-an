<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\InfoContactRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendContactController extends Controller
{
    public function getContact(){

        return view('frontend/contact');
    }

    public function postContact(InfoContactRequest $request){
        $data['info'] = $request->all();
//        dd($data['info']);
        $email = $request->email;

        //send mail
        Mail::send('frontend.email-contact', $data, function ($message) use ($email) {
            $message->from('lamtuancong2807@gmail.com', 'CongLam'); //admin

            $message->to($email, $email); //khach hang

            $message->cc('conglt2807@gmail.com', 'Flowers World'); //chu cua hang

            $message->subject('Bill FlowersWorld Confirmation');
        });

        return redirect('complete_contact');
    }


    public function getCompleteContact(){

        return view('frontend.complete-contact');
    }
}
