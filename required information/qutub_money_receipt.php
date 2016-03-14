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
                AL-QUTUB HAJJ TRAVELS  <br/>
                <strong>Money Receipt</strong><br>
                <small>Ga-3/1, Shajadpur Eidgah Masjid Complex Gulshan, </small> <br>
                <small>Dhaka-1212, Bangladesh</small> <br>
                <small>Telephone & Fax : 0088-02-8899795</small><br>
                <small>Mobile: +880-1738246402, +880 01673637138</small><br>
                <small>Web: www.esunnah.org</small>
                <small>Email : humqutub@gmail.com</small>

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

            <!-- <div class="row money-receipt-form">

                <div class="col-md-12">
                    <label for="Customer name"> Received with thanks from : </label> 
                    <label for="">Tasfir Hossain Suman</label>
                </div>

                <div class="col-md-12">
                    <label for="Customer name"> Against: </label> 
                    <label for="">For Hajj </label>
                </div>

                <div class="col-md-12">
                    <label for="Customer name"> A Sum of Taka : </label> 
                    <label for="">Four Thousand Five Hundred Only </label>
                </div>

                <div class="col-md-12">
                    <label for="Customer name"> A Sum of Taka : </label> 
                    <label for="">Four Thousand Five Hundred Only </label>
                </div>

                <div class="col-md-12">
                    <label for="Customer name"> Payment Mode : </label> 
                    <label for="">Cash </label>
                </div>

                <div class="col-md-12">
                    <label for="Customer name"> Bank Name : </label> 
                    <label for="">Dutch Bangla Bank LTD </label>
                </div>

                <div class="col-md-12">
                    <label for="Customer name">Branch : </label> 
                    <label for="">Branch Malibag Branch</label>
                </div>


            </div>
 -->
           
 
            <div class="row">
                <div class="col-sm-12">
                    <table class="table table-striped">
                        <!-- <thead>
                            <tr>
                                <th> Received with thanks from</th>
                                <th> Against </th>
                                <th class="hidden-480"> Description </th>
                                <th class="hidden-480"> Quantity </th>
                                <th class="hidden-480"> Unit Cost </th>
                                <th> Total </th>
                            </tr>
                        </thead> -->
                        <tbody>
                            <tr>
                                <td> Received with thanks from :</td>
                                <td> <?php if(!empty($money_receipt->haji_id)) 
                                $haji_id = $money_receipt->haji_id;
                                $haji_name = $this->common_model->getInfo('haji_information', array('id' => $haji_id));

                                echo $haji_name->haji_name; ?> </td>
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
<!-- 
            <div class="row">
                <div class="col-sm-12">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th> Item </th>
                                <th class="hidden-480"> Description </th>
                                <th class="hidden-480"> Quantity </th>
                                <th class="hidden-480"> Unit Cost </th>
                                <th> Total </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> 1 </td>
                                <td> Lorem </td>
                                <td class="hidden-480"> Drem psum dolor </td>
                                <td class="hidden-480"> 12 </td>
                                <td class="hidden-480"> $35 </td>
                                <td> $1152 </td>
                            </tr>
                            <tr>
                                <td> 2 </td>
                                <td> Ipsum </td>
                                <td class="hidden-480"> Consectetuer adipiscing elit </td>
                                <td class="hidden-480"> 21 </td>
                                <td class="hidden-480"> $469 </td>
                                <td> $6159 </td>
                            </tr>
                            <tr>
                                <td> 3 </td>
                                <td> Dolor </td>
                                <td class="hidden-480"> Olor sit amet adipiscing eli </td>
                                <td class="hidden-480"> 24 </td>
                                <td class="hidden-480"> $144 </td>
                                <td> $8270 </td>
                            </tr>
                            <tr>
                                <td> 4 </td>
                                <td> Sit </td>
                                <td class="hidden-480"> Laoreet dolore magna </td>
                                <td class="hidden-480"> 194 </td>
                                <td class="hidden-480"> $317 </td>
                                <td> $966 </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div> -->


            <button class="btn btn-primary hidden-print pull-right" onclick="printContent('div1')">Print</button>


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