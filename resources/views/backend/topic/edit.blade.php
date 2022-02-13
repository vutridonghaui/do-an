@extends('backend/layout')
@section('title', 'Home')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Topic product</h1>
        </div>
    </div><!--/.row-->

    <div class="row">
        <div class="col-xs-12 col-md-5 col-lg-5">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Edit Topic
                </div>
                <div class="panel-body">
                    @include('errors.note')
                    <form action="" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Topic Name:</label>
                            <input required type="text" name="topic_name" class="form-control" placeholder="Enter topic name..." value="{{!(empty(old('topic_name'))) ? old('topic_name') : $topic->topic_name}}">
                        </div>
                        <div class="form-group">
                            <label>Description:</label>
                            <input required type="text" name="description" class="form-control" placeholder="Enter description..." value="{{!(empty(old('description'))) ? old('description') : $topic->description}}">
                        </div>
                        <div class="form-group" >
                            <label>Status:</label></br>
                            <div class="status" >
                                @if($topic->status == 1)
                                    <input type="radio" id="enable" name="status" value="1" checked><label for="male">Enable</label><br>
                                    <input type="radio" id="disable" name="status" value="0"><label for="female">Disable</label><br>
                                @else
                                    <input type="radio" id="enable" name="status" value="1" ><label for="male">Enable</label><br>
                                    <input type="radio" id="disable" name="status" value="0" checked><label for="female">Disable</label><br>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="edit_btn" class="form-control btn btn-primary" value="Edit Topic" onclick="return confirm('Do you want to add new topic?')">
                        </div>
                        <div class="form-group">
                            <a href="{{ asset('admin/topic') }}" class="form-control btn btn-danger">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!--/.row-->

    <script>


    </script>


@endsection
