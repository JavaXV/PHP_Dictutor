<?php include_once("loginscript.php");?>
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
		   
		   ?></p>
<p>We want to notify you that your payment transaction was in complete... <a href="clientPayment1.php">Payment</a>!</p>
<p>— Powered by Devosta</p>
</div>
</div>
</html>