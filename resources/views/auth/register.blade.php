@extends('layouts.master')

@section('content')





	<!-- Inner Page Breadcrumb -->
	<section class="inner_page_breadcrumb">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-6">
					<div class="breadcrumb_content">
						<h2 class="breadcrumb_title">Register</h2>
						<ol class="breadcrumb">
						    <li class="breadcrumb-item"><a href="#">Home</a></li>
						    <li class="breadcrumb-item active" aria-current="page">Register</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our LogIn Register -->
	<section class="our-log-reg">
		<div class="container">
            <form method="POST" action="{{ route('register') }}"  class="needs-validation">
                @csrf
			<div class="row justify-content-center my_dashboard_review">
					<div class="row">
							<div class="col-lg-6">

								<div class="my_profile_setting_input form-group">
							    	<label for="listingPlace">Full Name</label>
							    	<input type="text"  class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required>
								</div>
							</div>


								<div class="col-lg-6">
								<div class="my_profile_setting_input form-group">
							    	<label for="listingPlace">Email</label>
							    	<input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required >
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                </div>
							</div>



							<div class="col-lg-4">
								<div class="my_profile_setting_input form-group">
							    	<label for="listingPlace">Phone Number</label>
							    	<input name="phone" type="number"class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" required >
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
							</div>










							<div class="col-lg-4">
								<div class="my_profile_setting_input form-group">
							    	<label for="listingPlace">Gender</label>
							    	<select name="gender" class="form-control @error('gender') is-invalid @enderror" value="{{ old('gender') }}" required>
							    <option value="Male">Male</option>
							    <option value="Female">Female</option>
							    	</select>
								</div>
							</div>



                            <div class="col-lg-4">
								<div class="my_profile_setting_input form-group">
							    	<label for="listingPlace">Location</label>
                                    <?php  $states =\App\Models\State::all(); ?>
                                    <select name="state_id" class="form-control form-control-lg form-control-solid">
                                        @foreach($states as $state)
                                        <option value="{{ $state->id }}">
                                            {{$state->name }}</option>
                                            @endforeach
                                    </select>
								</div>
							</div>



                            <div class="col-lg-4">
								<div class="my_profile_setting_input form-group">
							    	<label for="listingPlace">Membership Type</label>
							    	<select name="member_type" class="form-control @error('member_type') is-invalid @enderror" value="{{ old('member_type') }}" required>
							    <option value="Enterprise_Rep">Enterprise Representative</option>
							    <option value="Investor_Rep">Investor Representative</option>
                                <option value="Due_Diligence">Due Diligence Agent</option>
							    <option value="Accredited_Investor">Accredited Investor</option>
							    <option value="Incubator">Incubator</option>

							    	</select>
								</div>
							</div>


                            <div class="col-lg-4">

								<div class="my_profile_setting_input form-group">
							    	<label for="listingPlace">Company</label>
							    	<input type="text"  class="form-control @error('company') is-invalid @enderror" name="company" value="{{ old('company') }}" required >
								</div>
							</div>
                             <div class="col-lg-4">
								<div class="my_profile_setting_input form-group">
							    	<label for="listingPlace">Designation</label>
							    	<select class="form-control" data-msg="" id="fw-nationality" name="designation" >
                                    <option value="">--Designation--</option>
                                    <option value="Founder">Founder</option>
                                    <option value="Director">Director</option>
                                    <option value="CEO">CEO</option>
                                    <option value="Manager">Manager</option>

                                    </select>
                                </div>
							</div>



                            {{-- Hidden values --}}
                            <input type="hidden"  class="form-control" name="type" value="external">
                            <input type="hidden"  class="form-control" name="country_id" value="162">






							<div class="col-lg-6">
								<div class="my_profile_setting_input form-group">
							    	<label for="listingPlace"> Password</label>
                                    <input id="password" type="password"  placeholder="Enter password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <div class="invalid-feedback">
                                        Please Enter Password
                                    </div>
								</div>
							</div>



								<div class="col-lg-6">
								<div class="my_profile_setting_input form-group">
							    	<label for="listingPlace">Confirm Password </label>
							    	<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">


                                            <div class="invalid-feedback">
                                                Confirm Password
                                            </div>
								</div>
							</div>



							</div>

                            <button type="submit"  class="btn btn-thm listing_save_btn mt30">
                                {{ __('Register') }}
                            </button>





						</div>

			</div>
        </form>
		</div>
	</section>


    @endsection
