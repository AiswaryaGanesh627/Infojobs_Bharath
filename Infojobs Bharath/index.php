<?php

 session_start();
 $con = mysqli_connect("localhost","root","","infosdb"); 
 
?>


<!DOCTYPE html>
<html lang="en">
  <head>
	  <meta name="description" content="Infojobs Bharath is an exclusive job searching website for educated and uneducated villagers of India and 
	  also helps employers find the right labour at the right time">
<meta name="keywords" content="Jobs,Infojobs Bharath,IT,Indian Villages">
    <title>Infojobs Bharath</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <!--  For the navigation bar-->
  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
<link rel="icon" type="image/x-icon" sizes="20x20" href="ico/IB_logo2.jpg">
 <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style type="text/css">
      html {
  scroll-behavior: smooth;
}

.image-career-banner {
    background: linear-gradient(rgba(0,0,0,.2), rgba(0,0,0,.2)), url(./img/001.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    width: 100%;
    height: auto;
    background-position: center center;
    color: #fff;
    padding-top: 145px;
    padding-bottom:300px;
 }

 .modal {
 display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content */
.modal-content {
   margin: 6% auto ; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 500px;
  height: 600px;
  position:relative;
  padding: 5px;
  background: white;
 
}


/* The Close Button */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.closeval {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.closeval:hover,
.closeval:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

  .input-field{
 
  width: 70%;
  padding: 10px 0;
  margin: 5px 0;
  display: inline-block;
  border-bottom: 1px solid #999;
  border-left: 0;
  border-right: 0;
  border-top: 0;
  outline: none;
  background: transparent;
  
 }
 

 .submit{
  width: 70%;
  padding: 10px 30px;
  cursor: pointer;
  margin: auto;
  display: block;
  background: linear-gradient(to right,#006400,#ADFF2F);
  border:0;
  border-radius:30px;
  outline: none;
 }

 .imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
  top: 180;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

input[type="radio"] {
	vertical-align: middle;
	 margin: 5px;
}







</style>
</head>
<body id="Expertise">
  <header>
<section id="header">
  <div class="container-fluid" id="sticky-header">
    <nav class="navbar fixed-top navbar-expand-lg stroke" >
      <a class="navbar-brand brand" href="#" style="padding-left: 100px"> <img src="ico/white_logo.png" style="width: 160px" class="pt-1"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fas fa-bars fa-1x text-white"></span>
      </button>
      <div class="collapse navbar-collapse fill" id="navbarNavDropdown">
        <ul class="navbar-nav " style="margin-left: 550px" >
          <li class="nav-item active">
            <a class="nav-link" href="#Home">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#Admin">Administration</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#AgroJobs">Village Jobs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#Resume">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#Contact">Contact</a>
          </li>
          <li class="nav-item dropdown" aria-expanded="false">
            <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Join</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="width: 100px">
              <a class="dropdown-item" href="#" id="myfor">Sign Up</a>
              <a class="dropdown-item" href="#" id="myform">Login</a>              
            </div>
<div id="myMod" class="modal">
  <div class="modal-content">
    <span class="closeval">&times;</span>
    <div class="imgcontainer">
  <img src="ico/IB_logo.jpg" alt="Avatar" class="avatar">
</div>
<form action="index.php" method="post">
  <input type="text" class="input-field" placeholder="Username" name="user" id="user" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
      <input type="text" class="input-field" placeholder="Email" name="email1" id="email1" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
    <input type="password" class="input-field" placeholder="Password" name="pass1" id="pass1" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
    <input type="password" class="input-field" placeholder="Confirm Password" name="pass2" id="pass2" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
   <br><br>
    <button type="submit"  class="submit" name="reg" id="reg">Sign Up</button>
    <p style="font-size: 12px; text-align: center;color: #999">By creating an account, you agree to our terms and policy</p>

    <?php
  
  if(isset($_POST['reg'])) {
  $username = $_POST['user'];
  $email    =  $_POST['email1'];
 $password = $_POST['pass1'];
$repeat_pass = $_POST['pass2']; 
  
  
  mysqli_query($con, "INSERT INTO `register` (`id`,`username`,`email`,`password`,`repeat_pass`) VALUES ('','$username','$email','$password','$repeat_pass')");      
   echo "<center>Account created successfully!!</center>";
  
  }
  
  
  ?>
  
  </form>
</div>
</div>

<script>
// Get the modal
var modal1 = document.getElementById("myMod");

// Get the button that opens the modal
var btn1 = document.getElementById("myfor");

// Get the <span> element that closes the modal
var span1 = document.getElementsByClassName("closeval")[0];

// When the user clicks the button, open the modal 
btn1.onclick = function() {
  modal1.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span1.onclick = function() {
  modal1.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal1) {
    modal1.style.display = "none";
  }
}

</script>


<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="imgcontainer">
     <img src="ico/IB_logo.jpg" alt="Avatar" class="avatar">
</div>
  <form action="index.php" method="post">
    <input type="text" placeholder="Username" class="input-field" name="u_name" id="u_name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
      <input type="text" placeholder="Email" class="input-field" name="email" id="email" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
    <input type="password" placeholder="Password"  class="input-field" name="password" id="password" data-rule="minlen:4" data-msg="Please enter at least 4 chars"><br><br>
	<div>
	<input type="radio" id="educated" name="status" value="educated">
	<label for="educated">Educated Employee</label>
	<input type="radio" id="uneducated" name="status" value="uneducated">
  <label for="uneducated">Uneducated Employee</label></div><br>
  <div><input type="radio" id="employer" name="status" value="employer">
  <label for="employer">Government Employer</label>
  <input type="radio" id="employer1" name="status" value="employer1">
  <label for="employer1">Non-Government Employer</label></div>
  
  <br><br>
      <button type="submit"  class="submit" name="log" id="log">Log In</button>

      <?php
  
  if(isset($_POST['log'])) {
  
   $username = $_POST['u_name'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $status = $_POST['status'];
   $query = mysqli_query($con, "SELECT * FROM `register` WHERE username='$username' AND password='$password' AND email='$email'");
     if(mysqli_num_rows($query) == 1)
      {
		    if( $_POST['status'] == 'educated'){
      mysqli_query($con,"INSERT INTO `login` (`user_id`,`username`,`email`,`password`,`status`) VALUES ('','$username','$email','$password','$status')");
      $_SESSION['username'] = $username;
      $_SESSION['email'] = $email;
	
           echo "<script type='text/javascript'> document.location = 'personalpage2.php'; </script>";
			}
			
		else if( $_POST['status'] == 'uneducated'){
      mysqli_query($con,"INSERT INTO `login` (`user_id`,`username`,`email`,`password`,`status`) VALUES ('','$username','$email','$password','$status')");
      $_SESSION['username'] = $username;
      $_SESSION['email'] = $email;
	
           echo "<script type='text/javascript'> document.location = 'personalpage.php'; </script>";
		}
		else if( $_POST['status'] == 'employer'){
      mysqli_query($con,"INSERT INTO `login` (`user_id`,`username`,`email`,`password`,`status`) VALUES ('','$username','$email','$password','$status')");
      $_SESSION['username'] = $username;
      $_SESSION['email'] = $email;
	
           echo "<script type='text/javascript'> document.location = 'personalpage3.php'; </script>";
		}
			else{
	 mysqli_query($con,"INSERT INTO `login` (`user_id`,`username`,`email`,`password`,`status`) VALUES ('','$username','$email','$password','$status')");
      $_SESSION['username'] = $username;
      $_SESSION['email'] = $email;
	
           echo "<script type='text/javascript'> document.location = 'personalpage1.php'; </script>";
	 
	  }
	  }
	  
    else
    {
      echo "<center>Enter valid username and password</center>";
    }
  }
  ?>
</form>


  </div>
</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myform");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>



          </li>
        </ul>
      </div>
    </nav>
  </div>
</section>




<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script type="text/javascript">
   /*$('body').on('mouseenter mouseleave','.dropdown-hover',function(e){
     let dropdown=$(e.target).closest('.dropdown-hover');
      dropdown.addClass('show');
      
    setTimeout(function(){
          dropdown[dropdown.is(':hover')?'addClass':'removeClass']('show');
      },300);
  });*/
  $(".dropdown")
  .mouseover(function () {
      $(this).addClass('show').attr('aria-expanded', "true");
      $(this).find('.dropdown-menu').addClass('show');
  })
  .mouseout(function () {
      $(this).removeClass('show').attr('aria-expanded', "false");
      $(this).find('.dropdown-menu').removeClass('show');
  });

  var wind = $(window);
var sticky = $('#sticky-header');
wind.on('scroll', function () {
    var scroll = wind.scrollTop();
    if (scroll < 180) {
        sticky.removeClass('sticky');
    } else {
        sticky.addClass('sticky');
    }
});
</script> </header>
  <div class="image-career-banner" id="Home">
   <div class="container">
    <div class="row">
      <div class="intro-content">
        <h2 class="text-justify" data-aos="zoom-in" data-aos-duration="2000">INFOJOBS BHARATH</h2>
        <h3 class="text-justify" data-aos="zoom-in" data-aos-duration="2000">For The Jobless Of Indian Villages!!!</h3>
         </div>
            
    </div>
</div>
</div>
<section>
    <div class="container mt-5">
        <p class="text-justify" data-aos="zoom-in" data-aos-duration="2000"><span class="pl-10"><strong style="font-size: 23px;" >Infojobs Bharath</strong> application aims to increase the  income of each individual in the villages.
 </span>The web application endeavors to provide employment  opportunities to the unemployed.We focus on improving the living standards in villages.  We vow to increase the income of every individual villager, thereby increasing the gross capital income of the villages and finally contributing a significant percentage to National income
We flood your personal page with the most relevant job opportunites and help you connect to the employers. We also help the employers find the right labour at the right time. We are happy to help you. Feel free to acknowledge our service. Make the most of us. We welcome you with open arms. Come out with flying colors! </p>
    </div>
</section>

 <section  style="padding-top: 50px; padding-bottom: 50px" id="Admin">
        
    <div class="container" >
        <div class="row">
            <div class="col-md-6" data-aos="fade-up" data-aos-duration="2000">
                <img src="img/intro_pic1.jpg" style="width: 100%">
            </div>
            <div class="col-md-6 disc" style="padding:50px 0px 50px 50px;">
              <h3 class="strong text-center" data-aos="zoom-in" data-aos-duration="2000"><b>Administration</b></h3>
                <p class="text-justify pt-5" data-aos="fade-right" data-aos-duration="2000"><span class="pl-10">Infojobs Bharath hires a community of literate village administrators who are capable of managing and supervising the application.</span>
For the illiterate villagers who lack the knowledge of entering details in the application, our village administrators are at service. They work to guide the villagers through the process of registering, loggin in and entering their work requirements or job necessities in the application so that the villagers can enjoy the most of services. </p>
            </div>
        </div>
    </div>
  </section>
  <section id="AgroJobs">
<section style="padding-top: 50px; padding-bottom: 50px" >
    <div class="container" >
        <div class="row">
            
            <div class="col-md-6 disc" style="padding:50px 0px 50px 50px;">
                <h3 class="strong text-center" data-aos="zoom-in" data-aos-duration="2000"><b>Village Jobs</b></h3>
                
                <p class="text-justify pt-5" data-aos="fade-right" data-aos-duration="2000"><span class="pl-10"> It uses the SVM classifier algorithm to predict the unemployment rates, the work mostly carried out in each village and the best suited job in a particular month.</span>
 SVM is a supervised machine learning algorithm using a technique called the kernel trick to transform data and then based on these transformations it finds an optimal boundary between the possible outputs.The app INFOJOBS BHARATH uses the technology of DATA SCIENCE for drawing results from the database.
Predicting paaterns help us serve the users with the most needed and relevant job searches across the villages. </p>
            </div>
            <div class="col-md-6"  data-aos="fade-up" data-aos-duration="2000">
                 <img src="img/002.jpg" width="80%" height="400px">
            </div>
        </div>
    </div>
  </section>
  

    <section  style="padding-top: 50px; padding-bottom: 50px">
        
    <div class="container" >
        <div class="row">
            <div class="col-md-6" data-aos="fade-up" data-aos-duration="2000">
                <img src="img/003.jpg" style="width: 100%">
            </div>
            <div class="col-md-6 disc" style="padding:50px 0px 50px 50px;">
              <h3 class="strong text-center" data-aos="zoom-in" data-aos-duration="2000"><b>Literate jobs</b></h3>
                <p class="text-justify pt-5" data-aos="fade-right" data-aos-duration="2000"><span class="pl-10">Unemployed graduates of the villages can now be at ease as Infojobs Bharath endeavours to direct them to the petty jobs at local Government bodies.</span>This also reduces the possibilities of delayed work at the Government bodies helping them carry out the task at times of prolonged shortage of workers. We eye on providing both the local Government bodies and the unemployed literate villagers with benefits of completion of work at the right time and meet the needs at times of shortage of labour for petty jobs at local Government bodies. </p>
            </div>
        </div>
    </div>
  </section>
  </section>
  <section style="padding-top: 50px; padding-bottom: 50px" id="Resume">
    <div class="container" >
        <div class="row">
            
            <div class="col-md-6 disc" style="padding:50px 0px 50px 50px;">
                <h3 class="strong text-center" data-aos="zoom-in" data-aos-duration="2000"><b>Complete your profile</b></h3>
                
                <p class="text-justify pt-5" data-aos="fade-right" data-aos-duration="2000"><span class="pl-10">Uploading your profile with the most relevant and appropriate details is the most crucial part of getting employed to improve your livelihood.</span>When you apply for a job, you must strive to be the best befitting candidate for the role. Highlight your top skills on the profile adding in the details of the kinds of works you can carry out in the field of agriculture and construction. Make sure all the information you posted on the website are authentic as it boosts up the chances of being hired. Once you enter in your details, you will be directed to the most relevant job opporuntites and your potential employers as per the kinds of work they need labour for. You can contact the employers accordingly, get hired and work on to improve your living standards.<br><br>Best of efforts! </p>
            </div>
            <div class="col-md-6"  data-aos="fade-up" data-aos-duration="2000">
                 <img src="img/img2.png" width="80%" height="400px">
            </div>
        </div>
    </div>
  </section>

  <section id="Contact" class="contact">
    <style type="text/css">
      .contact .php-email-form button[type="submit"] {
    background: black;
    border: 0;
    padding: 10px 24px;
    color: #fff;
    transition: 0.4s;
}

.contact .php-email-form input[type="submit"]:hover {
  background: black;
}
    </style>
      <div class="container">

        <div class="section-title">
          <h4><b>CONTACT US</b></h4>
        </div>
        
    <div class="text-justify" data-aos="zoom-in" data-aos-duration="2000">
            <form class="php-email-form" action="index.php" method="post">
              <div class="form-row">
                <div class="col-lg-6 form-group">
                  <input type="text" class="form-control" name="name" id="name" placeholder="Name" data-rule="minlen:4" data-msg="Please enter at least 4 characters">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-6 form-group">
                  <input type="text" class="form-control" name="email" id="email" placeholder="Email" data-msg="Please enter a valid email">
                  <div class="validate"></div>
                  <div class="validate"></div>
                </div>
              </div>
        
              <div class="form-row">
                  <div class="col-lg-6 form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-msg="Please enter your subject line">
                  <div class="validate"></div>
                </div>
            </div>
              <div class="form-group">
                <textarea class="form-control" rows="5" name="message" id="message" data-msg="Drop in your words." placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
            <p align="center">
              <button type="submit" class="inp" name="msg" id="msg" >SEND</button>
            </p>

             <?php
          
          if(isset($_POST['msg'])) {
          
          $name = $_POST['name'];
          $email = $_POST['email'];
          $sub = $_POST['subject'];
          $msg = $_POST['message'];
          
          
          mysqli_query($con, "INSERT INTO `contact` (`con_id`,`name`,`email`,`subject`,`message`) VALUES ('','$name','$email','$sub','$msg')");
          echo "<center><h5>Your message has been sent! Thank You</h5></center>";
          }
          
          ?>

            </form>
          </div>
        </div>
    </section>

 <section>
  <style type="text/css">
  /*footer*/
.col_white_amrc { color:#FFF;}
footer { width:100%; background-color:#232323; min-height:15px; padding:10px 0px 25px 0px ;}
.pt2 { padding-top:40px ; margin-bottom:20px ;}
footer p { font-size:13px; color:#CCC; padding-bottom:0px; margin-bottom:8px;letter-spacing: 1px;}


.bottom_border { border-bottom:1px solid #323f45; padding-bottom:20px;}
.foote_bottom_ul_amrc {
  list-style-type:none;
  padding:0px;
  display:table;
  margin-top: 10px;
  margin-right: auto;
  margin-bottom: 10px;
  margin-left: auto;
}
.foote_bottom_ul_amrc li { display:inline;}
.foote_bottom_ul_amrc li a { color:#999; margin:0 12px;}

.social_footer_ul { display:table; margin:15px auto 0 auto; list-style-type:none;  }
.social_footer_ul li { padding-right:20px; padding-top:10px; float:left; }
.social_footer_ul li a { color:#CCC; border:1px solid #CCC; padding:8px;border-radius:50%;}
.social_footer_ul li a:hover { color:#232323; background-color: #CCC; padding:8px;border-radius:50%;}
.social_footer_ul li i {  width:20px; height:20px; text-align:center;}
.headin5_amrc{
  font-size: 18px;
  letter-spacing: 1px;
}
</style>

<footer class="footer">
<div class="container">
<p class="foote_bottom_ul_amrc text-center">© 2020 <a href="#">Infojobs Bharath Web Forum (P) Ltd.</a> | All Rights Reserved. </p>
<ul class="social_footer_ul">
<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
<li><a href="#"><i class="fab fa-youtube"></i></a></li>
<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
<li><a href="#"><i class="fab fa-instagram"></i></a></li>
</ul>
<!--social_footer_ul ends here-->
</div>


</footer></section>




  

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script type="text/javascript">
  wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();
    
</script>
<!-- <script src="https://code.jquery.com/jquery-migrate-1.4.1.min.js"></script> -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
  AOS.init();
</script>

  <script type="text/javascript">
    $(document).ready(function() {
        var page = $('body');  // set to the main content of the page   
        $(window).mousewheel(function(event, delta, deltaX, deltaY){
            if (delta < 0) page.scrollTop(page.scrollTop() + 65);
            else if (delta > 0) page.scrollTop(page.scrollTop() - 65);
            return false;
        })
    });
  </script>
</body>
</html>