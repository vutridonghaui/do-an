@extends('backend/layout')
@section('title', 'Customer List')
@section('content')
    @if(session('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Customers</h2>
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
        {{--<div class="col-xs-12 col-md-12 col-lg-10" style="margin: auto">
            <div class="panel panel-primary" style="width:70%; margin: auto">
                <div class="panel-heading">
                    <h3>Add Blog Category</h3>
                </div>
                <div class="panel-body">
                    @include('errors.note')
                    <form action="" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Category Name:</label>
                            <input required type="text" name="blog_category_name" class="form-control" {{old('blog_category_name')}} placeholder="Input category name...">
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
                        <input type="submit" name="submit" class="btn btn-primary" value="Add Category" onclick="return confirm('Do you want to add new category?')">
                    </form>
                </div>
            </div>
        </div>--}}

        <div class="col-xs-12 col-md-12 col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3>Customers List</h3>
                </div>
                <div class="panel-body">
                    <div class="bootstrap-table">
                        <table class="table table-bordered">
                            <thead>
                            <tr class="bg-primary">
                                <th>NO</th>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Status</th>
                                <th style="width:30%">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($adminList as $item)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->address }}</td>
                                    <td>
                                        @if($item->status == 1)
                                            <p style="color: green">Approved</p>
                                        @else
                                            <p style="color: red">Not Approve</p>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ asset('admin/customer_manager/edit/'.$item->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                                        <a href="{{ asset('admin/customer_manager/delete/'.$item->id) }}" onclick="return confirm('Do you want to delete this customer?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div id="pagination">
                    {{ $adminList->links() }}
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
