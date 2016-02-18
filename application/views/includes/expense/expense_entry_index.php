

<div class="main-content" >
    <div class="wrap-content container" id="container">
        <!-- start: PAGE TITLE -->
        <section id="page-title">
            <div class="row">
                <div class="col-sm-8">
                    <h1 class="mainTitle">Expense Entry Index Form</h1>
                    
                </div>
                <?php $this->load->view('common/breadcrumb'); ?>
            </div>
        </section>
        <!-- end: PAGE TITLE -->
        <?php $this->load->view('common/error_show'); ?>
        <!-- start: DYNAMIC TABLE -->
        <div class="container-fluid container-fullw bg-white">
            <div class="row">

                <div class="col-md-12 text-center">
                    <a href="<?php echo base_url(); ?>expense/expense_entry_form" class="btn btn-success">Add New Expense</a>
                </div>

                <div class="col-md-12">
                    <!-- <h5 class="over-title margin-bottom-15">Basic <span class="text-bold">Data Table</span></h5>
                    <p>
                        DataTables is a plug-in for the jQuery Javascript library. It is a highly flexible tool, based upon the foundations of progressive enhancement, and will add advanced interaction controls to any HTML table.
                    </p> -->
                    <table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
                        <thead>
                            <tr>
                                <th>Expense Name</th>
                                <th>Expense Group Name</th>
                                <th>Exepense Head Name</th>
                                <th>Payment Mode</th>
                                <th>Entry Date</th>
                                <th>Bank Name</th>
                                <th>Bank Account No</th>
                                <th>Amount</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(!empty($expense_entry_list)){ foreach ($expense_entry_list as $value) { ?>
                            <tr>
                                <td><?php echo $value->expense_name; ?></td>
                                <td><?php 

                                $expense_group_id = $value->expense_group_id; 
                                $expense_group_name = $this->common_model->getInfo('expense_group_entry', array('id' => $expense_group_id));
                                if(!empty($expense_group_name))echo $expense_group_name->expense_group_entry_name;

                                ?></td>
                                <td><?php 
                                $expense_head_id = $value->expense_head_id; 
                                $expense_head_name = $this->common_model->getInfo('expense_head_entry', array('id' => $expense_head_id));
                                if(!empty($expense_head_name))echo $expense_head_name->expense_head_entry_name;
                                ?></td>
                                <td><?php 

                                 $payment_mode = $value->payment_mode; 
                                 if($payment_mode==1){
                                    echo "Cash";
                                 }elseif($payment_mode==2){
                                    echo "Bank/Cheque";
                                 }elseif($payment_mode==3){
                                    echo "bKash";
                                 }else{
                                    echo "Doesn't Select Payment Mode";
                                 }

                                 ?></td>
                                 <td><?php echo $value->expense_entry_date; ?></td>
                                <td><?php echo $value->bank_name; ?></td>
                                <td><?php echo $value->bank_acc_number; ?></td>
                                <td><?php echo $value->amount; ?></td>
                                <td>
                                    <a href="<?php echo base_url(); ?>expense/expense_edit_entry_form/<?php echo $value->id; ?>" class="btn btn-primary">Edit</a>
                                    <a href="<?php echo base_url(); ?>expense/delete_expense/<?php echo $value->id; ?>" class="btn btn-primary" onclick="return confirm('Do you want to allow him to');">Delete</a>
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
<!-- </div> -->

