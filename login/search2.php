


 <?php
if(isset($_REQUEST["submit"]))
{
	$batch=$_REQUEST["batch"];
mysql_connect("localhost","root","");
mysql_select_db("tg");

$query=mysql_query("select * from student where batch like '$batch'");
$rowcount=mysql_num_rows($query);
?>
<table border="1" align="center">
	<tr>
		<td>batch</td>
		<td>year</td>
	</tr>
<?php
for($i=1;$i<=$rowcount;$i++)
{
	$row=mysql_fetch_array($query);
	?>
	<tr>
		<td><?php echo $row["batch"]?></td>
		<td><?php echo $row["year"]?></td>
	</tr>
<?php
}
}        
	
?>
</table>
<form method="post">
<input type="text" name="user">
<input type="submit" value="submit" name="submit">



</form>
