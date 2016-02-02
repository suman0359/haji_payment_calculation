<div class="main-content" >
    <div class="wrap-content container" id="container">
        <!-- start: PAGE TITLE -->
        <!-- <section id="page-title">
            <div class="row">
                <div class="col-sm-8">
                    <h1 class="mainTitle">Form Validation</h1>
                    <span class="mainDescription">Client side validation it’s very important if it is used as help for the user to complete with success the submission of a form.</span>
                </div>
                <ol class="breadcrumb">
                    <li>
                        <span>Forms</span>
                    </li>
                    <li class="active">
                        <span>Form Validation</span>
                    </li>
                </ol>
            </div>
        </section> -->
        <!-- end: PAGE TITLE -->
        <!-- start: FORM VALIDATION EXAMPLE 1 -->
        <?php $this->load->view('common/error_show'); ?>
        <!-- start Search Section -->
<div id="" class="container-fluid container-fullw bg-white">
        <div class="row">
            <form action="<?php echo base_url(); ?>payment_collection/summery_report" method="POST">
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
            <!-- <div class="input-group input-daterange datepicker">
                <input type="text" class="form-control">
                <span class="input-group-addon bg-primary">to</span>
                <input type="text" class="form-control">
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
            <h3 class="text-center">Summery Report <!-- <br/><small>From : 01/12/2015 to 31/12/2015</small>  --></h3>

            <div class="row">
        <div class="col-sm-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th> # </th>
                        <th>Income Date</th>
                        <th> Haji Name </th>
                        <th> Income Amount </th>
                        <th> Expense Entry Date </th>
                        <th> Expense Name </th>
                        
                        <th> Expense </th>
                        
                    </tr>
                </thead>
                <tbody>

                <?php 
                    // echo '<pre>';
                    // print_r($summery_report); 
                    // exit(); 
                ?>

                <?php $total = 0; $serial=1; if(!empty($summery_report)){ foreach($summery_report as $value){ 
                    
                    $haji_id    = $value->haji_id;
                    $expense_id = $value->expense_id;
                    $income_id = $value->money_receipt_id;
                    // echo '<pre>';
                    // print_r($value); 
                    // exit(); 
                    
                    $expense_name = $this->common_model->getInfo('expense_entry', array('id' => $expense_id));
                    $haji_name = $this->common_model->getInfo('haji_information', array('id' => $haji_id));
                    // echo '<pre>';
                    // print_r($haji_name->haji_name); 
                    // exit(); 
                    ?>
                    <tr>
                        <td> <?php echo $serial; ?> </td>
                        <td> <?php if(!empty($value->date))echo $value->date ?> </td>
                        <td> <?php if(!empty($haji_name->haji_name))echo $haji_name->haji_name; ?> </td>
                        <td> <?php if(!empty($value->debit))echo $value->debit; ?> </td>

                        <td> <?php if(!empty($value->date))echo $value->date ?> </td>
                        <td> <?php if(!empty($expense_name->expense_name))echo $expense_name->expense_name; ?> </td>
                        
                        
                        <!-- <td> <?php //echo $value->payment_date ?> </td> -->
                        
                        <td> <?php if(!empty($value->credit))echo $value->credit; ?> </td>
                        <!-- <td> $1152 </td> -->
                    </tr>

                    <?php 
                    $serial++; 
                    @$total_income += $value->debit; 
                    @$total_expense += $value->credit; 
                    
                    } }else{ ?>
                        <tr>
                            <td></td>
                            <td colspan="3" align="center">No Transaction Found</td>
                            <td colspan="3" align="center">No Transaction Found</td>
                        </tr>
                   <?php  } ?>

                    <tr>
                        <td colspan="3" style="font-weight: bold">Total Collection Amount</td>
                        <td style="font-weight: bold"> <?php if(!empty($total_income)) echo $total_income; ?> </td>
                        <td colspan="2"></td>
                        
                        <td style="font-weight: bold"> <?php if(!empty($total_expense))echo $total_expense; ?> </td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>


<button class="btn btn-primary hidden-print" onclick="printContent('div1')">Print</button>


<!-- 
            <div class="row">
                <div class="col-sm-12 invoice-block">
                    <ul class="list-unstyled amounts text-small">
                        <li>
                            <strong>Sub-Total:</strong> $12,876
                        </li>
                        <li>
                            <strong>Discount:</strong> 9.9%
                        </li>
                        <li>
                            <strong>VAT:</strong> 22%
                        </li>
                        <li class="text-extra-large text-dark margin-top-15">
                            <strong >Total:</strong> $11,400
                        </li>
                    </ul>
                    <br>
                    <a onclick="javascript:window.print();" class="btn btn-lg btn-primary hidden-print">
                        Print <i class="fa fa-print"></i>
                    </a>
                    <a class="btn btn-lg btn-primary btn-o hidden-print">
                        Submit Your Invoice <i class="fa fa-check"></i>
                    </a>
                </div>
            </div>
 -->


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
<!-- </div>
 -->