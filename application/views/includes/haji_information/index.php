<div class="main-content" >
    <div class="wrap-content container" id="container">
        <!-- start: PAGE TITLE -->
        <section id="page-title" style="padding: 20px 0">
            <div class="row">
                <div class="col-sm-8">
                    <h1 class="mainTitle text-center">Haji or Omra  Information</h1>
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
            <a href="<?php echo base_url(); ?>haji_info/add_form" class="btn btn-success">Add New Information</a>
            </div>

                <div class="col-md-12">
                    <!-- <h5 class="over-title margin-bottom-15">Basic <span class="text-bold">Data Table</span></h5>
                    <p>
                        DataTables is a plug-in for the jQuery Javascript library. It is a highly flexible tool, based upon the foundations of progressive enhancement, and will add advanced interaction controls to any HTML table.
                    </p> -->
                    <table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
                        <thead>
                            <tr>
                                <th>Haji ID</th>
                                <th>Haji Name</th>
                                <th>Passport</th>
                                <th>Haji Mobile</th>
                                <th>Hajj Year</th>
                                <th>CM ID</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php  $this->load->model('common_model'); foreach ($haji_information as $value) { 
                                $commission_agent_id = $value->commission_agent_id;
                                $commission_agent_name = $this->common_model->getInfo('commission_agent', array('id' => $commission_agent_id)); ?>

                            <tr>
                                <td><?php echo $value->haji_id ?></td>
                                <td><?php echo $value->haji_name ?></td>
                                <td><?php echo $value->haji_passport; ?></td>
                                <td><?php echo $value->haji_mobile; ?></td>
                                <td><?php echo $value->hajj_year; ?></td>
                                <td><?php if(!empty($commission_agent_name->commision_agent_name)) echo $commission_agent_name->commision_agent_name; ?></td>
                                <td>
                                    <a href="<?php echo base_url(); ?>haji_info/edit_form/<?php echo $value->id; ?>" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="<?php echo base_url(); ?>haji_info/delete_haji/<?php echo $value->id; ?>" class="btn btn-primary btn-sm" onclick="return confirm('Do you want to allow him to');">Delete</a>
                                    
                                    <a href="<?php echo base_url(); ?>payment_collection/payment/<?php echo $value->id; ?>" class="btn btn-primary btn-sm" onclick="return confirm('Do you want to allow him to');">Payment</a>
                                    <a href="<?php echo base_url(); ?>payment_collection/haji_payment_report/<?php echo $value->id; ?>" class="btn btn-primary btn-sm" onclick="return confirm('Do you want to allow him to');">Report</a>
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