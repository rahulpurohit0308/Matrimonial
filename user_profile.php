<?php
	if(isset($_COOKIE["login"])){
		include_once("db.php");
		$email=$_COOKIE["login"];
        if(!isset($_GET["id"])){
            header("location:search.php");
        }
        else{
            $code=$_GET["id"];
            $rs=mysqli_query($conn,"select * from details where code='$code'");
            if($r=mysqli_fetch_array($rs)){
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
   	 	<h2><?=$r["fname"]?> <?=$r["lname"]?></h2>
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
				<div class="col-sm-12">
					<form method="post" action="msg.php?id=<?=$code?>">
						<label>Messsage : </label>
						<textarea name="msg" class="form-control" rows=3></textarea><br>
						<input type="submit" value="Submit" class="btn btn-danger">
					</form>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
<?php
	$rs1=mysqli_query($conn,"select * from moredetails where usercode='$code'");
	if($r1=mysqli_fetch_array($rs1)){
?>
		<div class="col_4">
		    <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
				<h2><u>More Details</u></h2>
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
     <div class="col-md-4 profile_right">
        <div class="view_profile">
        	<h3>View More Profiles</h3>
			<?php
				$count=0;
				$rs1=mysqli_query($conn,"select * from details where email<>'$email' AND code<>'$code' ORDER by rand()");
				while ($count<6){
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
       <div class="clearfix"> </div>
    </div>
  </div>
</div>
<div class="footer">
    	<div class="container">
    		<div class="col-md-4 col_2">
    			<h4>About Us</h4>
    			<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris."</p>
    		</div>
    		<div class="col-md-2 col_2">
    			<h4>Help & Support</h4>
    			<ul class="footer_links">
    				<li><a href="#">24x7 Live help</a></li>
    				<li><a href="contact.html">Contact us</a></li>
    				<li><a href="#">Feedback</a></li>
    				<li><a href="faq.html">FAQs</a></li>
    			</ul>
    		</div>
    		<div class="col-md-2 col_2">
    			<h4>Quick Links</h4>
    			<ul class="footer_links">
    				<li><a href="privacy.html">Privacy Policy</a></li>
    				<li><a href="terms.html">Terms and Conditions</a></li>
    				<li><a href="services.html">Services</a></li>
    			</ul>
    		</div>
    		<div class="col-md-2 col_2">
    			<h4>Social</h4>
    			<ul class="footer_social">
				  <li><a href="#"><i class="fa fa-facebook fa1"> </i></a></li>
				  <li><a href="#"><i class="fa fa-twitter fa1"> </i></a></li>
				  <li><a href="#"><i class="fa fa-google-plus fa1"> </i></a></li>
				  <li><a href="#"><i class="fa fa-youtube fa1"> </i></a></li>
			    </ul>
    		</div>
    		<div class="clearfix"> </div>
    		<div class="copy">
		      <p>Copyright © 2015 Marital . All Rights Reserved  | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
	        </div>
    	</div>
</div>
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
<?php
				}
			}
			else{
				header("location:profile.php");
			}
		}
	}
	else{
		header("location:logout.php");
	}	
?>