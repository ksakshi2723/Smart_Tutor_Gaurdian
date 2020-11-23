<?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("tg");


$enrollment_no=$_SESSION["enrollment_no"];
echo $enrollment_no;



  $sql=mysql_query("select * from std_tenth where enrollment_no='$enrollment_no'");
  $rowcount=mysql_num_rows($sql);

  ?>

  <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style >.navbar-light .navbar-nav .nav-link {
    color: white;
}
.navbar-light .navbar-nav .nav-link:focus, .navbar-light .navbar-nav .nav-link:hover {
    color: white;
}</style>
    <title>address</title>
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


<table border="1" align="center" class="table table-hover table-light " cellspacing="0" style="width:100%">
   <thead>
<tr style="background-color: darkblue;color:white;">

 <td>enrollment_no</td>
   <td>course</td>
    <td>roll_no</td>
     <td> rank</td>
      <td>board</td>
       <td>year_of_passing</td>
        <td>total_mark</td>
         <td>obtain_mark</td>
          <td>percent</td>
     
   
</tr>
</thead>
<?php
for ($i=1;$i<=$rowcount;$i++)
{

$row=mysql_fetch_array($sql);//it convert column into array
?>
<tr>
   <td><?php echo $row["enrollment_no"]?></td>
  <td><?php echo $row["course"]?></td>
   <td><?php echo $row["roll_no"]?></td>
    <td><?php echo $row["rank"]?></td>
     <td><?php echo $row["board"]?></td>
      <td><?php echo $row["year_of_passing"]?></td>
       <td><?php echo $row["total_mark"]?></td>
        <td><?php echo $row["obtain_mark"]?></td>
         <td><?php echo $row["percent"]?></td>
   


  
</tr>
<?php
}
?>
   </table>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

