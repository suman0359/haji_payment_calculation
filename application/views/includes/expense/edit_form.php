<div class="main-content" >
    <div class="wrap-content container" id="container">
        <!-- start: PAGE TITLE -->
        <section id="page-title" style="padding: 20px 0">
            <div class="row">
                <div class="col-sm-8">
                    <h1 class="mainTitle text-center">Expense Edit Form</h1>
                </div>    
                <?php $this->load->view('common/breadcrumb');?>
            </div>
        </section>
        <!-- end: PAGE TITLE -->
        <!-- start: FORM VALIDATION EXAMPLE 1 -->
        <div class="container-fluid container-fullw bg-white">
            <div class="row">
                <div class="col-md-12">
                    
                    <form action="<?php echo base_url() . "expense/update_entry_form"; ?>" method="POST"> 

                    <input type="hidden" name="expense_id" value="<?php echo $expense_info->id; ?>">
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
                                    <input type="date" value="<?php echo $expense_info->date; ?>" placeholder="Insert Prilgrim ID" class="form-control" id="date" name="date">
                                </div>
                            </div>

                                                       
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">
                                        Group Name <span class="symbol required"></span>
                                    </label>
                                    <select class="form-control" name="expense_group_id" id="expense_group_name">
                                        <option> Select Goup Name <option>
                                        <?php foreach ($group_entry_list as $value) { ?>
                                        <option <?php if($expense_info->expense_group_id==$value->id)echo "selected"; ?> value="<?php echo $value->id; ?>"> <?php echo $value->expense_group_entry_name; ?> <option>
                                        
                                        <?php }  ?>
                                    </select>
                                </div>
                            </div> <!-- End First Column -->

                            <!-- Second Column --> 


                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">
                                        Head Name <span class="symbol required"></span>
                                    </label>
                                    <select class="form-control" name="expense_head_id" id="expense_head_name">
                                        <option> Select Head Name <option>
                                        <?php foreach ($head_entry_list as $value) { ?>
                                        <option <?php if($expense_info->expense_head_id==$value->id)echo "selected"; ?> value="<?php echo $value->id; ?>"> <?php echo $value->expense_head_entry_name; ?> <option>
                                        
                                        <?php }  ?>
                                    </select>
                                </div>
                            </div>

                             <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">
                                        Expense Name <span class="symbol required"></span>
                                    </label>
                                    <input type="text" value="<?php echo $expense_info->expense_name; ?>" placeholder="Insert Expense Name" class="form-control" id="expense_name" name="expense_name">
                                </div>
                            </div>


                             <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">
                                        Payment Mode <span class="symbol required"></span>
                                    </label>

                                    <select class="form-control" name="payment_mode">
                                        <option value=""> Select Payment Mode <option>
                                        <option <?php if($expense_info->payment_mode == 1) echo "selected" ?> value="1"> Cash <option>
                                        <option <?php if($expense_info->payment_mode == 2)
                                        echo "selected" ?> value="2"> Bank<option>
                                        <option <?php if($expense_info->payment_mode == 3)
                                        echo "selected" ?> value="3"> BKash<option>
                                    </select>

                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">
                                        Cheque No <span class="symbol required"></span>
                                    </label>
                                    <input type="text" value="<?php echo $expense_info->cheque_number ?>" placeholder="Insert Cheque Number" class="form-control" id="cheque_number" name="cheque_number">
                                </div>
                            </div><!-- End Second Column -->
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">
                                        Cheque Date <span class="symbol required"></span>
                                    </label>
                                    <input type="date" value="<?php echo $expense_info->cheque_date ?>" placeholder="Insert Prilgrim ID" class="form-control" id="cheque_date" name="cheque_date">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">
                                        Bank Name <span class="symbol required"></span>
                                    </label>
                                    <input type="text" value="<?php echo $expense_info->bank_name ?>" placeholder="Insert Bank Name" class="form-control" id="bank_name" name="bank_name">
                                </div>
                            </div><!-- End Second Column -->
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">
                                        Bank Account No<span class="symbol required"></span>
                                    </label>
                                    <input type="text" value="<?php echo $expense_info->bank_acc_number ?>" placeholder="Insert Bank Account Number" class="form-control" id="bank_acc_number" name="bank_acc_number">
                                </div>
                            </div><!-- End Second Column -->
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">
                                        Amount<span class="symbol required"></span>
                                    </label>
                                    <input type="text" value="<?php echo $expense_info->amount ?>" placeholder="Insert Amount" class="form-control" id="amount" name="amount">
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">
                                        &nbsp;
                                    </label>
                                    <div class="control-label">
                                        <button class="btn btn-primary btn-wide pull-left" type="submit">
                                            Update Date <i class="fa fa-arrow-circle-right"></i>
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
                            By clicking UPDATE, you are agreeing to the Policy and Terms &amp; Conditions.
                        </p>
                    </div>
                    
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end: FORM VALIDATION EXAMPLE 1 -->

<!-- </div> -->

