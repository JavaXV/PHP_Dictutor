
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
			 if(isset($_POST['pay3'])){
               
			    $name      =$_POST['name'];
				$amount    =$_POST['amount'];
				$email     =$_POST['email'];
				$paymentoption     =$_POST['paymentoption'];
			    $status    = "Paid";
				$datepaid  = date('Y-m-d');
                $reference    =$_POST['reference']; 
				$radNo    =$_POST['radNo']; 
				$id    =$_POST['id']; 
				
					
			    $que1=mysqli_query($conn,"SELECT * FROM `serviceadd` WHERE id = '$id'");
				$count1=mysqli_num_rows($que1);
			
				if($count1>0)
				 {		
				 
				 $sql = ("SELECT * FROM serviceadd WHERE id LIKE '$id%'");
							$result = $conn->query($sql);

							if ($result->num_rows > 0) {
							  // output data of each row
							  while($row = $result->fetch_assoc()) {
							  
								   $id              = $row['id'];
								   $monthly         = $row["monthly"];
							       $salary          = $row["salary"];
								   $salary1         = $row["salary1"];
								   $_SESSION['id']  = $id;		   
								   $hold            = $salary1 - $amount;
								
					    }
								   } else {
						 // echo "Error:" . $sql . "<br>" . $conn->error;
						}
						
				$query=("UPDATE serviceadd SET salary1 ='".$hold."', balance ='".$hold."' WHERE id='".$id."' ");
				$result = mysqli_query($conn,$query);
				  if($result)
					  {
					   $_SESSION['id'] = $id;
					    
						 
			   if (mysqli_query($conn, $sql)) {
			   $query=("UPDATE transaction SET balance ='".$hold."' WHERE reference='".$reference."' ");
				$result = mysqli_query($conn,$query);
				  if($result)
					  {	    
					  }else{}
						 		 
					  }else{}
			 		
			} else {
			  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
			$sql = "INSERT INTO `transaction` (`id`, `name`, `amount`, `email`, `paymentoption`, `status`, `datepaid`, `reference`, `radNo`, `balance`) VALUES (NULL, '$name', '$amount', '$email', '$paymentoption', '$status', '$datepaid', '$reference', '$radNo', '$hold')";	
			if (mysqli_query($conn, $sql)) {
			header("location:pay4.php");		
		  }
		}else{}
	}
			 	
			mysqli_close($conn);
			   
?>
