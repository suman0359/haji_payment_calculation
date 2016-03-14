<footer>
    <div class="footer-inner">
        <div class="pull-left">
            &copy; <span class="current-year"></span><span class="text-bold text-uppercase"> Micron Techno</span>. <span>All rights reserved</span>
        </div>
        <div class="pull-right">
            <span class="go-top"><i class="ti-angle-up"></i></span>
        </div>
    </div>
</footer>
<!-- end: FOOTER --> 


<!-- start: SETTINGS -->
<div class="settings panel panel-default hidden-xs hidden-sm" id="settings">
    <button ct-toggle="toggle" data-toggle-class="active" data-toggle-target="#settings" class="btn btn-default">
        <i class="fa fa-spin fa-gear"></i>
    </button>
    <div class="panel-heading">
        Style Selector
    </div>
    <div class="panel-body">
        <!-- start: FIXED HEADER -->
        <div class="setting-box clearfix">
            <span class="setting-title pull-left"> Fixed header</span>
            <span class="setting-switch pull-right">
                <input type="checkbox" class="js-switch" id="fixed-header" />
            </span>
        </div>
        <!-- end: FIXED HEADER -->
        <!-- start: FIXED SIDEBAR -->
        <div class="setting-box clearfix">
            <span class="setting-title pull-left">Fixed sidebar</span>
            <span class="setting-switch pull-right">
                <input type="checkbox" class="js-switch" id="fixed-sidebar" />
            </span>
        </div>
        <!-- end: FIXED SIDEBAR -->
        <!-- start: CLOSED SIDEBAR -->
        <div class="setting-box clearfix">
            <span class="setting-title pull-left">Closed sidebar</span>
            <span class="setting-switch pull-right">
                <input type="checkbox" class="js-switch" id="closed-sidebar" />
            </span>
        </div>
        <!-- end: CLOSED SIDEBAR -->
        <!-- start: FIXED FOOTER -->
        <div class="setting-box clearfix">
            <span class="setting-title pull-left">Fixed footer</span>
            <span class="setting-switch pull-right">
                <input type="checkbox" class="js-switch" id="fixed-footer" />
            </span>
        </div>
        <!-- end: FIXED FOOTER -->
        <!-- start: THEME SWITCHER -->
        <div class="colors-row setting-box">
            <div class="color-theme theme-1">
                <div class="color-layout">
                    <label>
                        <input type="radio" name="setting-theme" value="theme-1">
                        <span class="ti-check"></span>
                        <span class="split header"> <span class="color th-header"></span> <span class="color th-collapse"></span> </span>
                        <span class="split"> <span class="color th-sidebar"><i class="element"></i></span> <span class="color th-body"></span> </span>
                    </label>
                </div>
            </div>
            <div class="color-theme theme-2">
                <div class="color-layout">
                    <label>
                        <input type="radio" name="setting-theme" value="theme-2">
                        <span class="ti-check"></span>
                        <span class="split header"> <span class="color th-header"></span> <span class="color th-collapse"></span> </span>
                        <span class="split"> <span class="color th-sidebar"><i class="element"></i></span> <span class="color th-body"></span> </span>
                    </label>
                </div>
            </div>
        </div>
        <div class="colors-row setting-box">
            <div class="color-theme theme-3">
                <div class="color-layout">
                    <label>
                        <input type="radio" name="setting-theme" value="theme-3">
                        <span class="ti-check"></span>
                        <span class="split header"> <span class="color th-header"></span> <span class="color th-collapse"></span> </span>
                        <span class="split"> <span class="color th-sidebar"><i class="element"></i></span> <span class="color th-body"></span> </span>
                    </label>
                </div>
            </div>
            <div class="color-theme theme-4">
                <div class="color-layout">
                    <label>
                        <input type="radio" name="setting-theme" value="theme-4">
                        <span class="ti-check"></span>
                        <span class="split header"> <span class="color th-header"></span> <span class="color th-collapse"></span> </span>
                        <span class="split"> <span class="color th-sidebar"><i class="element"></i></span> <span class="color th-body"></span> </span>
                    </label>
                </div>
            </div>
        </div>
        <div class="colors-row setting-box">
            <div class="color-theme theme-5">
                <div class="color-layout">
                    <label>
                        <input type="radio" name="setting-theme" value="theme-5">
                        <span class="ti-check"></span>
                        <span class="split header"> <span class="color th-header"></span> <span class="color th-collapse"></span> </span>
                        <span class="split"> <span class="color th-sidebar"><i class="element"></i></span> <span class="color th-body"></span> </span>
                    </label>
                </div>
            </div>
            <div class="color-theme theme-6">
                <div class="color-layout">
                    <label>
                        <input type="radio" name="setting-theme" value="theme-6">
                        <span class="ti-check"></span>
                        <span class="split header"> <span class="color th-header"></span> <span class="color th-collapse"></span> </span>
                        <span class="split"> <span class="color th-sidebar"><i class="element"></i></span> <span class="color th-body"></span> </span>
                    </label> 
                </div>
            </div>
        </div>
        <!-- end: THEME SWITCHER -->
    </div>
