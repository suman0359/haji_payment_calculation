

<div class="main-content" >
    <div class="wrap-content container" id="container">
        <!-- start: PAGE TITLE -->
        <section id="page-title">
            <div class="row">
                <div class="col-sm-8">
                    <h1 class="mainTitle text-center">Group Entry List of Expense </h1>
                   
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
                    <a href="<?php echo base_url(); ?>expense/expense_group_entry" class="btn btn-success">Add New Group of Expense</a>
                </div>

                <div class="col-md-12">
                    
                    <table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
                        <thead>
                            <tr>
                                <th>Espense Group Entry Name</th>
                                <th>Espense Group Entry Code</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(!empty($group_entry_list)){ foreach ($group_entry_list as $value) { ?>
                            <tr>
                                <td><?php echo $value->expense_group_entry_name ?></td>
                                <td><?php echo $value->expense_group_entry_code; ?></td>
                                <td>
                                    <a href="<?php echo base_url(); ?>expense/expense_group_edit_form/<?php echo $value->id; ?>" class="btn btn-primary">Edit</a>
                                    <a href="<?php echo base_url(); ?>expense/delete_group_expense/<?php echo $value->id; ?>" class="btn btn-primary" onclick="return confirm('Do you want to allow him to');">Delete</a>
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

