@extends('main')
@section('title', 'Users')
@section('content')
<div class="page-content">
		<div class="col-xs-12">
				@if(session()->has('message'))							
					<div class="alert alert-block alert-success">
						<button type="button" class="close" data-dismiss="alert">
							<i class="ace-icon fa fa-times"></i>
						</button>

						<i class="ace-icon fa fa-check green"></i>

						{{session()->get('message')}}
					</div>
				@endif
			
			<h3 class="header smaller lighter blue">Data @yield("title")</h3>
			<div class="table-header">
				Results for "@yield('title')"
			</div>
			<div>
				<div id="sample-table-2_wrapper" class="dataTables_wrapper form-inline" role="grid">
					<div class="row">
						<div class="col-xs-6">
							<div id="sample-table-2_length" class="dataTables_length">
								<label>Display <select size="1" name="sample-table-2_length" aria-controls="sample-table-2"><option value="10" selected="selected">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> records</label>
							</div>
						</div>
						<div class="col-xs-6">
							<div class="dataTables_filter" id="sample-table-2_filter">
								<form action="{{url('sys_user')}}" method="post">
									{{ csrf_field() }}
								<label>Search: <input placeholder="type keyword" name="keyword" type="text" aria-controls="sample-table-2"></label>
								</form>
							</div>
						</div>
					</div>
					<table id="sample-table-2" class="table table-striped table-bordered table-hover dataTable" aria-describedby="sample-table-2_info">
					<thead>
						<tr role="row">
							<th class="center sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="">
								<label class="position-relative">
									<input type="checkbox" class="ace">
									<span class="lbl"></span>
								</label>
							</th>
							<th class="sorting" role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" aria-label="Domain: activate to sort column ascending">
								Username
							</th>
							<th class="sorting" role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" aria-label="Price: activate to sort column ascending">
								Roles
							</th>						
							<th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label=""></th>
						</tr>
					</thead>			
				<tbody role="alert" aria-live="polite" aria-relevant="all">
					<?php $row_style=1; ?>
				@foreach($data as $key => $values)
				<tr @if($row_style % 2 ==0) class="odd" @else class="even"  @endif>
							<td class="center  sorting_1">
								<label class="position-relative">
									<input type="checkbox" class="ace">
									<span class="lbl"></span>
								</label>
							</td>
							<td class=" ">{{$values["username"]}}</td>
							<td class=" ">{{$values["role_name"]}}</td>							
							<td class=" ">
								<!--dekstop view-->
								<div class="hidden-sm hidden-xs action-buttons">
									<a class="green" href="#" onclick="edit('{{$values['sys_user_id']}}')">
										<i class="ace-icon fa fa-pencil bigger-130"></i>
									</a>
									<a class="red" href="#" onclick="deleteData('{{$values['sys_user_id']}}')">
										<i class="ace-icon fa fa-trash-o bigger-130"></i>
									</a>																									
								</div>
								<!--dekstop view-->
								
								<!--mobile view-->
								<div class="hidden-md hidden-lg">
									<div class="inline position-relative">
										<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
											<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
										</button>

										<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
											<li>
												<a href="#" onclick="edit('{{$values['sys_user_id']}}')" class="tooltip-success" data-rel="tooltip" title="" data-original-title="Edit" >
													<span class="green" >
														<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
													</span>
												</a>
											</li>

											<li>
												<a href="#" onclick="deleteData('{{$values['sys_user_id']}}')" class="tooltip-error" data-rel="tooltip" title="" data-original-title="Delete">
													<span class="red">
														<i class="ace-icon fa fa-trash-o bigger-120"></i>
													</span>
												</a>
											</li>																															
										</ul>
									</div>
								</div>
							</td>
						</tr>
						<?php $row_style ++; ?>
						@endforeach
						</tbody>
				</tbody>
			</table>
			<div class="row">
			<div class="col-xs-6">
				<button class="btn btn-white btn-primary" data-toggle="modal" data-target="#modal-add"><i class="fa fa-plus">&nbsp;Add</i></button>
				<div class="dataTables_info" id="sample-table-2_info"><!--Showing 1 to 10 of 23 entries--></div>
			</div>
			<div class="col-xs-6">
			<div class="dataTables_paginate paging_bootstrap">
				<ul class="pagination">
					{{$data->links()}}
				</ul>
			</div>
			</div>
			</div>
					</div>
			</div>
		</div>
	</div>
@include('SysUsers::create')
@include('SysUsers::action_js')
@include('SysUsers::edit')						
@include('SysUsers::delete')	
@endsection