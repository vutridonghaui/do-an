<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddTopicRequest;
use App\Http\Requests\EditTopicRequest;
use App\Models\Topic;
use Illuminate\Http\Request;
//use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Database\Eloquent\Builder;
use RealRashid\SweetAlert\Facades\Alert;


class TopicController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getTopic()
    {
        $data['topicList'] = Topic::paginate(7);
        return view('backend/topic/topic', $data)->with('i', $i=1);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postAddTopic(AddTopicRequest $request){
        DB::beginTransaction();
        try{
            $topic = new Topic();
            $topic->topic_name = $request->topic_name;
            $topic->description = $request->description;
            $topic->status = $request->status;
            $topic->save();
            DB::commit();
            session()->flash('success', 'Created successfully.');
        }catch (\Exception $e){
            DB::rollBack();
            session()->flash('failed', 'Created failed.');
        }
        return back();
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getEditTopic($id)
    {
        $data['topic'] = Topic::where('id', $id)->first();

        return View::make('backend/topic/edit')->with(['topic'=>$data['topic']]);
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postEditTopic(EditTopicRequest $request , $id)
    {
        DB::beginTransaction();
        try {
            $topic = Topic::where('id', $id)->first();
            $topic->topic_name = $request->topic_name;
            $topic->description = $request->description;
            $topic->status = $request->status;
            $topic->save();
            DB::commit();
            session()->flash('success', 'Updated successfully.');
        }catch(\Exception $e){
            DB::rollBack();
            session()->flash('failed', 'Updated failed.');
        }
        return redirect()->intended('admin/topic');

    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function getDeleteTopic($id){
        DB::beginTransaction();
        try {
            Topic::destroy($id);
            DB::commit();
            session()->flash('success', 'Deleted successfully.');
        }catch(\Exception $e){
            DB::rollBack();
            session()->flash('failed', 'Updated failed.');
        }
        return back();
    }

//    public function getSearchTopic(Request $request){
//        $key = $request->search;
//        $data['topicList'] = Topic::where('id', 'like', $key)->orWhere('topic_name', 'like', $key)->get();
//        return  $data;
//    }

}
