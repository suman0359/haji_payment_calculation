

<div class="main-content" >
    <div class="wrap-content container" id="container">
        <!-- start: PAGE TITLE -->
        <section id="page-title" style="padding: 20px 0">
            <div class="row">
                <div class="col-sm-8">
                    <h1 class="mainTitle text-center"> Group Leader List </h1>
                   
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
                                <th>CODE</th>
                                <th class="hidden-xs">Leader Name</th>
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
                                    <!-- Single button -->
                                    <div class="btn-group">
                                      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti-settings tiny-icon"></i>
                                        Action <span class="caret"></span>
                                      </button>
                                      <ul class="dropdown-menu">
                                            <li><a href="<?php echo base_url(); ?>commission_agent/update_form/<?php echo $value->id; ?>" >Edit</a></li>
                                            <li><a href="<?php echo base_url(); ?>commission_agent/delete/<?php echo $value->id; ?>" onclick="return confirm('Do you want to allow him to');">Delete</a></li>
                                            <li><a href="<?php echo base_url(); ?>payment_collection/group_payment_collect_form/<?php echo $value->id; ?>" onclick="return confirm('Do you want to allow him to');">Group Payment Collect</a></li>
                                            <li><a href="<?php echo base_url();?>commission_agent/set_group_leader_contact_amount/<?php echo $value->id; ?>">Set Contact Amount</a></li>
                                      </ul>
                                    </div>
                                    
                                    
                                    
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

