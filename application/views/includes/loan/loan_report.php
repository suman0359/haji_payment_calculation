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
        <?php $this->load->view('common/error_show'); ?>
        <!-- start: FORM VALIDATION EXAMPLE 1 -->
        <div id="div1" class="container-fluid container-fullw bg-white">
            <h3 class="text-center">Loan Report </h3>

            <div class="row">
        <div class="col-sm-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th> # </th>
                        <th>Photo</th>
                        <th> Loan User Name </th>
                        <th> Phone No </th>
                        <th> Payment Date </th>
                        <th> Loan Receive </th>
                        <th> Loan Paid </th>
                        <!-- <th> Balance </th> -->
                        <!-- <th> Total </th> -->
                    </tr>
                </thead>
                <tbody>

                <?php 
                //echo '<pre>'; print_r($loan_payment_list); exit(); 
                $total = 0; $serial=1; if(!empty($loan_payment_list)){ foreach($loan_payment_list as $value){ 
                    $loan_user_id = $value->loan_user_id;
                    $loan_user_name = $this->common_model->getInfo('loan_information', array('id' => $loan_user_id));

                    ?>
                    <tr>
                        <td> <?php echo $serial; ?> </td>
                        <td><img style="width: 70px; height:70px; " src="<?php echo base_url(); ?>uploads/loan_user_photo/thumbs/<?php echo $loan_user_id.".jpg" ?>" alt=""></td>
                        <td> <?php echo $loan_user_name->full_name ?> </td>
                        <td> <?php echo $loan_user_name->mobile_number ?> </td>
                        <td> <?php echo $value->date ?> </td>
                        
                        <td> <?php echo $value->debit ?> </td>
                        <td> <?php echo $value->credit ?> </td>
                        <!-- <td> <?php echo $value->balance ?> </td> -->
                        <!-- <td> $1152 </td> -->
                    </tr>

                    <?php 
                    $serial++; 
                    $total += $value->balance; 
                    @$total_paid_amount +=$value->debit;
                    @$total_received_amount +=$value->credit;

                    } }else{ ?>

                        <hr>
                        <tr>
                            <td colspan="7" align="center">No Transaction Found</td>
                        </tr>
                   <?php  } ?>

                    <!-- <tr>
                        <td colspan="1"></td>
                        <td style="font-weight: bold">Total Receive Taka</td>
                        <td style="font-weight: bold; color: #5cb85c !important;"> <?php echo $total; ?> </td>
                        <!-- <td>  </td> -->
                    </tr> 

                    <tr>
                        <td colspan="4"></td>
                        <td colspan="2" style="font-weight: bold"> Received Amount : </td>
                        
                        <td style="font-weight: bold"><?php echo @$total_paid_amount; ?></td>
                    </tr>
                    <tr>
                        <td colspan="4"></td>
                        <td colspan="2" style="font-weight: bold"> Paid Amount : </td>
                        
                        <td style="font-weight: bold"><?php echo @$total_received_amount; ?></td>
                    </tr>

                    <tr>
                        <td colspan="4"></td>
                        <td colspan="2" style="font-weight: bold"><?php 
                        $balance = @$total_received_amount-@$total_paid_amount;
                        if($balance<0)echo "Total Payable Amount"; if($balance>0) echo "Total Receivable Amount";
                         ?></td>
                        <td style="font-weight: bold; color: red !important;"><?php 
                        //$contact_ammount=  $contact_ammount->total_amount; 
                        echo $balance;

                        //echo $due_amount = $contact_ammount-$total_received_amount;

                        ?></td>
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
<!-- </div>
 -->