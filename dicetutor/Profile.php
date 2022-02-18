<?php include_once("phpscript.php");?>
<!DOCTYPE html>
<!-- saved from url=(0035)https://www.tuteria.com/users/edit/ -->

<!-- <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-63938620-1', 'auto');
    ga('require', 'GTM-TQF6VZM');
    ga('send', 'pageview');
    </script> -->



    
    <title>Profile - DiceTutors</title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
   
   
    
    <style>

        .no-padding-left {
            padding-left: 0;
        }
    </style>
    <style type="text/css">
        .no-js {
            display: none;
        }

        .collapsing {
            -webkit-transition: none;
            transition: none;
        }

    </style>

    
    
    
    

    <script type="text/javascript">
        document.documentElement.className =
                document.documentElement.className.replace(/\bno-js\b/, 'js');

        // add to document ready: $('.no-fouc').removeClass('no-fouc');
    </script>
    <!-- Hotjar Tracking Code for www.tuteria.com -->
    
    

    
    <script>
    </script>
    <!-- Modernizr -->
    
<body id="fouc">
      <form action="" method="POST" >
	        <input type="hidden" name="name" id="name" maxlength="140" value="
     <?php
		   if(isset($_SESSION['name']))
		   {
		     $name =  $_SESSION['name'];
			 echo $name;
		   }
		   
		   ?>" class="form-control" size="130" placeholder="Enter Name"  required="" >
<div style="position:fixed; padding:10px; font-size:20px;right:35px; top:105px; color:#0000CC;"><button name="search"><img src="images/click2.png" height="100" width="100"><br style="color:#0000CC;">Search-Profile</button></div>

     
	  </form>
	  
	     <form action="editprofile.php" method="POST" >
	        <input type="hidden" name="name" maxlength="140" value="
     <?php
		   if(isset($_SESSION['name']))
		   {
		     $name =  $_SESSION['name'];
			 echo $name;
		   }
		   
		   ?>" class="form-control" size="130" placeholder="Enter Name"  required="" >

<div style="position:fixed; padding:10px; font-size:20px;right:33px; top:245px; color:#0000CC;"><button name="updatesearch"><img src="images/click2.png" height="90" width="90"><br style="color:#0000CC;">Update-Profile</button></div>
      </form>
	 
	  
        <div class="outer ">
		
<div class=" na hidden-xs ">
    
<div class="header-2 hidden-xs">
    <!-- Container -->
    <div class="container-fluid">
        <div class="row">
            <nav class="navbar navbar-default padding-side-15" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="logo" href="https://www.tuteria.com/">
                        <span class="nav-logo"></span>
                        
                        
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    
                        
                    

                            
                        

                        
                            <!--<span class="font-head" style="margin-left: 15%">
                                <i class="fa fa-phone"></i> &nbsp;  090 911 01479
                            </span>-->
                        
                            
                        
                    
      
                    

                </div>
                <!-- /.navbar-collapse -->
            </nav>
        </div>
    </div>
</div>

        </div>

    <div class="container-fluid">
    
    

        <div class="main">
           

            <div class="main-block">
                
    <div class="container row-space-top-4 row-space-4">
    
               
                
                
                </div>
                <div class="col-md-9 col-xs-12" >
                    
    <div class="row" >
        <div class="smart-forms">
       
            
            <div class="panel panel-default row-space-4">
              
          <div class="panel-body"  align="center">
                    
                       
    <div class="row row-space-4"  align="center">
        <!-- Label -->
        <label class="col-md-3 col-sm-3 text-right">Full Name</label>
        <div class="col-md-9 col-sm-9 space-for-mobile">
	
	<form  action="editprofile.php" method="post" >
       <input type="text" name="name" maxlength="140" value="
     <?php
		   if(isset($_SESSION['name']))
		   {
		     $name =  $_SESSION['name'];
			 echo $name;
		   }
		   
		   ?>" class="form-control" size="130" placeholder="Enter Name"  required="" >
           <br>
        </div>
    </div>

    <div class="row  row-space-4">
        <label class="col-md-3 col-sm-3 text-right">Email Address</label>

        <div class="col-md-9 col-sm-9 space-for-mobile">
            <input type="text" name="email" maxlength="140" value="<?php echo $email ; ?>" class="form-control" size="130" placeholder="Enter Email e.g Sm@gmail.com" required="" >
           <br>
        </div>
    </div>

    <div class="row  row-space-4">
        <label class="col-md-3 col-sm-3 text-right">I am (Gender)</label>
        <div class="col-md-4 col-sm-4 space-for-mobile">
            <select name="gender" class="form-control input-medium"   required="true" >
  <option value="<?php echo $gender ; ?>" selected=""><?php echo $gender ; ?></option>

  <option value="Male">Male</option>

  <option value="Female">Female</option>

