
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

if (isset($_POST['X']))
   {   
               
				$clientname                =  ($_POST['clientname']);
				
				$que1=mysqli_query($conn,"SELECT * FROM `attendance` WHERE clientname = '$clientname' ");
				$count1=mysqli_num_rows($que1);
			
				if($count1>0)
				 {
		
					      $tutorname =$_POST['tutorname']; 
						  $sql = ("SELECT * FROM serviceadd WHERE tutorname = '$tutorname'");
						  $result = mysqli_query($conn, $sql);
						
						 if (mysqli_num_rows($result) > 0) {
							 // output data of each row
							 while($row = mysqli_fetch_assoc($result)) {		
								    $price = $row['price'];
								    $salary = $row['salary'];
									$interest = $row['interest'];
									
									$hold    = ($price * 0.3);
									$percent = ($price - $hold);
									//-------------update---------------------------	
									echo'$hold';
									$percentage = ($hold + $interest);
									$payment    = ($percent + $salary);
										
									echo'$percentage';	
			                        //----------------------------------------------
									$clientname =$_POST['clientname'];
									$attendance =$_POST['attendance'];
									
									$conn = mysqli_connect("localhost", "root", "");
									if (!$conn) { die('Could not connect: ' . mysqli_error()); }
									$db = mysqli_select_db($conn, "dicetutor");
								$query=("UPDATE serviceadd SET salary='".$payment."',interest='".$percentage."',attendances='".$attendance."' WHERE tutorname='".$tutorname."' ");
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
															
						//-----------------------------------------
									
							}
						 } else {
							 echo "0000 results";
						 }
				 }
				
   }
?>