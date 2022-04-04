
@extends('layouts.account')

@section('title') Admin Dashboard @endsection

@section('content')

 <!-- main header @e -->
                <!-- content @s -->
                 <?php $id = Auth::User()->id ?>
                @if(Auth::User()->member_type =="Due_Diligence")
                <div class="nk-content">

                    <div class="container-fluid">

                          <div class="container-xl wide-lg">
                        <div class="nk-content-body">
                            <div class="nk-block-head nk-block-head-lg wide-xs mx-auto">
                                {{-- <div class="nk-block-head-content text-center">
                                    <h2 class="nk-block-title fw-normal">Hi {{ Auth::User()->name}}</h2>
                                    <div class="nk-block-des">
                                        <p>Welcome to our <strong>NASDEP Enterprise Portal</strong>. You are few steps away to complete your profile.</p>
                                    </div>
                                </div> --}}
                            </div><!-- .nk-block-head -->
                            <div class="nk-block">
                                <div class="card card-custom-s1 card-bordered">
                                    <div class="row no-gutters">
                 
                                 <?php $userdda = \App\Models\DdaKyc::where('user_id', $id)->first();
                                            if ($userdda == !"" && $userdda->status == 0) {
                                            echo '
                                            <table style="width:100%;max-width:620px;margin:0 auto;background-color:#ffffff;">
                                                <tbody>
                                                    <tr>
                                                        <td style="text-align:center;padding: 50px 30px;">
                                                            <img style="width:88px; margin-bottom:24px;" src="'.asset('images/kyc-progress.png').'" alt="In Process">

                                                            <h2 style="font-size: 18px; color: #707280; font-weight: 400; margin-bottom: 8px;">Your Application under Process for Varification.</h2>
                                                            <p>We are still working on your appliction  verification. Once our team verified your appliction, you will be  notified by email.</p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            ';
                                            } ?>
                                        <?php $userdda = \App\Models\DdaKyc::where('user_id', $id)->first();
                                            if ($userdda === null) {
                                            echo '
                                        <div class="col-lg-12">

                                            <div class="card-inner card-inner-lg h-100">
                                                <div class="align-center flex-wrap flex-md-nowrap g-3 h-100">
                                                    <div class="nk-block-image w-200px flex-shrink-0 order-first order-md-last">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 114 113.9">
                                                            <path d="M87.84,110.34l-48.31-7.86a3.55,3.55,0,0,1-3.1-4L48.63,29a3.66,3.66,0,0,1,4.29-2.8L101.24,34a3.56,3.56,0,0,1,3.09,4l-12.2,69.52A3.66,3.66,0,0,1,87.84,110.34Z" transform="translate(-4 -2.1)" fill="#c4cefe" />
                                                            <path d="M33.73,105.39,78.66,98.1a3.41,3.41,0,0,0,2.84-3.94L69.4,25.05a3.5,3.5,0,0,0-4-2.82L20.44,29.51a3.41,3.41,0,0,0-2.84,3.94l12.1,69.11A3.52,3.52,0,0,0,33.73,105.39Z" transform="translate(-4 -2.1)" fill="#c4cefe" />
                                                            <rect x="22" y="17.9" width="66" height="88" rx="3" ry="3" fill="#6576ff" />
                                                            <rect x="31" y="85.9" width="48" height="10" rx="1.5" ry="1.5" fill="#fff" />
                                                            <rect x="31" y="27.9" width="48" height="5" rx="1" ry="1" fill="#e3e7fe" />
                                                            <rect x="31" y="37.9" width="23" height="3" rx="1" ry="1" fill="#c4cefe" />
                                                            <rect x="59" y="37.9" width="20" height="3" rx="1" ry="1" fill="#c4cefe" />
                                                            <rect x="31" y="45.9" width="23" height="3" rx="1" ry="1" fill="#c4cefe" />
                                                            <rect x="59" y="45.9" width="20" height="3" rx="1" ry="1" fill="#c4cefe" />
                                                            <rect x="31" y="52.9" width="48" height="3" rx="1" ry="1" fill="#e3e7fe" />
                                                            <rect x="31" y="60.9" width="23" height="3" rx="1" ry="1" fill="#c4cefe" />
                                                            <path d="M98.5,116a.5.5,0,0,1-.5-.5V114H96.5a.5.5,0,0,1,0-1H98v-1.5a.5.5,0,0,1,1,0V113h1.5a.5.5,0,0,1,0,1H99v1.5A.5.5,0,0,1,98.5,116Z" transform="translate(-4 -2.1)" fill="#9cabff" />
                                                            <path d="M16.5,85a.5.5,0,0,1-.5-.5V83H14.5a.5.5,0,0,1,0-1H16V80.5a.5.5,0,0,1,1,0V82h1.5a.5.5,0,0,1,0,1H17v1.5A.5.5,0,0,1,16.5,85Z" transform="translate(-4 -2.1)" fill="#9cabff" />
                                                            <path d="M7,13a3,3,0,1,1,3-3A3,3,0,0,1,7,13ZM7,8a2,2,0,1,0,2,2A2,2,0,0,0,7,8Z" transform="translate(-4 -2.1)" fill="#9cabff" />
                                                            <path d="M113.5,71a4.5,4.5,0,1,1,4.5-4.5A4.51,4.51,0,0,1,113.5,71Zm0-8a3.5,3.5,0,1,0,3.5,3.5A3.5,3.5,0,0,0,113.5,63Z" transform="translate(-4 -2.1)" fill="#9cabff" />
                                                            <path d="M107.66,7.05A5.66,5.66,0,0,0,103.57,3,47.45,47.45,0,0,0,85.48,3h0A5.66,5.66,0,0,0,81.4,7.06a47.51,47.51,0,0,0,0,18.1,5.67,5.67,0,0,0,4.08,4.07,47.57,47.57,0,0,0,9,.87,47.78,47.78,0,0,0,9.06-.87,5.66,5.66,0,0,0,4.08-4.09A47.45,47.45,0,0,0,107.66,7.05Z" transform="translate(-4 -2.1)" fill="#2ec98a" />
                                                            <path d="M100.66,12.81l-1.35,1.47c-1.9,2.06-3.88,4.21-5.77,6.3a1.29,1.29,0,0,1-1,.42h0a1.27,1.27,0,0,1-1-.42c-1.09-1.2-2.19-2.39-3.28-3.56a1.29,1.29,0,0,1,1.88-1.76c.78.84,1.57,1.68,2.35,2.54,1.6-1.76,3.25-3.55,4.83-5.27l1.35-1.46a1.29,1.29,0,0,1,1.9,1.74Z" transform="translate(-4 -2.1)" fill="#fff" />
                                                        </svg>
                                                    </div>
                                                    <div class="nk-block-content">
                                                        <div class="nk-block-content-head">
                                                            <h4>Complete Your KYC</h4>

                                                        </div>
                                                        <p>Looks like your have not verified your indentity yet. Please verify yourself to get full access to portal.</p>
                                                        <ul class="list list-sm list-checked">
                                                            <li>View verified Enterprises</li>
                                                            <li>Accept request to represent Enterprises</li>
                                                            <li>Accept request to represent Investors</li>
                                                        </ul>
                                                        <a href="'.url('ddakyc').'" class="btn btn-lg btn-primary">Get Started</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> ';
                                            } ?>







                                   <div class="nk-block nk-block-lg">

                                    </div><!-- .nk-block -->
                                    </div><!-- .row -->
                                </div><!-- .card -->
                            </div><!-- .nk-block -->

                        </div>
                    </div>
                       @if ($userdda == !"" && $userdda->status == 1)
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                 <div class="nk-block-head">
                                <div class="nk-block-head-sub"><span>Welcome!</span>
                                </div>
                                <div class="nk-block-between-md g-4">
                                    <div class="nk-block-head-content">
                                        <h2 class="nk-block-title fw-normal">{{ Auth::User()->name}}</h2>
                                        <div class="nk-block-des">
                                            <p>At a glance summary of your account. Have fun!</p>
                                        </div>
                                    </div><!-- .nk-block-head-content -->

                                </div><!-- .nk-block-between -->
                            </div><!-- .nk-block-head -->


                                <div class="nk-block">
                                    <div class="row g-gs">
                                        <div class="col-md-4">
                                            <div class="card card-bordered card-full">
                                                <div class="card-inner">
                                                    <div class="card-title-group align-start mb-0">
                                                        <div class="card-title">
                                                            <h6 class="subtitle">Total Deposit</h6>
                                                        </div>
                                                        <div class="card-tools">
                                                            <em class="card-hint icon ni ni-help-fill" data-toggle="tooltip" data-placement="left" title="Total Deposited"></em>
                                                        </div>
                                                    </div>
                                                    <div class="card-amount">
                                                        <span class="amount"> 49,595.34 <span class="currency currency-usd">USD</span>
                                                        </span>
                                                        <span class="change up text-danger"><em class="icon ni ni-arrow-long-up"></em>1.93%</span>
                                                    </div>
                                                    <div class="invest-data">
                                                        <div class="invest-data-amount g-2">
                                                            <div class="invest-data-history">
                                                                <div class="title">This Month</div>
                                                                <div class="amount">2,940.59 <span class="currency currency-usd">USD</span></div>
                                                            </div>
                                                            <div class="invest-data-history">
                                                                <div class="title">This Week</div>
                                                                <div class="amount">1,259.28 <span class="currency currency-usd">USD</span></div>
                                                            </div>
                                                        </div>
                                                        <div class="invest-data-ck">
                                                            <canvas class="iv-data-chart" id="totalDeposit"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                        <div class="col-md-4">
                                            <div class="card card-bordered card-full">
                                                <div class="card-inner">
                                                    <div class="card-title-group align-start mb-0">
                                                        <div class="card-title">
                                                            <h6 class="subtitle">Total Withdraw</h6>
                                                        </div>
                                                        <div class="card-tools">
                                                            <em class="card-hint icon ni ni-help-fill" data-toggle="tooltip" data-placement="left" title="Total Withdraw"></em>
                                                        </div>
                                                    </div>
                                                    <div class="card-amount">
                                                        <span class="amount"> 49,595.34 <span class="currency currency-usd">USD</span>
                                                        </span>
                                                        <span class="change down text-danger"><em class="icon ni ni-arrow-long-down"></em>1.93%</span>
                                                    </div>
                                                    <div class="invest-data">
                                                        <div class="invest-data-amount g-2">
                                                            <div class="invest-data-history">
                                                                <div class="title">This Month</div>
                                                                <div class="amount">2,940.59 <span class="currency currency-usd">USD</span></div>
                                                            </div>
                                                            <div class="invest-data-history">
                                                                <div class="title">This Week</div>
                                                                <div class="amount">1,259.28 <span class="currency currency-usd">USD</span></div>
                                                            </div>
                                                        </div>
                                                        <div class="invest-data-ck">
                                                            <canvas class="iv-data-chart" id="totalWithdraw"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                        <div class="col-md-4">
                                            <div class="card card-bordered  card-full">
                                                <div class="card-inner">
                                                    <div class="card-title-group align-start mb-0">
                                                        <div class="card-title">
                                                            <h6 class="subtitle">Balance in Account</h6>
                                                        </div>
                                                        <div class="card-tools">
                                                            <em class="card-hint icon ni ni-help-fill" data-toggle="tooltip" data-placement="left" title="Total Balance in Account"></em>
                                                        </div>
                                                    </div>
                                                    <div class="card-amount">
                                                        <span class="amount"> 79,358.50 <span class="currency currency-usd">USD</span>
                                                        </span>
                                                    </div>
                                                    <div class="invest-data">
                                                        <div class="invest-data-amount g-2">
                                                            <div class="invest-data-history">
                                                                <div class="title">This Month</div>
                                                                <div class="amount">2,940.59 <span class="currency currency-usd">USD</span></div>
                                                            </div>
                                                            <div class="invest-data-history">
                                                                <div class="title">This Week</div>
                                                                <div class="amount">1,259.28 <span class="currency currency-usd">USD</span></div>
                                                            </div>
                                                        </div>
                                                        <div class="invest-data-ck">
                                                            <canvas class="iv-data-chart" id="totalBalance"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- .card -->
                                        </div><!-- .col -->




                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif






                    </div>
                </div>
                    @endif




                @if(Auth::User()->member_type =="Enterprise_Rep")
                <div class="nk-content">

                    <div class="container-fluid">

                          <div class="container-xl wide-lg">
                        <div class="nk-content-body">
                            <div class="nk-block-head nk-block-head-lg wide-xs mx-auto">
                                {{-- <div class="nk-block-head-content text-center">
                                    <h2 class="nk-block-title fw-normal">Hi {{ Auth::User()->name}}</h2>
                                    <div class="nk-block-des">
                                        <p>Welcome to our <strong>NASDEP Enterprise Portal</strong>. You are few steps away to complete your profile.</p>
                                    </div>
                                </div> --}}
                            </div><!-- .nk-block-head -->
                            <div class="nk-block">
                                <div class="card card-custom-s1 card-bordered">
                                    <div class="row no-gutters">

                                 <?php $usereer = \App\Models\Kyc::where('user_id', $id)->first();
                                            if ($usereer == !"" && $usereer->status == 0) {
                                            echo '
                                            <table style="width:100%;max-width:620px;margin:0 auto;background-color:#ffffff;">
                                                <tbody>
                                                    <tr>
                                                        <td style="text-align:center;padding: 50px 30px;">
                                                            <img style="width:88px; margin-bottom:24px;" src="'.asset('images/kyc-progress.png').'" alt="In Process">

                                                            <h2 style="font-size: 18px; color: #707280; font-weight: 400; margin-bottom: 8px;">Your Application under Process for Varification.</h2>
                                                            <p>We are still working on your appliction  verification. Once our team verified your appliction, you will be  notified by email.</p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            ';
                                            } ?>
                                        <?php $usereer = \App\Models\Kyc::where('user_id', $id)->first();
                                            if ($usereer === null) {
                                            echo '
                                        <div class="col-lg-12">

                                            <div class="card-inner card-inner-lg h-100">
                                                <div class="align-center flex-wrap flex-md-nowrap g-3 h-100">
                                                    <div class="nk-block-image w-200px flex-shrink-0 order-first order-md-last">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 114 113.9">
                                                            <path d="M87.84,110.34l-48.31-7.86a3.55,3.55,0,0,1-3.1-4L48.63,29a3.66,3.66,0,0,1,4.29-2.8L101.24,34a3.56,3.56,0,0,1,3.09,4l-12.2,69.52A3.66,3.66,0,0,1,87.84,110.34Z" transform="translate(-4 -2.1)" fill="#c4cefe" />
                                                            <path d="M33.73,105.39,78.66,98.1a3.41,3.41,0,0,0,2.84-3.94L69.4,25.05a3.5,3.5,0,0,0-4-2.82L20.44,29.51a3.41,3.41,0,0,0-2.84,3.94l12.1,69.11A3.52,3.52,0,0,0,33.73,105.39Z" transform="translate(-4 -2.1)" fill="#c4cefe" />
                                                            <rect x="22" y="17.9" width="66" height="88" rx="3" ry="3" fill="#6576ff" />
                                                            <rect x="31" y="85.9" width="48" height="10" rx="1.5" ry="1.5" fill="#fff" />
                                                            <rect x="31" y="27.9" width="48" height="5" rx="1" ry="1" fill="#e3e7fe" />
                                                            <rect x="31" y="37.9" width="23" height="3" rx="1" ry="1" fill="#c4cefe" />
                                                            <rect x="59" y="37.9" width="20" height="3" rx="1" ry="1" fill="#c4cefe" />
                                                            <rect x="31" y="45.9" width="23" height="3" rx="1" ry="1" fill="#c4cefe" />
                                                            <rect x="59" y="45.9" width="20" height="3" rx="1" ry="1" fill="#c4cefe" />
                                                            <rect x="31" y="52.9" width="48" height="3" rx="1" ry="1" fill="#e3e7fe" />
                                                            <rect x="31" y="60.9" width="23" height="3" rx="1" ry="1" fill="#c4cefe" />
                                                            <path d="M98.5,116a.5.5,0,0,1-.5-.5V114H96.5a.5.5,0,0,1,0-1H98v-1.5a.5.5,0,0,1,1,0V113h1.5a.5.5,0,0,1,0,1H99v1.5A.5.5,0,0,1,98.5,116Z" transform="translate(-4 -2.1)" fill="#9cabff" />
                                                            <path d="M16.5,85a.5.5,0,0,1-.5-.5V83H14.5a.5.5,0,0,1,0-1H16V80.5a.5.5,0,0,1,1,0V82h1.5a.5.5,0,0,1,0,1H17v1.5A.5.5,0,0,1,16.5,85Z" transform="translate(-4 -2.1)" fill="#9cabff" />
                                                            <path d="M7,13a3,3,0,1,1,3-3A3,3,0,0,1,7,13ZM7,8a2,2,0,1,0,2,2A2,2,0,0,0,7,8Z" transform="translate(-4 -2.1)" fill="#9cabff" />
                                                            <path d="M113.5,71a4.5,4.5,0,1,1,4.5-4.5A4.51,4.51,0,0,1,113.5,71Zm0-8a3.5,3.5,0,1,0,3.5,3.5A3.5,3.5,0,0,0,113.5,63Z" transform="translate(-4 -2.1)" fill="#9cabff" />
                                                            <path d="M107.66,7.05A5.66,5.66,0,0,0,103.57,3,47.45,47.45,0,0,0,85.48,3h0A5.66,5.66,0,0,0,81.4,7.06a47.51,47.51,0,0,0,0,18.1,5.67,5.67,0,0,0,4.08,4.07,47.57,47.57,0,0,0,9,.87,47.78,47.78,0,0,0,9.06-.87,5.66,5.66,0,0,0,4.08-4.09A47.45,47.45,0,0,0,107.66,7.05Z" transform="translate(-4 -2.1)" fill="#2ec98a" />
                                                            <path d="M100.66,12.81l-1.35,1.47c-1.9,2.06-3.88,4.21-5.77,6.3a1.29,1.29,0,0,1-1,.42h0a1.27,1.27,0,0,1-1-.42c-1.09-1.2-2.19-2.39-3.28-3.56a1.29,1.29,0,0,1,1.88-1.76c.78.84,1.57,1.68,2.35,2.54,1.6-1.76,3.25-3.55,4.83-5.27l1.35-1.46a1.29,1.29,0,0,1,1.9,1.74Z" transform="translate(-4 -2.1)" fill="#fff" />
                                                        </svg>
                                                    </div>
                                                    <div class="nk-block-content">
                                                        <div class="nk-block-content-head">
                                                            <h4>Add Your Enterprise</h4>

                                                        </div>
                                                        <p>Looks like your have not verified your indentity yet. Please verify yourself to get full access to portal.</p>
                                                        <ul class="list list-sm list-checked">
                                                            <li>Get Verified</li>
                                                            <li>Get Connected with Investors</li>
                                                            <li>Get Due Diligence Agent</li>
                                                        </ul>
                                                        <a href="'.url('add_enterprise').'" class="btn btn-lg btn-primary">Get Started</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> ';
                                            } ?>







                                   <div class="nk-block nk-block-lg">

                                    </div><!-- .nk-block -->
                                    </div><!-- .row -->
                                </div><!-- .card -->
                            </div><!-- .nk-block -->

                        </div>
                    </div>

                       @if ($usereer == !"" && $usereer->status == 1)
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                 <div class="nk-block-head">
                                <div class="nk-block-head-sub"><span>Welcome!</span>
                                </div>
                                <div class="nk-block-between-md g-4">
                                    <div class="nk-block-head-content">
                                        <h2 class="nk-block-title fw-normal">{{ Auth::User()->name}}</h2>
                                        <div class="nk-block-des">
                                            <p>At a glance summary of your account. Have fun!</p>
                                        </div>
                                    </div><!-- .nk-block-head-content -->

                                </div><!-- .nk-block-between -->
                            </div><!-- .nk-block-head -->


                                <div class="nk-block">
                                    <div class="row g-gs">
                                        <div class="col-md-4">
                                            <div class="card card-bordered card-full">
                                                <div class="card-inner">
                                                    <div class="card-title-group align-start mb-0">
                                                        <div class="card-title">
                                                            <h6 class="subtitle">Total Deposit</h6>
                                                        </div>
                                                        <div class="card-tools">
                                                            <em class="card-hint icon ni ni-help-fill" data-toggle="tooltip" data-placement="left" title="Total Deposited"></em>
                                                        </div>
                                                    </div>
                                                    <div class="card-amount">
                                                        <span class="amount"> 49,595.34 <span class="currency currency-usd">USD</span>
                                                        </span>
                                                        <span class="change up text-danger"><em class="icon ni ni-arrow-long-up"></em>1.93%</span>
                                                    </div>
                                                    <div class="invest-data">
                                                        <div class="invest-data-amount g-2">
                                                            <div class="invest-data-history">
                                                                <div class="title">This Month</div>
                                                                <div class="amount">2,940.59 <span class="currency currency-usd">USD</span></div>
                                                            </div>
                                                            <div class="invest-data-history">
                                                                <div class="title">This Week</div>
                                                                <div class="amount">1,259.28 <span class="currency currency-usd">USD</span></div>
                                                            </div>
                                                        </div>
                                                        <div class="invest-data-ck">
                                                            <canvas class="iv-data-chart" id="totalDeposit"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                        <div class="col-md-4">
                                            <div class="card card-bordered card-full">
                                                <div class="card-inner">
                                                    <div class="card-title-group align-start mb-0">
                                                        <div class="card-title">
                                                            <h6 class="subtitle">Total Withdraw</h6>
                                                        </div>
                                                        <div class="card-tools">
                                                            <em class="card-hint icon ni ni-help-fill" data-toggle="tooltip" data-placement="left" title="Total Withdraw"></em>
                                                        </div>
                                                    </div>
                                                    <div class="card-amount">
                                                        <span class="amount"> 49,595.34 <span class="currency currency-usd">USD</span>
                                                        </span>
                                                        <span class="change down text-danger"><em class="icon ni ni-arrow-long-down"></em>1.93%</span>
                                                    </div>
                                                    <div class="invest-data">
                                                        <div class="invest-data-amount g-2">
                                                            <div class="invest-data-history">
                                                                <div class="title">This Month</div>
                                                                <div class="amount">2,940.59 <span class="currency currency-usd">USD</span></div>
                                                            </div>
                                                            <div class="invest-data-history">
                                                                <div class="title">This Week</div>
                                                                <div class="amount">1,259.28 <span class="currency currency-usd">USD</span></div>
                                                            </div>
                                                        </div>
                                                        <div class="invest-data-ck">
                                                            <canvas class="iv-data-chart" id="totalWithdraw"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                        <div class="col-md-4">
                                            <div class="card card-bordered  card-full">
                                                <div class="card-inner">
                                                    <div class="card-title-group align-start mb-0">
                                                        <div class="card-title">
                                                            <h6 class="subtitle">Balance in Account</h6>
                                                        </div>
                                                        <div class="card-tools">
                                                            <em class="card-hint icon ni ni-help-fill" data-toggle="tooltip" data-placement="left" title="Total Balance in Account"></em>
                                                        </div>
                                                    </div>
                                                    <div class="card-amount">
                                                        <span class="amount"> 79,358.50 <span class="currency currency-usd">USD</span>
                                                        </span>
                                                    </div>
                                                    <div class="invest-data">
                                                        <div class="invest-data-amount g-2">
                                                            <div class="invest-data-history">
                                                                <div class="title">This Month</div>
                                                                <div class="amount">2,940.59 <span class="currency currency-usd">USD</span></div>
                                                            </div>
                                                            <div class="invest-data-history">
                                                                <div class="title">This Week</div>
                                                                <div class="amount">1,259.28 <span class="currency currency-usd">USD</span></div>
                                                            </div>
                                                        </div>
                                                        <div class="invest-data-ck">
                                                            <canvas class="iv-data-chart" id="totalBalance"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- .card -->
                                        </div><!-- .col -->




                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif






                    </div>
                </div>
                    @endif
                <!-- content @e -->


@endsection

