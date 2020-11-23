<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">

<?php
session_start();
$user=$_SESSION["user"];
mysql_connect("localhost","root","");
mysql_select_db("tg");
if(isset($_REQUEST["delenrollment_no"]))
{
	$delenrollment_no=$_REQUEST["delenrollment_no"];
    mysql_query("delete from student where enrollment_no='$delenrollment_no'");
}





$query=mysql_query("select * from student where owner='$user' ");
$rowcount=mysql_num_rows($query);

?>


<table border="1" align="center" id="example" class="display" style="width:100%">
	<thead>
<tr>
	<td>Enrollment no</td>
	<td>Student</td>
	<td>Branch</td>
	<td>Batch</td>
	<td >Year</td>
	<td>Semester</td>
	<td>section</td>
	<td>file upload</td>
	<td>Delete</td>
	<td>add more</td>
	<td>view</td>
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
	<td><?php echo $row["branch"]?></td>
	<td><?php echo $row["batch"]?></td>
	<td><?php echo $row["year"]?></td>
	<td><?php echo $row["semester"]?></td>
	<td><?php echo $row["section"]?></td>
	<td><img src="image/<?php echo $row["file"] ?>" height="150px" width="150px">
    <br>
    <td><a href="mystudentname.php?delenrollment_no=<?php echo $row["enrollment_no"] ?>">Delete</a></td>
    <td><a href="addmore.php?enrollment_no=<?php echo $row["enrollment_no"]?>">add more</a></td>
    <td><a href="view.php?enrollment_no=<?php echo $row["enrollment_no"]?>">view </a></td>
    
 
</td></tr>
<?php                       

}
?>
</table>
<script>
	$(document).ready(function() {
    $('#example').DataTable();
} );
</script>