<div class="main-content" >
    <div class="wrap-content container" id="container">
<!-- start: USER PROFILE -->
	<div class="container-fluid container-fullw bg-white">
		<div class="row">
			<div class="col-md-12">
				<div class="tabbable">
					<ul class="nav nav-tabs tab-padding tab-space-3 tab-blue" id="myTab4">
						<li class="active">
							<a data-toggle="tab" href="#panel_overview">
								Overview
							</a>
						</li>
						<li>
							<a data-toggle="tab" href="#panel_edit_account">
								Edit Account
							</a>
						</li>
						<!-- <li>
							<a data-toggle="tab" href="#panel_projects">
								Projects
							</a>
						</li> -->
					</ul>
					<div class="tab-content">
						<div id="panel_overview" class="tab-pane fade in active">
							<div class="row">
								<div class="col-sm-5 col-md-4">
									<div class="user-left">
										<div class="center">
											<h4> <?php $firstname =  $this->session->userdata("firstname"); if(!empty($firstname)) echo $firstname; ?> <?php $lastname =  $this->session->userdata("lastname"); if(!empty($lastname)) echo $lastname; ?> </h4>
											<div class="fileinput fileinput-new" data-provides="fileinput">
												<div class="user-image">
													<div class="fileinput-new thumbnail">

													<?php $profile_picture=$this->session->userdata("profile_picture"); ?>

													<img src="<?php echo base_url(); ?>uploads/profile_picture/<?php if(!empty($profile_picture)) echo $profile_picture; ?>" alt="">
													</div>
													<div class="fileinput-preview fileinput-exists thumbnail"></div>
													<div class="user-image-buttons">
														<span class="btn btn-azure btn-file btn-sm"><span class="fileinput-new"><i class="fa fa-pencil"></i></span><span class="fileinput-exists"><i class="fa fa-pencil"></i></span>
															<input type="file">
														</span>
														<a href="#" class="btn fileinput-exists btn-red btn-sm" data-dismiss="fileinput">
															<i class="fa fa-times"></i>
														</a>
													</div>
												</div>
											</div>
										
										</div>
										
									</div>
								</div>
								<div class="col-sm-7 col-md-8">
									
									<!-- <div class="panel panel-white" id="activities">
										<div class="panel-heading border-light">
											<h4 class="panel-title text-primary">Recent Activities</h4>
											<paneltool class="panel-tools" tool-collapse="tool-collapse" tool-refresh="load1" tool-dismiss="tool-dismiss"></paneltool>
										</div>
										
									</div> -->
									<div class="panel panel-white space20">
										<fieldset>
									<legend>
										Account Info
									</legend>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label">
													First Name
												</label>
												<input disabled="" value="<?php $firstname =  $this->session->userdata("firstname"); if(!empty($firstname)) echo $firstname; ?>" type="text" placeholder="Peter" class="form-control" id="firstname" name="firstname">
											</div>
											<div class="form-group">
												<label class="control-label">
													Last Name
												</label>
												<input disabled="" value="<?php $lastname =  $this->session->userdata("lastname"); if(!empty($lastname)) echo $lastname; ?>" type="text" placeholder="Clark" class="form-control" id="lastname" name="lastname">
											</div>
											<div class="form-group">
												<label class="control-label">
													Email Address
												</label>
												<input disabled="" value="<?php $user_email =  $this->session->userdata("user_email"); if(!empty($user_email)) echo $user_email; ?>" type="email" placeholder="peter@example.com" class="form-control" id="user_email" name="user_email">
											</div>
											
											
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label">
													Gender
												</label>
												<div class="clip-radio radio-primary">
													<input disabled="" type="radio" value="female" name="gender" id="us-female">
													<label for="us-female">
														Female
													</label>
													<input disabled="" type="radio" value="male" name="gender" id="us-male" checked>
													<label for="us-male">
														Male
													</label>
												</div>
											</div>

											<div class="form-group">
												<label class="control-label">
													Phone
												</label>
												<input disabled="" value="<?php $user_phone =  $this->session->userdata("user_phone"); if(!empty($user_phone)) echo $user_phone; ?>" type="text" placeholder="(641)-734-4763" class="form-control" id="phone" name="phone">
											</div>

											<div class="form-group">
												<label class="control-label">
													User Role
												</label>
												<input disabled="" value="<?php $user_role =  $this->session->userdata("user_type"); if($user_role==1)echo "Super Admin"; if($user_role==2) echo "Admin"; if($user_role==3) echo "User"; ?>" type="text" placeholder="(641)-734-4763" class="form-control" id="user_type" name="user_type">
											</div>


											<!-- <div class="row">
												<div class="col-md-4">
													<div class="form-group">
														<label class="control-label">
															Zip Code
														</label>
														<input class="form-control" placeholder="12345" type="text" name="zipcode" id="zipcode">
													</div>
												</div>
												<div class="col-md-8">
													<div class="form-group">
														<label class="control-label">
															City
														</label>
														<input class="form-control tooltips" placeholder="London (UK)" type="text" data-original-title="We'll display it when you write reviews" data-rel="tooltip"  title="" data-placement="top" name="city" id="city">
													</div>
												</div>
											</div> -->
											
										</div>
									</div>
								</fieldset>
								<!-- <fieldset>
									<legend>
										Additional Info
									</legend>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label">
													Twitter
												</label>
												<span class="input-icon">
													<input class="form-control" type="text" placeholder="Text Field">
													<i class="fa fa-twitter"></i> </span>
											</div>
											<div class="form-group">
												<label class="control-label">
													Facebook
												</label>
												<span class="input-icon">
													<input class="form-control" type="text" placeholder="Text Field">
													<i class="fa fa-facebook"></i> </span>
											</div>
											<div class="form-group">
												<label class="control-label">
													Google Plus
												</label>
												<span class="input-icon">
													<input class="form-control" type="text" placeholder="Text Field">
													<i class="fa fa-google-plus"></i> </span>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label">
													Github
												</label>
												<span class="input-icon">
													<input class="form-control" type="text" placeholder="Text Field">
													<i class="fa fa-github"></i> </span>
											</div>
											<div class="form-group">
												<label class="control-label">
													Linkedin
												</label>
												<span class="input-icon">
													<input class="form-control" type="text" placeholder="Text Field">
													<i class="fa fa-linkedin"></i> </span>
											</div>
											<div class="form-group">
												<label class="control-label">
													Skype
												</label>
												<span class="input-icon">
													<input class="form-control" type="text" placeholder="Text Field">
													<i class="fa fa-skype"></i> </span>
											</div>
										</div>
									</div>
								</fieldset> -->
									</div>
								</div>
							</div>
						</div>
						<div id="panel_edit_account" class="tab-pane fade">
							<form action="<?php echo base_url() . "user/update_selected_user"; ?>" method="POST" role="form" id="form" accept-charset="utf-8" enctype="multipart/form-data">
								<fieldset>
									<legend>
										Account Info
									</legend>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label">
													First Name
												</label>

												<input type="hidden" value="<?php $uid =  $this->session->userdata("uid"); echo $uid; ?>" name="user_id" />

												<input value="<?php $firstname =  $this->session->userdata("firstname"); if(!empty($firstname)) echo $firstname; ?>" type="text" placeholder="Peter" class="form-control" id="user_first_name" name="user_first_name">
											</div>
											<div class="form-group">
												<label class="control-label">
													Last Name
												</label>
												<input value="<?php $lastname =  $this->session->userdata("lastname"); if(!empty($lastname)) echo $lastname; ?>" type="text" placeholder="Clark" class="form-control" id="user_last_name" name="user_last_name">
											</div>
											<div class="form-group">
												<label class="control-label">
													Email Address
												</label>
												<input value="<?php $user_email =  $this->session->userdata("user_email"); if(!empty($user_email)) echo $user_email; ?>" type="email" placeholder="peter@example.com" class="form-control" id="user_email" name="user_email">
											</div>
											<div class="form-group">
												<label class="control-label">
													Phone
												</label>
												<input value="<?php $user_phone =  $this->session->userdata("user_phone"); if(!empty($user_phone)) echo $user_phone; ?>" type="text" placeholder="(641)-734-4763" class="form-control" id="phone" name="phone">
											</div>
											
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label">
													Gender
												</label>
												<div class="clip-radio radio-primary">
													<input type="radio" value="female" name="gender" id="us-female">
													<label for="us-female">
														Female
													</label>
													<input type="radio" value="male" name="gender" id="us-male" checked>
													<label for="us-male">
														Male
													</label>
												</div>
											</div>

											<div class="form-group">
												<label class="control-label">
													Password
												</label>
												<input type="password" placeholder="password" class="form-control" name="password" id="password">
											</div>
											<div class="form-group">
												<label class="control-label">
													Confirm Password
												</label>
												<input type="password"  placeholder="password" class="form-control" id="password_again" name="password_again">
											</div>

											<div class="form-group">
		                                        <label for="Commission Agent" class="control-label">User Role</label>

		                                        <select name="user_type" id="user_type" class="form-control">
		                                            <option value="">Select User Role..</option>

		                                            <option value="3" <?php if($user_role==3)echo "selected"; ?>>User</option>
		                                            <option value="2" <?php if($user_role==2)echo "selected"; ?>>Admin</option>
		                                            <option value="1" <?php if($user_role==1)echo "selected"; ?>>Super Admin</option>
		                                        </select>
		                                    </div>

											<!-- <div class="row">
												<div class="col-md-4">
													<div class="form-group">
														<label class="control-label">
															Zip Code
														</label>
														<input class="form-control" placeholder="12345" type="text" name="zipcode" id="zipcode">
													</div>
												</div>
												<div class="col-md-8">
													<div class="form-group">
														<label class="control-label">
															City
														</label>
														<input class="form-control tooltips" placeholder="London (UK)" type="text" data-original-title="We'll display it when you write reviews" data-rel="tooltip"  title="" data-placement="top" name="city" id="city">
													</div>
												</div>
											</div> -->
											<!-- <div class="form-group">
												<label>
													Image Upload
												</label>
												<div class="fileinput fileinput-new" data-provides="fileinput">
													<div class="fileinput-new thumbnail"><img src="<?php echo base_url(); ?>assets/images/avatar-1-xl.jpg" alt="">
													</div>
													<div class="fileinput-preview fileinput-exists thumbnail"></div>
													<div class="user-edit-image-buttons">
														<span class="btn btn-azure btn-file"><span class="fileinput-new"><i class="fa fa-picture"></i> Select image</span><span class="fileinput-exists"><i class="fa fa-picture"></i> Change</span>
															<input type="file">
														</span>
														<a href="#" class="btn fileinput-exists btn-red" data-dismiss="fileinput">
															<i class="fa fa-times"></i> Remove
														</a>
													</div>
												</div>
											</div> -->
										</div>
									</div>
								</fieldset>
								<!-- <fieldset>
									<legend>
										Additional Info
									</legend>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label">
													Twitter
												</label>
												<span class="input-icon">
													<input class="form-control" type="text" placeholder="Text Field">
													<i class="fa fa-twitter"></i> </span>
											</div>
											<div class="form-group">
												<label class="control-label">
													Facebook
												</label>
												<span class="input-icon">
													<input class="form-control" type="text" placeholder="Text Field">
													<i class="fa fa-facebook"></i> </span>
											</div>
											<div class="form-group">
												<label class="control-label">
													Google Plus
												</label>
												<span class="input-icon">
													<input class="form-control" type="text" placeholder="Text Field">
													<i class="fa fa-google-plus"></i> </span>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label">
													Github
												</label>
												<span class="input-icon">
													<input class="form-control" type="text" placeholder="Text Field">
													<i class="fa fa-github"></i> </span>
											</div>
											<div class="form-group">
												<label class="control-label">
													Linkedin
												</label>
												<span class="input-icon">
													<input class="form-control" type="text" placeholder="Text Field">
													<i class="fa fa-linkedin"></i> </span>
											</div>
											<div class="form-group">
												<label class="control-label">
													Skype
												</label>
												<span class="input-icon">
													<input class="form-control" type="text" placeholder="Text Field">
													<i class="fa fa-skype"></i> </span>
											</div>
										</div>
									</div>
								</fieldset> -->
								<div class="row">
									<div class="col-md-12">
										<div>
											Required Fields
											<hr>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-8">
										<p>
											By clicking UPDATE, you are agreeing to the Policy and Terms &amp; Conditions.
										</p>
									</div>
									<div class="col-md-4">
										<button class="btn btn-primary pull-right" type="submit">
											Update <i class="fa fa-arrow-circle-right"></i>
										</button>
									</div>
								</div>
							</form>
						</div>
						<!-- <div id="panel_projects" class="tab-pane fade">
							<table class="table" id="projects">
								<thead>
									<tr>
										<th>Project Name</th>
										<th class="hidden-xs">Client</th>
										<th>Proj Comp</th>
										<th class="hidden-xs">%Comp</th>
										<th class="hidden-xs center">Priority</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>IT Help Desk</td>
										<td class="hidden-xs">Master Company</td>
										<td>11 november 2014</td>
										<td class="hidden-xs">
										<div class="progress active progress-xs">
											<div style="width: 70%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" role="progressbar" class="progress-bar progress-bar-warning">
												<span class="sr-only"> 70% Complete (danger)</span>
											</div>
										</div></td>
										<td class="center hidden-xs"><span class="label label-danger">Critical</span></td>
									</tr>
									<tr>
										<td>PM New Product Dev</td>
										<td class="hidden-xs">Brand Company</td>
										<td>12 june 2014</td>
										<td class="hidden-xs">
										<div class="progress active progress-xs">
											<div style="width: 40%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-info">
												<span class="sr-only"> 40% Complete</span>
											</div>
										</div></td>
										<td class="center hidden-xs"><span class="label label-warning">High</span></td>
									</tr>
									<tr>
										<td>ClipTheme Web Site</td>
										<td class="hidden-xs">Internal</td>
										<td>11 november 2014</td>
										<td class="hidden-xs">
										<div class="progress active progress-xs">
											<div style="width: 90%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="90" role="progressbar" class="progress-bar progress-bar-success">
												<span class="sr-only"> 90% Complete</span>
											</div>
										</div></td>
										<td class="center hidden-xs"><span class="label label-success">Normal</span></td>
									</tr>
									<tr>
										<td>Local Ad</td>
										<td class="hidden-xs">UI Fab</td>
										<td>15 april 2014</td>
										<td class="hidden-xs">
										<div class="progress active progress-xs">
											<div style="width: 50%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" role="progressbar" class="progress-bar progress-bar-warning">
												<span class="sr-only"> 50% Complete</span>
											</div>
										</div></td>
										<td class="center hidden-xs"><span class="label label-success">Normal</span></td>
									</tr>
									<tr>
										<td>Design new theme</td>
										<td class="hidden-xs">Internal</td>
										<td>2 october 2014</td>
										<td class="hidden-xs">
										<div class="progress active progress-xs">
											<div style="width: 20%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" role="progressbar" class="progress-bar progress-bar-success">
												<span class="sr-only"> 20% Complete (warning)</span>
											</div>
										</div></td>
										<td class="center hidden-xs"><span class="label label-danger">Critical</span></td>
									</tr>
									<tr>
										<td>IT Help Desk</td>
										<td class="hidden-xs">Designer TM</td>
										<td>6 december 2014</td>
										<td class="hidden-xs">
										<div class="progress active progress-xs">
											<div style="width: 40%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-warning">
												<span class="sr-only"> 40% Complete (warning)</span>
											</div>
										</div></td>
										<td class="center hidden-xs"><span class="label label-warning">High</span></td>
									</tr>
								</tbody>
							</table>
						</div> -->

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end: USER PROFILE -->
	</div>