<?php //include_once("search.php");?>

								<?php
				$firstname              =   "";
				$lastname                 =  "";
			    $gaddress                =   "";
				$ggender                 =   "";
				$code                 =      "";
				$phoneno                =    "";
				$gaddress               =    "";
				$grelationship           =   "";
				
     // Create connection
     $conn = mysqli_connect("localhost", "root", "", "dicetutor");
     // Check connection
     if (!$conn) {
         die("Connection failed: " . mysqli_connect_error());
     }

     if(isset($_POST['searchess1'])){


      $track=$_POST['code'];
      $sql = ("SELECT * FROM guarantorlink WHERE code LIKE '$track%'");
      $result = mysqli_query($conn, $sql);

     if (mysqli_num_rows($result) > 0) {
         // output data of each row
         while($row = mysqli_fetch_assoc($result)) {
						
                $firstname                 = $row['firstname'];
				$lastname                  = $row['lastname'];
			    $gaddress                  =$row['gaddress'];
				$ggender                   =$row['ggender'];
				$code                      =$row['code'];
				$phoneno                   =$row['phoneno'];
				$gaddress                  =$row['gaddress'];
				$grelationship             =$row['grelationship'];
				
         }
     } else {
         echo "0 results";
     }
    }
     mysqli_close($conn);
?>
<!DOCTYPE html>
<!-- saved from url=(0071)file:///D:/Eduportal%20_%20FPN%20School%20Fees%20Payment%20Receipt.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide{display:none !important;}ng\:form{display:block;}</style><style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide{display:none !important;}ng\:form{display:block;}</style>

        <meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta name="description" content="Nigerian Higher Education">

	<meta name="author" content="Emmanuel Etti">



        <title>DiceTutors| Dashboard</title>



        <style>.file-input-wrapper { overflow: hidden; position: relative; cursor: pointer; z-index: 1; }.file-input-wrapper input[type=file], .file-input-wrapper input[type=file]:focus, .file-input-wrapper input[type=file]:hover { position: absolute; top: 0; left: 0; cursor: pointer; opacity: 0; filter: alpha(opacity=0); z-index: 99; outline: 0; }.file-input-name { margin-left: 8px; }</style><style>.file-input-wrapper { overflow: hidden; position: relative; cursor: pointer; z-index: 1; }.file-input-wrapper input[type=file], .file-input-wrapper input[type=file]:focus, .file-input-wrapper input[type=file]:hover { position: absolute; top: 0; left: 0; cursor: pointer; opacity: 0; filter: alpha(opacity=0); z-index: 99; outline: 0; }.file-input-name { margin-left: 8px; }</style><link href="http://portal.fpno.edu.ng/nekede/css/style.default.css" rel="stylesheet">



	<!-- My Styles -->
	<link rel="stylesheet" href="assets/css/eduportal-fullpage-style.css">
	<link rel="stylesheet" href="assets/css/base-admin.css">




    <!-- CSS LINKS-->

		<link rel="stylesheet" type="text/css" href="./Eduportal _ FPN School Fees Payment Receipt_files/basic.css">
		<link rel="stylesheet" type="text/css" href="./Eduportal _ FPN School Fees Payment Receipt_files/icons.css">

		<link rel="stylesheet" type="text/css" href="./Eduportal _ FPN School Fees Payment Receipt_files/bootstrap.min.css">

        <script src="./Eduportal _ FPN School Fees Payment Receipt_files/jquery-1.11.1.min.js"></script>

		<script type="text/javascript" src="./Eduportal _ FPN School Fees Payment Receipt_files/me.js"></script>
		<script src="./Eduportal _ FPN School Fees Payment Receipt_files/ajaxScript.js"></script>



	<style type="text/css">
		.row{
			margin-left:0px !important;
			padding:10px 0px 0px 0px;
		}
		thead{
		}
		#nceLink, degreeLink{
			cursor:pointer;
		}
		.nav-tabs.bordered{
			margin:0px 15px !important;
		}
		.tab-content{
			padding:0px 15px !important;
			border:none !important;
		}
	</style>

    </head>
    <body class="loaded" style="zoom: 1;">
	<br><br>
    <div class="document">
			<div class="content-row">



