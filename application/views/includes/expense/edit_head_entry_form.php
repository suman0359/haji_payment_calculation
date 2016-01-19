<div class="main-content" >
    <div class="wrap-content container" id="container">
        <!-- start: PAGE TITLE -->
        <section id="page-title" style="padding: 20px 0">
            <div class="row">
                <div class="col-sm-8">
                    <h1 class="mainTitle text-center">Expense Head Entry Form</h1>
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
<!--                    <h2 class="text-center">Payment Collection Form</h2>
                    <p class="text-center">
                        Create one account to manage everything you do with Clip-Two, from your shopping preferences to your Clip-Two activity.
                    </p>-->
                    
                    <form action="<?php echo base_url() . "expense/update_head_entry"; ?>" method="POST" role="form" id="form" accept-charset="utf-8" enctype="multipart/form-data"> 
                        
                    <input type="hidden" value="<?php echo $expense_head_info->id ?>" name="expense_head_entry_id" />
                        

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
                                        Group Name <span class="symbol required"></span>
                                    </label>

                                    <select class="form-control" name="expense_group_entry_name" id="expense_group_entry_name">
                                        <option> Select Group Name <option>
                                        <?php foreach ($group_entry_list as $value) { ?>
                                        <option <?php if($expense_head_info->expense_group_entry_id==$value->id) echo "selected"; ?> value="<?php echo $value->id; ?>"> <?php echo $value->expense_group_entry_name; ?> <option>
                                        
                                        <?php }  ?>
                                    </select>

                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">
                                        Code <span class="symbol required"></span>
                                    </label>
                                    <input type="text" value="<?php echo $expense_head_info->expense_head_entry_code; ?>" placeholder="Insert Code" class="form-control" id="expense_head_entry_code" name="expense_head_entry_code">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">
                                        Head Name <span class="symbol required"></span>
                                    </label>
                                    <input type="text" value="<?php echo $expense_head_info->expense_head_entry_name; ?>" placeholder="Insert Head Name" class="form-control" id="expense_head_entry_name" name="expense_head_entry_name">
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

<!-- </div> -->