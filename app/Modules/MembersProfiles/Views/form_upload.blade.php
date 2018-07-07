<!-- Modal Add Data-->
<div class="modal fade" id="modal-messanger" role="dialog">
	<div class="modal-dialog md-12">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Write message to Diana</h4>
			</div>
			<div class="modal-body">
					<form name="frm-messanger" id="frm-messanger" action="{{url('sales/save')}}" method="post">
					{{ csrf_field() }}
					<div class="row">
						<div class="col-sm-12">								
							<div class="form-group">
								<label>Message</label> 
								<textarea placeholder="" name="description" id="description" required="" class="form-control"></textarea>
							</div>
						</div>
					</form>																	
				 </div>														
			</div>
			<div class="modal-footer">
				<button onclick="goToMessanger()" type="button" class="btn btn-primary">Send Message</button>
				<button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
			</div>										
		</div>
	</div>
</div>
<!--end modal add data-->