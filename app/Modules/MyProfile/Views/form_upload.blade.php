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
														<div class="col-xs-12">
															<label class="ace-file-input ace-file-multiple">
																<input multiple="" type="file" id="id-input-file-3">
																<!----
																<span class="ace-file-container" data-title="Drop files here or click to choose"><span class="ace-file-name" data-title="No File ..."><i class=" ace-icon ace-icon fa fa-cloud-upload"></i></span>
																</span>
																<a class="remove" href="#"><i class=" ace-icon fa fa-times"></i></a>--->
															</label>
																<!-- #section:custom/file-input.filter -->
															<label>
																<input type="checkbox" name="file-format" id="id-file-format" class="ace" checked>
																<span class="lbl"> Allow only images</span>
															</label>

															<!-- /section:custom/file-input.filter -->
															<!-- /section:custom/file-input -->
														</div>
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