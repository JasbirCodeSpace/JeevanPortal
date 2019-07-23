<?php
      $db = mysqli_connect('localhost','root','','USER') or die("unsucessfull");
	  
	  if(!$db)
		  echo "connection unsucessfull"; 
	  else
		  echo "connection sucessfull";
	                
					$userFname = ' aa';
					$userLname= 'aa ';
					$gender = 'aa ';
					$dob = '1998-09-04';
	               $gmail = 'aa@gmail.com';
				    $pswrd_1 = 'aa ';
					$pswrd_2 = 'aa ';
					$contact = '12 ';
					$aadhaar = '12 ';
					$house = ' aa';
					$city = ' aa';
					$pincode = '11';
					$state = 'aa ';
					$country = 'aa ';
					if ($_SERVER['REQUEST_METHOD'] == 'POST'){
						 if ($_POST['submit']){
							 
							 if(!empty($_POST['first-name'])){
							$userFname=$_POST['first-name'] ;
							echo $userFname;
							
						}
						if(!empty($_POST['last-name'])){
						
							$userLname=$_POST['last-name'] ;
							echo $userLname;
							
						}
						if(!empty($_POST['gender'])){
							$gender=$_POST['gender'] ;
							echo $gender;
						}
						if(!empty($_POST['birthday'])){
							$dob=$_POST['birthday'] ;
							echo $dob;
							
						}
						if(!empty($_POST['gmail'])){
							$gmail=$_POST['gmail'] ;
							echo $gmail;
							
						}
						if(!empty($_POST['password_1'])){
							$pswrd_1=$_POST['password_1'] ;
							echo $pswrd_1;
							
						}
						if(!empty($_POST['password_2'])){
							$pswrd_2=$_POST['password_2'] ;
							echo $pswrd_2;
							
						}
						if(!empty($_POST['contact'])){
							$contact=$_POST['contact'] ;
							echo $contact;
						}
						if(!empty($_POST['aadhaar'])){
							$aadhaar=$_POST['aadhaar'] ;
							echo $aadhaar;
						}
						if(!empty($_POST['house'])){
							$house=$_POST['house'] ;
							echo $house;
						}
						if(!empty($_POST['city'])){
							$city=$_POST['city'] ;
							echo $city;
							
						}
						if(!empty($_POST['pincode'])){
							$pincode=$_POST['pincode'] ;
							echo $pincode;
							
						}
						if(!empty($_POST['state'])){
							$state=$_POST['state'] ;
							echo $state;
							
						}
						if(!empty($_POST['country'])){
							$country=$_POST['country'] ;
							echo $country;
							
						}
						
					
					if(strcmp($_POST['password_1'],$_POST['password_2']) == 0){
							mysqli_query($db,"use USER") or die("DIE");
							
	                         $query = "insert into user values('$userFname','$userLname','$gender','$dob','$gmail','$pswrd_1','$contact','$house','$city','$pincode','$state','$country','')";
	          				 mysqli_query($db,$query) or die(mysqli_error($db));

       					     mysqli_query($db,"select * from user;");
						}
						
						}
						}
	   
	  
	  ?>
	  
<html>

 
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>ADMIN | DASHBOARD</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
	
	<!-- pie chart -->
	<script src="../Chart.bundle.js"></script>
	<script src="utils.js"></script>
	<style>
	canvas {
		-moz-user-select: none;
		-webkit-user-select: none;
		-ms-user-select: none;
	}
	</style>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"> <span>JEEVAN | ADMIN</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Jatin Hooda</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="admin_dashboard1.html"><i class="fa fa-home"></i> DASHBOARD </a></li>
                  <li><a href="form1.php"><i class="fa fa-edit"></i> ADD USER </a></li>
				 
                  
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings" style="width:115px">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
             
              <a data-toggle="tooltip" data-placement="top" title="Logout" style="width:115px" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">Jatin Hooda
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>SIGN UP</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                              <button class="btn btn-default" type="button">Go!</button>
                          </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form<small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">


                    <!-- Smart Wizard -->
                    
                    <div id="wizard" class="form_wizard wizard_horizontal">
                      <ul class="wizard_steps">
                        <li>
                          <a href="form1.php">
                            <span class="step_no">1</span>
                            <span class="step_descr">
                                              Step 1<br />
                                              <small>User signup</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="./form2.php">
                            <span class="step_no">2</span>
                            <span class="step_descr">
                                              Step 2<br />
                                              <small>Saathi signup</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="form3.php">
                            <span class="step_no">3</span>
                            <span class="step_descr">
                                              Step 3<br />
                                              <small>Upload Photos</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="form4.php">
                            <span class="step_no">4</span>
                            <span class="step_descr">
                                              Step 4<br />
                                              <small>Confirmation</small>
                                          </span>
                          </a>
                        </li>
                      </ul>
                      <div id="step-1">
					   
                        <form class="form-horizontal form-label-left" action="form1.php" method="POST" id="form1">

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">First Name <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="first-name"name="first-name" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Last Name <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
						  <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div id="gender" class="btn-group" data-toggle="buttons">
                                <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                  <input type="radio" name="gender" value="male" required="required"> &nbsp; Male &nbsp;
                                </label>
                                <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                  <input type="radio" name="gender" value="female" required="required"> Female
                                </label>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="birthday" name="birthday"class="date-picker form-control col-md-7 col-xs-12" required="required" type="date">
                            </div>
                          </div>
						   <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Email Address<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input  type="email" id="gmail" name="gmail" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
						  
						   <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Password<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="password" id="password_1" name="password_1" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
						  
						   <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Re-enter Password<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="password" id="password_2" name="password_2" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
						  
						    <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Contact Number<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="contact" id="contact" name="contact" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
						  
						    <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Aadhaar Number<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="password" id="aadhaar" name="aadhaar" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
						  
						   <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">House Number<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="house" name="house" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
						   <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">City<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="city" name="city" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
						   <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Pin Code<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="number" id="pincode" name="pincode" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
						   <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">State<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="state" name="state" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
						   <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Country<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="country" name="country" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                           
                            <input type="submit" class="btn" value="submit" name="submit" style="position:relative;left:450px;">

                        </form>


                      </div>
                      
                    <!-- End SmartWizard Content -->
          
                  

                    


	
    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- jQuery Smart Wizard -->
    <script src="../vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

	
  </body>
</html>