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

if (isset($_POST['submited']))
   {   
		
			$code =$_POST['radNo'];
			$accept ="Request Accepted";
			
			
		    $conn = mysqli_connect("localhost", "root", "");
			if (!$conn) { die('Could not connect: ' . mysqli_error()); }
			$db = mysqli_select_db($conn, "dicetutor");
			$query=("UPDATE serviceadd SET requestaccept='".$accept."'  WHERE id='".$code."' ");
			$result = mysqli_query($conn,$query);
			  if($result)
				  {
						 echo "<script>alert( ' You have just Accept a request.');</script>";
				
				  }
				  else
				  {
					   // header("Location: uploadphoto.php");
				  }
		        	mysqli_close($conn);
	
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

if (isset($_POST['submitting']))
   {   
		
			$code =$_POST['No'];
			$accept ="Decline Request";
			
			
		    $conn = mysqli_connect("localhost", "root", "");
			if (!$conn) { die('Could not connect: ' . mysqli_error()); }
			$db = mysqli_select_db($conn, "dicetutor");
			$query=("UPDATE serviceadd SET requestaccept='".$accept."'  WHERE id='".$code."' ");
			$result = mysqli_query($conn,$query);
			  if($result)
				  {
						 echo "<script>alert( ' You have just decline a request.');</script>";
				
				  }
				  else
				  {
					   // header("Location: uploadphoto.php");
				  }
		        	mysqli_close($conn);
	
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

if (isset($_POST['submit']))
   {   
		
			$code =$_POST['radNo'];
			$accept ="Confirmed";
			$present ="present";
			$date = date('d/m/Y');
			$active = "Active";
			
		    $conn = mysqli_connect("localhost", "root", "");
			if (!$conn) { die('Could not connect: ' . mysqli_error()); }
			$db = mysqli_select_db($conn, "dicetutor");
			$query=("UPDATE attendances SET confirmservice='".$accept."',attendancestatus='".$present."',date='".$date."'  WHERE id='".$code."' ");
			$result = mysqli_query($conn,$query);
			  if($result)
				  {
				     
				   $sql = "SELECT * FROM attendances WHERE id='".$code."'";
					$result = mysqli_query($conn, $sql);
					
					if (mysqli_num_rows($result) > 0) {
					  // output data of each row
					  while($row = mysqli_fetch_assoc($result)) {
						//echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
						$count = $row["count"];
						$price = $row["price"];
						$contract = $row["contract"];
						$codes = $row["code"];
						
						$counting = $count + 1;
						$hold = $counting * $price;
						$interest = $hold * 0.3;
						$final = $hold - $interest;
						 
						
						if($contract == $active)
						{  
			 $sql=("UPDATE attendances SET confirmservice='".$accept."',count='".$counting."',salary1='".$final."',interest='".$interest."' WHERE id='".$code."' ");
						if (mysqli_query($conn, $sql)) {
						} else {
						  echo "Error updating record: " . mysqli_error($conn);
						}
			$sql1=("UPDATE attendanceview SET radNo='".$accept."' WHERE code='".$codes."' ");
						if (mysqli_query($conn, $sql1)) {
						   echo "<script>alert( ' You have just Confirmed a Tutor Attendance');</script>";
						}
						
						}else{echo "<script>alert( ' Admin need to approve the contract you extended Or You have been STOP by Admin');</script>";}
						
						
					  }
					} else {
					  echo "0 results";
					}

				
				  }
				  else
				  {
					// header("Location: uploadphoto.php");
				  }
		        	mysqli_close($conn);
	
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

if (isset($_POST['nameValue1']))
   {   
		
			$code =$_POST['code'];
			$accept =$_POST['accept'];
			
			
			
		    $conn = mysqli_connect("localhost", "root", "");
			if (!$conn) { die('Could not connect: ' . mysqli_error()); }
			$db = mysqli_select_db($conn, "dicetutor");
			$query=("UPDATE serviceadd SET requestaccept='".$accept."'  WHERE radNo='".$code."' ");
			$result = mysqli_query($conn,$query);
			  if($result)
				  {
					header("Location: confirm3Message.php");
				  }
				  else
				  {
					header("Location: uploadphoto.php");
				  }
		        	mysqli_close($con);
	
	}

?>



<?php
/**
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dicetutor";


       $conn = mysqli_connect($servername, $username, $password, $dbname);
	   $conn1 = mysqli_connect($servername, $username, $password, $dbname);

		if(isset($_POST['AddClass']))
		{
			
				$name                =  ($_POST['name']);
				
				$que1=mysqli_query($conn,"SELECT * FROM `bank` WHERE account_name = '$name' ");
				$count1=mysqli_num_rows($que1);
			
				if($count1>0)
				 {
					        $name =$_POST['name'];
							$date = date("l jS \of F Y h:i:s A");
							$hours =$_POST['hours'];
							$startenddate =$_POST['startenddate'];
							$clientname =$_POST['clientname'];
							$days =$_POST['days'];
							$enddate =$_POST['enddate'];
						    $radNo            =  (rand(1,10000));
						  
						  $sql = ("SELECT * FROM bank WHERE account_name LIKE '$name%'");
						  $result = mysqli_query($conn, $sql);
						
					
						 if (mysqli_num_rows($result) > 0) {
							 // output data of each row
							 while($row = mysqli_fetch_assoc($result)) {		
								   
								   $account_name = $row['account_name'];
								   $account_id = $row['account_id'];
								   $bank = $row['bank'];
						
								   
		$sql = "INSERT INTO `attendance` ( `tutorname`, `date`, `noofhours`, `classstarttime`, `clientname`, `daysofclass`, `paymentdate`, `accountno`, `accountname`, `bank`  ) VALUES ('" . $name . "', '" . $date . "', '" . $hours . "', '" . $startenddate . "', '" . $clientname. "', '" . $days . "', '" . $enddate. "', '" . $account_id . "', '" . $account_name . "', '" . $bank . "')"; 
		 if ($conn->query($sql) === TRUE) {		
		  header("Location:confirm1Message.php");
		  
		} else {
		  echo "Error: " . $sql . "<br>" . $conn->error;
		}
								   	   
							 }
						 } else {
							 echo "0 results";
						 }	
						
				 }else
					 {
					    

					 }
					 $conn->close();
		}
**/
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

if (isset($_POST['submits']))
   {   
		
			$code =$_POST['radNo'];
			$tutorname =$_POST['tutorname'];
			$attendancestatus =$_POST['attendancestatus'];
			$clientnames =$_POST['clientnames'];
			$accept ="Present";
			$confirmservice =$_POST['confirmservice'];
			$code1 =$_POST['code'];
			$timing =$_POST['timing'];
			$tutoremail =$_POST['tutoremail'];
			$date = date('d/m/Y');
			$dates  = date("l jS \of F Y h:i:s A");
			
			 $que1=mysqli_query($conn,"SELECT * FROM `attendanceview` WHERE date = '$dates'");
		     $count1=mysqli_num_rows($que1);
			
			if($count1>0)
			 {		
					$conn = mysqli_connect("localhost", "root", "");
					if (!$conn) { die('Could not connect: ' . mysqli_error()); }
					$db = mysqli_select_db($conn, "dicetutor");
					$query=("UPDATE attendances SET attendancestatus='".$accept."',date='".$date."'  WHERE id='".$code."' ");
					$result = mysqli_query($conn,$query);
					  if($result)
						  {			
						   $date  = date("l jS \of F Y h:i:s A");
						   $monthyear = $code1.'/'.date('m/Y');
									  
						  $sql = "INSERT INTO attendanceview (tutorname, attendancestatus, date, lessonstarttime, clientname, radNo, code, monthyear, tutoremail)VALUES ('$tutorname', '$accept', '$date', '$timing', '$clientnames', '$confirmservice', '$code1', '$monthyear', '$tutoremail')";
									
									if ($conn->query($sql) === TRUE) {
									  header("Location:confirmAttendanceMessage.php");
									} else {
									  echo "Error: " . $sql . "<br>" . $conn->error;
									}
						  }
						  else
						  {
							// header("Location: uploadphoto.php");
						  }
            }else{echo "<script>alert( ' You can only add Attendance Once.');</script>";}
		        	mysqli_close($conn);
	
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

if (isset($_POST['submitss']))
   {   
		
			$code =$_POST['Nos'];
			$accept ="Absent";
			$accept1 ="Not-Confirmed";
			
		    $conn = mysqli_connect("localhost", "root", "");
			if (!$conn) { die('Could not connect: ' . mysqli_error()); }
			$db = mysqli_select_db($conn, "dicetutor");
			$query=("UPDATE attendances SET attendancestatus='".$accept."',confirmservice='".$accept1."'  WHERE id='".$code."' ");
			$result = mysqli_query($conn,$query);
			  if($result)
				  {
				    header("Location:confirmAttendanceMessage1.php");
				    $sql = "SELECT * FROM attendances WHERE id='".$code."'";
					$result = mysqli_query($conn, $sql);
					
					if (mysqli_num_rows($result) > 0) {
					  // output data of each row
					  while($row = mysqli_fetch_assoc($result)) {
						//echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
						$count = $row["count"];
						$price = $row["price"];
						
						$counting = $count - 1;
						$final = $counting * $price;
						$interest = $final * 0.3;
						
				$sql=("UPDATE attendances SET confirmservice='".$accept1."',count='".$counting."',salary1='".$final."',interest='".$interest."' ,attendancestatus='".$accept."'  WHERE id='".$code."' ");
						if (mysqli_query($conn, $sql)) {
						
						   echo "<script>alert( ' You have just Mark Absent in Tutors Attendance.');</script>";
				
						  
						} else {
						  echo "Error updating record: " . mysqli_error($conn);
						}
						
						
						
								
					  }
					} else {
					  echo "0 results";
					}

				  }
				  else
				  {
					// header("Location: uploadphoto.php");
				  }
		        	mysqli_close($conn);
	
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

if (isset($_POST['submitss1']))
   {   
		
			$code =$_POST['Nos'];
			$accept ="Absent";
			$accept1 ="Not-Confirmed";
			
		    $conn = mysqli_connect("localhost", "root", "");
			if (!$conn) { die('Could not connect: ' . mysqli_error()); }
			$db = mysqli_select_db($conn, "dicetutor");
			$query=("UPDATE attendances SET attendancestatus='".$accept."',confirmservice='".$accept1."'  WHERE id='".$code."' ");
			$result = mysqli_query($conn,$query);
			  if($result)
				  {
				    header("Location:confirmAttendanceMessage1.php");
				  }
				  else
				  {
					// header("Location: uploadphoto.php");
				  }
		        	mysqli_close($conn);
	
	}

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
		
		if (isset($_POST['ticket']))
		   {   
				
					$name =$_POST['name'];
					$email =$_POST['email'];
					$message =$_POST['message'];
					$ticketing =$_POST['tickets'];
					$ticketemail =$_POST['ticketemail'];
					$date  = date("l jS \of F Y h:i:s A");
					$status = "Un-Checked";
					$adminstatus = "Open";
					
					 $sql = ("SELECT * FROM `tickets` WHERE ticket = '$ticketing'");
							$result = $conn->query($sql);

							if ($result->num_rows > 0) {
							  // output data of each row
							  while($row = $result->fetch_assoc()) {
							
								   $ticketes = $row['ticket'];
								   if($ticketes  == "Close")
								   {  
								    echo "<script>alert( 'Ticketting has been Close.');</script>";
								   }
								   else
								   {	
	     $sql = "INSERT INTO tickets (name, email, message, ticket, mails, date, status)VALUES ('$name', '$email', '$message', '$ticketing', '$ticketemail', '$date', '$status')";
												
								if (mysqli_query($conn, $sql)) {
									 echo "<script>alert( ' Your Dispute Message has been Submitted will be re-view by Admin.');</script>";
								} else {
								  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
								}
				         	}
								   
							  }
						} else {
						 // echo "Error: ---------------------------------------" . $sql . "<br>" . $conn->error;
						  echo "<script>alert( 'Ticketting has been Close.');</script>";
						}
					
	
			}
					mysqli_close($conn);
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

if (isset($_POST['submitTicket']))
   {   
		
			$code =$_POST['tick'];
			$accept ="Checked";
			$accept1 ="Not-Confirmed";
			
		    $conn = mysqli_connect("localhost", "root", "");
			if (!$conn) { die('Could not connect: ' . mysqli_error()); }
			$db = mysqli_select_db($conn, "dicetutor");
			$query=("UPDATE tickets SET status='".$accept."' WHERE id='".$code."' ");
			$result = mysqli_query($conn,$query);
			  if($result)
				  {
				     echo "<script>alert( ' Ticketting Issue has been Checked.');</script>";
				  }
				  else
				  {
					// header("Location: uploadphoto.php");
				  }
		        	mysqli_close($conn);
	
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

if (isset($_POST['aprrovedext']))
   {   
		
			$code =$_POST['radNo'];
			$accept ="Active";
			
			
		    $conn = mysqli_connect("localhost", "root", "");
			if (!$conn) { die('Could not connect: ' . mysqli_error()); }
			$db = mysqli_select_db($conn, "dicetutor");
			$query=("UPDATE attendances SET contract='".$accept."'  WHERE id='".$code."' ");
			$result = mysqli_query($conn,$query);
			  if($result)
				  {
						 echo "<script>alert( ' You have just Approved Attendance.');</script>";
				
				  }
				  else
				  {
					   // header("Location: uploadphoto.php");
				  }
		        	mysqli_close($conn);
	
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

if (isset($_POST['pause']))
   {   
		
			$code =$_POST['radNo'];
			$accept ="Ended";
			
			
		    $conn = mysqli_connect("localhost", "root", "");
			if (!$conn) { die('Could not connect: ' . mysqli_error()); }
			$db = mysqli_select_db($conn, "dicetutor");
			$query=("UPDATE attendances SET contract='".$accept."'  WHERE id='".$code."' ");
			$result = mysqli_query($conn,$query);
			  if($result)
				  {
						 echo "<script>alert( ' You have just Pause or Stop Attendance.');</script>";
				
				  }
				  else
				  {
					   // header("Location: uploadphoto.php");
				  }
		        	mysqli_close($conn);
	
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

if (isset($_POST['delete']))
   {   
		
			$code =$_POST['q'];
			$accept ="Pending";
			
			
		    $conn = mysqli_connect("localhost", "root", "");
			if (!$conn) { die('Could not connect: ' . mysqli_error()); }
			$db = mysqli_select_db($conn, "dicetutor");
			//$query=("DELETE FROM serviceadd WHERE id='".$code."' ");
			$query=("UPDATE serviceadd SET requestaccept='".$accept."'  WHERE id='".$code."' ");
			$result = mysqli_query($conn,$query);
			  if($result)
				  {
						 echo "<script>alert( 'Service Request is under Pending.');</script>";
				
				  }
				  else
				  {
					   // header("Location: uploadphoto.php");
				  }
		        	mysqli_close($conn);
	
	}

?>