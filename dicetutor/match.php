<?php
		
		$radNo = "";
     // Create connection
     $conn = mysqli_connect("localhost", "root", "", "dicetutor");
     // Check connection
     if (!$conn) {
         die("Connection failed: " . mysqli_connect_error());
     }

     if(isset($_POST['search'])){


      $track=$_POST['q'];
      $sql = ("SELECT * FROM serviceadd WHERE radNo = '$track'");
      $result = mysqli_query($conn, $sql);

     if (mysqli_num_rows($result) > 0) {
         // output data of each row
         while($row = mysqli_fetch_assoc($result)) {
			    $id                  =$row['id'];
				$radNo               =$row['radNo'];
				$salary               =$row['salary'];
				echo $salary;
         }
     } else {
         echo "0 results";
     }
    }
     mysqli_close($conn);
			
       ?>
	   
	   	   
		   	   <?php
			         $radNo = "";
					 $monthly = "";
					 $radNo = "";
					 $salary = "";
					 $email = "";
					 $radNo = "";
					 $clientemail = "";
					 $clientname  = "";
						
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
					 if(isset($_SESSION['id']))
		                 {
		                     // echo $_SESSION['id'];
		               
						     $id = $_SESSION['id'];
		   
					$sql = "SELECT id, radNo, salary, monthly, clientemail, reference, clientname FROM serviceadd WHERE id = '$id' ";
					$result = mysqli_query($conn, $sql);
					
					
					if (mysqli_num_rows($result) > 0) {
					  // output data of each row
					  while($row = mysqli_fetch_assoc($result)) {
						// echo "id: " . $row["id"]. " - Name: " . $row["FirstName"]. " " . $row["LastName"]. "<br>";
						    $id                 =$row['id'];
							$monthly            = $row["monthly"];
							$salary             = $row["salary"];
							$radNo              = $row["radNo"];
							$email              = $row["clientemail"];
						    $clientname              = $row["clientname"];
							$reference              = $row["reference"];
					  }
					} else {
					  echo "0 results";
					}
				}
					
					mysqli_close($conn);
				
            ?>