<div class="main-content" >
    <div class="wrap-content container" id="container">

        <section id="page-title" style="padding: 20px 0">
            <div class="row">                
                <?php $this->load->view('common/breadcrumb'); ?>
            </div>
        </section>

        <div id="" class="container-fluid container-fullw bg-white">
            <div class="row">

                <form action="<?php echo base_url(); ?>payment_collection/view_contact_amount" method="POST">
                    <div class="col-md-4">

                        <div class="form-group text-right margin_top_10">
                            <label for="">
                                Select 2016 <span class="symbol"></span>
                            </label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <select name="select_year" id="select_year" class="form-control">
                            <option value="">Select Year..</option>
                            <option value="all">All</option>
                            <option value="2015">2015</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>

                        </select>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <button class="btn btn-primary btn-wide" type="submit">
                                Search <i class="fa fa-arrow-circle-right"></i>
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>

        <!-- End Search Section -->

        <div id="printContent" class="container-fluid container-fullw bg-white">
            <h3 class="text-center">Hajj Contact And Due Statement </h3>

            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">

                        <thead>
                            <tr>
                                <th> # </th>
                                <th> Name</th>
                                <th> Status</th>
                                <th> Address </th>
                                <th> Phone </th>
                                <th> Contact Amount </th>
                                <th> Number of Haji </th>
                                <th> Hajj Year </th>
                                <th> Dues Amount </th>
                                <!-- <th> Total </th> -->
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $total_contact_amount = 0;
                            $total_due_amount = 0;

                            $serial = 1;
                            if (!empty($contact_amount_data)) {
                                foreach ($contact_amount_data as $value) {

                                    $hajj_year = $value->hajj_year;

                                    $haji_id = $value->haji_id;
                                    $haji_info = $this->common_model->getInfo('haji_information', array('id' => $haji_id));

                                    $commission_agent_id = $value->commission_agent_id;
                                    $group_leader_info = $this->common_model->getInfo('commission_agent', array('id' => $commission_agent_id));


                                    $contact_amount = $value->amount;
                                    $due_amount = $value->due_amount;
                                
                                    
                                    ?>
                                    <tr>
                                        <td> <?php echo $serial; ?> </td>
                                        <td> <?php if (!empty($haji_info->haji_name)) echo $haji_info->haji_name; if (!empty($group_leader_info->commision_agent_name)) echo $group_leader_info->commision_agent_name; ?> </td>
                                        <td> <?php if ($value->haji_id!=NULL) echo "Hajj User";  if ($value->commission_agent_id!=NULL) echo "Group Leader";?> </td>
                                        <td> <?php if (!empty($haji_info->haji_address)) echo $haji_info->haji_address; if (!empty($group_leader_info->commision_agent_address)) echo $group_leader_info->commision_agent_address;?> </td>
                                        <td> <?php 
                                        if (!empty($haji_info->haji_mobile)) echo @$haji_info->haji_mobile; if (!empty($group_leader_info->commision_agent_mobile)) echo @$group_leader_info->commision_agent_mobile; ?> </td>
                                        <td> <?php if (!empty($value->amount)) echo $value->amount; ?> </td>

                                        <td><?php if(!empty($value->number_of_haji)) echo @$value->number_of_haji; ?></td>

                                        <td><?php if(!empty($value->hajj_year)) echo @$value->hajj_year; ?></td>
                                        <td> <?php if (!empty($value->due_amount)) echo $value->due_amount ?> </td>
                                        
                                    </tr>

                                    <?php
                                    
                                    $serial++;
                                    $total_contact_amount += $contact_amount;
                                    $total_due_amount +=$due_amount;
                                   
                                }
                            }else {
                                ?>
                                <tr>
                                    <td colspan="7" align="center">No Transaction Found</td>

                                </tr>
                            <?php } ?>

                            
                        </tbody>
                        <tr>
                            <td></td>
                            <td colspan="4" style="font-weight: bold">Total Amount</td>
                            <td  style="font-weight: bold"> <?php echo $total_contact_amount; ?> </td>
                            <td colspan="2"></td>
                            <td  style="font-weight: bold"> <?php echo $total_due_amount; ?> </td>
                        </tr>
                    </table>
                    
                </div>
            </div>


            <button class="btn btn-primary hidden-print" onclick="printContent('printContent')">Print</button>



            <script>
                function printContent(el) {
                    var restorepage = document.body.innerHTML;
                    var printcontent = document.getElementById(el).innerHTML;
                    document.body.innerHTML = printcontent;
                    window.print();
                    document.body.innerHTML = restorepage;
                }
            </script>


        </div>

    </div>
    
