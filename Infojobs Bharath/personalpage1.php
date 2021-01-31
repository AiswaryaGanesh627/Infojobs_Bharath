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
<link rel="stylesheet" type="text/css" href="responsive.css">
<link rel="icon" type="image/x-icon" sizes="20x20" href="ico/IB_logo2.jpg">
 <link rel="stylesheet" type="text/css" href="font-awesome-animation.min.css">
 <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style type="text/css">
      html {
  scroll-behavior: smooth;
}

.image-career-banner {
    background: linear-gradient(rgba(0,0,0,.2), rgba(0,0,0,.2)), url(./img/005.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    width: 100%;
    height: auto;
    background-position: center center;
    color: #fff;
    padding-top: 145px;
    padding-bottom:330px;


 }
 #header nav ul li a:hover {
  color: #DCE908;
}
.sticky .navbar-nav li .nav-link:hover{
  color: #DCE908 !important;
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
  width: 800px;
  max-height: 2000px;
  height: auto !important;
  display: inline-block;
  position:relative;
  padding: 5px;
  background: white;
 
}


/* The Close Button */
.closenow {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.closenow:hover,
.closenow:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
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


 
.submit{
  width: 40%;
  padding: 10px 30px;
  cursor: pointer;
  margin: auto;
  display: block;
   background: linear-gradient(to right,#006400,#ADFF2F);
  border:0;
  border-radius:30px;
  outline: none;
 }

.section-title {
    text-align: center;
    padding-bottom: 30px;
}
.form-row {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -5px;
    margin-left: -5px;
}

.form-group {
    margin-bottom: 1rem;
}

.form-control {
    display: block;
    width: 90%;
    height: calc(1.5em + .75rem + 2px);
    padding: .375rem .75rem;
    font-size: 15px;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}


</style>
</head>
<body id="Expertise">
  <header>
<section id="header">
  <div class="container-fluid" id="sticky-header">
    <nav class="navbar fixed-top navbar-expand-lg stroke" >
      <a class="navbar-brand brand" href="#" style="padding-left: 100px"> <img src="ico/white_logo.png" style="width: 140px" class="pt-1"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fas fa-bars fa-1x text-white"></span>
      </button>
      <div class="collapse navbar-collapse fill" id="navbarNavDropdown">
        <ul class="navbar-nav " style="margin-left: 550px" >
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li>
            <a class="nav-link" href="#"><?php echo $_SESSION['email']; ?></a>
           </li>
          <li class="nav-item">
            <a class="nav-link" href="#" id="myprofile">Job Profile</a>

  <div id="myMode" class="modal">
  <div class="modal-content">
    <span class="closenow">&times;</span>
    <div class="imgcontainer">
  <img src="ico/IB_logo.jpg" alt="Avatar" class="avatar">
</div>
    <form action="personalpage1.php" method="post" enctype="multipart/form-data">
   <div class="form-row">
                <div class="col-lg-6 form-group">
                  <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name" data-rule="minlen:4" data-msg="Please enter at least 4 characters">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-6 form-group">
                  <input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name" data-msg="Please enter your last name">
                  <div class="validate"></div>
                </div>
              </div>

              <div class="form-row">
                <div class="col-lg-6 form-group">
                  <input type="text" class="form-control" name="email2" id="email2" placeholder="Registered Email" data-rule="minlen:4" data-msg="Please enter a valid email">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-6 form-group">
                  <input type="text" class="form-control" name="mob" id="mob" placeholder="Mobile Number" data-msg="Please enter your mobile number">
                  <div class="validate"></div>
                </div>
              </div>
        
               <div class="form-row">
                <div class="col-lg-6 form-group">
                  <input type="date" class="form-control" name="dob" id="dob" placeholder="Date of Birth">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-6 form-group">
                  <select name="gender" class="form-control" style="font-size: 15px">
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  <option value="Other">Other</option>
                  </select>
                </div>
              </div>

              <div class="form-row">
                <div class="col-lg-6 form-group">
                   <label for="nation" style="font-size: 15px;color: #999;">Nationality</label>
                  <select name="nation" id="nation" class="form-control" style="font-size: 15px">
<option value="Indian">Indian</option>
<option value="Other">Others</option>
</select>
                </div>
                <div class="col-lg-6 form-group">
                   <label for="state" style="font-size: 15px;color: #999;">State</label>
                  <select name="state" id="state" class="form-control" style="font-size: 15px">
<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Puducherry">Puducherry</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Odisha">Odisha</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Telangana">Telangana</option>
<option value="Tripura">Tripura</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="Uttarakhand">Uttarakhand</option>
<option value="West Bengal">West Bengal</option>
</select>
</div>
</div>

<h4 align="left"> Address</h4>

   <div class="form-row">
                <div class="col-lg-6 form-group">
                  
                  <input type="text" class="form-control" name="door" id="door" placeholder="Door no" >
                </div>
                 <div class="col-lg-6 form-group">
                  
                  <input type="text" class="form-control" name="loc" id="loc" placeholder="Area/Locality" >
                </div>
              </div>
              <br>
              <div class="form-row">
                <div class="col-lg-6 form-group">
                  
                  <input type="text" class="form-control" name="PO" id="PO" placeholder="Post Office" >
                </div>
                 <div class="col-lg-6 form-group">
                  
                  <input type="text" class="form-control" name="town" id="town" placeholder="Town/Village" >
                </div>
              </div>

 <div class="form-row">
                <div class="col-lg-6 form-group">
                  
                  <input type="text" class="form-control" name="district" id="district" placeholder="District" >
                </div>
                 <div class="col-lg-6 form-group">
                  
                  <input type="text" class="form-control" name="pin" id="pin" placeholder="Pincode" >
                </div>
              </div>

    <h4 align="left">Hiring for</h4>

    <div class="form-row">
                <div class="col-lg-6 form-group">
                  
                  <input type="text" class="form-control" name="field1" id="field1" placeholder="Work title" >
                </div>
                 <div class="col-lg-6 form-group">
                  
                  <input type="text" class="form-control" name="field2" id="field2" placeholder="Days of work" >
                </div>
              </div>
              <br>
              <div class="form-row">
                <div class="col-lg-6 form-group">
                  
                  <input type="text" class="form-control" name="field3" id="field3" placeholder="From-To" >
                </div>
                 <div class="col-lg-6 form-group">
                  
                  <input type="text" class="form-control" name="field4" id="field4" placeholder="Alloted wage" >
                </div>
              </div>

 <br><br><br><button type="submit"  class="submit" name="pro" id="pro">Submit Now</button>
    <p style="font-size: 12px; text-align: center;color: #999">By completing your form, you agree to our terms and policy</p>

    <?php
  
  if(isset($_POST['pro'])) {

  $mail = $_SESSION['email'];  
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email    =  $_POST['email2'];
 $mobno = $_POST['mob'];
$dob = $_POST['dob']; 
$gender = $_POST['gender'];
$nation = $_POST['nation'];
$state = $_POST['state'];
$door = $_POST['door'];
$loc = $_POST['loc'];
$po = $_POST['PO'];
$town = $_POST['town'];
$district = $_POST['district'];  
$pincode = $_POST['pin'];  
$field1 = $_POST['field1'];  
$field2 = $_POST['field2'];
$field3 = $_POST['field3'];  
$field4 = $_POST['field4'];  

mysqli_query($con, "INSERT INTO `employer` (`emp_id`,`first_name`,`last_name`,`email`,`mobno`,`date_of_birth`,`gender`,`nation`,`state`,`door_no`,`loc`,`post_office`,`town`,`district`,`pincode`,`field1`,`field2`,`field3`,`field4`) VALUES ('','$fname','$lname','$email','$mobno','$dob','$gender','$nation','$state','$door','$loc','$po','$town','$district','$pincode','$field1','$field2','$field3','$field4')");
 echo "<center>Profile completed successfully!!</center>"; 
}
else{
 
 echo "<center>Profile completion failed!!</center>"; 
          
}

?>
  
  </form>
</div>
</div>

<script>
// Get the modal
var modal1 = document.getElementById("myMode");

// Get the button that opens the modal
var btn1 = document.getElementById("myprofile");

// Get the <span> element that closes the modal
var span1 = document.getElementsByClassName("closenow")[0];

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

          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">Sign Out</a>
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
</script></header>
<div class="image-career-banner" id="Home">
   <div class="container">
    <div class="row">
      <div class="intro-content">
         <h1 class="text-justify" style="color: white;" data-aos="zoom-in" data-aos-duration="2000">Welcome <?php echo $_SESSION['username'];?>!</h1>
        <h2 class="text-justify" data-aos="zoom-in" data-aos-duration="2000">INFOJOBS BHARATH</h2>
        <h3 class="text-justify" data-aos="zoom-in" data-aos-duration="2000">For The Jobless Of Indian Villages!!!</h3>
         </div>
            
    </div>
</div>
</div>
<section>
<div class="container mt-5">
	 <h3 align="center"><b>Details of workers</b></h3>
	 <br>
	 
	<?php
	
	 $email=$_SESSION['email'];
	 $query = mysqli_query($con, "SELECT first_name,last_name,mobno,email,door_no,loc,town,district,pincode,field1,field2,field3,field4 FROM `employee`");
	 if(mysqli_num_rows($query) > 0)
      {
		 while($row = mysqli_fetch_assoc($query)) {
        echo "<h5><b>" . $row["first_name"]. "  " . $row["last_name"]. "</b></h5><h6>Phone number: " . $row["mobno"]. "</h6><h6> Email: " . $row["email"]. "</h6><h6>Address: " . $row["door_no"]. "  " . $row["loc"]. "</h6><h6>" . $row["town"]. "  " . $row["pincode"]. "</h6><h6>" . $row["district"]. "</h6><h5><b>Working skills</b></h5><h6>1) " . $row["field1"]. "</h6><h6>2) " . $row["field2"]. "</h6><h6>3) " . $row["field3"]. "</h6><h6>4) " . $row["field4"]. "</h6><br><br>";
    }
} else {
    echo "0 results";
}
?>


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
<p class="foote_bottom_ul_amrc text-center">© 2020 <a href="#">Infojobs Bharath Forum (P) Ltd.</a> | All Rights Reserved. </p>
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