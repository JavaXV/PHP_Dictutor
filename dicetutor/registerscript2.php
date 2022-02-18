<?php  
session_start();
?>
<!-- -----------------------------------REGISTRATION Account Creation-------------------------------------------- -->
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
 if (isset($_POST['submit2']))
        {
            $firstname    = $_POST['firstname'];
			$lastname    = $_POST['lastname'];
            $email       = $_POST['email'];
            $password1   = $_POST['password1'];
            $password2   = $_POST['password2'];
            $verifyNo    =  (rand(1,1000000));
		     
			 
			$que1=mysqli_query($conn,"SELECT * FROM `users` WHERE email2 = '$email' AND  password = '$password1' ");
			$count1=mysqli_num_rows($que1);
		
			if($count1>0)
			{
				   echo "<script>alert( 'Name Or Password Already Exist!');</script>";
			}
			else
			{
			if( $password1 != $password2 )
		     {
			   echo "<script>alert( 'Error Password Not Match!');</script>";
			  
			 }
			 else
			 {
	$sql = "INSERT INTO teacherregister (FirstName, LastName, Email, Password, Password1, VerifyNo) VALUES ('" . $firstname . "','" . $lastname . "', '" . $email . "', '" . $password1 . "', '" . $password2 . "', '" . $verifyNo . "') ";
		  
		  
			 if ($conn->query($sql) === TRUE)
			 {
			 $sqlpassword = "INSERT INTO users (name2, email2, password) VALUES ('" . $firstname . "', '" . $email . "', '" . $password1 . "') ";
			  if ($conn->query($sqlpassword) === TRUE) 
			   {
			   $sqlpassword1 = "INSERT INTO  validcard (email) VALUES ('" . $email . "') ";
			   if ($conn->query($sqlpassword1) === TRUE) 
			   {}
				 $_SESSION['email'] = $email;
				$email =  $_SESSION['email'];
				$subject = 'Account Verification';
				$from = 'info@dicetutors.com';
				
				if(isset($_SESSION['email']))
					   {
						 $email =  $_SESSION['email'];
						// echo $email;
					   }
		 
				// To send HTML mail, the Content-type header must be set
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				 
				// Create email headers
				$headers .= 'From: '.$from ."\r\n".
					'Reply-To: '.$email."\r\n" .
					'X-Mailer: PHP/' . phpversion();
				 
				// Compose a simple HTML email message
				$message = '<html><body>';
				$message .= '';
				//$message .= '<h1 style="color:#000066; position:absolute; text-align:center;"><img src="images/Dice Tutuors mockup.jpg" height="120" width="130"></h1>';
			//	$message .= "<img src='about-image.jpg' height="120" width="130" alt='upload'/></body></html>";
			    $img = "http://localhost/dicetutor/about-image.jpg";
				$message .= '<h1 style="color:#000066; position:absolute; text-align:center;">DICETUTORS</h1>';
				
				$message .= '<br><br>';
				$message .= 'Hello' . " " . $firstname . " " . $lastname;
				$message .= '<br>';
				$message .= 'Email : ' . " ". $email ;
				$message .= '<br>';
				$message .= ' <p>Thank you for taking the time to sign up with Dicetutors! To get things going we need to verify that this is valid email address. At dice tutors, we offer more than just a lesson but an opportunity for every student to grow and challenge themselves to becoming better. Please click on the link below to confirm your email account. </p>';
				  
				$message .= '<br>';
				$message .= '<form action="Login.php" method="POST">';
				$message .= '<br><br>';
	
				$message .= '<center><a href="DiceTutor/Login.php"  text-align:center;><button name="submit" class="form-control" style="color:#0000FF; text-align:center; height:55px; width:150px;">Procced To Login</button></a></center>';       
				$message .= '</form>';
				$message .= '<br>';
				//$message .= 'Verification Code :' . $verifyNo ;
				$message .= '<br>';
		
			    $message .= '<br><br><br>';
				$message .= '';
				$message .= '<h4 style="color:#9966FF;">Thanks for signing up with dicetutors!</h4>';
				$message .= '</body></html>';
				 
				// Sending email
				if(mail($email, $subject, $message, $headers)){
					  header("Location: confirmVerification.php");
				} else{
					echo 'Unable to send email. Please try again.';
						  
				}
							
				}    
				 } 
				 else {
					    echo "Error: " . $sql . "<br>" . $conn->error;
					  }
		    }
		    $conn->close();
		  
		}
	 }
       
?>