</select><br>
        </div>
    </div>

    <div class="row  row-space-4">
        <label class="col-md-3 col-sm-3 text-right">Birth Date</label>
        <div class="col-md-9 col-sm-9 space-for-mobile">
            <div class="form-inline">
                <div class="form-group"><div class="form-group">
				<select name="dob_month" id="id_dob_month" class="form-control" required="required" >
  <option value="<?php echo $dob_month ; ?>"><?php echo $dob_month ; ?></option>

  <option value="1">January</option>

  <option value="2">February</option>

  <option value="3">March</option>

  <option value="4">April</option>

  <option value="5">May</option>

  <option value="6">June</option>

  <option value="7">July</option>

  <option value="8">August</option>

  <option value="9">September</option>

  <option value="10">October</option>

  <option value="11">November</option>

  <option value="12">December</option>

</select><span class="help-block" id="parsley-id-2000"></span></div></div>
<div class="form-group"><select name="dob_day"   id="id_dob_day" class="form-control" required="required" data-parsley-group="default" data-parsley-error-message="Select a day" data-parsley-id="5594">
  <option value="<?php echo $dob_day ; ?>"><?php echo $dob_day ; ?></option>

  <option value="1">1</option>

  <option value="2">2</option>

  <option value="3">3</option>

  <option value="4">4</option>

  <option value="5">5</option>

  <option value="6">6</option>

  <option value="7">7</option>

  <option value="8">8</option>

  <option value="9">9</option>

  <option value="10">10</option>

  <option value="11">11</option>

  <option value="12">12</option>

  <option value="13">13</option>

  <option value="14">14</option>

  <option value="15">15</option>

  <option value="16">16</option>

  <option value="17">17</option>

  <option value="18">18</option>

  <option value="19">19</option>

  <option value="20">20</option>

  <option value="21">21</option>

  <option value="22">22</option>

  <option value="23">23</option>

  <option value="24">24</option>

  <option value="25">25</option>

  <option value="26">26</option>

  <option value="27">27</option>

  <option value="28">28</option>

  <option value="29">29</option>

  <option value="30">30</option>

  <option value="31">31</option>

