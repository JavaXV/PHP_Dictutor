<?php include_once("loginscript.php");?>
<?php
/**
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dicetutor";


       $conn = mysqli_connect($servername, $username, $password, $dbname);
	   $conn1 = mysqli_connect($servername, $username, $password, $dbname);
	
		   if(isset($_SESSION['tutorid']))
		   {
		        $name        =  ($_POST['q']);
				$price        =  ($_POST['price']);
				$verifyNo    =  (rand(1,1000000));
		        $tutorid     =  $_SESSION['tutorid'];
		   
			
				$sql = ("SELECT * FROM serviceadd1 WHERE radNo LIKE '$tutorid%'");
				$result = mysqli_query($conn, $sql);
				
				if (mysqli_num_rows($result) > 0) {
				  // output data of each row
				  while($row = mysqli_fetch_assoc($result)) {
				  
				   $duration1 =$row['duration'];
				   $duration2 = $row['duration2'];
				   $radNo = $row['radNo'];
				   
				   function week_between_two_dates($date1, $date2)
					{
						$first = DateTime::createFromFormat('Y-m-d', $date1);
						$second = DateTime::createFromFormat('Y-m-d', $date2);
						if($date1 > $date2) return week_between_two_dates($date2, $date1);
						return floor($first->diff($second)->days/7);
					}
					
					$dt1 = $duration1;
					$dt2 = $duration2;
					$weeklydate = week_between_two_dates($dt1, $dt2);
					$operation = $noofdays * $price;
					$operationFinal = $operation * $weeklydate;
					$monthly = $operationFinal / $weeklydate;
					
				
				   
				   
			}
		} else {
		//  echo "0 results";
		}
	  }
	  **/
	?>
	
	<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dicetutor";


       $conn = mysqli_connect($servername, $username, $password, $dbname);
	   $conn1 = mysqli_connect($servername, $username, $password, $dbname);
	   
			if (isset($_POST['AddClass']))
			   {   
		        $phoneno1         =  ($_POST['phoneno']);
				$duration1        =  ($_POST['duration1']);
				$duration2        =  ($_POST['duration2']);
				$noofdays         =$_POST['noofdays'];
				$month            =$_POST['month'];
				$verifyNo         =  (rand(1,1000000));
		       // $tutorid          =  $_SESSION['tutorid'];
			   
				$que11=mysqli_query($conn,"SELECT * FROM `serviceadd` WHERE phoneno = '$phoneno1' ");
				$count1=mysqli_num_rows($que11);
				if($count1>0)
				 {
								   
				$sql = ("SELECT * FROM attendances WHERE tutorphoneno = '$phoneno1' ");
				$result = mysqli_query($conn, $sql);
				
				if (mysqli_num_rows($result) > 0) {
				  // output data of each row
				  while($row = mysqli_fetch_assoc($result)) {
				
				   $phoneno    = $row['tutorphoneno'];
				   $code       = $row['code'];
				   $price      = $row['price'];
				   $timing     = $row['timing'];
				   $timing1    = $row['timing1'];
				   
				     
				   function week_between_two_dates($date1, $date2)
					{
						$first = DateTime::createFromFormat('Y-m-d', $date1);
						$second = DateTime::createFromFormat('Y-m-d', $date2);
						if($date1 > $date2) return week_between_two_dates($date2, $date1);
						return floor($first->diff($second)->days/7);
					}
					
					$dt1 = $duration1;
					$dt2 = $duration2;
					$weeklydate = week_between_two_dates($dt1, $dt2);
					$operation = $noofdays * $price;
					
					$operationFinal = $operation * $weeklydate;
					$weekly = $operationFinal / $weeklydate;
					$monthly = $operationFinal / $month;
					$contract = "New Contract";
					
				
							$que1=mysqli_query($conn,"SELECT * FROM `serviceadd` WHERE code = '$code' AND timing = '$timing'");
							$count1=mysqli_num_rows($que1);
							if($count1>0)
							 {
							  
							$sql=("UPDATE serviceadd SET duration='".$duration1."',duration2='".$duration2."',salary='".$operationFinal."',salary1='".$operationFinal."',monthly='".$monthly."' WHERE code = '$code' AND timing = '$timing' ");
											if (mysqli_query($conn, $sql)) {				
												$sql=("UPDATE attendances SET contract='".$contract."' WHERE code = '$code' AND timing = '$timing' ");
														if (mysqli_query($conn, $sql)) {				
														   header("location:contractMessage.php");				  
														}else{}		  
											} else {
											  echo "Error extending record: " . mysqli_error($conn);
											}
							 }else{}
					
				   
				   
			}
		} else {
		  echo "0 results";
		}
		 }else{ echo "<script>alert( ' The Tutor PhoneNo is inValid does not Exist.');</script>";	}

				
	  }
	?>
	

