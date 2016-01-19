<div class="main-content" >
    <div class="wrap-content container" id="container">
        <!-- start: PAGE TITLE -->
        <section id="page-title" style="padding: 20px 0">
            <div class="row">
                <div class="col-sm-8">
                    <h1 class="mainTitle text-center">Income Group Entry Form</h1>
                    <!-- <span class="mainDescription">Client side validation it’s very important if it is used as help for the user to complete with success the submission of a form.</span> -->
                </div>
                <ol class="breadcrumb">
                    <li>
                        <span>Income Group</span>
                    </li>
                    <li class="active">
                        <span>Add Form</span>
                    </li>
                </ol>
            </div>
        </section>
        <!-- end: PAGE TITLE -->
        <!-- start: FORM VALIDATION EXAMPLE 1 -->
        <div class="container-fluid container-fullw bg-white">
            <div class="row">
                <div class="col-md-12">
                   <!--  <h2 class="text-center">Income Group Entry Form</h2>
                    <p class="text-center">
                        Create one account to manage everything you do with Clip-Two, from your shopping preferences to your Clip-Two activity.
                    </p>
                    <hr> -->
                    <form action="<?php echo base_url() . "income/add_group_data"; ?>" method="POST" role="form" id="form" accept-charset="utf-8" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="errorHandler alert alert-danger no-display">
                                    <i class="fa fa-times-sign"></i> You have some form errors. Please check below.
                                </div>
                                <div class="successHandler alert alert-success no-display">
                                    <i class="fa fa-ok"></i> Your form validation is successful!
                                </div>
                            </div>
                            <!-- <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">
                                        Group Code <span class="symbol required"></span>
                                    </label>
                                    <input type="text" placeholder="Income Group Code" class="form-control" id="income_head_name" name="income_group_code">
                                </div>
                            </div> -->
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label class="control-label">
                                        Group Name <span class="symbol required"></span>
                                    </label>
                                    <input type="text" placeholder="Income Group Name" class="form-control" id="income_head_name" name="income_group_name">
                                </div>
                            </div>
                            
                            <!-- End First Column -->
                            
                            <!-- Second Column --> 
                            
                                
                            
                            
                            
                            <!-- End Second Column -->

                            <hr>
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
                            By clicking <span style="text-transform: uppercase;">Add New Group</span>, you are agreeing to the Policy and Terms &amp; Conditions.
                        </p>
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-primary btn-wide pull-right" type="submit">
                            Add New Group <i class="fa fa-arrow-circle-right"></i>
                        </button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end: FORM VALIDATION EXAMPLE 1 -->

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
