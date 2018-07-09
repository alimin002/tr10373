<!-- Modal Add Data-->
<div class="modal fade" id="modal-edit-profile" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Edit Profile</h4>
			</div>
			<div class="modal-body">
										<div class="space-12"></div>

										<!-- #section:pages/profile.info -->
										<form name="frm-edit-profile-modal" id="frm-edit-profile-modal">
											<div class="profile-user-info profile-user-info-striped">
												<div class="profile-info-row">
													<div class="profile-info-name"> Username </div>

													<div class="profile-info-value">
														<span class="editable editable-click" id="username">
														<input value="{{ session('session_login')['username'] }}" type="text" class="form-control" name="username" id="username"/>
														<input value="{{ session('session_login')['app_user_id'] }}" type="hidden" class="form-control" id="app_user_id" name="app_user_id"/>
														</span>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name">Address</div>

													<div class="profile-info-value">
														<span class="editable editable-click" id="country"><input type="text" class="form-control" name="address" id="adress"/></span>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name">Birth Date</div>

													<div class="profile-info-value">
														<span class="editable editable-click" id="age"><input type="text" class="form-control" name="address" id="adress"></span>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name">Birth Place</div>

													<div class="profile-info-value">
														<span class="editable editable-click" id="signup"><input type="text" class="form-control" name="birth_place" id="birth_place"></span>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name">Gender</div>
													<div class="profile-info-value">
														<span class="editable editable-click" id="login">
															<select name="gender_id" id="gender_id" class="form-control">
																<option>Choose Gender</option>
																<option>Male</option>
																<option>Female</option>
															</select>
														</span>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> About Me </div>

													<div class="profile-info-value">
														<span class="editable editable-click" id="about">
															<textarea class="form-control" name="aboutme"></textarea>
														</span>
													</div>
												</div>
											</div>
										</form>
										<!-- /section:pages/profile.info -->
										<div class="space-20"></div>
														
			</div>
			<div class="modal-footer">
				<button onclick="goToMessanger()" type="button" class="btn btn-primary">Update</button>
				<button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
			</div>										
		</div>
	</div>
</div>
<!--end modal add data-->