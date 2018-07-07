<!-- Modal Add Data-->
<div class="modal fade" id="modal-upload-foto" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Change Photo Profile</h4>
			</div>
			<div class="modal-body">
							<!-- PAGE CONTENT BEGINS -->
							<div>
								<form action="../dummy.html" class="dropzone dz-clickable" id="dropzone">
									
								<div class="dz-default dz-message"><span><span class="bigger-150 bolder"><i class="ace-icon fa fa-caret-right red"></i> Drop files</span> to upload 				<span class="smaller-80 grey">(or click)</span> <br> 				<i class="upload-icon ace-icon fa fa-cloud-upload blue fa-3x"></i></span></div></form>
							</div><!-- PAGE CONTENT ENDS -->
														
			</div>
			<div class="modal-footer">
				<button onclick="uploadPhoto()" type="button" class="btn btn-primary">Upload</button>
				<button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
			</div>										
		</div>
	</div>
</div>
<!--end modal add data-->