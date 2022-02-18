
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

if (isset($_POST['payment']))
   {   
		
			$payment ="payment";
		    $accept ="Absent";
			$accept1 ="Not-Confirmed";
			$salary ="0";
			$count ="0";
			$interest ="0";
			$date1 = date('15/m/Y');
			$date2 = date('15/m/Y');
			
			$date3 = date('17/m/Y');
			$date4 = date('17/m/Y');
			
				   $sql = "SELECT * FROM attendances WHERE everyone='".$payment."'";
					$result = mysqli_query($conn, $sql);
					
					if (mysqli_num_rows($result) > 0) {
					  // output data of each row
					  while($row = mysqli_fetch_assoc($result)) {
						//echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
						$accountname = $row["accountname"];
						$accountno = $row["accountno"];
						$bank = $row["bank"];
						$tutoremail = $row["tutoremail"];
						$salary1 = $row["salary1"];
						$date  = date('d/m/Y');
						//---------------------------------------
																  			  
		  $sql = "INSERT INTO payment (accountname, accountno, bank, salary, date, tutoremail)VALUES ('$accountname', '$accountno', '$bank', '$salary1', '$date', '$tutoremail')";
							
							if ($conn->query($sql) === TRUE) {
		  $sql = "INSERT INTO payment1 (accountname, accountno, bank, salary, date, tutoremail)VALUES ('$accountname', '$accountno', '$bank', '$salary1', '$date', '$tutoremail')";
							
					if ($conn->query($sql) === TRUE) {
					
									$sql=("UPDATE attendances SET count='".$count."',salary1='".$salary."',interest='".$interest."',attendancestatus='".$accept."',confirmservice='".$accept1."' WHERE everyone='".$payment."' ");
									if (mysqli_query($conn, $sql)) {
									
									  header("Location:csv.php");
													  
									} else {
									  echo "Error updating record: " . mysqli_error($conn);
									}
						} else {
						  echo "Error: " . $sql . "<br>" . $conn->error;
						}
					
					} else {
					  echo "Error: " . $sql . "<br>" . $conn->error;
					}
					  
						//-------------------------------------------
					  }
					} else {
					  echo "0 results";
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
				if (isset($_POST['payment1']))
                {   
				// sql to delete a record
			    $sql = "DELETE FROM payment";	
				
				if (mysqli_query($conn, $sql)) {
				  echo  "<script>alert( ' Record Removed Successfully ');</script>";
				} else {
				  echo "Error deleting record: " . mysqli_error($conn);
				}
				}
				
				mysqli_close($conn);
?>

