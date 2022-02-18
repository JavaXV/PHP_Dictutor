 //---------------------------------------------UPDATE EDIT PROFILE-----------------------------------------------

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
   if(isset($_POST['Update'])){

            $firstname   = $_POST['firstname'];
			$lastname    = $_POST['lastname'];
            $email       = $_POST['email'];
            $gender      = $_POST['gender'];
            $dob_day     =  $_POST['dob_day'];
			$number1     = $_POST['number1'];
            $address     = $_POST['address'];
            $vicinity    = $_POST['vicinity'];
            $state       = $_POST['state'];
			$description        = $_POST['description'];
            $school             = $_POST['school'];
            $course             = $_POST['course'];
            $degree             = $_POST['degree'];
            $workexperience     = $_POST['workexperience'];
			$role               = $_POST['role'];
            $workexperience_current_work       = $_POST['workexperience_current_work'];
			$teaching                   = $_POST['teaching'];
            $curriculum_used                   = $_POST['curriculum_used'];
            $tutor_description                 = $_POST['tutor_description'];
            $code                              = $_POST['code'];
			$residentstate                     = $_POST['residentstate'];
				
				$sql = "UPDATE `editprofile` SET `firstname` = ' $firstname',`lastname` = ' $lastname', `gender` = '$gender', `dob_day` = '$dob_day', `number1` = '$number1', `address` = '$address', `vicinity` = '$vicinity', `state` = '$state', `description` = '$description', `school` = '$school', `course` = '$course', `degree` = '$degree', `workexperience` = '$workexperience', `role` = '$role', `workexperience_current_work` = '$workexperience_current_work', `teaching` = '$teaching', `curriculum_used` = '$curriculum_used', `tutor_description` = '$tutor_description', `residentstate` = '$residentstate' WHERE `editprofile`.`email` = '$email'"; 
				
				if ($conn->query($sql) === TRUE) {
				
				//$query=("UPDATE serviceadd SET phoneno='".$number1."',city='".$vicinity."' WHERE code='".$code."' ");
				$query = "UPDATE `serviceadd` SET `phoneno`= '$number1',`city` = '$vicinity',`address` = '$address',`residentstate` = '$residentstate',`state` = '$state' WHERE `serviceadd`.`code` = '$code'"; 
				
				$result = mysqli_query($conn,$query);
				  if($result)
					  {
					   header("location:updateMessage.php");
					  }else{}
						 
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
		    }
		}
				
	?>