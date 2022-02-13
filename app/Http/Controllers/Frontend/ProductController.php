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
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{

    public function postComment(Request $request){
        $comment = new Comment();
        $comment->customer_id = (!empty(Auth::user()->id)) ? Auth::user()->id : null;
        $comment->product_id = $request->product_id;
        $comment->content_comment = $request->comment_content;
        $comment->star_rate = $request->ratings;
        $comment->status = 1;
        $comment->save();

        $product = Product::where('id',$request->product_id)->with('comment')->first();

        $topicList= Topic::all();

        $colorList = Color::all();
        $colorChoosed = ProductColor::where('product_id', $request->product_id)->pluck('color_id')->toArray();

        $sizeList = Size::all();
        $sizeChoosed = ProductSize::where('product_id', $request->product_id)->pluck('size_id')->toArray();

        $specialProduct = Product::where('featured',1)->paginate(10);

        $relatedProduct = Product::where('topic_id', $product->topic_id)->paginate(10);

        return redirect()->intended('product_detail/'.$request->product_id)
            ->with('product', $product)
            ->with('topicList', $topicList)
            ->with('colorList', $colorList)
            ->with('colorChoosed', $colorChoosed)
            ->with('sizeList', $sizeList)
            ->with('sizeChoosed', $sizeChoosed)
            ->with('specialProduct', $specialProduct)
            ->with('relatedProduct', $relatedProduct);
    }



}
