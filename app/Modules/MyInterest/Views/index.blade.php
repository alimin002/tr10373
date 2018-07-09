@extends('main')
@section('title', 'My Interest')
@section('content')
	<div class="col-xs-12">
		<!-- PAGE CONTENT BEGINS -->
		<div>
			<ul class="ace-thumbnails clearfix">
				<!-- #section:pages/gallery -->
				<li>
					<a href="{{url('assets/images/gallery/image-4.jpg')}}" data-rel="colorbox">
						<img alt="150x150" src="{{url('assets/images/gallery/thumb-4.jpg')}}" />
						<div class="tags">
							<!-- #section:pages/gallery.tags -->
							<span class="label-holder">
								<span class="label label-info arrowed">Members Name</span>
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
			</ul>
		</div><!-- PAGE CONTENT ENDS -->
	</div>
@endsection