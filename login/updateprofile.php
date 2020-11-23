<?php
session_start();
$user=$_SESSION["user"];
mysql_connect("localhost","root","");
mysql_select_db("tg");

if(isset($_REQUEST["submit"]))
{
	
	$dob=$_REQUEST["dob"];
	$address=$_REQUEST["address"];
	 $query=mysql_query("UPDATE userprofile SET dob='$dob',address='$address' WHERE Username='$user'");
if($query)
{
	header('location:welcome.php');
}

}
?>
<form method="post" enctype="multipart/form-data">  
	
<br><br>
Date of Birth:<input type="date" id="dob" name="dob" required><br><br>

Address:<textarea name="address"  required></textarea><br><br>

<input type="submit" value="submit" name="submit">
</form>