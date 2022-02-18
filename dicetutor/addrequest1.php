<?php include_once("loginscript.php");?>
                                       

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

if (isset($_POST['requestUpdate']))
   {   
		 
			$name =$_POST['name'];
			$address =$_POST['address'];
		    $request =$_POST['request'];
			$tutorid =$_POST['tutorid'];
			$clientemail =$_POST['email'];
			$noofdays =$_POST['noofdays'];
			$duration1 =$_POST['duration1'];
			$duration2 =$_POST['duration2'];
			$class =$_POST['class'];
			$no =$_POST['no'];
			$age =$_POST['age'];
			$days =$_POST['days'];
			$phoneno =$_POST['phoneno'];
			$center =$_POST['center'];
			$timing =$_POST['timing'];
			$timing1 =$_POST['timing1'];
			$currentdate = date("l jS \of F Y h:i:s A");
			$pend = "Pending";
			$check = "Request Made";
			$verifyNo    =  (rand(1,1000000));
		    
			//$HowManyWeeks = date( 'W', strtotime( '".$duration2."' ) ) - date( 'W', strtotime( '".$duration1."' ) );
           // echo "------------------------------------------------------------------------------".$HowManyWeeks;
				$que10=mysqli_query($conn,"SELECT * FROM `serviceadd` WHERE radNo = '$tutorid' AND requestmake = '$check'");
				$count10=mysqli_num_rows($que10);
				if($count10>0)
				 {
					  echo "<script>alert( ' The Time has been Schedule by another Client.');</script>";	
				 }else{
	
			    $que1=mysqli_query($conn,"SELECT * FROM `serviceadd` WHERE timing = '$timing' AND radNo = '$tutorid'");
				$count1=mysqli_num_rows($que1);
				if($count1>0)
				 {
				 	 echo "<script>alert( ' The Time has been Schedule by another Client.');</script>";
	             }else{
		
					$que10=mysqli_query($conn,"SELECT * FROM `serviceadd` WHERE timing1 = '$timing1' AND radNo = '$tutorid'");
					$count10=mysqli_num_rows($que10);
					if($count10>0)
					 {
					   	 echo "<script>alert( ' The Time has been Schedule by another Client.');</script>";				 
			         }else{
						 
                    $que10=mysqli_query($conn,"SELECT * FROM `serviceadd` WHERE phoneno = '$phoneno' AND radNo = '$tutorid'");
					$count10=mysqli_num_rows($que10);
					if($count10>0)
					 {				 
			            $sql = ("SELECT * FROM `serviceadd` WHERE phoneno = '$phoneno' AND radNo = '$tutorid'");
							$result = $conn->query($sql);

							if ($result->num_rows > 0) {
							  // output data of each row
							  while($row = $result->fetch_assoc()) {
							  //echo "id: " . $row["id"]. " - Name: " . $row["city"]. " " . $row["phoneno"]. "<br>";
								   $price = $row['price'];
								   
								   	function week_between_two_dates($date1, $date2)
									{
										$first = DateTime::createFromFormat('Y-m-d', $date1);
										$second = DateTime::createFromFormat('Y-m-d', $date2);
										if($date1 > $date2) return week_between_two_dates($date2, $date1);
										return floor($first->diff($second)->days/7);
									}
									
									$dt1 = $duration1;
									$dt2 = $duration2;
								    $weeklydate = week_between_two_dates($dt1, $dt2);
			                        $operation = $noofdays * $price;
									$operationFinal = $operation * $weeklydate;
									$monthly = $operationFinal / $weeklydate;
									
								
								   	
						  }
						} else {
						  echo "Error: ---------------------------------------" . $sql . "<br>" . $conn->error;
						}
						 
			    $conn = mysqli_connect("localhost", "root", "");
				if (!$conn) { die('Could not connect: ' . mysqli_error()); }
				$db = mysqli_select_db($conn, "dicetutor");
					
				$query=("UPDATE serviceadd SET clientname='".$name."',clientaddress='".$address."',requestmake='".$request."',noofdays='".$noofdays."',duration='".$duration1."',duration2='".$duration2."', daysinweek='".$days."',clientphoneno='".$phoneno."',teachingstatus='".$center."',timing='".$timing."',timing1='".$timing1."',dateenter='".$currentdate."',requestaccept='".$pend."',salary='".$operationFinal."',monthly='".$monthly."',clientemail='".$clientemail."',salary1='".$operationFinal."',class='".$class."',no='".$no."' ,age='".$age."' WHERE radNo='".$tutorid."' AND phoneno ='".$phoneno."' ");
				$result = mysqli_query($conn,$query);
				  if($result)
					  {
					   
						 $_SESSION['tutorid'] = $tutorid;	
						 $_SESSION['name'] = $name;
						 $_SESSION['subject'] = $subject;
					     $sql = ("SELECT * FROM `serviceadd` WHERE phoneno = '$phoneno' AND radNo = '$tutorid'");
						  $result = mysqli_query($conn, $sql);
						
					
						 if (mysqli_num_rows($result) > 0) {
							 // output data of each row
							 while($row = mysqli_fetch_assoc($result)) {		
								   
								    $email = $row['tutoremail'];
									
					   $subject = 'Request Confirmation';
					   $from = 'info@dicetutors.com';
			
					 
				// To send HTML mail, the Content-type header must be set
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				 
				// Create email headers
				$headers .= 'From: '.$from ."\r\n".
					'Reply-To: '.$email."\r\n" .
					'X-Mailer: PHP/' . phpversion();
				 
				// Compose a simple HTML email message
				$message = '<html><body>';
				$message .= '<h1 style="color:#000066; position:absolute; text-align:center;">DICETUTORS</h1>';
				
				$message .= '<br><br>';
				$message .= 'From' . " " . $name;
				$message .= '<br>';
				$message .= ' <p>we believe that education bring unity and focus to our society and we intend to expand knowledge across african so the opportunity lies in your hand. Please confirmed a request been made to you in your Dashboard</p>';

			    $message .= '<br><br><br>';
				$message .= '';
				$message .= '<h4 style="color:#9966FF;">Thanks for Signing Up with DiceTutors!</h4>';
				$message .= '</body></html>';
				 
				// Sending email
				if(mail($email, $subject, $message, $headers)){
				      
					 echo "<script>alert( ' Your Request was Succcesfully sent....in the Next 30min a Tutor will respond to you if your request is accepted.');</script>";
					 	header("Location: confirm2Message.php");
				} else{
					//echo 'Unable to send email. Please try again. Email not send to Tutor';
				    header("Location:confirmPayment.php"); 
				}
                  }
					 } else {

						 echo "0 results";
					 }
								
				  }
				  else
				  {
					//header("Location: uploadphoto.php");
				  }
		         	
					 }else{
						 
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

						    $sql = ("SELECT * FROM `serviceadd` WHERE radNo = '$tutorid'");
							$result = $conn->query($sql);

							if ($result->num_rows > 0) {
							  // output data of each row
							  while($row = $result->fetch_assoc()) {
							  //echo "id: " . $row["id"]. " - Name: " . $row["city"]. " " . $row["phoneno"]. "<br>";
								   $vicinity = $row['city'];
								   $number1 = $row['phoneno'];
								   $email = $row['tutoremail'];
								   $state = $row['state'];
								   $tutorname = $row['tutorname'];
								   $address = $row['address'];
								   $gender = $row['gender'];
								   $image = $row['image'];
								   $code = $row['code']."DT";
								   $subject = $row['subject'];
								   $price = $row['price'];
						
								   $class = $row['classoption'];
								   $serviceoption = $row['serviceoption'];
								   $request = "Request Made";							   
								     
								   $radNo = $row['radNo'];
								   $birth = $row['birth'];
								   $tutorstate = $row['state'];
								   $course = $row['course'];
								   $qualification = $row['qualification'];
								   $school = $row['school'];
								   $verifyNo    =  (rand(1,1000000));
								   
								   			
									function week_between_two_dates($date1, $date2)
									{
										$first = DateTime::createFromFormat('Y-m-d', $date1);
										$second = DateTime::createFromFormat('Y-m-d', $date2);
										if($date1 > $date2) return week_between_two_dates($date2, $date1);
										return floor($first->diff($second)->days/7);
									}
									
									$dt1 = $duration1;
									$dt2 = $duration2;
								    $weeklydate = week_between_two_dates($dt1, $dt2);
			                        $operation = $noofdays * $price;
									$operationFinal = $operation * $weeklydate;
									$monthly = $operationFinal / $weeklydate;
								 
		 $sql = "INSERT INTO `serviceadd` ( `tutorname`, `city`, `phoneno`, `tutoremail`, `state`, `address`, `serviceoption`, `price`, `subject`, `gender`, `image`, `requestaccept`,`radNo`,`classoption`,`code`, `birth`,`tutorstate`,`course`,`qualification`,`school`,`duration`,`duration2`,`salary`,`salary1`,`monthly` ,`clientemail` ,`clientname`, `clientaddress`, `requestmake`,`noofdays`,`daysinweek`,`clientphoneno`,`teachingstatus`,`timing`,`timing1`,`dateenter`,`requestaccept`,`class`,`no`,`age`) VALUES ('" . $tutorname . "', '" . $vicinity . "', '" . $phoneno . "', '" . $email . "', '" . $state. "', '" . $address . "', '" . $serviceoption. "', '" . $price . "', '" . $subject . "', '" . $gender . "', '" . $image . "', '" . $request . "', '" . $tutorid . "', '" . $class . "', '" . $code . "', '" . $birth . "', '" . $tutorstate . "', '" . $course . "', '" . $qualification . "', '" . $school . "', '" . $duration1 . "', '" . $duration2 . "', '" . $operationFinal . "', '" . $operationFinal . "', '" . $monthly . "', '" . $clientemail . "', '" . $name . "', '" . $address . "', '" . $request . "', '" . $noofdays . "', '" . $days . "', '" . $phoneno . "', '" . $center . "', '" . $timing . "', '" . $timing1 . "', '" . $currentdate . "', '" . $pend . "', '" . $class . "', '" . $no . "', '" . $age . "')"; 
		 if ($conn->query($sql) === TRUE) {	
		 
	
				 $_SESSION['tutorid'] = $tutorid;	
				 $_SESSION['name'] = $name;
				 $_SESSION['vicinity'] = $vicinity;
				 $_SESSION['subject'] = $subject;
			     header("Location:confirmPayment.php");
					  		  
		} else {
		  echo "Error: " . $sql . "<br>" . $conn->error;
		}
				
						  }
						} else {
						  echo "Error: ---------------------------------------" . $sql . "<br>" . $conn->error;
						}

						mysqli_close($conn);
					 }
				 }
		    }
		}
	}

?>


