<div class="main-content" >
    <div class="wrap-content container" id="container">
        <!-- start: PAGE TITLE -->
        <section id="page-title" style="padding: 20px 0">
            <div class="row">
                <div class="col-sm-8">
                    <h1 class="mainTitle text-center">Loan Installment Details Information</h1>
                    
                </div>
                <ol class="breadcrumb">
                    <li>
                        <span>Tables</span>
                    </li>
                    <li class="active">
                        <span>Data Tables</span>
                    </li>
                </ol>
            </div>
        </section>

        <div class="row">
            
        </div>
        <!-- end: PAGE TITLE -->
        <?php $this->load->view('common/error_show'); ?>
        <!-- start: DYNAMIC TABLE -->
        <div class="container-fluid container-fullw bg-white">
            <div class="row">
            
            <div class="col-md-12 text-center">
                <a href="<?php echo base_url(); ?>loan/user_list" class="btn btn-success">Loan User Information</a>

                <a href="<?php echo base_url(); ?>loan/given_and_taken" class="btn btn-success">Given And Taken Info</a>
            </div>

                <div class="col-md-12">
                    
                    <table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Comments</th>
                                <th>Loan Status</th>
                                <th>Entry Date</th>
                                <th>Entry By</th>
                                <th>Amount</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $serial= 1; foreach ($installment_detials as $value) { 
                               $user_name = $value->loan_user_id;
                               

                               $user_name = $this->common_model->getInfo('loan_information', array('id' => $user_name));


                               $entry_person = $value->entry_by; 

                               $entry_by = $this->common_model->getInfo('users', array('user_id' => $entry_person));
                               
                            ?>

                            <tr>
                                <td><?php echo $serial; ?></td>
                                <td><img style="width: 50px; height:40px;" src="<?php echo base_url()."uploads/loan_user_photo/".$user_name->id.".jpg" ?>" alt="<?php echo $user_name->full_name ?>"></td>
                                <td><?php echo $user_name->full_name ?></td>
                                <td><?php echo $value->comments; ?></td>
                                <td><span class="btn btn-xs btn-<?php if($value->installment_status==1) echo "success"; if($value->installment_status==2) echo "warning"; ?>"><?php if($value->installment_status==1) echo "Received"; if($value->installment_status==2) echo "Paid"; ?></span></td>
                                <td><?php echo $value->date; ?></td>
                                <td><?php echo $entry_by->username; ?></td>
                                <td><?php echo $value->receive_amount; echo $value->paid_amount; ?></td>
                                
                                <td>
                                   <?php if($value->receive_amount!=NULL) { ?>
                                        <a class="btn btn-xs btn-warning" href="<?php echo base_url(); ?>loan/loan_installment_collect_form/<?php echo $value->id; ?>"><i class="fa fa-edit tiny-icon"></i>Collect Installment</a>
                                  <?php   }
                                    if($value->paid_amount!=NULL) { ?>
                                        <a class="btn btn-xs btn-success" href="<?php echo base_url(); ?>loan/loan_installment_paid_form/<?php echo $value->id; ?>"><i class="fa fa-edit tiny-icon"></i>Paid Installment</a>
                                 <?php   }     ?> 
                                  

                                </td>
                            </tr>

                            <?php $serial++; } ?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- end: DYNAMIC TABLE -->
        
    </div>
<!-- </div> -->