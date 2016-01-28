<div class="main-content" >
    <div class="wrap-content container" id="container">
        <!-- start: PAGE TITLE -->
        <section id="page-title" style="padding: 20px 0">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <h1 class="mainTitle text-center">Bank Deposit Form</h1>
                    
                </div>
                <div class="col-md-4">
                    <ol class="breadcrumb">
                    <?php 
                // $this->load->library('breadcrumbcomponent');
                // $this->breadcrumbcomponent->add('Home', base_url());
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
                    
                    <form action="<?php echo base_url() . "bank/save_new_bank_info"; ?>" method="POST" role="form" id="form" accept-charset="utf-8" enctype="multipart/form-data">
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

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label" id="fff">
                                                Account Name <span class="symbol required"></span>
                                            </label>
                                            <input type="text" placeholder="Insert Account Name" class="form-control" id="account_name" name="account_name">
                                        </div>
                                    </div>




                                </div>

                            </div> <!-- End First Column -->

                            <div class="col-md-6">
                                    
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">
                                            Account Number <span class="symbol required"></span>
                                        </label>
                                        <!-- <input type="text" placeholder="Insert Account Number" class="form-control" id="account_number" name="account_number"> -->
                                    </div>
                                    <select name="account_number" id="account_number" class="form-control">
                                        <option value="">Select Account Number..</option>
                                        <?php foreach ($account_list as $value) { ?>
                                        <option value="<?php echo $value->id ?>"><?php echo $value->account_number ?></option>
                                        <?php } ?>
                                    </select>
                                </div>

                                 <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">
                                                Amount <span class="symbol required"></span>
                                            </label>
                                            <input type="text" placeholder="Insert Amount" class="form-control" id="amount" name="amount">
                                        </div>
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

</div>
<!-- </div> -->
<script src="http://localhost/haji_payment_calculation/vendor/jquery/jquery.min.js"></script>



<script type="text/javascript">
$(document).ready(function(){
        $(".main-content").on('change', '#bank_name', function(){
        var x = document.getElementById("bank_name").value;
        var x = parseInt(x);
        // document.getElementById('account_number').value=x;

        // var div_id = $(this).val();
        $.ajax({
            url: "<?php echo base_url(); ?>bank/get_account_number_list/" + x,
            beforeSend: function (xhr) {
                xhr.overrideMimeType("text/plain; charset=x-user-defined");
                $("#account_number").html("<option>Loading .... </option>");
            }
        })
        .done(function (data) {
            $("#account_number").html("<option value=''>Select Account Number </option>");
            data = JSON.parse(data);
            $.each(data, function (key, val) {
                $("#account_number").append("<option value='" + val.id + "'>" + val.account_number + "</option>");
                document.getElementById('account_name').value=null;
            });

        });
    });

        $(".main-content").on('change', '#account_number', function(){
        
        var account_id = $(this).val();
        // alert(account_id);
        $.ajax({
            url: "<?php echo base_url(); ?>bank/get_account_name/" + account_id,
            beforeSend: function (xhr) {
                xhr.overrideMimeType("text/plain; charset=x-user-defined");
                //$("#account_number").html("<option>Loading .... </option>");
            }
        })
        .done(function (data) {
            //$("#account_name").html("<option value=''>Select Account Number </option>");
            data = JSON.parse(data);
            $.each(data, function (key, val) {
                // $("#account_name").append("<option value='" + val.id + "'>" + val.account_name + "</option>");
                 document.getElementById('account_name').value=val.account_name;
                 // alert(div_id);
            });

        });
    });
});
</script>

