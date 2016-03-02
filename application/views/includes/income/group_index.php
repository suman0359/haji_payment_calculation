

<div class="main-content" >
    <div class="wrap-content container" id="container">
        <!-- start: PAGE TITLE -->
        <section id="page-title" style="padding: 20px 0">
            <div class="row">
                <div class="col-sm-8">
                    <h1 class="mainTitle text-center">Income Group Information</h1>
                    
                </div>
                <?php $this->load->view('common/breadcrumb') ?>
            </div>
        </section>
        <!-- end: PAGE TITLE -->
        <?php $this->load->view('common/error_show'); ?>
        <!-- start: DYNAMIC TABLE -->
        <div class="container-fluid container-fullw bg-white">
            <div class="row">

                <div class="col-md-12 text-center">
                    <a href="<?php echo base_url(); ?>income/group_form" class="btn btn-success">Add New Information</a>
                </div>

                <div class="col-md-12">
                   
                    <table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
                        <thead>
                            <tr>
                                <th>Group Code</th>
                                <th>Group Name</th>
                                
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(!empty($income_group_list)){ foreach ($income_group_list as $value) { ?>
                            <tr>
                                <td><?php echo $value->income_group_code ?></td>
                                
                                <td><?php echo $value->income_group_name; ?></td>
                                
                                <td>
                                    <a href="<?php echo base_url(); ?>income/edit_income_group/<?php echo $value->id; ?>" class="btn btn-primary">Edit</a>
                                    <a href="<?php echo base_url(); ?>income/delete_income_group/<?php echo $value->id; ?>" class="btn btn-primary" onclick="return confirm('Do you want to allow him to');">Delete</a>
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
<!-- </div>
 -->