</select><span class="help-block" id="parsley-id-5594"></span></div>
<div class="form-group"><select name="dob_year" id="id_dob_year" class="form-control" required="required" data-parsley-group="default" data-parsley-error-message="Select a year" data-parsley-id="3043">
  <option value="<?php echo $dob_year ; ?>"><?php echo $dob_year ; ?></option>

  <option value="1920">1920</option>

  <option value="1921">1921</option>

  <option value="1922">1922</option>

  <option value="1923">1923</option>

  <option value="1924">1924</option>

  <option value="1925">1925</option>

  <option value="1926">1926</option>

  <option value="1927">1927</option>

  <option value="1928">1928</option>

  <option value="1929">1929</option>

  <option value="1930">1930</option>

  <option value="1931">1931</option>

  <option value="1932">1932</option>

  <option value="1933">1933</option>

  <option value="1934">1934</option>

  <option value="1935">1935</option>

  <option value="1936">1936</option>

  <option value="1937">1937</option>

  <option value="1938">1938</option>

  <option value="1939">1939</option>

  <option value="1940">1940</option>

  <option value="1941">1941</option>

  <option value="1942">1942</option>

  <option value="1943">1943</option>

  <option value="1944">1944</option>

  <option value="1945">1945</option>

  <option value="1946">1946</option>

  <option value="1947">1947</option>

  <option value="1948">1948</option>

  <option value="1949">1949</option>

  <option value="1950">1950</option>

  <option value="1951">1951</option>

  <option value="1952">1952</option>

  <option value="1953">1953</option>

  <option value="1954">1954</option>

  <option value="1955">1955</option>

  <option value="1956">1956</option>

  <option value="1957">1957</option>

  <option value="1958">1958</option>

  <option value="1959">1959</option>

  <option value="1960">1960</option>

  <option value="1961">1961</option>

  <option value="1962">1962</option>

  <option value="1963">1963</option>

  <option value="1964">1964</option>

  <option value="1965">1965</option>

  <option value="1966">1966</option>

  <option value="1967">1967</option>

  <option value="1968">1968</option>

  <option value="1969">1969</option>

  <option value="1970">1970</option>

  <option value="1971">1971</option>

  <option value="1972">1972</option>

  <option value="1973">1973</option>

  <option value="1974">1974</option>

  <option value="1975">1975</option>

  <option value="1976">1976</option>

  <option value="1977">1977</option>

  <option value="1978">1978</option>

  <option value="1979">1979</option>

  <option value="1980">1980</option>

  <option value="1981">1981</option>

  <option value="1982">1982</option>

  <option value="1983">1983</option>

  <option value="1984">1984</option>

  <option value="1985">1985</option>

  <option value="1986">1986</option>

  <option value="1987">1987</option>

  <option value="1988">1988</option>

  <option value="1989">1989</option>

  <option value="1990">1990</option>

  <option value="1991">1991</option>

  <option value="1992">1992</option>

  <option value="1993">1993</option>

  <option value="1994">1994</option>

  <option value="1995">1995</option>

  <option value="1996">1996</option>

  <option value="1997">1997</option>

  <option value="1998">1998</option>

  <option value="1999">1999</option>

  <option value="2000">2000</option>

  <option value="2001">2001</option>

  <option value="2002">2002</option>

  <option value="2003">2003</option>

  <option value="2004">2004</option>

  <option value="2005">2005</option>

  <option value="2006">2006</option>

  <option value="2007">2007</option>

  <option value="2008">2008</option>

  <option value="2009">2009</option>

  <option value="2010">2010</option>

  <option value="2011">2011</option>

  <option value="2012">2012</option>

  <option value="2013">2013</option>

  <option value="2014">2014</option>

  <option value="2015">2015</option>

  <option value="2016">2016</option>

  <option value="2017">2017</option>

  <option value="2018">2018</option>

  <option value="2019">2019</option>

  <option value="2020">2020</option>

  <option value="2021">2021</option>

</select><span class="help-block" id="parsley-id-3043"></span></div>
            </div>
            <div class="input-hint"><br>
            </div>
        </div>
    </div>
    


<div class="row  row-space-4 ">
    <label class="text-right col-md-3 col-sm-3" for="user_phone">
        Phone Number <i class="icon icon-lock icon-pink" data-behavior="tooltip" aria-label="Private"></i>
    </label>

  
             
            <div class="row">
                <div class="form-group col-md-5 ">
                    <input type="text" name="number1" value="<?php echo $number1 ; ?>" placeholder="Enter 1st Number" class="form-control" required="" >
               </div>
			    <div class="form-group col-md-5 ">
                    <input type="text" name="number2" value="<?php echo $number2 ; ?>" placeholder="Enter 2nd Number" class="form-control" required="" >
                </div>
				
            </div>
        

        <div class="input-hint row-space-top-1"><br>
        </div>
    </div>
</div>

