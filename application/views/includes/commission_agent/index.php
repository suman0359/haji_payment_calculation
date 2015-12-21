

<div class="main-content" >
    <div class="wrap-content container" id="container">
        <!-- start: PAGE TITLE -->
        <section id="page-title">
            <div class="row">
                <!-- <div class="col-sm-8">
                    <h1 class="mainTitle">Advanced Data Tables</h1>
                    <span class="mainDescription">Refers to data arranged in rows and columns. A spreadsheet, for example, is a table. In relational database management systems, all information is stored in the form of tables. <small class="block">Webopedia - Online Tech Dictionary for IT Professionals</small></span>
                </div> -->
                <ol class="breadcrumb">
                    <li>
                        <span>Tables</span>
                    </li>
                    <li class="active">
                        <span>Data Tables</span>
                    </li>
                </ol>
            </div>
        </section>
        <!-- end: PAGE TITLE -->
        <!-- start: DYNAMIC TABLE -->
        <div class="container-fluid container-fullw bg-white">
            <div class="row">
                <div class="col-md-12">
                    <h5 class="over-title margin-bottom-15">Basic <span class="text-bold">Data Table</span></h5>
                    <p>
                        DataTables is a plug-in for the jQuery Javascript library. It is a highly flexible tool, based upon the foundations of progressive enhancement, and will add advanced interaction controls to any HTML table.
                    </p>
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
                                    <a href="<?php echo base_url(); ?>commission_agent/update_form/<?php echo $value->id; ?>" class="btn btn-primary" onclick="return confirm('Do you want to allow him to');">Delete</a>
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
</div>

