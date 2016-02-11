<div class="main-content" >
    <div class="wrap-content container" id="container">
        
<div id="" class="container-fluid container-fullw bg-white">
        <div class="row">
            <form action="<?php echo base_url(); ?>haji_info/hajj_contact_and_due_statement" method="POST">
            <div class="col-md-4">
                <!-- <div class="input-group input-daterange datepicker"> -->
                    <!-- <label for="Start Date">Start Date</label> -->
                    <!-- <input type="text" placeholder="Start Date" class="form-control" id="start_date" name="start_date">
                    <span class="input-group-addon bg-primary">to</span> -->
                    <!-- <label for="Start Date">Start Date</label> -->
                    <!-- <input type="text" placeholder="End Date" class="form-control" id="end_date" name="end_date"> -->
                <!-- </div> -->

                <div class="form-group text-right margin_top_10">
                    <label for="">
                        Select 2016 <span class="symbol"></span>
                    </label>
                </div>
            </div>

            <div class="col-md-4">
                <select name="select_year" id="select_year" class="form-control">
                    <option value="">Select Year..</option>
                    <option value="2015">2015</option>
                    <option value="2016">2016</option>
                </select>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <button class="btn btn-primary btn-wide" type="submit">
                        Search <i class="fa fa-arrow-circle-right"></i>
                    </button>
                </div>
            </div>

            </form>
        </div>
        </div>

        <!-- End Search Section -->

        <div id="div1" class="container-fluid container-fullw bg-white">
            <h3 class="text-center">Hajj Contact And Due Statement <!-- <br/><small>From : 01/12/2015 to 31/12/2015</small>  --></h3>

            <div class="row">
        <div class="col-sm-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th> # </th>
                        <th>Haji Name</th>
                        <th> Address </th>
                        <th> Phone </th>
                        <th> Contact Amount </th>
                        <th> Collect Amount </th>
                        <th> Dues Amount </th>
                        <!-- <th> Total </th> -->
                    </tr>
                </thead>
                <tbody>

                <?php $total_contact_amount = 0;
                        $total_due_amount = 0;
                        $total_collect_amount = 0; $serial=1; if(!empty($hajj_contact_and_due_statement)){ foreach($hajj_contact_and_due_statement as $value){ 
                    // $deposit_id = $value->deposit_id;
                    // $deposit_account_name = $this->common_model->getInfo('bank_deposit', array('id' => $deposit_id));

                    // $withdrawal_id = $value->withdrawal_id;
                    // $withdrawal_account_name = $this->common_model->getInfo('bank_withdrawal', array('id' => $withdrawal_id));

                    // $transaction_type= $value->transaction_type;
                    // echo "<pre>";
                    // print_r($value);
                    // exit();

                    $hajj_year = $value->hajj_year;
                    $haji_id = $value->id;
                    $haji_info = $this->haji_info_model->contact_and_due_statement('transactions', array('haji_id' => $haji_id));

                    // echo '<pre>';
                    // print_r($haji_info);
                    // exit();

                    $contact_amount= $value->total_amount;
                    $collect_amount=$haji_info[0]->debit;
                    $total_due_amount = $contact_amount-$collect_amount;
                    // echo '<pre>';
                    // print_r($haji_info);
                    // exit();

                    ?>
                    <tr>
                        <td> <?php echo $serial; ?> </td>
                        <td> <?php if(!empty($value->haji_name))echo $value->haji_name ?> </td>
                        <td> <?php if(!empty($value->haji_address))echo $value->haji_address; //if(!empty($withdrawal_account_name->account_name))echo $withdrawal_account_name->account_name;  ?> </td>
                        <td> <?php if(!empty($value->haji_mobile))echo $value->haji_mobile ?> </td>
                        <td> <?php if(!empty($value->total_amount))echo $value->total_amount ?> </td>
                        <td> <?php if(!empty($haji_info[0]->debit))echo $haji_info[0]->debit ?> </td>
                        <td> <?php echo $total_due_amount; ?> </td>
                        
                        <!-- <td> $1152 </td> -->
                    </tr>

                    <?php 


                        $serial++; 
                        $total_contact_amount += $contact_amount; 
                        $total_due_amount += $total_due_amount; 
                        $total_collect_amount += $collect_amount; 
                        } 
                    }else{ ?>
                        <tr>
                            <td colspan="7" align="center">No Transaction Found</td>
                            
                        </tr>
                   <?php  } ?>

                    <tr>
                        <td colspan="4" style="font-weight: bold">Total Amount</td>
                        
                        <td colspan="1" ><?php echo $total_contact_amount ?></td>
                        <td  style="font-weight: bold"> <?php echo $total_collect_amount; ?> </td>
                        <td  style="font-weight: bold"> <?php echo $total_due_amount; ?> </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


<button class="btn btn-primary hidden-print" onclick="printContent('div1')">Print</button>



            <script>
function printContent(el){
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
