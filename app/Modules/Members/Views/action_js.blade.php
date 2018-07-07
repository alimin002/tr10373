		<script src="{{url('assets/js/jquery.min.js')}}"></script>
		<script src="{{url('assets/js/jquery.colorbox-min.js')}}"></script>

		<script type="text/javascript">
			jQuery(function($) {
				var $overflow = '';
				var colorbox_params = {
					rel: 'colorbox',
					reposition:true,
					scalePhotos:true,
					scrolling:false,
					previous:'<i class="ace-icon fa fa-arrow-left"></i>',
					next:'<i class="ace-icon fa fa-arrow-right"></i>',
					close:'&times;',
					current:'{current} of {total}',
					maxWidth:'100%',
					maxHeight:'100%',
					onOpen:function(){
						$overflow = document.body.style.overflow;
						document.body.style.overflow = 'hidden';
					},
					onClosed:function(){
						document.body.style.overflow = $overflow;
					},
					onComplete:function(){
						$.colorbox.resize();
					}
				};

				$('.ace-thumbnails [data-rel="colorbox"]').colorbox(colorbox_params);
				$("#cboxLoadingGraphic").append("<i class='ace-icon fa fa-spinner orange'></i>");//let's add a custom loading icon
			})
			
			function displayFormMessage(){
				$("#modal-messanger").modal("show");
			}
			
			function goToMessanger(){
				//alert(1);
				$("#modal-messanger").modal("hide");
					var url='{{url("messanger")}}';
					location.href = url;
			}
			function displayMemberProfile(){
				//alert(1);
					var url='{{url("member_profile")}}';
					location.href = url;
			}
		</script>