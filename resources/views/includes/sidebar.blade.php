  <!-- sidebar @s -->
  <div class="nk-sidebar nk-sidebar-fixed is-dark " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand">
            <a href="html/index.html" class="logo-link nk-sidebar-logo">
                <img class="logo-light logo-img" src="{{ asset('/assets/images/nasdlogop.jpg')}}" srcset="./images/logo2x.png 2x" alt="logo">
                <img class="logo-dark logo-img" src="{{ asset('/assets/images/nasdlogop.jpg')}}" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
            </a>
        </div>
        <div class="nk-menu-trigger mr-n2">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
        </div>
    </div><!-- .nk-sidebar-element -->
    <div class="nk-sidebar-element">
                    <div class="nk-sidebar-body" data-simplebar>
                        <div class="nk-sidebar-content">

                            <div class="nk-sidebar-widget nk-sidebar-widget-full d-xl-none pt-0">
                                <a class="nk-profile-toggle toggle-expand" data-target="sidebarProfile" href="#">
                                    <div class="user-card-wrap">
                                        <div class="user-card">
                                            <div class="user-avatar">
                                                <span>AB</span>
                                            </div>
                                            <div class="user-info">
                                                <span class="lead-text">Abu Bin Ishtiyak</span>
                                                <span class="sub-text">info@softnio.com</span>
                                            </div>
                                            <div class="user-action">
                                                <em class="icon ni ni-chevron-down"></em>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="nk-profile-content toggle-expand-content" data-content="sidebarProfile">
                                    <div class="user-account-info between-center">
                                        <div class="user-account-main">
                                            <h6 class="overline-title-alt">Available Balance</h6>
                                            <div class="user-balance">2.014095 <small class="currency currency-btc">BTC</small></div>
                                            <div class="user-balance-alt">18,934.84 <span class="currency currency-btc">BTC</span></div>
                                        </div>
                                        <a href="#" class="btn btn-icon btn-light"><em class="icon ni ni-line-chart"></em></a>
                                    </div>
                                    <ul class="user-account-data">
                                        <li>
                                            <div class="user-account-label">
                                                <span class="sub-text">Profits (7d)</span>
                                            </div>
                                            <div class="user-account-value">
                                                <span class="lead-text">+ 0.0526 <span class="currency currency-btc">BTC</span></span>
                                                <span class="text-success ml-2">3.1% <em class="icon ni ni-arrow-long-up"></em></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="user-account-label">
                                                <span class="sub-text">Deposit in orders</span>
                                            </div>
                                            <div class="user-account-value">
                                                <span class="sub-text text-base">0.005400 <span class="currency currency-btc">BTC</span></span>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="user-account-links">
                                        <li><a href="#" class="link"><span>Withdraw Funds</span> <em class="icon ni ni-wallet-out"></em></a></li>
                                        <li><a href="#" class="link"><span>Deposit Funds</span> <em class="icon ni ni-wallet-in"></em></a></li>
                                    </ul>
                                    <ul class="link-list">
                                        <li><a href="html/crypto/profile.html"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                        <li><a href="html/crypto/profile-security.html"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li>
                                        <li><a href="html/crypto/profile-activity.html"><em class="icon ni ni-activity-alt"></em><span>Login Activity</span></a></li>
                                    </ul>
                                    <ul class="link-list">
                                        <li><a href="#"><em class="icon ni ni-signout"></em><span>Sign out</span></a></li>
                                    </ul>
                                </div>
                            </div><!-- .nk-sidebar-widget -->
                            <div class="nk-sidebar-menu">
                                <!-- Menu -->
                                <ul class="nk-menu">

                                    <li class="nk-menu-item">
                                        <a href="html/crypto/index.html" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                                            <span class="nk-menu-text">Dashboard</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/crypto/accounts.html" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-user-c"></em></span>
                                            <span class="nk-menu-text">My Account</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/crypto/wallets.html" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-wallet-alt"></em></span>
                                            <span class="nk-menu-text">Wallets</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/crypto/buy-sell.html" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-coins"></em></span>
                                            <span class="nk-menu-text">Buy / Sell</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/crypto/order-history.html" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-repeat"></em></span>
                                            <span class="nk-menu-text">Orders</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/crypto/chats.html" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-chat-circle"></em></span>
                                            <span class="nk-menu-text">Chats</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/crypto/profile.html" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-account-setting"></em></span>
                                            <span class="nk-menu-text">My Profile</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item has-sub">
                                        <a href="#" class="nk-menu-link nk-menu-toggle">
                                            <span class="nk-menu-icon"><em class="icon ni ni-files"></em></span>
                                            <span class="nk-menu-text">Additional Pages</span>
                                        </a>
                                        <ul class="nk-menu-sub">
                                            <li class="nk-menu-item">
                                                <a href="html/crypto/welcome.html" class="nk-menu-link"><span class="nk-menu-text">Welcome</span></a>
                                            </li>
                                            <li class="nk-menu-item">
                                                <a href="html/crypto/kyc-application.html" class="nk-menu-link"><span class="nk-menu-text">KYC - Get Started</span></a>
                                            </li>
                                            <li class="nk-menu-item">
                                                <a href="html/crypto/kyc-form.html" class="nk-menu-link"><span class="nk-menu-text">KYC - Application Form</span></a>
                                            </li>
                                        </ul><!-- .nk-menu-sub -->
                                    </li><!-- .nk-menu-item -->
                                  
                                </ul><!-- .nk-menu -->
                            </div><!-- .nk-sidebar-menu -->


                        </div><!-- .nk-sidebar-content -->
                    </div><!-- .nk-sidebar-body -->
                </div><!-- .nk-sidebar-element -->
