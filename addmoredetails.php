<?php
    if(!isset($_GET["id"])){
        header("location:register.php");
    }
    else{
        $code=$_GET["id"];
?>
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
<div class="navbar navbar-inverse-blue navbar">
      <div class="navbar-inner">
        <div class="container">
           <div class="navigation">
             <nav id="colorNav">
             </nav>
           </div>
           <a class="brand" href="index.php"><img src="images/logo.png" alt="logo"></a>
           <div class="pull-right">
          	<nav class="navbar nav_bottom" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
		  <div class="navbar-header nav_2">
		   <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
		     </div><!-- /.navbar-collapse -->
		    </nav>
		   </div> <!-- end pull-right -->
          <div class="clearfix"> </div>
        </div> <!-- end container -->
      </div> <!-- end navbar-inner -->
    </div> <!-- end navbar-inverse-blue -->
<!-- ============================  Navigation End ============================ -->
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.html"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">More Details</li>
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
	   <form method="post" action="moredetails.php?id=<?=$code?>" enctype="multipart/form-data">
       <div class="form-group">
            <label>Marital Status</label>
            <select name="maritalstatus" class="form-control" required>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Divorced">Divorced</option>
                <option value="Engaged">Engaged</option>
            </select>
        </div>
	    <div class="form-group">
            <label>Mother Tongue</label>
            <select name="mothertongue" class="form-control" required>
                <option value="Hindi">Hindi</option>
                <option value="English">English</option>
                <option value="Marwadi">Marwadi</option>
                <option value="Punjabi">Punjabi</option>
            </select>
        </div>
        <div class="form-group">
            <label>Complexion</label>
            <select name="complexion" class="form-control" required>
                <option value="Fair">Fair</option>
                <option value="Dark">Dark</option>
            </select>
        </div>
	    <div class="form-group">
            <label>Birth Place</label>
            <select name="birthplace" class="form-control" required>
                <option value="Bikaner">Bikaner</option>
                <option value="Jaipur">Jaipur</option>
                <option value="Delhi">Delhi</option>
                <option value="Mumbai">Mumbai</option>
                <option value="Udaipur">Udaipur</option>
                <option value="Bangalore">Bangalore</option>
                <option value="Chennai">Chennai</option>
            </select>
        </div>
        <div class="form-group">
	      <label for="edit-name">Weight (in KG) <span class="form-required" title="This field is required.">*</span></label>
	      <input type="text" id="edit-name" name="weight" value="" size="60" maxlength="60" class="form-text required">
	    </div>
        <div class="form-group">
	      <label for="edit-name">Height (in CM) <span class="form-required" title="This field is required.">*</span></label>
	      <input type="text" id="edit-name" name="height" value="" size="60" maxlength="60" class="form-text required">
	    </div>
        <div class="form-group">
            <label>Blood Group</label>
            <select name="bloodgroup" class="form-control" required>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="AB+">AB+</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
            </select>
        </div>
        <div class="form-group">
            <label>Diet</label>
            <select name="diet" class="form-control" required>
                <option value="Vagetarian">Vegetarian</option>
                <option value="Non-Vegetarian">Non-Vegetarian</option>
            </select>
        </div>
        <div class="form-group">
            <label>Profile Created By</label>
            <select name="profilecreated" class="form-control" required>
                <option value="Self">Self</option>
                <option value="Mother">Mother</option>
                <option value="Father">Father</option>
                <option value="Family">Family</option>
                <option value="Friend">Friend</option>
            </select>
        </div>
        <div class="form-group">
            <label>Smoke</label>
            <select name="smoke" class="form-control" required>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>
        </div>
        <div class="form-group">
            <label>Drink</label>
            <select name="drink" class="form-control" required>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>
        </div>
        <div class="form-group">
            <label>Zodiac</label>
            <select name="zodiac" class="form-control" required>
                <option value="Aries">Aries</option>
                <option value="Taurus">Taurus</option>
                <option value="Gemini">Gemini</option>
                <option value="Cancer">Cancer</option>
                <option value="leo">Leo</option>
                <option value="Virgo">Virgo</option>
                <option value="Libra">Libra</option>
            </select>
        </div>
        <div class="form-group">
            <label>Education</label>
            <select name="education" class="form-control" required>
                <option value="B. Tech">B. Tech</option>
                <option value="M. Tech">M. Tech</option>
                <option value="MBA">MBA</option>
                <option value="12th Pass">12th Pass</option>
                <option value="10th Pass">10th Pass</option>
            </select>
        </div>
        <div class="form-group">
	      <label for="edit-name">Income (in INR) <span class="form-required" title="This field is required.">*</span></label>
	      <input type="text" id="edit-name" name="income" value="" size="60" maxlength="60" class="form-text required">
	    </div>
        <div class="form-group">
            <label>Father Occupation</label>
            <select name="fatheroccupation" class="form-control" required>
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
            <label>Mother Occupation</label>
            <select name="motheroccupation" class="form-control" required>
                <option value="Engineer">Engineer</option>
                <option value="Doctor">Doctor</option>
                <option value="Lawyer">Lawyer</option>
                <option value="Farmer">Farmer</option>
                <option value="Teacher">Teacher</option>
                <option value="Dentist">Dentist</option>
                <option value="Housewife">Housewife</option>
            </select>
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
</body>
</html>	
<?php
    }
?>