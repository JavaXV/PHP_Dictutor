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
if(isset($_POST['Info'])){

    $firstname                      =($_POST['firstname']);
	$lastname                       =($_POST['lastname']);
	$gemail                         =($_POST['gemail']);
	$phoneno                        =($_POST['phoneno']);
	$code1                          =($_POST['code']);
    $grelationship                  =($_POST['grelationship']);


$sql = "INSERT INTO `guarantor` (`id`, `name`, `firstname`, `lastname`, `gemail`, `ggender`, `gaddress`, `grelationship`, `image`, `phoneno`, `code`) VALUES (NULL, NULL, '$firstname', '$lastname', '$gemail', NULL, NULL, '$grelationship', NULL, '$phoneno', '$code1')";

if ($conn->query($sql) === TRUE) {
  //echo "New record created successfully";
                 $subject = 'Guarantor Form';
				 $from = 'info@dicetutors.com';
					 
				// To send HTML mail, the Content-type header must be set
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				 
				// Create email headers
				$headers .= 'From: '.$from ."\r\n".
					'Reply-To: '.$gemail."\r\n" .
					'X-Mailer: PHP/' . phpversion();
				 
				// Compose a simple HTML email message
				$message = '<html><body>';
				$message .= '<h1 style="color:#000066; position:absolute; text-align:center;">DICETUTORS</h1>';
				
				$message .= '<br><br>';
		     	$message .= ' <p style="color:#000066; font-size:15px; ">Welcome!  we want you to fill the form as a guarantor for' . " " . $firstname . "  " . $lastname . "</p>";
				$message .= ' <p style="color:#000066; font-size:15px; ">Guarantor PhoneNo:' . $phoneno . "</p>";
			
				$message .= '<br><br>';
				$message .= '<br>';
				$message .= '<form action="guarantorlink.php" method="POST">';
				$message .= '<center><a href="DiceTutor/guarantorlink.php"  text-align:center;><button name="submit" class="form-control" style="color:#FFFF00; background-color:#3399FF; text-align:center; height:55px; width:150px;">Procced</button></a></center>';       
				$message .= '</form>';
			    $message .= '<br><br><br>';
				$message .= '';
				$message .= '<h4 style="color:#9966FF;">Thanks!</h4>';
				$message .= '</body></html>';
				 
				// Sending email
				if(mail($gemail, $subject, $message, $headers)){
					 header("Location: uploadId.php");
				} else{
					echo 'Unable to send email. Please try again.';
				}
                
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
?>

		
<?php
if(isset($_POST['linking'])){

    $image                          = $_FILES['fileToUpload']['name'];
    $firstname                      =($_POST['firstname']);
	$lastname                       =($_POST['lastname']);
	$ggender                        =($_POST['ggender']);
	$phoneno                        =($_POST['phoneno']);
	$gaddress                       =($_POST['gaddress']);


             $filename      = $_FILES['fileToUpload']['tmp_name'];
             $destination   = "picture/" . $_FILES['fileToUpload']['name'];
             move_uploaded_file($filename, $destination);	

            $conn = mysqli_connect("localhost", "root", "", "dicetutor");
		  
						    $sql = ("SELECT * FROM `guarantor` WHERE phoneno = '$phoneno'");
							$result = $conn->query($sql);

							if ($result->num_rows > 0) {
							  // output data of each row
							  while($row = $result->fetch_assoc()) {
							  //echo "id: " . $row["id"]. " - Name: " . $row["city"]. " " . $row["phoneno"]. "<br>";
								   $code = $row['code'];
								   $gemail = $row['gemail'];
								   $grelationship = $row['grelationship'];
								   
			     		}
							} else {
							  // echo "Error: ---------------------------------------" . $sql . "<br>" . $conn->error;
							}
							    $que1=mysqli_query($conn,"SELECT * FROM `guarantor` WHERE phoneno = '$phoneno'");
								$count1=mysqli_num_rows($que1);
								if($count1>0)
								 {
								     															   
								    $query =  "  INSERT INTO `dicetutor`.`guarantorlink` (
`image` ,
`firstname` ,
`lastname` ,
`ggender`,
`phoneno`,
`code`,
`grelationship`,
`gemail`,
`gaddress` 

)VALUES

  ( '$image','$firstname','$lastname','$ggender','$phoneno','$code', '$grelationship', '$gemail', '$gaddress')";

            if(mysqli_query($conn, $query)){

                header("Location: guarantorMessage.php");
            }else{

                echo "<script>alert( 'Error Encounter during Gurantor form!');</script>";

            }
								 }else{
									 echo "<script>alert( 'NOTE: Use the Gurantor PhoneNo the Tutor Registered with that was send to your Email.');</script>";
									 }
		


        }
        ?>
		
<!-------------------------------------------------Guarantor Info-------------

		
<!-----------------------Acount Verification-----------------------------------------
		
		<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dicetutor";


    $conn = mysqli_connect($servername, $username, $password, $dbname);

		if(isset($_POST['accountConfirmed']))
		{
			$name       =  ($_POST['name']);
			$code       =  ($_POST['code']);
			$new_image  =  "Account Verified";
			$tutor_code =  (rand(1,10000000));
		
			$que1=mysqli_query($conn,"SELECT * FROM `teacherregister` WHERE VerifyNo = '$code' ");
			$count1=mysqli_num_rows($que1);
		
			if($count1>0)
			{
			   $conn = mysqli_connect("localhost", "root", "");
			   if (!$conn) { die('Could not connect: ' . mysqli_error()); }
			   $db = mysqli_select_db($conn, "dicetutor");
			   $query=("UPDATE teacherregister SET AccountVerify='".$new_image."' WHERE VerifyNo='".$code."' ");
			   $result = mysqli_query($conn,$query);
			   if($result)
					  {
							// header("Location: confirmMessage.php");	
					  }
					  else
					  {
						echo "<script>
						alert('Wrong Code Account not Activated!.');
						</script>";
					  }
			}else{
				header("Location: errorsMessage.php");
			}
		    $conn->close();
		}

?>
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
if(isset($_POST['guarantorInfo'])){

    $firstname                      =($_POST['firstname']);
	$lastname                       =($_POST['lastname']);
	$gemail                         =($_POST['gemail']);
	$ggender                        =($_POST['ggender']);
	$gaddress                       =($_POST['gaddress']);
	$phoneno                        =($_POST['phoneno']);
	$code1                          =($_POST['code']);
    $grelationship                  =($_POST['grelationship']);

$sql = "INSERT INTO `guarantor` (`id`,`firstname`, `lastname`, `gemail`, `ggender`, `gaddress`, `grelationship`, `phoneno`, `code`) VALUES (NULL, '$firstname', '$lastname', '$gemail', '$ggender', '$gaddress', $grelationship', '$phoneno', '$code1')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
?>	