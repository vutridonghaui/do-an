<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function getListAdmin()
    {
        $data['adminList'] = DB::table('users')->where('role_id', 1)->paginate(10);
        return view('backend/admin/list', $data)->with('i', $i=1);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
   /* public function postAddTopic(AddTopicRequest $request){
        $topic = new Topic();
        $topic->topic_name = $request->topic_name;
        $topic->description = $request->description;
        $topic->status = $request->status;
        //$topic->topic_slug = Str::slug($request->cateName);
        $topic->save();
        return back();
    }*/

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getEditAdmin($id)
    {

        $data['admin'] = DB::table('users')->where('role_id', 1)->where('id', $id)->first();
        //dd($data);
        //return view('backend/topic/edit', $data);
        return view('backend/admin/edit')->with(['admin'=>$data['admin']]);
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postEditAdmin(Request $request , $id)
    {
        DB::beginTransaction();
        try{
            $name = $request->name;
            $email = $request->email;
            $phone = $request->phone;
            $address = $request->address_admin;
            $gender = $request->gender;
            $birthday = $request->birthday;
            $status = $request->status;
            if(!empty($request->password)){
                $password = $request->password;
            }

            $user = DB::table('users')->where('id',$id);

            $user->update([
                    'email' => $email,
                    'name' => $name,
                    'phone' => $phone,
                    'address'=> $address,
                    'gender' => $gender,
                    'birthday' => $birthday,
                    'password' =>  !(empty($request->password)) ? Hash::make($password) : $user->first()->password,
                    'status' => $status
                ]);
            DB::commit();
            session()->flash('success', 'Updated successfully.');
        }catch (\Exception $e){
            DB::rollBack();
            session()->flash('failed', 'Updated failed.');
        }
        return redirect()->intended('admin/admin_manager');

    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function getDeleteAdmin($id){
        DB::beginTransaction();
        try{
            DB::table('users')->where('id',$id)->delete();
            DB::commit();
            session()->flash('success', 'Deleted successfully.');
        }catch (\Exception $e){
            DB::rollBack();
            session()->flash('failed', 'Deleted failed.');
        }
        return back();
    }
}
