<div class="main-content" >
    <div class="wrap-content container" id="container">
        <!-- start: PAGE TITLE -->
        <section id="page-title" style="padding: 20px 0">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <h1 class="mainTitle text-center">Add New Bank Account Form</h1>
                    
                </div>
                <?php $this->load->view('common/breadcrumb');?>
            </div>
        </section>
        <!-- end: PAGE TITLE -->
        <!-- start: FORM VALIDATION EXAMPLE 1 -->
        <div class="container-fluid container-fullw bg-white">
            <div class="row">
                <div class="col-md-12">
                    
                    <form action="<?php echo base_url() . "bank/save_new_bank_account_info"; ?>" method="POST" role="form" id="form" accept-charset="utf-8" enctype="multipart/form-data">
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
                                        <div class="form-group">
                                            <label class="control-label">
                                                Account Name <span class="symbol required"></span>
                                            </label>
                                            <input type="text" placeholder="Insert Account Name" class="form-control" id="account_name" name="account_name">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">
                                                Bank Name <span class="symbol required"></span>
                                            </label>
                                        </div>

                                        <select name="bank_name" id="bank_name" class="form-control">
                                            <option value="">Select Bank Name..</option>
                                            <?php foreach ($bank_list as $value) { ?> 
                                            <option value="<?php echo $value->id ?>"><?php echo $value->bank_name ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>

                                    



                                </div>

                            </div> <!-- End First Column -->

                            <div class="col-md-6">

                                     <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">
                                                Account Number <span class="symbol required"></span>
                                            </label>
                                            <input type="text" placeholder="Insert Account Number" class="form-control" id="account_number" name="account_number">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group"><br/>
                                            <label class="control-label">
                                                Branch Name <span class="symbol required"></span>
                                            </label>
                                            <input type="text" placeholder="Insert Branch Name" class="form-control" id="branch_name" name="branch_name">
                                        </div>

                                        <!-- <select name="bank_name" id="bank_name" class="form-control">
                                            <option value="">Select Bank Account Name..</option>
                                            <?php foreach ($bank_account_list as $value) { ?> 
                                            <option value="<?php echo $value->id ?>"><?php echo $value->account_name ?></option>
                                            <?php } ?>
                                        </select> -->

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
                            By clicking SAVE NEW BANK ACCOUNT, you are agreeing to the Policy and Terms &amp; Conditions.
                        </p>
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-primary btn-wide pull-right" type="submit">
                            SAVE NEW BANK ACCOUNT <i class="fa fa-arrow-circle-right"></i>
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

