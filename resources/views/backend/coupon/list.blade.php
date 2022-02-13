@extends('backend/layout')
@section('title', 'Coupon')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Coupon</h1>
        </div>
    </div><!--/.row-->

    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">

            <div class="panel panel-primary">
                <div class="panel-heading">Coupon List</div>
                <div class="panel-body">
                    <form action="" method="get">
                        <div class="input-group" style="margin-bottom: 30px">
                            @csrf
                            <input type="text" class="form-control" id="keyword" name="keyword"
                                   placeholder="Search coupon...">
                            <div class="input-group-append">
                                <button class="btn btn-secondary" id="search_btn" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="bootstrap-table">
                        <div class="table-responsive">
                            <a href="{{ asset('admin/coupon/add') }}" class="btn btn-primary">Add New Coupon</a>
                            <table class="table table-bordered" style="margin-top:20px;">
                                <thead>
                                <tr class="bg-primary">
                                    <th width="5%">NO</th>
                                    <th width="15%">Coupon Code</th>
                                    <th width="10%">Coupon Type</th>
                                    <th width="15%" >Coupon Value</th>
                                    <th width="10%">Times Limit</th>
                                    <th width="20%">Expired Date</th>
                                    <th width="5%">Status</th>
                                    <th width="20%">Action</th>
                                </tr>
                                </thead>
                                <tbody
                                    @foreach($coupons as $coupon)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td> {{$coupon->code}}</td>
                                            <td>
                                                @if($coupon->coupon_type == 1)
                                                    Coupon Percent
                                                @elseif($coupon->coupon_type == 2)
                                                    Coupon Money
                                                @endif
                                            </td>
                                            <td>
                                                @if($coupon->coupon_type == 1)
                                                    {{$coupon->coupon_value}} %
                                                @elseif($coupon->coupon_type == 2)
                                                    {{$coupon->coupon_value}} $
                                                @endif
                                            </td>
                                            <td>{{$coupon->times_limit}}</td>
                                            <td>{{$coupon->expired_date}}</td>
                                            <td>{{$coupon->status}}</td>
                                            <td>
                                                <a href="{{ asset('admin/coupon/edit/'.$coupon->id) }}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
                                                <a href="{{ asset('admin/coupon/delete/'.$coupon->id) }}" class="btn btn-danger" onclick="return confirm('Do you want to detele this coupon?')" ><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div id="pagination">
                            {{ $coupons->links() }}
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
