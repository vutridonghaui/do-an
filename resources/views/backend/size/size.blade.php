@extends('backend/layout')
@section('title', 'Home')
@section('content')
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Size Product</h2>
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
                    <h3>Add Size</h3>
                </div>
                <div class="panel-body" style="border: solid gray; padding: 20px">
                    @include('errors.note')
                    <form action="" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Size Name:</label>
                            <input required type="text" name="size_name" class="form-control" placeholder="...">
                        </div>
                        <div class="form-group">
                            <label>Description:</label>
                            <input required type="text" name="description" class="form-control" placeholder="...">
                        </div>
                        <div class="form-group" >
                            <label>Status:</label></br>
                            <div class="status" >
                                <input type="radio" id="enable" name="status" value="1" checked><label for="enable">Enable</label><br>
                                <input type="radio" id="disable" name="status" value="0"><label for="disable">Disable</label><br>
                            </div>
                        </div>
                        <input type="submit" name="submit" class="btn btn-primary" value="Add size" onclick="return confirm('Do you want to add new size?')">
                    </form>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-md-12 col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3>Size List</h3>
                </div>
                <div class="panel-body">
                    <div class="bootstrap-table">
                        <table class="table table-bordered">
                            <thead>
                            <tr class="bg-primary">
                                <th>NO</th>
                                <th>Size Name</th>
                                <th>Size Description</th>
                                <th style="width:30%">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($sizeList as $item)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{ $item->size_name }}</td>
                                    <td>{{ $item->description }}</td>
                                    <td>
                                        <a href="{{ asset('admin/size/edit/'.$item->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                                        <a href="{{ asset('admin/size/delete/'.$item->id) }}" onclick="return confirm('Do you want to delete this size?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div id="pagination">
                    {{ $sizeList->links() }}
                </div>
            </div>
        </div>
    </div><!--/.row-->

@endsection
