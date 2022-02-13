@extends('backend/layout')
@section('title', 'Edit Coupon')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Coupon</h1>
        </div>
    </div><!--/.row-->

    <div class="row center align-content-center">
        <div class="col-xs-12 col-md-12 col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Edit Coupon</div>
                <div class="panel-body">
                    <form method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        @include('errors.note')
                        <div class="row" style="margin-bottom:40px">
                            <div class="col-xs-8">
                                <div class="form-group">
                                    <label>Coupon Code: </label>
                                    <input required type="text" name="code" class="form-control" value="{{$coupon->code}}">
                                </div>
                                <div class="form-group">
                                    <label>Coupon Type:</label></br>
                                    <div class="status" >
                                        @if($coupon->coupon_type == 1)
                                            <input type="radio" id="enable" name="coupon_type" value="1" checked><label for="enable">Percent</label><br>
                                            <input type="radio" id="disable" name="coupon_type" value="2"><label for="disable">Disable</label><br>
                                        @else
                                            <input type="radio" id="enable" name="coupon_type" value="1" ><label for="enable">Enable</label><br>
                                            <input type="radio" id="disable" name="coupon_type" value="2" checked><label for="disable">Money</label><br>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Coupon Value: </label>
                                    <input required type="number" name="coupon_value" class="form-control" value="{{$coupon->coupon_value}}">
                                </div>
                                <div class="form-group">
                                    <label>Times Limit: </label>
                                    <input required type="number" name="times_limit" class="form-control"  value="{{$coupon->times_limit}}">
                                </div>
                                <div class="form-group">
                                    <label>Expired Date: </label>
                                    <input required type="date" name="expired_coupon" class="form-control"  value="{{date('Y-m-d',strtotime($coupon->expired_coupon))}}">
                                </div>
                                <div class="form-group">
                                    <label>Description: </label>
                                    <textarea class="ckeditor" required name="description"  > {{$coupon->description}} </textarea>
                                    <script type="text/javascript">
                                        var editor = CKEDITOR.replace('desc', {
                                            language: 'vi',
                                            filebrowserImageBrowseUrl: '../../editor/ckfinder/ckfinder.html?Type=Images',
                                            filebrowserFlashBrowseUrl: '../../editor/ckfinder/ckfinder.html?Type=Flash',
                                            filebrowserImageUploadUrl: '../../editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                                            filebrowserFlashUploadUrl: '../../editor/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
                                        });
                                    </script>
                                </div>

                                <div class="form-group">
                                    <label>Status:</label></br>
                                    <div class="status" >
                                        @if($coupon->status == 1)
                                            <input type="radio" id="enable" name="status" value="1" checked><label for="enable">Enable</label><br>
                                            <input type="radio" id="disable" name="status" value="0"><label for="disable">Disable</label><br>
                                        @else
                                            <input type="radio" id="enable" name="status" value="1" ><label for="enable">Enable</label><br>
                                            <input type="radio" id="disable" name="status" value="0" checked><label for="disable">Disable</label><br>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="submit" name="edit_btn" class="form-control btn btn-primary" value="Edit Coupon" onclick="return confirm('Do you want to add new coupon?')">
                                </div>
                                <div class="form-group">
                                    <a href="{{ asset('admin/coupon') }}" class="form-control btn btn-danger">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div><!--/.row-->

@endsection
