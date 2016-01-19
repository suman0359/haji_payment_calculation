<!--sidebar -->
<div class="sidebar app-aside" id="sidebar">
    <div class="sidebar-container perfect-scrollbar">
        <nav>
            <!-- start: SEARCH FORM -->
            <!-- <div class="search-form">
                <a class="s-open" href="#">
                    <i class="ti-search"></i>
                </a>
                <form class="navbar-form" role="search">
                    <a class="s-remove" href="#" target=".navbar-form">
                        <i class="ti-close"></i>
                    </a>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search...">
                        <button class="btn search-button" type="submit">
                            <i class="ti-search"></i>
                        </button>
                    </div>
                </form>
            </div> -->


            <!-- end: SEARCH FORM -->
            <!-- start: MAIN NAVIGATION MENU -->
            <!-- <div class="navbar-title">
                <span>Main Navigation</span>
            </div> -->
            <ul class="main-navigation-menu">
                <li class="active open">
                    <a href="<?php echo base_url()."dashboard"; ?>">
                        <div class="item-content">
                            <div class="item-media">
                                <i class="ti-home"></i>
                            </div>
                            <div class="item-inner">
                                <span class="title"> Dashboard </span>
                                <span class="pull-right">HOME</span>
                            </div>
                        </div>
                    </a>
                </li>
                
                <li class="open">
                    <a href="javascript:void(0)">
                        <div class="item-content">
                            <div class="item-media">
                                <i class="ti-user"></i>
                            </div>
                            <div class="item-inner">
                                <span class="title"> HAJJI Or OMRA Information </span><i class="icon-arrow"></i>
                            </div>
                        </div>
                    </a>
                    <ul class="sub-menu"  style="display: block;">
                        <li>
                            <a href="<?php echo base_url()."haji_info"; ?>">
                                <span class="title">HAJJI Or OMRA List</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url()."haji_info/add_form"; ?>">
                                <span class="title">ADD/Registration New HAJI OR OMRA</span>
                            </a>
                            <hr>
                        </li>
                        
                    </ul>
                </li>

                <li class="open">
                    <a href="javascript:void(0)">
                        <div class="item-content">
                            <div class="item-media">
                                <i class="ti-layout-grid2"></i>
                            </div>
                            <div class="item-inner">
                                <span class="title"> Collection Report </span><i class="icon-arrow"></i>
                            </div>
                        </div>
                    </a>
                    <ul class="sub-menu"  style="display: block;">

                        <li>
                            <a href="<?php echo base_url(); ?>payment_collection/money_receipt_index">
                                <span class="title">Money Receipt Information</span>
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo base_url(); ?>payment_collection/date_report">
                                <span class="title">Daily/ Monthly/Yearly Collection Statement</span>
                                <hr>
                            </a>
                            
                        </li>

                        <li>
                            <a href="<?php echo base_url(); ?>expense/expense_statement">
                                <span class="title">Expense Statement</span>
                            </a>
                            <hr>
                        </li>

                        <!-- <li>
                            <a href="<?php echo base_url(); ?>payment_collection/index">
                                <span class="title">Payment Information</span>
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo base_url(); ?>payment_collection/add_form">
                                <span class="title">Entry Form</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>payment_collection/due_collection">
                                <span class="title">Due Collection </span>
                            </a>
                        </li> -->
                        
                    </ul>
                </li>
                
                
                
                <li class="open">
                    <a href="javascript:void(0)">
                        <div class="item-content">
                            <div class="item-media">
                                <i class="ti-pencil-alt"></i>
                            </div>
                            <div class="item-inner">
                                <span class="title"> Expense Information </span><i class="icon-arrow"></i>
                            </div>
                        </div>
                    </a>

                    <ul class="sub-menu"  style="display: block;">

                        <!-- <li>
                            <a href="<?php echo base_url()."expense"; ?>">
                                <span class="title">Expense Information</span>
                            </a>
                        </li> -->
                        <li>
                            <a href="<?php echo base_url()."expense/group_entry_index"; ?>">
                                <span class="title">Expense Group List/ Entry</span>
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo base_url()."expense/expense_head_entry_index"; ?>">
                                <span class="title">Expense Head List/ Entry</span>
                            </a>
                        </li>  

                        <li>
                            <a href="<?php echo base_url()."expense/expense_entry_index"; ?>">
                                <span class="title">Expense List/ Entry</span>
                            </a>
                        </li>
                        <hr>
                       <!--  <li>
                            <a href="<?php echo base_url()."expense/expense_group_entry"; ?>">
                                <span class="title">Expense Group Entry Form</span>
                            </a>
                        </li>	
                        <hr>
                        						
                        <li>
                            <a href="<?php echo base_url()."expense/expense_head_entry"; ?>">
                                <span class="title">Expense Head Entry Form</span>
                            </a>
                        </li>
                        <hr>
                        
                        <li>
                            <a href="<?php echo base_url()."expense/expense_entry_form"; ?>">
                                <span class="title">Expense Entry Form</span>
                            </a>
                        </li> -->
                        
                    </ul>
                </li>

                <!-- Expense Statement -->
                <li class="open">
                    <a href="javascript:void(0)">
                        <div class="item-content">
                            <div class="item-media">
                                <i class="ti-settings"></i>
                            </div>
                            <div class="item-inner">
                                <span class="title"> Expense Statement </span><i class="icon-arrow"></i>
                            </div>
                        </div>
                    </a>
                    <ul class="sub-menu"  style="display: block;">
                        <li>
                            <a href="<?php echo base_url(); ?>expense/expense_statement">
                                <span class="title">Daily/Monthly Expense Statement </span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>payment_collection/summery_report">
                                <span class="title">Daily Summery Report</span>
                            </a>
                        </li>

                        <hr>
                    </ul>
                </li>
                <!-- Expense Statement -->

                <li class="open">
                    <a href="javascript:void(0)">
                        <div class="item-content">
                            <div class="item-media">
                                <i class="ti-settings"></i>
                            </div>
                            <div class="item-inner">
                                <span class="title"> Commission Agent Information </span><i class="icon-arrow"></i>
                            </div>
                        </div>
                    </a>
                    <ul class="sub-menu"  style="display: block;">
                        <li>
                            <a href="<?php echo base_url(); ?>commission_agent">
                                <span class="title">Commission Agent List </span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>commission_agent/add_form">
                                <span class="title"> Add New Commission Agent </span>
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo base_url(); ?>commission_agent/add_form">
                                <span class="title">Commission Agent Payment Report</span>
                            </a>
                        </li>
                        
                        <hr>
                    </ul>
                </li>

                <li class="open">
                    <a href="javascript:void(0)">
                        <div class="item-content">
                            <div class="item-media">
                                <i class="ti-user"></i>
                            </div>
                            <div class="item-inner">
                                <span class="title"> Income Head </span><i class="icon-arrow"></i>
                            </div>
                        </div>
                    </a>
                    <ul class="sub-menu"  style="display: block;">
                        <li>
                            <a href="<?php echo base_url()."income/group_index"; ?>">
                                <span class="title"> Income Group Details</span>
                            </a>

                        </li>
                        <li>
                            <a href="<?php echo base_url()."income/group_form"; ?>">
                                <span class="title"> Income Group Entry Form </span>
                                <hr>
                            </a>
                            
                        </li>
                        <li>
                            <a href="<?php echo base_url()."income/head_index"; ?>">
                                <span class="title"> Income Head Details </span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url()."income/head_form"; ?>">
                                <span class="title"> Income Head Entry Form </span>
                            </a>
                        </li>
                        
                    </ul>
                </li>


                <li class="open">
                    <a href="javascript:void(0)">
                        <div class="item-content">
                            <div class="item-media">
                                <i class="ti-user"></i>
                            </div>
                            <div class="item-inner">
                                <span class="title"> Loan Information </span><i class="icon-arrow"></i>
                            </div>
                        </div>
                    </a>

                    <ul class="sub-menu"  style="display: block;">

                        <li>
                            <a href="<?php echo base_url()."loan/user_list"; ?>">
                                <span class="title"> Loan User Information </span>
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo base_url()."loan/add_loan_paid_form"; ?>">
                                <span class="title"> Add New User </span>
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo base_url()."loan/loan_paid_info"; ?>">
                                <span class="title"> Loan Paid Information </span>
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo base_url()."loan/loan_paid_form"; ?>">
                                <span class="title"> Loan Paid Form </span>
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo base_url()."loan/loan_receive_info"; ?>">
                                <span class="title"> Loan Receive Information </span>
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo base_url()."loan/loan_receive_form"; ?>">
                                <span class="title"> Loan Receive Form </span>
                            </a>
                        </li>
                        
                        
                    </ul>
                </li>
               
        </nav>
    </div>
</div>
<!-- / sidebar