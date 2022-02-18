 

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dicetutor";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['X']))
   {   
               
				$clientname                =  ($_POST['clientname']);
				
				$que1=mysqli_query($conn,"SELECT * FROM `attendance` WHERE clientname = '$clientname' ");
				$count1=mysqli_num_rows($que1);
			
				if($count1>0)
				 {
		
					      $tutorname =$_POST['tutorname']; 
						  $sql = ("SELECT * FROM serviceadd WHERE tutorname = '$tutorname'");
						  $result = mysqli_query($conn, $sql);
						
						 if (mysqli_num_rows($result) > 0) {
							 // output data of each row
							 while($row = mysqli_fetch_assoc($result)) {		
								    $price = $row['price'];
								    $salary = $row['salary'];
									$interest = $row['interest'];
									
									$hold    = ($price * 0.3);
									$percent = ($price - $hold);
									//-------------update---------------------------	
									echo'$hold';
									$percentage = ($hold + $interest);
									$payment    = ($percent + $salary);
										
									echo'$percentage';	
			                        //----------------------------------------------
									$clientname =$_POST['clientname'];
									$attendance =$_POST['attendance'];
									
									$conn = mysqli_connect("localhost", "root", "");
									if (!$conn) { die('Could not connect: ' . mysqli_error()); }
									$db = mysqli_select_db($conn, "dicetutor");
									$query=("UPDATE serviceadd SET salary='".$payment."',interest='".$percentage."',attendances='".$attendance."' WHERE tutorname='".$tutorname."' ");
									$result = mysqli_query($conn,$query);
									  if($result)
										  {
											header("Location: confirm3Message.php");
										  }
										  else
										  {
											header("Location: uploadphoto.php");
										  }
											mysqli_close($con);
															
						//-----------------------------------------
									
							}
						 } else {
							 echo "0000 results";
						 }
				 }
				
   }
