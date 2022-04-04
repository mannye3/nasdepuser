       @extends('layouts.account')

@section('title') Admin Dashboard @endsection

@section('content')





               <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block">
                                    <div class="card card-bordered">
                                        <div class="card-aside-wrap">
                                            <div class="card-inner card-inner-lg">
                                                <div class="nk-block-head nk-block-head-lg">
                                                    <div class="nk-block-between">
                                                        <div class="nk-block-head-content">

                                                            <h4 class="nk-block-title">Personal Information</h4>
                                                            <div class="nk-block-des">
                                                            @if (Session::has('success'))
                                                            <div class="example-alert">
                                                                <div class="alert alert-success alert-icon alert-dismissible">
                                                                    <em class="icon ni ni-cross-circle"></em>
                                                                    <strong>{{ Session::get('success')}}</strong>
                                                                <button class="close" data-dismiss="alert"></button>
                                                            </div>
                                                        </div>
                                                            @endif

                                                                         @if (Session::has('error'))
                                                            <div class="example-alert">
                                                                <div class="alert alert-danger alert-icon alert-dismissible">
                                                                    <em class="icon ni ni-cross-circle"></em>
                                                                    <strong>{{ Session::get('error')}}</strong>
                                                                <button class="close" data-dismiss="alert"></button>
                                                            </div>
                                                        </div>
                                                            @endif




                                                 {{-- @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                        <li>{{ $error}}</li>
                                            @endforeach
                                        </ul>

                                    </div>

                                    @endif --}}
                                                            </div>
                                                        </div>
                                                        <div class="nk-block-head-content align-self-start d-lg-none">
                                                            <a href="#" class="toggle btn btn-icon btn-trigger mt-n1" data-target="userAside"><em class="icon ni ni-menu-alt-r"></em></a>
                                                        </div>
                                                    </div>
                                                </div><!-- .nk-block-head -->
                                                <div class="nk-block">
                                                    <div class="nk-data data-list">
                                                        <div class="data-head">
                                                            <h6 class="overline-title">Basics</h6>
                                                        </div>
                                                        <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                                            <div class="data-col">
                                                                <span class="data-label">Full Name</span>
                                                                <span class="data-value">{{ Auth::User()->name}}</span>
                                                            </div>
                                                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                                        </div><!-- data-item -->


                                                          <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                                            <div class="data-col">
                                                                <span class="data-label">Gender</span>
                                                                <span class="data-value">{{Auth::User()->gender}}
                                                                </span>
                                                            </div>
                                                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                                        </div><!-- data-item -->



                                                        <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                                            <div class="data-col">
                                                                <span class="data-label">Company Name</span>
                                                                <span class="data-value">{{ Auth::User()->user_company}}</span>
                                                            </div>
                                                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                                        </div><!-- data-item -->
                                                        <div class="data-item">
                                                            <div class="data-col">
                                                                <span class="data-label">Email</span>
                                                                <span class="data-value">{{ Auth::User()->email}}</span>
                                                            </div>
                                                            <div class="data-col data-col-end"><span class="data-more disable"><em class="icon ni ni-lock-alt"></em></span></div>
                                                        </div><!-- data-item -->
                                                        <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                                            <div class="data-col">
                                                                <span class="data-label">Phone Number</span>
                                                                <span class="data-value text-soft">{{ Auth::User()->phone}}</span>
                                                            </div>
                                                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                                        </div><!-- data-item -->
                                                          <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                                            <div class="data-col">
                                                                <span class="data-label">Member Type</span>
                                                                <span class="data-value text-soft">{{ Auth::User()->member_type}}</span>
                                                            </div>
                                                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                                        </div><!-- data-item -->
                                                        <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                                            <div class="data-col">
                                                                <span class="data-label">Date of Birth</span>
                                                                <span class="data-value">{{ Auth::User()->dob}}</span>
                                                            </div>
                                                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                                        </div><!-- data-item -->

                                                         <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                                            <div class="data-col">
                                                                <span class="data-label">Country</span>
                                                                <span class="data-value">{{ Auth::User()->country->name}}</span>
                                                            </div>
                                                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                                        </div><!-- data-item -->


                                                         <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                                            <div class="data-col">
                                                                <span class="data-label">State</span>
                                                                <span class="data-value">{{ Auth::User()->state->name}}</span>
                                                            </div>
                                                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                                        </div><!-- data-item -->

                                                    </div><!-- data-list -->

                                                </div><!-- .nk-block -->
                                            </div>
                                            <div class="card-aside card-aside-left user-aside toggle-slide toggle-slide-left toggle-break-lg" data-content="userAside" data-toggle-screen="lg" data-toggle-overlay="true">
                                                <div class="card-inner-group" data-simplebar>
                                                    <div class="card-inner">
                                                        <div class="user-card">
                                                            <div class="user-avatar bg-primary">
                                                                <span>AB</span>
                                                            </div>
                                                            <div class="user-info">
                                                                <span class="lead-text">{{Auth::user()->name}}</span>
                                                                <span class="sub-text">{{Auth::user()->email}}</span>
                                                            </div>
                                                            <div class="user-action">
                                                                <div class="dropdown">
                                                                    <a class="btn btn-icon btn-trigger mr-n2" data-toggle="dropdown" href="#"><em class="icon ni ni-more-v"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <ul class="link-list-opt no-bdr">
                                                                            <li><a href="#"><em class="icon ni ni-camera-fill"></em><span>Change Photo</span></a></li>
                                                                            <li><a href="#"><em class="icon ni ni-edit-fill"></em><span>Update Profile</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- .user-card -->
                                                    </div><!-- .card-inner -->

                                                    <div class="card-inner p-0">
                                                        <ul class="link-list-menu">
                                                            <li><a class="active"><em class="icon ni ni-user-fill-c"></em><span>Personal Infomation</span></a></li>
                                                            {{-- <li><a href="html/user-profile-notification.html"><em class="icon ni ni-bell-fill"></em><span>Notifications</span></a></li>
                                                            <li><a href="html/user-profile-activity.html"><em class="icon ni ni-activity-round-fill"></em><span>Account Activity</span></a></li>
                                                            <li><a href="html/user-profile-setting.html"><em class="icon ni ni-lock-alt-fill"></em><span>Security Settings</span></a></li>
                                                            <li><a href="html/user-profile-social.html"><em class="icon ni ni-grid-add-fill-c"></em><span>Connected with Social</span></a></li> --}}
                                                        </ul>
                                                    </div><!-- .card-inner -->
                                                </div><!-- .card-inner-group -->
                                            </div><!-- card-aside -->
                                        </div><!-- .card-aside-wrap -->
                                    </div><!-- .card -->
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>







                 <!-- @@ Profile Edit Modal @e -->
    <div class="modal fade" role="dialog" id="profile-edit">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Update Profile</h5>
                    <ul class="nk-nav nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#personal">Personal Details</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#address">Password</a>
                        </li>
                    </ul><!-- .nav-tabs -->
                    <div class="tab-content">

                        <div class="tab-pane active" id="personal">
                            <form method="POST" action="{{ route('profileUpdate') }}" class="needs-validation">
                                    @csrf
                            <div class="row gy-4">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="full-name">Full  Name</label>
                                        <input type="text" class="form-control form-control-lg" name="fname" value="{{Auth::user()->name}}">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">Phone Number</label>
                                        <input type="number" class="form-control form-control-lg"  name="phone" value="{{Auth::user()->phone}}">
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">Member Type</label>
                                         <select class="form-select" name="member_type"  data-ui="lg">
                                            <option value="{{Auth::user()->member_type}}">{{Auth::user()->member_type}}</option>
                                             <option value="Enterprise Rep">Enterprise Representative</option>
                                            <option value="Investor Rep">Investor Representative</option>
                                            <option value="Accredited Investor">Accredited Investor</option>
                                            <option value="Incubator">Incubator</option>

                                        </select>
                                    </div>
                                </div>

                               <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">Gender</label>

                                          <select class="form-select" name="gender"  data-ui="lg">
                                            <option value="{{Auth::user()->gender}}">{{Auth::user()->gender}}</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="birth-day">Date of Birth</label>
                                        <input type="text" class="form-control form-control-lg date-picker" name="dob" value="{{Auth::user()->dob}}">
                                    </div>
                                </div>

                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">Company</label>
                                        <input type="text" class="form-control form-control-lg" name="user_company" value="{{Auth::user()->user_company}}">
                                    </div>
                                </div>

                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">State</label>

                                          <select class="form-select" name="state_id" id="address-county" data-ui="lg">
                                                @foreach($states as $state)
                                            <option  {{ ($state->id) == Auth::user()->state_id ? 'selected' : '' }}  value="{{ $state->id }}">{{$state->name }}</option>
                                             @endforeach

                                        </select>


                                    </div>
                                </div>

                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            <button type="submit" class="btn btn-lg btn-primary">Update Profile</button>
                                        </li>
                                        <li>
                                            <a href="#" data-dismiss="modal" class="link link-light">Cancel</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            </form>
                        </div><!-- .tab-pane -->
                        <div class="tab-pane" id="address">
                            <form method="POST" action="{{ route('profilePassword') }}" class="needs-validation">
                                    @csrf
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="address-l1">Current Password</label>
                                        <input type="password" name="password" class="form-control form-control-lg">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="address-l2"> New Password</label>
                                        <input type="password" name="new_password" class="form-control form-control-lg" >
                                    </div>
                                </div>


                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            <button type="submit" class="btn btn-lg btn-primary">Update Password</button>
                                        </li>
                                        <li>
                                            <a href="#" data-dismiss="modal" class="link link-light">Cancel</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            </form>

                        </div><!-- .tab-pane -->
                    </div><!-- .tab-content -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->



    @endsection
