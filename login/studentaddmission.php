<?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("tg");
if(isset($_REQUEST["enrollment_no"]))
{
	$enrollment_no=$_REQUEST["enrollment_no"];
	echo $enrollment_no;
}
if(isset($_REQUEST["submit"]))
{
  
  $entrance=$_REQUEST["entrance"];
  //$admissionbase=$_REQUEST["admissionbase"];
  //$school_no=$_REQUEST["school_no"];
  //$branch=$_REQUEST["branch"];
  //$semester=$_REQUEST["semester"];
  
    
$query= mysql_query("insert into studentadmission(entrance)values('$entrance')");
 if ($query){
    echo "success";
   }
   else{
      echo "not succes";
   }
}
?>
<form method="post"  enctype="multipart/form-data">

Entrance<input type="text" name="entrance"  required><br><br>



<input type="submit" value="submit" name="submit">
</form>
