<div class="main-content" >
    <div class="wrap-content container" id="container">
        <!-- start: PAGE TITLE -->
        <section id="page-title" style="padding: 20px 0">
            <div class="row">
                <div class="col-sm-8">
                    <h1 class="mainTitle text-center">Loan Recieve Information</h1>
                    <!-- <span class="mainDescription">Refers to data arranged in rows and columns. A spreadsheet, for example, is a table. In relational database management systems, all information is stored in the form of tables. <small class="block">Webopedia - Online Tech Dictionary for IT Professionals</small></span> -->
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
                <a href="<?php echo base_url(); ?>loan/installment_detials" class="btn btn-success">Loan Installment Details Information</a>
            </div>

                <div class="col-md-12">
                    <!-- <h5 class="over-title margin-bottom-15">Basic <span class="text-bold">Data Table</span></h5>
                    <p>
                        DataTables is a plug-in for the jQuery Javascript library. It is a highly flexible tool, based upon the foundations of progressive enhancement, and will add advanced interaction controls to any HTML table.
                    </p> -->
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
                            <?php $serial= 1; foreach ($given_taken_list as $value) { 
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
                                <td><span class="btn btn-xs btn-<?php if($value->given_amount!=NULL) echo "success"; if($value->taken_amount!=NULL) echo "warning"; ?>"><?php if($value->given_amount!=NULL) echo "Given Loan"; if($value->taken_amount!=NULL) echo "Taken Loan"; ?></span></td>
                                <td><?php echo $value->date; ?></td>
                                <td><?php echo $entry_by->username; ?></td>
                                <td><?php echo $value->given_amount; echo $value->taken_amount; ?></td>
                                
                                <td>
                                   <?php if($value->given_amount!=NULL) { ?>
                                        <a class="btn btn-xs btn-warning" href="<?php echo base_url(); ?>loan/loan_installment_collect_form/<?php echo $value->id; ?>"><i class="fa fa-edit tiny-icon"></i>Collect Installment</a>
                                  <?php   }
                                    if($value->taken_amount!=NULL) { ?>
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