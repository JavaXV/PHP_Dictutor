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

if (isset($_POST['openclose']))
   {   
		
			$tickets =$_POST['tickets'];
			$close =$_POST['close'];
			
			
			if($close == "Close")
			{
			        
					$conn = mysqli_connect("localhost", "root", "");
					if (!$conn) { die('Could not connect: ' . mysqli_error()); }
					$db = mysqli_select_db($conn, "dicetutor");
					$query=("UPDATE tickets SET ticket='".$close."' WHERE ticket='".$tickets."' ");
					$result = mysqli_query($conn,$query);
					  if($result)
						  {
							 echo "<script>alert( ' Ticket has been Close');</script>";
						  }
						  else
						  {
							header("Location: uploadphoto.php");
						  }
							mysqli_close($conn);
			}else
			{
			            $tickets =$_POST['tickets'];
						$ticketer = "Close";
						$conn = mysqli_connect("localhost", "root", "");
						if (!$conn) { die('Could not connect: ' . mysqli_error()); }
						$db = mysqli_select_db($conn, "dicetutor");
						$query=("UPDATE tickets SET ticket='".$tickets."' WHERE ticket='".$ticketer."' ");
						$result = mysqli_query($conn,$query);
						  if($result)
							  {
								 echo "<script>alert( ' Ticket has been Open.');</script>";
							  }
							  else
							  {
								header("Location: uploadphoto.php");
							  }
								mysqli_close($conn);
			}
		 
	
	}

?>