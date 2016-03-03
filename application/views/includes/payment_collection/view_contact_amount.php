<div class="main-content" >
    <div class="wrap-content container" id="container">

        <section id="page-title" style="padding: 20px 0">
            <div class="row">                
                <?php $this->load->view('common/breadcrumb'); ?>
            </div>
        </section>

        <div id="" class="container-fluid container-fullw bg-white">
            <div class="row">

                <form action="<?php echo base_url(); ?>haji_info/hajj_contact_and_due_statement" method="POST">
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
                                <!-- <th> Collect Amount </th> -->
                                <th> Dues Amount </th>
                                <!-- <th> Total </th> -->
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $total_contact_amount = 0;
                            $sum_due_amount = 0;
                            $total_collect_amount = 0;
                            $serial = 1;
                            if (!empty($hajj_contact_and_due_statement)) {
                                foreach ($hajj_contact_and_due_statement as $value) {

                                    $hajj_year = $value->hajj_year;
                                    $haji_id = $value->id;
                                    $haji_info = $this->haji_info_model->contact_and_due_statement('transactions', array('haji_id' => $haji_id));

                                    $contact_amount = $value->total_amount;
                                    
                                    $collect_amount = $haji_info['debit'];
                                    // echo "<pre>";
                                    // print_r($contact_amount);
                                    // exit();

                                    if ($contact_amount !=0 OR $contact_amount != NULL OR $contact_amount != "") {
                                        $total_due_amount = $contact_amount - $collect_amount;
                                    }else{
                                        $total_due_amount=0;
                                    }

                                    
                                    ?>
                                    <tr>
                                        <td> <?php echo $serial; ?> </td>
                                        <td> <?php if (!empty($value->haji_name)) echo $value->haji_name ?> </td>
                                        <td> <?php if (!empty($value->haji_address)) echo $value->haji_address; ?> </td>
                                        <td> <?php if (!empty($value->haji_mobile)) echo $value->haji_mobile ?> </td>
                                        <td> <?php if (!empty($value->total_amount)) echo $value->total_amount ?> </td>
                                        <td> <?php if (!empty($haji_info['debit'])) echo $haji_info['debit'] ?> </td>
                                        <td> <?php echo $total_due_amount; ?> </td>

                                    </tr>

                                    <?php
                                    //echo "<pre>";
                                    //print_r($total_due_amount);

                                    $serial++;
                                    $total_contact_amount += $contact_amount;
                                    $sum_due_amount += $total_due_amount;
                                    $total_collect_amount += $collect_amount;
                                    
                                    // print_r($haji_info);
                                    // print_r($value->haji_name);
                                    // print_r($sum_due_amount);
                                    // exit();
                                }
                            }else {
                                ?>
<!--                                <tr>
                                    <td colspan="7" align="center">No Transaction Found</td>

                                </tr>-->
                            <?php } ?>

                            
                        </tbody>
                        <tr>
                                <td></td>
                                <td colspan="3" style="font-weight: bold">Total Amount</td>

                                <td colspan="1" ><?php echo $total_contact_amount ?></td>
                                <td  style="font-weight: bold"> <?php echo $total_collect_amount; ?> </td>
                                <td  style="font-weight: bold"> <?php echo $sum_due_amount; ?> </td>
                            </tr>
                    </table>
                    tabla
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
    <!-- </div> -->
