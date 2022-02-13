<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\AddBlogRequest;
use App\Http\Requests\EditBlogRequest;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getBlog()
    {
        $blogs = DB::table('blogs')
            ->join('blog_categories','blogs.blog_category_id','=','blog_categories.id')
            ->select(
                'blogs.id as blog_id',
                'blogs.*',
                'blog_categories.*'
            )
            ->paginate(5);

        return view('backend.blog.list')->with('blogs',$blogs)->with('i', $i=1);

    }

    public function getAddBlog(){
        $categories = BlogCategory::all();

        return view('backend.blog.add')
            ->with('categories', $categories)
            ;
    }

    public function postAddBlog(AddBlogRequest $request){
        DB::beginTransaction();
        try{
            $filename = $request->blog_thumbnail->getClientOriginalName(); //get filename

            $blog = new Blog();

            $blog->title = $request->title;
            $blog->blog_short_description = $request->blog_short_description;
            $blog->thumbnail = $filename;
            $blog->content = $request->blog_content;
            $blog->blog_category_id = $request->blog_category;
            $blog->status =  $request->status;

            $blog->save();

            $file = $request->blog_thumbnail;
            $file->move('storage/blog_thumbnail', $file->getClientOriginalName());
            DB::commit();
            session()->flash('success', 'Created successfully.');
//            dd($blog);
        }catch (\Exception $e){
            DB::rollBack();
            session()->flash('failed', 'Created failed.');
        }

        return redirect('admin/blog');

    }




    public function getEditBlog($id){
        $blog = Blog::where('id',$id)->first();
        $categories= BlogCategory::all();

        return view('backend.blog.edit')
            ->with('blog', $blog)
            ->with('categories', $categories);
    }


    public function postEditBlog($id, EditBlogRequest $request){

        DB::beginTransaction();
        try{

            $blog = Blog::where('id', $id)->first();

            $blog->title = $request->title;
            $blog->blog_short_description = $request->blog_short_description;
            $blog->content = $request->blog_content;
            $blog->blog_category_id = $request->blog_category;
            $blog->status =  $request->status;

            if($request->hasFile('blog_thumbnail')){
                $img = $request->blog_thumbnail->getClientOriginalName();
                $blog->thumbnail = $img;

                $file = $request->blog_thumbnail;
                $file->move('storage/blog_thumbnail', $file->getClientOriginalName());
            }
            $blog->save();

            DB::commit();
            session()->flash('success', 'Updated successfully.');
        }catch (\Exception $e){
            DB::rollBack();
            dd($e);
            session()->flash('failed', 'Updated failed.');
        }
        return redirect('admin/blog');
    }

    public function getDeleteBlog($id){
        DB::beginTransaction();
        try{
            Blog::destroy($id);
            DB::commit();
            session()->flash('success', 'Deleted successfully.');
        }catch (\Exception $e){
            DB::rollBack();
            session()->flash('failed', 'Deleted failed.');
        }
        return back();
    }

    public function search(Request $request){

        $blogs = DB::table('blogs')
            ->join('blog_categories','blogs.blog_category_id','=','blog_categories.id')
            ->select(
                'blogs.id as blog_id',
                'blogs.*',
                'blog_categories.*'
            )
            ->where('title', 'LIKE', '%' . $request->keyword . '%')
            ->orWhere('blog_category_name', 'LIKE', '%' . $request->keyword . '%')
            ->paginate(10);

        return view('backend.blog.list')->with('blogs',$blogs)->with('i', $i=1);
    }


}
