<div class="main-content" >
    <div class="wrap-content container" id="container">
        <!-- start: PAGE TITLE -->
        <section id="page-title">
            <div class="row">
                <div class="col-sm-8">
                    <h1 class="mainTitle">Collection Form For 2016</h1>
                    
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
                            <label for="Contact Amount">Contact Amount : <?php 
                            $hajj_year= date('Y'); 
                            $contact_amount= $this->common_model->getInfoWtihYear('tbl_contact_amount', array('commission_agent_id' => $select_group_leader_for_payment->id), $hajj_year); 
                            echo $contact_amount->amount;  ?></label><br/>
                            <label for="Contact Amount">Dues Amount : <?php echo "1,00,000" ?></label>
                        </div>
                        
                    </div>
                    <hr>
                    <form action="<?php echo base_url() . "payment_collection/save_group_payment_collection_data"; ?>" method="POST" role="form" id="form" > 
                       
                        <div class="row">
                           
                            <input type="hidden" value="<?php if(!empty($select_group_leader_for_payment->id)) echo $select_group_leader_for_payment->id ?>" name="id" />

                            <input type="hidden" value="<?php if(!empty($select_group_leader_for_payment->commission_agent_code)) echo $select_group_leader_for_payment->commission_agent_code ?>" name="commission_agent_code" />

                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">
                                        Passport no 
                                    </label>
                                    <input value="<?php if(!empty($select_group_leader_for_payment->passport_no)) echo $select_group_leader_for_payment->passport_no; ?>" disabled type="text" placeholder="Passsport No" class="form-control" id="passport_no" name="passport_no">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">
                                        Group Leader Name 
                                    </label>
                                    <input value="<?php if(!empty($select_group_leader_for_payment->commision_agent_name)) echo $select_group_leader_for_payment->commision_agent_name; ?>" disabled type="text" placeholder="Group Leader Name" class="form-control" id="group_leader_name" name="group_leader_name">
                                </div>
                            </div> 

                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">
                                        Income Head <span class="symbol required"></span>
                                    </label>

                                    <select class="form-control" name="payment_head" id="payment_head">
                                        <option value=""> Select Income Head </option>

                                        <?php if(!empty($income_head_list)){ foreach ($income_head_list as $value) { ?>
                                        <option value="<?php echo $value->id; ?>"> <?php echo $value->income_head_name; ?> </option>
                                        
                                        <?php } } ?>
                                    </select>

                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Select Year">Select Year <span class="symbol required"></span></label>
                                    <select class="form-control" name="hajj_year" id="hajj_year">
                                        <option value="">Select Year</option>
                                        <option value="2015">2015</option>
                                        <option value="2016">2016</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
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
                                    <input type="text" placeholder="Insert Date" class="datepicker form-control" id="chaque_date" name="chaque_date">
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
                                    <input type="text" placeholder="Bkash Transaction No" class="form-control" id="transaction_no" name="transaction_no">
                                </div>
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

                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label class="control-label">
                                        &nbsp;
                                    </label>
                                    <div class="control-label">
                                        <button class="btn btn-primary btn-wide pull-right" type="submit">
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
<script src="http://localhost/haji_payment_calculation/vendor/jquery/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){

        var this_year = new Date();
        var this_year = this_year.getFullYear();
        
        $('#hajj_year').find('option').each(function(i,e){
            //console.log($(e).val());
            if($(e).val() == this_year){
                $('#hajj_year').prop('selectedIndex',i);
            }
        });

        $(".main-content").on('change', '#hajj_year', function(){
            var x = document.getElementById("hajj_year").value;
            var x = parseInt(x);
            alert(this_year);

            // Ajax Section 
            $.ajax({
                url: "<?php echo base_url(); ?>bank/get_account_name/" + account_id,
                beforeSend: function (xhr) {
                    xhr.overrideMimeType("text/plain; charset=x-user-defined");
                    //$("#account_number").html("<option>Loading .... </option>");
                }
            })
            // Json Section 
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