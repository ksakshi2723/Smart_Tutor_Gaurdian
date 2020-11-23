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
  
    
$query= mysql_query("insert into studentadmission(enrollment_no,entrance,admissionbase,school_no,branch,semester)values('$enrollment_no',$entrance','$admissionbase','$school_no','$branch','$semester')");
 if ($query){
    $_SESSION["enrollment_no"]=$enrollment_no;
     header('location:admission.php');
   }
   else{
      echo "not succes";
   }
}
?>
<form method="post"  enctype="multipart/form-data">

Entrance<input type="text" name="entrance"  required><br><br>
Admissionbase<input type="text" name="admissionbase" required><br><br>
School_name<input type="text" name="school_no"  required><br><br>
Branch:
<select name="branch" required>
<option value="CSE">CSE</option>
<option value="CIVIL">CIVIL</option>
<option value="ME">ME</option>
<option value="EX">EX</option>
<option value="EC">EC</option>
</select><br>
Semester<input type="text" name="semester"  required><br><br>


<input type="submit" value="submit" name="submit">
</form>
