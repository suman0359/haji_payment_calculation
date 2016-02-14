<div class="main-content" >
    <div class="wrap-content container" id="container">
        <!-- start: PAGE TITLE -->
        <section id="page-title" style="padding: 20px 0">
            <div class="row">
                <div class="col-sm-8">
                    <h1 class="mainTitle text-center">Loan User  Information</h1>
                    <!-- <span class="mainDescription">Refers to data arranged in rows and columns. A spreadsheet, for example, is a table. In relational database management systems, all information is stored in the form of tables. <small class="block">Webopedia - Online Tech Dictionary for IT Professionals</small></span> -->
                </div>
                 
                <?php // unshift crumb
                 
                // output_add_rewrite_var(name, value)t
                echo $this->breadcrumbs->show();
                 ?>
                       
                
            </div>
        </section>

        <div class="row">
            
        </div>
        <!-- end: PAGE TITLE -->
        <?php $this->load->view('common/error_show'); ?>
        <!-- start: DYNAMIC TABLE -->
        <div class="container-fluid container-fullw bg-white">
            <div class="row">
            
            <div class="col-md-12 text-center padding_bottom_4">
                <a href="<?php echo base_url(); ?>loan/add_new_user" class="btn btn-success">Add New User</a>
                <a href="<?php echo base_url(); ?>loan/given_and_taken" class="btn btn-success">Given And Taken Info</a>
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
                                <th>Mobile</th>
                                <th>Present Address</th>
                                <th>Loan Status</th>
                                <th>Occupation</th>
                                <th colspan="1">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $serial= 1; foreach ($loan_user_list as $value) { 
                            $balance= $value->net_balance;

                            ?>

                            <tr>
                                <td><?php echo $serial; ?></td>
                                <td><img style="width: 50px; height:40px;" src="<?php echo base_url()."uploads/loan_user_photo/thumbs/".$value->id.".jpg" ?>" alt="<?php echo $value->full_name ?>"></td>
                                <td><?php echo $value->full_name ?></td>
                                <td><?php echo $value->mobile_number; ?></td>
                                <td><?php echo $value->present_address; ?></td>
                                <td><span class="btn btn-xs btn-<?php if($balance<0) echo "success"; if($balance>0) echo "warning"; ?>"><?php if($balance==0) echo "No Transaction"; if($balance<0) echo "Receiveable"; if($balance>0) echo "Payble"; ?></span></td>
                                <td><?php echo $value->ocupation; ?></td>
                                
                                <td colspan="1">
                                    

                                    <!-- Single button -->
                                    <div class="btn-group">
                                      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti-settings tiny-icon"></i>
                                        Action <span class="caret"></span>
                                      </button>
                                      <ul class="dropdown-menu">
                                        <li><a href="<?php echo base_url(); ?>loan/edit_user_form/<?php echo $value->id; ?>"><i class="fa fa-edit tiny-icon"></i>Edit</a>
                                    <a href="<?php echo base_url(); ?>loan/delete_loan_user/<?php echo $value->id; ?>" onclick="return confirm('Do you want to allow him to');"><i class="fa fa-edit tiny-icon"></i>Delete</a></li>
                                    <!-- 
                                        <li></li>
                                        <li><a href="<?php echo base_url(); ?>loan/loan_paid_form/<?php echo $value->id; ?>" onclick="return confirm('Do you want to allow him to');"><i class="fa fa-edit tiny-icon"></i>Loan Paid Installment</a></li>
                                        <li><a href="<?php echo base_url(); ?>loan/loan_receive_form/<?php echo $value->id; ?>"><i class="fa fa-edit tiny-icon"></i>Receive Installment</a> </li>
                                         -->
                                        <li><a href="<?php echo base_url(); ?>loan/give_new_loan_form/<?php echo $value->id; ?>"><i class="fa fa-edit tiny-icon"></i>Give New Loan</a> </li>
                                        <li><a href="<?php echo base_url(); ?>loan/take_new_loan_form/<?php echo $value->id; ?>"><i class="fa fa-edit tiny-icon"></i>Take New Loan</a> </li>

                                        <li><a href="<?php echo base_url(); ?>loan/loan_report/<?php echo $value->id; ?>">Report</a></li>

                                      </ul>
                                    </div>
                                     
                                    

                                    
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