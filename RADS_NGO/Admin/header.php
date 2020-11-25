
<?php include('session_validate.php'); ?>
<!-- Body -->
    <!-- In the PHP version you can set the following options from the config file -->
    <!-- Add the class .hide-side-content to <body> to hide side content by default -->
    <body>
        <!-- Page Container -->
        <!-- In the PHP version you can set the following options from the config file -->
        <!-- Add the class .full-width for a full width page -->
        <div id="page-container" class="full-width">
            <!-- Header -->
            <!-- In the PHP version you can set the following options from the config file -->
            <!-- Add the class .navbar-fixed-top or .navbar-fixed-bottom for a fixed header on top or bottom respectively -->
            <!-- If you add the class .navbar-fixed-top remember to add the class .header-fixed-top to <body> element! -->
            <!-- If you add the class .navbar-fixed-bottom remember to add the class .header-fixed-bottom to <body> element! -->
            <!-- <header class="navbar navbar-inverse navbar-fixed-top"> -->
            <!-- <header class="navbar navbar-inverse navbar-fixed-bottom"> -->
            <header class="navbar navbar-inverse">
                <!-- Navbar Inner -->
                <div class="navbar-inner">
                    <!-- div#row-fluid -->
                    <div class="row-fluid">
                        <!-- Sidebar Toggle Buttons (Desktop & Tablet) -->
                        <div class="span4 hidden-phone">
                            <ul class="nav pull-left">
                                <!-- Desktop Button (Visible only on desktop resolutions) -->
                                <li class="visible-desktop">
                                    <a href="javascript:void(0)" id="toggle-side-content">
                                        <i class="icon-reorder"></i>
                                    </a>
                                </li>
                                <!-- END Desktop Button -->

                                <!-- Tablet Button -->
                                <li class="visible-tablet">
                                    <!-- It is set to open and close the left sidebar on tablets. The class .nav-collapse was added to aside#page-sidebar -->
                                    <a href="javascript:void(0)" data-toggle="collapse" data-target=".nav-collapse">
                                        <i class="icon-reorder"></i>
                                    </a>
                                </li>
                                <!-- END Tablet Button -->

                                <!-- Divider -->
                                <li class="divider-vertical remove-margin"></li>
                            </ul>
                        </div>
                        <!-- END Sidebar Toggle Buttons -->

                        <!-- Brand and Search Section -->
                        <div class="span4 text-center">
                            <!-- Top search -->
                            	
                            <!-- END Top search -->

                            <!-- Logo -->
                            <a href="home.php" class="brand">
                                RADS NGO
                            </a>
                            <!-- END Logo -->

                            <!-- Loading Indicator, Used for demostrating how loading of notifications could happen, check main.js - uiDemo() -->
                            <div id="loading" class="hide"><i class="icon-spinner icon-spin"></i></div>
                        </div>
                        <!-- END Brand and Search Section -->

                        <!-- Header Nav Section -->
                        <div id="header-nav-section" class="span4 clearfix">
                            <!-- Header Nav -->
                            <ul class="nav pull-right">

								 <!-- Notifications -->
                                <li class="dropdown dropdown-notifications">
                                   
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="alert">
                                                <i class="icon-bell"></i> <strong><a href="board_members_view.php">Services</a></strong> 
                                            </div>
                                            <div class="alert alert-error">
                                                <i class="icon-bell-alt"></i> <strong><a href="local_body_view.php">Products</a></strong> 
                                            </div>
                                            <div class="alert alert-info">
                                                <i class="icon-bolt"></i> <strong><a href="chairmen_view.php">Clients</a></strong> 
                                            </div>
                                            <div class="alert alert-success">
                                                <i class="icon-bullhorn"></i> <strong><a href="associates_view.php">Associates</a></strong> 
                                            </div>
                                        </li>
                                        
                                    </ul>
                                </li>
                                <!-- END Notifications -->
                                <li class="divider-vertical remove-margin"></li>
                                   <!-- Notifications -->


                                <!-- Notifications -->
                                <li class="dropdown dropdown-notifications">
                                    
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="alert">
                                                <i class="icon-bell"></i> <strong><a href="?page_id=17">Testimonials</a></strong> 
                                            </div>
                                            <div class="alert alert-error">
                                                <i class="icon-bell-alt"></i> <strong><a href="?page_id=17">Success Stories</a></strong> 
                                            </div>
                                        </li>
                                        
                                    </ul>
                                </li>
                                <!-- END Notifications -->
                                <li class="divider-vertical remove-margin"></li>								
								   
                                <li class="dropdown dropdown-notifications">
                                    
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="alert">
                                                <i class="icon-bell"></i> <strong><a href="news_view.php">News</a></strong> 
                                            </div>
                                        </li>
                                        
                                    </ul>
                                   
                                </li>
                                <!-- END Notifications -->
                                <li class="divider-vertical remove-margin"></li>								
								
                             <li class="dropdown dropdown-notifications">
                                   <a href="" class="dropdown-toggle" data-toggle="dropdown">Sign Out</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="alert alert-error">
                                                <i class="icon-bell-alt"></i> <strong><a href="../logout.php">Log Out</a></strong> 
                                            </div>
                                        </li>
                                        
                                    </ul>
 
                                </li>
                                <!-- END Notifications -->
							 
                            </ul>
                            <!-- END Header Nav -->

                            <!-- Mobile Navigation, Shows up on mobile -->
                            <ul class="nav pull-left visible-phone">
                                <li>
                                    <!-- It is set to open and close the main navigation on mobiles. The class .nav-collapse was added to aside#page-sidebar -->
                                    <a href="javascript:void(0)" data-toggle="collapse" data-target=".nav-collapse">
                                        <i class="icon-reorder"></i>
                                    </a>
                                </li>
                                <li class="divider-vertical remove-margin"></li>
                            </ul>
                            <!-- END Mobile Navigation, Shows up on mobile -->
                        </div>
                        <!-- END Header Nav Section -->

                            <!-- Mobile Navigation, Shows up on mobile -->
                            <ul class="nav pull-left visible-phone">
                                <li>
                                    <!-- It is set to open and close the main navigation on mobiles. The class .nav-collapse was added to aside#page-sidebar -->
                                    <a href="javascript:void(0)" data-toggle="collapse" data-target=".nav-collapse">
                                        <i class="icon-reorder"></i>
                                    </a>
                                </li>
                                <li class="divider-vertical remove-margin"></li>
                            </ul>
                            <!-- END Mobile Navigation, Shows up on mobile -->
                        </div>
                        <!-- END Header Nav Section -->
                    </div>
                    <!-- END div#row-fluid -->
                </div>
                <!-- END Navbar Inner -->
            </header>
            <!-- END Header -->
            <!-- Left Sidebar -->
            <!-- In the PHP version you can set the following options from the config file -->
            <!-- Add the class .sticky for a sticky sidebar -->
            <aside id="page-sidebar" class="nav-collapse collapse">
                <!--
                Wrapper for scrolling functionality
                Used only if the .sticky class added above. You can remove it and you will have a sticky sidebar
                without scrolling enabled when you set the sidebar to be sticky
                -->
                <div class="side-scrollable">
                    <!-- Mini Profile -->
                    <div class="mini-profile">
                        <div class="mini-profile-options">
                            <a href="home.php" class="badge badge-info loading-on" data-toggle="tooltip" data-placement="right" title="Refresh">
                                <i class="icon-refresh"></i>
                            </a>
                            
                            <!-- Modal div is at the bottom of the page before including javascript code, we use .enable-tooltip class for the tooltip because data-toggle is used for modal -->
                           
                            <a href="../logout.php" class="badge badge-important" data-toggle="tooltip" data-placement="right" title="Log out">
                                <i class="icon-signout"></i>
                            </a>
                        </div>
                        <a href="home.php">
                            <img src="img/template/avatar2.jpg" alt="Avatar" class="img-circle">
                        </a>
                    </div>
                    <!-- END Mini Profile -->
