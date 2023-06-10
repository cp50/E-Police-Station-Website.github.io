<?php include "header.php";?>
<?php include "database.php";?>
<html>
    <body style="background: url(https://www.marshallsindia.com/ImageBuckets/ItemImages/ZA%201903.jpg?id=75-background_118047-5945.jpg)">
         <button type="button" style="float:right" class="btn btn-outline-primary btn-lg"><a href="home.php">BACK</a></button>
<h1 align=center>COMPLAINT REGISTRATION</h1>
<form method="get">
<div class="form-group">
    Complaint Details
    <input type="text" class="form-control"   placeholder="complaint details" name="comdet">
  </div>
<div class="form-group">
    Date
    <input type="date" class="form-control"   placeholder="Enter date" name="date">
  </div>
<div class="form-group">
    Time
    <input type="time" class="form-control"   placeholder="Enter Time" name="time">
  </div>
<div class="form-group">
    Complainant id
    <input type="text" class="form-control"   placeholder="Enter user id" name="compid">
  </div>
<input type="submit" class="btn btn-primary mb-2"   name="submit">
</form>
<?php
if(isset($_GET['submit'])&& $_GET['comdet']!=""&& $_GET['date']!=""&& $_GET['time']!=""&& $_GET['compid']!="")
{
    $compde=$_GET['comdet'];
    $dat=$_GET['date'];
    $tim=$_GET['time'];
    $compi=$_GET['compid'];
    $insert=mysqli_query($conn,"INSERT INTO `complaint` (`complaintno`,`complaint_details`, `date`, `time`,`complainant_id`,`status`,`status_description`) VALUES (NULL,'$compde', '$dat', '$tim', '$compi','N','N')");
}
else if(isset($_GET['submit']))
{
    echo"Enter all following information";
}
?>
    </body>
</html>
    
