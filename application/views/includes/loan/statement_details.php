<div class="main-content" >
    <div class="wrap-content container" id="container">
        
<div id="" class="container-fluid container-fullw bg-white">
        <div class="row">
            <form action="<?php echo base_url(); ?>loan/party_loan_statement_details" method="POST">
            <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label">
                        Start Date <span class="required"></span>
                    </label>
                    <input type="text" class="form-control datepicker" id="start_date" name="start_date">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label">
                        End Date <span class="required"></span>
                    </label>
                    <input type="text" class="form-control datepicker" id="end_date" name="end_date">
                </div>
            </div>
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
                <thead>
                    <tr>
                        <th> # </th>
                        <th> Profile Pic </th>
                        <th> User Name </th>
                        <th> Payment Date </th>
                        
                        <th> Total Loan Receive Amount</th>
                        <th> Total Loan Paid Amount </th>
                        <th> Total Loan Given Amount </th>
                        <th> Total Loan Return/Taken Amount </th>
                        <th> Payment Status </th>
                        <th> Total Due Amount</th>
                        <th></th>
                        <!-- <th> Total </th> -->
                    </tr>
                </thead>
                <tbody>

                <?php $total = 0; $serial=1; if(!empty($statement_details)){ foreach($statement_details as $value){ 
                    $loan_user_id = $value->loan_user_id;
                    $loan_user_info = $this->common_model->getInfo('loan_information', array('id' => $loan_user_id));

                    ?>
                    <tr>
                        <td> <?php echo $serial; ?> </td>
                        <td><img src="<?php echo base_url()."uploads/loan_user_photo/thumbs/".$loan_user_info->id.".jpg"; ?>" style="width: 70px;"></td>
                        <td> <?php if(!empty($loan_user_info->full_name))echo $loan_user_info->full_name  ?> </td>
                        <td> <?php if(!empty($value->date))echo $value->date ?> </td>
                        <td> <?php if(!empty($value->debit))echo $value->debit ?> </td>
                        <td> <?php if(!empty($value->credit))echo $value->credit ?> </td>
                        <td> <?php if(!empty($value->money_receipt_number))echo $value->amount ?> </td>
                        <!-- <td> $1152 </td> -->
                    </tr>

                    <?php 
                        $serial++; 
                        //$total += $value->amount; 
                        } }else{ ?>
                        <tr>
                            <td colspan="11" align="center">No Transaction Found</td>
                        </tr>
                   <?php  } ?>

                    <tr>
                        <td colspan="7"></td>
                        <td colspan="2" style="font-weight: bold">Total Collection Amount</td>
                        
                        <td style="font-weight: bold"> <?php // echo $total; ?> </td>
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
