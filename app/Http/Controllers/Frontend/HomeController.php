<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Color;
use App\Models\Comment;
use App\Models\Product;
use App\Models\ProductColor;
use App\Models\ProductSize;
use App\Models\Size;
use App\Models\Topic;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function getHome(){
        $products = DB::table('products')->join('topics','products.topic_id','=','topics.id')
            ->select(
                'products.id as product_id',
                'products.*',
                'topics.*'
            )
            ->paginate(8);

        $latestBlogs = DB::table('blogs')
            ->join('blog_categories','blogs.blog_category_id','=','blog_categories.id')
            ->select(
                'blogs.id as blog_id',
                'blogs.*',
                'blog_categories.*',
                'blogs.created_at as created_blog'
            )
            ->orderBy('created_blog', 'desc')
            ->paginate(7);

        return view('frontend/index')
            ->with('products', $products)
            ->with('latestBlogs', $latestBlogs);
    }

    public function getAboutUs(){

        return view('frontend/about-us');
    }


    public function getProduct($id){

        $product = Product::where('id',$id)->with('comment')->first();
//        dd($product);
        $topicList= Topic::all();

        $colorList = Color::all();
        $colorChoosed = ProductColor::where('product_id', $id)->pluck('color_id')->toArray();

        $sizeList = Size::all();
        $sizeChoosed = ProductSize::where('product_id', $id)->pluck('size_id')->toArray();

        $specialProduct = Product::where('featured',1)->paginate(10);

        $relatedProduct = Product::where('topic_id', $product->topic_id)->paginate(10);

        return view('frontend/product')
            ->with('product', $product)
            ->with('topicList', $topicList)
            ->with('colorList', $colorList)
            ->with('colorChoosed', $colorChoosed)
            ->with('sizeList', $sizeList)
            ->with('sizeChoosed', $sizeChoosed)
            ->with('specialProduct', $specialProduct)
            ->with('relatedProduct', $relatedProduct);
    }

    public function getCart(){

        return view('frontend/cart');
    }

    /*public function getCheckout(){

        return view('frontend/checkout');
    }*/

    public function getBlog(){

        return view('frontend/single_blog');
    }

    public function getWishlist(){

        return view('frontend/wishlist');
    }

    public function getMyAccount(){

        return view('frontend/my-account');
    }

    public function getShop(Request $request){
        if($request->keyword ==''){
        $products = DB::table('products')->join('topics','products.topic_id','=','topics.id')
            ->select(
                'products.id as product_id',
                'products.*',
                'topics.*'
            )
            ->paginate(12);
        }else{
            $products = DB::table('products')->join('topics','products.topic_id','=','topics.id')
                ->select(
                    'products.id as product_id',
                    'products.*',
                    'topics.*'
                )
                ->where('product_name', 'LIKE', '%' . $request->keyword . '%')
                ->paginate(12);
        }

        $specialProduct = Product::where('featured',1)->paginate(3);

        $topicList= Topic::all();

        $colorList = Color::all();
        return view('frontend/shop')->with('products', $products)
            ->with('topicList', $topicList)
            ->with('colorList', $colorList)
            ->with('specialProduct', $specialProduct)
            ;
    }




}