</div>
<!-- end: SETTINGS -->

<!-- start: MAIN JAVASCRIPTS -->
<script src="<?php echo base_url(); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>vendor/modernizr/modernizr.js"></script>
<script src="<?php echo base_url(); ?>vendor/jquery-cookie/jquery.cookie.js"></script>
<script src="<?php echo base_url(); ?>vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="<?php echo base_url(); ?>vendor/switchery/switchery.min.js"></script>
<!-- end: MAIN JAVASCRIPTS -->

<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script src="<?php echo base_url(); ?>vendor/select2/select2.min.js"></script>
<!-- <script src="<?php echo base_url(); ?>vendor/DataTables/jquery.dataTables.min.js"></script> -->
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<!-- start: For Print and Export EXCEL, CSV, PDF, COPY DATA -->
<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>table/js/jquery.dataTables.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>table/js/dataTables.jqueryui.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>table/js/dataTables.buttons.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>table/js/buttons.jqueryui.js"></script>

<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>table/js/jszip.min.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>table/js/pdfmake.min.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>table/js/vfs_fonts.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>table/js/buttons.html5.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>table/js/buttons.print.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>table/js/shCore.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>table/js/demo.js"></script>
<!-- end: For Print and Export EXCEL, CSV, PDF, COPY DATA -->

<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script src="<?php echo base_url(); ?>vendor/Chart.js/Chart.min.js"></script>
<script src="<?php echo base_url(); ?>vendor/jquery.sparkline/jquery.sparkline.min.js"></script>
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->

<!-- Start: For Date Picker -->
<script src="<?php echo base_url(); ?>vendor/maskedinput/jquery.maskedinput.min.js"></script>
<script src="<?php echo base_url(); ?>vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
<script src="<?php echo base_url(); ?>vendor/autosize/autosize.min.js"></script>

<script src="<?php echo base_url(); ?>vendor/select2/select2.min.js"></script>
<script src="<?php echo base_url(); ?>vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<script src="<?php echo base_url(); ?>vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
<!-- End: Date Picker --> 

<script src="<?php echo base_url(); ?>vendor/bootstrap-fileinput/jasny-bootstrap.js"></script>


<!-- start: CLIP-TWO JAVASCRIPTS -->
<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
<script src="<?php echo base_url(); ?>assets/js/index.js"></script>

<!-- start: JavaScript Event Handlers for this page -->
 <script src="<?php echo base_url(); ?>assets/js/table-data.js"></script>
 <script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
 <script src="<?php echo base_url(); ?>assets/js/form-elements.js"></script>
<script>
    jQuery(document).ready(function () {
        Main.init();
        //Index.init();
        TableData.init();
        FormElements.init();
    });
</script>
<!-- end: JavaScript Event Handlers for this page -->
<!-- end: CLIP-TWO JAVASCRIPTS -->
</body>
</html>
