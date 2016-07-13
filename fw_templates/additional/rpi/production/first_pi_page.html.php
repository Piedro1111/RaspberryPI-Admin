	<body class="nav-md">
		<div class="container body">
			<div class="main_container">
				<div class="col-md-3 left_col">
					<div class="left_col scroll-view">
						<div class="navbar nav_title" style="border: 0;">
							<a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Raspberry Pi</span></a>
						</div>
						<div class="clearfix"></div>
						<!-- menu prile quick info -->
						<div class="profile">
							<div class="profile_pic">
								<img src="<?=$JS;?>/images/pi2.png" alt="raspberry image" class="img-circle profile_img">
							</div>
							<div class="profile_info">
								<span>Welcome,</span>
								<h2><?=get_current_user();?></h2>
							</div>
						</div>
						<!-- /menu prile quick info -->
						<br />
						<!-- sidebar menu -->
						<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
							<div class="menu_section">
								<h3>General</h3>
								<ul class="nav side-menu">
									<li><a><i class="fa fa-home"></i> GPIO <span class="fa fa-chevron-down"></span></a>
										<ul class="nav child_menu" style="display: none">
											<li><a id="gpio-all-reset">Reset all</a>
											</li>
										</ul>
									</li>
									<li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
										<ul class="nav child_menu" style="display: none">
											<li><a href="form.html">General Form</a>
											</li>
											<li><a href="form_advanced.html">Advanced Components</a>
											</li>
											<li><a href="form_validation.html">Form Validation</a>
											</li>
											<li><a href="form_wizards.html">Form Wizard</a>
											</li>
											<li><a href="form_upload.html">Form Upload</a>
											</li>
											<li><a href="form_buttons.html">Form Buttons</a>
											</li>
										</ul>
									</li>
									<li><a><i class="fa fa-desktop"></i> UI Elements <span class="fa fa-chevron-down"></span></a>
										<ul class="nav child_menu" style="display: none">
											<li><a href="general_elements.html">General Elements</a>
											</li>
											<li><a href="media_gallery.html">Media Gallery</a>
											</li>
											<li><a href="typography.html">Typography</a>
											</li>
											<li><a href="icons.html">Icons</a>
											</li>
											<li><a href="glyphicons.html">Glyphicons</a>
											</li>
											<li><a href="widgets.html">Widgets</a>
											</li>
											<li><a href="invoice.html">Invoice</a>
											</li>
											<li><a href="inbox.html">Inbox</a>
											</li>
											<li><a href="calender.html">Calender</a>
											</li>
										</ul>
									</li>
								<ul>
							</div>
						</div>
						<!-- /sidebar menu -->
						<!-- /menu footer buttons -->
						<div class="sidebar-footer hidden-small">
							<a data-toggle="tooltip" data-placement="top" title="Settings">
								<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
							</a>
							<a id="status" data-toggle="tooltip" data-placement="top" title="Status">
								<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
							</a>
							<a id="restart" data-toggle="tooltip" data-placement="top" title="Restart">
								<span class="glyphicon glyphicon-repeat" aria-hidden="true"></span>
							</a>
							<a id="shutdown" data-toggle="tooltip" data-placement="top" title="Shutdown">
								<span class="glyphicon glyphicon-off" aria-hidden="true"></span>
							</a>
						</div>
						<!-- /menu footer buttons -->
					</div>
				</div>
				<!-- top navigation -->
				<div class="top_nav">
					<div class="nav_menu">
						<nav class="" role="navigation">
							<div class="nav toggle">
								<a id="menu_toggle"><i class="fa fa-bars"></i></a>
							</div>
							<ul class="nav navbar-nav navbar-right">
								<li class="">
									<a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
										<img src="<?=$JS;?>/images/pi2.png" alt=""><?=get_current_user();?>
										<span class=" fa fa-angle-down"></span>
									</a>
									<ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
										<li><a href="javascript:;">  Profile</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="badge bg-red pull-right">50%</span>
												<span>Settings</span>
											</a>
										</li>
										<li>
											<a href="javascript:;">Help</a>
										</li>
										<li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
										</li>
									</ul>
								</li>
								<li role="presentation" class="dropdown">
									<a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
										<i class="fa fa-envelope-o"></i>
										<span class="badge bg-green">6</span>
									</a>
									<ul id="menu1" class="dropdown-menu list-unstyled msg_list animated fadeInDown" role="menu">
										<li>
											<a>
												<span class="image">
													<img src="images/img.jpg" alt="Profile Image" />
												</span>
												<span>
													<span>John Smith</span>
													<span class="time">3 mins ago</span>
												</span>
												<span class="message">
													Film festivals used to be do-or-die moments for movie makers. They were where...
												</span>
											</a>
										</li>
									</ul>
								</li>
							</ul>
						</nav>
					</div>
				</div>
				<!-- /top navigation -->
				<!-- page content -->
				<div class="right_col" role="main">
					<div class="">
						<div class="page-title">
							<div class="title_left">
								<h3>Settings</h3>
							</div>
							<div class="title_right">
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="x_panel">
									<div class="x_title">
										<h2>GPIO via PHP</h2>
										<ul class="nav navbar-right panel_toolbox">
											<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
											</li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
												<ul class="dropdown-menu" role="menu">
													<li><a href="#">Settings 1</a>
													</li>
													<li><a href="#">Settings 2</a>
													</li>
												</ul>
											</li>
											<li><a class="close-link"><i class="fa fa-close"></i></a>
											</li>
										</ul>
										<div class="clearfix"></div>
									</div>
									<div class="x_content">
										<br>
										<form class="form-horizontal form-label-left">
											<div class="row">
												<div class="col-lg-6">
													<div class="form-group">
														<label class="control-label col-md-6 col-sm-6 col-xs-12">3.3V</label>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control" disabled>
																<option selected value="out">OUT</option>
																<option value="in">IN</option>
															</select>
														</div>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control" disabled>
																<option selected value="1">ON</option>
																<option value="0">OFF</option>
															</select>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-6 col-sm-6 col-xs-12">GPIO 2</label>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control gpio-in-out" data-name="2">
																<option selected value="out">OUT</option>
																<option value="in">IN</option>
															</select>
														</div>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control gpio-val" data-name="2">
																<option value="1">ON</option>
																<option selected value="0">OFF</option>
															</select>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-6 col-sm-6 col-xs-12">GPIO 3</label>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control gpio-in-out" data-name="3">
																<option selected value="out">OUT</option>
																<option value="in">IN</option>
															</select>
														</div>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control gpio-val" data-name="3">
																<option value="1">ON</option>
																<option selected value="0">OFF</option>
															</select>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-6 col-sm-6 col-xs-12">GPIO 4</label>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control gpio-in-out" data-name="4">
																<option selected value="out">OUT</option>
																<option value="in">IN</option>
															</select>
														</div>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control gpio-val" data-name="4">
																<option value="1">ON</option>
																<option selected value="0">OFF</option>
															</select>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-6 col-sm-6 col-xs-12">GND</label>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control" disabled>
																<option value="out">OUT</option>
																<option selected value="in">IN</option>
															</select>
														</div>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control" disabled>
																<option selected value="1">ON</option>
																<option value="0">OFF</option>
															</select>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-6 col-sm-6 col-xs-12">GPIO 17</label>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control gpio-in-out" data-name="17">
																<option selected value="out">OUT</option>
																<option value="in">IN</option>
															</select>
														</div>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control gpio-val" data-name="17">
																<option value="1">ON</option>
																<option selected value="0">OFF</option>
															</select>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-6 col-sm-6 col-xs-12">GPIO 27</label>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control gpio-in-out" data-name="27">
																<option selected value="out">OUT</option>
																<option value="in">IN</option>
															</select>
														</div>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control gpio-val" data-name="27">
																<option value="1">ON</option>
																<option selected value="0">OFF</option>
															</select>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-6 col-sm-6 col-xs-12">GPIO 22</label>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control gpio-in-out" data-name="22">
																<option selected value="out">OUT</option>
																<option value="in">IN</option>
															</select>
														</div>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control gpio-val" data-name="22">
																<option value="1">ON</option>
																<option selected value="0">OFF</option>
															</select>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-6 col-sm-6 col-xs-12">3.3V</label>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control" disabled>
																<option selected value="out">OUT</option>
																<option value="in">IN</option>
															</select>
														</div>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control" disabled>
																<option selected value="1">ON</option>
																<option value="0">OFF</option>
															</select>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-6 col-sm-6 col-xs-12">GPIO 10</label>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control gpio-in-out" data-name="10">
																<option selected value="out">OUT</option>
																<option value="in">IN</option>
															</select>
														</div>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control gpio-val" data-name="10">
																<option value="1">ON</option>
																<option selected value="0">OFF</option>
															</select>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-6 col-sm-6 col-xs-12">GPIO 9</label>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control gpio-in-out" data-name="9">
																<option selected value="out">OUT</option>
																<option value="in">IN</option>
															</select>
														</div>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control gpio-val" data-name="9">
																<option value="1">ON</option>
																<option selected value="0">OFF</option>
															</select>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-6 col-sm-6 col-xs-12">GPIO 11</label>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control gpio-in-out" data-name="11">
																<option selected value="out">OUT</option>
																<option value="in">IN</option>
															</select>
														</div>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control gpio-val" data-name="11">
																<option value="1">ON</option>
																<option selected value="0">OFF</option>
															</select>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-6 col-sm-6 col-xs-12">GND</label>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control" disabled>
																<option value="out">OUT</option>
																<option selected value="in">IN</option>
															</select>
														</div>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control" disabled>
																<option selected value="1">ON</option>
																<option value="0">OFF</option>
															</select>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-6 col-sm-6 col-xs-12">ID_SD EEPROM</label>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control" disabled>
																<option value="out">OUT</option>
																<option selected value="in">IN</option>
															</select>
														</div>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control" disabled>
																<option selected value="1">ON</option>
																<option value="0">OFF</option>
															</select>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-6 col-sm-6 col-xs-12">GPIO 5</label>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control gpio-in-out" data-name="5">
																<option selected value="out">OUT</option>
																<option value="in">IN</option>
															</select>
														</div>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control gpio-val" data-name="5">
																<option value="1">ON</option>
																<option selected value="0">OFF</option>
															</select>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-6 col-sm-6 col-xs-12">GPIO 6</label>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control gpio-in-out" data-name="6">
																<option selected value="out">OUT</option>
																<option value="in">IN</option>
															</select>
														</div>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control gpio-val" data-name="6">
																<option value="1">ON</option>
																<option selected value="0">OFF</option>
															</select>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-6 col-sm-6 col-xs-12">GPIO 13</label>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control gpio-in-out" data-name="13">
																<option selected value="out">OUT</option>
																<option value="in">IN</option>
															</select>
														</div>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control gpio-val" data-name="13">
																<option value="1">ON</option>
																<option selected value="0">OFF</option>
															</select>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-6 col-sm-6 col-xs-12">GPIO 19</label>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control gpio-in-out" data-name="19">
																<option selected value="out">OUT</option>
																<option value="in">IN</option>
															</select>
														</div>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control gpio-val" data-name="19">
																<option value="1">ON</option>
																<option selected value="0">OFF</option>
															</select>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-6 col-sm-6 col-xs-12">GPIO 26</label>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control gpio-in-out" data-name="26">
																<option selected value="out">OUT</option>
																<option value="in">IN</option>
															</select>
														</div>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control gpio-val" data-name="26">
																<option value="1">ON</option>
																<option selected value="0">OFF</option>
															</select>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-6 col-sm-6 col-xs-12">GND</label>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control" disabled>
																<option value="out">OUT</option>
																<option selected value="in">IN</option>
															</select>
														</div>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control" disabled>
																<option selected value="1">ON</option>
																<option value="0">OFF</option>
															</select>
														</div>
													</div>
												</div>
												<div class="col-lg-6">
													<div class="form-group">
														<label class="control-label col-md-6 col-sm-6 col-xs-12">5.5V</label>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control" disabled>
																<option selected value="out">OUT</option>
																<option value="in">IN</option>
															</select>
														</div>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control" disabled>
																<option selected value="1">ON</option>
																<option value="0">OFF</option>
															</select>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-6 col-sm-6 col-xs-12">5.5V</label>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control" disabled>
																<option selected value="out">OUT</option>
																<option value="in">IN</option>
															</select>
														</div>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control" disabled>
																<option selected value="1">ON</option>
																<option value="0">OFF</option>
															</select>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-6 col-sm-6 col-xs-12">GND</label>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control" disabled>
																<option value="out">OUT</option>
																<option selected value="in">IN</option>
															</select>
														</div>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control" disabled>
																<option selected value="1">ON</option>
																<option value="0">OFF</option>
															</select>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-6 col-sm-6 col-xs-12">GPIO 14</label>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control gpio-in-out" data-name="14">
																<option selected value="out">OUT</option>
																<option value="in">IN</option>
															</select>
														</div>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control gpio-val" data-name="14">
																<option value="1">ON</option>
																<option selected value="0">OFF</option>
															</select>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-6 col-sm-6 col-xs-12">GPIO 15</label>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control gpio-in-out" data-name="15">
																<option selected value="out">OUT</option>
																<option value="in">IN</option>
															</select>
														</div>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control gpio-val" data-name="15">
																<option value="1">ON</option>
																<option selected value="0">OFF</option>
															</select>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-6 col-sm-6 col-xs-12">GPIO 18</label>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control gpio-in-out" data-name="18">
																<option selected value="out">OUT</option>
																<option value="in">IN</option>
															</select>
														</div>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control gpio-val" data-name="18">
																<option value="1">ON</option>
																<option selected value="0">OFF</option>
															</select>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-6 col-sm-6 col-xs-12">GND</label>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control" disabled>
																<option value="out">OUT</option>
																<option selected value="in">IN</option>
															</select>
														</div>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control" disabled>
																<option selected value="1">ON</option>
																<option value="0">OFF</option>
															</select>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-6 col-sm-6 col-xs-12">GPIO 23</label>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control gpio-in-out" data-name="23">
																<option selected value="out">OUT</option>
																<option value="in">IN</option>
															</select>
														</div>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control gpio-val" data-name="23">
																<option value="1">ON</option>
																<option selected value="0">OFF</option>
															</select>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-6 col-sm-6 col-xs-12">GPIO 24</label>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control gpio-in-out" data-name="24">
																<option selected value="out">OUT</option>
																<option value="in">IN</option>
															</select>
														</div>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control gpio-val" data-name="24">
																<option value="1">ON</option>
																<option selected value="0">OFF</option>
															</select>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-6 col-sm-6 col-xs-12">GND</label>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control" disabled>
																<option value="out">OUT</option>
																<option selected value="in">IN</option>
															</select>
														</div>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control" disabled>
																<option selected value="1">ON</option>
																<option value="0">OFF</option>
															</select>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-6 col-sm-6 col-xs-12">GPIO 25</label>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control gpio-in-out" data-name="25">
																<option selected value="out">OUT</option>
																<option value="in">IN</option>
															</select>
														</div>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control gpio-val" data-name="25">
																<option value="1">ON</option>
																<option selected value="0">OFF</option>
															</select>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-6 col-sm-6 col-xs-12">GPIO 8</label>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control gpio-in-out" data-name="8">
																<option selected value="out">OUT</option>
																<option value="in">IN</option>
															</select>
														</div>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control gpio-val" data-name="8">
																<option value="1">ON</option>
																<option selected value="0">OFF</option>
															</select>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-6 col-sm-6 col-xs-12">GPIO 7</label>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control gpio-in-out" data-name="7">
																<option selected value="out">OUT</option>
																<option value="in">IN</option>
															</select>
														</div>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control gpio-val" data-name="7">
																<option value="1">ON</option>
																<option selected value="0">OFF</option>
															</select>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-6 col-sm-6 col-xs-12">ID_SC EEPROM</label>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control" disabled>
																<option value="out">OUT</option>
																<option selected value="in">IN</option>
															</select>
														</div>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control" disabled>
																<option selected value="1">ON</option>
																<option value="0">OFF</option>
															</select>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-6 col-sm-6 col-xs-12">GND</label>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control" disabled>
																<option value="out">OUT</option>
																<option selected value="in">IN</option>
															</select>
														</div>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control" disabled>
																<option selected value="1">ON</option>
																<option value="0">OFF</option>
															</select>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-6 col-sm-6 col-xs-12">GPIO 12</label>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control gpio-in-out" data-name="12">
																<option selected value="out">OUT</option>
																<option value="in">IN</option>
															</select>
														</div>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control gpio-val" data-name="12">
																<option value="1">ON</option>
																<option selected value="0">OFF</option>
															</select>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-6 col-sm-6 col-xs-12">GND</label>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control" disabled>
																<option value="out">OUT</option>
																<option selected value="in">IN</option>
															</select>
														</div>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control" disabled>
																<option selected value="1">ON</option>
																<option value="0">OFF</option>
															</select>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-6 col-sm-6 col-xs-12">GPIO 16</label>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control gpio-in-out" data-name="16">
																<option selected value="out">OUT</option>
																<option value="in">IN</option>
															</select>
														</div>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control gpio-val" data-name="16">
																<option value="1">ON</option>
																<option selected value="0">OFF</option>
															</select>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-6 col-sm-6 col-xs-12">GPIO 20</label>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control gpio-in-out" data-name="20">
																<option selected value="out">OUT</option>
																<option value="in">IN</option>
															</select>
														</div>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control gpio-val" data-name="20">
																<option value="1">ON</option>
																<option selected value="0">OFF</option>
															</select>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-6 col-sm-6 col-xs-12">GPIO 21</label>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control gpio-in-out" data-name="21">
																<option selected value="out">OUT</option>
																<option value="in">IN</option>
															</select>
														</div>
														<div class="col-md-3 col-sm-3 col-xs-12">
															<select class="form-control gpio-val" data-name="21">
																<option value="1">ON</option>
																<option selected value="0">OFF</option>
															</select>
														</div>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- footer content -->
					<footer>
						<div class="copyright-info">
							<p class="pull-right">Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
							</p>
						</div>
						<div class="clearfix"></div>
					</footer>
					<!-- /footer content -->
				</div>
				<!-- /page content -->
			</div>
		</div>
		<div id="custom_notifications" class="custom-notifications dsp_none">
			<ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
			</ul>
			<div class="clearfix"></div>
			<div id="notif-group" class="tabbed_notifications"></div>
		</div>
		<!--<script src="<?=$JS;?>/js/bootstrap.min.js"></script>-->
		<!-- bootstrap progress js -->
		<script src="<?=$JS;?>/js/progressbar/bootstrap-progressbar.min.js"></script>
		<script src="<?=$JS;?>/js/nicescroll/jquery.nicescroll.min.js"></script>
		<!-- icheck -->
		<script src="<?=$JS;?>/js/icheck/icheck.min.js"></script>
		<script src="<?=$JS;?>/js/custom.js"></script>
		<!-- pace -->
		<script src="<?=$JS;?>/js/pace/pace.min.js"></script>
	</body>
</html>
