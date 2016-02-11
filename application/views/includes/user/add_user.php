<div class="main-content" >
    <div class="wrap-content container" id="container">
        <!-- start: PAGE TITLE -->
        <section id="page-title" style="padding: 20px 0">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <h1 class="mainTitle text-center">Add New User</h1>
                    
                </div>
                <div class="col-md-4">
                    <ol class="breadcrumb">
                    <?php 
                //$this->load->library('breadcrumbcomponent');
                //$this->breadcrumbcomponent->add('Home', base_url());
                ?>
                    <li>
                        <span>Forms</span>
                    </li>
                    <li class="active">
                        <span>Form Validation</span>
                    </li>
                </ol>
                </div>
            </div>
        </section>
        <!-- end: PAGE TITLE -->
        <!-- start: FORM VALIDATION EXAMPLE 1 -->
        <div class="container-fluid container-fullw bg-white">
            <div class="row">
                <div class="col-md-12">
                    
                    <form action="<?php echo base_url() . "user/save_new_user_info"; ?>" method="POST" role="form" id="form" accept-charset="utf-8" enctype="multipart/form-data">
                        <div class="row">

                            <div class="col-md-12">
                                <div class="errorHandler alert alert-danger no-display">
                                    <i class="fa fa-times-sign"></i> You have some form errors. Please check below.
                                </div>
                                <div class="successHandler alert alert-success no-display">
                                    <i class="fa fa-ok"></i> Your form validation is successful!
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <!-- <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">
                                                HAJI ID <span class="symbol required"></span>
                                            </label>
                                            <input type="text" placeholder="Insert Prilgrim ID" class="form-control" id="haji_id" name="haji_id">
                                        </div>
                                    </div> -->
                                    <div class="col-md-12">
                                        <div class="form-group" id="username_validation">
                                            <label class="control-label">
                                                User Name <span class="symbol required"></span>
                                            </label>
                                            <input type="text" autocomplete="off" placeholder="Insert User Name" class="form-control" id="username" name="username">
                                            <code id="validation_error" class="danger display_none">Username Must be at least 4 character</code>
                                            <span id="validation" class="success display_none">User Name is Available</span>
                                            <span id="validation_exist" class="danger display_none">User Name is Already Exist</span>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">
                                                First Name <span class="symbol required"></span>
                                            </label>
                                            <input type="text" placeholder="Insert Frist Name" class="form-control" id="user_first_name" name="user_first_name">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">
                                                Last Name <span class="symbol required"></span>
                                            </label>
                                            <input type="text" placeholder="Insert Last Name" class="form-control" id="user_last_name" name="user_last_name">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">
                                                Phone No<span class="symbol required"></span>
                                            </label>
                                            <input type="text" placeholder="Insert User Phone" class="form-control" id="phone" name="phone">
                                        </div>
                                    </div>
                                
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">
                                                Email<span class="symbol required"></span>
                                            </label>
                                            <input type="email" autocomplete="off" placeholder="Insert Email Address" class="form-control" id="user_email" name="user_email">
                                            <small id="username_validation" style="color: red; display:block;">Just for Testing</small>
                                        </div>
                                    </div>
                                
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">
                                            Password <span class="symbol required"></span>
                                        </label>
                                        <input type="password" placeholder="Insert Password" class="form-control" id="password" name="password">
                                    </div>
                                </div>

                                </div>

                            </div> <!-- End First Column -->

                            <div class="col-md-6">

                                

                                

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">
                                            Address <span class="symbol required"></span>
                                        </label>
                                        <input type="text" placeholder="Insert Address" class="form-control" id="address" name="address">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="Commission Agent" class="control-label">User Role</label>

                                        <select name="user_type" id="user_type" class="form-control">
                                            <option value="">Select User Role..</option>
                                            <option value="3">User</option>
                                            <option value="2">Admin</option>
                                            <option value="1">Super Admin</option>
                                            <!-- 
                                            <?php //foreach ($user_type as $value) { ?> 
                                            <option value="<?php //echo $value->id ?>"><?php //echo $value->commision_agent_name; ?></option>
                                            <?php //} ?> -->
                                        </select>
                                    </div>

                                    
                                </div>


                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">
                                            Profile Photo <span class="symbol required"></span>
                                        </label>
                                        <div class="profile_image">
                                            <img src="" alt="" id="target" width="300px" height="200px">
                                        </div>
                                        <span class="btn btn-success fileinput-button"> 
                                        <i class="glyphicon glyphicon-plus"></i> <span>Add files...</span>
                                            <input type="file" class="form-control" id="select_image" onchange="putImage()" name="profile_picture">
                                        </span>
                                        
                                        
                                    </div>
                                </div>

                                



                            </div> <!-- End First Column -->

                </div> <!-- End Row -->

                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <span class="symbol required"></span>Required Fields
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <p>
                            By clicking REGISTER, you are agreeing to the Policy and Terms &amp; Conditions.
                        </p>
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-primary btn-wide pull-right" type="submit">
                            Register <i class="fa fa-arrow-circle-right"></i>
                        </button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end: FORM VALIDATION EXAMPLE 1 -->

</div>
<!-- </div> -->


<script>
    function showImage(src, target) {
        var fr = new FileReader();
        fr.onload = function () {
            target.src = fr.result;
        }
        fr.readAsDataURL(src.files[0]);
    }

    function putImage() {
        var src = document.getElementById("select_image");
        var target = document.getElementById("target");
        showImage(src, target);
    }

</script>
