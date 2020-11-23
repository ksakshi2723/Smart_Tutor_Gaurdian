<?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("tg");

$enrollment_no=$_SESSION["enrollment_no"];
if(isset($_REQUEST["submit"]))
{
  
  $entrance=$_REQUEST["entrance"];
  $admissionbase=$_REQUEST["admissionbase"];
  $school_no=$_REQUEST["school_no"];
  $branch=$_REQUEST["branch"];
  $semester=$_REQUEST["semester"];
  
    
$query= mysql_query("insert into studentadmission(enrollment_no,entrance,admissionbase,school_no,branch,semester)values('$enrollment_no','$entrance','$admissionbase','$school_no','$branch','$semester')");
 if ($query){
    $_SESSION["enrollment_no"]=$enrollment_no;
     header('location:admission.php');
   }
   else{
      echo "not succes";
   }
}
?>

<!DOCTYPE html>
<html>
<head>
  <link href="css/style.css" rel="stylesheet"> 
<style>
</style>
</head>
<body>


<div class="container">
  <form method="post" action="attendence.php" enctype="multipart/form-data">
  <div class="row">
    <div class="col-25">
      <label for="batch">Entrance</label>
    </div>
    <div class="col-75">
      <input type="text"  name="entrance" placeholder="Entrance" required>
    </div></div>
    
  <div class="row">
    <div class="col-25">
      <label for="batch">Admission Base</label>
    </div>
    <div class="col-75">
      <input type="text"  name="admissionbase" placeholder="Admission Based" required>
    </div></div>
     
<div class="row">
    <div class="col-25">
      <label for="batch">School Name</label>
    </div>
    <div class="col-75">
      <input type="text"  name="School_name" placeholder="School Name" required>
    </div></div>
     


  <div class="row">
    <div class="col-25">
      <label for="branch">Branch</label>
    </div>
    <div class="col-75">
      <select id="Department" name="branch" required>
        <option value="CSE">CSE</option>
        <option value="CIVIL">CIVIL</option>
        <option value="ME">ME</option>
        <option value="EX">EX</option>
        <option value="EC">EC</option>

      </select>
    </div>
  </div>

  
  <div class="row">
    <div class="col-25">
      <label for="semester">Semester</label>
    </div>
    <div class="col-75">
      <select id="semester" name="semester" required>
        <option value="1">I</option>
        <option value="2">II</option>
        <option value="3">III</option>
        <option value="4">IV</option>
        <option value="5">V</option>
        <option value="6">VI</option>
        <option value="7">VII</option>
        <option value="8">VIII</option>

      </select>
    </div>
  </div>

  <div clas="row">

    <input type="submit" value="submit" name="submit">
</div>
  </form>
</div>

</body>
</html>