<div class="row  row-space-4">
    <label class="text-right col-md-3 col-sm-3 hidden-xs" for="user_profile_info_current_city">
        Address
    </label>

    <div class="col-md-9 col-sm-9">
        <input type="hidden" name="location_set-TOTAL_FORMS" value="1" id="id_location_set-TOTAL_FORMS"><input type="hidden" name="location_set-INITIAL_FORMS" value="0" id="id_location_set-INITIAL_FORMS"><input type="hidden" name="location_set-MIN_NUM_FORMS" value="0" id="id_location_set-MIN_NUM_FORMS"><input type="hidden" name="location_set-MAX_NUM_FORMS" value="1" id="id_location_set-MAX_NUM_FORMS">
        
            
                <span class="font-head space-for-mobile padding-bottom-10">Current Location</span>
                <p>Enter your current location. This should be the address where you reside or live. If you move to a new location, you must update it here. Please write it properly.</p>
               
                <input type="hidden" name="location_set-0-id" id="id_location_set-0-id">
            
                <input type="hidden" name="location_set-0-user" value="90853" id="id_location_set-0-user">
            
            <div><label>Street Address</label></div>
            <input type="text" name="address" maxlength="120" value="<?php echo $address; ?>" class="form-control pac-target-input" placeholder="E.g 28 Saint John Street Gowon Estate Ipaja" required="true">
			<br>
            <div class="form-inline row-space-top-1">
            <div class="form-group">
                <div><label>Town or City</label></div>
                <input type="text" name="vicinity" maxlength="80" value="<?php echo $vicinity ; ?>" class="form-control" placeholder="E.g. Ipaja" required="true" data-parsley-group="defalut" id="id_location_set-0-vicinity" data-parsley-id="1505">
            <span class="help-block" id="parsley-id-1505"></span></div>
            <div class="form-group">
                <div><label>State</label></div>
                    <select name="state" class="form-control"  placeholder="Input your state" required="true" data-parsley-group="default" id="id_location_set-0-state" data-parsley-id="2922">
  <option value="<?php echo $state ; ?>" selected=""><?php echo $state ; ?></option>

  <option value="Abia">Abia</option>

  <option value="Abuja">Abuja</option>

  <option value="Adamawa">Adamawa</option>

  <option value="Akwa Ibom">Akwa Ibom</option>

  <option value="Anambra">Anambra</option>

  <option value="Bayelsa">Bayelsa</option>

  <option value="Bauchi">Bauchi</option>

  <option value="Benue">Benue</option>

  <option value="Borno">Borno</option>

  <option value="Cross River">Cross River</option>

  <option value="Delta">Delta</option>

  <option value="Edo">Edo</option>

  <option value="Ebonyi">Ebonyi</option>

  <option value="Ekiti">Ekiti</option>

  <option value="Enugu">Enugu</option>

  <option value="Gombe">Gombe</option>

  <option value="Imo">Imo</option>

  <option value="Jigawa">Jigawa</option>

  <option value="Kaduna">Kaduna</option>

  <option value="Kano">Kano</option>

  <option value="Katsina">Katsina</option>

  <option value="Kebbi">Kebbi</option>

  <option value="Kogi">Kogi</option>

  <option value="Kwara">Kwara</option>

  <option value="Lagos">Lagos</option>

  <option value="Nassarawa">Nassarawa</option>

  <option value="Niger">Niger</option>

  <option value="Ogun">Ogun</option>

  <option value="Ondo">Ondo</option>

  <option value="Osun">Osun</option>

  <option value="Oyo">Oyo</option>

  <option value="Plateau">Plateau</option>

  <option value="Rivers">Rivers</option>

  <option value="Sokoto">Sokoto</option>

  <option value="Taraba">Taraba</option>

  <option value="Yobe">Yobe</option>

  <option value="Zamfara">Zamfara</option>

</select>
<span class="help-block" id="parsley-id-2922"></span>
</div>
<br><br>
           
            </div>
        </div>
    </div>
</div>

<div class="row  row-space-4  ">


    </div>
        
<br><br>
    <div class="hidden row  row-space-4 ">
        <label class="col-md-3 col-sm-3 text-right">Describe Yourself to the Dice Tutors Community</label>

        <div class="col-md-9 col-sm-9">
            <textarea name="description" cols="40" placeholder="Dice Tutors ensures there is no compromise on our quality knowledge-based service delivery standard.Dice Tutors is built on relationships. Help other people get to know you. Tell them about the things you like: What 3 things make you happy that you can't do without? Share your favorite subjects, books, movies, music, food etc. Tell them what it'll feel like to have you as a tutor or client. What makes you special?" rows="8" class="form-control"><?php echo $description ; ?></textarea>

            <div class="col-sm-12">
                <small class="char-count pull-right" style="color: rgb(255, 77, 77);">
                    <em>0</em> / 500 max
                </small>
            </div>
			<br>
        </div>
    </div>
</div>
                                         
                    
                </div>
                <section id="tutor-specific-form" class="hidden"> 
            

