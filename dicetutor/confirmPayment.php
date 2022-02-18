<?php include_once("loginscript.php");?>
<?php  include_once("addrequest.php");?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<title>Performing Maintenance</title>
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
<div id="article">
<h1 style="float:right;" align="right"><img src="images/Dice Tutuors.png" height="200" width="200"></h1>
<div>

<p>  <?php
		   if(isset($_SESSION['email']))
		   {
		     echo "Dear " . " " . " " . $_SESSION['email'];
		   }
		  
		   ?>
		     <?php
		   if(isset($_SESSION['tutorid']))
		   {
		    // echo $_SESSION['tutorid'];
		   }
		   
		   ?>
		   </p>
		   <form action="clientPayment1.php" method="post">
		   <input type="hidden" name="q" value=" <?php echo $_SESSION['tutorid']; ?>" required maxlength="40" class="form-control" size="130" placeholder=""  >
           
<p>We want to notify you that you have made a request. Please proceed to make payment by clicking the link within !<button name="search" style="height:50px;width:80px; background-color:#FFFFFF; color:#FF0000;">Payment</button></p>
			<p>— Powered by Devosta</p>
		    </form>
</div>
</div>
</html>