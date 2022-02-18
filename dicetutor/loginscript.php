<?php  
session_start();
?>
<!-- -------------------------------LOGIN-------------------------------------------------->
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dicetutor";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

		if(isset($_POST['Login']))
		{
			
			$email       =  ($_POST['email']);
			$password      =  ($_POST['password']);
			
		
			$que1=mysqli_query($conn,"SELECT * FROM `users` WHERE email = '$email'  AND password = '$password' ");
			$count1=mysqli_num_rows($que1);
		
			if($count1>0)
			{
			  $_SESSION['email'] = $email;
			 header("location:DashboardTeacher.php");
				
			}else{
				echo "<script>
					alert('Wrong Email and Password!.');
				</script>";
		
			}
		   // $conn->close();
		}

?>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dicetutor";


    $conn = mysqli_connect($servername, $username, $password, $dbname);

		if(isset($_POST['Login']))
		{
			
			$email       =  ($_POST['email']);
			$password      =  ($_POST['password']);
			
		
			$que1=mysqli_query($conn,"SELECT * FROM `users` WHERE email1 = '$email'  AND password = '$password' ");
			$count1=mysqli_num_rows($que1);
		
			if($count1>0)
			{
			  $_SESSION['email'] = $email;
			 header("location:DashboardParent.php");
				
			}else{
				echo "<script>
					alert('Wrong Email and Password!.');
				</script>";
		
			}
		   // $conn->close();
		}

?>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dicetutor";


    $conn = mysqli_connect($servername, $username, $password, $dbname);

		if(isset($_POST['Login']))
		{
			
			$email       =  ($_POST['email']);
			$password      =  ($_POST['password']);
			
		
			$que1=mysqli_query($conn,"SELECT * FROM `users` WHERE email2 = '$email'  AND password = '$password' ");
			$count1=mysqli_num_rows($que1);
		
			if($count1>0)
			{
			  $_SESSION['email'] = $email;
			 header("location:DashboardSchool.php");
				
			}else{
				echo "<script>
					alert('Wrong Email and Password!.');
				</script>";
		
			}
		   // $conn->close();
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

//---------------------------------
   if(isset($_POST['submit1'])){

            $new_image1= $_FILES['file']['name'];
			$new_image2 = $_FILES['file2']['name'];
			$idcards     =$_POST['idcards'];
			$nin =$_POST['nin'];
			$name =$_POST['name'];
			$code =$_POST['code'];

            $filename      = $_FILES['file']['tmp_name'];
            $destination   = "picture/" . $_FILES['file']['name'];
  
            move_uploaded_file($filename, $destination);
            $conn = mysqli_connect("localhost", "root", "", "dicetutor");

$query ="INSERT INTO `validcard` (`id`, `name`, `image1`, `image2`, `nin`, `idcard`) VALUES (NULL, '".$name."', '".$new_image1."', '".$new_image2."', '".$nin."', '".$idcards ."')";

            if(mysqli_query($conn,$query)){
 			 
		$query1=("UPDATE editprofile SET nin='".$nin."',image1='".$new_image1."',image2='".$new_image2."',idcard='".$idcards."' WHERE code='".$code."' ");
				$result = mysqli_query($conn,$query1);
				  if($result)
					  {  header("Location: confirmMessage.php");}
            }else{

                echo "<script>alert( 'Error Encounter!');</script>";

            }

        }
	//---------------------------------
	     
     
	
?> 
               