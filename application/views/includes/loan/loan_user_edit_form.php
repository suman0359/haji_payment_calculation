<div class="main-content" >
    <div class="wrap-content container" id="container">
        <!-- start: PAGE TITLE -->
        <section id="page-title" style="padding: 20px 0">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <h1 class="mainTitle text-center">Edit Selected Loan User</h1>
                    
                </div>
                <div class="col-md-4">
                    <ol class="breadcrumb">
                    <?php 
                $this->load->library('breadcrumbcomponent');
                $this->breadcrumbcomponent->add('Home', base_url());
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
                    
                    <form action="<?php echo base_url() . "loan/update_loan_user"; ?>" method="POST" role="form" id="form" accept-charset="utf-8" enctype="multipart/form-data">
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
                                    <input name="id" type="hidden" value="<?php echo $selected_loan_user->id; ?>">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">
                                                Full Name <span class="symbol required"></span>
                                            </label>
                                            <input type="text" value="<?php echo $selected_loan_user->full_name; ?>" placeholder="Insert Full Name" class="form-control" id="full_name" name="full_name">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">
                                                Email Address <span class="symbol required"></span>
                                            </label>
                                            <input type="email" value="<?php echo $selected_loan_user->email_address; ?>" placeholder="Insert Email Address" class="form-control" id="email_address" name="email_address">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">
                                            Mobile Number<span class="symbol required"></span>
                                        </label>
                                        <input type="text" value="<?php echo $selected_loan_user->mobile_number; ?>" placeholder="Insert Mobile Number" class="form-control" id="mobile_number" name="mobile_number">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">
                                            Permanent Address <span class="symbol required"></span>
                                        </label>
                                        <input type="text" value="<?php echo $selected_loan_user->permanent_address; ?>" placeholder="Insert Permanent Address" class="form-control" id="permanent_address" name="permanent_address">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">
                                            Present Address <span class="symbol required"></span>
                                        </label>
                                        <input type="text" value="<?php echo $selected_loan_user->present_address; ?>" placeholder="Insert Present Address" class="form-control" id="present_address" name="present_address">
                                    </div>
                                </div>


                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label">
                                            Ocupation <span class="symbol required"></span>
                                        </label>
                                        <input type="text" value="<?php echo $selected_loan_user->ocupation; ?>" placeholder="Insert Ocupation" class="form-control" id="ocupation" name="ocupation">
                                    </div>
                                </div>


                                </div>

                            </div> <!-- End First Column -->

                            <div class="col-md-6">

                                

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">
                                            Company Name <span class="symbol required"></span>
                                        </label>
                                        <input type="text" placeholder="Insert Company Name" class="form-control" value="<?php echo $selected_loan_user->company_name; ?>" id="company_name" name="company_name">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">
                                            Company Address <span class="symbol required"></span>
                                        </label>
                                        <input type="text" placeholder="Insert Company Name" class="form-control" value="<?php echo $selected_loan_user->company_address; ?>" id="company_address" name="company_address">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">
                                            National Id Number <span class="symbol required"></span>
                                        </label>
                                        <input type="text" placeholder="Insert Company Name" class="form-control" value="<?php echo $selected_loan_user->national_id_number; ?>" id="national_id_number" name="national_id_number">
                                    </div>
                                </div>

                                


                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">
                                            Photo <span class="symbol required"></span>
                                        </label>
                                        <div class="profile_image">
                                            <img src="<?php echo base_url() ?>uploads/loan_user_photo/<?php echo $selected_loan_user->id; ?>.jpg" alt="" id="target" width="300px" height="200px">
                                        </div>
                                        <span class="btn btn-success fileinput-button"> 
                                        <i class="glyphicon glyphicon-plus"></i> <span>Add files...</span>
                                            <input type="file" class="form-control" id="select_image" onchange="putImage()" name="profile_photo">
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
