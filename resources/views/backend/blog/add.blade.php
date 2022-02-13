@extends('backend/layout')
@section('title', 'Add Blog')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Blog</h1>
        </div>
    </div><!--/.row-->

    <div class="row center align-content-center">
        <div class="col-xs-12 col-md-12 col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Add New Blog</div>
                <div class="panel-body">
                    <form method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        @include('errors.note')
                        <div class="row" style="margin-bottom:40px">
                            <div class="col-xs-8">
                                <div class="form-group">
                                    <label>Blog Title: </label>
                                    <input required type="text" name="title" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Short Description: </label>
                                    <input required type="text" name="blog_short_description" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Blog Thumbnail: </label>
                                    <input required id="img" type="file" name="blog_thumbnail" class="form-control hidden"
                                           onchange="previewFile(this)">
                                    <img id="previewImg" class="blog_thumbnail" width="300px" src="img/new_seo-10-512.png">
                                </div>
                                <div class="form-group">
                                    <label>Blog Category: </label>
                                    <select required name="blog_category" class="form-control">
                                        @foreach($categories as $cate)
                                            <option value="{{ $cate->id }}">{{ $cate->blog_category_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Content: </label>
                                    <textarea class="ckeditor" required name="blog_content"></textarea>
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
                                    <label>Status: </label>
                                    <div class="status" >
                                        <input type="radio" id="enable" name="status" value="1" checked><label for="male">Enable</label><br>
                                        <input type="radio" id="disable" name="status" value="0"><label for="female">Disable</label><br>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="submit" name="edit_btn" class="form-control btn btn-primary" value="Add Blog" onclick="return confirm('Do you want to add new blog?')">
                                </div>
                                <div class="form-group">
                                    <a href="{{ asset('admin/blog') }}" class="form-control btn btn-danger">Cancel</a>
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
