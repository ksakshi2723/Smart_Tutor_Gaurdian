<?php
session_start();//save data on server side
mysql_connect("localhost","root","");
mysql_select_db("tg");

if(isset($_REQUEST["submit"]))
{
	$user=$_REQUEST["user"];
	$pass=$_REQUEST["pass"];
	$role=$_REQUEST["role"];
	$query=mysql_query("select * from user where Username='$user' && pass='$pass' && role='$role'");
	$rowcount=mysql_num_rows($query);
	if($rowcount==true)
	{
		if ($role=='teacher')
		{
        $_SESSION["user"]=$user;
		header('location:welcome.php');
		}
	  if($role=='student')
	  {
	  	$_SESSION["user"]=$user;
		header('location:studentdash.php');
	  }
	}
    else
    {
    	echo "username password is wrong";
    }
    
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Hello, world!</title>
    <style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  margin:auto;
  width: 40%; /* Full width */
  height:80vh; /* Full height */
  overflow: auto;
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
 
  margin-top: 80px;
  margin-left: 30%;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
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
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.4s;
  animation: animatezoom 0.4s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }

}
.navbar-light .navbar-nav .nav-link {
    color: white;
}
.fa {
  padding: 20px;
  font-size: 30px;
  width: 100px;

  border-radius: 50%;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}

</style>
  </head>
  <body>
  	  	<nav class="navbar navbar-expand-lg navbar-light bg-dark ">
<p style="color:white; font-size:20px; margin-top: 10px; ">SMART TG COUNSELLING</p>  

 <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" onclick="document.getElementById('id01').style.display='block'" >Login</a>
      </li>
      
<li class="nav-item">
        <a class="nav-link" href="insert.php" >Register</a>
      </li>
<li class="nav-item">
        <a class="nav-link" href="home.html">About</a>
      </li>
<li class="nav-item">
        <a class="nav-link" href="contact.html">Contact us</a>
      </li>



 

      
      
    </ul>
   
  </div>
</nav>
  
<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="10000">
      <img src="sirt.jpg" class="d-block w-100" alt="..." height="325px">
    </div>
    <div class="carousel-item" data-interval="2000">
      <img src="sirt2.jpg" class="d-block w-100" alt="..." height="325px">
    </div>
    <div class="carousel-item">
      <img src="sirt3.jpg" class="d-block w-100" alt="..."height="325px">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

 
    
    	
   
  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
  </body>
</html>





<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>


<div id="id01" class="modal">
  
  <form class="modal-content animate" action="index.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>user</b></label>
      <input type="text" placeholder="Enter Username" name="user" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pass" required>
       <td>faculty<input type="radio" name="role" value="teacher" required=""></td>
		<td>student<input type="radio" name="role" value="student" required></td> 

      <button type="submit" name="submit">Login</button>
          </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="mail/index2.php">password?</a></span>
    </div>
  </form>
</div>



<!-- Footer -->
<footer class="page-footer font-small unique-color-dark">

  <div style="background-color: #6351ce;">
    <div class="container">

      <!-- Grid row-->
      <div class="row py-4 d-flex align-items-center">

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 text-center text-md-left mb-4 mb-md-0">
          <h6 class="mb-0">Get connected with us on social networks!</h6>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-8 col-lg-9 text-center text-md-right">
<a href="https://www.facebook.com/sirts1/" class="fa fa-facebook"></a>
<a href="https://twitter.com/sirtsasdept" class="fa fa-twitter"></a>
<a href="https://www.sirtsbhopal.ac.in/" class="fa fa-google"></a>
<a href="https://www.linkedin.com/school/sirt-bhopal/" class="fa fa-linkedin"></a>
<a href="https://www.youtube.com/channel/UCFz9wW5ZelXFgdkK7WKCylg" class="fa fa-youtube"></a>
<a href="https://www.instagram.com/sirtsasdepartment/" class="fa fa-instagram"></a>
        </div>
      

      </div>
     

    </div>
  </div>


  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
  </div>
 

</footer>

</body>
</html>
