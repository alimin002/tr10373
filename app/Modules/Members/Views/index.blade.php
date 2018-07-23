@extends('main')
@section('title', 'Members')
@section('content')
	<?php 
	//echo "<pre>";
	//print_r($data);
	//echo "</pre>";
	?>
	<div class="col-xs-12">
		<!-- PAGE CONTENT BEGINS -->
		<div>
			<ul class="ace-thumbnails clearfix">
				<!-- #section:pages/gallery -->
				@foreach($data as $key=>$values)
				<li>
					<a data-rel="colorbox">
						<img alt="150x150" src="{{url('uploads/image/'.$values['app_user_id'].'/'.$values['photo_profile'])}}" />
						<div class="tags">
							<!-- #section:pages/gallery.tags -->
							<span class="label-holder">
								<span class="label label-info arrowed">{{$values["fullname"]}}bb</span>
							</span>
							<!-- /section:pages/gallery.tags -->
						</div>
					</a>

					<div class="tools tools-left">
						<a href="#">
							<i class="ace-icon fa fa-user" onclick="displayMemberProfile()"></i>
						</a>

						<a href="#">
							<i class="ace-icon fa fa-comment" onclick="displayFormMessage()"></i>
						</a>

						<a href="#">
							<i class="ace-icon fa fa-heart-o" onclick="send_interest()" ></i>
						</a>
					</div>
				</li>
				@endforeach
			</ul>
		</div><!-- PAGE CONTENT ENDS -->
	</div>
	@include('Members::message')
	@include('Members::action_js')
	<!-- inline scripts related to this page -->
@endsection