@extends('backend/layout')
@section('title', 'Blog')
@section('content')
    @if(session('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Blog</h1>
        </div>
    </div><!--/.row-->

    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">

            <div class="panel panel-primary">
                <div class="panel-heading">Blog List</div>
                <div class="panel-body">
                    <form action="{{ route('seach_blog_backend') }}" method="get">
                        <div class="input-group" style="margin-bottom: 30px">
                            @csrf
                            <input type="text" class="form-control" id="keyword" name="keyword"
                                   placeholder="Search blog...">
                            <div class="input-group-append">
                                <button class="btn btn-secondary" id="search_btn" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="bootstrap-table">
                        <div class="table-responsive">
                            <a href="{{ asset('admin/blog/add') }}" class="btn btn-primary">Add New Blog</a>
                            <table class="table table-bordered" style="margin-top:20px;">
                                <thead>
                                <tr class="bg-primary">
                                    <th width="5%">NO</th>
                                    <th width="20%">Title</th>
                                    <th width="15%">Thumbnail</th>
                                    <th width="25%" >Short Description</th>
                                    <th width="10%">Blog Category</th>
                                    <th width="5%">Status</th>
                                    <th width="20%">Action</th>
                                </tr>
                                </thead>
                                <tbody
                                    @foreach($blogs as $blog)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td> {{$blog->title}}</td>
                                            <td>
                                                <img width="200px" src="{{ asset('storage/blog_thumbnail/'.$blog->thumbnail) }}" class="thumbnail">
                                            </td>
                                            <td>{{$blog->blog_short_description}}</td>
                                            <td>{{$blog->blog_category_name}}</td>
                                            <td>{{$blog->status}}</td>
                                            <td>
                                                <a href="{{ asset('admin/blog/edit/'.$blog->blog_id) }}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
                                                <a href="{{ asset('admin/blog/delete/'.$blog->blog_id) }}" class="btn btn-danger" onclick="return confirm('Do you want to detele this blog?')" ><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>
                                            </td>
                                        </tr>
{{--                                        {{$i++}}--}}
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div id="pagination">
                            {{ $blogs->links() }}
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
