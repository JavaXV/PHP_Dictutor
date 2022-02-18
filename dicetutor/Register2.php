<!DOCTYPE html>
<!-- saved from url=(0129)https://user.mockplus.com/signup?next=https%3A%2F%2Fwww.mockplus.com%2Fdownload%2Fmockplus-rp%3Fhmsr%3Dwebprototypingtool&source= -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="renderer" content="webkit">
  <meta property="og:title" content="Mockplus">
<!--<meta property="og:url" content="" />-->
<meta property="og:image" content="https://d3h2k7ug3o5pb3.cloudfront.net/idoc/image/2020-10-27/009f4f41-1821-11eb-a688-0326dab191e7.png">
<meta property="og:description" content="All-in-one product design platform for prototyping, collaboration, and creating design systems.">
    <title>DiceTutor Register</title>
    <link rel="shortcut icon" type="image/x-icon" href="https://user.mockplus.com/favicon.ico">
    <link rel="stylesheet" href="./Register_files/iconfont.css">
    <link rel="stylesheet" href="./Register_files/home.css">
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <style>
::placeholder {
  color: blue;
  opacity: 1; /* Firefox */
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
 color: red;
}

::-ms-input-placeholder { /* Microsoft Edge */
 color: red;
}
</style>
 
</head>
<body>
<img src="images/dices.jpg" height="1050" width="100%">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PSTHP97"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<section class="bg">
  <div class="content">
    <div class="header-icon">
      <a href="Login.php">
        <i><img src="images/Dice Tutuors.png" height="100" width="100"></i>
      </a>
    </div>
    <div class="from-content" style="color:#0000CC;">
      <h1 align="middle"> Join Us</h1>
      <h5 align="middle">&nbsp;<asp:Label ID="Lab1" runat="server" Text=""></asp:Label></h5>
	  <?php include_once("registerscript2.php");?>
	 
      <div class="from">
		<form action="Register2.php" method="post" >
        <div class="from-list" style="color:#0033CC; ">
		 <label>First Name</label>
            <input type="text" name="firstname" onBlur="blue" style="color:#FF0000;" placeholder="" required Height="35px" Width="329px">           
        </div>
		 <div class="from-list" style="color:#0033CC; ">
		 <label>Last Name</label>
            <input type="text" name="lastname" onBlur="blue" style="color:#FF0000;" placeholder="" required Height="35px" Width="329px">           
        </div>
		<div class="from-list" style="color:#0033CC;">
		 <label>Email Address</label>
             <input type="text" name="email" placeholder="" required Height="35px" Width="329px">           
        </div>
        
		<div class="from-list">
		<label>Password</label>
           <input type="text" name="password1" placeholder="" required Height="35px" Width="329px">                       
        </div>
		<div class="from-list">
		<label>Confirmed Password</label>
           <input type="text" name="password2" placeholder="" required Height="35px" Width="329px">                       
        </div>
       
        <p class="error-message">&nbsp;</p>
        <div class="submit-btn" align="center" style="background-color:Red;">
		  <button type="submit" name="submit2" class="btn btn-outline-info">Create Account</button> 
        </div>
         <br>
		 <p class="tip signup-tip" style="right:40px; position:absolute; font-size:12px; color:#0000FF;">
         Powered by Devosta
        </p>
      </div>
    </div>
  </div>
  </form>
</section>
<script src="./Register_files/jquery.min.js.download"></script>
<script src="./Register_files/public.js.download"></script>




</body></html>