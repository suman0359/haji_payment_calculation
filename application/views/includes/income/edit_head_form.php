<div class="main-content" >
    <div class="wrap-content container" id="container">
        <!-- start: PAGE TITLE -->
        <section id="page-title" style="padding: 20px 0">
            <div class="row">
                <div class="col-sm-8">
                    <h1 class="mainTitle text-center">Edit Income Head Information</h1>
                    
                </div>
                <?php $this->load->view('common/breadcrumb'); ?>
            </div>
        </section>
        <!-- end: PAGE TITLE -->
        <!-- start: FORM VALIDATION EXAMPLE 1 -->
        <div class="container-fluid container-fullw bg-white">
            <div class="row">
                <div class="col-md-12">
                    <!-- <h2 class="text-center">Income Head Update Form</h2>
                    <p class="text-center">
                        Create one account to manage everything you do with Clip-Two, from your shopping preferences to your Clip-Two activity.
                    </p>
                    <hr> -->
                    <form action="<?php echo base_url() . "income/edit_head_data"; ?>" method="POST" role="form" id="form">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="errorHandler alert alert-danger no-display">
                                    <i class="fa fa-times-sign"></i> You have some form errors. Please check below.
                                </div>
                                <div class="successHandler alert alert-success no-display">
                                    <i class="fa fa-ok"></i> Your form validation is successful!
                                </div>
                            </div>

                            <input type="hidden" value="<?php echo $income_head->id; ?>"  name="income_head_id">

                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">
                                        Income Head Code <span class="symbol required"></span>
                                    </label>
                                    <input disabled type="text" value="<?php echo $income_head->income_head_code; ?>" placeholder="Income Head Code" class="form-control" id="income_head_code" name="income_head_code">
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">
                                        Income Head Name <span class="symbol required"></span>
                                    </label>
                                    <input type="text" value="<?php echo $income_head->income_head_name; ?>" placeholder="Income Head Name" class="form-control" id="income_head_name" name="income_head_name">
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">
                                        Income Group Name <span class="symbol required"></span>
                                    </label>
                                    <select name="income_group_id" id="income_group_id" class="form-control">
                                        <option value="">Select Group Name...</option>
                                        <?php foreach ($income_group_list as $value) { ?>

                                        <option <?php if($income_head->income_group_id==$value->id) echo "selected" ?> value="<?php echo $value->id; ?>"><?php echo $value->income_group_name; ?></option>

                                        <?php } ?>
                                    </select>
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
                            By clicking Update, you are agreeing to the Policy and Terms &amp; Conditions.
                        </p>
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-primary btn-wide pull-right" type="submit">
                            Update <i class="fa fa-arrow-circle-right"></i>
                        </button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end: FORM VALIDATION EXAMPLE 1 -->

<!-- </div> -->