<div class="panel panel-default row-space-4" id="credential-section">
    <div class="panel-heading">
        <h4 align="center" style="background-color:#00CCFF; color:#FFFF00; float:center; width:200px; height:25px;">Credentials</h4>
    </div>
    <div class="panel-body">
        <div class="row row-space-4">
            <label class="col-md-3 text-right font-head margin-bottom-5">Education</label>

            <div class="col-md-9">
                <div class="padding-bottom-25">
                    Enter your highest educational qualifications, whether in-view or completed. You can add up to 2. Please write in full, no abbreviations. E.g. write 'University of Lagos' not 'UNILAG'
                </div>
                <div id="education-form">
                    <input type="hidden" name="education_set-TOTAL_FORMS" value="1" id="id_education_set-TOTAL_FORMS"><input type="hidden" name="education_set-INITIAL_FORMS" value="0" id="id_education_set-INITIAL_FORMS"><input type="hidden" name="education_set-MIN_NUM_FORMS" value="0" id="id_education_set-MIN_NUM_FORMS"><input type="hidden" name="education_set-MAX_NUM_FORMS" value="2" id="id_education_set-MAX_NUM_FORMS"> 
                    <div id="education_set-0-row" class="form-base dynamic-form">
                        <input type="hidden" name="education_set-0-id" id="id_education_set-0-id">
                        <div class="form-group ">
                            <label class="pad-down-5">Name of School or Institute</label>
                            <label class="sr-only">School</label>
                            <input type="text" name="school" value="<?php echo $school ; ?>" maxlength="125" class="form-control" id="id_education_set-0-school" data-parsley-id="7880">
                            

                        </div>
                        <div class="row row-space-2">
                            <div class="col-sm-6">
                                <div class="form-group ">
                                    <label class="pad-down-5">Course of Study</label>
                                    <label class="sr-only">Course</label>
                                    <input type="text" name="course" value="<?php echo $course ; ?>" maxlength="125" class="form-control">
                                    
                             </div>
                         </div>
                         <div class="col-sm-6">
                            <div class="form-group ">
                                <label class="pad-down-5">Degree</label>
                                <label class="sr-only">Degree</label>
                                <select name="degree" class="form-control" >
  <option value=" <?php echo $degree ; ?>" selected=""><?php echo $degree ; ?></option>

  <option value="B.Sc.">B.Sc.</option>

  <option value="B.A.">B.A.</option>

  <option value="B.Ed.">B.Ed.</option>

  <option value="B.Eng.">B.Eng.</option>

  <option value="B.Tech.">B.Tech.</option>

  <option value="Diploma">Diploma</option>

  <option value="MBBS">MBBS</option>

  <option value="HND">HND</option>

  <option value="OND">OND</option>

  <option value="M.Sc.">M.Sc.</option>

  <option value="LL.B">LL.B</option>

  <option value="MBA">MBA</option>

  <option value="PhD">PhD</option>

  <option value="N.C.E">N.C.E</option>

  <option value="S.S.C.E">S.S.C.E</option>

