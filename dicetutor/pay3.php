<?php include_once("loginscript.php");?>
<?php include_once("verifyPay3.php");?>
<?php //include_once("fresh.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>DiceTutors| Dashboard</title>
  	
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
 
	<link rel="stylesheet" href="assets/css/eduportal-fullpage-style.css">
	<link rel="stylesheet" href="assets/css/base-admin.css">




  <link rel="stylesheet" href="zealluck1_files/bootstrap.css">
  <link rel="stylesheet" href="zealluck1_files/themify-icons.css">
  <link rel="stylesheet" href="zealluck1_files/slick.css">
  <link rel="stylesheet" href="zealluck1_files/slick-theme.css">
  <link rel="stylesheet" href="zealluck1_files/jquery.css">
  <link rel="stylesheet" href="zealluck1_files/aos.css">

  <!-- CUSTOM CSS -->
  <link href="zealluck1_files/style.css" rel="stylesheet">

</head>
<body class="hold-transition sidebar-mini layout-fixed" style="background-color:#F5F5F5;">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="images/Dice Tutuors.png" alt="DiceTutors" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
       
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="position:fixed;">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="images/Dice Tutuors.png" alt="AdminLTE Logo" height="250" width="250" class="brand-image img-circle elevation-5" style="opacity: .8">
      <span class="brand-text font-weight-light">DiceTutors</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
                        <?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "dicetutor");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

	  if(isset($_SESSION['email']))
		              {
						$email = $_SESSION['email'];
 
// Attempt select query execution
$sql = "SELECT * FROM validcard  WHERE email = '".$email."' ";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
         echo "<table>";
           echo "<tr>"; 
				 echo "<th></th>";	
            echo "</tr>";
            while($row = mysqli_fetch_array($result)){
			
			echo "<tr>";
				echo "<td style='color:white;'><img height='60' width='73' src='picture/".$row['image3']."' alt ='UPLOAD'</td>";
            echo "</tr>";
			
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
       // echo "No records matching your request were found.";
    }
} else{
   // echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}
 
// Close connection
mysqli_close($link);
?>
        </div>
        <div class="info">
          <a href="#" class="d-block">
		  <?php
		   if(isset($_SESSION['email']))
		   {
		     echo $_SESSION['email'];
		   }
		   
		   ?>
		   </a>

		   	   <?php
			         $radNo = "";
					 $monthly = "";
					 $radNo = "";
					 $salary = "";
					 $salary1 = "";
					 $email = "";
					 $radNo = "";
					 $clientemail = "";
					 $clientname  = "";				
					$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "dicetutor";
					
					// Create connection
					$conn = mysqli_connect($servername, $username, $password, $dbname);
					// Check connection
					if (!$conn) {
					  die("Connection failed: " . mysqli_connect_error());
					}
					  if(isset($_POST['search']))
		              {
		                //echo $_SESSION['email'];
						$id = $_POST['q'];
		   
					$sql = "SELECT id, radNo, salary, salary1, monthly, clientemail, clientname FROM serviceadd WHERE id = '$id' ";
					$result = mysqli_query($conn, $sql);
					
					if (mysqli_num_rows($result) > 0) {
					  // output data of each row
					  while($row = mysqli_fetch_assoc($result)) {
						// echo "id: " . $row["id"]. " - Name: " . $row["FirstName"]. " " . $row["LastName"]. "<br>";
						    $id                 =$row['id'];
							$monthly            = $row["monthly"];
							$salary             = $row["salary"];
							$salary1             = $row["salary1"];
							$radNo              = $row["radNo"];
							$email              = $row["clientemail"];
						    $clientname         = $row["clientname"];
					  }
					} else {
					  echo "0 results";
					}
					}
					mysqli_close($conn);
				
            ?>
		
  
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
     
			 
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2" style="position:fixed;">
       <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false" style="position:fixed;">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
      </ul>
            
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Make Payment Via Our PlatForm...</h1>
			<br>
		     
          </div><!-- /.col -->
	
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              
              <li class="breadcrumb-item active" style="font-size:18px; font-family:Verdana, Arial, Helvetica, sans-serif; color:#0033FF;"><?php
		   if(isset($_SESSION['email']))
		   {
		     echo $_SESSION['email']. "[General]";
		   }
		   
		   ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="user-login section">
	
	<div class="container" style="position:absolute; top:150px;">
		<div class="row">
			<div class="col-12">
				<div class="block">
					<!-- Image -->
					<div class="image align-self-center" style="padding-left:10px;">
					   
						<div class="col-md-10 print-table" style="position:absolute; top:20px;">
                             
							<table class="table table-striped table-hover" border="" style="width:500px; color:#0000FF; top:1px; position:absolute;">

								<tbody>

									<tr>

									<td class="m-0" style="color:#666666; font-size:18px; font-family:Georgia, 'Times New Roman', Times, serif;">Full Payment(All Months)</p></td>

									<td ><p style="color:#0000FF; font-size:24px; font-family:Geneva, Arial, Helvetica, sans-serif;"><?php echo $salary."NGN" ; ?></p></td>

									</tr>

									<tr>
 
								<td class="m-0" style="color:#666666; font-size:18px; font-family:Georgia, 'Times New Roman', Times, serif;">Remaining.Balance To Be Paid(Ahead)</p></td>
        
									<td><p style="color:#0000FF; font-size:24px; font-family:Geneva, Arial, Helvetica, sans-serif;"><?php echo $salary1."NGN" ; ?></p></td>

									</tr>
										<tr>
 
								<td class="m-0" style="color:#666666; font-size:18px; font-family:Georgia, 'Times New Roman', Times, serif;">Monthly.Payment(Ahead)</p></td>
        
									<td><p style="color:#0000FF; font-size:24px; font-family:Geneva, Arial, Helvetica, sans-serif;"><?php echo $monthly."NGN"  ; ?></p></td>

									</tr>

									<t<td style="color:#0000FF;">

										<td><p>Tutor ID</p></td>

										<td><p style="color:#FF0000;"><?php echo $radNo; ?></p></td>
									</tr>	
									
									<tr>
									<td class="m-0" style="color:#666666; font-size:18px; font-family:Georgia, 'Times New Roman', Times, serif;">CAN ALSO PAY THROUGH BANK</p></td>
									</tr>
                                    
									<tr> 
									<td class="m-0" style="color:#666666; font-size:18px; font-family:Georgia, 'Times New Roman', Times, serif;">Bank </p></td>
									<td><p style="color:#0000FF; font-size:20px; font-family:Geneva, Arial, Helvetica, sans-serif;"><?php echo "First Bank Nigeria"  ; ?></p></td>

									</tr>
 
									<tr> 
									<td class="m-0" style="color:#666666; font-size:18px; font-family:Georgia, 'Times New Roman', Times, serif;">Account-Name </p></td>
									<td><p style="color:#0000FF; font-size:20px; font-family:Geneva, Arial, Helvetica, sans-serif;"><?php echo "Dicetutor Ltd"  ; ?></p></td>

									</tr>
									<tr> 
									<td class="m-0" style="color:#666666; font-size:18px; font-family:Georgia, 'Times New Roman', Times, serif;">Account-Number </p></td>
									<td><p style="color:#0000FF; font-size:20px; font-family:Geneva, Arial, Helvetica, sans-serif;"><?php echo "0057689901"  ; ?></p></td>

									</tr>
								
							</tbody></table>

						</div>
                        <br />
                    
					</div>
				
					<!-- Content -->
					<div class="content text-center">
						<div class="title-text">
							<h3><img src="images/Dice Tutuors.png" width="120px" height="110px" alt="desk-image"></h3>
                             <td class="style4" style="color:Black; left:605px; top:400px; position:absolute; font-size:medium">
                                 <asp:Label ForeColor="red" ID="Lab1" runat="server"></asp:Label>
                            </td>
						</div>
						<?php 
						       $reference = "DT".mt_rand(00000000,12345678);
						?>
			  	
						<div class="new-acount">
					   <p style="color:red;">Powered by <a href="">Devosta Solution.</a></p>
					    <form action="" method="post">
				       <div class="form-group">		
				           <input type="hidden" name="name" value="<?php echo $clientname ; ?>" required maxlength="140" class="form-control"  >
						     <input type="hidden" name="id" value="<?php echo $id ; ?>" required maxlength="140" class="form-control"  >
						  </div>
				            <div class="form-group">		
				            <input type="hidden" name="email" value="<?php if(isset($_SESSION['email']))
		   {
		     echo $_SESSION['email'];
		   }
		    ?>" required maxlength="140" class="form-control" >
						  </div>
						    <div class="form-group">		
				            <input type="hidden" name="reference" value="<?php echo $reference ; ?>" required maxlength="140"  class="form-control" >
						  </div>
						   </div>
						    <div class="form-group">		
				            <input type="hidden" name="radNo" value="<?php echo $radNo; ?>" required maxlength="140"  class="form-control" >
						  </div>
						    <div class="form-group">		
				            <select class="form-control" required name="paymentoption">
								 <option value="Select State">Payment Option</option>
								<option value="All Month">Full Payment E.g : All Month</option>
								<option value="Monthly">Monthly Payment E.g : One Month Ahead</option>			
                          </select>
						  </div>
						  <div class="form-group">
						  <input type="text"  required maxlength="140" name="amount" class="form-control" size="130" placeholder=" Amount E.g : 120000"  >
						  </div>
						  
						 
						  <div class="form-submit">
							<!-- Submit Button -->			
						   <button type="submit" name="pay3" class="btn btn-outline-info" style="width:160px; height:60px;">Make-Payment</button>
						  </div>
						</form>
                           <br><br><br>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<br><br><br>

        </div>
   </div>

  
<div class="container-fluid" style="color:#000099;">
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
  ...      
           </div>
    </session>
    <!-- /.content -->
        </div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
