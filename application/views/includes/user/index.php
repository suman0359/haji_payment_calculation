<div class="main-content" >
    <div class="wrap-content container" id="container">
        <!-- start: PAGE TITLE -->
        <section id="page-title" style="padding: 20px 0">
            <div class="row">
                <div class="col-sm-8">
                    <h1 class="mainTitle text-center">Administration User Information</h1>
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
            <a href="<?php echo base_url(); ?>user/new_user" class="btn btn-success">Add New Information</a>
            </div>

                <div class="col-md-12">
                    <!-- <h5 class="over-title margin-bottom-15">Basic <span class="text-bold">Data Table</span></h5>
                    <p>
                        DataTables is a plug-in for the jQuery Javascript library. It is a highly flexible tool, based upon the foundations of progressive enhancement, and will add advanced interaction controls to any HTML table.
                    </p> -->
                    <table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
                        <thead>
                            <tr>
                                <th>User Id</th>
                                <th>Profile</th>
                                <th>User Name</th>
                                <th>Full Name</th>
                                <th>Phone No</th>
                                <th>User Type</th>
                                
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php  
                            $this->load->model('common_model'); 
                            foreach ($users as $value) { 
                            // ut = user type
                            $ut = $value->user_type;
                            ?>

                            <tr>
                                <td><?php echo $value->user_id ?></td>
                                <td><img src="<?php echo base_url(); ?><?php if(!empty($value->profile_picture)) echo "uploads/profile_picture/thumbs/".$value->profile_picture; ?>" width="70px;" /></td>
                                <td><?php echo $value->username ?></td>
                                <td><?php echo $value->user_first_name." ".$value->user_last_name; ?></td>
                                <td><?php echo $value->phone; ?></td>
                                <td><?php if($ut==1){echo "Super Admin";}elseif ($ut==2){echo "Admin";} else{echo "User";} ?></td>
                                
                                <td>

                                    <?php
                                       $user_type = $this->session->userdata('user_type');
                                       // echo '<pre>';
                                       // print_r($user_type);
                                       // exit();
                                     if($user_type==1){ ?>
                                    <a href="<?php echo base_url(); ?>user/edit_user/<?php echo $value->user_id; ?>" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="<?php echo base_url(); ?>user/delete_seleted_user/<?php echo $value->user_id; ?>" class="btn btn-primary btn-sm" onclick="return confirm('Do you want to allow him to');">Delete</a>

                                    <?php } ?>
                                    
                                    <!-- <a href="<?php echo base_url(); ?>payment_collection/payment/<?php echo $value->user_id; ?>" class="btn btn-primary btn-sm" onclick="return confirm('Do you want to allow him to');">Payment</a>
                                    <a href="<?php echo base_url(); ?>payment_collection/haji_payment_report/<?php echo $value->user_id; ?>" class="btn btn-primary btn-sm" onclick="return confirm('Do you want to allow him to');">Report</a> -->
                                </td>
                            </tr>

                            <?php } ?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- end: DYNAMIC TABLE -->
        
    </div>
<!-- </div> -->