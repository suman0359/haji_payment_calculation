<div class="main-content" >
    <div class="wrap-content container" id="container">
        <!-- start: PAGE TITLE -->
        <!-- <section id="page-title">
            <div class="row">
                <div class="col-sm-8">
                    <h1 class="mainTitle">Form Validation</h1>
                    <span class="mainDescription">Client side validation it’s very important if it is used as help for the user to complete with success the submission of a form.</span>
                </div>
                <ol class="breadcrumb">
                    <li>
                        <span>Forms</span>
                    </li>
                    <li class="active">
                        <span>Form Validation</span>
                    </li>
                </ol>
            </div>
        </section> -->
        <!-- end: PAGE TITLE -->
        <!-- start: FORM VALIDATION EXAMPLE 1 -->
        <!-- start Search Section -->
<div id="" class="container-fluid container-fullw bg-white">
        <div class="row">
            <form action="<?php echo base_url(); ?>payment_collection/date_report" method="POST">
            <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label">
                        Start Date <span class="required"></span>
                    </label>
                    <input type="date" class="form-control datepicker" id="start_date" name="start_date">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label">
                        End Date <span class="required"></span>
                    </label>
                    <input type="date" class="form-control datepicker" id="end_date" name="end_date">
                </div>
            </div>
            <div class="col-md-4">
                <button class="btn btn-primary btn-wide pull-right" type="submit">
                    Search <i class="fa fa-arrow-circle-right"></i>
                </button>
            </div>

            </form>
        </div>
        </div>

        <!-- End Search Section -->

        <div id="div1" class="container-fluid container-fullw bg-white">
            <h3 class="text-center">Collection Statement <!-- <br/><small>From : 01/12/2015 to 31/12/2015</small>  --></h3>

            <div class="row">
        <div class="col-sm-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th> # </th>
                        <th> Haji Name </th>
                        <th> Haji Passport </th>
                        <th> Receipt ID </th>
                        <th>Payment Date</th>
                        <th> Amount </th>
                        <!-- <th> Total </th> -->
                    </tr>
                </thead>
                <tbody>

                <?php $total = 0; $serial=1; if(!empty($money_receipt_list)){ foreach($money_receipt_list as $value){ 
                    $haji_id = $value->haji_id;
                    $haji_name = $this->common_model->getInfo('haji_information', array('id' => $haji_id));

                    ?>
                    <tr>
                        <td> <?php echo $serial; ?> </td>
                        <td> <?php if(!empty($haji_name->haji_name))echo $haji_name->haji_name  ?> </td>
                        <td> <?php if(!empty($haji_name->haji_passport))echo $haji_name->haji_passport ?> </td>
                        <td> <?php if(!empty($value->money_receipt_number))echo $value->money_receipt_number ?> </td>
                        <td> <?php if(!empty($value->money_receipt_number))echo $value->payment_date ?> </td>
                        <td> <?php if(!empty($value->money_receipt_number))echo $value->amount ?> </td>
                        <!-- <td> $1152 </td> -->
                    </tr>

                    <?php $serial++; $total += $value->amount; } }else{ ?>
                        <tr>
                            <td colspan="6" align="center">No Transaction Found</td>
                        </tr>
                   <?php  } ?>

                    <tr>
                        <td colspan="2" style="font-weight: bold">Total Collection Amount</td>
                        <td colspan="3"></td>
                        <td style="font-weight: bold"> <?php echo $total; ?> </td>
                        <!-- <td>  </td> -->
                    </tr>
                    <!-- <tr>
                        <td> 2 </td>
                        <td> Ipsum </td>
                        <td class="hidden-480"> Consectetuer adipiscing elit </td>
                        <td class="hidden-480"> 21 </td>
                        <td class="hidden-480"> $469 </td>
                        <td> $6159 </td>
                    </tr>
                    <tr>
                        <td> 3 </td>
                        <td> Dolor </td>
                        <td class="hidden-480"> Olor sit amet adipiscing eli </td>
                        <td class="hidden-480"> 24 </td>
                        <td class="hidden-480"> $144 </td>
                        <td> $8270 </td>
                    </tr>
                    <tr>
                        <td> 4 </td>
                        <td> Sit </td>
                        <td class="hidden-480"> Laoreet dolore magna </td>
                        <td class="hidden-480"> 194 </td>
                        <td class="hidden-480"> $317 </td>
                        <td> $966 </td>
                    </tr> -->
                </tbody>
            </table>
        </div>
    </div>


<button class="btn btn-primary hidden-print" onclick="printContent('div1')">Print</button>


<!-- 
            <div class="row">
                <div class="col-sm-12 invoice-block">
                    <ul class="list-unstyled amounts text-small">
                        <li>
                            <strong>Sub-Total:</strong> $12,876
                        </li>
                        <li>
                            <strong>Discount:</strong> 9.9%
                        </li>
                        <li>
                            <strong>VAT:</strong> 22%
                        </li>
                        <li class="text-extra-large text-dark margin-top-15">
                            <strong >Total:</strong> $11,400
                        </li>
                    </ul>
                    <br>
                    <a onclick="javascript:window.print();" class="btn btn-lg btn-primary hidden-print">
                        Print <i class="fa fa-print"></i>
                    </a>
                    <a class="btn btn-lg btn-primary btn-o hidden-print">
                        Submit Your Invoice <i class="fa fa-check"></i>
                    </a>
                </div>
            </div>
 -->


            <script>
function printContent(el){
    var restorepage = document.body.innerHTML;
    var printcontent = document.getElementById(el).innerHTML;
    document.body.innerHTML = printcontent;
    window.print();
    document.body.innerHTML = restorepage;
}
</script>

<!-- 
<h1>My page</h1>
<div id="div1">DIV 1 content...</div>
<button onclick="printContent('div1')">Print Content</button>
<div id="div2">DIV 2 content...</div>
<button onclick="printContent('div2')">Print Content</button>
<p id="p1">Paragraph 1 content...</p>
<button onclick="printContent('p1')">Print Content</button>
 -->


        </div>

    </div>
<!-- </div> -->
