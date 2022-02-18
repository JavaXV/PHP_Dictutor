<?php include_once("loginscript.php");?>
<?php include_once("search.php");?>
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
  
  <style>


    input[type=search] {
    width: 100%;
    padding: 2px 20px;
    margin: 8px 0;
    border: 1px;
	background-color:#006699;
    border-bottom: 0px solid #006699;
	font-size:16px;
	font-family:"Courier New", Courier, monospace;
	color:white;
}

    input[type=search] {
    width: 100%;
    padding: 2px 20px;
    margin: 8px 0;
    border: 1px;
	background-color:#006699;
    border-bottom: 0px solid #006699;
	font-size:16px;
	font-family:"Courier New", Courier, monospace;
	color:white;
}
  
</style>


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
			echo "<td><img height='60' width='73' src='picture/".$row['image3']."'></td>";
            echo "</tr>";
			
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
      //  echo "No records matching your request were found.";
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
          <a href="#" class="d-block" style="font-size:14px;">
		  <?php
		   if(isset($_SESSION['email']))
		   {
		     echo $_SESSION['email'];
		   }
		   
		   ?></a>
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
            <h1 class="m-0">Find Tutors Closer To Your Location...</h1>
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

    <!-- Main content -->
    <section class="content">
          <section class="user-login section">
	<div class="container" style="position:absolute; top:150px;">
		<div class="row">
			<div class="col-12">
				<div class="block">
					<!-- Image -->
					<div class="image align-self-center" style="padding-left:10px;"><img src="images/copy.jpg" width="600px" height="500px" alt="desk-image">
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
			    <form action="liist.php" method="post">
				   <select class="form-control" required name="search1">
                                     <option value="Location: E.g  Surulere">Location: E.g  Surulere</option>
					 
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
				  <br>          
				   <select class="form-control" required name="subject">
                     <option value="Select State">Courses & Category</option>
					 
                                     <option value="Java(Advance-Class)">---------------------------------------------------------------------</option>
					                  <option value="Java(Advance-Class)">              ADVANCE CLASS                                         </option>
									  <option value="Java(Advance-Class)">-------------------------------------------------------------------</option>
									  <option value="Database Management(SQLite,MySQL,MongoDB)(Advance)">(SQLite,MySQL,MongoDB)</option>
                                      <option value="Java(Advance-Class)">Java,JavaFX</option>
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
									   <option value="fiat">                                                                 </option>
									   <option value="audi">-----------------------------------------------------------------</option>
									  <option value="fiat">          SENIOR CLASS          </option>
                                      <option value="audi">------------------------------------------------------------------</option>
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
									   <option value="fiat">                                                                 </option>
									   <option value="audi">-----------------------------------------------------------------</option>
									  <option value="fiat">          JUNIOR CLASS          </option>
                                      <option value="audi">------------------------------------------------------------------</option>
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
                                       <option value="fiat">                                                                 </option>
									   <option value="audi">-----------------------------------------------------------------</option>
									  <option value="fiat">          PRIMARY CLASS          </option>
                                      <option value="audi">------------------------------------------------------------------</option> 
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
							<!-- Submit Button -->			
						  <br>
						  <button type="submit" name="requestUpdate" class="btn btn-outline-info" style="width:160px; height:60px;">Search</button>
				
			      </form>
						<div class="new-acount">
					   <p style="color:red;">Powered by <a href="https://demo.themefisher.com/small-apps/privacy-policy.html">Devosta Solution.</a></p>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> 
   
  
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
