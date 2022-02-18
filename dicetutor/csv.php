<?php 
include "config.php";
?>
<!doctype html>
<html>
    <head>
        <title>DiceTutors| Dashboard</title>
        <link href="style.css" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div class="container">
            
            <form method='post' action='download.php'>
            <input type='submit' value='Export' name='Export'>
                
            <table border='1' style='border-collapse:collapse;'>
                <tr>
                    <th>ID</th>
                    <th>Tutorname</th>
                    <th>Amount</th>
                    <th>Bank</th>
                    <th>AccountNo</th>
				    <th>Tutor.Email</th>
					
                </tr>
            <?php 
            $query = "SELECT * FROM payment ORDER BY id asc";
            $result = mysqli_query($con,$query);
            $user_arr = array();
            while($row = mysqli_fetch_array($result)){
                $id = $row['id'];
                $tutorname = $row['accountname'];
                $salary = $row['salary'];
                $bank = $row['bank'];
				$accountno = $row['accountno'];
                $tutoremail = $row['tutoremail'];
                $user_arr[] = array($id,$tutorname,$salary,$bank,$accountno,$tutoremail);
            ?>
                <tr>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $tutorname; ?></td>
                    <td><?php echo $salary; ?></td>
                    <td><?php echo $bank; ?></td>
                    <td><?php echo $accountno; ?></td>
					<td><?php echo $tutoremail; ?></td>
                </tr>
            <?php
            }
            ?>
            </table>
            <?php 
            $serialize_user_arr = serialize($user_arr);
            ?>
            <textarea name='export_data' style='display: none;'><?php echo $serialize_user_arr; ?></textarea>
            </form>
        </div>
    </body>
</html>

