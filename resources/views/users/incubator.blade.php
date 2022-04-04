

@extends('layouts.account')

@section('title') Admin Dashboard @endsection

@section('content')






<div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between g-3">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title"> <strong class="text-primary small">{{ $company->name }}</strong></h3>
                                            <div class="nk-block-des text-soft">
                                                <ul class="list-inline">
                                                    {{-- <li>Application ID: <span class="text-base">KID000844</span></li>
                                                    <li>Submited At: <span class="text-base">18 Dec, 2019 01:02 PM</span></li> --}}
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="nk-block-head-content">
                                            <a href="{{url('incubators')}}" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Back</span></a>
                                            <a href="{{url('incubators')}}" class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em class="icon ni ni-arrow-left"></em></a>
                                        </div>
                                    </div>
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="row gy-5">
                                        <div class="col-lg-5">
                                            <div class="nk-block-head">
                                                <div class="nk-block-head-content">
                                                    <h5 class="nk-block-title title">Company Info</h5>
                                                    <p>Profile, logo, sector.</p>
                                                </div>
                                            </div><!-- .nk-block-head -->

                                                 <div class="card card-bordered">
                                                <img src="{{ $company->logo }}" class="card-img-top"   alt="">
                                                <div class="card-inner">

                                                    <p class="card-text"> {!! $company->about !!}</p>
                                                    <span class="badge badge-sm badge-success">{{ $company->industry->name }}</span>
                                                </div>
                                            </div>


                                        </div><!-- .col -->
                                        <div class="col-lg-7">
                                            <div class="nk-block-head">
                                                <div class="nk-block-head-content">
                                                    <h5 class="nk-block-title title">Company Information</h5>
                                                    <p>Basic info, like name, phone, address, country etc.</p>
                                                </div>
                                            </div>
                                            <div class="card card-bordered">
                                                <ul class="data-list is-compact">
                                                    <li class="data-item">
                                                        <div class="data-col">
                                                            <div class="data-label">RC Number</div>
                                                            <div class="data-value">{{$company->number}}</div>
                                                        </div>
                                                    </li>

                                                    <li class="data-item">
                                                        <div class="data-col">
                                                            <div class="data-label">Date Of Incorporation</div>
                                                            <div class="data-value">{{$company->doi}}</div>
                                                        </div>
                                                    </li>
                                                    <li class="data-item">
                                                        <div class="data-col">
                                                            <div class="data-label">Experience</div>
                                                            <div class="data-value text-soft">{{$company->ind_exp}}</div>
                                                        </div>
                                                    </li>
                                                    <li class="data-item">
                                                        <div class="data-col">
                                                            <div class="data-label">Website</div>
                                                            <div class="data-value">{{$company->website}}</div>
                                                        </div>
                                                    </li>
                                                    <li class="data-item">
                                                        <div class="data-col">
                                                            <div class="data-label">Country</div>
                                                            <div class="data-value">{{ $company->country->name }}</div>
                                                        </div>
                                                    </li>
                                                    <li class="data-item">
                                                        <div class="data-col">
                                                            <div class="data-label">State</div>
                                                            <div class="data-value">{{ $company->state->name }}</div>
                                                        </div>
                                                    </li>
                                                    <li class="data-item">
                                                        <div class="data-col">
                                                            <div class="data-label">City / State</div>
                                                            <div class="data-value">{{$company->addr}}</div>
                                                        </div>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>

















                @endsection



