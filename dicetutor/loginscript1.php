<?php


   
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dicetutor";


   $db = mysqli_connect($servername, $username, $password, $dbname);
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $name = mysqli_real_escape_string($db,$_POST['name']);
      $subject = mysqli_real_escape_string($db,$_POST['subject']); 
	 
      
      $sql = "SELECT name, subject FROM serviceadd WHERE name = '$name' and subject = '$subject'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("name");
         $_SESSION['login_user'] = $name;
         
         header("location: confirmMessage.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>