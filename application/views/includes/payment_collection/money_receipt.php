<div class="main-content" >
    <div class="wrap-content container" id="container">
        <!-- start: PAGE TITLE -->
        <section id="page-title">
            <div class="row">
                <div class="col-sm-8">
                    <h1 class="mainTitle">Money Receipt</h1>
                    
                </div>
                <?php $this->load->view('common/breadcrumb'); ?>
            </div>
        </section>
        <!-- end: PAGE TITLE -->
        <?php $this->load->view('common/error_show'); ?>
        <!-- start: FORM VALIDATION EXAMPLE 1 -->

 

        <div id="div1" class="container-fluid container-fullw money-receipt bg-white">
            <h3 class="text-center">
               <!--  <span class="logo">
                    <img style="width: 150px" src="http://localhost/haji_payment_calculation/assets/images/logo.png" alt="Micron Techno BD">
                </span> -->
                CENTURY AVIATION <br/>
                <strong>Money Receipt</strong><br>
                <small>Tropicana Tower (10th Floor) </small> <br>
                <small>45, Topkahana Road, Purana Paltan, Dhaka-1000.</small> <br>
                <small>Phone: +88-02-9573888</small><br>
                <small>Mobile: +880-1755505580; +966-504933129(Saudi Arabia)</small><br>
                <!-- <small>Web: www.esunnah.org</small> -->
                <small>Email : centuryaviation@yahoo.com</small>

                <hr>

                

            </h3>
            <div class="row mr_sub_header">
                <div class="col-md-4">
                    <label for="Refference" class="pull-left">Money Receipt No: <?php if(!empty($money_receipt->money_receipt_number))echo $money_receipt->money_receipt_number; ?></label>
                </div>
                <div class="col-md-4">
                    
                </div>
                <div class="col-md-4">
                    <label for="date" class="pull-right">Date : <?php echo date("d/m/Y") ?></label> 
                </div>
            </div>

            <hr>

 
            <div class="row">
                <div class="col-sm-12">
                    <table class="table table-striped">
                        
                        <tbody>
                            <tr>
                                <td> Received with thanks from :</td>
                                <td> <?php if(!empty($money_receipt->haji_id)) 
                                @$haji_id = @$money_receipt->haji_id;
                                @$haji_name = @$this->common_model->getInfo('haji_information', array('id' => $haji_id));
                                
                                @$commission_agent_id = @$money_receipt->commission_agent_id;
                                @$group_leader_name = @$this->common_model->getInfo('commission_agent', array('id' => $commission_agent_id));
                                
                                
                                echo @$group_leader_name->commision_agent_name;
                                
                                echo @$haji_name->haji_name; ?> </td>
                            </tr>
                            <tr>
                                <td> Against :</td>
                                <td> <?php if(!empty($money_receipt->payment_head))
                                $income_head_id= $money_receipt->payment_head; 
                                if(!empty($income_head_id)){
                                $income_head_name = $this->common_model->getInfo('income_head', array('id' => $income_head_id));
                                $income_head_name =$income_head_name->income_head_name;
                                }
                                if(!empty($income_head_name))echo $income_head_name;
                                ?> </td>
                            </tr>
                            <tr>
                                <td> Amount :</td>
                                <td> <?php if(!empty($money_receipt->amount))echo $money_receipt->amount; ?> </td>
                            </tr>
                            <tr>
                                <td> A Sum of Taka in Word:</td>
                                <td> <?php if(!empty($money_receipt->amount))echo $this->numbertowords->convert_number($money_receipt->amount); ?> </td>
                            </tr>
                            <tr>
                                <td> Payment Mode :</td>
                                <td> <?php if(!empty($money_receipt->payment_mode)){
                                    $payment_mode_id = $money_receipt->payment_mode; 
                                    if($payment_mode_id==1){
                                        echo "Cash";
                                    }elseif ($payment_mode_id==2) {
                                        echo "Bank";
                                    }elseif ($payment_mode_id==3) {
                                        echo "bKash";
                                    }else{
                                        echo "Doesn\'t Select Payment Mode" ;
                                    }
                                }
                                ?> </td>
                            </tr>
                            <tr>
                                <td> Bank Name :</td>
                                <td> <?php if(!empty($money_receipt->bank_name))echo $money_receipt->bank_name; ?> </td>
                            </tr>
                            <tr>
                                <td> Branch :</td>
                                <td> <?php if(!empty($money_receipt->branch_name))echo $money_receipt->branch_name; ?> </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>

           <div class="row mr_sub_header" style="margin-top: 50px;">
                <div class="col-md-4">
                    <label for="Refference" class="pull-left">
                       
                    </label>
                </div>
                <div class="col-md-4">
                    
                </div>
                <div class="col-md-4">
                    <label for="date" class="pull-right">Authorized Signature:...........................</label> 
                </div>
            </div>
            <button class="btn btn-primary hidden-print pull-right" onclick="printContent('div1')">Print</button>


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