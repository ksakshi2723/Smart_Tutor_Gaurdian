<?php
session_start();
$user=$_SESSION["user"];
mysql_connect("localhost","root","");
mysql_select_db("tg");
if(isset($_REQUEST["submit"]))
{
	 $cpass=$_REQUEST["cpass"];
	 $npass=$_REQUEST["npass"];
	 $confirmpass=$_REQUEST["confirmpass"];
     if($user)
     {

	 $query=mysql_query("SELECT * FROM user WHERE Username='$user'");
	 while ($row = mysql_fetch_array($query))
	 {
    

	 if($cpass==$row['pass'])         

	 {
	 	$sql=mysql_query("UPDATE user SET pass='$npass' WHERE Username='$user'");
        if($sql)
        {
        	header('location:change_password_done.html');
        }
        else{
        	echo " password fail to update";
        }

     }
	 else
	 	 {
	 	 	echo "old password not match!";
	 	 }

	 } 
	
	 

}
     else
	 {
	 	echo "user did not logged";
	 }

}

?>

<form method="post" enctype="multipart/form-data">  
current password<input type="password" name="cpass"><br><br>
new password<input type="password" name="npass"><br><br>
confirm password<input type="password" name="confirmpass"><br><br>
<input type="submit" value="insert" name="submit">

</form>