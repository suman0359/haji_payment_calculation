<div class="main-content" >
    <div class="wrap-content container" id="container">
        <!-- start: DASHBOARD TITLE -->
        <section id="page-title" class="padding-top-15 padding-bottom-15">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="text-center">HAJJ MANAGEMENT SYSTEM</h1>
                </div>
                
            </div>
        </section>
        <!-- end: DASHBOARD TITLE -->
        <?php $this->load->view('common/error_show'); ?>
        <!-- start: FEATURED BOX LINKS -->
        <div class="container-fluid container-fullw bg-white">
            <div class="row">
                <div class="col-sm-3">
                    <div class="panel panel-white no-radius text-center">
                        <div class="panel-body">
                            <a href="<?php echo base_url()."haji_info"; ?>">
                                <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-smile-o fa-stack-1x fa-inverse"></i> </span>
                                <h2 class="StepTitle">Haji Entry Module</h2>                            
                                <p class="links cl-effect-1">
                                    <p class="btn btn-primary">
                                        View More
                                    </p>
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="panel panel-white no-radius text-center">
                        <div class="panel-body">
                            <a href="<?php echo base_url()."payment_collection/date_report" ?>">
                                <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-paperclip fa-stack-1x fa-inverse"></i> </span>

                                <h2 class="StepTitle">Collection Module</h2>                     

                                <p class="cl-effect-1">
                                    <p class="btn btn-primary">
                                        View More
                                    </p>
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="panel panel-white no-radius text-center">
                        <div class="panel-body">
                            <a href="<?php echo base_url()."expense/expense_entry_index" ?>">
                            <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-terminal fa-stack-1x fa-inverse"></i> </span>
                            <h2 class="StepTitle">Expense Module</h2>
                           
                            <p class="links cl-effect-1">
                                <p class="btn btn-primary">
                                    view more
                                </p>
                            </p>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="panel panel-white no-radius text-center">
                        <div class="panel-body">
                            <a href="<?php echo base_url()."commission_agent" ?>">
                            <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-smile-o fa-stack-1x fa-inverse"></i> </span>
                            <h2 class="StepTitle">Haji Agent Module</h2>
                            
                            <p class="links cl-effect-1">
                                <p class="btn btn-primary">
                                    view more
                                </p>
                            </p>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="container-fluid container-fullw bg-white">
            <div>
                <img style="width: 100%;" src="<?php echo base_url()."uploads/Mecca.jpg" ?>" alt="">
            </div>
        </div>
        <!-- end: FEATURED BOX LINKS -->
        
    </div>
<!-- </div> -->