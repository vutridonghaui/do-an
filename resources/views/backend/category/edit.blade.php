@extends('backend/layout')
@section('title', 'Edit Category')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Category Blog</h1>
        </div>
    </div><!--/.row-->

    <div class="row">
        <div class="col-xs-12 col-md-5 col-lg-5">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Edit Blog Category
                </div>
                <div class="panel-body">
                    @include('errors.note')
                    <form action="" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Category Name:</label>
                            <input required type="text" name="blog_category_name" class="form-control" placeholder="Enter category name..." value="{{$blogCategory->blog_category_name}}">
                        </div>
                        <div class="form-group">
                            <label>Description:</label>
                            <input required type="text" name="description" class="form-control" placeholder="Enter description..." value="{{$blogCategory->description }}">
                        </div>
                        <div class="form-group" >
                            <label>Status:</label></br>
                            <div class="status" >
                                @if($blogCategory->status == 1)
                                    <input type="radio" id="enable" name="status" value="1" checked><label for="enable">Enable</label><br>
                                    <input type="radio" id="disable" name="status" value="0"><label for="disable">Disable</label><br>
                                @else
                                    <input type="radio" id="enable" name="status" value="1" ><label for="enable">Enable</label><br>
                                    <input type="radio" id="disable" name="status" value="0" checked><label for="disable">Disable</label><br>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="edit_btn" class="form-control btn btn-primary" value="Edit Category" onclick="return confirm('Do you want to add new category?')">
                        </div>
                        <div class="form-group">
                            <a href="{{ asset('admin/blog_category') }}" class="form-control btn btn-danger">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!--/.row-->

    <script>


    </script>


@endsection
