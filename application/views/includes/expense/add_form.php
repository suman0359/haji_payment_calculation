<div class="main-content" >
    <div class="wrap-content container" id="container">
        <!-- start: PAGE TITLE -->
        <section id="page-title"  style="padding: 20px 0">
            <div class="row">
                <div class="col-sm-8">
                    <h1 class="mainTitle text-center">Expense Entry Form</h1>
                    <!-- <span class="mainDescription">Client side validation it’s very important if it is used as help for the user to complete with success the submission of a form.</span> -->
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
                    <!-- <h2 class="text-center">Expense Entry Form</h2>
                    <p class="text-center">
                        Create one account to manage everything you do with Clip-Two, from your shopping preferences to your Clip-Two activity.
                    </p>
                    <hr> -->
                    <form action="<?php echo base_url() . "expense/add_entry_form"; ?>" method="POST"> 
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
                                    <input type="date" placeholder="Insert Prilgrim ID" class="form-control" id="date" name="date">
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
                                        <option value="<?php echo $value->id; ?>"> <?php echo $value->expense_group_entry_name; ?> <option>
                                        
                                        <?php }  ?>
                                    </select>
                                </div>
                            </div> 

                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">
                                        Head Name <span class="symbol required"></span>
                                    </label>
                                    <select class="form-control" name="expense_head_id" id="expense_head_name">
                                        <option> Select Head Name <option>
                                        <?php foreach ($head_entry_list as $value) { ?>
                                        <option value="<?php echo $value->id; ?>"> <?php echo $value->expense_head_entry_name; ?> <option>
                                        
                                        <?php }  ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">
                                        Expense Name <span class="symbol required"></span>
                                    </label>
                                    <input type="text" placeholder="Insert Expense Name" class="form-control" id="expense_name" name="expense_name">
                                </div>
                            </div>

                            <!-- End First Column -->

                            <!-- Second Column --> 


                            
                             <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">
                                        Payment Mode <span class="symbol required"></span>
                                    </label>

                                    <select class="form-control" name="payment_mode">
                                        <option value=""> Select Payment Mode <option>
                                        <option value="1"> Cash <option>
                                        <option value="2"> Bank<option>
                                        <option value="3"> BKash<option>
                                    </select>

                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">
                                        Cheque No <span class="symbol required"></span>
                                    </label>
                                    <input type="text" placeholder="Insert Cheque Number" class="form-control" id="cheque_number" name="cheque_number">
                                </div>
                            </div><!-- End Second Column -->
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">
                                        Cheque Date <span class="symbol required"></span>
                                    </label>
                                    <input type="date" placeholder="Insert Prilgrim ID" class="form-control" id="cheque_date" name="cheque_date">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">
                                        Bank Name <span class="symbol required"></span>
                                    </label>
                                    <input type="text" placeholder="Insert Bank Name" class="form-control" id="bank_name" name="bank_name">
                                </div>
                            </div><!-- End Second Column -->
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">
                                        Bank Account No<span class="symbol required"></span>
                                    </label>
                                    <input type="text" placeholder="Insert Bank Account Number" class="form-control" id="bank_acc_number" name="bank_acc_number">
                                </div>
                            </div><!-- End Second Column -->
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">
                                        Amount<span class="symbol required"></span>
                                    </label>
                                    <input type="text" placeholder="Insert Amount" class="form-control" id="amount" name="amount">
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
                            By clicking <span style="text-transform: uppercase;">Save Expense Form</span>, you are agreeing to the Policy and Terms &amp; Conditions.
                        </p>
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-primary btn-wide pull-right" type="submit">
                            Save Expense Form <i class="fa fa-arrow-circle-right"></i>
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
