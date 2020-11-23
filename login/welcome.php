
<?php
session_start();
$user=$_SESSION["user"];
mysql_connect("localhost","root","");
mysql_select_db("tg");

if($_SESSION["user"]==true)
{

$query=mysql_query("select * from user where Username='$user' ");
$row=mysql_fetch_array($query);

}
else
	{
		header('location:index.php');
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
     <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">

    <title>Dashboard</title>
    <style>.bg-dark {
    background-color: #060920ed!important;
   }
.navbar-light .navbar-nav .nav-link {
    color: white;
}
.navbar-light .navbar-nav .nav-link:focus, .navbar-light .navbar-nav .nav-link:hover {
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
        <a class="nav-link" href="student.php">ADD Student <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="mystudentname.php">My Student</a>
      </li>
      
<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Attendance
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="attendance_page.php">Give Attendance</a>
          <a class="dropdown-item" href="attendanceform.php">View Attendance</a>
          
         
      </li>





 <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Profile
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="changepasword.php">Change Password</a>
          <a class="dropdown-item" href="updateprofile.php">Update Profile</a>
          
         
      </li>

      <li class="nav-item">
        <a class="nav-link" href="logout.php">logout</a>
      </li>
      
    </ul>
   
  </div>
</nav>
<div>
  <div>
    <img src="image/<?php echo $row["file"] ?>" width="250px" height="250px" alt="profile" 
   style="border-radius: 50%; margin-bottom: 20px; margin-left: 20px;"></div>
   <div>
  <p style="font-family: 'Roboto', sans-serif;text-align: right;font-size: 60px;margin-right:100px;"><?php echo $row["first_name"] ?> <?php echo $row["last_name"] ?></p>
 <p style="font-family: 'Roboto', sans-serif;text-align: right;font-size: 30px;margin-right:100px;"> <?php echo $row["role"] ?>  in <?php echo $row["Department"] ?> Department</p>
 </div></div>
 


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>

