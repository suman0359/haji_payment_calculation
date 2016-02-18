

<div class="main-content" >
    <div class="wrap-content container" id="container">
        <!-- start: PAGE TITLE -->
        <section id="page-title" style="padding: 20px 0">
            <div class="row">
                <div class="col-sm-8">
                    <h1 class="mainTitle text-center">Commission Agent </h1>
                   
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
                    <a href="<?php echo base_url(); ?>commission_agent/add_form" class="btn btn-success">Add New Information</a>
                </div>

                <div class="col-md-12">
                    
                    <table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
                        <thead>
                            <tr>
                                <th>AGENT CODE</th>
                                <th class="hidden-xs">AGENT NAME</th>
                                <th>Passport</th>
                                <th class="hidden-xs"> ADDRESS</th>
                                <th>MOBILE</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(!empty($commission_agent_list)){ foreach ($commission_agent_list as $value) { ?>
                            <tr>
                                <td><?php echo $value->commission_agent_code ?></td>
                                <td class="hidden-xs"><?php echo $value->commision_agent_name ?></td>
                                <td><?php echo $value->passport_no; ?></td>
                                <td class="hidden-xs"><?php echo $value->commision_agent_address; ?></td>
                                <td><?php echo $value->commision_agent_mobile; ?></td>
                                <td>
                                    <a href="<?php echo base_url(); ?>commission_agent/update_form/<?php echo $value->id; ?>" class="btn btn-primary">Edit</a>
                                    <a href="<?php echo base_url(); ?>commission_agent/delete/<?php echo $value->id; ?>" class="btn btn-primary" onclick="return confirm('Do you want to allow him to');">Delete</a>
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

