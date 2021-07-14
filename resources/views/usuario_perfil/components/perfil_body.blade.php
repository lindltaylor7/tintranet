
	<div class="preloader-it">
		<div class="la-anim-1"></div>
	</div>
	<!--/Preloader-->
    <div class="wrapper  theme-1-active pimary-color-blue">
		<!-- Top Menu Items -->
		@include('layout.header')
		<!-- /Top Menu Items -->

		<!-- Left Sidebar Menu -->
		@include('layout.sidebar')
		<!-- /Left Sidebar Menu -->

		<!-- Right Sidebar Menu -->
		<div class="fixed-sidebar-right">
			<ul class="right-sidebar">
				<li>
					<div  class="tab-struct custom-tab-1">
						<ul role="tablist" class="nav nav-tabs" id="right_sidebar_tab">
							<li class="active" role="presentation"><a aria-expanded="true"  data-toggle="tab" role="tab" id="chat_tab_btn" href="#chat_tab">chat</a></li>
							<li role="presentation" class=""><a  data-toggle="tab" id="messages_tab_btn" role="tab" href="#messages_tab" aria-expanded="false">messages</a></li>
							<li role="presentation" class=""><a  data-toggle="tab" id="todo_tab_btn" role="tab" href="#todo_tab" aria-expanded="false">todo</a></li>
						</ul>
						<div class="tab-content" id="right_sidebar_content">
							<div  id="chat_tab" class="tab-pane fade active in" role="tabpanel">
								<div class="chat-cmplt-wrap">
									<div class="chat-box-wrap">
										<div class="add-friend">
											<a href="javascript:void(0)" class="inline-block txt-grey">
												<i class="zmdi zmdi-more"></i>
											</a>
											<span class="inline-block txt-dark">users</span>
											<a href="javascript:void(0)" class="inline-block text-right txt-grey"><i class="zmdi zmdi-plus"></i></a>
											<div class="clearfix"></div>
										</div>
										<form role="search" class="chat-search pl-15 pr-15 pb-15">
											<div class="input-group">
												<input type="text" id="example-input1-group2" name="example-input1-group2" class="form-control" placeholder="Search">
												<span class="input-group-btn">
												<button type="button" class="btn  btn-default"><i class="zmdi zmdi-search"></i></button>
												</span>
											</div>
										</form>
										<div id="chat_list_scroll">
											<div class="nicescroll-bar">
												<ul class="chat-list-wrap">
													<li class="chat-list">
														<div class="chat-body">
															<a href="javascript:void(0)">
																<div class="chat-data">
																	<img class="user-img img-circle"  src="img/user.png" alt="user"/>
																	<div class="user-data">
																		<span class="name block capitalize-font">Clay Masse</span>
																		<span class="time block truncate txt-grey">No one saves us but ourselves.</span>
																	</div>
																	<div class="status away"></div>
																	<div class="clearfix"></div>
																</div>
															</a>
															<a href="javascript:void(0)">
																<div class="chat-data">
																	<img class="user-img img-circle"  src="img/user1.png" alt="user"/>
																	<div class="user-data">
																		<span class="name block capitalize-font">Evie Ono</span>
																		<span class="time block truncate txt-grey">Unity is strength</span>
																	</div>
																	<div class="status offline"></div>
																	<div class="clearfix"></div>
																</div>
															</a>
															<a href="javascript:void(0)">
																<div class="chat-data">
																	<img class="user-img img-circle"  src="img/user2.png" alt="user"/>
																	<div class="user-data">
																		<span class="name block capitalize-font">Madalyn Rascon</span>
																		<span class="time block truncate txt-grey">Respect yourself if you would have others respect you.</span>
																	</div>
																	<div class="status online"></div>
																	<div class="clearfix"></div>
																</div>
															</a>
															<a href="javascript:void(0)">
																<div class="chat-data">
																	<img class="user-img img-circle"  src="img/user3.png" alt="user"/>
																	<div class="user-data">
																		<span class="name block capitalize-font">Mitsuko Heid</span>
																		<span class="time block truncate txt-grey">I’m thankful.</span>
																	</div>
																	<div class="status online"></div>
																	<div class="clearfix"></div>
																</div>
															</a>
															<a href="javascript:void(0)">
																<div class="chat-data">
																	<img class="user-img img-circle"  src="img/user.png" alt="user"/>
																	<div class="user-data">
																		<span class="name block capitalize-font">Ezequiel Merideth</span>
																		<span class="time block truncate txt-grey">Patience is bitter.</span>
																	</div>
																	<div class="status offline"></div>
																	<div class="clearfix"></div>
																</div>
															</a>
															<a href="javascript:void(0)">
																<div class="chat-data">
																	<img class="user-img img-circle"  src="img/user1.png" alt="user"/>
																	<div class="user-data">
																		<span class="name block capitalize-font">Jonnie Metoyer</span>
																		<span class="time block truncate txt-grey">Genius is eternal patience.</span>
																	</div>
																	<div class="status online"></div>
																	<div class="clearfix"></div>
																</div>
															</a>
															<a href="javascript:void(0)">
																<div class="chat-data">
																	<img class="user-img img-circle"  src="img/user2.png" alt="user"/>
																	<div class="user-data">
																		<span class="name block capitalize-font">Angelic Lauver</span>
																		<span class="time block truncate txt-grey">Every burden is a blessing.</span>
																	</div>
																	<div class="status away"></div>
																	<div class="clearfix"></div>
																</div>
															</a>
															<a href="javascript:void(0)">
																<div class="chat-data">
																	<img class="user-img img-circle"  src="img/user3.png" alt="user"/>
																	<div class="user-data">
																		<span class="name block capitalize-font">Priscila Shy</span>
																		<span class="time block truncate txt-grey">Wise to resolve, and patient to perform.</span>
																	</div>
																	<div class="status online"></div>
																	<div class="clearfix"></div>
																</div>
															</a>
															<a href="javascript:void(0)">
																<div class="chat-data">
																	<img class="user-img img-circle"  src="img/user4.png" alt="user"/>
																	<div class="user-data">
																		<span class="name block capitalize-font">Linda Stack</span>
																		<span class="time block truncate txt-grey">Our patience will achieve more than our force.</span>
																	</div>
																	<div class="status away"></div>
																	<div class="clearfix"></div>
																</div>
															</a>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="recent-chat-box-wrap">
										<div class="recent-chat-wrap">
											<div class="panel-heading ma-0">
												<div class="goto-back">
													<a  id="goto_back" href="javascript:void(0)" class="inline-block txt-grey">
														<i class="zmdi zmdi-chevron-left"></i>
													</a>
													<span class="inline-block txt-dark">ryan</span>
													<a href="javascript:void(0)" class="inline-block text-right txt-grey"><i class="zmdi zmdi-more"></i></a>
													<div class="clearfix"></div>
												</div>
											</div>
											<div class="panel-wrapper collapse in">
												<div class="panel-body pa-0">
													<div class="chat-content">
														<ul class="nicescroll-bar pt-20">
															<li class="friend">
																<div class="friend-msg-wrap">
																	<img class="user-img img-circle block pull-left"  src="img/user.png" alt="user"/>
																	<div class="msg pull-left">
																		<p>Hello Jason, how are you, it's been a long time since we last met?</p>
																		<div class="msg-per-detail text-right">
																			<span class="msg-time txt-grey">2:30 PM</span>
																		</div>
																	</div>
																	<div class="clearfix"></div>
																</div>
															</li>
															<li class="self mb-10">
																<div class="self-msg-wrap">
																	<div class="msg block pull-right"> Oh, hi Sarah I'm have got a new job now and is going great.
																		<div class="msg-per-detail text-right">
																			<span class="msg-time txt-grey">2:31 pm</span>
																		</div>
																	</div>
																	<div class="clearfix"></div>
																</div>
															</li>
															<li class="self">
																<div class="self-msg-wrap">
																	<div class="msg block pull-right">  How about you?
																		<div class="msg-per-detail text-right">
																			<span class="msg-time txt-grey">2:31 pm</span>
																		</div>
																	</div>
																	<div class="clearfix"></div>
																</div>
															</li>
															<li class="friend">
																<div class="friend-msg-wrap">
																	<img class="user-img img-circle block pull-left"  src="img/user.png" alt="user"/>
																	<div class="msg pull-left">
																		<p>Not too bad.</p>
																		<div class="msg-per-detail  text-right">
																			<span class="msg-time txt-grey">2:35 pm</span>
																		</div>
																	</div>
																	<div class="clearfix"></div>
																</div>
															</li>
														</ul>
													</div>
													<div class="input-group">
														<input type="text" id="input_msg_send" name="send-msg" class="input-msg-send form-control" placeholder="Type something">
														<div class="input-group-btn emojis">
															<div class="dropup">
																<button type="button" class="btn  btn-default  dropdown-toggle" data-toggle="dropdown" ><i class="zmdi zmdi-mood"></i></button>
																<ul class="dropdown-menu dropdown-menu-right">
																	<li><a href="javascript:void(0)">Action</a></li>
																	<li><a href="javascript:void(0)">Another action</a></li>
																	<li class="divider"></li>
																	<li><a href="javascript:void(0)">Separated link</a></li>
																</ul>
															</div>
														</div>
														<div class="input-group-btn attachment">
															<div class="fileupload btn  btn-default"><i class="zmdi zmdi-attachment-alt"></i>
																<input type="file" class="upload">
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div id="messages_tab" class="tab-pane fade" role="tabpanel">
								<div class="message-box-wrap">
									<div class="msg-search">
										<a href="javascript:void(0)" class="inline-block txt-grey">
											<i class="zmdi zmdi-more"></i>
										</a>
										<span class="inline-block txt-dark">messages</span>
										<a href="javascript:void(0)" class="inline-block text-right txt-grey"><i class="zmdi zmdi-search"></i></a>
										<div class="clearfix"></div>
									</div>
									<div class="set-height-wrap">
										<div class="streamline message-box nicescroll-bar">
											<a href="javascript:void(0)">
												<div class="sl-item unread-message">
													<div class="sl-avatar avatar avatar-sm avatar-circle">
														<img class="img-responsive img-circle" src="img/user.png" alt="avatar"/>
													</div>
													<div class="sl-content">
														<span class="inline-block capitalize-font   pull-left message-per">Clay Masse</span>
														<span class="inline-block font-11  pull-right message-time">12:28 AM</span>
														<div class="clearfix"></div>
														<span class=" truncate message-subject">Themeforest message sent via your envato market profile</span>
														<p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsu messm quia dolor sit amet, consectetur, adipisci velit</p>
													</div>
												</div>
											</a>
											<a href="javascript:void(0)">
												<div class="sl-item">
													<div class="sl-avatar avatar avatar-sm avatar-circle">
														<img class="img-responsive img-circle" src="img/user1.png" alt="avatar"/>
													</div>
													<div class="sl-content">
														<span class="inline-block capitalize-font   pull-left message-per">Evie Ono</span>
														<span class="inline-block font-11  pull-right message-time">1 Feb</span>
														<div class="clearfix"></div>
														<span class=" truncate message-subject">Pogody theme support</span>
														<p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
													</div>
												</div>
											</a>
											<a href="javascript:void(0)">
												<div class="sl-item">
													<div class="sl-avatar avatar avatar-sm avatar-circle">
														<img class="img-responsive img-circle" src="img/user2.png" alt="avatar"/>
													</div>
													<div class="sl-content">
														<span class="inline-block capitalize-font   pull-left message-per">Madalyn Rascon</span>
														<span class="inline-block font-11  pull-right message-time">31 Jan</span>
														<div class="clearfix"></div>
														<span class=" truncate message-subject">Congratulations from design nominees</span>
														<p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
													</div>
												</div>
											</a>
											<a href="javascript:void(0)">
												<div class="sl-item unread-message">
													<div class="sl-avatar avatar avatar-sm avatar-circle">
														<img class="img-responsive img-circle" src="img/user3.png" alt="avatar"/>
													</div>
													<div class="sl-content">
														<span class="inline-block capitalize-font   pull-left message-per">Ezequiel Merideth</span>
														<span class="inline-block font-11  pull-right message-time">29 Jan</span>
														<div class="clearfix"></div>
														<span class=" truncate message-subject">Themeforest item support message</span>
														<p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
													</div>
												</div>
											</a>
											<a href="javascript:void(0)">
												<div class="sl-item unread-message">
													<div class="sl-avatar avatar avatar-sm avatar-circle">
														<img class="img-responsive img-circle" src="img/user4.png" alt="avatar"/>
													</div>
													<div class="sl-content">
														<span class="inline-block capitalize-font   pull-left message-per">Jonnie Metoyer</span>
														<span class="inline-block font-11  pull-right message-time">27 Jan</span>
														<div class="clearfix"></div>
														<span class=" truncate message-subject">Help with beavis contact form</span>
														<p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
													</div>
												</div>
											</a>
											<a href="javascript:void(0)">
												<div class="sl-item">
													<div class="sl-avatar avatar avatar-sm avatar-circle">
														<img class="img-responsive img-circle" src="img/user.png" alt="avatar"/>
													</div>
													<div class="sl-content">
														<span class="inline-block capitalize-font   pull-left message-per">Priscila Shy</span>
														<span class="inline-block font-11  pull-right message-time">19 Jan</span>
														<div class="clearfix"></div>
														<span class=" truncate message-subject">Your uploaded theme is been selected</span>
														<p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
													</div>
												</div>
											</a>
											<a href="javascript:void(0)">
												<div class="sl-item">
													<div class="sl-avatar avatar avatar-sm avatar-circle">
														<img class="img-responsive img-circle" src="img/user1.png" alt="avatar"/>
													</div>
													<div class="sl-content">
														<span class="inline-block capitalize-font   pull-left message-per">Linda Stack</span>
														<span class="inline-block font-11  pull-right message-time">13 Jan</span>
														<div class="clearfix"></div>
														<span class=" truncate message-subject"> A new rating has been received</span>
														<p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
													</div>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div  id="todo_tab" class="tab-pane fade" role="tabpanel">
								<div class="todo-box-wrap">
									<div class="add-todo">
										<a href="javascript:void(0)" class="inline-block txt-grey">
											<i class="zmdi zmdi-more"></i>
										</a>
										<span class="inline-block txt-dark">todo list</span>
										<a href="javascript:void(0)" class="inline-block text-right txt-grey"><i class="zmdi zmdi-plus"></i></a>
										<div class="clearfix"></div>
									</div>
									<div class="set-height-wrap">
										<!-- Todo-List -->
										<ul class="todo-list nicescroll-bar">
											<li class="todo-item">
												<div class="checkbox checkbox-default">
													<input type="checkbox" id="checkbox01"/>
													<label for="checkbox01">Record The First Episode</label>
												</div>
											</li>
											<li>
												<hr class="light-grey-hr"/>
											</li>
											<li class="todo-item">
												<div class="checkbox checkbox-pink">
													<input type="checkbox" id="checkbox02"/>
													<label for="checkbox02">Prepare The Conference Schedule</label>
												</div>
											</li>
											<li>
												<hr class="light-grey-hr"/>
											</li>
											<li class="todo-item">
												<div class="checkbox checkbox-warning">
													<input type="checkbox" id="checkbox03" checked/>
													<label for="checkbox03">Decide The Live Discussion Time</label>
												</div>
											</li>
											<li>
												<hr class="light-grey-hr"/>
											</li>
											<li class="todo-item">
												<div class="checkbox checkbox-success">
													<input type="checkbox" id="checkbox04" checked/>
													<label for="checkbox04">Prepare For The Next Project</label>
												</div>
											</li>
											<li>
												<hr class="light-grey-hr"/>
											</li>
											<li class="todo-item">
												<div class="checkbox checkbox-danger">
													<input type="checkbox" id="checkbox05" checked/>
													<label for="checkbox05">Finish Up AngularJs Tutorial</label>
												</div>
											</li>
											<li>
												<hr class="light-grey-hr"/>
											</li>
											<li class="todo-item">
												<div class="checkbox checkbox-purple">
													<input type="checkbox" id="checkbox06" checked/>
													<label for="checkbox06">Finish Infinity Project</label>
												</div>
											</li>
											<li>
												<hr class="light-grey-hr"/>
											</li>
										</ul>
										<!-- /Todo-List -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
		<!-- /Right Sidebar Menu -->



        <!-- Main Content -->
		<div class="page-wrapper">
            <div class="container-fluid pt-25">

				<!-- Row -->
				<div class="row">
					<!-- Foto de usuario -->
				@include('usuario_perfil.components.area_foto_perfil')

				<!-- PANEL TABLA DE PERFIL DE USUARIO -->
				@include('usuario_perfil.components.panel_tabla_perfil')
				</div>
				<!-- /Row -->

				<!-- Row -->
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="panel panel-default card-view bg-twitter">
							<div class="panel-wrapper collapse in">
								<div  class="panel-body">
									<div class="twitter-icon-wrap text-center mb-15">
										<i class="fa fa-twitter"></i>
									</div>
									<!-- START carousel-->
									<div id="twitter_slider" data-ride="carousel" class="carousel slide twitter-slider-wrap text-slider">
										<ol class="carousel-indicators">
										   <li data-target="#twitter_slider" data-slide-to="0" class="active"></li>
										   <li data-target="#twitter_slider" data-slide-to="1"></li>
										</ol>
										<div id="tweets_fetch" role="listbox" class="carousel-inner mb-50">
										</div>
									</div>
									<!-- END carousel-->
								</div>
							</div>
						</div>
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Madalyn Rascon</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div  class="panel-body row pa-0">
									<!--Instagram-->
									<ul class="instagram-lite"></ul>
									<!--/Instagram-->
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="panel panel-default border-panel card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title pull-left">users</h6>
								</div>
								<div class="pull-right">
									<a href="#" class="pull-left inline-block mr-15">
										<i class="zmdi zmdi-search"></i>
									</a>
									<a class="pull-left inline-block" href="#" data-effect="fadeOut">
										<i class="zmdi zmdi-plus"></i>
									</a>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body row pa-0">
									<div class="chat-cmplt-wrap chat-for-widgets">
										<div class="chat-box-wrap">
											<div>
												<div class="users-nicescroll-bar">
													<ul class="chat-list-wrap">
														<li class="chat-list">
															<div class="chat-body">
																<a href="javascript:void(0)">
																	<div class="chat-data">
																		<img class="user-img img-circle"  src="img/user.png" alt="user"/>
																		<div class="user-data">
																			<span class="name block capitalize-font">Clay Masse</span>
																			<span class="time block truncate txt-grey">No one saves us but ourselves.</span>
																		</div>
																		<div class="status away"></div>
																		<div class="clearfix"></div>
																	</div>
																</a>
																<a href="javascript:void(0)">
																	<div class="chat-data">
																		<img class="user-img img-circle"  src="img/user1.png" alt="user"/>
																		<div class="user-data">
																			<span class="name block capitalize-font">Evie Ono</span>
																			<span class="time block truncate txt-grey">Unity is strength</span>
																		</div>
																		<div class="status offline"></div>
																		<div class="clearfix"></div>
																	</div>
																</a>
																<a href="javascript:void(0)">
																	<div class="chat-data">
																		<img class="user-img img-circle"  src="img/user2.png" alt="user"/>
																		<div class="user-data">
																			<span class="name block capitalize-font">Madalyn Rascon</span>
																			<span class="time block truncate txt-grey">Respect yourself if you would have others respect you.</span>
																		</div>
																		<div class="status online"></div>
																		<div class="clearfix"></div>
																	</div>
																</a>
																<a href="javascript:void(0)">
																	<div class="chat-data">
																		<img class="user-img img-circle"  src="img/user3.png" alt="user"/>
																		<div class="user-data">
																			<span class="name block capitalize-font">Mitsuko Heid</span>
																			<span class="time block truncate txt-grey">I’m thankful.</span>
																		</div>
																		<div class="status online"></div>
																		<div class="clearfix"></div>
																	</div>
																</a>
																<a href="javascript:void(0)">
																	<div class="chat-data">
																		<img class="user-img img-circle"  src="img/user.png" alt="user"/>
																		<div class="user-data">
																			<span class="name block capitalize-font">Ezequiel Merideth</span>
																			<span class="time block truncate txt-grey">Patience is bitter.</span>
																		</div>
																		<div class="status offline"></div>
																		<div class="clearfix"></div>
																	</div>
																</a>
																<a href="javascript:void(0)">
																	<div class="chat-data">
																		<img class="user-img img-circle"  src="img/user1.png" alt="user"/>
																		<div class="user-data">
																			<span class="name block capitalize-font">Jonnie Metoyer</span>
																			<span class="time block truncate txt-grey">Genius is eternal patience.</span>
																		</div>
																		<div class="status online"></div>
																		<div class="clearfix"></div>
																	</div>
																</a>
																<a href="javascript:void(0)">
																	<div class="chat-data">
																		<img class="user-img img-circle"  src="img/user2.png" alt="user"/>
																		<div class="user-data">
																			<span class="name block capitalize-font">Angelic Lauver</span>
																			<span class="time block truncate txt-grey">Every burden is a blessing.</span>
																		</div>
																		<div class="status away"></div>
																		<div class="clearfix"></div>
																	</div>
																</a>
																<a href="javascript:void(0)">
																	<div class="chat-data">
																		<img class="user-img img-circle"  src="img/user3.png" alt="user"/>
																		<div class="user-data">
																			<span class="name block capitalize-font">Priscila Shy</span>
																			<span class="time block truncate txt-grey">Wise to resolve, and patient to perform.</span>
																		</div>
																		<div class="status online"></div>
																		<div class="clearfix"></div>
																	</div>
																</a>
																<a href="javascript:void(0)">
																	<div class="chat-data">
																		<img class="user-img img-circle"  src="img/user4.png" alt="user"/>
																		<div class="user-data">
																			<span class="name block capitalize-font">Linda Stack</span>
																			<span class="time block truncate txt-grey">Our patience will achieve more than our force.</span>
																		</div>
																		<div class="status away"></div>
																		<div class="clearfix"></div>
																	</div>
																</a>
															</div>
														</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="recent-chat-box-wrap">
											<div class="recent-chat-wrap">
												<div class="panel-heading ma-0 pt-15">
													<div class="goto-back">
														<a  id="goto_back_widget" href="javascript:void(0)" class="inline-block txt-grey">
															<i class="zmdi zmdi-chevron-left"></i>
														</a>
														<span class="inline-block txt-dark">ryan</span>
														<a href="javascript:void(0)" class="inline-block text-right txt-grey"><i class="zmdi zmdi-more"></i></a>
														<div class="clearfix"></div>
													</div>
												</div>
												<div class="panel-wrapper collapse in">
													<div class="panel-body pa-0">
														<div class="chat-content">
															<ul class="users-chat-nicescroll-bar pt-20">
																<li class="friend">
																	<div class="friend-msg-wrap">
																		<img class="user-img img-circle block pull-left"  src="img/user.png" alt="user"/>
																		<div class="msg pull-left">
																			<p>Hello Jason, how are you, it's been a long time since we last met?</p>
																			<div class="msg-per-detail text-right">
																				<span class="msg-time txt-grey">2:30 PM</span>
																			</div>
																		</div>
																		<div class="clearfix"></div>
																	</div>
																</li>
																<li class="self mb-10">
																	<div class="self-msg-wrap">
																		<div class="msg block pull-right"> Oh, hi Sarah I'm have got a new job now and is going great.
																			<div class="msg-per-detail text-right">
																				<span class="msg-time txt-grey">2:31 pm</span>
																			</div>
																		</div>
																		<div class="clearfix"></div>
																	</div>
																</li>
																<li class="self">
																	<div class="self-msg-wrap">
																		<div class="msg block pull-right">  How about you?
																			<div class="msg-per-detail text-right">
																				<span class="msg-time txt-grey">2:31 pm</span>
																			</div>
																		</div>
																		<div class="clearfix"></div>
																	</div>
																</li>
																<li class="friend">
																	<div class="friend-msg-wrap">
																		<img class="user-img img-circle block pull-left"  src="img/user.png" alt="user"/>
																		<div class="msg pull-left">
																			<p>Not too bad.</p>
																			<div class="msg-per-detail  text-right">
																				<span class="msg-time txt-grey">2:35 pm</span>
																			</div>
																		</div>
																		<div class="clearfix"></div>
																	</div>
																</li>
															</ul>
														</div>
														<div class="input-group">
															<input type="text" id="input_msg_send_widget" name="send-msg" class="input-msg-send form-control" placeholder="Type something">
															<div class="input-group-btn emojis">
																<div class="dropup">
																	<button type="button" class="btn  btn-default  dropdown-toggle" data-toggle="dropdown" ><i class="zmdi zmdi-mood"></i></button>
																	<ul class="dropdown-menu dropdown-menu-right">
																		<li><a href="javascript:void(0)">Action</a></li>
																		<li><a href="javascript:void(0)">Another action</a></li>
																		<li class="divider"></li>
																		<li><a href="javascript:void(0)">Separated link</a></li>
																	</ul>
																</div>
															</div>
															<div class="input-group-btn attachment">
																<div class="fileupload btn  btn-default"><i class="zmdi zmdi-attachment-alt"></i>
																	<input type="file" class="upload">
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="panel panel-default border-panel card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">todo</h6>
								</div>
								<div class="pull-right">
									<div class="pull-left inline-block dropdown mr-15">
										<a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="zmdi zmdi-more-vert"></i></a>
										<ul class="dropdown-menu bullet dropdown-menu-right"  role="menu">
											<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-reply" aria-hidden="true"></i>Edit</a></li>
											<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-share" aria-hidden="true"></i>Clear All</a></li>
											<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-trash" aria-hidden="true"></i>Select All</a></li>
										</ul>
									</div>
									<a class="pull-left inline-block close-panel" href="#" data-effect="fadeOut">
										<i class="zmdi zmdi-close"></i>
									</a>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body row pa-0">
									<div class="todo-box-wrap">
										<!-- Todo-List -->
										<ul class="todo-list todo-box-nicescroll-bar">
											<li class="todo-item">
												<div class="checkbox checkbox-default">
													<input type="checkbox" id="checkbox001"/>
													<label for="checkbox001">Record The First Episode</label>
												</div>
											</li>
											<li>
												<hr class="light-grey-hr"/>
											</li>
											<li class="todo-item">
												<div class="checkbox checkbox-pink">
													<input type="checkbox" id="checkbox002"/>
													<label for="checkbox002">Prepare The Conference Schedule</label>
												</div>
											</li>
											<li>
												<hr class="light-grey-hr"/>
											</li>
											<li class="todo-item">
												<div class="checkbox checkbox-warning">
													<input type="checkbox" id="checkbox003" checked/>
													<label for="checkbox003">Decide The Live Discussion Time</label>
												</div>
											</li>
											<li>
												<hr class="light-grey-hr"/>
											</li>
											<li class="todo-item">
												<div class="checkbox checkbox-success">
													<input type="checkbox" id="checkbox004" checked/>
													<label for="checkbox004">Prepare For The Next Project</label>
												</div>
											</li>
											<li>
												<hr class="light-grey-hr"/>
											</li>
											<li class="todo-item">
												<div class="checkbox checkbox-danger">
													<input type="checkbox" id="checkbox005" checked/>
													<label for="checkbox005">Finish Up AngularJs Tutorial</label>
												</div>
											</li>
											<li>
												<hr class="light-grey-hr"/>
											</li>
											<li class="todo-item">
												<div class="checkbox checkbox-purple">
													<input type="checkbox" id="checkbox006" checked/>
													<label for="checkbox006">Finish Infinity Project</label>
												</div>
											</li>
											<li>
												<hr class="light-grey-hr"/>
											</li>
										</ul>
										<!-- /Todo-List -->

										<!-- New Todo -->
										<div class="new-todo">
											<div class="input-group">
												<input type="text" id="add_todo" name="example-input2-group2" class="form-control" placeholder="Add new task">
												<span class="input-group-btn">
												<button type="button" class="btn btn-success"><i class="zmdi zmdi-plus txt-success"></i></button>
												</span>
											</div>
										</div>
										<!-- /New Todo -->
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="panel panel-default card-view">
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="calendar-wrap">
									  <div id="calendar_small" class="small-calendar"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Row -->

			</div>
			<!-- Footer -->
			<footer class="footer container-fluid pl-30 pr-30">
				<div class="row">
					<div class="col-sm-12">
						<p>2017 &copy; Elmer. Pampered by Hencework</p>
					</div>
				</div>
			</footer>
			<!-- /Footer -->

		</div>
        <!-- /Main Content -->

    </div>
    <!-- /#wrapper -->

