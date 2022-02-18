<?php  include_once("loginscript.php");?>
<?php  include_once("addservicescript.php");?>
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
				
			var txtOther3 = document.getElementById("txtOther3");
            txtOther3.disabled = selectedValue == 6 ? false : true;
            if (!txtOther3.disabled) {
                txtOther3.focus();
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
          <div class="dropdown-divider" ></div>
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
$sql = "SELECT * FROM editprofile WHERE email = '".$email."' ";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
         echo "<table>";
           echo "<tr>"; 
				 echo "<th></th>";	
            echo "</tr>";
            while($row = mysqli_fetch_array($result)){
			
			echo "<tr>";
			echo "<td><img height='60' width='73' src='picture/".$row['image']."'></td>";
            echo "</tr>";
			
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your request were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}
 
// Close connection
mysqli_close($link);
?>

        </div>
        <div class="info">
           <b style="color:#FFFFFF;">Unique ID:</b>
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
		   
					$sql = "SELECT id, code, email FROM editprofile WHERE email = '$email' ";
					$result = mysqli_query($conn, $sql);
					
					if (mysqli_num_rows($result) > 0) {
					  // output data of each row
					  while($row = mysqli_fetch_assoc($result)) {
						// echo "id: " . $row["id"]. " - Name: " . $row["FirstName"]. " " . $row["LastName"]. "<br>";
						 $code = $row["code"];
						 echo "<b style='color:white;'>".$code . "</b>";
						
					
					  }
					} else {
					  echo "0 results";
					}
					}
					mysqli_close($conn);
            ?></a>
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

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add Service</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              
              <li class="breadcrumb-item active" style="font-size:18px; font-family:Verdana, Arial, Helvetica, sans-serif; color:#0000CC;"><?php
		   if(isset($_SESSION['email']))
		   {
		     echo $_SESSION['email']. "[Tutor]";
		   }
		   
		   ?>
		   
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
		   
					$sql = "SELECT id, code, tutoremail FROM serviceadd WHERE tutoremail = '$email' ";
					
					$result = mysqli_query($conn, $sql);
					
					if (mysqli_num_rows($result) > 0) {
					  // output data of each row
					  while($row = mysqli_fetch_assoc($result)) {
						// echo "id: " . $row["id"]. " - Name: " . $row["FirstName"]. " " . $row["LastName"]. "<br>";
						// $code = $row["code"];
						// echo $code;
						
					
					  }
					} else {
					 // echo "0 results";
					}
					}
					mysqli_close($conn);
            ?>
    <div class="row" >
        <div class="smart-forms">
        <form  action=""  method="POST" >
            
            <div class="panel panel-default row-space-4">
              
          <div class="panel-body"  align="center">
                    
                       
    <div class="row row-space-4"  align="center">
        <!-- Label -->
        <!--<label class="col-md-3 col-sm-3 text-right">Full Name</label>-->
        <div class="col-md-6 col-sm-6 space-for-mobile">
       <input type="hidden" name="name" required maxlength="140" value="<?php echo $code ; ?>" class="form-control" size="30" placeholder="Enter Full-Name" >   
           <br>
        </div>
    </div>

   
	<div class="row  row-space-4">
        <label class="col-md-3 col-sm-3 text-right">Class Option</label>

        <div class="col-md-6 col-sm-6 space-for-mobile">

				   <select id="ddlModels" onChange="EnableDisableTextBox(this)" class="form-control"  name="classoption">
						<option value="Select Option">Select Class</option>
						<option value="2">Senior Class</option>
						<option value="3">Junior Clas</option>
						<option value="5">Advance Class</option>
						<option value="6">Primary Class</option>
				   </select>
           <br>
        </div>
    </div>
	<hr />
	<div class="row  row-space-4">
        <label class="col-md-3 col-sm-3 text-right">Advance Class</label>

        <div class="col-md-6 col-sm-6 space-for-mobile">
            <select class="form-control" required disabled="disabled" id="txtOther" name="subject" >
                     <option value="Select State">Subject</option>
					 
                      <option value="Database Management(SQLite,MySQL,MongoDB)(Advance)">(SQLite,MySQL,MongoDB)</option>
                                      <option value="Java(Advance-Class)">Java, JavaFX</option>
                                      <option value="Python(Advance-Class)">Python, DJango(Web), Numpy </option>
                                      <option value="Java-Hibernation(Advance-Class)">Java-Hibernation</option>
									  
									     <option value="Java-Swing(Advance-Class)">Java-Swing</option>
										   <option value="Pandas, Matplotlib, OpenCv(Advance-Class)">Pandas, Matplotlib, OpenCv</option>
										     <option value="PowerPoint-Presentation(Advance-Class)">PowerPoint-Presentation</option>
											   <option value="Microsoft-365(Advance-Class)">Microsoft-365</option>
											     <option value="Animation(Create-Cartoon)(Advance-Class)">Animation(Create-Cartoon)</option>
												   <option value="Node.JS(Advance-Class)">Node.JS</option>
												   
                                      <option value="Website Development(Advance-Class)">Website Development</option>
                                      <option value="PHP Laravel(Advance-Class)">PHP Laravel</option>
                                      <option value="React.JS(Advance-Class)">React.JS</option>
                                      <option value="Mobile App Development(Advance-Class)">Mobile App Development</option>
                                      <option value="Guiter Playing(Advance-Class)">Guiter Playing</option>   
                                      <option value="Drum Playing(Advance-Class)">Drum Playing</option>  
                                      <option value="Computer Packages(Advance-Class)">Computer Packages(Microsoft)</option>  
                                      <option value="NCH Video/Audio Editing(Advance-Class)">NCH Video/Audio Editing</option>  
                                      <option value="How To Read and Write(Advance-Class)">How To Read and Write</option>   
                                      <option value="NONE">NO OPTION</option>   
                                      <option value="How to Cook(All Kind Of Soup)(Advance-Class)">How to Cook(All Kind Of Soup)</option>   
                                      <option value="Teach Music(Advance-Class)">Teach Music</option>   
                                      <option value="Teach Computer Repair(Advance-Class)">Teach Computer Repair</option>   
                                      <option value="Teach Phone Repair(Advance-Class)">Teach Phone Repair</option>   
                                      <option value="Teach Baking(Advance-Class)">Learn Baking</option>       
                  </select>
           <br>
        </div>
    </div>
	<div class="row  row-space-4" >
        <label class="col-md-3 col-sm-3 text-right">Senior Class</label>

        <div class="col-md-6 col-sm-6 space-for-mobile">
            <select class="form-control"  disabled="disabled" id="txtOther1" name="subject" >
            
                     <option value="Select State">Subject</option>
									  <option value="audi">-------------</option>
									  <option value="fiat">SENIOR SCHOOL</option>
                                      <option value="audi">-------------</option>
                                      <option value="ENGLISH LANGUAGE(Senior-Class)">ENGLISH LANGUAGE</option>
                                      <option value="FURTHER MATHEMATIC(Senior-Class)">FURTHER MATHEMATIC</option>
                                      <option value="TECHNICAL DRAWING(Senior-Class)">TECHNICAL DRAWING</option>
									  <option value="MATHEMATIC(Senior-Class)">MATHEMATICS</option>
                                      <option value="CHEMISTRY(Senior-Class)"> CHEMISTRY</option>
                                      <option value="BIOLOGY(Senior-Class)">BIOLOGY</option>
                                      <option value="PHYSICS(Senior-Class)">PHYSICS</option>
									  <option value="AGRIC SCIENCE(Senior-Class)">AGRIC SCIENCE</option>
                                      <option value="GEOGRAPHY(Senior-Class)">GEOGRAPHY</option>
                                      <option value="ECONOMICS(Senior-Class)">ECONOMICS</option>
                                      <option value="CIVIC EDUCATION(Senior-Class)">CIVIC EDUCATION</option>
									  <option value="CATERING CRAFT(Senior-Class)">CATERING CRAFT</option>
                                      <option value="YORUBA LANGUAGE(Senior-Class)">YORUBA LANGUAGE</option>
                                      <option value="IGBO LANGUAGE(Senior-Class)">IGBO LANGUAGE</option>
									  <option value="FOOD AND NUTRITION(Senior-Class)">FOOD AND NUTRITION</option>
									  <option value="COMMERCE(Senior-Class)">COMMERCE</option>
									  <option value="ACCOUNTING(Senior-Class)">ACCOUNTING</option>
									  <option value="GOVERNMENT(Senior-Class)">GOVERNMENT</option>
									  <option value="CHRISTIAN RS(Senior-Class)">CHRISTIAN RS</option>
									  <option value="MUSLIM RS(Senior-Class)">MUSLIM RS</option>
									  <option value="LITERATURE(Senior-Class)">LITERATURE</option>
									  <option value="LITERATURE IN ENGLISH(Senior-Class)">LITERATURE IN ENGLISH</option>
                  </select>
           <br>
        </div>
    </div>
	<div class="row  row-space-4">
        <label class="col-md-3 col-sm-3 text-right">Junior Class</label>

        <div class="col-md-6 col-sm-6 space-for-mobile">
            <select class="form-control" required  disabled="disabled" id="txtOther2"  name="subject" >
                    
                     <option value="Select State">Subject</option>                                     
                                      <option value="audi">-------------</option>
									  <option value="fiat">JUNIOR SCHOOL</option>
                                      <option value="audi">-------------</option>
									  <option value="MATHEMATIC(Junior-Class)">MATHEMATIC</option>
                                      <option value="ENGLISH(Junior-Class)">ENGLISH LANGUAGE</option>
                                      <option value="INTEGRATED/BASIC SCIENCE(Junior-Class)">INTEGRATED/BASIC SCIENCE</option>
                                      <option value="INTEGRATED BASIC TECHNOLOGY(Junior-Class)">INTEGRATED BASIC TECHNOLOGY</option>
                                      <option value="YORUBA LANGUAGE(Junior-Class)">YORUBA LANGUAGE</option>
									  <option value="IGBO LANGUAGE(Junior-Class)">IGBO LANGUAGE</option>
                                      <option value="HOME ECONOMIC(Junior-Class)">HOME ECONOMIC</option>
                                      <option value="AGRIC SCIENCE(Junior-Class)">AGRIC SCIENCE</option>
                                      <option value="PHYSICAL HEALTH EDUCATION(Junior-Class)">PHYSICAL HEALTH EDUCATION</option>
									  <option value="BUSINESS STUDIES(Junior-Class)">BUSINESS STUDIES</option>  
                                      <option value="NONE">NO OPTION</option>   
                  </select>
           <br>
        </div>
    </div>
	<div class="row  row-space-4">
        <label class="col-md-3 col-sm-3 text-right">Primary Class</label>

        <div class="col-md-6 col-sm-6 space-for-mobile">
            <select class="form-control" required  disabled="disabled" id="txtOther3"  name="subject" >
                    
                     <option value="Select State">Subject</option>                                     
                                      <option value="audi">-------------</option>
									  <option value="fiat">PRIMARY SCHOOL</option>
                                      <option value="audi">-------------</option>
									  <option value="MATHEMATIC(Primary-Class)">MATHEMATIC</option>
                                      <option value="ENGLISH(Primary-Class)">ENGLISH LANGUAGE</option>
                                      <option value="NIGERIA LANGUAGE(Primary-Class)">NIGERIA LANGUAGE</option>
                                      <option value="Quantitative Reasoning(Primary-Class)">Quantitative Reasoning</option>
                                      <option value="Social Studies(Primary-Class)">Social Studies</option>
									  <option value="Vocational Aptitude(Primary-Class)">Vocational Aptitude</option>
                                      <option value="Health Education(Primary-Class)">Health Education</option>
                                      <option value="Bible Knowledge(Primary-Class)">Bible Knowledge</option>
                                      <option value="Creative Arts(Primary-Class)">Creative Arts</option>
									  <option value="Computer(Primary-Class)">Computer</option>  
                                      <option value="Agric Science(Primary-Class)">Agric Science</option>  
									  <option value="Creative Arts(Primary-Class)">Creative Arts</option>
									  <option value="Home Economics(Primary-Class)">Home Economics</option>  
                                      <option value="Civic Education(Primary-Class)">Civic Education</option>  
									  <option value="Music(Primary-Class)">Music</option>
									  <option value="Handwriting(Primary-Class)">Handwriting</option>  
                                      <option value="Spelling(Primary-Class)">Spelling</option>  
									  <option value="Elementary Science(Primary-Class)">Elementary Science </option>  
                  </select>
           <br>
        </div>
    </div>
	<hr />
	<div class="row  row-space-4">
        <label class="col-md-3 col-sm-3 text-right">Price/Hr</label>

        <div class="col-md-6 col-sm-6 space-for-mobile">
            <input type="text" name="price" required maxlength="40" class="form-control" size="130" placeholder=""  >
           <br>
        </div>
	</div>
		
	
	<div class="row  row-space-4">
        <label class="col-md-3 col-sm-3 text-right">Services Type</label>

        <div class="col-md-6 col-sm-6 space-for-mobile">
           <select class="form-control" required name="serviceoption" >
                     <option value="Select State">Select Teaching Option</option>                                     
                                      <option value="Online Teacher">Online Teacher</option>
									  <option value="Private Home Teacher">Private Home Teacher</option>
                                      <option value="Private Teacher">Private Teacher</option>
									  <option value="Full Time Teacher">Full Time Teacher</option>
                                      <option value="Private Teacher">Part Term Teacher</option>
                  </select>
           <br>
        </div>
	
		  <button type="submit" name="nameValue" class="btn btn-outline-info" style="right:20px; height:100px; top:110px; position:absolute;">Add Service</button>
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

