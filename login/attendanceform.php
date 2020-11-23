<?php
session_start();

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
  <form method="post" action="attendence.php" enctype="multipart/form-data">
  <div class="row">
    <div class="col-25">
      <label for="batch">Batch</label>
    </div>
    <div class="col-75">
      <input type="text"  name="batch" placeholder="Batch" required>
    </div></div>
     

  <div class="row">
    <div class="col-25">
      <label for="branch">Branch</label>
    </div>
    <div class="col-75">
      <select id="Department" name="branch" required>
        <option value="CSE">CSE</option>
        <option value="CIVIL">CIVIL</option>
        <option value="ME">ME</option>
        <option value="EX">EX</option>
        <option value="EC">EC</option>

      </select>
    </div>
  </div>

  
  <div class="row">
    <div class="col-25">
      <label for="semester">Semester</label>
    </div>
    <div class="col-75">
      <select id="semester" name="semester" required>
        <option value="1">I</option>
        <option value="2">II</option>
        <option value="3">III</option>
        <option value="4">IV</option>
        <option value="5">V</option>
        <option value="6">VI</option>
        <option value="7">VII</option>
        <option value="8">VIII</option>

      </select>
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="section">Section</label>
    </div>
    <div class="col-75">
      <select id="section" name="section" required>
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="C">C</option>


      </select>
    </div>
  </div>
  <div clas="row">

    <input type="submit" value="view" name="search">
</div>
  </form>
</div>

</body>
</html>
