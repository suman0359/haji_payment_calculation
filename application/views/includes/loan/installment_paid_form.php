<div class="main-content" >
    <div class="wrap-content container" id="container">
        <!-- start: PAGE TITLE -->
        <section id="page-title" style="padding: 20px 0">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <h1 class="mainTitle text-center">Loan Paid Form</h1>
                    
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
                    
                    <form action="<?php echo base_url() . "loan/save_loan_installment_paid_info"; ?>" method="POST" role="form" id="form" accept-charset="utf-8" enctype="multipart/form-data">
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

                                    <input type="hidden" value="<?php echo $loan_paid_history_info->id; ?>" name="loan_paid_history_id" />

                                    <input type="hidden" name="entry_by" value="<?php echo $profile_picture=$this->session->userdata("uid"); ?>">

                                    <input type="hidden" name="loan_user_id" value="<?php echo $loan_paid_history_info->loan_user_id; ?>">

                                    <input type="hidden" name="against_id" value="<?php echo $against_id; ?>">

                                   <!--  <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">
                                                Loan Status<span class="symbol required"></span>
                                            </label>
                                            <input type="text" disabled="disabled" class="form-control" value="<?php $balance= $user_info->net_balance; if($balance < 0) echo $balance." (দেনাদার)"; if($balance > 0) echo $balance." (পাউনাদার )"; ?>">
                                        </div>
                                    </div> -->

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">
                                                Full Name<span class="symbol required"></span>
                                            </label>
                                            <input type="text" disabled="disabled" class="form-control" value="<?php echo $user_info->full_name; ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">
                                                Phone Number<span class="symbol required"></span>
                                            </label>
                                            <input type="text" disabled="disabled" class="form-control" value="<?php echo $user_info->mobile_number; ?>">
                                        </div>
                                    </div>

                                    
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">
                                                Comment<span class="symbol required"></span>
                                            </label>
                                            <!-- <input type="text" disabled="disabled" class="form-control" value="10000"> -->
                                            <textarea class="form-control" name="comments" id="comments" cols="30" rows="5"></textarea>
                                        </div>
                                    </div>


                                </div>

                            </div> <!-- End First Column -->

                            <div class="col-md-6"> <!-- Second Column Start From Here -->

                            

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">
                                        Photo<span class="symbol required"></span>
                                    </label>
                                    <img src="<?php echo base_url(); ?>uploads/loan_user_photo/<?php echo $user_info->id.".jpg" ?>" width="160px">
                                </div>
                            </div>    
<fieldset>
                            
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">
                                       Installment Amount <span class="symbol required"></span>
                                    </label>
                                    <input type="text" placeholder="Insert Amount" class="form-control" id="amount" name="amount">
                                </div>
                            </div>

                            </fieldset>

                                



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
                            By clicking SAVE DATA, you are agreeing to the Policy and Terms &amp; Conditions.
                        </p>
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-primary btn-wide pull-right" type="submit">
                            SAVE DATA <i class="fa fa-arrow-circle-right"></i>
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

