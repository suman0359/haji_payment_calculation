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
            
            <div class="col-md-12 text-center">
            <a href="<?php echo base_url(); ?>loan/add_new_user" class="btn btn-success">Add New User</a>
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
                                <th>National Id Number</th>
                                <th>Occupation</th>
                                <th colspan="3">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $serial= 1; foreach ($loan_user_list as $value) { ?>

                            <tr>
                                <td><?php echo $serial; ?></td>
                                <td><img style="width: 50px; height:40px;" src="<?php echo base_url()."uploads/loan_user_photo/".$value->id.".jpg" ?>" alt="<?php echo $value->full_name ?>"></td>
                                <td><?php echo $value->full_name ?></td>
                                <td><?php echo $value->mobile_number; ?></td>
                                <td><?php echo $value->present_address; ?></td>
                                <td><?php echo $value->national_id_number; ?></td>
                                <td><?php echo $value->ocupation; ?></td>
                                
                                <td colspan="3">
                                    <a href="<?php echo base_url(); ?>loan/edit_user_form/<?php echo $value->id; ?>" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="<?php echo base_url(); ?>loan/delete_loan_user/<?php echo $value->id; ?>" class="btn btn-primary btn-sm" onclick="return confirm('Do you want to allow him to');">Delete</a>
                                     
                                    <a href="<?php echo base_url(); ?>loan/loan_paid_form/<?php echo $value->id; ?>" class="btn btn-primary btn-sm" onclick="return confirm('Do you want to allow him to');">Loan Paid</a>

                                    <a href="<?php echo base_url(); ?>loan/loan_receive_form/<?php echo $value->id; ?>" class="btn btn-primary btn-sm">Receive</a> 
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