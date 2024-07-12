<?php
	if(isset($_COOKIE["login"])){
		include_once("db.php");
		$email=$_COOKIE["login"];
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
<title>Marital an Wedding Category Flat Bootstarp Resposive Website Template | Inbox :: w3layouts</title>
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
	include("navbar.php");
 ?>
<!-- ============================  Navigation End ============================ -->
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <i class="fa fa-home home_1"></i>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Inbox</li>
     </ul>
	</div>
   <div class="col-md-9 members_box2">
   	   <div class="col_4">
		    <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
			   <div id="myTabContent" class="tab-content">
				  <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
	                <div class="clearfix"> </div>
					<?php
						$flag=0;
						$rs=mysqli_query($conn,"select * from inbox where to_email='$email' order by sn desc");
						while($r=mysqli_fetch_array($rs)){
							$flag=1;
							$rc=mysqli_query($conn,"select * from details where email='".$r["email"]."'");
							$rec=mysqli_fetch_array($rc);
					?>
	                <div class="jobs-item with-thumb">
	                   <div class="thumb_top">
				        <div class="thumb"><a href="user_profile.php?id=<?=$r["from_code"]?>"><img src="profile/<?=$r["from_code"]?>.jpg" class="img-responsive" alt=""/></a></div>
					    <div class="jobs_right">
							<h6 class="title"><a href="user_profile.php?id=<?=$r["from_code"]?>"><?=$rec["fname"]." ".$rec["lname"]?></a></h6>
							<ul class="login_details1">
							  <li><?=$r["dt"]?></li>
							</ul>
							<p class="description"><?=$r["msg"]?></p>
						</div>
						<div class="clearfix"> </div>
					   </div>
					   <div class="thumb_bottom">
					   	  <div class="thumb_but"><a href="user_profile.php?id=<?=$r["from_code"]?>" class="photo_view">View Profile</a></div>
					   	  <div class="clearfix"> </div>
					   </div>
					  </div>
					  <?php
						}
						if($flag==0){
							echo "<h2>No Message Found</h2>";
						}
					  ?>
				  </div> 
			 </div> 
		  </div>
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
		header("location:index.php");
	}
?>