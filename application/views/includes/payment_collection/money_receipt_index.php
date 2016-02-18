

<div class="main-content" >
    <div class="wrap-content container" id="container">
        <!-- start: PAGE TITLE -->
        <section id="page-title" style="padding: 20px 0">
            <div class="row">
                <div class="col-sm-8">
                    <h1 class="mainTitle text-center">Money Receipt Information</h1>
                    
                </div>
                <?php $this->load->view('common/breadcrumb'); ?>
            </div>
        </section>
        <!-- end: PAGE TITLE -->
        <?php $this->load->view('common/error_show'); ?>
        <!-- start: DYNAMIC TABLE -->
        <div class="container-fluid container-fullw bg-white">
            <div class="row">
                <div class="col-md-12">
                   
                    <table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
                        <thead>
                            <tr>
                                <th>MRR No</th>
                                <th>Haji Name</th>
                                <th>Passport Number</th>
                                <th>Payment Type</th>
                                <th>Bank Name</th>
                                <th>Payment Head</th>
                                <th>Amount</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(!empty($money_receipt_list)){ foreach ($money_receipt_list as $value) { 
                                $haji_id = $value->haji_id;
                                
                                $passport_number = $this->common_model->getInfo('haji_information', array('id' => $haji_id));
                                ?>
                            <tr>
                                <td><?php if(!empty($value->money_receipt_number)) echo $value->money_receipt_number; ?></td>
                                <td><?php if(!empty($passport_number->haji_name))echo $passport_number->haji_name; ?></td>
                                <td><?php if(!empty($passport_number->haji_passport))echo $passport_number->haji_passport; ?></td>
                                <td><?php 
                                $payment_mode = $value->payment_mode;
                                if($payment_mode==1){echo "Cash";}elseif ($payment_mode==2) {
                                    echo "Bank/Check";
                                }elseif ($payment_mode==3) {
                                    echo "bKash";
                                }else{
                                    echo "Payment Mode Does't Selected";
                                    }  ?></td>
                                <td><?php if(!empty($value->bank_name))echo $value->bank_name; ?></td>
                                <td><?php 

                                 $payment_head=$value->payment_head; 
                                 $payment_head_name = $this->common_model->getInfo('income_head', array('id' => $payment_head));
                                 if(!empty($payment_head_name))echo $payment_head_name->income_head_name;
                                 ?></td>
                                <td><?php echo $value->amount; ?></td>
                                <td>
                                    <a href="<?php echo base_url(); ?>payment_collection/money_receipt/<?php echo $value->id; ?>" class="btn btn-primary">View Receipt</a>
                                    
                                </td>
                            </tr>

                            <?php } } ?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- end: DYNAMIC TABLE -->

        
    </div>
<!-- </div>
 -->
