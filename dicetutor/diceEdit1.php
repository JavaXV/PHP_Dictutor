<?php include_once("loginscript.php");?>
<?php include_once("editorscript.php");?>

	     
 
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

</head>
<body class="hold-transition sidebar-mini" style="background-color:#F5F5F5;">
<div class="wrapper" >
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light" >
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index3.html" class="nav-link">Home</a>
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
              <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
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
              <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
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
              <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
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
       // echo "No records matching your request were found.";
    }
} else{
  //  echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
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
      <!-- Sidebar Menu -->
     <nav class="mt-2">
       <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Profile
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="diceEdit1.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Edit Profile </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="uploadphoto.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Photo Upload </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Accounts.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bank Details</p>
                </a>
              </li>
			     <li class="nav-item">
                <a href="gurantor.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Guarantor</p>
                </a>
              </li>
			    <li class="nav-item">
                <a href="uploadId.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Update Valid ID</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="editingprofile.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Search Profile
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Layout Options
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
			</li>
			</ul>
			
           
         
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
            <h1 class="m-0">Edit Profile</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right" style="color:#FF0000;">
              
              <li class="breadcrumb-item active" style="font-size:18px; font-family:Verdana, Arial, Helvetica, sans-serif; color:#FF0000;" ><?php
		   if(isset($_SESSION['email']))
		   {
		     echo $_SESSION['email']. "[Tutor]";
		   }
		   
		   ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
   
    </section>

    <!-- Main content -->
    <section class="content" style="background-color:#E1F0F0;>
         
          <!-- /.card-header -->
		  <div class="col-sm-15 col-sm-offset-16" style="background-color:#E1F0F0;>
          <div class="card-body" style="background-color:#E1F0F0;>
            <div class="row"  >
              <div class="col-6 col-sm-6" style="position:absolute; left:400px;">
				
			<div class="form-group"  >
                 <!--<label>Full Name</label>-->
                 <div class="form-group">
                    <input type="hidden" class="form-control" name='name' required placeholder=''">
                  </div>
             </div>
	
			 <form action="" method="POST">
			<div class="form-group"  >
                 <label>First Name</label>
                 <div class="form-group">
                    <input type="text" class="form-control" style="height:45px;" value=" <?php echo $firstname; ?>" name='firstname' required placeholder=''">
                  </div>
             </div>
			 <div class="form-group"  >
                 <label>Last Name</label>
                 <div class="form-group">
                    <input type="text" class="form-control" style="height:45px;" value=" <?php echo $lastname; ?>" name='lastname' required placeholder=''">
                  </div>
             </div>
			 <div class="form-group"  >
			 <b style="color:red;">Note: If you Use another Email your Profile will not be Updated.</b><br>
                 <label>Email Address</label>
                 <div class="form-group">
                    <input type="text" class="form-control" style="height:45px;" value="<?php
		   if(isset($_SESSION['email']))
		   {
		     echo $_SESSION['email'];
		   }
		   
		   ?>" name="email" required placeholder=''">
                  </div>
             </div>
			  <div class="form-group"  >
                 <label>Date Of Birth</label>
                 <div class="form-group">
                    <input type="date" class="form-control"  style="height:45px;" name="dob_day" required placeholder='Example : Day/Month/Year'">
                  </div>
             </div>
			 <div class="form-group"  >
                 <label>Gender</label>
                 <div class="form-group">
				    <div class="col-3 col-sm-6">
                    <select class="form-control"  style="height:45px;" required name="gender" >
                    <option selected="selected">Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
				  </div>
                  </div>
             </div>
		
		     <div class="form-group">
			      <label style="font-family:'Courier New', Courier, monospace;"><b style="color:#FF0000; font-size:20px;">Current Location</b> <br>Enter your current location. This should be the address where you reside or live. If you move to a new location, you must update it here. Please write it properly.</label>
				  <label>Street Address</label>  
                 <div class="form-group">
                    <input type="text" class="form-control"  style="height:45px;" name="address" required placeholder="E.g 28 Saint John Street Gowon Estate Ipaja"">
                  </div>
             </div>
			 <br>
			  <div class="form-inline">
            <div class="form-group">
                <div><label>Phone Numer 1</label></div>
                <input type="text" name="number1" maxlength="80"  style="height:45px;" value="" class="form-control" placeholder="E.g. +23409098878" required="true">
            <div class="form-group">
                <div><label>Phone No 2</label></div>
                     <input type="text" name="number2" maxlength="80"  style="height:45px;" value="" class="form-control" placeholder="E.g. +2340900008" required="true">
</div>
             </div>
			 </div>
			 <br>
			   <div class="form-group">
				  <label>State OF  Origin</label>  
                 <div class="form-group">
                                        <select name="state" class="form-control"  style="height:45px;"  placeholder="Input your state" required="true">
  <option value="" selected=""></option>

  <option value="Abia">Abia</option>

  <option value="Abuja">Abuja</option>

  <option value="Adamawa">Adamawa</option>

  <option value="Akwa Ibom">Akwa Ibom</option>

  <option value="Anambra">Anambra</option>

  <option value="Bayelsa">Bayelsa</option>

  <option value="Bauchi">Bauchi</option>

  <option value="Benue">Benue</option>

  <option value="Borno">Borno</option>

  <option value="Cross River">Cross River</option>

  <option value="Delta">Delta</option>

  <option value="Edo">Edo</option>

  <option value="Ebonyi">Ebonyi</option>

  <option value="Ekiti">Ekiti</option>

  <option value="Enugu">Enugu</option>

  <option value="Gombe">Gombe</option>

  <option value="Imo">Imo</option>

  <option value="Jigawa">Jigawa</option>

  <option value="Kaduna">Kaduna</option>

  <option value="Kano">Kano</option>

  <option value="Katsina">Katsina</option>

  <option value="Kebbi">Kebbi</option>

  <option value="Kogi">Kogi</option>

  <option value="Kwara">Kwara</option>

  <option value="Lagos">Lagos</option>

  <option value="Nassarawa">Nassarawa</option>

  <option value="Niger">Niger</option>

  <option value="Ogun">Ogun</option>

  <option value="Ondo">Ondo</option>

  <option value="Osun">Osun</option>

  <option value="Oyo">Oyo</option>

  <option value="Plateau">Plateau</option>

  <option value="Rivers">Rivers</option>

  <option value="Sokoto">Sokoto</option>

  <option value="Taraba">Taraba</option>

  <option value="Yobe">Yobe</option>

  <option value="Zamfara">Zamfara</option>

</select>

                  </div>
             </div>
			
	
			  <div class="row row-space-2">
                            <div class="col-sm-6">
                                <div class="form-group ">
                                    <label class="pad-down-5">City Or Town of Resident</label>
                                    <label class="sr-only">City</label>
									 <select class="form-control" required name="city"  style="height:45px;" >
                                     <option value="Select State">E.g : Surulere</option>
					 
                                  <option value="">-------------------------------</option>
									<option value="">         OGUN STATE            </option>
									<option value="">-------------------------------</option>
									<option value="ABEOKUTA NORTH">ABEOKUTA NORTH</option>
									<option value="ABEOKUTA SOUTH">ABEOKUTA SOUTH</option>
									<option value="ADO-ODO/OTA">ADO-ODO/OTA</option>
									<option value="EGBADO NORTH">EGBADO NORTH</option>
									<option value="EGBADO SOUTH">EGBADO SOUTH</option>
									<option value="EWEKORO">EWEKORO</option>
									<option value="IFO">IFO</option>
									<option value="IJEBU EAST">IJEBU EAST</option>
									<option value="IJEBU NORTH">IJEBU NORTH</option>
									<option value="IJEBU ODE">IJEBU ODE</option>
									<option value="IKENE">IKENE</option>
									<option value="OMEKO AFON">OMEKO AFON</option>
									<option value="IPOKIA">IPOKIA</option>
									<option value="OBAFEMI OWODE">OBAFEMI OWODE</option>
									<option value="ODEDA">ODEDA</option>
									<option value="ODOGBOLU">ODOGBOLU</option>
									<option value="OGUN WATERSIDE">OGUN WATERSIDE</option>
									<option value="REMO NORTH">REMO NORTH</option>
									<option value="SHAGAMU">SHAGAMU</option>
									<option value="">-------------------------------</option>
									<option value="">         OSUN STATE            </option>
									<option value="">-------------------------------</option>
									<option value="ATAKUNMOSA EAST">ATAKUNMOSA EAST</option>
									<option value="ATAKUNMOSA WEST">ATAKUNMOSA WEST</option>
									<option value="AIYEDAADE">AIYEDAADE</option>
									<option value="AIYEDIRE">AIYEDIRE</option>
									<option value="BOLUWADURO">BOLUWADURO</option>
									<option value="BORIPE">BORIPE</option>
									<option value="EDE NORTH">EDE NORTH</option>
									<option value="EDE SOUTH">EDE SOUTH</option>
									<option value="IFE CENTRAL">IFE CENTRAL</option>
									<option value="IFE EAST">IFE EAST</option>
									<option value="IFE NORTH">IFE NORTH</option>
									<option value="IFE SOUTH">IFE SOUTH</option>
									<option value="EGBEDORE">EGBEDORE</option>
									<option value="EJIGBO">EJIGBO</option>
									<option value="IFEDAYO">IFEDAYO</option>
									<option value="IFELODUN">IFELODUN</option>
									<option value="ILA">ILA</option>
									<option value="ILESA EAST">ILESA EAST</option>
									<option value="ILESA WEST">ILESA WEST</option>
									<option value="IREPODUN">IREPODUN</option>
									<option value="IREWOLE">IREWOLE</option>
									<option value="ISOKAN">ISOKAN</option>
									<option value="IWO">IWO</option>
									<option value="OBOKUN">OBOKUN</option>
									<option value="ODO OTIN">ODO OTIN</option>
									<option value="OLA OLUWA">OLA OLUWA</option>
									<option value="OLORUNDA">OLORUNDA</option>
									<option value="ORIADE">ORIADE</option>
									<option value="OROLU">OROLU</option>
									<option value="OSOGBO">OSOGBO</option>
									<option value="">-------------------------------</option>
									<option value="">         OYO STATE            </option>
									<option value="">-------------------------------</option>
									<option value="AFIJIO">AFIJIO</option>
									<option value="AINYELE">AKINYELE</option>
									<option value="ATIBA">ATIBA</option>
									<option value="ATISBO">ATISBO</option>
									<option value="EGBEDA">EGBEDA</option>
									<option value="IBADAN NORTH">IBADAN NORTH</option>
									<option value="IBADAN NORTH-EAST">IBADAN NORTH-EAST</option>
									<option value="IBADAN NORTH-WEST">IBADAN NORTH-WEST</option>
									<option value="IBADAN SOUTH-EAST">IBADAN SOUTH-EAST</option>
									<option value="IBADAN SOUTH-WEST">IBADAN SOUTH-WEST</option>
									<option value="IBARAPA EAST">IBARAPA EAST</option>
									<option value="IBARAPA CENTRAL">IBARAPA CENTRAL</option>
									<option value="IBARAPA NORTH">IBARAPA NORTH</option>
									<option value="IDO">IDO</option>
									<option value="IREPO">IREPO</option>
									<option value="ISEYIN">ISEYIN</option>
									<option value="ITESIWAJU">ITESIWAJU</option>
									<option value="IWAJOWA">IWAJOWA</option>
									<option value="KAJOLA">KAJOLA</option>
									<option value="LAGELU">LAGELU</option>
									<option value="OGBOMOSHO NORTH">OGBOMOSHO NORTH</option>
									<option value="OGBOMOSHO SOUTH">OGBOMOSHO SOUTH</option>
									<option value="OGO OLUWA">OGO OLUWA</option>
									<option value="OLORUNSOGO">OLORUNSOGO</option>
									<option value="OLUYOLE">OLUYOLE</option>
									<option value="ONA ARA">ONA ARA</option>
									<option value="ORELOPE">ORELOPE</option>
									<option value="ORI IRE">ORI IRE</option>
									<option value="OYO">OYO</option>
									<option value="SAKI EAST">SAKI EAST</option>
									<option value="SAKI WEST">SAKI WEST</option>
									<option value="SURULERE">SURULERE</option>
									<option value="">-------------------------------</option>
									<option value="">         EKITI STATE            </option>
									<option value="">-------------------------------</option>
									<option value="ADO EKITI">ADO EKITI</option>
									<option value="ARAMOKO">ARAMOKO</option>
									<option value="EFON-ALAAYE">EFON-ALAAYE</option>
									<option value="EMURE">EMURE</option>
									<option value="GBONYIN">GBONYIN</option>
									<option value="IDO OSI">IDO OSI</option>
									<option value="IGEDE">IGEDE</option>
									<option value="IJERO-EKITI">IJERO-EKITI</option>
									<option value="IKERE">IKERE</option>
									<option value="IKOLE">IKOLE</option>
									<option value="ISE">ISE</option>
									<option value="OYE">OYE</option>
									<option value="OMUO">OMUO</option>
									<option value="">-------------------------------</option>
									<option value="">         ONDO STATE            </option>
									<option value="">-------------------------------</option>
									<option value="AKOKO NORTH-EAST">AKOKO NORTH-EAST</option>
									<option value="AKOKO NORTH-WEST">AKOKO NORTH-WEST</option>
									<option value="AKOKO SOUTH-WEST">AKOKO SOUTH-WEST</option>
									<option value="AKURE NORTH</">AKURE NORTH</option>
									<option value="AKURE SOUTH">AKURE SOUTH</option>
									<option value="ESE ODO">ESE ODO</option>
									<option value="IDANRE">IDANRE</option>
									<option value="IFEDORE">IFEDORE</option>
									<option value="ILAJE">ILAJE</option>
									<option value="ILE OLUJI/OKEIGBO">ILE OLUJI/OKEIGBO</option>
									<option value="IRELE">IRELE</option>
									<option value="ODIGBO">ODIGBO</option>
									<option value="OKITIPUPA">OKITIPUPA</option>
									<option value="ONDO EAST">ONDO EAST</option>
									<option value="ONDO WEST">ONDO WEST</option>
									<option value="OSE">OSE</option>
									<option value="OWO">OWO</option>
									<option value="">-------------------------------</option>
									<option value="">         KWARA STATE            </option>
									<option value="">-------------------------------</option>
									<option value="ASA">ASA</option>
									<option value="BARUTEN">BARUTEN</option>
									<option value="EDU">EDU</option>
									<option value="EKITI">EKITI</option>
									<option value="IFELODUN">IFELODUN</option>
									<option value="ILORIN EAST">ILORIN EAST</option>
									<option value="ILORIN SOUTH">ILORIN SOUTH</option>
									<option value="ILORIN WEST">ILORIN WEST</option>
									<option value="IREPODUN">IREPODUN</option>
									<option value="ISIN">ISIN</option>
									<option value="KAIAMA">KAIAMA</option>
									<option value="MORO">MORO</option>
									<option value="OFFA">OFFA</option>
									<option value="OKE">OKE</option>
									<option value="OYUN">OYUN</option>
									<option value="PATEGI">PATEGI</option>
									<option value="">-------------------------------</option>
									<option value="">         EBONYI STATE            </option>
									<option value="">-------------------------------</option>
									<option value="ABAKILIKI">ABAKILIKI</option>
									<option value="AFIKPO SOUTH">AFIKPO SOUTH</option>
									<option value="EZZA NORTH">EZZA NORTH</option>
									<option value="IKWO">IKWO</option>
									<option value="ISHELU">ISHELU</option>
									<option value="IZZI">IZZI</option>
									<option value="OHAOZRA">OHAOZRA</option>
									<option value="OHAUKWU">OHAUKWU</option>
									<option value="ONICHA">ONICHA</option>
									<option value="EBONYI">EBONYI</option>
									<option value="">-------------------------------</option>
									<option value="">         ENUGU STATE            </option>
									<option value="">-------------------------------</option>
									<option value="ANINRI">ANINRI</option>
									<option value="ISI-UZO">ISI-UZO</option>
									<option value="NKANU EAST">NKANU EAST</option>
									<option value="ENUGU EAST">ENUGU EAST</option>
									<option value="ENUGU NORTH">ENUGU NORTH</option>
									<option value="ENUGU SOUTH">ENUGU SOUTH</option>
									<option value="EZEAGU">EZEAGU</option>
									<option value="IGBO-ETITI">IGBO-ETITI</option>
									<option value="UMU-ITODO">UMU-ITODO</option>
									<option value="AGWU">AGWU</option>
									<option value="UDI MENT">UDI MENT</option>
									<option value="OJI RIVER">OJI RIVER</option>
									<option value="NNSUKKA">NNSUKKA</option>
									<option value="">-------------------------------</option>
									<option value="">         ANAMBRA STATE            </option>
									<option value="">-------------------------------</option>
									<option value="AGUATA">AGUATA</option>
									<option value="ANAMBRA EAST">ANAMBRA EAST</option>
									<option value="ANAMBRA WEST">ANAMBRA WEST</option>
									<option value="ANAOCHA">ANAOCHA</option>
									<option value="AWKA NORTH">AWKA NORTH</option>
									<option value="AWKA SOUTH">AWKA SOUTH</option>
									<option value="AYAMELUM">AYAMELUM</option>
									<option value="DUNUKOFIA">DUNUKOFIA</option>
									<option value="EKWUSIGO">EKWUSIGO</option>
									<option value="IDEMILI NORTH">IDEMILI NORTH</option>
									<option value="IDEMILI SOUTH</">IDEMILI SOUTH</option>
									<option value="IHIALA">IHIALA</option>
									<option value="NJIKOKA">NJIKOKA</option>
									<option value="NNEWI NORTH">NNEWI NORTH</option>
									<option value="NNEWI SOUTH">NNEWI SOUTH</option>
									<option value="OGBARU">OGBARU</option>
									<option value="ONITSHA NORTH">ONITSHA NORTH</option>
									<option value="ONITSHA SOUTH</">ONITSHA SOUTH</option>
									<option value="ORUMBA NORTH">ORUMBA NORTH</option>
									<option value="ORUMBA SOUTH">ORUMBA SOUTH</option>
									<option value="OYI">OYI</option>
									<option value="">-------------------------------</option>
									<option value="">         ABIA STATE            </option>
									<option value="">-------------------------------</option>
									<option value="ABA NORTH">ABA NORTH</option>
									<option value="ABA SOUTH">ABA SOUTH</option>
									<option value="AROCHUKWU">AROCHUKWU</option>
									<option value="BENDE">BENDE</option>
									<option value="IKWUANO">IKWUANO</option>
									<option value="ISIALA NGWA NORTH">ISIALA NGWA NORTH</option>
									<option value="ISIALA NGWA SOUTH">ISIALA NGWA SOUTH</option>
									<option value="ISUIKWUATO">ISUIKWUATO</option>
									<option value="OBI NGWA">OBI NGWA</option>
									<option value="OHAFIA">OHAFIA</option>
									<option value="OSISIOMA">OSISIOMA</option>
									<option value="UGWUNAGBO">UGWUNAGBO</option>
									<option value="UKWA EAST">UKWA EAST</option>
									<option value="UKWA WEST">UKWA WEST</option>
									<option value="UMUAHIA NORTH">UMUAHIA NORTH</option>
									<option value="UMUAHIA SOUTH">UMUAHIA SOUTH</option>
									<option value="UMU NNEOCHI">UMU NNEOCHI</option>
									<option value="">-------------------------------</option>
									<option value="">         IMO  STATE            </option>
									<option value="">-------------------------------</option>
									<option value="ABOH MBAISE">ABOH MBAISE</option>
									<option value="AHIAZU MBAISE">AHIAZU MBAISE</option>
									<option value="EHIME MBANO">EHIME MBANO</option>
									<option value="EZINIHITTE">EZINIHITTE</option>
									<option value="IDEATO NORTH">IDEATO NORTH</option>
									<option value="IDEATO SOUTH">IDEATO SOUTH</option>
									<option value="IHITTE/UBOMA">IHITTE/UBOMA</option>
									<option value="IKEDURU">IKEDURU</option>
									<option value="ISIALA MBANO">ISIALA MBANO</option>
									<option value="ISU">ISU</option>
									<option value="MBAITOLI">MBAITOLI</option>
									<option value="NGOR OKPALA">NGOR OKPALA</option>
									<option value="NJABA">NJABA</option>
									<option value="NKWERRE">NKWERRE</option>
									<option value="NWANGELE">NWANGELE</option>
									<option value="OBOWO">OBOWO</option>
									<option value="OGUTA">OGUTA</option>
									<option value="OHAJI/EGBEMA">OHAJI/EGBEMA</option>
									<option value="OKIGWE">OKIGWE</option>
									<option value="ORLU">ORLU</option>
									<option value="ORSU">ORSU</option>
									<option value="ORU EAST">ORU EAST</option>
									<option value="ORU WEST">ORU WEST</option>
									<option value="OWERRI MUNICIPAL">OWERRI MUNICIPAL</option>
									<option value="OWERRI NORTH">OWERRI NORTH</option>
									<option value="OWERRI WEST">OWERRI WEST</option>
									<option value="ONUIMO">ONUIMO</option>
									<option value="">-------------------------------</option>
									<option value="">         BAYELSA  STATE            </option>
									<option value="">-------------------------------</option>
									<option value="BRASS">BRASS</option>
									<option value="EKEREMOR">EKEREMOR</option>
									<option value="KOLOKUMA/OPOKUMA">KOLOKUMA/OPOKUMA</option>
									<option value="NEMBE">NEMBE</option>
									<option value="OGBIA">OGBIA</option>
									<option value="SAGBAMA">SAGBAMA</option>
									<option value="SOUTHERN IJAW">SOUTHERN IJAW</option>
									<option value="YENAGOA">YENAGOA</option>
									<option value="">-------------------------------</option>
									<option value="">         EDO  STATE            </option>
									<option value="">-------------------------------</option>
									<option value="AKOKO-EDO">AKOKO-EDO</option>
									<option value="EGBEDORE">EGBEDORE</option>
									<option value="EGOR">EGOR</option>
									<option value="ESAN CENTRAL">ESAN CENTRAL</option>
									<option value="ESAN NORTH-EAST">ESAN NORTH-EAST</option>
									<option value="ESAN SOUTH-EAST">ESAN SOUTH-EAST</option>
									<option value="ESAN WEST">ESAN WEST</option>
									<option value="ETSAKO CENTRAL">ETSAKO CENTRAL</option>
									<option value="ETSAKO WEST">ETSAKO WEST</option>
									<option value="IGUEBEN">IGUEBEN</option>
									<option value="IKPOBA OKHA">IKPOBA OKHA</option>
									<option value="ORIHIONMWON">ORIHIONMWON</option>
									<option value="OREDO">OREDO</option>
									<option value="OVIA NORTH-EAST">OVIA NORTH-EAST</option>
									<option value="OVIA SOUTH-WEST">OVIA SOUTH-WEST</option>
									<option value="OWAN EAST">OWAN EAST</option>
									<option value="OWAN WEST">OWAN WEST</option>
									<option value="UHUNMWONDE">UHUNMWONDE</option>
									<option value="">-------------------------------</option>
									<option value="">         CROSS RIVER STATE            </option>
									<option value="">-------------------------------</option>
									<option value="ABI">ABI</option>
									<option value="AKAMKPA">AKAMKPA</option>
									<option value="AKPABUYO">AKPABUYO</option>
									<option value="BAKASSI">BAKASSI</option>
									<option value="BEKWARRA">BEKWARRA</option>
									<option value="BIASE">BIASE</option>
									<option value="BOKI">BOKI</option>
									<option value="CALABAR MUNICIPAL">CALABAR MUNICIPAL</option>
									<option value="CALABAR SOUTH">CALABAR SOUTH</option>
									<option value="ETUNG">ETUNG</option>
									<option value="IKOM">IKOM</option>
									<option value="OBUBRA">OBUBRA</option>
									<option value="OBANLIKU">OBANLIKU</option>
									<option value="OBUBRA">OBUBRA</option>
									<option value="OBUDU">OBUDU</option>
									<option value="ODUKPANI">ODUKPANI</option>
									<option value="OGOJA">OGOJA</option>
									<option value="YAKUUR">YAKUUR</option>
									<option value="YALA">YALA</option>
									<option value="">-------------------------------</option>
									<option value="">         RIVER STATE            </option>
									<option value="">-------------------------------</option>
									<option value="ABUA/ODIAL">ABUA/ODIAL</option>
									<option value="AHOADA/AHOADA WEST">AHOADA/AHOADA WEST</option>
									<option value="AKURU TORU">AKURU TORU</option>
									<option value="ANDONI">ANDONI</option>
									<option value="ASARI TORU">ASARI TORU</option>
									<option value="BONNY">BONNY</option>
									<option value="DEGEMA">DEGEMA</option>
									<option value="ELEME">ELEME</option>
									<option value="EMOHUA">EMOHUA</option>
									<option value="ETCHE">ETCHE</option>
									<option value="GOKANA">GOKANA</option>
									<option value="IKWERE">IKWERE</option>
									<option value="KHANA">KHANA</option>
									<option value="OBIO/AKPOR">OBIO/AKPOR</option>
									<option value="OGBA/EGBEMA/NDONI">OGBA/EGBEMA/NDONI</option>
									<option value="OGU/BOLO">OGU/BOLO</option>
									<option value="OKRIKA">OKRIKA</option>
									<option value="OMUMA">OMUMA</option>
									<option value="OPOBO/NKORO">OPOBO/NKORO</option>
									<option value="OYIBGO">OYIBGO</option>
									<option value="PORT-HARCOURT">PORT-HARCOURT</option>
									<option value="TAI">TAI</option>
									<option value="">-------------------------------</option>
									<option value="">         AKWA IBOM STATE            </option>
									<option value="">-------------------------------</option>
									<option value="EASTERN OBOLO">EASTERN OBOLO</option>
									<option value="ESIT EKET">ESIT EKET</option>
									<option value="ESSIEN UDIM">ESSIEN UDIM</option>
									<option value="ABAK">ABAK</option>
									<option value="EKET">EKET</option>
									<option value="ETIM EKPO">ETIM EKPO</option>
									<option value="IBESIKPO ASUTAN">IBESIKPO ASUTAN</option>
									<option value="ETINAN">ETINAN</option>
									<option value="IBIONO">IBIONO</option>
									<option value="IKA">IKA</option>
									<option value="IKOT ABASI">IKOT ABASI</option>
									<option value="IKOT EKPENE">IKOT EKPENE</option>
									<option value="ITU">ITU</option>
									<option value="INI/IKONO">INI/IKONO</option>
									<option value="MBO">MBO</option>
									<option value="NSIT ATAI">NSIT ATAI</option>
									<option value="NSIT UBIUM/NSIT IBOM">NSIT UBIUM/NSIT IBOM</option>
									<option value="OBOT AKARA">OBOT AKARA</option>
									<option value="OKOBO">OKOBO</option>
									<option value="ONNA">ONNA</option>
									<option value="ORON">ORON</option>
									<option value="ORUK ANAM">ORUK ANAM</option>
									<option value="UDUNG UKO">UDUNG UKO</option>
									<option value="UKANAFAN">UKANAFAN</option>
									<option value="UQUO IBENO">UQUO IBENO</option>
									<option value="URUAN">URUAN</option>
									<option value="URUE OFFIONG">URUE OFFIONG</option>
									<option value="UYO">UYO</option>
									<option value="">-------------------------------</option>
									<option value="">         DELTA STATE            </option>
									<option value="">-------------------------------</option>
									<option value="ANIOCHA NORTH">ANIOCHA NORTH</option>
									<option value="ANIOCHA SOUTH">ANIOCHA SOUTH</option>
									<option value="BOMADI">BOMADI</option>
									<option value="BURUTU">BURUTU</option>
									<option value="ETHIOPE EAST">ETHIOPE EAST</option>
									<option value="ETHIOPE WEST">ETHIOPE WEST</option>
									<option value="IKA NORTH EAST">IKA NORTH EAST</option>
									<option value="ISOKO NORTH">ISOKO NORTH</option>
									<option value="NDOKWA WEST">NDOKWA WEST</option>
									<option value="OKPE">OKPE</option>
									<option value="OSHIMILI">OSHIMILI</option>
									<option value="PATANI">PATANI</option>
									<option value="SAPELE">SAPELE</option>
									<option value="UDU">UDU</option>
									<option value="UGHELLI NORTH">UGHELLI NORTH</option>
									<option value="UGHELLI SOUTH">UGHELLI SOUTH</option>
									<option value="UKWUANI">UKWUANI</option>
									<option value="UVWIE">UVWIE</option>
									<option value="WARRI NORTH">WARRI NORTH</option>
									<option value="WARRI SOUTH">WARRI SOUTH</option>
									<option value="AGBOR">AGBOR</option>
									<option value="ASABA">ASABA</option>
                  </select>
                                    
                             </div>
                         </div>
                         <div class="col-sm-6">
                            <div class="form-group ">
                                <label class="pad-down-5">State OF Resident</label>
                                <label class="sr-only">Resident</label>
                                        <select name="residentstate" class="form-control"  style="height:45px;"  placeholder="Input your state" required="true">
  <option value="" selected=""></option>

  <option value="Abia">Abia</option>

  <option value="Abuja">Abuja</option>

  <option value="Adamawa">Adamawa</option>

  <option value="Akwa Ibom">Akwa Ibom</option>

  <option value="Anambra">Anambra</option>

  <option value="Bayelsa">Bayelsa</option>

  <option value="Bauchi">Bauchi</option>

  <option value="Benue">Benue</option>

  <option value="Borno">Borno</option>

  <option value="Cross River">Cross River</option>

  <option value="Delta">Delta</option>

  <option value="Edo">Edo</option>

  <option value="Ebonyi">Ebonyi</option>

  <option value="Ekiti">Ekiti</option>

  <option value="Enugu">Enugu</option>

  <option value="Gombe">Gombe</option>

  <option value="Imo">Imo</option>

  <option value="Jigawa">Jigawa</option>

  <option value="Kaduna">Kaduna</option>

  <option value="Kano">Kano</option>

  <option value="Katsina">Katsina</option>

  <option value="Kebbi">Kebbi</option>

  <option value="Kogi">Kogi</option>

  <option value="Kwara">Kwara</option>

  <option value="Lagos">Lagos</option>

  <option value="Nassarawa">Nassarawa</option>

  <option value="Niger">Niger</option>

  <option value="Ogun">Ogun</option>

  <option value="Ondo">Ondo</option>

  <option value="Osun">Osun</option>

  <option value="Oyo">Oyo</option>

  <option value="Plateau">Plateau</option>

  <option value="Rivers">Rivers</option>

  <option value="Sokoto">Sokoto</option>

  <option value="Taraba">Taraba</option>

  <option value="Yobe">Yobe</option>

  <option value="Zamfara">Zamfara</option>

</select>
</div>
</div>
			</div>

				<label style="font-size:25px; font-family:Verdana, Arial, Helvetica, sans-serif; color:#FF0000;">Credentials</label>
				 <div class="form-group"  >
                  <label><b style="color:#CC3366; font-size:20px;">Education</b> <br><b style="font-family:'Courier New', Courier, monospace;">
Enter your highest educational qualifications, whether in-view or completed. Please write in full, no abbreviations. E.g. write 'University of Lagos' not 'UNILAG' </label>
                 <label>Name of School or Institute</label></b>
				 <div class="form-group">
                    <input type="text" class="form-control"  style="height:45px;" name="school" required placeholder=''">
                  </div>
             </div>
			   <div class="row row-space-2">
                            <div class="col-sm-6">
                                <div class="form-group ">
                                    <label class="pad-down-5">Course of Study</label>
                                    <label class="sr-only">Course</label>
                                    <input type="text" name="course" value=""  style="height:45px;" maxlength="125" class="form-control">
                                    
                             </div>
                         </div>
                         <div class="col-sm-6">
                            <div class="form-group ">
                                <label class="pad-down-5">Degree</label>
                                <label class="sr-only">Degree</label>
                                <select name="degree" class="form-control"  style="height:45px;"> 
  <option value="" selected=""></option>

  <option value="B.Sc.">B.Sc.</option>

  <option value="B.A.">B.A.</option>

  <option value="B.Ed.">B.Ed.</option>

  <option value="B.Eng.">B.Eng.</option>

  <option value="B.Tech.">B.Tech.</option>

  <option value="Diploma">Diploma</option>

  <option value="MBBS">MBBS</option>

  <option value="HND">HND</option>

  <option value="OND">OND</option>

  <option value="M.Sc.">M.Sc.</option>

  <option value="LL.B">LL.B</option>

  <option value="MBA">MBA</option>

  <option value="PhD">PhD</option>

  <option value="N.C.E">N.C.E</option>

  <option value="S.S.C.E">S.S.C.E</option>

</select>
</div>
</div>
  <div class="col-sm-12">
                            <div class="form-group ">
                                <label class="pad-down-5" style="color:#FF0000">Add More Qualification  (if not skip it)</label>
                                <label class="sr-only">Role</label>
                              
				   <select id="ddlModels" onChange="EnableDisableTextBox(this)" class="form-control"  style="height:45px;"  name="classoption">
						<option value="Select Option">School</option>
					
						<option value="5">Name of School or Institute</option>
				   </select>
                                
                            </div>
                        </div>
</div>


</script>
		<br>
			
				 <div class="form-group"  >
                
				 <div class="form-group">
				    <label class="pad-down-5">Name of School or Institute</label>
                    <input type="text" class="form-control" disabled="disabled"  id="txtOther" name="school1"  style="height:45px;" required placeholder=''">
                  </div>
             </div>
			   <div class="row row-space-2">
                            <div class="col-sm-6">
                                <div class="form-group ">
                                    <label class="pad-down-5">Course of Study</label>
                                    <label class="sr-only">Course</label>
                                    <input type="text" name="course1"  maxlength="125" class="form-control"  style="height:45px;">
                                    
                             </div>
                         </div>
                         <div class="col-sm-6">
                            <div class="form-group ">
                                <label class="pad-down-5">Degree</label>
                                <label class="sr-only">Degree</label>
                                <select name="degree1"  class="form-control"  style="height:45px;">
  <option value="Null" selected=""></option>

  <option value="B.Sc.">B.Sc.</option>

  <option value="B.A.">B.A.</option>

  <option value="B.Ed.">B.Ed.</option>

  <option value="B.Eng.">B.Eng.</option>

  <option value="B.Tech.">B.Tech.</option>

  <option value="Diploma">Diploma</option>

  <option value="MBBS">MBBS</option>

  <option value="HND">HND</option>

  <option value="OND">OND</option>

  <option value="M.Sc.">M.Sc.</option>

  <option value="LL.B">LL.B</option>

  <option value="MBA">MBA</option>

  <option value="PhD">PhD</option>

  <option value="N.C.E">N.C.E</option>

  <option value="S.S.C.E">S.S.C.E</option>

</select>
</div>
</div>
</div>


                <label> <div class="padding-bottom-25">
				<label style="color:#CC3366; font-size:20px;">Work Experience</label><br><b style="font-family:'Courier New', Courier, monospace;">
                Enter your most recent work experience if any, and indicate if you currently work there. Please note that you may be required to provide proof.
				<br>
            </div></label></b>
                  <br>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group ">
                                <label class="pad-down-5">Name of Company or Organization</label>
                                <label class="sr-only">Organization Name</label>
                                <input type="text" name="workexperience" value="" maxlength="125" class="form-control"  style="height:45px;">
                                
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group ">
                                <label class="pad-down-5">Your Role</label>
                                <label class="sr-only">Role</label>
                                <input type="text" name="role" value="" maxlength="125" class="form-control"  style="height:45px;">
                                
                            </div>
                        </div>
						</div>
				 <div class="form-group">
                 <label>I currently work there</label>
                 <div class="form-group">
				    <div class="col-12 col-sm-12">
                    <select class="form-control" required name="workexperience_current_work"  style="height:45px;">
                    <option selected="selected">Select Option</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select>
				  </div>
                  </div>
             </div>
			 
        <label style="color:#CC3366; font-size:20px;">
            Teaching Experience
        </label><br>

        <div class="col-md-12">
            <div class="row row-space-bottom-5">
                <label class="col-md-3 text-right margin-bottom-5" style="font-family:'Courier New', Courier, monospace;">
                    How long have you been teaching?
                </label>
                <div class="col-md-9">
                    <select name="teaching" class="form-control"  style="height:45px;">
  <option value="" selected=""> How Long</option>

  <option value="Less than 2 years">Less than 2 years</option>

  <option value="Between 3 to 5 years">Between 3 to 5 years</option>

  <option value="Between 6 to 10 years">Between 6 to 10 years</option>

  <option value="More than 10 years">More than 10 years</option>

</select>
      </div>
   </div>
    <div class="form-group">
                 <label style="color:#CC3366; font-size:20px;">Academic Curriculum</label><br><b style="font-family:'Courier New', Courier, monospace;">

If you teach academic subjects for nursery, primary or secondary, then select the curriculum you can teach with. Skip this if you teach non-academic subjects or skills. </label></b>
                 <div class="form-group">
				    <div class="col-12 col-sm-12">
                    <select class="form-control" required-"true" name="curriculum_used"  style="height:45px;">
                    <option selected="selected">Select Option</option>
                    <option value="Nigeria">Nigeria</option>
                    <option value="British">British</option>
					<option value="American">American</option>
                    <option value="Montessori">Montessori</option>
                  </select>
				  </div>
                  </div>
				  	<div class="col-12 col-sm-12">
                     <div class="form-group">
                         <label style="color:#CC3366; font-size:15px;"><b style="font-size:20px;">Introduce Yourself to Clients</b> <div style="background-color:#33CCCC;"></label><br><b style="font-family:'Courier New', Courier, monospace; height:500px; padding-left:10px; vertical-align:text-top; text-align:center; text-indent:inherit;">

Your tutor profile is your best opportunity to "sell yourself" as a tutor on Tuteria. Students often look at multiple tutor profiles before selecting a tutor to contact, so you need to be thorough, yet concise in describing your tutoring abilities, qualifications, experience and teaching style.

Follow these important guidelines
Write at least 2-4 paragraphs describing your tutoring and teaching qualifications and experience. Be sure to include any awards or trainings you�ve received that support your teaching credentials.Outline the subjects you specialize in and explain your teaching method. Include any degrees or awards that make you standout and qualified to teach those subjects or skills. Write as though you are talking to the client directly and encourage them to book a lesson with you.

</label></b></div>
                        <textarea class="form-control" name="tutor_description" rows="5" height="120"  placeholder="max 400 word"></textarea>
                      </div>
                </div>
				 <div class="col-sm-12 col-sm-offset-9" align="right">
					  <input type="submit" name="submit"  class="btn btn-primary btn-lg" value="Submit Profile">
					  
                </div>
   
   <br> <br> 
                 

				
		  </div> </div> </div>
		  </form>
  
    </section>
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
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="../../plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="../../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="../../plugins/moment/moment.min.js"></script>
<script src="../../plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<script src="../../plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="../../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- BS-Stepper -->
<script src="../../plugins/bs-stepper/js/bs-stepper.min.js"></script>
<!-- dropzonejs -->
<script src="../../plugins/dropzone/min/dropzone.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });

    //Date and time picker
    $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })

  })
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })

  // DropzoneJS Demo Code Start
  Dropzone.autoDiscover = false

  // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
  var previewNode = document.querySelector("#template")
  previewNode.id = ""
  var previewTemplate = previewNode.parentNode.innerHTML
  previewNode.parentNode.removeChild(previewNode)

  var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    url: "/target-url", // Set the url
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Make sure the files aren't queued until manually added
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
  })

  myDropzone.on("addedfile", function(file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
  })

  // Update the total progress bar
  myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
  })

  myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1"
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
  })

  // Hide the total progress bar when nothing's uploading anymore
  myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0"
  })

  // Setup the buttons for all transfers
  // The "add files" button doesn't need to be setup because the config
  // `clickable` has already been specified.
  document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
  }
  document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true)
  }
  // DropzoneJS Demo Code End
</script>
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

</body>
</html>
