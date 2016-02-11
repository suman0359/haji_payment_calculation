<div class="main-content" >
    <div class="wrap-content container" id="container">
        <!-- start: PAGE TITLE -->
        <section id="page-title" style="padding: 20px 0">
            <div class="row">
                <div class="col-sm-8">
                    <h1 class="mainTitle text-center">Bank Withdrawal History</h1>
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
            <a href="<?php echo base_url(); ?>bank/bank_widthdrawal_form" class="btn btn-success">Add New Withdraw</a>
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
                                <th>Account Name</th>
                                <th>Account Number</th>
                                <th>Transaction Type</th>
                                <th>Amount</th>
                                
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php  $this->load->model('common_model'); foreach ($bank_withdrawal_history as $value) { 
                            $bank_id = $value->bank_id;
                            $bank_name = $this->common_model->getInfo('bank_info', array('id' => $bank_id));  

                            $account_id = $value->account_number;
                            $account_number = $this->common_model->getInfo('bank_account_info', array('id' => $account_id));

                            $transaction_type= $value->transaction_type;
                            ?>
                               
                            <tr>
                                <td><?php echo $value->id ?></td>
                                <td><?php echo $bank_name->bank_name ?></td>
                                <td><?php echo $value->account_name ?></td>
                                <td><?php echo $account_number->account_number; ?></td>
                                <td><?php 
                                if($transaction_type==2) echo "BANK"; if($transaction_type==3) echo "ATM"; ?></td>
                                <td><?php echo $value->amount; ?></td>
                                
                                
                                <td>

                                    <?php
                                       $user_type = $this->session->userdata('user_type');
                                       // echo '<pre>';
                                       // print_r($user_type);
                                       // exit();
                                     if($user_type==1){ ?>
                                    <a href="<?php echo base_url(); ?>bank/edit_bank_info/<?php echo $value->id; ?>" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="<?php echo base_url(); ?>bank/delete_bank_info/<?php echo $value->id; ?>" class="btn btn-primary btn-sm" onclick="return confirm('Do you want to allow him to');">Delete</a>

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