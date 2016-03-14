<div class="main-content" >
    <div class="wrap-content container" id="container">
        <!-- start: PAGE TITLE -->
        <section id="page-title"  style="padding: 20px 0">
            <div class="row">
                <div class="col-sm-8">
                    <h1 class="mainTitle text-center">Expense Entry Form</h1>
                    <!-- <span class="mainDescription">Client side validation it’s very important if it is used as help for the user to complete with success the submission of a form.</span> -->
                </div>
                <?php $this->load->view('common/breadcrumb');?>
            </div>
        </section>
        <!-- end: PAGE TITLE -->
        <!-- start: FORM VALIDATION EXAMPLE 1 -->
        <div class="container-fluid container-fullw bg-white">
            <div class="row">
                <div class="col-md-12">
                    
                    <form action="<?php echo base_url() . "expense/add_entry_form"; ?>" method="POST"> 
                        <div class="row">

                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">
                                        Group Name <span class="symbol required"></span>
                                    </label>
                                    <select class="form-control" name="expense_group_id" id="expense_group_name">
                                        <option value=""> Select Goup Name </option>
                                        <?php foreach ($group_entry_list as $value) { ?>
                                        <option value="<?php echo $value->id; ?>"> <?php echo $value->expense_group_entry_name; ?> </option>
                                        
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
                                        <option value=""> Select Head Name </option>
                                        <!-- <?php foreach ($head_entry_list as $value) { ?>
                                        <option value="<?php echo $value->id; ?>"> <?php echo $value->expense_head_entry_name; ?> </option>
                                        
                                        <?php }  ?> -->
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

                                    <select class="form-control" name="payment_mode" id="payment_mode">
                                        <option value=""> Select Payment Mode </option>
                                        <option value="1"> Cash </option>
                                        <option value="2"> Bank</option>
                                        <option value="3"> BKash</option>
                                    </select>

                                </div>
                            </div>

                            <div id="bank_section" class="display_none"> <!-- Start: Bank Section -->
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
                                        <input type="text" placeholder="Insert Prilgrim ID" class="form-control datepicker" id="cheque_date" name="cheque_date">
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
                                <!-- End Second Column -->
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">
                                            Bank Account No<span class="symbol required"></span>
                                        </label>
                                        <input type="text" placeholder="Insert Bank Account Number" class="form-control" id="bank_acc_number" name="bank_acc_number">
                                    </div>
                                </div>
                            </div><!-- End: Bank Section -->

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

<script src="<?php echo base_url(); ?>vendor/jquery/jquery.min.js"></script>

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

<script type="text/javascript">
    $(document).ready(function(){
        $(".main-content").on('change', '#expense_group_name', function(){
        var x = document.getElementById("expense_group_name").value;
        var x = parseInt(x);

        $.ajax({
            url: "<?php echo base_url(); ?>expense/get_expense_head_list/" + x,
            beforeSend: function (xhr) {
                xhr.overrideMimeType("text/plain; charset=x-user-defined");
                $("#expense_head_name").html("<option>Loading .... </option>");
            }
        })
        .done(function (data) {
            $("#expense_head_name").html("<option value=''> Select Head Name </option>");
            data = JSON.parse(data);
            $.each(data, function (key, val) {
                $("#expense_head_name").append("<option value='" + val.id + "'>" + val.expense_head_entry_name + "</option>");
            });

        });
    });
    })
</script>


