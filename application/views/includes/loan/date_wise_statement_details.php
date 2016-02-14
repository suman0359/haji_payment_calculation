<div class="main-content" >
    <div class="wrap-content container" id="container">
        
<div id="" class="container-fluid container-fullw bg-white">
        <div class="row">
            <form action="<?php echo base_url(); ?>loan/party_loan_statement_details" method="POST">
            <div class="col-md-6">
                <div class="input-group input-daterange datepicker">
                    <!-- <label for="Start Date">Start Date</label> -->
                    <input type="text" placeholder="Start Date" class="form-control" id="start_date" name="start_date">
                    <span class="input-group-addon bg-primary">to</span>
                    <!-- <label for="Start Date">Start Date</label> -->
                    <input type="text" placeholder="End Date" class="form-control" id="end_date" name="end_date">
                </div>
            </div>
            <!-- <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label">
                        Start Date <span class="required"></span>
                    </label>
                    <input type="text" autocomplete="off" class="form-control datepicker" id="start_date" name="start_date">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label">
                        End Date <span class="required"></span>
                    </label>
                    <input type="text" autocomplete="off" class="form-control datepicker" id="end_date" name="end_date">
                </div>
            </div> -->

            <div class="col-md-4">
                <button class="btn btn-primary btn-wide pull-right" type="submit">
                    Search <i class="fa fa-arrow-circle-right"></i>
                </button>
            </div>

            </form>
        </div>
        </div>

        <!-- End Search Section -->

        <div id="div1" class="container-fluid container-fullw bg-white">
            <h3 class="text-center">Summery Report of Loan Module <!-- <br/><small>From : 01/12/2015 to 31/12/2015</small>  --></h3>

            <div class="row">
        <div class="col-sm-12">
            <table class="table table-striped">
            <?php //echo '<pre>'; print_r($statement_details); ?>
                <thead>
                    <tr>
                        <th> # </th>
                        <th> Profile Pic </th>
                        <th> User Name </th>
                        <th> Date </th>
                        
                        <th> Taken or Given </th>
                        <th> Loan Amount </th>
                        <th> Paid or Receive </th>
                      
                        <th> Due Amount</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php  
                    $serial=1;
                    foreach ($statement_details as $value) { 
                        $loan_user_id = $value->loan_user_id;
                        $loan_user_info = $this->common_model->getInfo('loan_information', array('id' => $loan_user_id));
                        $loan_status = $value->loan_type;
                        $against_id= $value->id;

                     ?>
                    <tr>
                        <td> <?php echo $serial; ?> </td>
                        <td><img src="<?php echo base_url()."uploads/loan_user_photo/thumbs/".$loan_user_info->id.".jpg"; ?>" style="width: 50px; height: 50px;" ></td>
                        <td> <?php echo $loan_user_info->full_name; ?> </td>
                        <td> <?php echo $value->date; ?></td>
                        <td><?php if($loan_status==2) echo "<span class="."\"btn btn-xs btn-success\""."".">Given</span>"; if($loan_status==1) echo "<span class="."\"btn btn-xs btn-warning\""."".">Taken</span>"; ?></td>
                        <td><?php $given_amount=$value->given_amount; echo $given_amount; 
                            $taken_amount= $value->taken_amount; echo $taken_amount; ?></td>
                        <td><?php 
                        if($loan_status==1){ 
                            $installment=$this->loan_model->given_installment_summation('loan_history_of_installment', array('against_given_taken_history' => $against_id)); 
                            $receive_amount= $installment[0]->receive_amount; 
                            echo $receive_amount;} 

                        if($loan_status==2){ 
                            $installment=$this->loan_model->taken_installment_summation('loan_history_of_installment', array('against_given_taken_history' => $against_id));  

                            $paid_amount = $installment[0]->paid_amount; 
                            echo $paid_amount;}   
                        ?></td>
                        <td><?php 
                        $given_due=$given_amount-$receive_amount; 
                        $taken_due=$taken_amount-@$paid_amount; 
                        if($loan_status==1){echo $given_due;} 
                        if($loan_status==2){echo $taken_due;} ?></td>
                    </tr>
                    <?php $serial++; } ?>
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

<!-- 
<h1>My page</h1>
<div id="div1">DIV 1 content...</div>
<button onclick="printContent('div1')">Print Content</button>
<div id="div2">DIV 2 content...</div>
<button onclick="printContent('div2')">Print Content</button>
<p id="p1">Paragraph 1 content...</p>
<button onclick="printContent('p1')">Print Content</button>
 -->


        </div>

    </div>
<!-- </div> -->
