@extends('backend/layout')
@section('title', 'Edit Customer')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Customer Edit</h1>
        </div>
    </div><!--/.row-->

    <div class="row">
        <div class="col-xs-12 col-md-5 col-lg-5">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Edit Customer Account
                </div>
                <div class="panel-body">
                    @include('errors.note')
                    <form action="" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Name:</label>
                            <input required type="text" name="name" class="form-control" placeholder="Enter name..." value="{{(!empty($admin->name)) ? $admin->name : ''}}">
                        </div>
                        <div class="form-group">
                            <label>Email:</label>
                            <input required type="email" name="email" class="form-control" placeholder="Enter Email..." value="{{$admin->email }}">
                        </div>
                        <div class="form-group focused">
                            <label class="form-control-label"  for="input-phone">Phone</label>
                            <input type="text" id="input-phone" name="phone"
                                   class="form-control form-control-alternative"
                                   placeholder="Phone number" required
                                   value="{{ !empty($admin->phone) ? $admin->phone : null }}"
                                   maxlength="10" onkeypress="return event.charCode &gt;= 48 &amp;&amp; event.charCode &lt;= 57" >
                        </div>
                        <div class="form-group focused">
                            <label class="form-control-label" for="input-phone">Gender</label><br>
                            <div class="status" >
                                @if($admin->gender == 2)
                                    <label class="radio-inline" for="female"> <input id="female" type="radio" name="gender" checked value="2">Female</label>
                                    <label class="radio-inline" for="female"><input id="male" type="radio" name="gender" value="1">Male</label>
                                @else
                                    <label class="radio-inline" for="female"> <input id="female" type="radio" name="gender"  value="2">Female</label>
                                    <label class="radio-inline" for="female"><input id="male" type="radio" name="gender" checked value="1">Male</label>
                                @endif
                            </div>
                        </div>
                        <div class="form-group focused">
                            <label class="form-control-label" for="input-address">Address</label>
                            <input type="text" id="input-address" name="address"
                                   class="form-control form-control-alternative"
                                   placeholder="Address" required
                                   value="{{ !empty($admin->address) ? $admin->address : null  }}">
                        </div>
                        <div class="form-group focused">
                            <label class="form-control-label"  for="input-birthday">Birthday</label>
                            <input type="date" id="input-birthday" name="birthday"
                                   class="form-control form-control-alternative"
                                   placeholder="Birthday" required
                                   value="{{ !empty($admin->birthday) ? date('Y-m-d',strtotime( $admin->birthday)) : null }}">
                        </div>
                        <div class="form-group focused">
                            <label class="form-control-label" for="input-password">Password</label>
                            <input type="password" id="input-password" name="password"
                                   class="form-control form-control-alternative"
                                   placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label>Status:</label></br>
                            <div class="status" >
                                @if($admin->status == 1)
                                    <input type="radio" id="enable" name="status" value="1" checked><label for="enable">Enable</label><br>
                                    <input type="radio" id="disable" name="status" value="0"><label for="disable">Disable</label><br>
                                @else
                                    <input type="radio" id="enable" name="status" value="1" ><label for="enable">Enable</label><br>
                                    <input type="radio" id="disable" name="status" value="0" checked><label for="disable">Disable</label><br>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="edit_btn" class="form-control btn btn-primary" value="Edit Information" onclick="return confirm('Do you want to edit this customer?')">
                        </div>
                        <div class="form-group">
                            <a href="{{ asset('admin/admin_manager') }}" class="form-control btn btn-danger">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!--/.row-->

    <script>


    </script>


@endsection
