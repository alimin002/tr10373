<!-- Modal Add Data-->
<div class="modal fade" id="modal-upload-foto" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Change Photo Profile</h4>
			</div>
			<div class="modal-body">

				<div class="widget-main">
					<div class="form-group">
						<form id="form-upload-profile" action="{{url('my_profile/upload_photo_profile')}}" method="POST" enctype="multipart/form-data">
							{!! csrf_field() !!}
							<div class="col-xs-12">
								<label class="ace-file-input ace-file-multiple">
									<input multiple="" type="file" id="id-input-file-3" name="id-input-file-3"/>
								</label>
								<label>
									<input type="checkbox" name="file-format" id="id-file-format" class="ace" checked />
									<span class="lbl"> Allow only images</span>
								</label>
							</div>
						</form>
					</div>						
				</div>														
			</div>
			<div class="modal-footer">
				<button onclick="uploadPhoto()" type="button" class="btn btn-primary">Upload</button>
				<button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
			</div>										
		</div>
	</div>
</div>
<!--end modal add data-->