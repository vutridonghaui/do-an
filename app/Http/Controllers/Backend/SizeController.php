<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddSizeRequest;
use App\Http\Requests\EditSizeRequest;
use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class SizeController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getSize()
    {
        $data['sizeList'] = Size::paginate(10);
        return view('backend/size/size', $data)->with('i', $i=1);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postAddSize(AddSizeRequest $request){
        DB::beginTransaction();
        try{
            $size = new Size;
            $size->size_name = $request->size_name;
            $size->description = $request->description;
            $size->status = $request->status;
            $size->save();
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
    public function getEditSize($id)
    {
        $data['size'] = Size::where('id', $id)->first();
        return View::make('backend/size/edit')->with(['size'=>$data['size']]);
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postEditSize(EditSizeRequest $request , $id)
    {
        DB::beginTransaction();
        try{
            $size = Size::where('id', $id)->first();
            $size->size_name = $request->size_name;
            $size->description = $request->description;
            $size->status = $request->status;
            $size->save();
            DB::commit();
            session()->flash('success', 'Updated successfully.');
        }catch (\Exception $e){
            DB::rollBack();
            session()->flash('failed', 'Updated failed.');
        }
        return redirect()->intended('admin/size');

    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function getDeleteSize($id){
        DB::beginTransaction();
        try{
            Size::destroy($id);
            DB::commit();
            session()->flash('success', 'Deleted successfully.');
        }catch (\Exception $e){
            DB::rollBack();
            session()->flash('failed', 'Deleted failed.');
        }
        return back();
    }

}
