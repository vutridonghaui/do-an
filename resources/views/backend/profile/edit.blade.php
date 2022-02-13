@extends('backend/layout')
@section('title', 'Home')
@section('content')

    <link rel="stylesheet" href="css/your_profile.css">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <div class="main-content">
        <!-- Header -->
        <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center"
             style="min-height: 100px; background-image: url(https://raw.githack.com/creativetimofficial/argon-dashboard/master/assets/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
            <!-- Mask -->
            <span class="mask bg-gradient-default opacity-8"></span>
            <!-- Header container -->
            <div class="container-fluid d-flex align-items-center">
                <div class="row">
                    <div class="col-lg-7 col-md-10">
                        <h1 class="display-2 text-white">Hey {{Auth::user()->name}}, you can change your information
                            here!</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page content -->
        <div class="container-fluid mt--7">
            <div class="row">
                <div class="col-xl-12 order-xl-1">
                    <div class="card bg-secondary shadow">
                        <div class="card-header bg-white border-0">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">My account</h3>
                                </div>
                                <div class="col-4 text-right">
                                    <a href="#!" class="btn btn-sm btn-primary">Settings</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                @include('errors.note')
                                <h6 class="heading-small text-muted mb-4">User information</h6>
                                <div class="avatar-wrapper">
                                    @if(isset(Auth::user()->avatar))
                                        <img id="previewImg" src="{{ asset('storage/avatar/'.Auth::user()->avatar) }}" class="profile-pic">
                                    @else
                                        <img id="previewImg" src="https://demos.creative-tim.com/argon-dashboard/assets/img/theme/team-4.jpg" class="profile-pic">
                                    @endif
                                    <input class="upload-button file-upload" id="avatar" name="avatar" type="file" value="{{Auth::user()->avatar}}" style="opacity: 0"/>
                                </div>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-username">Your name</label>
                                                <input type="text" id="input-username" required name="name"
                                                       class="form-control form-control-alternative"
                                                       placeholder="Username" value="{{Auth::user()->name}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-email">Email
                                                    address</label>
                                                <input readonly="readonly" type="email" id="input-email"
                                                       class="form-control form-control-alternative" placeholder=""
                                                       value="{{Auth::user()->email}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group focused">
                                                <label class="form-control-label"  for="input-phone">Your phone</label>
                                                <input type="text" id="input-phone" name="phone"
                                                       class="form-control form-control-alternative"
                                                       placeholder="Phone number" required
                                                       value="{{ !empty(Auth::user()->phone) ? Auth::user()->phone : null }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-address">Your
                                                    address</label>
                                                <input type="text" id="input-address" name="address"
                                                       class="form-control form-control-alternative"
                                                       placeholder="Address" required
                                                       value="{{ !empty(Auth::user()->address) ? Auth::user()->address : null  }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-phone">Gender</label><br>
                                                <div class="status" >
                                                    @if(Auth::user()->gender == 2)
                                                        <label class="radio-inline" for="female"> <input id="female" type="radio" name="gender" checked value="2">Female</label>
                                                        <label class="radio-inline" for="female"><input id="male" type="radio" name="gender" value="1">Male</label>
                                                    @else
                                                        <label class="radio-inline" for="female"> <input id="female" type="radio" name="gender"  value="2">Female</label>
                                                        <label class="radio-inline" for="female"><input id="male" type="radio" name="gender" checked value="1">Male</label>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group focused">
                                                <label class="form-control-label"  for="input-birthday">Your birthday</label>
                                                <input type="date" id="input-birthday" name="birthday"
                                                       class="form-control form-control-alternative"
                                                       placeholder="Birthday" required
                                                       value="{{ !empty(Auth::user()->birthday) ? date('Y-m-d',strtotime( Auth::user()->birthday)) : null }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="heading-small text-muted mb-4">Change Password</h6>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label>Current Password</label>
                                            <div class="form-group pass_show">
                                                <input type="password" class="form-control" name="old_password" placeholder="Current Password">
                                            </div>
                                            <label>New Password</label>
                                            <div class="form-group pass_show">
                                                <input type="password" class="form-control" name="new_password" placeholder="New Password">
                                            </div>
                                            <label>Confirm Password</label>
                                            <div class="form-group pass_show">
                                                <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <input type="submit" name="submit" class="form-control btn btn-primary" value="Submit" onclick="return confirm('Do you change your information?')">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {

            var readURL = function(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('.profile-pic').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }

            $(".file-upload").on('change', function(){
                readURL(this);
            });

            $(".upload-button").on('click', function() {
                $(".file-upload").click();
            });

        });

    </script>

    <style>
        .avatar-wrapper{
            position: relative;
            height: 200px;
            width: 200px;
            margin: 50px auto;
            border-radius: 50%;
            overflow: hidden;
            box-shadow: 1px 1px 15px -5px black;
            transition: all .3s ease;
        }
        .avatar-wrapper:hover{
             transform: scale(1.05);
             cursor: pointer;
         }
        .avatar-wrapper:hover .profile-pic{
             opacity: .5;
         }
        .profile-pic {
            height: 100%;
            width: 100%;
            transition: all .3s ease;
        }
        .profile-pic:after{
             font-family: FontAwesome;
             content: "\f007";
             top: 0; left: 0;
             width: 100%;
             height: 100%;
             position: absolute;
             font-size: 190px;
             background: #ecf0f1;
             color: #34495e;
             text-align: center;
         }
        .upload-button {
            position: absolute;
            top: 0; left: 0;
            height: 100%;
            width: 100%;

        }
        .fa-arrow-circle-up{
            position: absolute;
            font-size: 234px;
            top: -17px;
            left: 0;
            text-align: center;
            opacity: 0;
            transition: all .3s ease;
            color: #34495e;
        }
        .upload-button:hover .fa-arrow-circle-up{
             opacity: .9;
         }
    </style>

@endsection

