<?php
session_start();
$user =$_SESSION["user"];
mysql_connect("localhost","root","");
mysql_select_db("tg");

if(isset($_REQUEST["search"]))
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

$semester=$row["semester"];

$query2=mysql_query("select sum(attendance) from attendance where enrollment_no='$enrollment_no' and semester='$semester");
$row=mysql_fetch_array($query2);
echo $row['attendance'];
}

}  
?>