<style type="text/css">

	.row{

		margin-left:0px !important;

		padding:10px 0px 0px 0px;

	}

	thead{

	}

	#nceLink, degreeLink{

		cursor:pointer;

	}

	.nav-tabs.bordered{

		margin:0px 15px !important;

	}

	.tab-content{

		padding:0px 15px !important;

		border:none !important;

	}

	.foreign-form{

		display:none;

	}

	.country-line{

		padding:5px;

		background:#DEDEDE;

		margin:20px 0 0 10px;

		border:1px solid #999999;

		box-shadow:1px 1px 1px #DEDEDE;

	}

	.country-line span{

		color:#CB4A18;

		font-size:19px;

		margin-left:10px;

	}

	.country-line h5{

		margin:5px 0;

	}

</style>



<div class="print_page">

	<div class="col-md-12">

		<div class="widget stacked">

			<div class="widget-content" style="padding:10px 20px;">

				<div class="col-md-12 receipt-head">
<br>
					<img src="images/Dice Tutuors.png" height="120" width="120">
					<h5>Knowledge and key for service</h5>

				</div>

				<div class="col-md-12">

					<div class="col-md-12 no-p">

						<h5>Guarantor Personal Details</h5>



						<div class="col-md-10 print-table">

							<table class="table table-bordered table-striped table-hover" style="width:1200px; position:absolute;">

								<tbody>

									<tr>

										<td><p>FIRST NAME</p></td>

										<td><p><?php echo $firstname ; ?></p></td>

									</tr>

									<tr>

										<td><p>LAST NAME</p></td>

										<td><p><?php echo $lastname ; ?></p></td>

									</tr>

									<tr>

										<td><p>PHONENO</p></td>

										<td><?php echo $phoneno ; ?></td>

									</tr>

									<tr>

										<td><p>GENDER</p></td>

										<td><?php echo $ggender; ?></td>

									</tr>
                                    <tr>

										<td><p>RELATIONSHIP</p></td>

										<td><?php echo $grelationship; ?></td>

									</tr>
									 <tr>

										<td><p>ADDRESS</p></td>

										<td><?php echo $gaddress; ?></td>

									</tr>

								
							</tbody></table>

						</div>

     	<div class="bt" style="position:absolute; top:30px; left:750px; >

							<div class="col-md-12 no-p receipt-image-div" >

	 <?php
     // Create connection
     $conn = mysqli_connect("localhost", "root", "", "dicetutor");
     // Check connection
     if (!$conn) {
         die("Connection failed: " . mysqli_connect_error());
     }

     if(isset($_POST['searchess1'])){

      $track=$_POST['code'];
      $sql = ("SELECT * FROM guarantorlink WHERE code LIKE '$track%'");
      $result = mysqli_query($conn, $sql);

     if (mysqli_num_rows($result) > 0) {
         // output data of each row
         while($row = mysqli_fetch_assoc($result)) {

               $c_img      =$row['image'];
			   $id         =$row['id'];
             
			   
			   echo "<td><img height='160' width='179' src='picture/".$row['image']."'></td>";
			   
	          
			 	echo  "<form action='validcardview.php' method='POST'>";
				echo  "<input type='hidden' name='id' value='$id'>";
				echo "<a href='adminCheck.php' align='center'>". 'BACK' . "</a>";
				//echo "<td><button name='submit' class='form-group' align='center' style='background-color:blue; color:white;'>View.Document</button></td>";
				echo  "</form>";
				
            // echo "<p style='position:relative; float:right;'><img width='120' height='120' src='picture/".$row['image']."'  alt='Profile Pic'></p>";
            // echo '<center>'.$row['name']. '</center>' ;
            // echo' 	<center><p style="text-align:center;"><a href="javascript:print()">Print</a> | <a href="transcript.php">Close</a></p></center>';


         }
     } else {
         echo "0 results";
     }
    }
     mysqli_close($conn);
