<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<?php require_once("includes/dbconn.php");?>
<?php
if(isloggedin()){
 //do nothing stay here
} else{
   header("location:login.php");
}
 
$id=$_GET['id'];
writepartnerprefs($id);

///reading partnerprefs from db

		$sql="SELECT * FROM partnerprefs WHERE custId = $id";
		$result=mysqli_query($conn,$sql);
		if($result){
			while($row=mysqli_fetch_assoc($result)){
			$agemin=$row['agemin'];
			$agemax=$row['agemax'];
			$marital_status=$row['maritalstatus'];
			$height=$row['height'];
			$religion=$row['religion'];
			$education=$row['education'];
			$occupation=$row['occupation'];
			$address=$row['address'];
			
		}
	}
		else{
			echo mysqli_error($conn);
		}



?>
<!DOCTYPE HTML>
<html>
<head>
<title>Partner Prefs</title>
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
        <li class="current-page">Partner Prefernce</li>
     </ul>
   </div>
   <div class="profile">
   	 <div class="col-md-12 profile_left">   	 	
		<div class="col_4">
		    <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
			   <ul id="myTab" class="nav nav-tabs nav-tabs1" role="tablist">
				  <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Partner Preference</a></li>
			   </ul>
			   <form action="" method="post" name="partner">
			   <div id="myTabContent" class="tab-content">
				  <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
				    <div class="tab_box">
				    	<h1>My Ideal Partner would be</h1>
				    
				    </div>
				    <div class="basic_1-left">
				    	  <table class="table_working_hours">
				        	<tbody>
				        		<tr class="opened">
									<td class="day_label">Age   :</td>
									<td class="day_value">
									<input type="text" value="" name="agemin" value="<?php echo $agemin; ?>">to <input type="text" value="" name ="agemax" value="<?php echo $agemax; ?>"> 
									</td>
								</tr>
				        		<tr class="opened">
									<td class="day_label">Marital Status :</td>
									<td class="day_value">
										<div class="select-block1">
										<select name="maritalstatus">
						                    <option value="<?php if($marital_status="Single"){echo "Single";} elseif ($marital_status="Married") {echo "Married";} else{echo "Divorced";}?>"><?php echo $marital_status;?></option>
						                    <option value="Single">Single</option>
						                    <option value="Married">Married</option> 
						               		<option value="Divorsed">Divorsed</option>
						                </select>
						                </div>
									</td>
								</tr>
							   
								</tr>
								<tr class="opened">
									<td class="day_label">Height</td>
									<td class="day_value closed"><input type="text"  id="edit-name" value="" name="height" value="<?php echo $height;?>" size="60" maxlength="60" class="form-text">cm</td>
								</tr>
							
								<tr class="opened">
									<td class="day_label">Religion :</td>
									<td class="day_value closed"><span>
									<div class="select-block1">
					                    <select name="religion">
						                    <option value="Not Applicable">Not Applicable</option>
						                    <option value="Hindu">Hindu</option>
						                    <option value="Christian">Christian</option>
						                    <option value="Muslim">Muslim</option>
						                    
						                    
					                    </select>
	                 				</div></span>
	                  			</td>
								</tr>
							
								<tr class="opened">
									<td class="day_label">Education :</td>
									<td class="day_value closed"><div class="select-block1">
						                <select name="education">
						                    
						               		<option value="Degree">Degree</option> 
						               		<option value="PG">PG</option> 
						               		<option value="Doctorate">Doctorate</option> 
						                </select>
								    </div>
								    </td>
								</tr>
								<tr class="opened">
									<td class="day_label">Occupation :</td>
									<td class="day_value closed"> <input type="text" id="edit-name" name="occupation" value="" size="60" maxlength="60" value="<?php echo $occupation;?>" class="form-text"></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Place of Residence :</td>
									<td class="day_value closed">
										<div class="select-block1">
						                   <input type="text" name="address" value="" value="<?php echo $address;?>">
						                 </div>
						            </td>
								</tr>
							 </tbody>
				          </table>
				        </div>
				  
				  </div>
				 <input type="submit" value="Update Preferences">
		     </div>
		     </form>
		  </div>
	   </div>
   	 </div>
       <div class="clearfix"> </div>
    </div>
  </div>
</div>


<?php include_once("footer.php");?>
<!-- FlexSlider -->
<script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>   
</body>
</html>	