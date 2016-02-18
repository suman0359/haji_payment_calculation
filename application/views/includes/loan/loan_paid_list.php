<div class="main-content" >
    <div class="wrap-content container" id="container">
        <!-- start: PAGE TITLE -->
        <section id="page-title" style="padding: 20px 0">
            <div class="row">
                <div class="col-sm-8">
                    <h1 class="mainTitle text-center">Loan Paid Information</h1>
                </div>
                <?php $this->load->view('common/breadcrumb'); ?>
            </div>
        </section>

        <div class="row">
            
        </div>
        <!-- end: PAGE TITLE -->
        <?php $this->load->view('common/error_show'); ?>
        <!-- start: DYNAMIC TABLE -->
        <div class="container-fluid container-fullw bg-white">
            <div class="row">
            
            <!-- <div class="col-md-12 text-center">
            <a href="<?php echo base_url(); ?>loan/add_new_user" class="btn btn-success">Add New User</a>
            </div> -->

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
                                <th>Entry Date</th>
                                <th>Entry By</th>
                                <th>Amount</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $serial= 1; foreach ($loan_info_list as $value) { 
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
                                <td><?php echo $value->entry_date; ?></td>
                                <td><?php echo $entry_by->username; ?></td>
                                <td><?php echo $value->net_balance; ?></td>
                                
                                <td>
                                    <a href="<?php echo base_url(); ?>loan/edit_user_form/<?php echo $value->id; ?>" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="<?php echo base_url(); ?>loan/delete_loan_user/<?php echo $value->id; ?>" class="btn btn-primary btn-sm" onclick="return confirm('Do you want to allow him to');">Delete</a>
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