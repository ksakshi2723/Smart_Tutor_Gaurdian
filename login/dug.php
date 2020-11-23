<?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("tg");


$enrollment_no=$_SESSION["user"];




  $sql=mysql_query("select * from std_ug where enrollment_no='$enrollment_no'");
  $rowcount=mysql_num_rows($sql);

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
        
 <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Profile
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="changepasword.php">Change Password</a>
          <a class="dropdown-item" href="updateprofile.php">Update Profile</a>
 </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Personal Detail
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="dstdadd.php">Student Address</a>
          <a class="dropdown-item" href="dstdresident.php">Resident Address</a>
           <a class="dropdown-item" href="dstdfamily.php">Family Detail</a>
               <a class="dropdown-item" href="dstd_lg.php">Student Local Guardian</a>
                 
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Education
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="dstd_tenth.php">Student Tenth</a>
          <a class="dropdown-item" href="dstd_twelth.php">Student Twelth</a>
             <a class="dropdown-item" href="dstd_diploma.php">Student Diploma</a>
             <a class="dropdown-item" href="dstd_pg.php">Student PG</a>
             <a class="dropdown-item" href="dstd_ug.php">Student UG</a>
             <a class="dropdown-item" href="dstd_jee.php">Student JEE</a>
             <a class="dropdown-item" href="dstd_other.php">Student Other</a>
         
      </li>

<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Academic
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="dstdadmission.php">Admission detail</a>
          <a class="dropdown-item" href="dstd_hostel.php">Hostel Detail</a>
             <a class="dropdown-item" href="dstdtgcalling.php">Tg Calling Detail</a>
          <a class="dropdown-item" href="dstdattendanceform.php">Attendance Form</a>
             <a class="dropdown-item" href="dstdmidsem.php">Midsem Result</a>
          <a class="dropdown-item" href="dstdresult.php">Result</a>
             <a class="dropdown-item" href="dstdmedical.php">Medical Detail</a>
          <a class="dropdown-item" href="dstdbank.php">Bank Detail</a>
          <a class="dropdown-item" href="dstdplacement.php">Placement Detail</a>
          <a class="dropdown-item" href="dstdfee.php">Fees Form</a>
      
         
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
   
</td>

</tr>
<?php
}
?>
   </table>


 


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>








