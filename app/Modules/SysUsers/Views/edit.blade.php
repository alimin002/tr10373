<!-- Modal Add Data-->
<div class="modal fade" id="modal-edit" role="dialog">
	<div class="modal-dialog md-12">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">User</h4>
			</div>
			<div class="modal-body">
					<form name="frm-edit" id="frm-edit" action="{{url('sys_user/update')}}" method="post">
					{{ csrf_field() }}
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<label>Username</label> 
								<input type="text" placeholder="" name="username" id="username" required="" class="form-control">
							</div>
							<div class="form-group">
								<label>Role</label> 
								<select class="form-control" id="sys_roles_id" name="sys_roles_id" required="">
									
								</select>
							</div>	
							<input type="hidden" placeholder="" name="sys_user_id" id="sys_user_id" required="" class="form-control">
						</div>
					</form>																	
				 </div>														
			</div>
			<div class="modal-footer">
				<button onclick="doUpdate()" type="button" class="btn btn-primary">Update</button>
				<button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
			</div>										
		</div>
	</div>
</div>
<!--end modal add data-->