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
			<div class="modal-footer">
				<button onclick="goToMessanger()" type="button" class="btn btn-primary">Update</button>
				<button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
			</div>										
		</div>
	</div>
</div>
<!--end modal add data-->