<?php  include_once("loginscript.php");?>
<?php  include_once("addrequest.php");?>
<?php include_once("match.php");?>
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
      <script type="text/javascript">
        function EnableDisableTextBox(ddlModels) {
            var selectedValue = ddlModels.options[ddlModels.selectedIndex].value;
			
            var txtOther = document.getElementById("txtOther");
            txtOther.disabled = selectedValue == 5 ? false : true;
            if (!txtOther.disabled) {
                txtOther.focus();
            }
			
			var txtOther1 = document.getElementById("txtOther1");
            txtOther1.disabled = selectedValue == 2 ? false : true;
            if (!txtOther1.disabled) {
                txtOther1.focus();
            }
				
			var txtOther2 = document.getElementById("txtOther2");
            txtOther2.disabled = selectedValue == 3 ? false : true;
            if (!txtOther2.disabled) {
                txtOther2.focus();
            }
        }
    </script>
</head>
<body class="hold-transition sidebar-mini layout-fixed"  style="background-color:#F5F5F5;">
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
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
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
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
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
        echo "No records matching your request were found.";
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
		   
		   ?>  </a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
      
            
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
   		<?php
		
		$radNo = "";
     // Create connection
     $conn = mysqli_connect("localhost", "root", "", "dicetutor");
     // Check connection
     if (!$conn) {
         die("Connection failed: " . mysqli_connect_error());
     }

     if(isset($_POST['search'])){


      $track=$_POST['q'];
      $sql = ("SELECT * FROM serviceadd WHERE id = '$track'");
      $result = mysqli_query($conn, $sql);

     if (mysqli_num_rows($result) > 0) {
         // output data of each row
         while($row = mysqli_fetch_assoc($result)) {
			    $id                  =$row['id'];
				$radNo               =$row['radNo'];
         }
     } else {
        // echo "0 results";
     }
    }
     mysqli_close($conn);
			
       ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Make Request</h1>
			<br>
			
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              
              <li class="breadcrumb-item active" style="font-size:18px; font-family:Verdana, Arial, Helvetica, sans-serif; color:#0000CC;"><?php
		   if(isset($_SESSION['email']))
		   {
		     echo $_SESSION['email'];
		   }
		   
		   ?>
		   [General Page]
		   </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
  
    <!-- Main content -->
    <section class="content">

 <center>      
    
    <div class="row" >
        <div class="smart-forms">

	   <?php
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
					  if(isset($_SESSION['email']))
		              {
		                //echo $_SESSION['email'];
						$email = $_SESSION['email'];
		   
					$sql = "SELECT id, FirstName, LastName, Email FROM teacherregister WHERE Email = '$email' ";
					$result = mysqli_query($conn, $sql);
					
					if (mysqli_num_rows($result) > 0) {
					  // output data of each row
					  while($row = mysqli_fetch_assoc($result)) {
						// echo "id: " . $row["id"]. " - Name: " . $row["FirstName"]. " " . $row["LastName"]. "<br>";
						 $firstname = $row["FirstName"];
						 $lastname = $row["LastName"];
						
					
					  }
					} else {
					 // echo "0 results";
					}
					}
					mysqli_close($conn);
					
					$radNos = (rand(1,1000000));
				
            ?>
			
        <form  action=""  method="POST" >
            
            <div class="panel panel-default row-space-4"  align="center">
              
          <div class="panel-body"  align="center">
                    
    <div class="row row-space-4"  align="center">
        <!-- Label -->
        <!--<label class="col-md-3 col-sm-3 text-right">Full Name</label>-->
        <div class="col-md-6 col-sm-6 space-for-mobile">
    <input type="hidden" name="name" required maxlength="140" value=" <?php echo $firstname . " " .$lastname ; ?>" class="form-control" size="30" placeholder="Enter Full-Name"   >
     <input type="hidden" name="email" required maxlength="140" value=" <?php echo $email ; ?>" class="form-control" size="30" placeholder="Enter Full-Name"   >
	  <input type="hidden" name="id" required maxlength="140" value=" <?php echo $id ; ?>" class="form-control" size="30" placeholder="Enter Full-Name"   >
     
     
        </div>
    </div>
	<div class="row  row-space-4">
         <label class="col-md-3 col-sm-3 text-right">Tutor Request-ID</label>
        <div class="col-md-6 col-sm-6 space-for-mobile">
			   <select class="form-control" style="height:50px;  width:600px;"   name="tutorid">
						<option value="<?php echo $radNo ; ?>"><?php echo $radNo ; ?></option>
						
				   </select>
        </div>
	</div>
	
    <br>
    <div class="row  row-space-4">
	
        <label class="col-md-3 col-sm-3 text-right">Address Where Service <p>Will Be Rendered</p></label>
        <div class="col-md-6 col-sm-6 space-for-mobile">	    
            <input type="text" name="address" style="height:50px; width:600px;"  required maxlength="40" class="form-control" size="130" placeholder="E.g 12 Wilson Street Rena Avenue Victoria Island Lagos.."  >
           
        </div>
	</div>
   
	<div class="row  row-space-4">
        <label class="col-md-3 col-sm-3 text-right">Request Option</label>

        <div class="col-md-6 col-sm-6 space-for-mobile">

				   <select class="form-control" style="height:50px;  width:600px;"   name="request">
						<option value="Select Option">Add</option>
						<option value="Request Made">Request Made</option>
						<option value="Request Made">Request Made</option>
				   </select>
         
        </div>
    </div>
	  <br>
	  <div class="row  row-space-4">
        <label class="col-md-3 col-sm-3 text-right">Class Of Student</label>

        <div class="col-md-6 col-sm-6 space-for-mobile">

				   <select class="form-control" style="height:50px;  width:600px;" name="class">
						<option value="Select Option">Class</option>
						<option value="Primary One">Primary One</option>
						<option value="Primary Two">Primary Two</option>
						<option value="Primary Three">Primary Three</option>
						<option value="Primary Four">Primary Four</option>
						<option value="Primary Five">Primary Five</option>
						<option value="Primary Six">Primary Six</option>
						<option value="Request Made">            </option>
						<option value="Junior Sch(JS) One">Junior Sch(JS) One</option>
						<option value="Junior Sch(JS) Two">Junior Sch(JS) Two</option>
						<option value="Junior Sch(JS) Three">Junior Sch(JS) Three</option>
						<option value="Request Made">             </option>
						<option value="Senior Sch(SS) One">Senior Sch(SS) One</option>
						<option value="Senior Sch(SS) Two">Senior Sch(SS) Two</option>
						<option value="Senior Sch(SS) Three">Senior Sch(SS) Three</option>
						<option value="Request Made">             </option>
						<option value="Request Made">High School Graduate</option>
				   </select>
         
        </div>
    </div>
	  <br>
	  <div class="row  row-space-4">
        <label class="col-md-3 col-sm-3 text-right">No Of Student</label>

        <div class="col-md-6 col-sm-6 space-for-mobile">

				   <select class="form-control" style="height:50px;  width:600px;" name="no">
						<option value="Select Option">Number</option>
						<option value="One Student">One Student</option>
						<option value="Two Student">Two Student</option>
						<option value="Three Student">Three Student</option>
						<option value="Four Student">Four Student</option>
						<option value="Five Student">Five Student</option>
				   </select>
         
        </div>
    </div>
	  <br>
	  <div class="row  row-space-4">
        <label class="col-md-3 col-sm-3 text-right">Age Range Of Student</label>

        <div class="col-md-6 col-sm-6 space-for-mobile">

				   <select class="form-control" style="height:50px;  width:600px;" name="age">
						<option value="Select Option">Age</option>
						<option value="5yrs To 12yrs">5yrs To 12yrs</option>
						<option value="12yrs To 15yrs">12yrs To 15yrs</option>
						<option value="15yrs To 21yrs">15yrs To 21yrs</option>
						<option value="21yrs To 30yrs">21yrs To 30yrs</option>
						<option value="30yrs To 40yrs">30yrs To 40yrs</option>
				   </select>
         
        </div>
    </div>
	  <br>
	   <div class="row  row-space-4">
        <label class="col-md-3 col-sm-3 text-right">No Of Months</label>

        <div class="col-md-6 col-sm-6 space-for-mobile">

				    <select class="form-control" style="height:50px;  width:600px;" name="month">
						<option value="Select Option">Select No Of Months</option>
						<option value="1">1 Month</option>
						<option value="2">2 Month</option>
						<option value="3">3 Month</option>
						<option value="4">4 Month</option>
						<option value="5">5 Month</option>
						<option value="6">6 Month</option>
						<option value="7">7 Month</option>
						<option value="8">8 Month</option>
						<option value="9">9 Month</option>
						<option value="10">10 Month</option>
						<option value="11">11 Month</option>
						<option value="12">12 Month</option>

				   </select>
         
        </div>
    </div>
	  <br>
	<div class="row  row-space-4">
        <label class="col-md-3 col-sm-3 text-right">No Of Days in Weeks</label>

        <div class="col-md-6 col-sm-6 space-for-mobile"> 

				   <select class="form-control" style="height:50px;  width:600px;"   name="noofdays">
						<option value="Select Option">Select No Of days</option>
						<option value="1">1 days</option>
						<option value="2">2 days</option>
						<option value="3">3 days</option>
						<option value="4">4 days</option>
						<option value="5">1 Week</option>

				   </select>
           <br>
        </div>
    </div>
	<div class="row  row-space-4">
        <label class="col-md-3 col-sm-3 text-right">Duration</label>

        <div class="col-md-6 col-sm-6 space-for-mobile">
   <b style="position:absolute; left:5px;">  <input type="date" name="duration1" required maxlength="40" class="form-control" size="130" placeholder="" style="width:270px; height:50px;""><h4 style="top:5px; left:273px; position:absolute;">To</h4></b><b style="position:absolute; top:2px;left:310px; width:297px;"><input type="date" style="height:50px;" name="duration2" required maxlength="40" class="form-control" size="130" placeholder="" style="width:260px;"  ></b>
          
        </div>
	</div>
	
	 <br> <br>
	<div class="row  row-space-4">
        <label class="col-md-3 col-sm-3 text-right">Select Teaching Days in Weeks</label>

        <div class="col-md-6 col-sm-6 space-for-mobile" style="color:#FF0000;">

				
				   <select class="form-control" style="height:50px;  width:600px;"   name="days">
						<option value="Select Option">Select days</option>
						<option value="MON & TUES">MON & TUES</option>
						<option value="MON & WEDNES">MON & WEDNES</option>
						<option value="MON & THURS">MON & THURS</option>
						<option value="MON & FRI">MON & FRI</option>
						<option value="MON & SAT">MON & SAT</option>
						<option value="TUES & WEDNES">TUES & WEDNES</option>
						<option value="TUES & THURS">TUES & THURS</option>
						<option value="TUES & FRI">TUES & FRI</option>
						<option value="TUES & SAT">TUES & SAT</option>
						<option value="TUES & WEDNES">TUES & WEDNES</option>
						<option value="WEDNES & THURS">WEDNES & THURS</option>
						<option value="WEDNES & FRI">WEDNES & FRI</option>
						<option value="WEDNES & SAT">WEDNES & SAT</option>
						<option value="THURS & FRI">THURS & FRI</option>
						<option value="THURS & SAT">THURS & SAT</option>
						<option value="MON & TUES & WED">MON & TUES & WED</option>
						<option value="MON & TUES & THURS">MON & TUES & THURS</option>
						<option value="MON & TUES & FRI">MON & TUES & FRI</option>
						<option value="MON & TUES & SAT">MON & TUES & SAT</option>
						<option value="MON & WEDNES & THURS">MON & WEDNES & THURS</option>
						<option value="MON & WEDNES & FRI">MON & WEDNES & FRI</option>
						<option value="MON & WEDNES & SAT">MON & WEDNES & SAT</option>
						<option value="MON & THURS & FRI">MON & THURS & FRI</option>
				
						<option value="MON & THURS & SAT">MON & THURS & SAT</option>
						<option value="MON & FRI & SAT">MON & FRI & SAT</option>
						
						<option value="MON & TUES & SAT">MON & TUES & SAT</option>
						<option value="TUES & WEDNES & THURSe">TUES & WEDNES & THURS</option>
						<option value="TUES & WEDNES & FRI">TUES & WEDNES & FRI</option>
						<option value="TUES & WEDNES & SAT">TUES & WEDNES & SAT</option>
						<option value="TUES & THURS & FRI">TUES & THURS & FRI</option>
						
						<option value="TUES & WEDNES & THURS">TUES & WEDNES & THURS</option>
						<option value="THURS & WEDNES & FRI">THURS & WEDNES & FRI</option>
						<option value="THURS & WEDNES & SAT">THURS & WEDNES & SAT</option>
						<option value="FRI & THURS & SAT">FRI & THURS & SAT</option>
						
				   </select>
        </div>
    </div>
		<br>
	  <div class="row  row-space-4">
        <label class="col-md-3 col-sm-3 text-right">Phone-Number</label>

        <div class="col-md-6 col-sm-6 space-for-mobile">
            <input type="text" name="phoneno" style="height:50px;  width:600px;" required maxlength="40" class="form-control" size="130" placeholder=""  >
           <br>
        </div>
	</div>
	<div class="row  row-space-4">
        <label class="col-md-3 col-sm-3 text-right">Service Delivering Option</label>

        <div class="col-md-6 col-sm-6 space-for-mobile">

				   <select class="form-control" style="height:50px;  width:600px;"   name="center">
						<option value="Select Option">Select Center</option>
						<option value="Physical">Physical</option>
						<option value="OnLine">OnLine</option>
				   </select>
           <br>
        </div>
    </div>
	  <div class="row  row-space-4">
        <label class="col-md-3 col-sm-3 text-right">Time Of Delivery</label>

        <div class="col-md-6 col-sm-6 space-for-mobile">
   <b style="position:absolute; left:5px;">  <input type="text" name="timing" required maxlength="40" class="form-control" size="130" placeholder="09:00AM" style="width:270px; height:50px;""><h4 style="top:5px; left:273px; position:absolute;">To</h4></b><b style="position:absolute; top:2px;left:310px; width:297px;"><input type="text" style="height:50px;" name="timing1" required maxlength="40" class="form-control" size="130" placeholder="11:00AM" style="width:260px;"  ></b>
          
        </div>
	</div>
	             
	
		  <button type="submit" name="requestUpdate" class="btn btn-outline-info" style="right:120px; height:100px; top:150px; position:fixed;">Add Request</button>
		  <b style="color:#0000FF; font-size:18px; top:270px; right:60px; position:fixed;">Tutor Request-ID:  <?php echo $radNo ; ?></b>
		  <br><br><br>
    </div>
	</div></div>
	</form>
			
 </center>
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
  <!-- /.content-wrapper -->


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

