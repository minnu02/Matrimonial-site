<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<?php 
if(! isloggedin()){
   header("location:login.php");
}
 ?>
<?php
$id=$_SESSION['id'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		processprofile_form($id);
}
?>
<?php

$id=$_GET['id'];
if(isloggedin()){
 //do nothing stay here
} else{
   header("location:login.php");
}

//calling photo uploader function
if ($_SERVER['REQUEST_METHOD'] == 'POST'){ uploadphoto($id); }
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Find Your Perfect Partner - Makemylove
 | Register :: Make My Love
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<!--font-Awesome-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--font-Awesome-->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
</head>
<body>
<!-- ============================  Navigation Start =========================== -->
<?php include_once("includes/user_header.php");?>
<!-- ============================  Navigation End ============================ -->
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.php"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Create Your Profile</li>
     </ul>
   </div>
   <div class="services">
   	  <div class="col-sm-12 login_left">
	     <form action="" method="POST">
	  	    <div class="form-group col-sm-6">
		      <label for="edit-name">Full Name <span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="edit-name" name="name" value="" size="60" maxlength="60" class="form-text required">
		    </div>
			<div class="form-group col-sm-6">
		      <label for="edit-name">Email <span class="form-required" title="This field is required.">*</span></label>
		      <input type="email" id="edit-name" name="email" value="" size="60" maxlength="60" class="form-text required">
		    </div>
		     <div class="form-group col-sm-2">
		      <label for="edit-name">Gender <span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="sex">
	                    <option value="Male">Male</option>
	                    <option value="Female">Female</option> 
						<option value="Others">Others</option>
	                </select>
			    </div>
		    </div>

	    <div class="form-group col-sm-6">
			    <div class="age_select">
			      <label for="edit-pass">
 Date Of Birth <span class="form-required" title="This field is required.">*</span></label>
			        <div class="age_grid">
			         <div class="col-sm-4 form_box">
	                  <div class="select-block1">
	                    <select name="day">
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
	                    </select>
	                  </div>
	            </div>
	            <div class="col-sm-4 form_box2">
	                   <div class="select-block1">
	                    <select name="month">
		                    <option value="01">January</option>
		                    <option value="02">February</option>
		                    <option value="03">March</option>
		                    <option value="04">April</option>
		                    <option value="05">May</option>
		                    <option value="06">June</option>
		                    <option value="07">July</option>
		                    <option value="08">August</option>
		                    <option value="09">September</option>
		                    <option value="10">October</option>
		                    <option value="11">November</option>
		                    <option value="12">December</option>
	                    </select>
	                  </div>
	                 </div>
	                 <div class="col-sm-4 form_box1">
	                   <div class="select-block1">
	                    <select name="year">
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
	                    </select>
	                   </div>
	                  </div>
	                  <div class="clearfix"> </div>
	                 </div>
	              </div>
            </div>
            <div class="form-group col-sm-6">
			    <div class="age_select">
			      <label for="edit-pass">Religion <span class="form-required" title="This field is required.">*</span></label>
			        <div class="age_grid">
			         <div class="col-sm-4 form_box">
	                  <div class="select-block1">
	                    <select name="religion">
		                    <option value="Not Applicable">Not Applicable</option>
		                    <option value="Hindu">Hindu</option>
		                    <option value="Christian">Christian</option>
		                    <option value="Muslim">Muslim</option>
		                 
		                    
	                    </select>
	                  </div>
	            </div>
	                  <div class="clearfix"> </div>
	                 </div>
	              </div>
            </div>

            <!-- Fourth Row starts -->
              <div class="form-group col-sm-6">
			    <div class="age_select">
			      <label for="edit-pass">Address <span class="form-required" title="This field is required.">*</span></label>
			        <div class="age_grid">
			         <div class="col-sm-4 form_box">
	                  <div class="select-block1">
	                    <input type="text" size="40" name="address" placeholder=" District, State">
	                  </div>
	            </div>
	         
	                  <div class="clearfix"> </div>
	                 </div>
	              </div>
            </div>

            <!-- Fourth Row ends -->
            <!-- Fifth Row starts -->
            <div class="form-group col-sm-2">
		      <label for="edit-name">Age<span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="age">
	                     <option value="">
</option>
		          
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
	                </select>
			    </div>
		    </div>
             <div class="form-group col-sm-2">
		      <label for="edit-name">Marital status <span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="maritalstatus">
	                    <option value="Single">Single</option>
	                    <option value="Married">Married</option> 
	               		<option value="Divorsed">Divorsed</option>
	                </select>
			    </div>
		    </div>
		    
			<div class="col-lg-12">
			<div class="form-group col-sm-2">
		      <label for="edit-name">Education <span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select name="education">
	                    <option value="Primary">Diploma</option>
	                    <option value="Tenth level">SSLC</option> 
	               		<option value="+2">Plus Two</option> 
	               		<option value="Degree">Degree</option> 
	               		<option value="PG">PG</option> 
	               		<option value="Doctorate">Doctorate</option> 
	                </select>
			    </div>
				
		    </div>
		    <div class="form-group col-sm-2">
		      <label for="edit-name">Education Details* <span class="form-required" title="This field is required."></span></label>
			  <input type="text" id="edit-name" name="edudsr" value="" size="60" maxlength="60" class="form-text">
		    </div>
			</div>

		    <div class="form-group col-sm-2">
		      <label for="edit-name">Weight* <span class="form-required" title="This field is required."></span></label>
			  <input type="text" id="edit-name" name="weight" value="" size="60" maxlength="60" class="form-text">
		    </div>
	
		    <div class="col-lg-12">
		    <div class="form-group col-sm-2">
		      <label for="edit-name">Height* <span class="form-required" title="This field is required."></span></label>
			  <input type="text" id="edit-name" name="height" value="" size="60" maxlength="60" class="form-text">
		    </div>
			</div>
			<div class="col-lg-12">
		     <div class="form-group col-sm-2">
		      <label for="edit-name">Occupation* <span class="form-required" title="This field is required."></span></label>
			  <input type="text" id="edit-name" name="occupation" value="" size="60" maxlength="60" class="form-text">
		    </div>
			</div>
			<div class="col-lg-12">
		    <div class="form-group col-sm-2">
		      <label for="edit-name">Occupation Details* <span class="form-required" title="This field is required."></span></label>
			  <input type="text" id="edit-name" name="occupationdescr" value="" size="100" maxlength="120" class="form-text">
		    </div>
		    
			</div>
			<div class="form-group col-sm-2">
		      <label for="edit-name">Annual Income* <span class="form-required" title="This field is required."></span></label>
			  <input type="text" id="edit-name" name="income" value="" size="60" maxlength="60" class="form-text">
		    </div>    
</div>
          
		    <div class="form-group">
		    	<label for="about me">About Me<span class="form-required" title="This field is required.">*</span></label>
		    	<textarea rows="5" cols="50" name="aboutme" placeholder="Write about you" class="form-text"></textarea>
		    </div>
				
		    <div class="form-actions">
			    <input type="submit" id="edit-submit" name="op" value="Submit" class="btn_1 submit">
			  </div>
			  </div>
		 </form>
	  </div>
	 
	  <div class="clearfix"> </div>
   </div>
  </div>
</div>


<?php include_once("footer.php");?>

</body>
</html>	