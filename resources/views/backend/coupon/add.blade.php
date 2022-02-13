@extends('backend/layout')
@section('title', 'Add Coupon')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Coupon</h1>
        </div>
    </div>

    <div class="row center align-content-center">
        <div class="col-xs-12 col-md-12 col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Add New Coupon</div>
                <div class="panel-body">
                    <form method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        @include('errors.note')
                        <div class="row" style="margin-bottom:40px">
                            <div class="col-xs-8">
                                <div class="form-group">
                                    <label>Coupon Code: </label>
                                    <input required type="text" name="code" class="form-control" value="{{old('code')}}">
                                </div>
                                <div class="form-group">
                                    <label>Coupon Type: </label>
                                    <div class="status" >
                                        <input type="radio" id="enable" name="coupon_type" value="1" checked><label for="enable">Percent</label><br>
                                        <input type="radio" id="disable" name="coupon_type" value="2"><label for="disable">Money</label><br>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Coupon Value: </label>
                                    <input required type="number" name="coupon_value" class="form-control" value="{{old('coupon_value')}}">
                                </div>
                                <div class="form-group">
                                    <label>Times Limit: </label>
                                    <input required type="number" name="times_limit" class="form-control"  value="{{old('times_limit')}}">
                                </div>
                                <div class="form-group">
                                    <label>Expired Date: </label>
                                    <input required type="date" name="expired_coupon" class="form-control"  value="{{old('expired_coupon')}}">
                                </div>
                                <div class="form-group">
                                    <label>Description: </label>
                                    <textarea class="ckeditor" required name="description"  > {{old('description')}} </textarea>
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
                                    <label>Status: </label>
                                    <div class="status" >
                                        <input type="radio" id="enable" name="status" value="1" checked><label for="male">Enable</label><br>
                                        <input type="radio" id="disable" name="status" value="0"><label for="female">Disable</label><br>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="submit" name="edit_btn" class="form-control btn btn-primary" value="Add product" onclick="return confirm('Do you want to add new coupon?')">
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

    <script>
        function previewFile(input){
            var file = $("input[type=file]").get(0).files[0];

            if(file){
                var reader = new FileReader();

                reader.onload = function(){
                    $("#previewImg").attr("src", reader.result);
                }

                reader.readAsDataURL(file);
            }
        }
    </script>

@endsection
