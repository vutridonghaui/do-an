@extends('backend/layout')
@section('title', 'Admin List')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Customers</h2>
        </div>
    </div><!--/.row-->
    <hr>

    <div class="row">
        <div class="input-group" style="width:40%; margin: auto">
        </div>
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
                                <th style="width:30%">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            {{--@foreach($adminList as $item)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->address }}</td>
                                    <td>
                                        <a href="{{ asset('admin/customer_manager/edit/'.$item->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                                        <a href="{{ asset('admin/customer_manager/delete/'.$item->id) }}" onclick="return confirm('Do you want to delete this category?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                                    </td>
                                </tr>
                            @endforeach--}}
                            </tbody>
                        </table>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div id="pagination">
{{--                    {{ $adminList->links() }}--}}
                </div>
            </div>
        </div>
    </div><!--/.row-->


@endsection
