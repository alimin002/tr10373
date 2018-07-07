@extends('main')
@section('title', 'User Profile')
@section('content')
<div class="col-xs-12 col-sm-3 center">
										<div>
											<!-- #section:pages/profile.picture -->
											<span class="profile-picture">
												<img id="avatar" class="editable img-responsive editable-click editable-empty" alt="Alex's Avatar" src="{{url('assets/avatars/profile-pic.jpg')}}">
											</span>

											<!-- /section:pages/profile.picture -->
											<div class="space-4"></div>

											<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
												<div class="inline position-relative">
													<a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
														<i class="ace-icon fa fa-circle light-green"></i>
														&nbsp;
														<span class="white">Alex M. Doe</span>
													</a>

													<ul class="align-left dropdown-menu dropdown-caret dropdown-lighter">
														<li class="dropdown-header"> Change Status </li>

														<li>
															<a href="#">
																<i class="ace-icon fa fa-circle green"></i>
&nbsp;
																<span class="green">Available</span>
															</a>
														</li>

														<li>
															<a href="#">
																<i class="ace-icon fa fa-circle red"></i>
&nbsp;
																<span class="red">Busy</span>
															</a>
														</li>

														<li>
															<a href="#">
																<i class="ace-icon fa fa-circle grey"></i>
&nbsp;
																<span class="grey">Invisible</span>
															</a>
														</li>
													</ul>
												</div>
											</div>
										</div>

										<div class="space-6"></div>

										<!-- #section:pages/profile.contact -->
										<div class="profile-contact-info">
											<div class="profile-contact-links align-left">
												<a href="#" class="btn btn-link">
													<i class="ace-icon fa fa-plus-circle bigger-120 green"></i>
													Add as a friend
												</a>

												<a href="#" class="btn btn-link">
													<i class="ace-icon fa fa-envelope bigger-120 pink"></i>
													Send a message
												</a>

												<a href="#" class="btn btn-link">
													<i class="ace-icon fa fa-globe bigger-125 blue"></i>
													www.alexdoe.com
												</a>
											</div>

											<div class="space-6"></div>

											<div class="profile-social-links align-center">
												<a href="#" class="tooltip-info" title="" data-original-title="Visit my Facebook">
													<i class="middle ace-icon fa fa-facebook-square fa-2x blue"></i>
												</a>

												<a href="#" class="tooltip-info" title="" data-original-title="Visit my Twitter">
													<i class="middle ace-icon fa fa-twitter-square fa-2x light-blue"></i>
												</a>

												<a href="#" class="tooltip-error" title="" data-original-title="Visit my Pinterest">
													<i class="middle ace-icon fa fa-pinterest-square fa-2x red"></i>
												</a>
											</div>
										</div>

										<!-- /section:pages/profile.contact -->
										<div class="hr hr12 dotted"></div>

										<!-- #section:custom/extra.grid -->
										<div class="clearfix">
											<div class="grid2">
												<span class="bigger-175 blue">25</span>

												<br>
												Followers
											</div>

											<div class="grid2">
												<span class="bigger-175 blue">12</span>

												<br>
												Following
											</div>
										</div>

										<!-- /section:custom/extra.grid -->
										<div class="hr hr16 dotted"></div>
									</div>
									
									<div class="col-xs-12 col-sm-9">
										<div class="space-12"></div>

										<!-- #section:pages/profile.info -->
										<div class="profile-user-info profile-user-info-striped">
											<div class="profile-info-row">
												<div class="profile-info-name"> Username </div>

												<div class="profile-info-value">
													<span class="editable editable-click" id="username">alexdoe</span>
												</div>
											</div>

											<div class="profile-info-row">
												<div class="profile-info-name"> Location </div>

												<div class="profile-info-value">
													<i class="fa fa-map-marker light-orange bigger-110"></i>
													<span class="editable editable-click" id="country">Netherlands</span>
													<span class="editable editable-click" id="city">Amsterdam</span>
												</div>
											</div>

											<div class="profile-info-row">
												<div class="profile-info-name"> Age </div>

												<div class="profile-info-value">
													<span class="editable editable-click" id="age">38</span>
												</div>
											</div>

											<div class="profile-info-row">
												<div class="profile-info-name"> Joined </div>

												<div class="profile-info-value">
													<span class="editable editable-click" id="signup">2010/06/20</span>
												</div>
											</div>

											<div class="profile-info-row">
												<div class="profile-info-name"> Last Online </div>

												<div class="profile-info-value">
													<span class="editable editable-click" id="login">3 hours ago</span>
												</div>
											</div>

											<div class="profile-info-row">
												<div class="profile-info-name"> About Me </div>

												<div class="profile-info-value">
													<span class="editable editable-click" id="about">Editable as WYSIWYG</span>
												</div>
											</div>
										</div>

										<!-- /section:pages/profile.info -->
										<div class="space-20"></div>

									</div>

@endsection