?>

							</div>



						</div>

     </div>


				</div>

			</div>

		</div>

	</div>

</div>			</div>




	<link rel="stylesheet" href="http://portal.fpno.edu.ng/nekede/assets/js/datatables/responsive/css/datatables.responsive.css">
	<link rel="stylesheet" href="http://portal.fpno.edu.ng/nekede/assets/js/select2/select2-bootstrap.css">
	<link rel="stylesheet" href="http://portal.fpno.edu.ng/nekede/assets/js/select2/select2.css">

   	<!-- Bottom Scripts -->
   	<script src="./Eduportal _ FPN School Fees Payment Receipt_files/angular.min.js"></script>
	<script src="./Eduportal _ FPN School Fees Payment Receipt_files/ui-bootstrap-tpls-0.10.0.min.js"></script>
	<script src="./Eduportal _ FPN School Fees Payment Receipt_files/app.js"></script>
	<script src="./Eduportal _ FPN School Fees Payment Receipt_files/main-gsap.js"></script>
	<script src="./Eduportal _ FPN School Fees Payment Receipt_files/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="./Eduportal _ FPN School Fees Payment Receipt_files/bootstrap.js"></script>
	<script src="./Eduportal _ FPN School Fees Payment Receipt_files/joinable.js"></script>
	<script src="./Eduportal _ FPN School Fees Payment Receipt_files/resizeable.js"></script>
	<script src="./Eduportal _ FPN School Fees Payment Receipt_files/neon-api.js"></script>
    <script src="./Eduportal _ FPN School Fees Payment Receipt_files/jquery.validate.min.js"></script>
	<script src="./Eduportal _ FPN School Fees Payment Receipt_files/fullcalendar.min.js"></script>
    <script src="./Eduportal _ FPN School Fees Payment Receipt_files/bootstrap-datepicker.js"></script>
    <script src="./Eduportal _ FPN School Fees Payment Receipt_files/fileinput.js"></script>


    <script src="./Eduportal _ FPN School Fees Payment Receipt_files/jquery.dataTables.min.js"></script>
	<script src="./Eduportal _ FPN School Fees Payment Receipt_files/TableTools.min.js"></script>
	<script src="./Eduportal _ FPN School Fees Payment Receipt_files/dataTables.bootstrap.js"></script>
	<script src="./Eduportal _ FPN School Fees Payment Receipt_files/jquery.dataTables.columnFilter.js"></script>
	<script src="./Eduportal _ FPN School Fees Payment Receipt_files/lodash.min.js"></script>
	<script src="./Eduportal _ FPN School Fees Payment Receipt_files/datatables.responsive.js"></script>
    <script src="./Eduportal _ FPN School Fees Payment Receipt_files/select2.min.js"></script>

	<script src="./Eduportal _ FPN School Fees Payment Receipt_files/neon-calendar.js"></script>
	<script src="./Eduportal _ FPN School Fees Payment Receipt_files/neon-chat.js"></script>
	<script src="./Eduportal _ FPN School Fees Payment Receipt_files/neon-custom.js"></script>
	<script src="./Eduportal _ FPN School Fees Payment Receipt_files/neon-demo.js"></script>


<script type="text/Javascript">
	$(document).ready(function(){

		var controller = 'sadmin';
		var base_url = 'http://portal.fpno.edu.ng/nekede/index.php';

		function showEditForm(a){
			$.ajax({
			type:"post",
			url:base_url + '?' + controller + '/do_ajax/edit/' + a,
			data:{'type' : 'value'},
			success:function(data){
				$("html, body").animate({ scrollTop: 0 }, "slow");
				$("#editResult").html(data);
				document.getElementById('result').innerHTML = '';

				//$("#search").val("");
			 }
		  });
		}
	});
</script>




<!-----  DATA TABLE EXPORT CONFIGURATIONS ----->
<script type="text/javascript">

	jQuery(document).ready(function($)
	{


		var datatable = $("#table_export").dataTable();

		$(".dataTables_wrapper select").select2({
			minimumResultsForSearch: -1
		});
	});

</script>        </div>



</body></html>