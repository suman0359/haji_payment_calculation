<div class="main-content" >
    <div class="wrap-content container" id="container">

        <section id="page-title" style="padding: 20px 0">
            <div class="row">                
                <?php $this->load->view('common/breadcrumb'); ?>
            </div>
        </section>

        <div id="" class="container-fluid container-fullw bg-white">
            <div class="row">

                <form action="<?php echo base_url(); ?>reports/expense_ledger_statement" method="POST">
                    <div class="col-md-3 col-sm-6">
                        <div class="form-group">
                            <label for="">Expense Group</label>
                            <select name="expense_group_id" id="expense_group" class="form-control">
                                <option value="">Select Expense Group..</option>
                                <?php foreach ($expense_group_list as $value) { ?>
                                    <option value="<?php echo $value->id; ?>"><?php echo $value->expense_group_entry_name; ?></option>
                               <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="form-group">
                            <label for="">Expense Head</label>
                            <select name="expense_head_id" id="expense_head" class="form-control">
                                <option value="">Select Expense Head..</option>
                                <?php foreach ($expense_head_list as $value) { ?>
                                    <option value="<?php echo $value->id; ?>"><?php echo $value->expense_head_entry_name; ?></option>
                               <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="form-group">
                            <label for="">Payment Mode</label>
                            <select name="payment_mode" id="payment_mode" class="form-control">
                                <option value="">Select Payment Mode..</option>
                                <option value="1">Cash</option>
                                <option value="2">Bank</option>
                                <option value="3">bKash</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="input-group input-daterange datepicker">
                            <!-- <label for="Start Date">Start Date</label> -->
                            <input type="text" autocomplete="off" placeholder="Start Date" class="form-control" id="start_date" name="start_date">
                            <span class="input-group-addon bg-primary">to</span>
                            <!-- <label for="Start Date">Start Date</label> -->
                            <input type="text" autocomplete="off" placeholder="End Date" class="form-control" id="end_date" name="end_date">
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="form-group">
                            <button class="btn btn-primary btn-wide margin_top_4" type="submit">
                                Search <i class="fa fa-arrow-circle-right"></i>
                            </button>
                        </div>
                    </div>
                    

                </form>
            </div>
        </div>

        <!-- End Search Section -->

        <div id="printContent" class="container-fluid container-fullw bg-white">
            <h3 class="text-center">Expense Ledger and Statement </h3>

            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">

                        <thead>
                            <tr>
                                <th> # </th>
                                <th> Date </th>
                                <th> Money Receipt No </th>
                                <th> Expense Head </th>
                                <th> Payment Mode </th>
                                <th> Amount </th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            
                            $serial = 1;
                            $total_amount = 0;
                            if (!empty($expense_ledger_statement)) {
                                foreach ($expense_ledger_statement as $value) {


                                    
                                    $datetime = $value->expense_entry_date;
                                    $date_time = list($date, $time) = explode(' ', $datetime); 
                                    
                                    $expense_head_id = $value->expense_head_id;
                                    $expense_head_name = $this->common_model->getInfo('expense_head_entry', array('id' => $expense_head_id));

                                    $payment_mode = $value->payment_mode;


                                    ?>
                                    <tr>
                                        <td> <?php echo $serial; ?> </td>

                                        <td> <?php if (!empty($value->expense_entry_date)) echo $date_time[0] ?> </td>

                                        <td> <?php if (!empty($value->expense_name)) echo $value->expense_name; ?> </td>

                                        <td> <?php if (!empty($expense_head_name->expense_head_entry_name)) echo $expense_head_name->expense_head_entry_name ?> </td>

                                        <td> <?php if (!empty($payment_mode)) if($payment_mode==1) echo "Cash"; if($payment_mode==2) echo "Bank/Cheque"; if($payment_mode==3) echo "bKash"; ?> </td>
                                        
                                        <td> <?php echo $value->amount; ?> </td>

                                    </tr>

                                    <?php
                                    
                                    $serial++;
                                    $amount         = $value->amount;
                                    $total_amount   += $amount;
                                    
                                }
                            }else {
                                ?>
                                <tr>
                                    <td colspan="7" align="center">No Transaction Found</td>

                                </tr>
                            <?php } ?>

                            
                        </tbody>
                        <tr>
                                <td></td>
                                <td colspan="4" style="font-weight: bold">Total Amount</td>

                               
                                <td  style="font-weight: bold"> <?php if(!empty($total_amount)) echo $total_amount; ?> </td>
                            </tr>
                    </table>
                    
                </div>
            </div>


            <button class="btn btn-primary hidden-print" onclick="printContent('printContent')">Print</button>



            <script>
                function printContent(el) {
                    var restorepage = document.body.innerHTML;
                    var printcontent = document.getElementById(el).innerHTML;
                    document.body.innerHTML = printcontent;
                    window.print();
                    document.body.innerHTML = restorepage;
                }
            </script>


        </div>

    </div>
    <!-- </div> -->


<script src="<?php echo base_url(); ?>vendor/jquery/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $(".main-content").on('change', '#expense_group', function(){
        var x = document.getElementById("expense_group").value;
        var x = parseInt(x);
        
        $.ajax({
            url: "<?php echo base_url(); ?>reports/get_expense_head_list/" + x,
            beforeSend: function (xhr) {
                xhr.overrideMimeType("text/plain; charset=x-user-defined");
                $("#expense_head_name").html("<option>Loading .... </option>");
            }
        })
        .done(function (data) {
            $("#expense_head").html("<option value=''> Select Head Name </option>");
            data = JSON.parse(data);
            $.each(data, function (key, val) {
                $("#expense_head").append("<option value='" + val.id + "'>" + val.expense_head_entry_name + "</option>");
            });

        });
    });
    })
</script>


