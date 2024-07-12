
<?php
	if(isset($_COOKIE["login"])){
		include_once("db.php");
		$email=$_COOKIE["login"];
		$rs=mysqli_query($conn,"select * from details where email = '$email'");
		if($r=mysqli_fetch_array($rs)){
			$code=$r["code"];
			$fname=$r["fname"];
			$lname=$r["lname"];
?>
<!DOCTYPE HTML>
<html>
<head>
<title><?=$r["fname"]." ".$r["lname"]?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Marital Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<!----font-Awesome----->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!----font-Awesome----->
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
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>
</head>
<body>
<!-- ============================  Navigation Start =========================== -->
 <?php
	include("navbar.php")
 ?>
<!-- ============================  Navigation End ============================ -->
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <i class="fa fa-home home_1"></i>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">View Profile</li>
     </ul>
   </div>
   <div class="profile">
   	 <div class="col-md-8 profile_left">
		<h2><?=$fname?> <?=$lname?></h2>
   	 	<div class="col_3">
   	        <div class="col-sm-4 row_2">
				<div class="flexslider">
					 <ul class="slides">
						<li data-thumb="profile/<?=$r["code"]?>.jpg">
							<img src="profile/<?=$r["code"]?>.jpg" />
						</li><br>
					 </ul>
				  </div>
				<label>Change Image :</label>
				<form method="post" action="update_image.php" enctype="multipart/form-data">
					<input type="file" name="photo" class="form-control"><br>
					<input type="submit" value="Update" class="btn btn-danger">
				</form>
			</div>
			<div class="col-sm-8 row_1">
				<?php
					if(isset($_GET["success"])){
				?>
					<div class="alert alert-success">Records Updated</div>
				<?php
					}
					if(isset($_GET["img_success"])){
				?>
					<div class="alert alert-success">Image Uploaded</div>
				<?php
					}
					if(isset($_GET["img_err"])){
				?>
					<div class="alert alert-danger">Image not uploaded.</div>
				<?php
					}
				?>
				<form method="post" action="update.php">
				<table class="table_working_hours">
		        	<tbody>
		        		<tr class="opened_1">
							<td class="day_label">First Name :</td>
							<td class="day_value"><input type="text" name="fname" value="<?=$r["fname"]?>" class="form-control" required></td>
						</tr>
					    <tr class="opened">
							<td class="day_label">Last Name :</td>
							<td class="day_value"><input type="text" name="lname" value="<?=$r["lname"]?>" class="form-control" required></td>
						</tr>
					    <tr class="opened">
							<td class="day_label">Gender :</td>
							<td class="day_value">
								<select name="gender" class="form-control" required>
								<option value="<?=$r["gender"]?>"><?=$r["gender"]?></option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
								</select></td>
						</tr>
					    <tr class="opened">
							<td class="day_label">Caste :</td>
							<td class="day_value">
								<select name="caste" class="form-control" required>
								<option value="<?=$r["caste"]?>"><?=$r["caste"]?></option>
								<option value="Sharma">Sharma</option>
								<option value="Gupta">Gupta</option>
								<option value="Goyal">Goyal</option>
								<option value="Agarwal">Agarwal</option>
								<option value="Bansal">Bansal</option>
								<option value="Kansal">Kansal</option>
								<option value="Jindal">Jindal</option>
								<option value="Birla">Birla</option>
								<option value="Singhania">Singhania</option>
								<option value="Ambani">Ambani</option>
								</select></td>
						</tr>
					    <tr class="opened">
							<td class="day_label">Religion :</td>
							<td class="day_value">
								<select name="religion" class="form-control" required>
								<option value="<?=$r["religion"]?>"><?=$r["religion"]?></option>
								<option value="Hindu">Hindu</option>
								<option value="Muslim">Muslim</option>
								<option value="Sikh">Sikh</option>
								<option value="Christian">Christian</option>
								<option value="Jain">Jain</option>
								<option value="Buddhism">Buddhism</option>
								</select></td>
						</tr>
					    <tr class="closed">
							<td class="day_label">DOB :</td>
							<td class="day_value"><input type="date" name="dob" class="form-control" value="<?=$r["birth"]?>"></td>
						</tr>
					    <tr class="closed">
							<td class="day_label">Occupation :</td>
							<td class="day_value">
								<select name="occupation" class="form-control" required>
								<option value="<?=$r["occupation"]?>"><?=$r["occupation"]?></option>
								<option value="Teacher">Teacher</option>
								<option value="Doctor">Doctor</option>
								<option value="Farmer">Farmer</option>
								<option value="Scientist">Scientist</option>
								<option value="Policeman">Policeman</option>
								<option value="Lawyer">Lawyer</option>
								</select></td>
						</tr>
						<tr>
							<td colspan=2 class="day_label"><br><input type="submit" value="Update" class="btn btn-danger" style="float:right"></td>
						</tr>
				    </tbody>
				</table>
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
		<?php
			$rs1=mysqli_query($conn,"select * from moredetails where usercode='$code'");
			if($r1=mysqli_fetch_array($rs1)){
		?>
		<div class="col_4">
		    <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
			   <div id="myTabContent" class="tab-content">
				    <div class="basic_1">
				    	<h3>More Details:</h3>
						<form method="post" action="updatedetails.php?id=<?=$code?>">
				    	<div class="col-md-6 basic_1-left">
				    	  <table class="table_working_hours">
				        	<tbody>
				        		<tr class="opened_1">
									<td class="day_label">Marital Status :</td>
									<td class="day_value">
										<select name="maritalstatus" class="form-control" required>
											<option value="<?=$r1["maritalstatus"]?>"><?=$r1["maritalstatus"]?></option>
											<option value="Single">Single</option>
											<option value="Married">Married</option>
											<option value="Divorced">Divorced</option>
											<option value="Engaged">Engaged</option>
											</select></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Mother Tongue :</td>
									<td class="day_value">
										<select name="mothertongue" class="form-control" required>
											<option value="<?=$r1["mothertongue"]?>"><?=$r1["mothertongue"]?></option>
											<option value="Hindi">Hindi</option>
											<option value="English">English</option>
											<option value="Marwadi">Marwadi</option>
											<option value="Punjabi">Punjabi</option>
										</select></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Complexion :</td>
									<td class="day_value">
										<select name="complexion" class="form-control" required>
											<option value="<?=$r1["complexion"]?>"><?=$r1["complexion"]?></option>
											<option value="Fair">Fair</option>
											<option value="Dark">Dark</option>
										</select></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Birthplace :</td>
									<td class="day_value">
										<select name="birthplace" class="form-control" required>
											<option value="<?=$r1["birthplace"]?>"><?=$r1["birthplace"]?></option>
											<option value="Bikaner">Bikaner</option>
											<option value="Jaipur">Jaipur</option>
											<option value="Delhi">Delhi</option>
											<option value="Mumbai">Mumbai</option>
											<option value="Udaipur">Udaipur</option>
											<option value="Bangalore">Bangalore</option>
											<option value="Chennai">Chennai</option>
										</select></td>
								</tr>
							    <tr class="opened_1">
									<td class="day_label">Weight (in KG):</td>
									<td class="day_value"><input type="text" name="weight" value="<?=$r1["weight"]?>" class="form-control" required></td>
								</tr>
							    <tr class="opened_1">
									<td class="day_label">Height (in CM):</td>
									<td class="day_value"><input type="text" name="height" value="<?=$r1["height"]?>" class="form-control" required></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Bloodgroup :</td>
									<td class="day_value">
										<select name="bloodgroup" class="form-control" required>
											<option value="<?=$r1["bloodgroup"]?>"><?=$r1["bloodgroup"]?></option>
											<option value="A+">A+</option>
											<option value="A-">A-</option>
											<option value="AB+">AB+</option>
											<option value="O+">O+</option>
											<option value="O-">O-</option>
										</select></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Diet :</td>
									<td class="day_value">
										<select name="diet" class="form-control" required>
											<option value="<?=$r1["diet"]?>"><?=$r1["diet"]?></option>
											<option value="Vagetarian">Vegetarian</option>
											<option value="Non-Vegetarian">Non-Vegetarian</option>
										</select></td>
								</tr>
						    </tbody>
				          </table>
				         </div>
				         <div class="col-md-6 basic_1-left">
				          <table class="table_working_hours">
				        	<tbody>
				        		<tr class="opened_1">
									<td class="day_label">Profile Created By :</td>
									<td class="day_value">
										<select name="profilecreated" class="form-control" required>
											<option value="<?=$r1["profilecreated"]?>"><?=$r1["profilecreated"]?></option>
											<option value="Self">Self</option>
											<option value="Mother">Mother</option>
											<option value="Father">Father</option>
											<option value="Family">Family</option>
											<option value="Friend">Friend</option>
										</select></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Smoke :</td>
									<td class="day_value">
										<select name="smoke" class="form-control" required>
											<option value="<?=$r1["smoke"]?>"><?=$r1["smoke"]?></option>
											<option value="Yes">Yes</option>
                							<option value="No">No</option>
										</select></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Drink :</td>
									<td class="day_value">
										<select name="drink" class="form-control" required>
											<option value="<?=$r1["drink"]?>"><?=$r1["drink"]?></option>
											<option value="Yes">Yes</option>
                							<option value="No">No</option>
										</select></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Zodiac :</td>
									<td class="day_value">
									<select name="zodiac" class="form-control" required>
										<option value="<?=$r1["zodiac"]?>"><?=$r1["zodiac"]?></option>
										<option value="Aries">Aries</option>
										<option value="Taurus">Taurus</option>
										<option value="Gemini">Gemini</option>
										<option value="Cancer">Cancer</option>
										<option value="leo">Leo</option>
										<option value="Virgo">Virgo</option>
										<option value="Libra">Libra</option>
									</select></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Education :</td>
									<td class="day_value">
									<select name="education" class="form-control" required>
										<option value="<?=$r1["education"]?>"><?=$r1["education"]?></option>
										<option value="B. Tech">B. Tech</option>
										<option value="M. Tech">M. Tech</option>
										<option value="MBA">MBA</option>
										<option value="12th Pass">12th Pass</option>
										<option value="10th Pass">10th Pass</option>
									</select></td>
								</tr>
							    <tr class="closed">
									<td class="day_label">Income (in INR) :</td>
									<td class="day_value"><input type="text" name="income" value="<?=$r1["income"]?>" class="form-control" required></td>
								</tr>
							    <tr class="closed">
									<td class="day_label">Father Occupation :</td>
									<td class="day_value">
									<select name="fatheroccupation" class="form-control" required>
										<option value="<?=$r1["fatheroccupation"]?>"><?=$r1["fatheroccupation"]?></option>
										<option value="Engineer">Engineer</option>
										<option value="Doctor">Doctor</option>
										<option value="Lawyer">Lawyer</option>
										<option value="Farmer">Farmer</option>
										<option value="Teacher">Teacher</option>
										<option value="Dentist">Dentist</option>
										<option value="Scientist">Scientist</option>
									</select></td>
								</tr>
								<tr class="closed">
									<td class="day_label">Mother Occupation :</td>
									<td class="day_value">
									<select name="motheroccupation" class="form-control" required>
										<option value="<?=$r1["motheroccupation"]?>"><?=$r1["motheroccupation"]?></option>
										<option value="Engineer">Engineer</option>
										<option value="Doctor">Doctor</option>
										<option value="Lawyer">Lawyer</option>
										<option value="Farmer">Farmer</option>
										<option value="Teacher">Teacher</option>
										<option value="Dentist">Dentist</option>
										<option value="Scientist">Scientist</option>
										<option value="Housewife">Housewife</option>
									</select></td>
								</tr>
								<tr>
									<td colspan=2 class="day_label"><br><input type="submit" value="Update Details" class="btn btn-danger" style="float:right"></td>
								</tr>
						    </tbody>
				        </table>
				        </div>
						</form>
				        <div class="clearfix"> </div>
				    </div>
				</div>
		  </div>
	   </div>
   	 </div>
     <div class="col-md-4 profile_right">
	 <div class="view_profile">
        	<h3>View More Profiles</h3>
			<?php
				$count=0;
				$rs1=mysqli_query($conn,"select * from details where email<>'$email' ORDER by rand()");
				while ($count<7){
					if($r1=mysqli_fetch_array($rs1)){
			?>
        	<ul class="profile_item">
        	  <a href="user_profile.php?id=<?=$r1["code"]?>">
        	   <li class="profile_item-img">
        	   	  <img src="profile/<?=$r1["code"]?>.jpg" class="img-responsive" alt=""/>
        	   </li>
        	   <li class="profile_item-desc">
        	   	  <h4><?=$r1["fname"]." ".$r1["lname"]?></h4>
        	   	  <p><?=$r1["birth"]?>, <?=$r1["city"]?></p>
        	   	  <h5>View Full Profile</h5>
        	   </li>
        	   <div class="clearfix"> </div>
        	  </a>
           </ul>
		   <?php
					}
				$count++;
				}
		   	?>
         </div>
        </div>
       <div class="clearfix"> </div>
    </div>
       </div>
        </div>
       <div class="clearfix"> </div>
    </div>
  </div>
</div>
<!-- ============================  Footer Start =========================== -->
<?php
	include("footer.php");
 ?>
<!-- ============================  Footer End ============================ -->  
</body>
</html>
<?php
		}
	}
		else{
			header("location:logout.php");
		}
	}
	else{
		header("location:index.php");
	}
?>