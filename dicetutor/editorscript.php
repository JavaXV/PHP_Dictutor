<!-- -----------------------------------Update/EDIT Account Profile-------------------------------------------- -->
<!-----------------------------------READ EDIT PROFILE CONDITION FOR DOUBLE INSERT NOT TO OCCOUR------------------------------------


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dicetutor";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 if (isset($_POST['submit']))
        {
            $firstname   = $_POST['firstname'];
			$lastname    = $_POST['lastname'];
            $email       = $_POST['email'];
            $gender      = $_POST['gender'];
            $dob_day     =  $_POST['dob_day'];
			$number1     = $_POST['number1'];
			$number2     = $_POST['number2'];
            $address     = $_POST['address'];
            $vicinity    = $_POST['city'];
            $state       = $_POST['state'];
			$residentstate       = $_POST['residentstate'];
			$description        = $_POST['description'];
            $school             = $_POST['school'];
            $course             = $_POST['course'];
            $degree             = $_POST['degree'];
			
			$school1             = $_POST['school1'];
            $course1             = $_POST['course1'];
            $degree1             = $_POST['degree1'];
			
            $workexperience     = $_POST['workexperience'];
			$role               = $_POST['role'];
            $workexperience_current_work       = $_POST['workexperience_current_work'];
			$teaching                   = $_POST['teaching'];
           
            $curriculum_used                   = $_POST['curriculum_used'];
            $tutor_description                 = $_POST['tutor_description'];
			$code                              =  (rand(1,1000000));
			$Approved                          = "Not-Approved";
			
			
    $que1=mysqli_query($conn,"SELECT * FROM `users` WHERE email = '$email'");
    $count1=mysqli_num_rows($que1);

    if($count1>0)
    {
	
	$que11=mysqli_query($conn,"SELECT * FROM `editprofile` WHERE email = '$email'");
    $count11=mysqli_num_rows($que11);

    if($count11>0)
    {
	header("Location:confirm5Message.php");
			
	}else
	 {
      	  //-----------------------------------------------------------------------------
		  $count = "0";
		  $pay = "payment";
		  $contract = "Pending";
		  $naming = $firstname."".$lastname;
	   $sql = "INSERT INTO `editprofile`(`firstname`,`lastname`,`email`,`gender`,`dob_day`,`number1`,`number2`,`address`,`vicinity`,`state`,`residentstate`,`description`,`school`, `course`, `degree`, `school1`, `course1`, `degree1`, `workexperience`, `role`, `workexperience_current_work`, `teaching`, `curriculum_used`, `tutor_description`, `AdminApprove`, `code` ) VALUES ('" . $firstname . "', '" . $lastname . "','" . $email . "', '" . $gender . "', '" . $dob_day . "', '" . $number1 . "', '" . $number2 . "', '" . $address . "', '" . $vicinity . "', '" . $state . "', '" . $residentstate . "', '" . $description . "',  '" . $school . "', '" . $course . "', '" . $degree . "','" . $school1 . "', '" . $course1 . "', '" . $degree1 . "', '" . $workexperience . "','" . $role . "', '" . $workexperience_current_work . "','" . $teaching . "', '" . $curriculum_used . "', '" . $tutor_description . "', '" . $Approved . "', '" . $code . "')"; 
										 
		if ($conn->query($sql) === TRUE) {
		 
		$sql = "INSERT INTO `attendances` (`id`, `count`, `tutorname`, `code`, `tutoremail`, `tutorphoneno`, `everyone`, `contract`) VALUES (NULL, '$count', '$naming', '$code', '$email', '$number1', '$pay', '$contract')";
					if (mysqli_query($conn, $sql)) {
					   header("Location:uploadphoto.php");
					} else {
					  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
					}
		  
		} else {
		  echo "Error: " . $sql . "<br>" . $conn->error;
		}
		
		$conn->close();
 
     }		
			
    }else
	{
	header("Location:errorMessage.php");			
    }//-----row-------	
} //-----isset-------
?> 
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
		   
					$sql = "SELECT id, FirstName, LastName, Email FROM teacherregister WHERE Email = '$email' ";
					$result = mysqli_query($conn, $sql);
					
					if (mysqli_num_rows($result) > 0) {
					  // output data of each row
					  while($row = mysqli_fetch_assoc($result)) {
						// echo "id: " . $row["id"]. " - Name: " . $row["FirstName"]. " " . $row["LastName"]. "<br>";
						 $firstname = $row["FirstName"];
						 $lastname = $row["LastName"];
					
					  }
					} else {
					  echo "0 results";
					}
					}
					mysqli_close($conn);
            ?> 