</select>
                                
                            <span class="help-block" id="parsley-id-7982"></span></div>
                        </div>
                    </div>
                    <input type="hidden" name="education_set-0-DELETE" id="id_education_set-0-DELETE">
             
                

            </div>
        </div>
    </div>
    <hr class="row hr-styled row-space-2 ">
    <div class="row row-space-4">
        <label class="col-md-3 text-right font-head margin-bottom-5">
            Work Experience
        </label>

        <div class="col-md-9">
            <div class="padding-bottom-25">
                Enter your most recent work experience if any, and indicate if you currently work there. Please note that you may be required to provide proof.
            </div>

            <div id="we-form">
                <input type="hidden" name="workexperience_set-TOTAL_FORMS" value="1" id="id_workexperience_set-TOTAL_FORMS"><input type="hidden" name="workexperience_set-INITIAL_FORMS" value="0" id="id_workexperience_set-INITIAL_FORMS"><input type="hidden" name="workexperience_set-MIN_NUM_FORMS" value="0" id="id_workexperience_set-MIN_NUM_FORMS"><input type="hidden" name="workexperience_set-MAX_NUM_FORMS" value="2" id="id_workexperience_set-MAX_NUM_FORMS"> 
                <div id="workexperience_set-0-row" class="form-base dynamic-form">
                    <input type="hidden" name="workexperience_set-0-id" id="id_workexperience_set-0-id">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group ">
                                <label class="pad-down-5">Name of Company or Organization</label>
                                <label class="sr-only">Organization Name</label>
                                <input type="text" name="workexperience" value="<?php echo $workexperience ; ?>" maxlength="125" class="form-control">
                                
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group ">
                                <label class="pad-down-5">Your Role</label>
                                <label class="sr-only">Role</label>
                                <input type="text" name="role" value="<?php echo $role ; ?>" maxlength="125" class="form-control" >
                                
                            </div>
                        </div>
                    </div>
                    <div class="row margin-bottom-5">
                        <div class="col-sm-6 checkbox">
                            <label>
                                <input type="checkbox" name="workexperience_current_work" id="id_workexperience_set-0-currently_work" data-parsley-multiple="workexperience_set-0-currently_work" data-parsley-id="0567"> I currently work here
                            </label><span class="help-block" id="parsley-id-multiple-workexperience_set-0-currently_work"></span>
                        </div>
                    </div>
                    <input type="hidden" name="workexperience_set-0-DELETE" id="id_workexperience_set-0-DELETE">
              <br>
                
            </div>
        </div>
    </div>
    <hr class="row hr-styled row-space-2 ">
    <div class="row row-space-4">
        <label class="col-md-3 text-right font-head margin-bottom-5">
            Teaching Experience
        </label>

        <div class="col-md-9">
            <div class="row row-space-bottom-5">
                <label class="col-md-3 text-right margin-bottom-5">
                    How long have you been teaching?
                </label>
                <div class="col-md-9">
                    <select name="teaching" class="form-control" id="id_years_of_teaching" data-parsley-id="2043">
  <option value="<?php echo $teaching ; ?>" selected=""><?php echo $teaching ; ?></option>

  <option value="Less than 2 years">Less than 2 years</option>

  <option value="Between 3 to 5 years">Between 3 to 5 years</option>

  <option value="Between 6 to 10 years">Between 6 to 10 years</option>

  <option value="More than 10 years">More than 10 years</option>

