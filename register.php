<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Marital an Wedding Category Flat Bootstarp Resposive Website Template | Login :: w3layouts</title>
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
	include("navbar_1.php");
 ?>
<!-- ============================  Navigation End ============================ -->
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.html"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Register</li>
     </ul>
   </div>
   <div class="services">
   	  <div class="col-sm-6 login_left">
        <?php
            if(isset($_GET["success"])){
        ?>
            <div class="alert alert-success">Records Inserted</div>
        <?php
            }
            if(isset($_GET["again"])){
        ?>
            <div class="alert alert-danger">Try Again</div>
        <?php
            }
            if(isset($_GET["img_err"])){
        ?>
            <div class="alert alert-danger">Image not uploaded.</div>
        <?php
            }
        ?>
	   <form method="post" action="registration.php" enctype="multipart/form-data">
  	    <div class="form-group">
	      <label for="edit-name">First Name <span class="form-required" title="This field is required.">*</span></label>
	      <input type="text" id="edit-name" name="fname" value="" size="60" maxlength="60" class="form-text required">
	    </div>
	    <div class="form-group">
	      <label for="edit-name">Last Name <span class="form-required" title="This field is required.">*</span></label>
	      <input type="text" id="edit-name" name="lname" value="" size="60" maxlength="60" class="form-text required">
	    </div>
        <div class="form-group">
	      <label for="edit-name">Email <span class="form-required" title="This field is required.">*</span></label>
	      <input type="email" id="edit-name" name="email" value="" size="60" maxlength="60" class="form-text required">
	    </div>
	    <div class="form-group">
	      <label for="edit-pass">Password <span class="form-required" title="This field is required.">*</span></label>
	      <input type="password" id="edit-pass" name="pass" value="" size="60" maxlength="60" class="form-text required">
	    </div>
        <div class="form-group form-group-1">
	      <label class="col-sm-2 control-table" for="sex">Gender</label>
          <div class="col-sm-10">
            <div class="radios">
                <label for="radio-01" class="label-radio">
                    <input type="radio" name="gender" value="Male">Male
                </label>
                <label for="radio-01" class="label-radio">
                    <input type="radio" name="gender" value="Female">Female
                </label>
            </div>
          </div>
	    </div><br><br>
        <div class="form-group">
            <label>Caste</label>
            <select name="caste" class="form-control" required>
                <option value="Sharma">Sharma</option>
                <option value="Saini">Saini</option>
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
        <div class="form-group">
            <label>Religion</label>
            <select name="religion" class="form-control" required>
                <option value="Hindu">Hindu</option>
                <option value="Christian">Christian</option>
                <option value="Jain">Jain</option>
                <option value="Sikh">Sikh</option>
                <option value="Muslim">Muslim</option>
            </select>
        </div>
        <div class="form-group">
            <label>Occupation</label>
            <select name="occupation" class="form-control" required>
                <option value="Engineer">Engineer</option>
                <option value="Doctor">Doctor</option>
                <option value="Lawyer">Lawyer</option>
                <option value="Farmer">Farmer</option>
                <option value="Teacher">Teacher</option>
                <option value="Dentist">Dentist</option>
                <option value="Scientist">Scientist</option>
            </select>
        </div>
        <div class="form-group">
            <label>Date of Birth</label>
            <input type="date" class="form-control" id="dob" name="dob" required>
        </div>
        <div class="form-group">
            <label>City</label>
            <select name="city" class="form-control" required>
                <option value="Bikaner">Bikaner</option>
                <option value="Jaipur">Jaipur</option>
                <option value="Delhi">Delhi</option>
                <option value="Gurugram">Gurugram</option>
                <option value="Mumbai">Mumbai</option>
                <option value="Banglore">Banglore</option>
                <option value="Chennai">Chennai</option>
                <option value="Kolkata">Kolkata</option>
            </select>
        </div>
        <div class="form-group">
            <label>State</label>
            <select name="state" class="form-control" required>
                <option value="Rajasthan">Rajasthan</option>
                <option value="Haryana">Haryana</option>
                <option value="Punjab">Punjab</option>
                <option value="Delhi">Delhi</option>
                <option value="Maharashtra">Maharashtra</option>
                <option value="Karnataka">Karnataka</option>
                <option value="West Bengal">West Bengal</option>
                <option value="Tamil Nadu">Tamil Nadu</option>
            </select>
        </div>
        <div class="form-group">
            <label>Country</label>
            <select name="country" class="form-control" required>
                <option value="India">India</option>
                <option value="USA">USA</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="Singapore">Singapore</option>
                <option value="Nepal">Nepal</option>
                <option value="Sri Lanka">Sri Lanka</option>
                <option value="Australia">Australia</option>
            </select>
        </div>
        <div class="form-group">
            <label>Image</label>
            <input type="file" name="photo" class="form-control">
        </div>
        <div class="form-actions">
            <input type="submit" id="edit-submit" name="op" value="Submit" class="btn_1 submit"> 
        </div>
	   </form>
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