<?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("tg");
$enrollment_no=$_SESSION["enrollment_no"];

 if(isset($_REQUEST["submit"]))


 if(isset($_REQUEST["submit"]))
{
   
   $course=$_REQUEST["course"];
    $roll_no=$_REQUEST["roll_no"];
     $rank=$_REQUEST["rank"];
      $board=$_REQUEST["board"];
       $year_of_passing=$_REQUEST["year_of_passing"];
        $total_mark=$_REQUEST["total_mark"];
         $obtain_mark=$_REQUEST["obtain_mark"];
          $percent=$_REQUEST["percent"];
  
   
  
  $query= mysql_query("insert into std_other(enrollment_no,course,roll_no,rank,board,year_of_passing,total_mark,obtain_mark,percent)values('$enrollment_no','$course','$roll_no','$rank','$board','$year_of_passing','$total_mark','$obtain_mark','$percent')");
if ($query){
 
     $_SESSION["enrollment_no"]=$enrollment_no;
     header('location:other.php');
   }
   else{
      echo "not succes";
   }
}
?>
<!DOCTYPE html>
<html>
<head>
  <link href="css/style.css" rel="stylesheet"> 
<style>
</style>
</head>
<body>


<div class="container">
  <form method="post" enctype="multipart/form-data">

     
  <div class="row">
    <div class="col-25">
      <label for="course">Course</label>
    </div>
    <div class="col-75">
      <select id="course" name="course" required>
        <option value="B.tech">B.tech</option>
        <option value="PHARMACY">Pharmacy</option>
      </select>
    </div>
  </div>
 
  <div class="row">
    <div class="col-25">
      <label for="batch">Roll No</label>
    </div>
    <div class="col-75">
      <input type="text"  name="roll_no" placeholder="Roll no" required>
    </div></div>
       <div class="row">
    <div class="col-25">
      <label for="batch">Rank</label>
    </div>
    <div class="col-75">
      <input type="text"  name="rank" placeholder="Rank" required>
    </div></div>
       <div class="row">
    <div class="col-25">
      <label for="batch">Board</label>
    </div>
    <div class="col-75">
      <input type="text"  name="board" placeholder="board" required>
    </div></div>
       <div class="row">
    <div class="col-25">
      <label for="batch">Year of passing</label>
    </div>
    <div class="col-75">
      <input type="text"  name="year_of_passing" placeholder="year of passing" required>
    </div></div>
       <div class="row">
    <div class="col-25">
      <label for="batch">Total Mark</label>
    </div>
    <div class="col-75">
      <input type="text"  name="total_mark" placeholder="total mark" required>
    </div></div>
     
     
       <div class="row">
    <div class="col-25">
      <label for="batch">Obatin Mark</label>
    </div>
    <div class="col-75">
      <input type="text"  name="obtain_mark" placeholder="Obatin Mark" required>
    </div></div>
     
     
       <div class="row">
    <div class="col-25">
      <label for="batch">Percent</label>
    </div>
    <div class="col-75">
      <input type="text"  name="percent" placeholder="Percentage" required>
    </div></div>
     
     
  <div clas="row">

<input type="submit" value="submit" name="submit">

</div>
  </form>
</div>

</body>
</html>o