</select><span class="help-block" id="parsley-id-2043"></span>
                </div>
            </div>
            <div id="curr" class="row row-space-4">
                <label class="col-md-3 text-right margin-bottom-5">
                    What class of students do you teach?
                </label>
                <div class="col-md-9">
                    
                    <div class="col-sm-4 checkbox-space">
                        <label for="id_classes_0"><input type="checkbox" name="classes"  value="nursery" id="id_classes_0" data-parsley-multiple="classes" data-parsley-id="8522">
 Nursery</label><span class="help-block hidden" id="parsley-id-multiple-classes"></span>
                    </div>
                    
                    <div class="col-sm-4 checkbox-space">
                        <label for="id_classes_1"><input type="checkbox" name="classes" value="primary" id="id_classes_1" data-parsley-multiple="classes" data-parsley-id="8522">
 Primary</label>
                    </div>
                    
                    <div class="col-sm-4 checkbox-space">
                        <label for="id_classes_2"><input type="checkbox" name="classes" value="jss" id="id_classes_2" data-parsley-multiple="classes" data-parsley-id="8522">
 JSS Level</label>
                    </div>
                    
                    <div class="col-sm-4 checkbox-space">
                        <label for="id_classes_3"><input type="checkbox" name="classes" value="sss" id="id_classes_3" data-parsley-multiple="classes" data-parsley-id="8522">
 SSS Level</label>
                    </div>
                    
                    <div class="col-sm-4 checkbox-space">
                        <label for="id_classes_4"><input type="checkbox" name="classes" value="undergraduate" id="id_classes_4" data-parsley-multiple="classes" data-parsley-id="8522">
 Undergraduates</label>
                    </div>
                    
                    <div class="col-sm-4 checkbox-space">
                        <label for="id_classes_5"><input type="checkbox" name="classes" value="adult" id="id_classes_5" data-parsley-multiple="classes" data-parsley-id="8522">
 Adults</label>
                    </div>
                     
                </div>
            </div>
            <div class="well bg-info" style="padding:15px;">
                <span class="font-head" style="padding:4px; color:#FFFF00;">Academic Curriculum</span>
                <br style="padding:15px;">If you teach academic subjects for nursery, primary or secondary, then select the curriculum you can teach
                with. Skip this if you teach non-academic subjects or skills.
            </div>
            <div>
                <div class="row row-space-4">
                    <label class="col-md-3 text-right margin-bottom-5">
                        Select Curriculum
                    </label>
                    <div class="col-md-9">
                        
                        <div class="col-sm-4 checkbox-space">
                            <label for="id_curriculum_used_0"><input type="checkbox" name="curriculum_used" value="Nigeria" id="id_curriculum_used_0" data-parsley-multiple="curriculum_used" data-parsley-id="5322">
 Nigerian</label><span class="help-block hidden" id="parsley-id-multiple-curriculum_used"></span>
                        </div>
                        
                        <div class="col-sm-4 checkbox-space">
                            <label for="id_curriculum_used_1"><input type="checkbox" name="curriculum_used" value="British" id="id_curriculum_used_1" data-parsley-multiple="curriculum_used" data-parsley-id="5322">
 British</label>
                        </div>
                        
                        <div class="col-sm-4 checkbox-space">
                            <label for="id_curriculum_used_2"><input type="checkbox" name="curriculum_used" value="American" id="id_curriculum_used_2" data-parsley-multiple="curriculum_used" data-parsley-id="5322">
 American</label>
                        </div>
                        
                        <div class="col-sm-4 checkbox-space">
                            <label for="id_curriculum_used_3"><input type="checkbox" name="curriculum_used" value="Montessori" id="id_curriculum_used_3" data-parsley-multiple="curriculum_used" data-parsley-id="5322">
 Montessori</label>
                        </div>
                        
                        
                    </div>
                </div>
                <div id="curriculum_pref" class="row row-space-4  hidden ">
                    <label class="col-md-3 text-right">
                        British or American Curriculum
                    </label>
                    <div class="col-md-9">
                        <p>Please tell us about your experience with this curriculum</p>
                        <div class="form-group">
                       <textarea name="curriculum_explanation" cols="40" rows="4" maxlength="300" class="form-control"><?php echo $curriculum_explanation ; ?></textarea>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
<hr class="row hr-styled row-space-2">
<div class="row row-space-4">
    
    <label class="col-md-3 text-right font-head margin-bottom-5">
        Introduce Yourself to Clients
    </label>

    <div class="col-md-9 col-sm-12 form-group ">

        <div class="well bg-info padding-bottom-30">
            <p style="padding:15px;">Your tutor profile is your best opportunity to "sell yourself" as a tutor on Tuteria. Students often look at multiple tutor profiles before selecting a tutor to contact, so you need to be thorough, yet concise in describing your tutoring abilities, qualifications, experience and teaching style.</p>
            <p><strong class="font-head" style="padding:15px;">Follow these important guidelines</strong></p>
            <ol style="padding-left: 25px;">
                <li style="padding:15px;">
                    Write at least 2-4 paragraphs describing your tutoring and teaching qualifications and experience. Be sure to include any awards or trainings you’ve received that support your teaching credentials.
                </li>
                <li style="padding:15px;">
                    Outline the subjects you specialize in and explain your teaching method. Include any degrees or awards that make you standout and qualified to teach those subjects or skills.
                </li>
                <li style="padding:15px;">
                     Write as though you are talking to the client directly and encourage them to book a lesson with you.
                </li>
            </ol>
        </div>
		   <br>
        <textarea name="tutor_description" cols="40" rows="8" class="form-control" required ><?php echo $tutor_description ; ?></textarea>

        
    </div>

            </div></div></div></section>
            
                <div class="col-sm-15 col-sm-offset-12" align="right">
					  <input type="submit" name="submits"  class="btn btn-primary btn-lg" value="Submit Profile">
					   <br> <br> <br>
                </div>
				
               
               
        </form>
    </div>
	
    </div>
</div>

                </div>
            </div>
        </div>
        
            </div>
            
    
      
            
        </div>
    </div>
     </div>
 <?php include("editorscript.php");?>
 </body></html>
    
    
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster --


 