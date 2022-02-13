@extends('backend/layout')
@section('title', 'Search Product')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Product</h1>
        </div>
    </div><!--/.row-->

    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">

            <div class="panel panel-primary">
                <div class="panel-heading">Product List</div>
                <div class="panel-body">
                    <form action="{{ route('seach_product_backend') }}" method="get">
                        <div class="input-group" style="margin-bottom: 30px">
                            @csrf
                            <input type="text" class="form-control" id="keyword" name="keyword"
                                   placeholder="Search product...">
                            <div class="input-group-append">
                                <button class="btn btn-secondary" id="search_btn" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <div class="bootstrap-table">
                        <div class="table-responsive">
                            <a href="{{ asset('admin/product/add') }}" class="btn btn-primary">Add Product</a>
                            <table class="table table-bordered" style="margin-top:20px;">
                                <thead>
                                <tr class="bg-primary">
                                    <th>NO</th>
                                    <th width="15%">Product Name</th>
                                    <th width="5%">Price</th>
                                    <th width="20%">Thumbnail</th>
                                    <th width="15%">Topic</th>
                                    <th width="25%">Accesories</th>
                                    <th width="20%">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <td></td>
                                        <td> {{$product->product_name}}</td>
                                        <td>{{$product->price}}$</td>
                                        <td>
                                            <img width="200px"
                                                 src="{{asset('storage/app/thumbnail/'.$product->thumbnail)}}"
                                                 class="thumbnail">
                                        </td>
                                        <td>{{$product->topic_name}}</td>
                                        <td>{{$product->accessories}}</td>
                                        <td>
                                            <a href="{{ asset('admin/product/edit/'.$product->product_id) }}"
                                               class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i>
                                                Edit</a>
                                            <a href="{{ asset('admin/product/delete/'.$product->product_id) }}"
                                               class="btn btn-danger"
                                               onclick="return confirm('Do you want to detele this product?')"><i
                                                    class="fa fa-trash" aria-hidden="true"></i> Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div id="pagination">
                            {{ $products->links() }}
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

        </div>
    </div><!--/.row-->

    <script>
        /* $('#search_btn').on('click', function () {
             $value = $('#keyword').val();
             $.ajax({
                 type: 'get',
                 url: '{{ route('seach_product_backend')}}',
                data: {
                    'keyword': $value
                },
                success:function(data){
                    // $('tbody').html(data);
                    // console.log(data['data'][0]);

                    jQuery.each( data['data'], function( i, val ) {
                        console.log(val);
                    })
                    $('tbody').html(

                    );
                }
            });

        })
        $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });*/
    </script>

@endsection
