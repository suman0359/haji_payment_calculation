<div class="main-content" >
    <div class="wrap-content container" id="container">
        
<div id="" class="container-fluid container-fullw bg-white">
        <div class="row">
            <form action="<?php echo base_url(); ?>bank/hajj_contact_and_due_statement" method="POST">
            <div class="col-md-6">
                <div class="input-group input-daterange datepicker">
                    <!-- <label for="Start Date">Start Date</label> -->
                    <input type="text" placeholder="Start Date" class="form-control" id="start_date" name="start_date">
                    <span class="input-group-addon bg-primary">to</span>
                    <!-- <label for="Start Date">Start Date</label> -->
                    <input type="text" placeholder="End Date" class="form-control" id="end_date" name="end_date">
                </div>
            </div>
            <div class="col-md-4">
                <button class="btn btn-primary btn-wide" type="submit">
                    Search <i class="fa fa-arrow-circle-right"></i>
                </button>
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
                        <th> Contact Amount </th>
                        <th> Dues Amount </th>
                        <th> Phone </th>
                        <th> Amount </th>
                        <!-- <th> Total </th> -->
                    </tr>
                </thead>
                <tbody>

                <?php $total = 0; $serial=1; if(!empty($hajj_contact_and_due_statement)){ foreach($hajj_contact_and_due_statement as $value){ 
                    $deposit_id = $value->deposit_id;
                    $deposit_account_name = $this->common_model->getInfo('bank_deposit', array('id' => $deposit_id));

                    $withdrawal_id = $value->withdrawal_id;
                    $withdrawal_account_name = $this->common_model->getInfo('bank_withdrawal', array('id' => $withdrawal_id));

                    $transaction_type= $value->transaction_type;

                    ?>
                    <tr>
                        <td> <?php echo $serial; ?> </td>
                        <td> <?php if(!empty($value->date))echo $value->date ?> </td>
                        <td> <?php if(!empty($deposit_account_name->account_name))echo $deposit_account_name->account_name; if(!empty($withdrawal_account_name->account_name))echo $withdrawal_account_name->account_name;  ?> </td>
                        <td> <?php if(!empty($value->debit))echo $value->debit ?> </td>
                        <td> <?php if(!empty($value->credit))echo $value->credit ?> </td>
                        <td> <?php if($transaction_type==1)echo "Cash"; if($transaction_type==2)echo "Bank"; if($transaction_type==3)echo "ATM Booth"; ?> </td>
                        <td> <?php if(!empty($value->balance))echo $value->balance ?> </td>
                        <!-- <td> $1152 </td> -->
                    </tr>

                    <?php $serial++; $total += $value->balance; } }else{ ?>
                        <tr>
                            <td colspan="7" align="center">No Transaction Found</td>
                            
                        </tr>
                   <?php  } ?>

                    <tr>
                        <td colspan="3" style="font-weight: bold">Total Amount</td>
                        <td>Deposit</td>
                        <td colspan="2" >Withdraw</td>
                        <td  style="font-weight: bold"> <?php echo $total; ?> </td>
                        <!-- <td>  </td> -->
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
