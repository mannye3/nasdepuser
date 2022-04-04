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
                                            <h3 class="nk-block-title page-title">Pools</h3>
                                            <div class="nk-block-des text-soft">
                                                <p></p>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                                <div class="toggle-expand-content" data-content="pageMenu">
                                                    <ul class="nk-block-tools g-3">
                                                        {{-- <li><a href="#" class="btn btn-white btn-outline-light"><em class="icon ni ni-download-cloud"></em><span>Export</span></a></li> --}}

                                                    </ul>
                                                </div>
                                            </div><!-- .toggle-wrap -->
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                   <div class="card card-preview">
                                            <div class="card-inner">

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
                                                            <th class="nk-tb-col tb-col-mb"><span class="sub-text">Expereince</span></th>
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Industry</span></th>
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Reg Date</span></th>
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Growth Stage</span></th>
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Incubator</span></th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach  ($pools as $pool)
                                                        <tr class="nk-tb-item">
                                                            <td class="nk-tb-col nk-tb-col-check">
                                                                 {{ $loop->iteration }}
                                                            </td>
                                                            <td class="nk-tb-col">
                                                                <div class="user-card">
                                                                <span>{{ $pool->name }}</span>
                                                            </td>
                                                            <td class="nk-tb-col">
                                                                <div class="user-card">
                                                                    <span>{{ $pool->exp }}</span>
                                                            </td>

                                                            <td class="nk-tb-col">
                                                                <div class="user-card">
                                                                    <span>{{ $pool->industry->name }}</span>
                                                            </td>

                                                            <td class="nk-tb-col">
                                                                <div class="user-card">
                                                                    <span>{{ $pool->regdate }}</span>
                                                            </td>

                                                            <td class="nk-tb-col tb-col-md">
                                                                <span>{{ $pool->growth_stage }}</span>
                                                            </td>

                                                            <td class="nk-tb-col tb-col-md">
                                                                <span>{{ $pool->incubator->company->name }}</span>
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
