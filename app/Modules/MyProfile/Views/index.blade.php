@extends('main')
@section('title', 'My Profile')
@section('content')
<div class="col-xs-12 col-sm-3 center">
										<div>
											<!-- #section:pages/profile.picture -->
											<span class="profile-picture" onclick="showFormUpload()">
												@if(session('session_photo_profile')=="")
												<img id="avatar" class="editable img-responsive editable-click editable-empty" alt="Alex's Avatar" src="{{url('assets/avatars/profile-pic.jpg')}}">
											    @else
												<img id="avatar" class="editable img-responsive editable-click editable-empty" alt="Alex's Avatar" src="{{url('uploads/image').'/'.session('session_login')['app_user_id'].'/'.$photo_profile}}">
												
												@endif
											</span>

											<!-- /section:pages/profile.picture -->
											<div class="space-4"></div>

											<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
												<div class="inline position-relative">
													<a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
														<i class="ace-icon fa fa-circle light-green"></i>
														&nbsp;
														<span class="white">{{ session('session_login')['username'] }}</span>
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
												<a href="#" class="btn btn-link" onclick="showFormEditProfile()">
													<i class="ace-icon fa fa-pencil bigger-120 green"></i>
													<input type="hidden" id="app_user_profile_id_view" name="app_user_profile_id_view" value="{{$data_profile['app_user_profile_id']}}"/>
													Edit Profile
												</a>
												<a href="#" class="btn btn-link" onclick="showFormUpload()">
													<i class="ace-icon fa fa-camera bigger-120 green"></i>
													Change Photo
												</a>
												<a href="#" class="btn btn-link">
													<i class="ace-icon fa fa-picture-o bigger-120 green"></i>
													Album
												</a>
											</div>								
											<div class="space-6"></div>											
										</div>
										
										<!-- /section:pages/profile.contact -->
										<div class="hr hr12 dotted"></div>

										<!-- #section:custom/extra.grid -->
										<div class="clearfix">
											<div class="grid2">
												<span class="bigger-175 blue">25</span>

												<br>
												Interest In Me
											</div>

											<div class="grid2">
												<span class="bigger-175 blue">12</span>

												<br>
												My Interest
											</div>
										</div>

										<!-- /section:custom/extra.grid -->
										<div class="hr hr16 dotted"></div>
									</div>
									
									<div class="col-xs-12 col-sm-9">
										<div class="space-12"></div>

										<!-- #section:pages/profile.info -->
										<form name="frm-edit-profile-index" id="frm-edit-profile-index">
											<div class="profile-user-info profile-user-info-striped">
												<div class="profile-info-row">
													<div class="profile-info-name"> Username </div>

													<div class="profile-info-value">
														<span class="editable editable-click" id="username">
															{{ session('session_login')['username'] }}
														</span>
													</div>
												</div>
												<div class="profile-info-row">
													<div class="profile-info-name"> Full Name </div>

													<div class="profile-info-value">
														<span class="editable editable-click" id="username">
															{{ $data_profile["fullname"] }} 
														</span>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name">Addres</div>

													<div class="profile-info-value">
														<span class="editable editable-click" id="country">
															{{ $data_profile["addres"] }}
														</span>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name">Birth Date</div>

													<div class="profile-info-value">
														<span class="editable editable-click" id="age">
															{{ $data_profile["birth_date"] }}
														</span>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name">Birth Place</div>

													<div class="profile-info-value">
														<span class="editable editable-click" id="signup">
														    {{ $data_profile["birth_place"] }}
														</span>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name">Gender</div>

													<div class="profile-info-value">
														<span class="editable editable-click" id="login">
															@if($data_profile["gender_id"]==1)
																Male
																@else
															    Female
															@endif
														</span>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> About Me </div>

													<div class="profile-info-value">
														<span class="editable editable-click" id="about">
															{{ $data_profile["about_me"] }}
														</span>
													</div>
												</div>
											</div>
										</form>

										<!-- /section:pages/profile.info -->
										<div class="space-20"></div>

									</div>
									
									@include('MyProfile::form_upload')
									@include('MyProfile::form_edit_profile')
									@include('MyProfile::action_js')

@endsection