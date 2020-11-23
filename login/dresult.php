<?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("tg");


$enrollment_no=$_SESSION["user"];




  $sql=mysql_query("select * from result where enrollment='$enrollment_no'");
  $rowcount=mysql_num_rows($sql);

  ?>

<table border="1" align="center"  class="display" cellspacing="0" style="width:100%">
   <thead>
<tr>
   <td>enrollment_no</td>
   <td>semester </td>
   <td>result</td>
   <td>sgpa</td>
    <td>cgpa</td>
     <td>back</td>
      <td>file</td>
   
</tr>
</thead>
<?php
for ($i=1;$i<=$rowcount;$i++)
{

$row=mysql_fetch_array($sql);//it convert column into array
?>
<tr>
   <td><?php echo $row["enrollment"]?></td>
   <td><?php echo $row["semester"]?></td>
   <td><?php echo $row["result"]?></td>
<td><?php echo $row["sgpa"]?></td>
<td><?php echo $row["cgpa"]?></td>
<td><?php echo $row["back"]?></td>
<td><img src="image/<?php echo $row["file"] ?>" height="150px" width="150px">


  
 
</td>



  
</tr>
<?php
}
?>
   </table>