<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $pageTitle; ?></title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- FontAwesome 4.3.0 -->
    <link href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="<?php echo base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <style>
    	.error{
    		color:red;
    		font-weight: normal;
    	}
    </style>
    <script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript">
        var baseURL = "<?php echo base_url(); ?>";
    </script>
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      
      <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo base_url(); ?>" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>WT</b>&nbsp;GPS</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>WorldTrack</b>&nbsp;GPS</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
		
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
		   <ul class="nav navbar-nav">
		   
              <li class="active"><a href="<?php echo base_url(); ?>dashboard">Dashboard <span class="sr-only">(current)</span></a></li>
			  <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Customers <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="<?php echo base_url(); ?>customerListing">Manage Customers</a></li>
                  <li class="divider"></li>
                  <li><a href="<?php echo base_url(); ?>addNewCustomer">Add Customers</a></li>
                </ul>
              </li>
			  <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Vehicles <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="<?php echo base_url(); ?>vehicleListing">Manage Vehicles</a></li>
                  <li class="divider"></li>
                  <li><a href="<?php echo base_url(); ?>addNewVehicle">Add Vehicles</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Reports <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="<?php echo base_url(); ?>reportLitsing">Manage Reports</a></li>
                  <li class="divider"></li>
                  <li><a href="<?php echo base_url(); ?>invoiceListing">Manage Invoices</a></li>
                </ul>
              </li>
            </ul>
          <div class="navbar-custom-menu">
		  
            <ul class="nav navbar-nav">
			<li class="nav-item" style="padding-top:10px;">
                    <form class="form-inline my-2 my-lg-0 mr-lg-2">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                        <button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
                    </span>
                        </div>
                    </form>
                </li>
				 <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success">4</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 4 messages</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li><!-- start message -->
                        <a href="#">
                          <div class="pull-left">
                            <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            Amit Jadega
                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                          </h4>
                          <p>Call me whatever you can...</p>
                        </a>
                      </li><!-- end message -->
					  <li><!-- start message -->
                        <a href="#">
                          <div class="pull-left">
                            <img src="<?php echo base_url(); ?>assets/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            Rasmi Ji
                            <small><i class="fa fa-clock-o"></i> 6 mins</small>
                          </h4>
                          <p>I got your mesage Bro</p>
                        </a>
                      </li><!-- end message -->
					  <li><!-- start message -->
                        <a href="#">
                          <div class="pull-left">
                            <img src="<?php echo base_url(); ?>assets/dist/img/user1-128x128.jpg" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            Gurudayal Singh
                            <small><i class="fa fa-clock-o"></i> 11 mins</small>
                          </h4>
                          <p>Hello, Plz call me when you read my message</p>
                        </a>
                      </li><!-- end message -->
					  <li><!-- start message -->
                        <a href="#">
                          <div class="pull-left">
                            <img src="<?php echo base_url(); ?>assets/dist/img/user7-128x128.jpg" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            Veenita Dwiwedi
                            <small><i class="fa fa-clock-o"></i> 15 mins</small>
                          </h4>
                          <p>Plz, send vehicle for GPS Instalation.</p>
                        </a>
                      </li><!-- end message -->
                      ...
                    </ul>
                  </li>
                  <li class="footer"><a href="#">See All Messages</a></li>
                </ul>
              </li>
              <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">5</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 5 notifications</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li>
                        <a href="#">
                          <i class="ion ion-ios-people info"></i> Vehicles UP17 RT 6780 Renewal required.
                        </a>
                      </li>
                      ...
                    </ul>
                  </li>
				  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li>
                        <a href="#">
                          <i class="ion ion-ios-people info"></i> Vehicles UP17 RT 6780 GPS Devices not Active.
                        </a>
                      </li>
                      ...
                    </ul>
                  </li>
				  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li>
                        <a href="#">
                          <i class="fa fa-envelope"></i> Vehicles UP60 RT 1280 Renewal required.
                        </a>
                      </li>
                      ...
                    </ul>
                  </li>
				  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li>
                        <a href="#">
                          <i class="ion ion-ios-people info"></i> Vehicles UP15 RT 9080 Sim card not working.
                        </a>
                      </li>
                      ...
                    </ul>
                  </li>
				  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li>
                        <a href="#">
                          <i class="fa fa-file"></i> 3 New Reports Generated for Vehicles UP13 RT 6080.
                        </a>
                      </li>
                      ...
                    </ul>
                  </li>
                  <li class="footer"><a href="#">View all</a></li>
                </ul>
              </li>
              
              <li class="dropdown tasks-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                  <i class="fa fa-history"></i>
                </a>
				
                <ul class="dropdown-menu">
                  <li class="header"> Last Login : <i class="fa fa-clock-o"></i> <?= empty($last_login) ? "First Time Login" : $last_login; ?></li>
                </ul>
              </li>
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo base_url(); ?>assets/dist/img/avatar.png" class="user-image" alt="User Image"/>
                  <span class="hidden-xs"><?php echo $name; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    
                    <img src="<?php echo base_url(); ?>assets/dist/img/avatar.png" class="img-circle" alt="User Image" />
                    <p>
                      <?php echo $name; ?>
                      <small><?php echo $role_text; ?></small>
                    </p>
                    
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="<?php echo base_url(); ?>profile" class="btn btn-warning btn-flat"><i class="fa fa-user-circle"></i> Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="<?php echo base_url(); ?>logout" class="btn btn-default btn-flat"><i class="fa fa-sign-out"></i> Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
	  
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li>
              <a href="<?php echo base_url(); ?>dashboard">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span></i>
              </a>
            </li>
            <!--<li>
              <a href="#" >
                <i class="fa fa-plane"></i>
                <span>New Task</span>
              </a>
            </li>-->
            <!--<li>
              <a href="#" >
                <i class="fa fa-ticket"></i>
                <span>My Tasks</span>
              </a>
            </li>-->
            <!--<li class="treeview">
              <a href="#">
                <i class="fa fa-share"></i> <span>Multilevel</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                <li class="treeview">
                  <a href="#"><i class="fa fa-circle-o"></i> Level One
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                    <li class="treeview">
                      <a href="#"><i class="fa fa-circle-o"></i> Level Two
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                      </a>
                      <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
              </ul>
            </li>-->
            <?php
            if($role == ROLE_ADMIN || $role == ROLE_MANAGER)
            {
            ?>
           <!-- <li>
              <a href="#" >
                <i class="fa fa-thumb-tack"></i>
                <span>Task Status</span>
              </a>
            </li>
            <li>
              <a href="#" >
                <i class="fa fa-upload"></i>
                <span>Task Uploads</span>
              </a>
            </li>-->
            <?php
            }
            if($role == ROLE_ADMIN)
            {
            ?>
			
			<li class="treeview">
              <a href="#"><span><i class="ion ion-person"></i>&nbsp;&nbsp;Manage Customers</span></a>
              <ul class="treeview-menu icon">
                <li><i class="fa fa-circle-o"></i>&nbsp;&nbsp;<a href="<?php echo base_url(); ?>customerListing">Customers Listing</a></li>
                <li><i class="fa fa-arrow-circle-right"></i>&nbsp;&nbsp;<a href="<?php echo base_url(); ?>addNewCustomer">Add Customers</a></li>
              </ul>
            </li>
			
			<li class="treeview">
              <a href="#"><span><i class="fa fa-car"></i>&nbsp;&nbsp;Manage Vehicles</span></a>
              <ul class="treeview-menu icon">
                <li><i class="fa fa-arrow-circle-right"></i>&nbsp;&nbsp;<a href="<?php echo base_url(); ?>vehicleListing">Vehicles Listing</a></li>
                <li><a href="<?php echo base_url(); ?>addNewVehicle">Add Vehicle</a></li>
              </ul>
            </li>
			
			<li class="treeview">
              <a href="#"><span><i class="fa fa-files-o"></i>&nbsp;&nbsp;Manage Reports</span></a>
              <ul class="treeview-menu icon">
                <li><a href="<?php echo base_url(); ?>reportListing">Reports Listing</a></li>
                <li><a href="<?php echo base_url(); ?>invoiceListing">Manage Invoices</a></li>
              </ul>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>userListing">
                <i class="fa fa-users"></i>
                <span>Manage Users</span>
              </a>
            </li>
			
            
            <?php
            }
            ?>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>