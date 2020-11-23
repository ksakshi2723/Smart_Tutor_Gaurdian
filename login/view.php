<?php
session_start();
$user=$_SESSION["user"];

mysql_connect("localhost","root","");
mysql_select_db("tg");

$roll='enrollment_no';
if(isset($_REQUEST["enrollment_no"]))
{
  $enrollment_no=$_REQUEST["enrollment_no"];
  
  $roll= $enrollment_no;
   }

   $query=mysql_query("select * from family where enrollment_no='$enrollment_no'");
   $rowcount=mysql_num_rows($query);
   $query2=mysql_query("select * from  studentaddress where enrollment_no='$enrollment_no'");
   $rowcount2=mysql_num_rows($query2);
   $query3=mysql_query("select * from  studentlocalguardian where enrollment_no='$enrollment_no'");
   $rowcount3=mysql_num_rows($query3);
   $query4=mysql_query("select * from  student where enrollment_no='$enrollment_no'");
   $rowcount4=mysql_num_rows($query4);
?>
<h2>student family detail</h2>
<table border="1" >
	<thead>
<tr>                                                                     
	<td>enrollment_no</td>
	<td>father_name</td>
	<td>father_mobile</td>
	<td>father_email</td>
	<td>father_organisation</td>
	<td>father_occupation</td>
	<td>father_income</td>
	<td>father_office</td>
	<td>mother_name</td>
	<td>mother_mobile</td>
	<td>mother_email</td>
	<td>mother_organisation</td>
	<td>mother_occupation</td>
	<td>mother_income</td>
    <td>mother_office</td>


</tr>
</thead>

<?php
for ($i=1;$i<=$rowcount;$i++)
{

$row=mysql_fetch_array($query);//it convert column into array
?>

<tr>
	<td><?php echo $row["enrollment_no"]?></td>
	<td><?php echo $row["father_name"]?></td>
	<td><?php echo $row["father_mobile"]?></td>
	<td><?php echo $row["father_email"]?></td>
	<td><?php echo $row["father_organisation"]?></td>
	<td><?php echo $row["father_occupation"]?></td>
	<td><?php echo $row["father_income"]?></td>
	<td><?php echo $row["father_office"]?></td>
	<td><?php echo $row["mother_name"]?></td>
	<td><?php echo $row["mother_mobile"]?></td>
	<td><?php echo $row["mother_email"]?></td>
	<td><?php echo $row["mother_organisation"]?></td>
	<td><?php echo $row["mother_occupation"]?></td>
	<td><?php echo $row["mother_income"]?></td>
	<td><?php echo $row["mother_office"]?></td>
	
	
    
 
</td></tr>
<?php                       

}
?>

</table>
<h2>student address detail</h2>
<table border="1" >
	<thead>
<tr>                                                                     
	<td>enrollment_no</td>
	<td>house_no</td>
	<td>street</td>
	<td>state</td>
	<td>city</td>
	<td>district</td>
	<td>country</td>
	<td>pincode</td>
	


</tr>
</thead>
<?php
for ($i=1;$i<=$rowcount2;$i++)
{

$row2=mysql_fetch_array($query2);//it convert column into array
?>

<tr>
	<td><?php echo $row2["enrollment_no"]?></td>
	<td><?php echo $row2["house_no"]?></td>
	<td><?php echo $row2["street"]?></td>
	<td><?php echo $row2["state"]?></td>
	<td><?php echo $row2["city"]?></td>
	<td><?php echo $row2["district"]?></td>
	<td><?php echo $row2["country"]?></td>
	<td><?php echo $row2["pincode"]?></td>
	
	
    
 
</td></tr>
<?php                       

}
?>
</table>
<h2>student localguardian detail</h2>
<table border="1" >
	<thead>
<tr>                                                                     
	<td>enrollment_no</td>
	<td>localguardian name</td>
		<td>localguardian address</td>
			<td>student relation</td>

	
	


</tr>
</thead>
<?php
for ($i=1;$i<=$rowcount3;$i++)
{

$row3=mysql_fetch_array($query3);//it convert column into array
?>

<tr>
	<td><?php echo $row3["enrollment_no"]?></td>
	<td><?php echo $row3["lg_name"]?></td>
	<td><?php echo $row3["lg_address"]?></td>
	<td><?php echo $row3["std_rel_guard"]?></td>
	
    
 
</td></tr>
<?php                       

}
?>
</table>
<h2>student detail</h2>
<table border="1" >
	<thead>
<tr>                                                                     
	<td>enrollment_no</td>
	<td>student name</td>
	<td>branch</td>
	<td>batch</td>
	<td>year</td>
	<td>semester</td>
	<td>section</td>
	<td>owner</td>
	<td>image</td>
</tr>
</thead>
<?php
for ($i=1;$i<=$rowcount4;$i++)
{

$row4=mysql_fetch_array($query4);//it convert column into array
?>

<tr>
	<td><?php echo $row4["enrollment_no"]?></td>
	<td><?php echo $row4["student_name"]?></td>
	<td><?php echo $row4["branch"]?></td>
	<td><?php echo $row4["batch"]?></td>
	<td><?php echo $row4["year"]?></td>
	<td><?php echo $row4["semester"]?></td>
	<td><?php echo $row4["section"]?></td>
	<td><?php echo $row4["owner"]?></td>
	<td><img src="image/<?php echo $row4["file"] ?>" height="100px" width="100px">
    <br>
	
    
 
</td></tr>
<?php                       

}
?>
</table>









