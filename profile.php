<?php
	if(isset($_COOKIE["login"])){
		include_once("db.php");
		$email=$_COOKIE["login"];
		$rs=mysqli_query($conn,"select * from details where email = '$email'");
		if($r=mysqli_fetch_array($rs)){
			$code=$r["code"];
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
	$(document).ready(function() {
	$('.flexslider').flexslider({
		animation: "slide",
		controlNav: "thumbnails"
	});
	});
	$(document).on("keyup","#search",function(){
		var txt = $(this).val();
		$.post(
				"user_search.php",{sch:txt},function(data){
				$("#record").html(data);
			}
		);
	});
</script>
</head>
<body>
<!-- ============================  Navigation Start =========================== -->
 <?php
	include("navbar.php");
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
   	 <div class="col-md-8 profile_left" id="record">
   	 	<h2>Profile Id : <?=$r["code"]?></h2>
   	 	<div class="col_3">
   	        <div class="col-sm-4 row_2">
				<div class="flexslider">
					 <ul class="slides">
						<li data-thumb="profile/<?=$r["code"]?>.jpg">
							<img src="profile/<?=$r["code"]?>.jpg" />
						</li>
					 </ul>
				  </div>
			</div>
			<div class="col-sm-8 row_1">
				<table class="table_working_hours">
		        	<tbody>
		        		<tr class="opened_1">
							<td class="day_label">First Name :</td>
							<td class="day_value"><?=$r["fname"]?></td>
						</tr>
					    <tr class="opened">
							<td class="day_label">Last Name :</td>
							<td class="day_value"><?=$r["lname"]?></td>
						</tr>
					    <tr class="opened">
							<td class="day_label">Gender :</td>
							<td class="day_value"><?=$r["gender"]?></td>
						</tr>
					    <tr class="opened">
							<td class="day_label">Caste :</td>
							<td class="day_value"><?=$r["caste"]?></td>
						</tr>
					    <tr class="opened">
							<td class="day_label">Religion :</td>
							<td class="day_value"><?=$r["religion"]?></td>
						</tr>
					    <tr class="closed">
							<td class="day_label">DOB :</td>
							<td class="day_value closed"><span><?=$r["birth"]?></span></td>
						</tr>
					    <tr class="closed">
							<td class="day_label">Occupation :</td>
							<td class="day_value closed"><span><?=$r["occupation"]?></span></td>
						</tr>
				    </tbody>
				</table>
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
					<h3><u>More Details</u></h3>
			   		<div id="myTabContent" class="tab-content">				    
				    	<div class="basic_1">
				    		<div class="col-md-6 basic_1-left">
				    	  	<table class="table_working_hours">
				        		<tbody>
									<tr class="opened_1">
										<td class="day_label">Marital Status :</td>
										<td class="day_value"><?=$r1["maritalstatus"]?></td>
									</tr>
									<tr class="opened">
										<td class="day_label">Mother Tongue :</td>
										<td class="day_value"><?=$r1["mothertongue"]?></td>
									</tr>
									<tr class="opened">
										<td class="day_label">Complexion :</td>
										<td class="day_value"><?=$r1["complexion"]?></td>
									</tr>
									<tr class="opened">
										<td class="day_label">Birth Place :</td>
										<td class="day_value"><?=$r1["birthplace"]?></td>
									</tr>
									<tr class="opened">
										<td class="day_label">Weight :</td>
										<td class="day_value"><?=$r1["weight"]?></td>
									</tr>
									<tr class="opened">
										<td class="day_label">Height :</td>
										<td class="day_value"><?=$r1["height"]?></td>
									</tr>
									<tr class="opened">
										<td class="day_label">Bloodgroup :</td>
										<td class="day_value"><?=$r1["bloodgroup"]?></td>
									</tr>
									<tr class="opened">
										<td class="day_label">Diet :</td>
										<td class="day_value"><?=$r1["diet"]?></td>
									</tr>
								</tbody>
							</table>
							</div>
							<div class="col-md-6 basic_1-left">
							<table class="table_working_hours">
								<tbody>
									<tr class="opened_1">
										<td class="day_label">Profile Created By :</td>
										<td class="day_value"><?=$r1["profilecreated"]?></td>
									</tr>
									<tr class="opened">
										<td class="day_label">Smoke :</td>
										<td class="day_value"><?=$r1["smoke"]?></td>
									</tr>
									<tr class="opened">
										<td class="day_label">Drink :</td>
										<td class="day_value"><?=$r1["drink"]?></td>
									</tr>
									<tr class="opened">
										<td class="day_label">Zodiac :</td>
										<td class="day_value"><?=$r1["zodiac"]?></td>
									</tr>
									<tr class="opened">
										<td class="day_label">Education :</td>
										<td class="day_value"><?=$r1["education"]?></td>
									</tr>
									<tr class="closed">
										<td class="day_label">Income :</td>
										<td class="day_value"><?=$r1["income"]?></td>
									</tr>
									<tr class="closed">
										<td class="day_label">Father Occupation :</td>
										<td class="day_value"><?=$r1["fatheroccupation"]?></td>
									</tr>
									<tr class="closed">
										<td class="day_label">Mother Occupation :</td>
										<td class="day_value"><?=$r1["motheroccupation"]?></td>
									</tr>
								</tbody>
							</table>
						</div>
						</div>
					</div>
				</div>
		     </div>
		  </div>
	   </div>
   	 </div>
     <div class="col-md-4 profile_right">
     	<div class="newsletter">
			<input type="text" id="search" required="" placeholder="Search User by Name, ID :">
        </div>
        <div class="view_profile">
        	<h3>View More Profiles</h3>
			<?php
				$count=0;
				$rs2=mysqli_query($conn,"select * from details where email<>'$email' ORDER by rand()");
				while ($count<6 && $r2=mysqli_fetch_array($rs2)){
			?>
        	<ul class="profile_item">
        	  <a href="user_profile.php?id=<?=$r2["code"]?>">
        	   <li class="profile_item-img">
        	   	  <img src="profile/<?=$r2["code"]?>.jpg" class="img-responsive" alt=""/>
        	   </li>
        	   <li class="profile_item-desc">
        	   	  <h4><?=$r2["fname"]." ".$r2["lname"]?></h4>
        	   	  <p><?=$r2["birth"]?>, <?=$r2["city"]?></p>
        	   	  <h5>View Full Profile</h5>
        	   </li>
        	   <div class="clearfix"> </div>
        	  </a>
           </ul>
		   <?php
				$count++;
				}
		   	?>
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
			else{
				header("location:login.php?err=1");
			}
		}
		else{
			header("location:logout.php");
		}
	}
	else{
		header("location:logout.php");
	}
?>