

<div class="main-content" >
    <div class="wrap-content container" id="container">
        <!-- start: PAGE TITLE -->
        <section id="page-title" style="padding: 20px 0">
            <div class="row">
                <div class="col-sm-8">
                    <h1 class="mainTitle text-center">Income Head Information</h1>
                    <!-- <span class="mainDescription">Refers to data arranged in rows and columns. A spreadsheet, for example, is a table. In relational database management systems, all information is stored in the form of tables. <small class="block">Webopedia - Online Tech Dictionary for IT Professionals</small></span> -->
                </div>
                <ol class="breadcrumb">
                    <li>
                        <span>Income Head</span>
                    </li>
                    <li class="active">
                        <span>Head Index</span>
                    </li>
                </ol>
            </div>
        </section>
        <!-- end: PAGE TITLE -->
        <?php $this->load->view('common/error_show'); ?>
        <!-- start: DYNAMIC TABLE -->
        <div class="container-fluid container-fullw bg-white">
            <div class="row">
                
                <div class="col-md-12 text-center">
                    <a href="<?php echo base_url(); ?>income/head_form" class="btn btn-success">Add New Information</a>
                </div>

                <div class="col-md-12">
                    <!-- <h5 class="over-title margin-bottom-15">Basic <span class="text-bold">Data Table</span></h5> -->
                    <!-- <p>
                        DataTables is a plug-in for the jQuery Javascript library. It is a highly flexible tool, based upon the foundations of progressive enhancement, and will add advanced interaction controls to any HTML table.
                    </p> -->
                    <table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
                        <thead>
                            <tr>
                                <th>Head Code</th>
                                <th>Head Name</th>
                                <th>Group Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php  
                            $income_head_list= $this->db->get('income_head' )->result_array();
                            foreach ($income_head_list as $value) { 
                                $group_name = $this->common_model->getInfo('income_group', array('id' => $value['income_group_id'])); 

                                // echo '<pre>';
                                // print_r($group_name);
                                // exit();

                                ?>

                            <tr>
                                
                                <td><?php echo $value['income_head_code']; ?></td>
                                <td ><?php echo $value['income_head_name']; ?></td>
                                <td><?php if(isset($group_name->income_group_name)) echo $group_name->income_group_name; ?></td>
                                <td>
                                    <a href="<?php echo base_url(); ?>income/edit_income_head/<?php echo $value['id']; ?>" class="btn btn-primary">Edit</a>
                                    <a href="<?php echo base_url(); ?>income/delete_income_head/<?php echo $value['id']; ?>" class="btn btn-primary" onclick="return confirm('Do you want to allow him to');">Delete</a>
                                </td>
                            </tr>

                            <?php  } ?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- end: DYNAMIC TABLE -->
        
    </div>
<!-- </div> -->

