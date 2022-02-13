@extends('backend/layout')
@section('title', 'Topic')
@section('content')
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Topic</h2>
        </div>
    </div><!--/.row-->
    <hr>

    <div class="row">
        <div class="input-group" style="width:40%; margin: auto">
            {{--<input type="text" class="form-control" name="search" placeholder="Search topic...">
            <div class="input-group-append">
                <button id="search_topic" class="btn btn-secondary" type="button">
                    <i class="fa fa-search"></i>
                </button>
            </div>--}}
        </div>
        <div class="col-xs-12 col-md-12 col-lg-10" style="margin: auto">
            <div class="panel panel-primary" style="width:70%; margin: auto">
                <div class="panel-heading">
                    <h3>Add topic</h3>
                </div>
                <div class="panel-body" style="border: solid gray; padding: 20px">
                    @include('errors.note')
                    <form action="" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Topic Name:</label>
                            <input required type="text" name="topic_name" class="form-control" {{old('topic_name')}} placeholder="Input topic name...">
                        </div>
                        <div class="form-group">
                            <label>Description:</label>
                            <input required type="text" name="description" class="form-control" {{old('description')}} placeholder="Input description...">
                        </div>
                        <div class="form-group" >
                            <label>Status:</label></br>
                            <div class="status" >
                                <input type="radio" id="enable" name="status" value="1" checked><label for="male" >Enable</label><br>
                                <input type="radio" id="disable" name="status" value="0"><label for="female">Disable</label><br>
                            </div>
                        </div>
                        <input type="submit" name="submit" class="btn btn-primary" value="Add Topic" onclick="return confirm('Do you want to add new topic?')">
                    </form>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-md-12 col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3>Topic List</h3>
                </div>
                <div class="panel-body">
                    <div class="bootstrap-table">
                        <table class="table table-bordered">
                            <thead>
                            <tr class="bg-primary">
                                <th>NO</th>
                                <th>Topic Name</th>
                                <th>Topic Description</th>
                                <th style="width:30%">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($topicList as $item)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{ $item->topic_name }}</td>
                                    <td>{{ $item->description }}</td>
                                    <td>
                                        <a href="{{ asset('admin/topic/edit/'.$item->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                                        <a href="{{ asset('admin/topic/delete/'.$item->id) }}" onclick="return confirm('Do you want to delete this topic?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div id="pagination">
                    {{ $topicList->links() }}
                </div>
            </div>
        </div>
    </div><!--/.row-->


    {{--<script>
        $(document).ready(function () {
            $('#search_topic').click(function () {

                e.preventDefault();
                var url = route('admin.topic.search')
                $.ajax({
                    url: '',
                    type: 'GET',
                    dataType: 'html',
                    data: {
                        a: "content abc",
                        b: "content bcd"
                    }
                }).done(function(ketqua) {
                    $('#noidung').html(ketqua);
                });

            })

        });
    </script>--}}

@endsection
