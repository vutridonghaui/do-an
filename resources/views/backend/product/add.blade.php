@extends('backend/layout')
@section('title', 'Add Product')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Product</h1>
        </div>
    </div><!--/.row-->

    <div class="row center align-content-center">
        <div class="col-xs-12 col-md-12 col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Add Product</div>
                <div class="panel-body">
                    <form method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
{{--                        @include('errors.note')--}}
                        <div class="row" style="margin-bottom:40px">
                            <div class="col-xs-8">
                                <div class="form-group">
                                    <label>Product Name: </label>
                                    <input required type="text" name="product_name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Price: </label>
                                    <input required type="number" name="price" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Quantity: </label>
                                    <input required type="number" name="qty" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Thumbnail: </label>
                                    <input required id="img" type="file" name="thumbnail" class="form-control hidden"
                                           onchange="previewFile(this)">
                                    <img id="previewImg" class="thumbnail" width="300px" src="img/new_seo-10-512.png">
                                </div>

                                <div class="form-group">
                                    <label>Accessories: </label>
                                    <input required type="text" name="accessories" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Discount: </label>
                                    <input required type="text" name="sale" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Title: </label>
                                    <input required type="text" name="title" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Status: </label>
                                    <div class="status" >
                                        <input type="radio" id="enable" name="status" value="1" checked><label for="enable">Enable</label><br>
                                        <input type="radio" id="disable" name="status" value="0"><label for="disable">Disable</label><br>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Topic: </label>
                                    <select required name="topic" class="form-control">
                                        @foreach($topics as $topic)
                                            <option value="{{ $topic->id }}">{{ $topic->topic_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Size: </label>
                                    @foreach($sizes as $size)
                                        <div class="form-check form-check-inline" >
                                            <input class="form-check-input" name="size[{{$size->id}}]" type="checkbox" id="inlineCheckbox1" value="{{$size->id}}" />
                                            <label class="form-check-label" for="inlineCheckbox1">{{$size->size_name }}</label>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="form-group">
                                    <label>Color: </label>
                                    @foreach($colors as $color)
                                        <div class="form-check form-check-inline" >
                                            <input class="form-check-input" name="color[{{$color->id}}]" type="checkbox" id="inlineCheckbox1" value="{{$color->id}}" />
                                            <label class="form-check-label" for="inlineCheckbox1">{{$color->color_name}}</label>
                                        </div>
                                    @endforeach

                                </div>
                                <div class="form-group">
                                    <label>Featured Product:  </label>
                                    <div class="status" >
                                        <input type="radio" id="enable" name="featured" value="1" checked><label for="enable">Yes</label><br>
                                        <input type="radio" id="disable" name="featured" value="0"><label for="disable">No</label><br>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Description: </label>
                                    <textarea class="ckeditor" required name="desc"></textarea>
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
                                    <input type="submit" name="edit_btn" class="form-control btn btn-primary" value="Add product" onclick="return confirm('Do you want to add new product?')">
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
        function previewFile(input){
            var file = $("input[type=file]").get(0).files[0];

            if(file){
                var reader = new FileReader();

                reader.onload = function(){
                    $("#previewImg").attr("src", reader.result);
                }

                reader.readAsDataURL(file);
            }
        }
    </script>

@endsection
