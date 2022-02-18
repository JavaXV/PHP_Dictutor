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
 //Insert data
   if(isset($_POST['accountConfirmed'])){

			$name       =  ($_POST['name']);
			$code       =  ($_POST['code']);
			$new_image  =  "Account Verified";
			$tutor_code =  (rand(1,10000000));
		     
		$que1=mysqli_query($conn,"SELECT * FROM `teacherregister` WHERE VerifyNo = '$code' ");
		$count1=mysqli_num_rows($que1);
	
		if($count1>0)
		{
        	$sql = "UPDATE `dicetutor`.`editprofile` SET `code` = '$tutor_code' WHERE `editprofile`.`name` = '$name'";
			if ($conn->query($sql) === TRUE) {
				 header("Location: confirmMessage.php");	
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}else
		{ header("Location: Bank.php");}
			
	 }


?>