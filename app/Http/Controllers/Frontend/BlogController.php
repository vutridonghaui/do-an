<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function getBlog(){
        $blogs = DB::table('blogs')
            ->join('blog_categories','blogs.blog_category_id','=','blog_categories.id')
            ->select(
                'blogs.id as blog_id',
                'blogs.*',
                'blog_categories.*',
                'blogs.created_at as created_blog'
            )
            ->orderBy('created_blog', 'desc')
            ->paginate(5);

        $latest = DB::table('blogs')
            ->join('blog_categories','blogs.blog_category_id','=','blog_categories.id')
            ->select(
                'blogs.id as blog_id',
                'blogs.*',
                'blog_categories.*',
                'blogs.created_at as created_blog'
            )
            ->orderBy('created_blog', 'desc')
            ->paginate(7);

         return view('frontend/blog')
             ->with('blogs',$blogs)
             ->with('latest', $latest);

    }

    public function getDetail($id){
        $blog = Blog::join('blog_categories','blogs.blog_category_id','=','blog_categories.id')
            ->where('blogs.id', $id)
            ->select(
                'blogs.id as blog_id',
                'blogs.*',
                'blog_categories.*',
                'blogs.created_at as created_blog',
                'blogs.id as id'
            )
            ->with('comment')
            ->first();

//        dd($blog);
        $latest = Blog::join('blog_categories','blogs.blog_category_id','=','blog_categories.id')
            ->select(
                'blogs.id as blog_id',
                'blogs.*',
                'blog_categories.*',
                'blogs.created_at as created_blog'
            )
            ->orderBy('created_blog', 'desc')
            ->paginate(7);

        return view('frontend.blog-detail')
            ->with('blog', $blog)
            ->with('latest', $latest);

    }

    public function postCommentBlog(Request $request){
        $comment = new Comment();
        $comment->customer_id = (!empty(Auth::user()->id)) ? Auth::user()->id : null;
        $comment->blog_id =  $request->blog_id;
        $comment->content_comment = $request->comment_content;
        $comment->star_rate = $request->ratings;
        $comment->status = 1;
        $comment->save();

        $blog = Blog::join('blog_categories','blogs.blog_category_id','=','blog_categories.id')
            ->where('blogs.id', $request->blog_id)
            ->select(
                'blogs.id as blog_id',
                'blogs.*',
                'blog_categories.*',
                'blogs.created_at as created_blog',
                'blogs.id as id'
            )
            ->with('comment')
            ->first();

//        dd($blog);
        $latest = Blog::join('blog_categories','blogs.blog_category_id','=','blog_categories.id')
            ->select(
                'blogs.id as blog_id',
                'blogs.*',
                'blog_categories.*',
                'blogs.created_at as created_blog'
            )
            ->orderBy('created_blog', 'desc')
            ->paginate(7);

        return
            redirect()->intended('detail/'.$request->blog_id)
            ->with('blog', $blog)
            ->with('latest', $latest);
    }

}
