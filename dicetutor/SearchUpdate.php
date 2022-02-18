<!---------------------------------SEARCH EDIT PROFILE------------------------------------------------------------------------

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

if(isset($_GET['search'])){

$track=$_POST['q'];
$sql = ("SELECT * FROM editprofile WHERE name LIKE '$track%'");


mysql_select_db('dicetutor');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{

		$id              =$row['id'];
        $surname         =$row['name'];
		$email           =$row['email'];
        $gender          =$row['gender'];
        $dob_month       =$row['dob_month '];
        $dob_day            =$row['dob_day '];
        $dob_year           =$row['dob_year'];
        $number1            =$row['number1'];
        $number2            =$row['number1'];
		$address            =$row['address '];
		$vicinity           =$row['vicinity'];
        $state              =$row['state'];
        $description        =$row['description'];
        $school             =$row['school'];
        $course             =$row['course '];
        $degree             =$row['degree'];
        $workexperience     =$row['workexperience'];
        $role               =$row['role'];
		$workexperience_current_work   =$row['workexperience_current_work'];
        $teaching                  =$row['teaching'];
        $classes                   =$row['classes'];
        $curriculum_used           =$row['curriculum_used'];
        $curriculum_explanation    =$row['curriculum_explanation'];
        $tutor_description         =$row['tutor_description'];
    
mysql_close($conn);
}
}
?>