?>
						

 <?php include_once("phpscript.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Dicetutors</title>
        <link type="text/css" href="file:///C|/Users/Software Engineer/Desktop/school/dicetutor7.0/resources/views/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="file:///C|/Users/Software Engineer/Desktop/school/dicetutor7.0/resources/views/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="file:///C|/Users/Software Engineer/Desktop/school/dicetutor7.0/resources/views/css/theme.css" rel="stylesheet">
        <link type="text/css" href="file:///C|/Users/Software Engineer/Desktop/school/dicetutor7.0/resources/views/images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap-responsive.min.css">
		<link rel="stylesheet" href="css/theme.css">
		<link rel="stylesheet" href="css/font-awesome.css">
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href=""> <img src="/images/Dice Tutuors.png" height="50" width="110" alt=""></a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <ul class="nav nav-icons">
                            <li class="active"><a href="#"><i class="icon-envelope"></i></a></li>
                            <li><a href="#"><i class="icon-eye-open"></i></a></li>
                            <li><a href="#"><i class="icon-bar-chart"></i></a></li>
                        </ul>
                        <form class="navbar-search pull-left input-append" action="#">
                        <input type="text" class="span3">
                        <button class="btn" type="button">
                            <i class="icon-search"></i>
                        </button>
                        </form>
                        <ul class="nav pull-right">
                      
                            <li style="color:blue;position:absolute; font-size:18px; font-family:'Times New Roman', Times, serif; width:150px; right:110px; top:19px;"> <?php $_SESSION['name'] . " " . "Teacher";?></li>
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="file:///C|/Users/Software Engineer/Desktop/school/dicetutor7.0/resources/views/images/user.png" class="nav-avatar" />
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="file:///C|/Users/Software Engineer/Desktop/school/dicetutor7.0/resources/views/updateRegister">Update Profile</a></li>
                                    <li><a href="file:///C|/Users/Software Engineer/Desktop/school/dicetutor7.0/resources/views/viewpayment2">Wallets</a></li>
                                    <li><a href="file:///C|/Users/Software Engineer/Desktop/school/dicetutor7.0/resources/views/viewrequest">WIP/existing Contract</a></li>
                                    <li><a href="file:///C|/Users/Software Engineer/Desktop/school/dicetutor7.0/resources/views/Attendances">Delivered Service</a></li>
                                    <li><a href="file:///C|/Users/Software Engineer/Desktop/school/dicetutor7.0/resources/views/ReferralTable">Referral link</a></li>
                                    <li><a href="#">Support</a></li>	
                                    <li class="divider"></li>
                                    <li><a href="/logout1">Logout</a></li>
                                </ul>
                            </li>
                           
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper" >
            <div class="container">
                <div class="row" >
                    <div class="span3">
                        <div class="sidebar" >
                           
                            <!--/.widget-nav-->
                            <ul class="widget widget-menu unstyled">
                                <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-cog">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right" style="color:white;">
                                </i>Manage Services </a>
                                    <ul id="togglePages" class="collapse unstyled">
                                    <li><a href="{{'TeacherDashboard'}}"><i class="icon-inbox"></i>Dashboard </a></li>
                                        <li><a href="file:///C|/Users/Software Engineer/Desktop/school/dicetutor7.0/resources/views/accountverify"><i class="icon-inbox"></i>Verify Account </a></li>
                                        <li><a href="file:///C|/Users/Software Engineer/Desktop/school/dicetutor7.0/resources/views/addservice"><i class="icon-inbox"></i>Add Service</a></li>
                                        <li><a href="file:///C|/Users/Software Engineer/Desktop/school/dicetutor7.0/resources/views/AttendanceUpdate"><i class="icon-inbox"></i>Daily Attendance </a></li>
                                        <li><a href="file:///C|/Users/Software Engineer/Desktop/school/dicetutor7.0/resources/views/viewattendance"><i class="icon-inbox"></i>view Attendance Single </a></li>
                                        <li><a href="file:///C|/Users/Software Engineer/Desktop/school/dicetutor7.0/resources/views/viewattendance2"><i class="icon-inbox"></i>view Attendance List </a></li>
                                        
                                        <li><a href="file:///C|/Users/Software Engineer/Desktop/school/dicetutor7.0/resources/views/viewrequest"><i class="icon-inbox"></i>View Service Request </a></li>              
                                        <li><a href="file:///C|/Users/Software Engineer/Desktop/school/dicetutor7.0/resources/views/disputeTeacher"><i class="icon-inbox"></i>Dispute Message To Devosta</a></li>
                                     
                                       
                                    </ul>
                                </li>
                                <li><a href="file:///C|/Users/Software Engineer/Desktop/school/dicetutor7.0/resources/views/logout1"><i class="menu-icon icon-signout"></i>Logout </a></li>
                            </ul>
                        </div>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
                            <div class="btn-controls">
                                <div class="btn-box-row row-fluid">
                                    <a href="#" class="btn-box big span4"><i class=" icon-random"></i><b>65%</b>
                                        <p class="text-muted">
                                            Growth</p>
                                    </a><a href="#" class="btn-box big span4"><i class="icon-user"></i><b>15</b>
                                        <p class="text-muted">
                                            New Users</p>
                                    </a><a href="#" class="btn-box big span4"><i class="icon-money"></i><b>15,152</b>
                                        <p class="text-muted">
                                            Profit</p>
                                    </a>
                                </div>
                                <div class="btn-box-row row-fluid">
                                    <div class="span8">
                                        <div class="row-fluid">
                                            <div class="span12">
                                                <a href="#" class="btn-box small span4"><i class="icon-envelope"></i><b>Messages</b>
                                                </a><a href="#" class="btn-box small span4"><i class="icon-group"></i><b>Clients</b>
                                                </a><a href="#" class="btn-box small span4"><i class="icon-exchange"></i><b>Expenses</b>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row-fluid">
                                            <div class="span12">
                                                <a href="#" class="btn-box small span4"><i class="icon-save"></i><b>Total Sales</b>
                                                </a><a href="#" class="btn-box small span4"><i class="icon-bullhorn"></i><b>Social Feed</b>
                                                </a><a href="#" class="btn-box small span4"><i class="icon-sort-down"></i><b>Bounce
                                                    Rate</b> </a>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="widget widget-usage unstyled span4">
                                        <li>
                                            <p>
                                                <strong>Windows 8</strong> <span class="pull-right small muted">78%</span>
                                            </p>
                                            <div class="progress tight">
                                                <div class="bar" style="width: 78%;">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <p>
                                                <strong>Mac</strong> <span class="pull-right small muted">56%</span>
                                            </p>
                                            <div class="progress tight">
                                                <div class="bar bar-success" style="width: 56%;">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <p>
                                                <strong>Linux</strong> <span class="pull-right small muted">44%</span>
                                            </p>
                                            <div class="progress tight">
                                                <div class="bar bar-warning" style="width: 44%;">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <p>
                                                <strong>iPhone</strong> <span class="pull-right small muted">67%</span>
                                            </p>
                                            <div class="progress tight">
                                                <div class="bar bar-danger" style="width: 67%;">
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--/#btn-controls-->
                            
                            <!--/.module-->
                            
                            
                            <!--/.module-->
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
        @yield('footer')  
		<script type="text/javascript" src="/js/jquery-1.9.1.min.js"></script> 
	    <script type="text/javascript" src="/js/jquery-ui-1.10.1.custom.min.js"></script> 
		<script type="text/javascript" src="/js/bootstrap.min.js"></script> 
		<script type="text/javascript" src="/js/flot/jquery.flot.js"></script> 
		<script type="text/javascript" src="/js/flot/jquery.flot.resize.js"></script> 
		<script type="text/javascript" src="/js/datatables/jquery.dataTables.js"></script> 
		<script type="text/javascript" src="/js/common.js"></script> 
        <script src="file:///C|/Users/Software Engineer/Desktop/school/dicetutor7.0/resources/views/scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="file:///C|/Users/Software Engineer/Desktop/school/dicetutor7.0/resources/views/scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="file:///C|/Users/Software Engineer/Desktop/school/dicetutor7.0/resources/views/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="file:///C|/Users/Software Engineer/Desktop/school/dicetutor7.0/resources/views/scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="file:///C|/Users/Software Engineer/Desktop/school/dicetutor7.0/resources/views/scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="file:///C|/Users/Software Engineer/Desktop/school/dicetutor7.0/resources/views/scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="file:///C|/Users/Software Engineer/Desktop/school/dicetutor7.0/resources/views/scripts/common.js" type="text/javascript"></script>
      
    </body>
