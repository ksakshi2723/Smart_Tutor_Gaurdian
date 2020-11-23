<?php  
mysql_connect("localhost","root","");
//to connect php page to localhost
$connection=mysql_select_db("tg");
//connect to database and check condition



if($connection==true)
{
	echo "true";
}
else
{
	echo "false";
}
?>