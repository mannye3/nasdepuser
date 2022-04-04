@extends('layouts.account')

@section('title') Admin Dashboard @endsection

@section('content')
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Investors</h3>
                                            <div class="nk-block-des text-soft">
                                                <p></p>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                                <div class="toggle-expand-content" data-content="pageMenu">

                                                </div>
                                            </div><!-- .toggle-wrap -->
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                   <div class="card card-preview">
                                            <div class="card-inner">
                                                <div class="text-left">
                                                    @if (Session::has('success'))
                                                   <div class="example-alert">
                                                       <div class="alert alert-success alert-icon alert-dismissible">
                                                           <em class="icon ni ni-cross-circle"></em>
                                                           <strong>{{ Session::get('success')}}</strong>
                                                       <button class="close" data-dismiss="alert"></button>
                                                   </div>
                                               </div>
                                                   </div>

                                                   @endif



                                                   @if ($errors->any())
                                                   <div class="alert alert-danger">
                                                       <ul>
                                                           @foreach ($errors->all() as $error)
                                                       <li>{{ $error}}</li>
                                                           @endforeach
                                                       </ul>

                                                   </div>

                                                   @endif
                                               </div>

                                                <table class="datatable-init-export nk-tb-list nk-tb-ulist table-bordered" data-auto-responsive="false">
                                                    <thead>
                                                        <tr class="nk-tb-item nk-tb-head">

                                                            <th class="nk-tb-col"><span class="sub-text">#</span></th>
                                                            <th class="nk-tb-col"><span class="sub-text">Name</span></th>
                                                            <th class="nk-tb-col tb-col-mb"><span class="sub-text">Type</span></th>
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Exp</span></th>
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Country</span></th>
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">State</span></th>



                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach  ($investors as $investor)
                                                        <tr class="nk-tb-item">
                                                            <td class="nk-tb-col nk-tb-col-check">
                                                                <img src="{{ $investor->company->logo }}">
                                                            </td>
                                                            <td class="nk-tb-col">
                                                                <div class="user-info">
                                                                    <span class="tb-lead"><a href="{{ url('investor', $investor->company_id)}}">{{ $investor->company->name }} </a><span class="dot dot-warning d-md-none ml-1"></span></span>
                                                                    <span>{{ $investor->company->about }}</span>
                                                                </div>
                                                            </td>
                                                            <td class="nk-tb-col">
                                                                <div class="user-card">
                                                                    <span>{{ $investor->company->ind_exp }}</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                <span>{{ $investor->company->industry->name }}</span>
                                                            </td>
                                                             <td class="nk-tb-col tb-col-md">
                                                                <span>{{ $investor->company->country->name }}</span>
                                                            </td>
                                                             <td class="nk-tb-col tb-col-md">
                                                                <span>{{ $investor->company->state->name }}</span>
                                                            </td>






                                                        </tr><!-- .nk-tb-item  -->
                                                        @endforeach

                                                    </tbody>
                                                </table>

                                            </div>
                                        </div><!-- .card-preview -->
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->







                @endsection
