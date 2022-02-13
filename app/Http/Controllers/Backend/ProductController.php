<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddProductRequest;
use App\Http\Requests\EditProductRequest;
use App\Models\Color;
use App\Models\Product;
use App\Models\ProductColor;
use App\Models\ProductSize;
use App\Models\Size;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function getProduct(){
        $products = DB::table('products')->join('topics','products.topic_id','=','topics.id')
            ->select(
                'products.id as product_id',
                'products.*',
                'topics.*'
            )
            ->paginate(10);

//        dd($products);
        return view('backend.product.list')->with('products',$products)->with('i', $i=1);
    }

    public function getAddProduct(){
        $topics = Topic::all();
        $colors = Color::all();
        $sizes = Size::all();
        return view('backend.product.add')
            ->with('topics', $topics)
            ->with('colors', $colors)
            ->with('sizes', $sizes);
    }

    public function postAddProduct(AddProductRequest $request){
        DB::beginTransaction();
        try {
            //insert product table
            $filename = $request->thumbnail->getClientOriginalName(); //get filename

            $product = new Product();
            $product->product_name = $request->product_name;
            $product->product_slug = Str::slug($request->product_name);
            $product->price = $request->price;
            $product->thumbnail = $filename;
            $product->accessories = $request->accessories;
            $product->sale_price = $request->sale;
            $product->description = $request->desc;
            $product->qty = $request->qty;
            $product->title = $request->title;
            $product->featured = $request->featured;
            $product->status = $request->status;
            $product->topic_id = $request->topic;

            $product->save();

            //        $request->thumbnail->storeAs('thumbnail', $filename);

            $file = $request->thumbnail;
            $file->move('storage/thumbnail', $file->getClientOriginalName());

            //insert product product_color
            $colors = [];
            foreach (array_keys($request->color) as $color) {
                $colors[] = [
                    'product_id' => $product->id,
                    'color_id' => $color,
                ];
            }
            ProductColor::insert($colors);

            //insert product product_size
            $sizes = [];
            foreach (array_keys($request->size) as $size) {
                $sizes[] = [
                    'product_id' => $product->id,
                    'size_id' => $size,
                ];
            }
            ProductSize::insert($sizes);
            DB::commit();
            session()->flash('success', 'Created successfully.');
        }catch(\Exception $e){
            DB::rollBack();
            session()->flash('failed', 'Created failed.');
        }
        return redirect('admin/product');

    }

    public function getEditProduct($id){
        $product = Product::where('id',$id)->first();
        $topicList= Topic::all();
        $colorList = Color::all();
        $colorChoosed = ProductColor::where('product_id', $id)->pluck('color_id')->toArray();


        $sizeList = Size::all();
        $sizeChoosed = ProductSize::where('product_id', $id)->pluck('size_id')->toArray();
        //dd($sizeChoosed ) ;
        return view('backend.product.edit')
            ->with('product', $product)
            ->with('topicList', $topicList)
            ->with('colorList', $colorList)
            ->with('colorChoosed', $colorChoosed)
            ->with('sizeList', $sizeList)
            ->with('sizeChoosed', $sizeChoosed);
    }

    public function postEditProduct($id, EditProductRequest $request){
        DB::beginTransaction();
        try {
            $product = Product::where('id', $id)->first();

            $product->product_name = $request->product_name;
            $product->product_slug = Str::slug($request->product_name);
            $product->price = $request->price;
            $product->accessories =  $request->accessories;
            $product->sale_price =  $request->sale;
            $product->description =  $request->desc;
            $product->qty =  $request->qty;
            $product->title =  $request->title;
            $product->featured =  $request->featured;
            $product->status =  $request->status;
            $product->topic_id =  $request->topic;

            //sync product color table
            $colors = $request['color'];
            $product->color()->sync($colors);

            //sync product size table
            $sizes = $request['size'];
            $product->size()->sync($sizes);

            if($request->hasFile('thumbnail')){

                $img = $request->thumbnail->getClientOriginalName();
                $product->thumbnail = $img;

                $file = $request->thumbnail;
                $file->move('storage/thumbnail', $file->getClientOriginalName());
            }
            $product->save();
            DB::commit();
            session()->flash('success', 'Updated successfully.');
        }catch(\Exception $e){
            DB::rollBack();
            session()->flash('failed', 'Updated failed.');
        }
        return redirect('admin/product');
    }

    public function getDeleteProduct($id){
        DB::beginTransaction();
        try {
            Product::destroy($id);

            DB::commit();
            session()->flash('success', 'Deleted successfully.');
        }catch(\Exception $e){
            DB::rollBack();
            session()->flash('failed', 'Deleted failed.');
        }
        return back();
    }


    public function search(Request $request){
        $products = DB::table('products')->join('topics','products.topic_id','=','topics.id')
                ->select(
                    'products.id as product_id',
                    'products.*',
                    'topics.*'
                )
                ->where('product_name', 'LIKE', '%' . $request->keyword . '%')
                ->orWhere('topic_name', 'LIKE', '%' . $request->keyword . '%')
                ->paginate(10);

        return view('backend.product.list')->with('products',$products)->with('i', $i=1);
    }
}
