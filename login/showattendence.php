<?php
session_start();
$user =$_SESSION["user"];
mysql_connect("localhost","root","");
mysql_select_db("tg");
if(isset($_REQUEST["search"]))
{  $batch=$_REQUEST["batch"];
   $semester=$_REQUEST["semester"];
   $section=$_REQUEST["section"];
   $branch=$_REQUEST["branch"];
  
   
$query=mysql_query("select * from student where batch='$batch' and semester='$semester' and section='$section' and branch='$branch'");
$rowcount=mysql_num_rows($query);

}
if(isset($_REQUEST["submit"]))
{  $date=$_REQUEST["date"];
   $batch=$_REQUEST["batch"];
   $semester=$_REQUEST["semester"];
   $section=$_REQUEST["section"];
   $branch=$_REQUEST["branch"];
   $query=mysql_query("select * from student where batch='$batch' and semester='$semester' and section='$section' and branch='$branch'");
$rowcount=mysql_num_rows($query);



   for ($i=1;$i<=$rowcount;$i++)
{
$row=mysql_fetch_array($query);//it convert column into array
$enrollment_no= $row["enrollment_no"];
$attendance=$_REQUEST["$enrollment_no"];
$semester=$row["semester"];

$query2=mysql_query("insert into attendance(enrollment_no,date,semester,attendance)values('$enrollment_no','$date','$semester','$attendance')");


}
echo "attendance added successfully";
}  
?>
<form method="post">
	



<table border="1">
	
   <thead>
<tr><td>date:<input type="date" name="date" required></td></tr>
<tr>
   <td>enrollment_no</td>
   <td>student_name</td>
   <td>attendance</td>
    </tr>
</thead>

<?php
for ($i=1;$i<=$rowcount;$i++)
{
$row=mysql_fetch_array($query);//it convert column into array
?>
<tr>
   <td><?php echo $row["enrollment_no"]?></td>
  <td><?php echo $row["student_name"]?></td>
  <td>
  	present:<input type="radio" name="<?php echo $row["enrollment_no"]?>" value="1" checked >
  	absent:<input type="radio" name="<?php echo $row["enrollment_no"]?>" value="0" >
  	half day:<input type="radio" name="<?php echo $row["enrollment_no"]?>" value="0.5" >
  </td> 
 <input type="hidden" name="branch" value="<?php echo $row["branch"]?>" />
 <input type="hidden" name="batch" value="<?php echo $row["batch"]?>" />
 <input type="hidden" name="semester" value="<?php echo $row["semester"]?>" />
 <input type="hidden" name="section" value="<?php echo $row["section"]?>" />


</tr>

<?php
}
?>
<tr><td colspan="3"><input type="submit" name="submit" value="submit"></td></tr>
   </table>
</form>