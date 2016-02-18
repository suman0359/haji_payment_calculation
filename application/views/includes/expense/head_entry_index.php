

<div class="main-content" >
    <div class="wrap-content container" id="container">
        <!-- start: PAGE TITLE -->
        <section id="page-title" style="padding: 20px 0">
            <div class="row">
               
                <?php $this->load->view('common/breadcrumb'); ?>
            </div>
        </section>
        <!-- end: PAGE TITLE -->
        <?php $this->load->view('common/error_show'); ?>
        <!-- start: DYNAMIC TABLE -->
        <div class="container-fluid container-fullw bg-white">
            <div class="row">

                <div class="col-md-12 text-center">
                    <a href="<?php echo base_url(); ?>expense/expense_head_entry" class="btn btn-success">Add New Head of Group Expense</a>
                </div>

                <div class="col-md-12">
                   
                    <table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
                        <thead>
                            <tr>
                                <th>Expense Head Entry Name</th>
                                <th>Expense Head Entry Code</th>
                                <th>Expense Head Entry Group Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $this->load->model('common_model'); if(!empty($head_entry_list)){ foreach ($head_entry_list as $value) { 
                                    $group_name = $this->common_model->selectNameWhere('expense_group_entry', 'expense_group_entry_name', array('id' => $value->expense_group_entry_id)); ?>
                            <tr>
                                <td><?php echo $value->expense_head_entry_name ?></td>
                                <td><?php echo $value->expense_head_entry_code; ?></td>
                                <td><?php echo $group_name->expense_group_entry_name; ?></td>
                                <td>
                                    <a href="<?php echo base_url(); ?>expense/edit_expense_head_entry/<?php echo $value->id; ?>" class="btn btn-primary">Edit</a>
                                    <a href="<?php echo base_url(); ?>expense/delete_expense_head_entry/<?php echo $value->id; ?>" class="btn btn-primary" onclick="return confirm('Do you want to allow him to');">Delete</a>
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

