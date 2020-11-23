<?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("tg");

$roll='enrollment_no';
if(isset($_REQUEST["enrollment_no"]))
{
  $enrollment_no=$_REQUEST["enrollment_no"];
  
  $roll= $enrollment_no;
 
 
    }
    ?>

<br>

<a href="stdadd.php?enrollment_no=<?php echo $enrollment_no?>">studentaddress</a></td><br>
<a href="stdresident.php?enrollment_no=<?php echo $enrollment_no?>">studentresident</a></td><br>
<a href="stdfee.php?enrollment_no=<?php echo $enrollment_no?>">studentfee</a></td><br>
<a href="stdadmission.php?enrollment_no=<?php echo $enrollment_no?>">studentadmission</a></td><br>
<a href="stdfamily.php?enrollment_no=<?php echo $enrollment_no?>">family</a></td><br>
<a href="std_lg.php?enrollment_no=<?php echo $enrollment_no?>">studentlocalguardian</a></td><br>
<a href="std_hostel.php?enrollment_no=<?php echo $enrollment_no?>">student hostel</a></td><br>
<a href="stdtgcalling.php?enrollment_no=<?php echo $enrollment_no?>">tgcalling</a></td><br>
<a href= stdattendance.php?enrollment_no=<?php echo $enrollment_no?>">Attendance</a></td><br>
<a href="stdresult.php?enrollment_no=<?php echo $enrollment_no?>">result</a></td><br>
<a href="stdmidsemresult.php?enrollment_no=<?php echo $enrollment_no?>">midsem_result</a></td><br>
<a href="std_medical.php?enrollment_no=<?php echo $enrollment_no?>">student_medical</a></td><br>
<a href="std_bank.php?enrollment_no=<?php echo $enrollment_no?>">student_bank</a></td><br>
<a href="std_placement.php?enrollment_no=<?php echo $enrollment_no?>">student_placement</a></td><br>
<a href="std_tenth.php?enrollment_no=<?php echo $enrollment_no?>">std_tenth</a></td><br>
<a href="std_twelth.php?enrollment_no=<?php echo $enrollment_no?>">std_twelve</a></td><br>
<a href="std_diploma.php?enrollment_no=<?php echo $enrollment_no?>">std_diploma</a></td><br>
<a href="std_pg.php?enrollment_no=<?php echo $enrollment_no?>">std_pg</a></td><br>
<a href="std_ug.php?enrollment_no=<?php echo $enrollment_no?>">std_ug</a></td><br>
<a href="std_jee.php?enrollment_no=<?php echo $enrollment_no?>">std_jee</a></td><br>
<a href="std_other.php?enrollment_no=<?php echo $enrollment_no?>">std_other</a></td><br>
















