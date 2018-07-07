@extends('main')
@section('title', 'Taaruf Mesanger')
@section('content')
<div class="col-sm-12">
									<div class="widget-box">
										<div class="widget-header">
											<h4 class="widget-title lighter smaller">
												<i class="ace-icon fa fa-comment blue"></i>
												Conversation
											</h4>
										</div>

										<div class="widget-body">
											<div class="widget-main no-padding">
												<!-- #section:pages/dashboard.conversations -->
												<div class="dialogs ace-scroll scroll-active"><div class="scroll-track" style="display: block; height: 300px;"><div class="scroll-bar" style="height: 236px; top: 0px;"></div></div><div class="scroll-content" style="max-height: 300px;">
													<div class="itemdiv dialogdiv">
														<div class="user">
															<img alt="Alexa's Avatar" src="{{url('assets/avatars/avatar1.png')}}">
														</div>

														<div class="body">
															<div class="time">
																<i class="ace-icon fa fa-clock-o"></i>
																<span class="green">4 sec</span>
															</div>

															<div class="name">
																<a href="#">Alexa</a>
															</div>
															<div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis.</div>

															<div class="tools">
																<a href="#" class="btn btn-minier btn-info">
																	<i class="icon-only ace-icon fa fa-share"></i>
																</a>
																<a href="#" class="btn btn-minier btn-info">
																	<i class="icon-only ace-icon fa fa-trash"></i>
																</a>
															</div>
														</div>
													</div>

													<div class="itemdiv dialogdiv">
														<div class="user">
															<img alt="John's Avatar" src="{{url('assets/avatars/avatar.png')}}">
														</div>

														<div class="body">
															<div class="time">
																<i class="ace-icon fa fa-clock-o"></i>
																<span class="blue">38 sec</span>
															</div>

															<div class="name">
																<a href="#">John</a>
															</div>
															<div class="text">Raw denim you probably haven't heard of them jean shorts Austin.</div>

															<div class="tools">
																<a href="#" class="btn btn-minier btn-info">
																	<i class="icon-only ace-icon fa fa-share"></i>
																</a>
																<a href="#" class="btn btn-minier btn-info">
																	<i class="icon-only ace-icon fa fa-trash"></i>
																</a>
															</div>
														</div>
													</div>

													<div class="itemdiv dialogdiv">
														<div class="user">
															<img alt="Bob's Avatar" src="{{url('assets/avatars/user.jpg')}}">
														</div>

														<div class="body">
															<div class="time">
																<i class="ace-icon fa fa-clock-o"></i>
																<span class="orange">2 min</span>
															</div>

															<div class="name">
																<a href="#">Bob</a>
																<span class="label label-info arrowed arrowed-in-right">admin</span>
															</div>
															<div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis.</div>

															<div class="tools">
																<a href="#" class="btn btn-minier btn-info">
																	<i class="icon-only ace-icon fa fa-share"></i>
																</a>
																<a href="#" class="btn btn-minier btn-info">
																	<i class="icon-only ace-icon fa fa-trash"></i>
																</a>
															</div>
														</div>
													</div>				
												</div></div>

												<!-- /section:pages/dashboard.conversations -->
												<form>
													<div class="form-actions">
														<div class="input-group">
															<input placeholder="Type your message here ..." type="text" class="form-control" name="message">
															<span class="input-group-btn">
																<button class="btn btn-sm btn-info no-radius" type="button">
																	<i class="ace-icon fa fa-share"></i>
																	Send
																</button>
															</span>
														</div>
													</div>
												</form>
											</div><!-- /.widget-main -->
										</div><!-- /.widget-body -->
									</div><!-- /.widget-box -->
								</div>
@endsection