		<!---
		<script src="{{url('assets/js/jquery.min.js')}}"></script>
		<script src="{{url('assets/js/dropzone.min.js')}}"></script>
		<script src="{{url('assets/js/ace-elements.min.js')}}"></script>
		<script src="{{url('assets/js/ace.min.js')}}"></script>
		-->
		<script src="{{url('assets/js/jquery.min.js')}}"></script>
		<script src="{{url('assets/js/date-time/bootstrap-datepicker.min.js')}}"></script>
		<script type="text/javascript">		
			function showFormUpload(){
				//droppzone image Upload
			jQuery(function($){
			
				//pre-show a file name, for example a previously selected file
				//$('#id-input-file-1').ace_file_input('show_file_list', ['myfile.txt'])
			
			
				$('#id-input-file-3').ace_file_input({
					style:'well',
					btn_choose:'Drop files here or click to choose',
					btn_change:null,
					no_icon:'ace-icon fa fa-cloud-upload',
					droppable:true,
					thumbnail:'small'//large | fit
					//,icon_remove:null//set null, to hide remove/reset button
					/**,before_change:function(files, dropped) {
						//Check an example below
						//or examples/file-upload.html
						return true;
					}*/
					/**,before_remove : function() {
						return true;
					}*/
					,
					preview_error : function(filename, error_code) {
						//name of the file that failed
						//error_code values
						//1 = 'FILE_LOAD_FAILED',
						//2 = 'IMAGE_LOAD_FAILED',
						//3 = 'THUMBNAIL_FAILED'
						//alert(error_code);
					}
			
				}).on('change', function(){
					//console.log($(this).data('ace_input_files'));
					//console.log($(this).data('ace_input_method'));
				});
				
			
				//dynamically change allowed formats by changing allowExt && allowMime function
				$('#id-file-format').removeAttr('checked').on('change', function() {
					var whitelist_ext, whitelist_mime;
					var btn_choose
					var no_icon
					if(this.checked) {
						btn_choose = "Drop images here or click to choose";
						no_icon = "ace-icon fa fa-picture-o";
			
						whitelist_ext = ["jpeg", "jpg", "png", "gif" , "bmp"];
						whitelist_mime = ["image/jpg", "image/jpeg", "image/png", "image/gif", "image/bmp"];
					}
					else {
						btn_choose = "Drop files here or click to choose";
						no_icon = "ace-icon fa fa-cloud-upload";
						
						whitelist_ext = null;//all extensions are acceptable
						whitelist_mime = null;//all mimes are acceptable
					}
					var file_input = $('#id-input-file-3');
					file_input
					.ace_file_input('update_settings',
					{
						'btn_choose': btn_choose,
						'no_icon': no_icon,
						'allowExt': whitelist_ext,
						'allowMime': whitelist_mime
					})
					file_input.ace_file_input('reset_input');
					
					file_input
					.off('file.error.ace')
					.on('file.error.ace', function(e, info) {
						//console.log(info.file_count);//number of selected files
						//console.log(info.invalid_count);//number of invalid files
						//console.log(info.error_list);//a list of errors in the following format
						
						//info.error_count['ext']
						//info.error_count['mime']
						//info.error_count['size']
						
						//info.error_list['ext']  = [list of file names with invalid extension]
						//info.error_list['mime'] = [list of file names with invalid mimetype]
						//info.error_list['size'] = [list of file names with invalid size]
						
						
						/**
						if( !info.dropped ) {
							//perhapse reset file field if files have been selected, and there are invalid files among them
							//when files are dropped, only valid files will be added to our file array
							e.preventDefault();//it will rest input
						}
						*/
						
						
						//if files have been selected (not dropped), you can choose to reset input
						//because browser keeps all selected files anyway and this cannot be changed
						//we can only reset file field to become empty again
						//on any case you still should check files with your server side script
						//because any arbitrary file can be uploaded by user and it's not safe to rely on browser-side measures
					});
				
				});
			
			
			
			});
				$("#modal-upload-foto").modal("show");
			}
			//datepicker plugin
				//link
				jQuery(function($){
				$('.date-picker').datepicker({
					autoclose: true,
					todayHighlight: true
				})
				//show datepicker when clicking on the icon
				.next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
				});
			function showFormEditProfile(){
				
				var app_user_profile_id=$("#app_user_profile_id_view").val();
				
				if(app_user_profile_id != ""){
						$.ajax({ 
						type: 'GET', 
						url: '{{url("my_profile/edit")}}'+'/'+app_user_profile_id, 
						dataType: 'json',
						success: function (response){ 
							//alert("response oke");						
							$("#frm-edit-profile #app_user_profile_id").val(response["app_user_profile_id"]);
							$("#frm-edit-profile #fullname").val(response["fullname"]);							
							$("#frm-edit-profile #birth_place").val(response["birth_place"]);
							$("#frm-edit-profile #birth_date").val(response["birth_date"]);
							$("#frm-edit-profile #marital_status_id").val(response["marital_status_id"]);
							$("#frm-edit-profile #telephone_number").val(response["telephone_number"]);											
							$("#frm-edit-profile #addres").val(response["addres"]);		
							$("#frm-edit-profile #about_me").val(response["about_me"]);
                            var gender="";
							if(gender_id==1){
								gender="Male"
							}else{
								gender="Female"
							}
							$("#frm-edit-profile #gender_id").empty();
							$("#frm-edit-profile #gender_id").prepend("<option value="+gender_id+">"+gender+"</option>");
													
						}
				});
				}
				
				
				$("#modal-edit-profile").modal("show");
			}
			
			function updateProfile(){
				//alert(111);
				$("#modal-edit-profile").modal("hide");
				$("#frm-edit-profile").submit();				
			}
			
			function uploadPhoto(){
				$("#modal-upload-foto").modal("hide");
				$("#form-upload-profile").submit();
			}
		</script>