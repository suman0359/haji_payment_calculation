<div class="main-content" >
    <div class="wrap-content container" id="container">
        <!-- start: PAGE TITLE -->
        <section id="page-title" style="padding: 20px 0">
            <div class="row">
                <div class="col-sm-8">
                    <h1 class="mainTitle text-center">Haji or Omra  Information</h1>
                    
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
                <a href="<?php echo base_url(); ?>haji_info/add_form" class="btn btn-success">Add New Information</a>
            </div>

                <div class="col-md-12" id="div1">
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

                                <!-- Single button -->
                                    <div class="btn-group">
                                      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti-settings tiny-icon"></i>
                                        Action <span class="caret"></span>
                                      </button>
                                      <ul class="dropdown-menu">


                                    <?php
                                       $user_type = $this->session->userdata('user_type');

                                     if($user_type==1){ ?>
                                     <li><a href="<?php echo base_url(); ?>haji_info/edit_form/<?php echo $value->id; ?>" >Edit</a></li>
                                     <li><a href="<?php echo base_url(); ?>haji_info/delete_haji/<?php echo $value->id; ?>"  onclick="return confirm('Do you want to allow him to');">Delete</a></li>
                                                                       
                                    <?php } ?>
                                    
                                    <li><a href="<?php echo base_url(); ?>payment_collection/payment/<?php echo $value->id; ?>" onclick="return confirm('Do you want to allow him to');">Payment</a></li>
                                    <li><a href="<?php echo base_url(); ?>payment_collection/haji_payment_report/<?php echo $value->id; ?>" onclick="return confirm('Do you want to allow him to');">Report</a></li>

                                    <li><a href="<?php echo base_url();?>haji_info/set_contact_amount/<?php echo $value->id; ?>">Set Contact Amount</a></li>
                                      </ul>
                                    </div>

                                </td>
                            </tr>

                            <?php } ?>
                            
                        </tbody>
                    </table>
                </div>
            </div>

            <button class="btn btn-primary hidden-print" onclick="printContent('div1')">Print</button>

        </div>
        <!-- end: DYNAMIC TABLE -->
        
    </div>


<script>
$.fn.dataTable.Buttons.swfPath = '<?php echo base_url(); ?>assets/swf/flashExport.swf';
 
$(document).ready(function() {
    $('#sample_1').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyFlash',
            'csvFlash',
            'excelFlash',
            'pdfFlash'
        ]
    } );
} );

function printContent(el){
    var restorepage = document.body.innerHTML;
    var printcontent = document.getElementById(el).innerHTML;
    document.body.innerHTML = printcontent;
    window.print();
    document.body.innerHTML = restorepage;
}
</script>