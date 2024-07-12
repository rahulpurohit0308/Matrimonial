<?php
	if(isset($_COOKIE["login"])){
		include_once("db.php");
		$email=$_COOKIE["login"];
		$rs=mysqli_query($conn,"select * from details where email='$email'");
		if($r=mysqli_fetch_array($rs)){
			if(empty($_POST["gender"]) || empty($_POST["caste"]) || empty($_POST["religion"])){
				header("location:search.php?empty=1");
			}
			else{
				$gender=$_POST["gender"];
				$caste=$_POST["caste"];
				$religion=$_POST["religion"];
?>
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Marital an Wedding Category Flat Bootstarp Resposive Website Template | Profile :: w3layouts</title>
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
        <li class="current-page">Profile</li>
      </ul>
   </div>
  <div class="col-md-9 profile_left1">
  	<h1>Record</h1>
	<?php
		$rc=mysqli_query($conn,"select * from details where gender='$gender' AND caste='$caste' AND religion='$religion' AND email<>'$email'");
		while($rec=mysqli_fetch_array($rc)){
	?>
    <div class="profile_top"><a href="user_profile.php?id=<?=$rec["code"]?>">
      <h2><?=$rec["fname"]?> <?=$rec["lname"]?></h2>
	    <div class="col-sm-3 profile_left-top">
	    	<img src="profile/<?=$rec["code"]?>.jpg" class="img-responsive" alt="<?=$rec["fname"]." ".$rec["lname"]?>" title="<?=$rec["fname"]." ".$rec["lname"]?>"/>
	    </div>
	    <div class="col-sm-3">
	      <ul class="login_details1">
			 <li>Last Login : 5 days ago</li>
			 <li><p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor." More....</p></li>
		  </ul>
	    </div>
	    <div class="col-sm-6">
	    	<table class="table_working_hours">
	        	<tbody>
	        		<tr class="opened_1">
						<td class="day_label1">First Name :</td>
						<td class="day_value"><?=$rec["fname"]?></td>
					</tr>
				    <tr class="opened">
						<td class="day_label1">Last Name :</td>
						<td class="day_value"><?=$rec["lname"]?></td>
					</tr>
				    <tr class="opened">
						<td class="day_label1">Gender :</td>
						<td class="day_value"><?=$rec["gender"]?></td>
					</tr>
				    <tr class="opened">
						<td class="day_label1">Caste :</td>
						<td class="day_value"><?=$rec["caste"]?></td>
					</tr>
				    <tr class="opened">
						<td class="day_label1">Religion :</td>
						<td class="day_value"><?=$rec["religion"]?></td>
					</tr>
				    <tr class="opened">
						<td class="day_label1">DOB :</td>
						<td class="day_value"><?=$rec["birth"]?></td>
					</tr>
				    <tr class="opened">
						<td class="day_label1" colspan=2><a href="user_profile.php?id=<?=$rec["code"]?>"><button class="btn btn-danger">View Profile</button></a></td>
					</tr>
			    </tbody>
		   </table>
	    </div>
	    <div class="clearfix"> </div>
    </a></div>
	<?php
		}
	?> 
</div>
<div class="col-md-3 match_right">
	<div class="view_profile">
		<h3>View More Profiles</h3>
		<?php
			$count=0;
			$rs1=mysqli_query($conn,"select * from details where email<>'$email' ORDER by rand()");
			while ($count<10){
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
<link href="css/flexslider.css" rel='stylesheet' type='text/css' />
  <script defer src="js/jquery.flexslider.js"></script>
  <script type="text/javascript">
	$(function(){
	  SyntaxHighlighter.all();
	});
	$(window).load(function(){
	  $('.flexslider').flexslider({
		animation: "slide",
		start: function(slider){
		  $('body').removeClass('loading');
		}
	  });
	});
  </script>
<!-- FlexSlider -->
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