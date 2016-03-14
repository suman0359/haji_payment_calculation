<div class="main-content" >
    <div class="wrap-content container" id="container">
        <!-- start: PAGE TITLE -->
        <section id="page-title" style="padding: 20px 0">
            <div class="row">
                <div class="col-sm-8">
                    <h1 class="mainTitle text-center">Bank Account List</h1>
                   
                </div>
                <?php $this->load->view('common/breadcrumb');?>
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
            <a href="<?php echo base_url(); ?>bank/add_new_bank_account" class="btn btn-success">Add New Bank</a>
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
                                <th>Bank Name</th>
                                <th>Branch Name</th>
                                <th>Bank Account Name</th>
                                <th>Bank Account Number</th>
                                
                                
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php  $this->load->model('common_model'); foreach ($bank_account_list as $value) { 
                                $bank_name = $value->bank_id;
                                $bank_name = $this->common_model->getInfo('bank_info', array('id' => $bank_name));
                            ?>
                               
                            <tr>
                                <td><?php echo $value->id ?></td>
                                
                                <td><?php echo $bank_name->bank_name; ?></td>
                                <td><?php echo $value->branch_name; ?></td>

                                <td><?php echo $value->account_name ?></td>
                                <td><?php echo $value->account_number ?></td>
                                
                                <td>

                                    <?php
                                       $user_type = $this->session->userdata('user_type');
                                       // echo '<pre>';
                                       // print_r($user_type);
                                       // exit();
                                     if($user_type==1){ ?>
                                    <a href="<?php echo base_url(); ?>bank/edit_bank_account_info/<?php echo $value->id; ?>" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="<?php echo base_url(); ?>bank/delete_bank_account_info/<?php echo $value->id; ?>" class="btn btn-primary btn-sm" onclick="return confirm('Do you want to allow him to');">Delete</a>

                                    <?php } ?>
                                    
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