</div>
<!-- sidebar @e -->
<!-- wrap @s -->
<div class="nk-wrap ">
    <!-- main header @s -->
    <div class="nk-header nk-header-fixed is-light">
        <div class="container-fluid">
            <div class="nk-header-wrap">
                <div class="nk-menu-trigger d-xl-none ml-n1">
                    <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                </div>
                <div class="nk-header-brand d-xl-none">
                    <a href="html/index.html" class="logo-link">
                        <img class="logo-light logo-img" src="./images/logo.png" srcset="./images/logo2x.png 2x" alt="logo">
                        <img class="logo-dark logo-img" src="./images/logo-dark.png" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                    </a>
                </div><!-- .nk-header-brand -->

                <div class="nk-header-tools">
                    <ul class="nk-quick-nav">
                        <li class="dropdown user-dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <div class="user-toggle">
                                    <div class="user-avatar sm">
                                        <em class="icon ni ni-user-alt"></em>
                                    </div>
                                    <div class="user-info d-none d-md-block">

                                        <div class="user-name dropdown-indicator">{{ Auth::User()->name}}</div>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-md dropdown-menu-right dropdown-menu-s1">
                                <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                    <div class="user-card">
                                        <div class="user-avatar">
                                            <span>AB</span>
                                        </div>
                                       <div class="user-info">
                                                        <span class="lead-text">{{ Auth::User()->name}}</span>
                                                        <span class="sub-text">{{ Auth::user()->email}}</span>
                                                    </div>
                                    </div>
                                </div>
                                <div class="dropdown-inner">
                                    <ul class="link-list">
                                        {{-- <li><a href="html/user-profile-regular.html"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li> --}}
                                        <li><a href="{{route('profile')}}"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li>
                                        <li><a href="html/user-profile-activity.html"><em class="icon ni ni-activity-alt"></em><span>Login Activity</span></a></li>
                                    </ul>
                                </div>
                                <div class="dropdown-inner">
                                    <ul class="link-list">
                                        <li>
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                          document.getElementById('logout-form').submit();">
                                             {{ __('Logout') }}
                                         </a>


                                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                             @csrf
                                         </form>
                                        </li>



                                    </ul>
                                </div>
                            </div>
                        </li><!-- .dropdown -->
                        <li class="dropdown notification-dropdown mr-n1">
                            <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-toggle="dropdown">
                                <div class="icon-status icon-status-info"><em class="icon ni ni-bell"></em></div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right dropdown-menu-s1">
                                <div class="dropdown-head">
                                    <span class="sub-title nk-dropdown-title">Notifications</span>
                                    <a href="#">Mark All as Read</a>
                                </div>
                                <div class="dropdown-body">
                                    <div class="nk-notification">
                                        <div class="nk-notification-item dropdown-inner">
                                            <div class="nk-notification-icon">
                                                <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                            </div>
                                            <div class="nk-notification-content">
                                                <div class="nk-notification-text">You have requested to <span>Widthdrawl</span></div>
                                                <div class="nk-notification-time">2 hrs ago</div>
                                            </div>
                                        </div>
                                        <div class="nk-notification-item dropdown-inner">
                                            <div class="nk-notification-icon">
                                                <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                            </div>
                                            <div class="nk-notification-content">
                                                <div class="nk-notification-text">Your <span>Deposit Order</span> is placed</div>
                                                <div class="nk-notification-time">2 hrs ago</div>
                                            </div>
                                        </div>
                                        <div class="nk-notification-item dropdown-inner">
                                            <div class="nk-notification-icon">
                                                <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                            </div>
                                            <div class="nk-notification-content">
                                                <div class="nk-notification-text">You have requested to <span>Widthdrawl</span></div>
                                                <div class="nk-notification-time">2 hrs ago</div>
                                            </div>
                                        </div>
                                        <div class="nk-notification-item dropdown-inner">
                                            <div class="nk-notification-icon">
                                                <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                            </div>
                                            <div class="nk-notification-content">
                                                <div class="nk-notification-text">Your <span>Deposit Order</span> is placed</div>
                                                <div class="nk-notification-time">2 hrs ago</div>
                                            </div>
                                        </div>
                                        <div class="nk-notification-item dropdown-inner">
                                            <div class="nk-notification-icon">
                                                <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                            </div>
                                            <div class="nk-notification-content">
                                                <div class="nk-notification-text">You have requested to <span>Widthdrawl</span></div>
                                                <div class="nk-notification-time">2 hrs ago</div>
                                            </div>
                                        </div>
                                        <div class="nk-notification-item dropdown-inner">
                                            <div class="nk-notification-icon">
                                                <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                            </div>
                                            <div class="nk-notification-content">
                                                <div class="nk-notification-text">Your <span>Deposit Order</span> is placed</div>
                                                <div class="nk-notification-time">2 hrs ago</div>
                                            </div>
                                        </div>
                                    </div><!-- .nk-notification -->
                                </div><!-- .nk-dropdown-body -->
                                <div class="dropdown-foot center">
                                    <a href="#">View All</a>
                                </div>
                            </div>
                        </li><!-- .dropdown -->
                    </ul><!-- .nk-quick-nav -->
                </div><!-- .nk-header-tools -->
            </div><!-- .nk-header-wrap -->
        </div><!-- .container-fliud -->
    </div>
