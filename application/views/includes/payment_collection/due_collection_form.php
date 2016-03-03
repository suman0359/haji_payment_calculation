<div class="main-content" >
    <div class="wrap-content container" id="container">
        <!-- start: PAGE TITLE -->
        <section id="page-title">
            <div class="row">
                <div class="col-sm-8">
                    <h1 class="mainTitle">Collection Form</h1>
                    
                </div>
                <?php $this->load->view('common/breadcrumb'); ?>
            </div>
        </section>
        <!-- end: PAGE TITLE -->
        <!-- start: FORM VALIDATION EXAMPLE 1 -->
        <div class="container-fluid container-fullw bg-white">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="Contact Amount">Contact Amount : <?php $contact_amount= $this->common_model->getInfoWtihYear('tbl_contact_amount', array('haji_id' => $select_haji_for_payment->id)); echo $contact_amount->amount;  ?></label>
                        </div>
                        <div class="col-md-6">
                            <label for="Contact Amount">Dues Amount : <?php //echo "1,00,000" ?></label>
                        </div>
                    </div>
                    <hr>
                    <form action="<?php echo base_url() . "payment_collection/save_due_collection"; ?>" method="POST" role="form" id="form" accept-charset="utf-8" enctype="multipart/form-data"> 
                        

                        <!-- <h2 class="text-center">Collection Form</h2> -->


                        <div class="row">
                            <!-- <div class="col-md-12">
                                <div class="errorHandler alert alert-danger no-display">
                                    <i class="fa fa-times-sign"></i> You have some form errors. Please check below.
                                </div>
                                <div class="successHandler alert alert-success no-display">
                                    <i class="fa fa-ok"></i> Your form validation is successful!
                                </div>
                            </div> -->

                            <input type="hidden" value="<?php if(!empty($select_haji_for_payment->id)) echo $select_haji_for_payment->id ?>" name="id" />
                            <input type="hidden" value="<?php if(!empty($select_haji_for_payment->haji_id)) echo $select_haji_for_payment->haji_id ?>" name="haji_id" />

                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">
                                        Passport no <span class="symbol required"></span>
                                    </label>
                                    <input value="<?php if(!empty($select_haji_for_payment->haji_passport)) echo $select_haji_for_payment->haji_passport; ?>" disabled type="text" placeholder="Insert Passsport No" class="form-control" id="passport_no" name="passport_no">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">
                                        Haji Name <span class="symbol required"></span>
                                    </label>
                                    <input value="<?php if(!empty($select_haji_for_payment->haji_name)) echo $select_haji_for_payment->haji_name; ?>" disabled type="text" placeholder="Insert Haji Name" class="form-control" id="haji_name" name="haji_name">
                                </div>
                            </div> 

                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">
                                        Income Head <span class="symbol required"></span>
                                    </label>

                                    <select class="form-control" name="payment_head" id="payment_head">
                                        <option value=""> Select Agent Name </option>

                                        <?php if(!empty($income_head_list)){ foreach ($income_head_list as $value) { ?>
                                        <option value="<?php echo $value->id; ?>"> <?php echo $value->income_head_name; ?> </option>
                                        
                                        <?php } } ?>
                                    </select>

                                </div>
                            </div>
                            
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">
                                        Payment Mode <span class="symbol required"></span>
                                    </label>

                                    <select class="form-control" name="payment_mode" id="payment_mode">
                                        <option> Select Payment Mode </option>
                                        <option value="1" selected> Cash </option>
                                        <option value="2"> Bank</option>
                                        <option value="3"> BKash</option>
                                    </select>

                                </div>
                            </div> <!-- End First Column -->

                        <div id="bank_section" class="display_none"> <!--Bank Section -->
                            
                        
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
                                        Branch Name <span class="symbol required"></span>
                                    </label>
                                    <input type="text" placeholder="Branch Name" class="form-control" id="branch_name" name="branch_name">
                                </div>
                            </div> 
                        </div> <!-- /Bank Section -->

                        <!-- bKash Section -->
                        <div id="bkash_section" class="display_none">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">
                                        Bkash Phone No <span class="symbol required"></span>
                                    </label>
                                    <input type="text" placeholder="Bkash Phone No" class="form-control" id="branch_name" name="branch_name">
                                </div>
                            </div> 
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">
                                        Bkash Transaction No<span class="symbol required"></span>
                                    </label>
                                    <input type="text" placeholder="Bkash Transaction No" class="form-control" id="branch_name" name="branch_name">
                                </div>
                            </div> 
                            <!-- <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">
                                        Transaction Amount <span class="symbol required"></span>
                                    </label>
                                    <input type="text" placeholder="Transaction Amount" class="form-control" id="branch_name" name="branch_name">
                                </div>
                            </div>  -->

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
                                        &nbsp;
                                    </label>
                                    <div class="control-label">
                                        <button class="btn btn-primary btn-wide pull-left" type="submit">
                                            Save Data <i class="fa fa-arrow-circle-right"></i>
                                        </button>
                                    </div>
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
                            By clicking SAVE DATA, you are agreeing to the Policy and Terms &amp; Conditions.
                        </p>
                    </div>
                    
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end: FORM VALIDATION EXAMPLE 1 -->

<!-- </div> -->


