<div class="main-content" >
    <div class="wrap-content container" id="container">
        <!-- start: PAGE TITLE -->
        <section id="page-title" style="padding: 20px 0">
            <div class="row">
                <div class="col-sm-8">
                    <h1 class="mainTitle">Money Receipt Entry From</h1>

                </div>

                <div class="row">
                    <?php $this->load->view('common/breadcrumb'); ?>
                </div>
        </section>
        <!-- end: PAGE TITLE -->
        <!-- start: FORM VALIDATION EXAMPLE 1 -->
        <div class="container-fluid container-fullw bg-white">
            <div class="row">
                <div class="col-md-12">
                   
                    <form action="<?php echo base_url() . "payment_collection/save_money_receipt"; ?>" method="POST" role="form" id="form" accept-charset="utf-8" enctype="multipart/form-data"> 
                        <div class="row">
                            <div class="col-md-12">
                                <div class="errorHandler alert alert-danger no-display">
                                    <i class="fa fa-times-sign"></i> You have some form errors. Please check below.
                                </div>
                                <div class="successHandler alert alert-success no-display">
                                    <i class="fa fa-ok"></i> Your form validation is successful!
                                </div>
                            </div>
                           
                            <div class="col-md-6 col-sm-6" id="user_search">       
                                <div class="form-group">
                                    <label class="control-label">
                                        Loading array data
                                    </label>
                                    <select class="js-example-data-array-selected form-control" id="loading_array"></select>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">
                                        Name <span class="symbol required"></span>
                                    </label>
                                    <input type="text" placeholder="Name " class="form-control" id="name" name="name">
                                </div>
                            </div> 

                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">
                                        Income Head <span class="symbol required"></span>
                                    </label>
                                    <select class="form-control" name="income_head_id" id="income_head_id">
                                        <option> Select Income Head </option>
                                        <?php foreach ($income_head_list as $value) { ?>
                                            <option value="<?php echo $value->id; ?>"> <?php echo $value->income_head_name; ?> </option>

                                        <?php } ?>
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
                                        <!-- <option value="3"> BKash</option> -->
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
                                        <input type="text" class="form-control datepicker" id="chaque_date" name="chaque_date">
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
                                        <input type="text" placeholder="Bkash Phone No" class="form-control" id="bkash_phone_no" name="bkash_phone_no">
                                    </div>
                                </div> 
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">
                                            Bkash Transaction No<span class="symbol required"></span>
                                        </label>
                                        <input type="text" placeholder="Bkash Transaction No" class="form-control" id="bkash_transaction_no" name="bkash_transaction_no">
                                    </div>
                                </div> 

                            </div>

                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">
                                        Total Amount <span class="symbol required"></span>
                                    </label>
                                    <input type="text" placeholder="Insert Total Amount" class="form-control" id="total_amount" name="total_amount">
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

    <script src="<?php echo base_url(); ?>vendor/jquery/jquery.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#loading_array").onChange('#loading_array', function () {
                var username = document.getElementById("loading_array").value;
                var username = username.replace(/\s/g, '');

                alert("username");

            });
        });
    </script>

    <script type="text/javascript">
        var select2Handler = function () {
            var data = [{
                    id: 0,
                    text: 'enhancement'
                }, {
                    id: 1,
                    text: 'bugg'
                }, {
                    id: 2,
                    text: 'duplicate'
                }, {
                    id: 3,
                    text: 'invalid'
                }, {
                    id: 4,
                    text: 'wontfix'
                }];
            $(".js-example-data-array-selected").select2({
                data: data
            });
            // $(".js-example-basic-hide-search").select2({
            //     minimumResultsForSearch: Infinity
            // });
        }
    </script>
    <!-- end: FORM VALIDATION EXAMPLE 1 -->

</div>


