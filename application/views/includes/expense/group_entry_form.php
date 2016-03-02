<div class="main-content" >
    <div class="wrap-content container" id="container">
        <!-- start: PAGE TITLE -->
        <section id="page-title">
            <div class="row">
                <div class="col-sm-8">
                    <h1 class="mainTitle">Expense Group Entry</h1>
                    
                </div>
                <?php $this->load->view('common/breadcrumb');?>
            </div>
        </section>
        <!-- end: PAGE TITLE -->
        <!-- start: FORM VALIDATION EXAMPLE 1 -->
        <div class="container-fluid container-fullw bg-white">
            <div class="row">
                <div class="col-md-12">

                    <form action="<?php echo base_url() . "expense/add_group_entry"; ?>" method="POST" role="form" id="form" accept-charset="utf-8" enctype="multipart/form-data"> 
                        

                        <h2 class="text-center">Expense Group Entry</h2>


                        <div class="row">
                            
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">
                                        Code <span class="symbol required"></span>
                                    </label>
                                    <input type="text" name="expense_group_entry_code" placeholder="Insert Code" class="form-control" id="code" name="code">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">
                                        Group Name <span class="symbol required"></span>
                                    </label>
                                    <input type="text" name="expense_group_entry_name"placeholder="Insert Group Name" class="form-control" id="group_name" name="group_name">
                                </div>
                            </div>
                            <!-- End Second Column -->

                            
                        </div>







                </div>
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
