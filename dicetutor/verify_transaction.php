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
			 if(isset($_POST['pay'])){
               
			    $name      =$_POST['name'];
				$amount    =$_POST['amount'];
				$email     =$_POST['email'];
				$paymentoption     =$_POST['paymentoption'];
			    $status    = "Paid";
				$datepaid  = date("l jS \of F Y h:i:s A");
                $reference    =$_POST['reference']; 
				$radNo    =$_POST['radNo'];  
				
			    $sql = "INSERT INTO `transaction` (`id`, `name`, `amount`, `email`, `paymentoption`, `status`, `datepaid`, `reference`, `radNo`) VALUES (NULL, '$name', '$amount', '$email', '$paymentoption', '$status', '$datepaid', '$reference', '$radNo')";
			
			if (mysqli_query($conn, $sql)) {
			   $query=("UPDATE serviceadd SET reference='".$reference."' WHERE radNo='".$radNo."' ");
				$result = mysqli_query($conn,$query);
				  if($result)
					  {
					     header("location:clientPayment.php");
					  }else{}
			 		
			} else {
			  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
		  }
		
			mysqli_close($conn);
			   
?>