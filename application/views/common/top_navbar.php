<header class="navbar navbar-default navbar-static-top">
    <!-- start: NAVBAR HEADER -->
    <div class="navbar-header">
        <a href="#" class="sidebar-mobile-toggler pull-left hidden-md hidden-lg btn btn-navbar sidebar-toggle" data-toggle-class="app-slide-off" data-toggle-target="#app" data-toggle-click-outside="#sidebar">
            <i class="ti-align-justify"></i>
        </a>
        <a class="navbar-brand" href="<?php echo base_url()."dashboard"; ?>">
            <img style="width: 70px" src="<?php echo base_url(); ?>assets/images/Logo-Bag.gif" alt="Micron Techno BD" />
        </a>
        <a href="#" class="sidebar-toggler pull-right visible-md visible-lg" data-toggle-class="app-sidebar-closed" data-toggle-target="#app">
            <i class="ti-align-justify"></i>
        </a>
        <a class="pull-right menu-toggler visible-xs-block" id="menu-toggler" data-toggle="collapse" href=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <i class="ti-view-grid"></i>
        </a>
    </div>
    <!-- end: NAVBAR HEADER -->
    <!-- start: NAVBAR COLLAPSE -->
    <div class="navbar-collapse collapse">
        <div class="home">
            <div class="pull-left"  style="margin-top: 15px;">
                <a class="btn btn-primary" href="<?php echo base_url(); ?>">HOME</a>
            </div>
        </div>
        <ul class="nav navbar-right">
            
            <!-- start: USER OPTIONS DROPDOWN -->
            

            <li class="dropdown current-user">
                <a href="" class="dropdown-toggle" data-toggle="dropdown">
                    <?php $profile_picture=$this->session->userdata("profile_picture"); ?>
                    <img src="<?php echo base_url()."uploads/profile_picture/thumbs/"; ?><?php if(!empty($profile_picture)) echo $profile_picture; ?>" alt="Peter"> <span class="username"><?php $username = $this->session->userdata("username"); echo $username; ?> <i class="ti-angle-down"></i></span>
                </a>
                <ul class="dropdown-menu dropdown-dark">
                    <li>
                        <a href="<?php echo base_url()."auth/my_profile";?>">
                            My Profile
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo base_url()."auth/logout"; ?>">
                            Log Out
                        </a>
                    </li>
                </ul>
            </li>
            <!-- end: USER OPTIONS DROPDOWN -->
        </ul>
        
    </div>
   
</header>