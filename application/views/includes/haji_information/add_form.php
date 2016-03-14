<div class="main-content" >
    <div class="wrap-content container" id="container">
        <!-- start: PAGE TITLE -->
        <section id="page-title" style="padding: 20px 0">
            <div class="row">
                <h1 class="mainTitle">Hajj and Omra Information Form</h1>
                <?php $this->load->view('common/breadcrumb'); ?>
            </div>
        </section>
        <!-- end: PAGE TITLE -->
        <?php $this->load->view('common/error_show'); ?>
        <!-- start: FORM VALIDATION EXAMPLE 1 -->
        <div class="container-fluid container-fullw bg-white">
            <div class="row">
                <div class="col-md-12">

                    <form action="<?php echo base_url() . "haji_info/add_haji_information"; ?>" method="POST" role="form" id="form" accept-charset="utf-8" enctype="multipart/form-data">
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

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">
                                                Full Name <span class="symbol required"></span>
                                            </label>
                                            <input type="text" placeholder="Insert Haji Name" class="form-control" id="haji_name" name="haji_name">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">
                                                Passport No<span class="symbol required"></span>
                                            </label>
                                            <input type="text" placeholder="Insert Haji Passport" class="form-control" id="haji_passport" name="haji_passport">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">
                                                Passport Expired Date<span class="symbol required"></span>
                                            </label>
                                            <input type="text" placeholder="MM/DD/YYYY" class="form-control datepicker" id="passport_expired_date" name="passport_expired_date">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">
                                                National ID <span class="symbol required"></span>
                                            </label>
                                            <input type="text" placeholder="XXXXXXXX" class="form-control" id="national_id_no" name="national_id_no">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">
                                                Mobile No <span class="symbol required"></span>
                                            </label>
                                            <input type="text" placeholder="Insert Haji Mobile" class="form-control" id="haji_mobile" name="haji_mobile">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">
                                                Date of Birth<span class="symbol required"></span>
                                            </label>
                                            <input type="text" placeholder="MM/DD/YYYY" class="form-control datepicker" id="date_of_birth" name="date_of_birth">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">
                                                Address <span class="symbol required"></span>
                                            </label>
                                            <input type="text" placeholder="Insert Haji Address" class="form-control" id="haji_address" name="haji_address">
                                        </div>
                                    </div>

                                    
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label class="control-label">
                                                Total Contact Amount <span class="symbol required"></span>
                                            </label>
                                            <input type="text" placeholder="Insert Total Amount" class="form-control" id="total_amount" name="total_amount">
                                        </div>
                                    </div>


                                </div>

                            </div> <!-- End First Column -->

                            <div class="col-md-6">



                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">
                                            Year <span class="symbol required"></span>
                                        </label>
                                        <input type="text" placeholder="Insert Hajj/Omra Year" class="form-control" id="hajj_year" name="hajj_year">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="" class="control-label">Select Refference</label>
                                        <div class="clip-radio radio-primary">
                                            <input type="radio" id="female" name="gender" value="female">
                                            <label for="female">
                                                Female
                                            </label>
                                            <input type="radio" id="male" name="gender" value="male" checked="checked">
                                            <label for="male">
                                                Male
                                            </label>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="Refference_Name" class="control-label">Mahrim Name</label>
                                    

                                    <select name="commission_agent_id" id="commission_agent_id" class="form-control">
                                        <option value="">Select Mahrim Name..</option>
                                        <?php foreach ($commission_agent_list as $value) { ?> 
                                            <option value="<?php echo $value->id ?>"><?php echo $value->commision_agent_name; ?></option>
                                        <?php } ?>
                                    </select>

                                    </div>
                                </div>

                                
                                <div class="col-md-12">
                                    <label for="HajiType" class="control-label">Type</label>
                                    <select name="type" id="type" class="form-control">
                                        <option value="0">Select Type</option>
                                        <option value="1">Hajj</option>
                                        <option value="2">Omra</option>
                                        <option value="3">Visa Processing</option>
                                        <option value="4">Ticket Processing</option>
                                    </select>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="Refference_Name" class="control-label">Refference Name</label>
                                    

                                    <select name="commission_agent_id" id="commission_agent_id" class="form-control">
                                        <option value="">Select Refference Name..</option>
                                        <?php foreach ($commission_agent_list as $value) { ?> 
                                            <option value="<?php echo $value->id ?>"><?php echo $value->commision_agent_name; ?></option>
                                        <?php } ?>
                                    </select>
                                    </div>

                                </div>


                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">
                                            Profile Photo <span class="symbol required"></span>
                                        </label>
                                        <div class="profile_image">
                                            <img src="<?php echo base_url(); ?>assets/images/thumbnail.png" alt="" id="target" style="width: 300px; height: 200px" />
                                        </div>
                                        <span class="btn btn-success fileinput-button"> 
                                            <i class="glyphicon glyphicon-plus"></i> <span>Add files...</span>
                                            <input type="file" id="select_image" onchange="putImage()" name="profile_photo">
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
