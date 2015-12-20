<div class="main-content" >
    <div class="wrap-content container" id="container">
        <!-- start: PAGE TITLE -->
        <section id="page-title">
            <div class="row">
                <div class="col-sm-8">
                    <h1 class="mainTitle">Form Validation</h1>
                    <span class="mainDescription">Client side validation it’s very important if it is used as help for the user to complete with success the submission of a form.</span>
                </div>
                <ol class="breadcrumb">
                    <li>
                        <span>Forms</span>
                    </li>
                    <li class="active">
                        <span>Form Validation</span>
                    </li>
                </ol>
            </div>
        </section>
        <!-- end: PAGE TITLE -->
        <!-- start: FORM VALIDATION EXAMPLE 1 -->
        <div class="container-fluid container-fullw bg-white">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center">Payment Collection Form</h2>
                    <p class="text-center">
                        Create one account to manage everything you do with Clip-Two, from your shopping preferences to your Clip-Two activity.
                    </p>
                    <hr>
                    <form action="<?php echo base_url() . "haji_info/add"; ?>" method="POST" role="form" id="form" accept-charset="utf-8" enctype="multipart/form-data"> 
                        

                        <h2 class="text-center">Due Collection Form</h2>


                        <div class="row">
                            <div class="col-md-12">
                                <div class="errorHandler alert alert-danger no-display">
                                    <i class="fa fa-times-sign"></i> You have some form errors. Please check below.
                                </div>
                                <div class="successHandler alert alert-success no-display">
                                    <i class="fa fa-ok"></i> Your form validation is successful!
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">
                                        Date <span class="symbol required"></span>
                                    </label>
                                    <input type="text" placeholder="Insert Prilgrim ID" class="form-control" id="pilgrim_id" name="pilgrim_id">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">
                                        Voucher no <span class="symbol required"></span>
                                    </label>
                                    <input type="text" placeholder="Insert Prilgrim ID" class="form-control" id="pilgrim_id" name="pilgrim_id">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">
                                        Total Amount <span class="symbol required"></span>
                                    </label>
                                    <input type="text" placeholder="Insert Prilgrim ID" class="form-control" id="pilgrim_id" name="pilgrim_id">
                                </div>
                            </div> <!-- End First Column -->
                            
                            <!-- Second Column --> 
                            
                                
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">
                                        Haji Name <span class="symbol required"></span>
                                    </label>
                                    <input type="text" placeholder="Insert Prilgrim ID" class="form-control" id="pilgrim_id" name="pilgrim_id">
                                </div>
                            </div> 
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">
                                        Commission Agent Name <span class="symbol required"></span>
                                    </label>
                                    <input type="text" placeholder="Insert Prilgrim ID" class="form-control" id="pilgrim_id" name="pilgrim_id">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">
                                        Commission Amount <span class="symbol required"></span>
                                    </label>
                                    <input type="text" placeholder="Insert Prilgrim ID" class="form-control" id="pilgrim_id" name="pilgrim_id">
                                </div>
                            </div><!-- End Second Column -->

                            
                        </div>







                </div>
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
