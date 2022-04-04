	  <nav id="navigation" class="style_one">
            <ul id="responsive">
              <li><a href="{{ route('index') }}">Home</a>

              </li>
              <li><a href="{{ route('about') }}">About</a>

              </li>
              <li><a href="{{ route('pricing') }}">Pricing</a>

              </li>
              <li><a href="{{ route('contact') }}">Contact</a>

              </li>

            </ul>
          </nav>
          <div class="clearfix"></div>
        </div>
        <div class="utf_right_side">
          <div class="header_widget">
			<div class="dashboard_header_button_item has-noti js-item-menu">
				<i class="sl sl-icon-bell"></i>
				<div class="dashboard_notifi_dropdown js-dropdown">
					<div class="dashboard_notifi_title">
						<p>You Have 2 Notifications</p>
					</div>
					<div class="dashboard_notifi_item">
						<div class="bg-c1 red">
							<i class="fa fa-check"></i>
						</div>
						<div class="content">
							<p>Your Listing <b>Burger House (MG Road)</b> Has Been Approved!</p>
							<span class="date">2 hours ago</span>
						</div>
					</div>
					<div class="dashboard_notifi_item">
						<div class="bg-c1 green">
							<i class="fa fa-envelope"></i>
						</div>
						<div class="content">
							<p>You Have 7 Unread Messages</p>
							<span class="date">5 hours ago</span>
						</div>
					</div>
					<div class="dashboard_notify_bottom text-center pad-tb-20">
						<a href="#">View All Notification</a>
					</div>
				</div>
			</div>
            <div class="utf_user_menu">
              <div class="utf_user_name"><span><img src="{{ asset('dashboard/images/dashboard-avatar.jpg')}}" alt=""></span>Hi, John!</div>
              <ul>
                <li><a href="dashboard.html"><i class="sl sl-icon-layers"></i> Dashboard</a></li>
                <li><a href="dashboard_my_profile.html"><i class="sl sl-icon-user"></i> My Profile</a></li>
				<li><a href="dashboard_my_listing.html"><i class="sl sl-icon-list"></i> My Listing</a></li>
				<li><a href="dashboard_messages.html"><i class="sl sl-icon-envelope-open"></i> Messages</a></li>
				<li><a href="dashboard_bookings.html"><i class="sl sl-icon-docs"></i> Booking</a></li>
                <li><a href="index_1.html"><i class="sl sl-icon-power"></i> Logout</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="clearfix"></div>

  <!-- Dashboard -->
  <div id="dashboard">
    <a href="#" class="utf_dashboard_nav_responsive"><i class="fa fa-reorder"></i> Dashboard Sidebar Menu</a>
    <div class="utf_dashboard_navigation js-scrollbar">
      <div class="utf_dashboard_navigation_inner_block">
        <ul>
          <li class="active"><a href="dashboard.html"><i class="sl sl-icon-layers"></i> Dashboard</a></li>
		  <li><a href="dashboard_add_listing.html"><i class="sl sl-icon-plus"></i> Add Listing</a></li>
		  <li>
			<a href="#"><i class="sl sl-icon-layers"></i> My Listings</a>
			<ul>
				<li><a href="dashboard_my_listing.html">Active <span class="nav-tag green">10</span></a></li>
				<li><a href="dashboard_my_listing.html">Pending <span class="nav-tag yellow">4</span></a></li>
				<li><a href="dashboard_my_listing.html">Expired <span class="nav-tag red">8</span></a></li>
			</ul>
		  </li>
		  <li><a href="dashboard_bookings.html"><i class="sl sl-icon-docs"></i> Bookings</a></li>
		  <li><a href="dashboard_messages.html"><i class="sl sl-icon-envelope-open"></i> Messages</a></li>
		  <li><a href="dashboard_wallet.html"><i class="sl sl-icon-wallet"></i> Wallet</a></li>
		  <li>
			<a href="#"><i class="sl sl-icon-star"></i> Reviews</a>
			<ul>
				<li><a href="dashboard_visitor_review.html">Visitor Reviews <span class="nav-tag green">4</span></a></li>
				<li><a href="dashboard_submitted_review.html">Submitted Reviews <span class="nav-tag yellow">5</span></a></li>
			</ul>
		  </li>
		  <li><a href="dashboard_bookmark.html"><i class="sl sl-icon-heart"></i> Bookmark</a></li>
		  <li><a href="dashboard_my_profile.html"><i class="sl sl-icon-user"></i> My Profile</a></li>
		  <li><a href="dashboard_change_password.html"><i class="sl sl-icon-key"></i> Change Password</a></li>
          <li><a href="index_1.html"><i class="sl sl-icon-power"></i> Logout</a></li>
        </ul>
      </div>
    </div>
    