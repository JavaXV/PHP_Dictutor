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
            $name =$_POST['name'];
		    $new_image1= $_FILES['file']['name'];
			$new_image2 = $_FILES['file2']['name'];
			$idcard     =$_POST['idcard'];
			$nin =$_POST['nin'];
			
			$conn = mysqli_connect("localhost", "root", "");
			if (!$conn) { die('Could not connect: ' . mysqli_error()); }
			$db = mysqli_select_db($conn, "dicetutor");
		    $query= "UPDATE bank SET image1='".$new_image1."', image2='".$new_image2."', nin='".$nin."', idcard='".$idcard."' WHERE account_name= '".$name."' ";
			$result = mysqli_query($conn,$query);
			  if($result)
				  {
					header("Location: confirmMessage.php");
				  }
				  else
				  {
					header("Location: uploadId.php");
				  }
		        	mysqli_close($conn);
	
	}

?>