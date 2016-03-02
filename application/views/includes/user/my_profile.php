<div class="main-content" >
    <div class="wrap-content container" id="container">

    <section id="page-title" style="padding: 20px 0">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <h1 class="mainTitle">My Profile</h1>
                    
                </div>
                <?php $this->load->view('common/breadcrumb');?>
            </div>
        </section>
<!-- start: USER PROFILE -->

	<div class="container-fluid container-fullw bg-white">
		<div class="row">
		<?php $this->load->view('common/error_show'); ?>
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

											
										</div>
									</div>
								</fieldset>
								
									</div>
								</div>
							</div>
						</div>
						<div id="panel_edit_account" class="tab-pane fade">
							<form action="<?php echo base_url() . "user/update_my_profile"; ?>" method="POST" role="form" id="form" accept-charset="utf-8" enctype="multipart/form-data">
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

											<!-- Update My Profile Image -->
											<div class="form-group">
												<label>
													Image Upload
												</label>
												<div class="fileinput fileinput-new" data-provides="fileinput">
													<div class="fileinput-new thumbnail">
													<img src="<?php if(!empty($profile_picture)){echo base_url().'uploads/profile_picture/'.$profile_picture;}else{ echo base_url().'assets/images/thumbnail.png';} ?>" alt="">
													</div>
													<div class="fileinput-preview fileinput-exists thumbnail"></div>
													<div class="user-edit-image-buttons">
														<span class="btn btn-azure btn-file">
														<span class="fileinput-new">
														<i class="fa fa-picture"></i> Select image
														</span>
														<span class="fileinput-exists"><i class="fa fa-picture"></i> Change</span>
															<input type="file" name="profile_picture">
														</span>
														<a href="#" class="btn fileinput-exists btn-red" data-dismiss="fileinput">
															<i class="fa fa-times"></i> Remove
														</a>
													</div>
												</div>
											</div>


										</div>
									</div>
								</fieldset>
								
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
						

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end: USER PROFILE -->
	</div>