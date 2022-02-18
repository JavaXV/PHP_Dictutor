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

if (isset($_POST['suber']))
   {   
		
		   
			$email =$_POST['email'];			
			$headquater =$_POST['headquater'];
			$category =$_POST['category'];			
			$year =$_POST['year'];
			$cac =$_POST['cac'];			
			$branch =$_POST['branch'];
			$designation =$_POST['designation'];
			$phone =$_POST['phone'];
			
		    $conn = mysqli_connect("localhost", "root", "");
			if (!$conn) { die('Could not connect: ' . mysqli_error()); }
			$db = mysqli_select_db($conn, "dicetutor");
			$query=("UPDATE validcard  SET `name`='".$name."', `headquater`= '".$headquater."', `category`= '".$category."', `year`= '".$year."', `cac`= '".$cac."', `branch`= '".$branch."', `phone`= '".$phone."', `designation`= '".$designation."' WHERE email='".$email."' ");
			$result = mysqli_query($conn,$query);
			  if($result)
				  {
					header("Location: confirmMessageUpload1.php"); 
				  }
				  else
				  {
					header("Location: uploadschool.php");
				  }
		        	mysqli_close($con);
	
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

if (isset($_POST['subber']))
   {   
		
		    $new_image1= $_FILES['file']['name'];
			$new_image2 = $_FILES['file2']['name'];
			$idcards     =$_POST['idcards'];
			$nin =$_POST['nin'];
			$name =$_POST['name'];
			$email =$_POST['email'];
			
			
			$filename      = $_FILES['file']['tmp_name'];
            $destination   = "picture/" . $_FILES['file']['name'];
  
            move_uploaded_file($filename, $destination);
		    $conn = mysqli_connect("localhost", "root", "");
			if (!$conn) { die('Could not connect: ' . mysqli_error()); }
			$db = mysqli_select_db($conn, "dicetutor");
			$query=("UPDATE validcard  SET `name`='".$name."', `image1`= '".$new_image1."', `image2`= '".$new_image2."', `nin`= '".$nin."', `idcard`= '".$idcards."' WHERE email='".$email."' ");
			$result = mysqli_query($conn,$query);
			  if($result)
				  {
					header("Location: schoolVerify.php"); 
				  }
				  else
				  {
					header("Location: uploadschool.php");
				  }
		        	mysqli_close($con);
	
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

if (isset($_POST['sub']))
   {   
		
		    $new_image1= $_FILES['file']['name'];
			$new_image2 = $_FILES['file2']['name'];
			$idcards     =$_POST['idcards'];
			$nin =$_POST['nin'];
			$name =$_POST['name'];
			$email =$_POST['email'];
			
			
			$filename      = $_FILES['file']['tmp_name'];
            $destination   = "picture/" . $_FILES['file']['name'];
  
            move_uploaded_file($filename, $destination);
		    $conn = mysqli_connect("localhost", "root", "");
			if (!$conn) { die('Could not connect: ' . mysqli_error()); }
			$db = mysqli_select_db($conn, "dicetutor");
			$query=("UPDATE validcard  SET `name`='".$name."', `image1`= '".$new_image1."', `image2`= '".$new_image2."', `nin`= '".$nin."', `idcard`= '".$idcards."' WHERE email='".$email."' ");
			$result = mysqli_query($conn,$query);
			  if($result)
				  {
					header("Location: confirmMessageUpload.php"); 
				  }
				  else
				  {
					header("Location: uploadParent.php");
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

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//---------------------------------
   if(isset($_POST['sub'])){

            $new_image1= $_FILES['file']['name'];
			$new_image2 = $_FILES['file2']['name'];
			$idcards     =$_POST['idcards'];
			$nin =$_POST['nin'];
			$name =$_POST['name'];

            $filename      = $_FILES['file']['tmp_name'];
            $destination   = "picture/" . $_FILES['file']['name'];
  
            move_uploaded_file($filename, $destination);               
            $conn = mysqli_connect("localhost", "root", "", "dicetutor");

$query ="INSERT INTO `validcard` (`id`, `name`, `image1`, `image2`, `nin`, `idcard`) VALUES (NULL, '".$name."', '".$new_image1."', '".$new_image2."', '".$nin."', '".$idcards ."')";

            if(mysqli_query($conn, $query)){
			
                      header("Location: uploadParent.php");
            }else{
                  echo "Error: " . $query . "<br>" . $conn->error;

            }

        }
	//---------------------------------
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

if (isset($_POST['imageUpload']))
   {   
		
		   	$new_image = $_FILES['file']['name'];
			$new_images =$_POST['file'];
			$name =$_POST['email'];
			
			
			$filename      = $_FILES['file']['tmp_name'];
            $destination   = "picture/" . $_FILES['file']['name'];
  
            move_uploaded_file($filename, $destination);
		    $conn = mysqli_connect("localhost", "root", "");
			if (!$conn) { die('Could not connect: ' . mysqli_error()); }
			$db = mysqli_select_db($conn, "dicetutor");
			$query=("UPDATE editprofile SET image='".$new_image."' WHERE email='".$name."' ");
			$result = mysqli_query($conn,$query);
			  if($result)
				  {
					header("Location: Accounts.php");
				  }
				  else
				  {
					header("Location: uploadphoto.php");
				  }
		        	mysqli_close($con);
	
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

if (isset($_POST['imageUps']))
   {   
		
		   	$new_image = $_FILES['file']['name'];
			$new_images =$_POST['file'];
			$name =$_POST['email'];
			
			
			$filename      = $_FILES['file']['tmp_name'];
            $destination   = "picture/" . $_FILES['file']['name'];
  
            move_uploaded_file($filename, $destination);
		    $conn = mysqli_connect("localhost", "root", "");
			if (!$conn) { die('Could not connect: ' . mysqli_error()); }
			$db = mysqli_select_db($conn, "dicetutor");
			$query=("UPDATE validcard  SET image3='".$new_image."' WHERE email='".$name."' ");
			$result = mysqli_query($conn,$query);
			  if($result)
				  {
					header("Location: schoolverify1.php");
				  }
				  else
				  {
					header("Location: uploadschool.php");
				  }
		        	mysqli_close($con);
	
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

if (isset($_POST['imageUp']))
   {   
		
		   	$new_image = $_FILES['file']['name'];
			$new_images =$_POST['file'];
			$name =$_POST['email'];
			
			
			$filename      = $_FILES['file']['tmp_name'];
            $destination   = "picture/" . $_FILES['file']['name'];
  
            move_uploaded_file($filename, $destination);
		    $conn = mysqli_connect("localhost", "root", "");
			if (!$conn) { die('Could not connect: ' . mysqli_error()); }
			$db = mysqli_select_db($conn, "dicetutor");
			$query=("UPDATE validcard  SET image3='".$new_image."' WHERE email='".$name."' ");
			$result = mysqli_query($conn,$query);
			  if($result)
				  {
					header("Location: parentverify.php");
				  }
				  else
				  {
					header("Location: uploadParent.php");
				  }
		        	mysqli_close($con);
	
	}

?>
<?php
if(isset($_POST['moneyDetailss'])){


	$payment_type                        =($_POST['payment_type']);
    $account_id                          =($_POST['account_id']);
	$account_name                        =($_POST['account_name']);
	$bank                                =($_POST['bank']);
	$code                                =  (rand(1,1000000));
  
	

            $conn = mysqli_connect("localhost", "root", "", "dicetutor");

 $query =  "  INSERT INTO `dicetutor`.`bank` (
`payment_type` ,
`account_id` ,
`account_name` ,
`percentage` ,
`bank` 


)VALUES

  ( '$payment_type', '$account_id', '$account_name', '$code', '$bank')";

            if(mysqli_query($conn, $query)){

                header("Location: gurantor.php");
            }else{

                echo "<script>alert( 'Error Encounter during registration!');</script>";

            }

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

if (isset($_POST['moneyDetails']))
   {   
		        $name                                =($_POST['email']);
				$code1                                =($_POST['code']);
		   		$payment_type                        =($_POST['payment_type']);
				$account_id                          =($_POST['account_id']);
				$account_name                        =($_POST['account_name']);
				$bank                                =($_POST['bank']);
				$code                                =  (rand(1,1000000));
  
		    $conn = mysqli_connect("localhost", "root", "");
			if (!$conn) { die('Could not connect: ' . mysqli_error()); }
			$db = mysqli_select_db($conn, "dicetutor");
			$query=("UPDATE attendances SET bank='".$bank."',accountno='".$account_id."',accountname='".$account_name."' WHERE code='".$code1."' ");
			$result = mysqli_query($conn,$query);
			  if($result)
				  {
					header("Location: gurantor.php");
				  }
				  else
				  {
					header("Location: uploadphoto.php");
				  }
		        	mysqli_close($con);
	
	}

?>

                                        
<?php
if(isset($_POST['money'])){


	$payment_type                        =($_POST['payment_type']);
    $account_id                          =($_POST['account_id']);
	$account_name                        =($_POST['account_name']);
	$bank                                =($_POST['bank']);
  
	

            $conn = mysqli_connect("localhost", "root", "", "dicetutor");

 $query =  "  INSERT INTO `dicetutor`.`bank` (
`payment_type` ,
`account_id` ,
`account_name` ,
`bank` 


)VALUES

  ( '$payment_type', '$account_id', '$account_name', '$bank')";

            if(mysqli_query($conn, $query)){

                header("Location: uploadParent.php");
            }else{

                echo "<script>alert( 'Error Encounter during registration!');</script>";

            }

    }
        ?>
		
		<?php
if(isset($_POST['money1'])){


	$payment_type                        =($_POST['payment_type']);
    $account_id                          =($_POST['account_id']);
	$account_name                        =($_POST['account_name']);
	$bank                                =($_POST['bank']);
  
	

            $conn = mysqli_connect("localhost", "root", "", "dicetutor");

 $query =  "  INSERT INTO `dicetutor`.`bank` (
`payment_type` ,
`account_id` ,
`account_name` ,
`bank` 


)VALUES

  ( '$payment_type', '$account_id', '$account_name', '$bank')";

            if(mysqli_query($conn, $query)){

                header("Location: uploadSchool.php");
            }else{

                echo "<script>alert( 'Error Encounter during registration!');</script>";

            }

    }
        ?>
		