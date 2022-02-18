<?php  include_once("test.php");?>
<?php // include_once("loginscript.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>

      <form  action=""  method="POST" >
            
            <div class="panel panel-default row-space-4">
              
          <div class="panel-body"  align="center">
                    
                       
    <div class="row row-space-4"  align="center">
	<div class="form-group"  >
                 <!--<label>Client Name</label>-->
                 <div class="form-group">
                    <input type="text" class="form-control" name="tutorname" value=" <?php
		   if(isset($_SESSION['name']))
		   {
		     echo $_SESSION['name'];
		   }
		   
		   ?>" width="400"  placeholder=' eg : Philip Fred  '">
                  </div>
             </div>
      <div class="form-group"  >
                 <label>Client Name</label>
                 <div class="form-group">
                    <input type="text" class="form-control" value="" name="clientname" width="400"  placeholder=' eg : Philip Fred  '">
                  </div>
             </div>
			  <div class="form-group"  >
                 <label>Add Attendance</label>
                 <div class="form-group">
					<select class="form-control"  name="attendance" >
                    <option value="" selected="">Select Option</option>
                    <option value="Delivered">Delivered</option>
                  </select>
                  </div>
             </div>

   </div>
   </div>
   </div>
   </div>
   </center>
   
	
		  <button type="submit" name="Xchange" class="btn btn-outline-info" style="right:20px; height:100px; top:110px; position:absolute;">Add Attendance</button>
		  <br><br><br>
    </div>
	</div></div>
	</form>
			
</body>
</html>
