<?php
include('config.php');
if(isset($_REQUEST["delUsername"]))
{
	$delUsername=$_REQUEST["delUsername"];
	mysql_query("delete from user where Username='$delUsername'");
}


$query=mysql_query("select * from user ");
$rowcount=mysql_num_rows($query);
?>
<table border="1" align="center" id="example" class="display" cellspacing="0" style="width:100%">
	<thead>
<tr>
	<td>Username</td>
	<td>first name</td>
	<td>last name</td>
	<td>Password</td>
	<td>Email</td>
	<td>phone no</td>
	<td>department</td>
	<td>file</td>
	<td>delete</td>

	
</tr>
</thead>
<?php
for ($i=1;$i<=$rowcount;$i++)
{
	$row=mysql_fetch_array($query);//it convert column into array
?>
<tr>
	<td><?php echo $row["Username"]?></td>
	<td><?php echo $row["first_name"]?></td>
	<td><?php echo $row["last_name"]?></td>
	<td><?php echo $row["pass"]?></td>
	<td><?php echo $row["email"]?></td>
	<td><?php echo $row["phone_no"]?></td>
	<td><?php echo $row["Department"]?></td>
	<td><img src="image/<?php echo $row["file"] ?>" height="150px" width="150px">
     <td><a href="select.php?delUsername=<?php echo $row["Username"] ?>">Delete</a></td>  
    </tr>
<?php
}
?>
</table>