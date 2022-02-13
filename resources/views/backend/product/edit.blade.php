@extends('backend/layout')
@section('title', 'Edit Product')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Product</h1>
        </div>
    </div><!--/.row-->

    <div class="row center align-content-center">
        <div class="col-xs-12 col-md-12 col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Edit Product</div>
                <div class="panel-body">
                    <form method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                         {{--                       @include('errors.note')--}}
                        <div class="row" style="margin-bottom:40px">
                            <div class="col-xs-8">
                                <div class="form-group">
                                    <label>Product Name: </label>
                                    <input required type="text" name="product_name" class="form-control" value="{{$product->product_name}}">
                                </div>
                                <div class="form-group">
                                    <label>Price: </label>
                                    <input required type="number" name="price" class="form-control" value="{{$product->price}}">
                                </div>
                                <div class="form-group">
                                    <label>Quantity: </label>
                                    <input required type="number" name="qty" class="form-control" value="{{$product->qty}}">
                                </div>
                                <div class="form-group">
                                    <label  for="thumbnail">Choose Thumbnail:  </label>
                                    <input id="img" type="file" name="thumbnail" class="form-control hidden"
                                           onchange="loadFile(event)" value="{{ asset('storage/thumbnail/'.$product->thumbnail) }}">
                                    <img id="previewImg" class="thumbnail" width="300px" src="{{ asset('storage/thumbnail/'.$product->thumbnail) }}">
                                </div>
                                <div class="form-group">
                                    <label>Accessories: </label>
                                    <input required type="text" name="accessories" class="form-control" value="{{$product->accessories}}">
                                </div>
                                <div class="form-group">
                                    <label>Promotion: </label>
                                    <input required type="text" name="sale" class="form-control" value="{{$product->sale_price}}">
                                </div>
                                <div class="form-group">
                                    <label>Title: </label>
                                    <input required type="text" name="title" class="form-control" value="{{$product->title}}">
                                </div>
                                <div class="form-group">
                                    <label>Status:</label></br>
                                    <div class="status" >
                                        @if($product->status == 1)
                                            <input type="radio" id="enable" name="status" value="1" checked><label for="male">Enable</label><br>
                                            <input type="radio" id="disable" name="status" value="0"><label for="female">Disable</label><br>
                                        @else
                                            <input type="radio" id="enable" name="status" value="1" ><label for="male">Enable</label><br>
                                            <input type="radio" id="disable" name="status" value="0" checked><label for="female">Disable</label><br>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Topic: </label>
                                    <select required name="topic" class="form-control">
                                        @foreach($topicList as $topic)
                                            <option value="{{ $topic->id }}"
                                                    @if ($product->topic_id == $topic->id)
                                                    selected
                                                @endif >
                                                {{  $topic->topic_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Size: </label>
                                    @foreach($sizeList as $size)
                                            <div class="form-check form-check-inline" >
                                                @if(in_array($size->id, $sizeChoosed ))
                                                    <input class="form-check-input" name="size[{{$size->id}}]" type="checkbox" checked id="inlineCheckbox1" value="{{$size->id}}" />
                                                    <label class="form-check-label" for="inlineCheckbox1">{{$size->size_name }}</label>
                                                @else
                                                    <input class="form-check-input" name="size[{{$size->id}}]" type="checkbox" id="inlineCheckbox1" value="{{$size->id}}" />
                                                    <label class="form-check-label" for="inlineCheckbox1">{{$size->size_name }}</label>
                                                @endif
                                            </div>
                                    @endforeach

                                </div>
                                <div class="form-group">
                                    <label>Color: </label>
                                    @foreach($colorList as $color)
                                        <div class="form-check form-check-inline" >
                                            @if(in_array($color->id, $colorChoosed ))
                                                <input class="form-check-input" name="color[{{$color->id}}]" type="checkbox" checked id="inlineCheckbox1" value="{{$color->id}}" />
                                                <label class="form-check-label" for="inlineCheckbox1">{{$color->color_name }}</label>
                                            @else
                                                <input class="form-check-input" name="color[{{$color->id}}]" type="checkbox" id="inlineCheckbox1" value="{{$color->id}}" />
                                                <label class="form-check-label" for="inlineCheckbox1">{{$color->color_name }}</label>
                                            @endif
                                        </div>
                                    @endforeach

                                </div>

                                <div class="form-group">
                                    <label>Featured Product:</label></br>
                                    <div class="status" >
                                        @if($product->featured == 1)
                                            <input type="radio" id="enable" name="featured" value="1" checked><label for="enable">Yes</label><br>
                                            <input type="radio" id="disable" name="featured" value="0"><label for="disable">No</label><br>
                                        @else
                                            <input type="radio" id="enable" name="featured" value="1" ><label for="enable">Yes</label><br>
                                            <input type="radio" id="disable" name="featured" value="0" checked><label for="disable">No</label><br>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Description: </label>
                                    <textarea class="ckeditor" required name="desc" >{{$product->description }}</textarea>
                                    <script type="text/javascript">
                                        var editor = CKEDITOR.replace('desc', {
                                            language: 'vi',
                                            filebrowserImageBrowseUrl: '../../editor/ckfinder/ckfinder.html?Type=Images',
                                            filebrowserFlashBrowseUrl: '../../editor/ckfinder/ckfinder.html?Type=Flash',
                                            filebrowserImageUploadUrl: '../../editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                                            filebrowserFlashUploadUrl: '../../editor/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
                                        });
                                    </script>
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="edit_btn" class="form-control btn btn-primary" value="Update" onclick="return confirm('Do you want to edit this product?')">
                                </div>
                                <div class="form-group">
                                    <a href="{{ asset('admin/product') }}" class="form-control btn btn-danger">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div><!--/.row-->

    <script>
        var loadFile = function(event) {
            var output = document.getElementById('previewImg');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };
    </script>

@endsection
