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
					<form name="frm-edit-profile" id="frm-edit-profile" action="{{url('my_profile/update_profile')}}" method="POST">
					 {{ csrf_field() }}
						<div class="profile-user-info profile-user-info-striped">
							<div class="profile-info-row">
								<div class="profile-info-name"> Username </div>
								<div class="profile-info-value">
									<span class="editable editable-click" id="username">
									<input value="{{ session('session_login')['username'] }}" type="text" class="form-control" name="username" id="username"/>
									<input value="{{ session('session_login')['app_user_id'] }}" type="hidden" class="form-control" id="app_user_id" name="app_user_id"/>
									<input type="hidden" class="form-control" id="app_user_profile_id" name="app_user_profile_id"/>
									</span>
								</div>
							</div>
							
							<div class="profile-info-row">
								<div class="profile-info-name">Fullname </div>

								<div class="profile-info-value">
									<span class="editable editable-click" id="country"><input type="text" class="form-control" name="fullname" id="fullname"/></span>
								</div>
							</div>
							
							<div class="profile-info-row">
								<div class="profile-info-name">Address</div>

								<div class="profile-info-value">
									<span class="editable editable-click" id="country"><input type="text" class="form-control" name="addres" id="addres"/></span>
								</div>
							</div>
							<div class="profile-info-row">
								<div class="profile-info-name">Telephone Number</div>
								<div class="profile-info-value">
									<span class="editable editable-click" id="country"><input type="text" class="form-control" name="telephone_number" id="telephone_number"/></span>
								</div>
							</div>

							<div class="profile-info-row">
								<div class="profile-info-name">Birth Date</div>

								<div class="profile-info-value">
									<span class="editable editable-click" id="age">
									<div class="input-group">
										<input class="form-control date-picker" onchange="bindSelectedDate(this)" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy"/>
										<input class="form-control" id="birth_date" name="birth_date" type="hidden"/>
										<span class="input-group-addon">
											<i class="fa fa-calendar bigger-110"></i>
										</span>
									</div>
									</span>
								</div>
							</div>

							<div class="profile-info-row">
								<div class="profile-info-name">Birth Place</div>

								<div class="profile-info-value">
									<span class="editable editable-click" id="signup">
										<input type="text" class="form-control" name="birth_place" id="birth_place">
									</span>
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
										<textarea class="form-control" name="about_me" id="about_me"></textarea>
									</span>
								</div>
							</div>
						</div>
					</form>
					<!-- /section:pages/profile.info -->
					<div class="space-20"></div>														
				    <!-- /section:pages/profile.info -->
					<div class="space-20"></div>
														
			</div>
			<div class="modal-footer">
				<button onclick="updateProfile()" type="button" class="btn btn-primary">Update</button>
				<button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
			</div>										
		</div>
	</div>
</div>
<!--end modal add data-->