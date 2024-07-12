<?php
	if(isset($_COOKIE["login"])){
		include_once("db.php");
		$email=$_COOKIE["login"];
		$rs=mysqli_query($conn,"select * from details where email='$email'");
		if($r=mysqli_fetch_array($rs)){
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
<title>Marital an Wedding Category Flat Bootstarp Resposive Website Template | Search :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Marital Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<link href="css/flexslider.css" rel='stylesheet' type='text/css' />
<script defer src="js/jquery.flexslider.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<!----font-Awesome----->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!----font-Awesome----->
<script>
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
        <a href="profile.php"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Regular Search</li>
     </ul>
   </div>
<div class="col-md-9 search_left">
  <form method="post" action="search_record.php">	
   <div class="form_but1">
	<label class="col-sm-2 control-lable1" for="sex">Gender : </label>
	<div class="col-sm-10 form_radios">
		<input type="radio" class="radio_1" name="gender" value="Male" /> Male &nbsp;&nbsp;
		<input type="radio" class="radio_1" checked="checked" name="gender" value="Female" /> Female
		
		<!--<hr />
		<p id="sel"></p><br />
		<input id="btnRadio" type="button" value="Get Selected Value" />-->
	</div>
	<div class="clearfix"> </div>
  </div>
  
  <div class="form_but1">
    <label class="col-sm-2 control-lable1" for="sex">Caste : </label>
    <div class="col-sm-10 form_radios">
      <div class="select-block1">
	  <select name="caste" class="form-control" required>
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
			</select>
      </div>
    </div>
    <div class="clearfix"> </div>
  </div>
  <div class="form_but1">
    <label class="col-sm-2 control-lable1" for="sex">Religion : </label>
    <div class="col-sm-10 form_radios">
      <div class="select-block1">
	  <select name="religion" class="form-control" required>
			<option value="Hindu">Hindu</option>
			<option value="Muslim">Muslim</option>
			<option value="Sikh">Sikh</option>
			<option value="Christian">Christian</option>
			<option value="Jain">Jain</option>
			<option value="Buddhism">Buddhism</option>
			</select>
		</div>
		</div>
		<div class="clearfix"> </div>
	</div>
	
	<div class="form_but1">
		<div class="col-sm-12"><input type="submit" value="Submit" class="btn btn-danger"></div>
		
		<div class="clearfix"> </div>
	</div>
	</form>
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
     <div class="clearfix"> </div>
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
			header("location:logout.php");
		}
	}
	else{
		header("location:index.php");
	}
?>