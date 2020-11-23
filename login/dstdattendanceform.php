<?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("tg");
$user=$_SESSION["user"];

if(isset($_REQUEST["submit"]))
{
  
   $semester=$_REQUEST["semester"];
   $date=$_REQUEST["date"];
   $attendance=$_REQUEST["attendance"];
  
   $query= mysql_query("insert into attendance(enrollment_no,semester,date,attendance)values('$user','$semester','$date','$attendance')");
 if ($query)
 {
     $_SESSION["user"]=$user;
     header('location:attendance.php');
   }
   else{
      echo "not succes";
   }
}
?>
<form method="post"  enctype="multipart/form-data">
Semester:<input type="text" name="semester"  required><br><br>
 Date<input type="Date" name="date" required><br><br>
 Attendence:<input type="text"  name="attendance"  required><br><br>
<input type="submit" value="submit" name="submit">
</form>
