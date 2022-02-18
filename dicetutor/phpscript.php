<?php include_once("loginscript.php");?>
<!--------------------------------------------------------READ EDIT PROFILE CONDITION FOR DOUBLE INSERT NOT TO OCCOUR-----------------------------------


    <?php
  	           
				$name            ="";
				$email           ="";
				$gender          ="";
				$dob_month       ="";
				$dob_day          ="";
				$dob_year        ="";
				$number1            ="";
				$number2            ="";
				$address            ="";
				$vicinity           ="";
				$state              ="";
				$description        ="";
				$school             ="";
				$course             ="";
				$degree             ="";
				$workexperience     ="";
				$role               ="";
				$workexperience_current_work   ="";
				$teaching                  ="";
				$classes                   ="";
				$curriculum_used           ="";
				$curriculum_explanation    ="";
				$tutor_description         ="";
				$residentstate             ="";

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
				if(isset($_POST['search'])){
				
                $track= $_POST['code'];
				$sql = "SELECT * FROM editprofile WHERE code ='$track'";
				$result = mysqli_query($conn, $sql);
				
				if (mysqli_num_rows($result) > 0) {
				  // output data of each row
				  while($row = mysqli_fetch_assoc($result)) {
					echo "id: " . $row["id"]. " - Name: " . $row["dob_day"]. " " . $row["gender"]. "<br>";
				$name            =$row['name'];
				$code            =$row['code'];
				$email           =$row['email'];
				$gender          =$row['gender'];		
				$dob_day            =$row['dob_day'];	
				$number1            =$row['number1'];
				$address            =$row['address'];
				$vicinity           =$row['vicinity'];
				$state              =$row['state'];
				$description        =$row['description'];
				$school             =$row['school'];
				$course             =$row['course'];
				$degree             =$row['degree'];
				$workexperience     =$row['workexperience'];
				$role               =$row['role'];
				$workexperience_current_work   =$row['workexperience_current_work'];
				$teaching                  =$row['teaching'];
				$curriculum_used           =$row['curriculum_used'];
				$curriculum_explanation    =$row['curriculum_explanation'];
				$tutor_description         =$row['tutor_description'];
				$residentstate             =$row['residentstate'];

				  }
				} else {
				  echo "0 results";
				}
				}
				mysqli_close($conn);
				
?>