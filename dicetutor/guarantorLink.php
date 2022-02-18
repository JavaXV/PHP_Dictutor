<?php include_once("guarantorscript.php");?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
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
<title>DiceTutors| Dashboard</title>
<style type="text/css">
      body { text-align: center; padding: 150px; }
      h1 { font-size: 40px; }
      body { font: 20px Helvetica, sans-serif; color: #333; }
      #article { display: block; text-align: left; width: 650px; margin: 0 auto; }
      a { color: #dc8100; text-decoration: none; }
      a:hover { color: #333; text-decoration: none; }
    </style>
</head>
<body>
<div id="article" style="position:absolute; top:10px; left:300px;">
<h1 style="float:left;" align="left"><img src="images/Dice Tutuors.png" height="160" width="160"></h1>
<div>
<br><br><br>
<p style="color:#0000CC; font-size:24px; position:absolute; left:420px; top:70px;">  Guarantor Form</p>
<br><br>
<p><div class="row" >
        <div class="smart-forms">
        <form  action=""  method="POST" enctype="multipart/form-data">
            
            <div class="panel panel-default row-space-4">
              
          <div class="panel-body"  align="center">
                    
                       
    <div class="row row-space-4"  align="center">
	
        <!-- Label -->
       <!-- <label class="col-md-6 col-sm-6 text-right">Full Name</label>-->
        <div class="col-md-6 col-sm-6 space-for-mobile">
      
        </div>
    </div>

    <div class="row  row-space-4">
        <label class="col-md-6 col-sm-6 text-right" >First Name</label>
        <div class="col-md-6 col-sm-6 space-for-mobile">
            <input type="text" name="firstname" maxlength="40" class="form-control" size="130"  required="" >
           <br>
        </div>
    </div>
	 <div class="row  row-space-4">
        <label class="col-md-6 col-sm-6 text-right" >Last Name</label>
        <div class="col-md-6 col-sm-6 space-for-mobile">
            <input type="text" name="lastname" maxlength="40" class="form-control" size="130"  required="" >
           <br>
        </div>
    </div>
	
	 <div class="row  row-space-4">
        <label class="col-md-6 col-sm-6 text-right">Gender</label>

        <div class="col-md-6 col-sm-6 space-for-mobile">
              <select class="form-control" required name="ggender" >
                    <option selected="selected">Select Option</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
            
        </div>
    </div>
	<br>
	 <div class="row  row-space-4">
        <label class="col-md-6 col-sm-6 text-right" >PhoneNo</label>
        <div class="col-md-6 col-sm-6 space-for-mobile">
            <input type="text" name="phoneno" maxlength="40" class="form-control" size="130"  required="" >
           <br>
        </div>
    </div>
	<div class="row  row-space-4">
        <label class="col-md-6 col-sm-6 text-right">Address</label>

        <div class="col-md-6 col-sm-6 space-for-mobile">
        <textarea class="form-control" name="gaddress" placeholder="Address e.g 12 Wale Street Northingan Surulere Lagos" required="" rows="3" height="120"></textarea>
           <br>
       </div>
    </div>

	<br>
	<div class="row  row-space-4">
        <label class="col-md-6 col-sm-6 text-right">Upload Image</label>

        <div class="col-md-3 col-sm-3 space-for-mobile" style="background-color:#F3F3F3; height:40px; width:30px;">
        <input type="file" name="fileToUpload" align="left" size="100" border="2">
           <br>
       </div>
		
    </div>
	      <br><br>
		  <button type="submit" name="linking" class="btn btn-outline-info" style="left:556px; height:80px; top:580px; position:absolute;">Submit</button>
		  <p>— Powered by Devosta</p>
	</div>
	</div>
	</form>
	</div>
	</div>
	</p>

</div>
</div>
</html>