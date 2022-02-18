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
	if(isset($_POST['Add']))
		{
			
					$tutorname                =  ($_POST['tutorname']);
									
					$sql = "SELECT salary, price, interest FROM serviceadd WHERE tutorname = '$tutorname'";
					$result = mysqli_query($conn, $sql);
					
					if (mysqli_num_rows($result) > 0) {
					  // output data of each row
					  while($row = mysqli_fetch_assoc($result)) {
						//echo "id: " . $row["interest"]. " - Name: " . $row["salary"]. " " . $row["price"]. "<br>";
						
						$Pick_Price       = $row["price"];
						
					//-------------Read from Attendance---------------------------
					$tutorname          =  ($_POST['tutorname']);		
					$sql1 = "SELECT salary, price, interest FROM attendance WHERE tutorname = '$tutorname'";
					$result1 = mysqli_query($conn, $sql1);
					
					if (mysqli_num_rows($result1) > 0) {
					  // output data of each row
					  while($row1 = mysqli_fetch_assoc($result1)) {
					  //---------------read---------------------
					  $Pick_Salary      = $row1['salary'];
					  $Pick_Interest    = $row1['interest'];
					  //-------------update---------------------------	
						$Hold    = ($Pick_Price * 0.3);
						$Percent = ($Pick_Price - $Hold);
					  //-------------update---------------------------
						$Percentage = ($Hold + $Pick_Interest);
						$Payment    = ($Percent + $Pick_Salary);	
					//------------------------update attendance---------------------------
					    $tutorname  =$_POST['tutorname'];
						$clientname =$_POST['clientname'];
						$attendance =$_POST['attendance'];
						$date = date("l jS \of F Y h:i:s A");
						$today = date("d-m-Y H:i:s");
						
						$conn = mysqli_connect("localhost", "root", "");
						if (!$conn) { die('Could not connect: ' . mysqli_error()); }
						$db = mysqli_select_db($conn, "dicetutor");
						$query=("UPDATE attendance SET attendance='".$attendance."',timeofconfirmation='".$date."',date='".$today."' WHERE tutorname='".$tutorname."' ");
						$result = mysqli_query($conn,$query);
						  if($result)
							  {
								header("Location: confirm6Message.php");
							  }
							  else
							  {
								header("Location: uploadphoto.php");
							  }
								mysqli_close($con);
			
			
					  
					   }
					} else {
					  echo "0 results";
					}
						
						//--------------------end----------------------------------------
					  }
					} else {
					  echo "0 results";
					}
					
					mysqli_close($conn);
					}	
?>