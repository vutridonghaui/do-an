<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddColorRequest;
use App\Http\Requests\AddTopicRequest;
use App\Http\Requests\EditColorRequest;
use App\Models\Color;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ColorController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getcolor()
    {
        $data['colorList'] = Color::paginate(7);
        return view('backend/color/color', $data)->with('i', $i=1);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postAddColor(AddColorRequest $request){
        DB::beginTransaction();
        try{
            $color = new Color();
            $color->color_name = $request->color_name;
            $color->status = $request->status;
            $color->save();
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
    public function getEditColor($id)
    {
        $data['color'] = Color::where('id', $id)->first();

        return view('backend/color/edit', $data);
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postEditColor(EditColorRequest $request , $id)
    {
        DB::beginTransaction();
        try{
            $color = Color::where('id', $id)->first();
            $color->color_name = $request->color_name;
            $color->status = $request->status;
            $color->save();
            DB::commit();
            session()->flash('success', 'Updated successfully.');
        }catch (\Exception $e){
            DB::rollBack();
            session()->flash('failed', 'Updated failed.');
        }

        return redirect()->intended('admin/color');
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function getDeleteColor($id){
        DB::beginTransaction();
        try{
            Color::destroy($id);
            DB::commit();
            session()->flash('success', 'Deleted successfully.');
        }catch (\Exception $e){
            DB::rollBack();
            session()->flash('failed', 'Deleted failed.');
        }

        return back();
    }

//    public function getSearchcolor(Request $request){
//        $key = $request->search;
//        $data['colorList'] = color::where('id', 'like', $key)->orWhere('color_name', 'like', $key)->get();
//        return  $data;
//    }
}
