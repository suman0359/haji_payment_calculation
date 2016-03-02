<div class="main-content" >
    <div class="wrap-content container" id="container">
        <!-- start: PAGE TITLE -->
        <section id="page-title" style="padding: 20px 0">
            <div class="row">
                <h1 class="mainTitle">Group Leader Contact Amount Form</h1>
                <?php $this->load->view('common/breadcrumb'); ?>
            </div>
        </section>
        <!-- end: PAGE TITLE -->
        <!-- start: FORM VALIDATION EXAMPLE 1 -->
        <div class="container-fluid container-fullw bg-white">
            <div class="row">
                <div class="col-md-12">

                    <form action="<?php echo base_url() . "payment_collection/save_group_payment_collection_data"; ?>" method="POST" role="form" id="form" accept-charset="utf-8" enctype="multipart/form-data">
                        <div class="row">

                            <div class="col-md-6">
                                <div class="row">

                                <input type="hidden" name="commission_agent_id" value="<?php echo $group_leader_information->id; ?>"/> 

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label"> Group Leader Name  </label>
                                            <input type="text" disabled="" placeholder="Group Leader Name" class="form-control" id="commission_agent_name" name="commission_agent_name" value="<?php echo $group_leader_information->commision_agent_name; ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label"> Group Leader Passport </label>
                                            <input type="text" disabled placeholder="Group Leader Passport" class="form-control" id="haji_passport" name="haji_passport" value="<?php echo $group_leader_information->passport_no; ?>">
                                        </div>
                                    </div>

                                    
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label class="control-label"> Total Contact Amount </label>
                                            <input type="text" placeholder="Insert Total Amount" class="form-control" id="total_amount" name="total_amount">
                                        </div>
                                    </div>


                                </div>

                            </div> <!-- End First Column -->

                            <div class="col-md-6">
                                <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label"> Group Leader Mobile </label>
                                            <input type="text" disabled placeholder="Group Leader Mobile" class="form-control" id="haji_mobile" name="haji_mobile" value="<?php echo $group_leader_information->commision_agent_mobile; ?>">
                                        </div>
                                    </div>


                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">
                                            Year <span class="symbol required"></span>
                                        </label>
                                        <select class="form-control" id="hajj_year" name="hajj_year">
                                            <option value="">Select Hajj Year</option>
                                            <option value="2015">2015</option>
                                            <option value="2016">2016</option>
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                        </select>
                                        
                                    </div>
                                </div>
                            </div> <!-- End First Column -->

                        </div> <!-- End Row -->

                        <div class="row">
                            <div class="col-md-12">
                                <div>
                                    <span class="symbol required"></span>Required Fields
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <p>
                                    By clicking REGISTER, you are agreeing to the Policy and Terms &amp; Conditions.
                                </p>
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-primary btn-wide pull-right" type="submit">
                                    Register <i class="fa fa-arrow-circle-right"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- end: FORM VALIDATION EXAMPLE 1 -->

    </div>
    <!-- </div> -->


    <script>
        function showImage(src, target) {
            var fr = new FileReader();
            fr.onload = function () {
                target.src = fr.result;
            }
            fr.readAsDataURL(src.files[0]);
        }

        function putImage() {
            var src = document.getElementById("select_image");
            var target = document.getElementById("target");
            showImage(src, target);
        }

    </script>
