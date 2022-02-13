@extends('backend/layout')
@section('title', 'Edit Color')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Color Product</h1>
        </div>
    </div><!--/.row-->

    <div class="row">
        <div class="col-xs-12 col-md-5 col-lg-5">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Edit Color
                </div>
                <div class="panel-body">
                    @include('errors.note')
                    <form action="" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>color Name:</label>
                            <input required type="text" name="color_name" class="form-control" placeholder="..." value="{{$color->color_name}}">
                        </div>
                        <div class="form-group" >
                            <label>Status:</label></br>
                            <div class="status" >
                                @if($color->status == 1)
                                    <input type="radio" id="enable" name="status" value="1" checked><label for="enable">Enable</label><br>
                                    <input type="radio" id="disable" name="status" value="0"><label for="disable">Disable</label><br>
                                @else
                                    <input type="radio" id="enable" name="status" value="1" ><label for="enable">Enable</label><br>
                                    <input type="radio" id="disable" name="status" value="0" checked><label for="disable">Disable</label><br>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="edit_btn" class="form-control btn btn-primary" value="Edit color" onclick="return confirm('Do you want to add new color?')">
                        </div>
                        <div class="form-group">
                            <a href="{{ asset('admin/color') }}" class="form-control btn btn-danger">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!--/.row-->

@endsection
