<div class="main-content" >
    <div class="wrap-content container" id="container">
        <!-- start: PAGE TITLE -->
        <section id="page-title">
            <div class="row">
                <div class="col-sm-8">
                    <h1 class="mainTitle">Hajj Management Application</h1>
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
                    <h2 class="text-center"> Hajj Payment Collection </h2>
                    <p class="text-center">
                        Create one account to manage everything you do with Clip-Two, from your shopping preferences to your Clip-Two activity.
                    </p>
                    <hr>
                    <form action="<?php echo base_url() . "payment_collection/add_payment"; ?>" method="POST" role="form" id="form" accept-charset="utf-8" enctype="multipart/form-data"> 
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
                                        Passport No <span class="symbol required"></span>
                                    </label>
                                    <input type="text" placeholder="Insert Passport Number" class="form-control" id="passport_number" name="passport_number">
                                </div>
                            </div>
                            <!-- <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">
                                        Voucher no <span class="symbol required"></span>
                                    </label>
                                    <input type="text" placeholder="Insert Voucher No" class="form-control" id="voucher_no" name="voucher_no">
                                </div>
                            </div> -->
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">
                                        Total Amount <span class="symbol required"></span>
                                    </label>
                                    <input type="text" placeholder="Insert Total Amount" class="form-control" id="total_amount" name="total_amount">
                                </div>
                            </div> <!-- End First Column -->

                            <!-- Second Column --> 


                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">
                                        Haji Name <span class="symbol required"></span>
                                    </label>
                                    <input type="text" disabled placeholder="Insert Passport Number First" class="form-control" id="haji_name" name="haji_name">
                                </div>
                            </div> 
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">
                                        Commission Agent Name <span class="symbol required"></span>
                                    </label>
                                    <select class="form-control" name="commission_agent_id" id="commission_agent_id">
                                        <option> Select Agent Name <option>
                                        <?php foreach ($commission_agent_list as $value) { ?>
                                        <option value="<?php echo $value->id; ?>"> <?php echo $value->commision_agent_name; ?> <option>
                                        
                                        <?php }  ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">
                                        Commission Amount <span class="symbol required"></span>
                                    </label>
                                    <input type="text" placeholder="Insert ssion Amount" class="form-control" id="commission_amount" name="commission_amount">
                                </div>
                            </div><!-- End Second Column -->


                        </div>

                        <hr>

                        <!--                        <h2 class="text-center">Payment Collection Form</h2>-->


                        <div class="row">
                            <div class="col-md-12">
                                <div class="errorHandler alert alert-danger no-display">
                                    <i class="fa fa-times-sign"></i> You have some form errors. Please check below.
                                </div>
                                <div class="successHandler alert alert-success no-display">
                                    <i class="fa fa-ok"></i> Your form validation is successful!
                                </div>
                            </div>
                            <!--                            <div class="col-md-6 col-sm-6">
                                                            <div class="form-group">
                                                                <label class="control-label">
                                                                    Voucher No <span class="symbol required"></span>
                                                                </label>
                                                                <input type="text" placeholder="Voucher No" class="form-control" id="voucher_no" name="voucher_no">
                                                            </div>
                                                        </div>-->
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">
                                        MRR NO <span class="symbol required"></span>
                                    </label>
                                    <input type="text" placeholder="MRR NO" class="form-control" id="money_receipt_number" name="money_receipt_number">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">
                                        Payment Mode <span class="symbol required"></span>
                                    </label>

                                    <select class="form-control" name="payment_mode" id="payment_mode">
                                        <option> Select Payment Mode <option>
                                        <option value="1"> Cash <option>
                                        <option value="2"> Bank<option>
                                        <option value="3"> BKash<option>
                                    </select>

                                </div>
                            </div> <!-- End First Column -->

                            <!-- <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">
                                        Payment Date <span class="symbol required"></span>
                                    </label>
                                    <input type="date" class="form-control" id="payment_date" name="payment_date">
                                </div>
                            </div>  --><!-- End First Column -->

                            <!-- Second Column --> 


                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">
                                        Cheque Number <span class="symbol required"></span>
                                    </label>
                                    <input type="text" placeholder="Cheque Number X X X " class="form-control" id="chaque_number" name="chaque_number">
                                </div>
                            </div> 
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">
                                        Cheque Date <span class="symbol required"></span>
                                    </label>
                                    <input type="date" placeholder="Insert Prilgrim ID" class="form-control" id="chaque_date" name="chaque_date">
                                </div>
                            </div> 
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">
                                        Bank Name <span class="symbol required"></span>
                                    </label>
                                    <input type="text" placeholder="Insert Bank Name" class="form-control" id="bank_name" name="bank_name">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">
                                        Amount <span class="symbol required"></span>
                                    </label>
                                    <input type="text" placeholder="Insert Amount" class="form-control" id="amount" name="amount">
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">
                                        Branch Name <span class="symbol required"></span>
                                    </label>
                                    <input type="text" placeholder="Branch Name" class="form-control" id="branch_name" name="branch_name">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">
                                        Income Head <span class="symbol required"></span>
                                    </label>

                                    <select class="form-control" name="payment_head" id="payment_head">
                                        <option> Select Agent Name <option>
                                        <?php foreach ($income_head_list as $value) { ?>
                                        <option value="<?php echo $value->id; ?>"> <?php echo $value->income_head_name; ?> <option>
                                        
                                        <?php }  ?>
                                    </select>

                                </div>
                            </div>
                            <!-- End Second Column -->


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

<!-- </div>
 -->

