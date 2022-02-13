@extends('backend/layout')
@section('title', 'Home')
@section('content')

    <link rel="stylesheet" href="css/your_profile.css">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <body>
    <div class="main-content">
        <!-- Header -->
        <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-image: url(https://raw.githack.com/creativetimofficial/argon-dashboard/master/assets/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
            <!-- Mask -->
            <span class="mask bg-gradient-default opacity-8"></span>
            <!-- Header container -->
            <div class="container-fluid d-flex align-items-center">
                <div class="row">
                    <div class="col-lg-7 col-md-10">
                        <h1 class="display-2 text-white">Hello {{Auth::user()->name}}</h1>
                        <p class="text-white mt-0 mb-5">This is your profile page. You can see the progress you've made with your work and manage your projects or assigned tasks</p>
                        <a href="{{ asset('admin/your_profile/edit') }}" class="btn btn-info">Edit profile</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page content -->
        <div class="container-fluid mt--7">
            <div class="row">
                <div class="col-xl-12 order-xl-12 mb-12 mb-xl-12">
                    <div class="card card-profile shadow">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 order-lg-2">
                                <div class="card-profile-image">

                                        @if(isset(Auth::user()->avatar))
                                            <img src="{{ asset('storage/avatar/'.Auth::user()->avatar) }}" class="rounded-circle">
                                        @else
                                            <img src="https://demos.creative-tim.com/argon-dashboard/assets/img/theme/team-4.jpg" class="rounded-circle">
                                        @endif

                                </div>
                            </div>
                        </div>
                        <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                            <div class="d-flex justify-content-between">
                                <a href="/" class="btn btn-sm btn-info mr-4">Connect</a>
                                <a href="/" class="btn btn-sm btn-default float-right">Message</a>
                            </div>
                        </div>
                        <div class="card-body pt-0 pt-md-4">
                            <div class="row">
                                <div class="col">
                                    <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                                        {{--<div>
                                            <span class="heading">22</span>
                                            <span class="description">Friends</span>
                                        </div>
                                        <div>
                                            <span class="heading">10</span>
                                            <span class="description">Photos</span>
                                        </div>
                                        <div>
                                            <span class="heading">89</span>
                                            <span class="description">Comments</span>
                                        </div>--}}
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <h3>
                                    {{Auth::user()->name}}
                                    <span class="font-weight-light">,
                                        {{ !empty(Auth::user()->birthday) ? (\Carbon\Carbon::parse(Auth::user()->birthday)->diff(\Carbon\Carbon::now())->format('%y years old')) : null}}
                                    </span>
                                </h3>

                                <div class="h5 font-weight-300">
                                    <i class="ni location_pin mr-2"></i>Phone Number: {{ (!empty(Auth::user()->phone)) ? Auth::user()->phone : null}}
                                </div>
                                <div class="h5 font-weight-300">
                                    <b><i class="ni location_pin mr-2"></i>Email: {{ (!empty(Auth::user()->email)) ? Auth::user()->email : null}}</b>
                                </div>
                                <div class="h5 font-weight-300">
                                    <i class="ni location_pin mr-2"></i>Gender: {{ (!empty(Auth::user()->gender)) ? ((Auth::user()->gender == 1) ? 'Male' : 'Female' ) : null}}
                                </div>
                                <div class="h5 mt-4">
                                    <i class="ni business_briefcase-24 mr-2"></i>
                                    Position:
                                    @if(Auth::user()->role_id == 0)
                                        Super Administrator
                                    @elseif(Auth::user()->role_id == 1)
                                        Sub Administrator
                                    @endif
                                </div>
                                <hr class="my-4">
                                <div class="h5 font-weight-300">
                                    <i class="ni location_pin mr-2"></i>{{ (!empty(Auth::user()->address)) ? Auth::user()->address : null}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

