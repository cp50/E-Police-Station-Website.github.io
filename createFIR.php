<?php include "header.php";?>
<?php include "database.php";?>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <button type="button" style="float:right" class="btn btn-outline-primary btn-lg"><a href="offviewandupdatecomplaint.php">BACK</a></button>
</head>
<h1 align=center>FIR CREATION</h1>
<form method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="name">Crime</label>
        <textarea type="crime" class="form-control" id="crime"  name="crime"></textarea>
    </div>
    <div class="form-group col-md-6">
      <label for="section">section</label>
      <input type="section" class="form-control" id="section" placeholder="section" name="section">
    </div>
  </div>
     <div class="form-row">
    <div class="form-group col-md-6">
      <label for="crimelocation">Crime location</label>
        <input type="crimelocation" class="form-control" id="crimelocation" placeholder="crimelocation" name="crimelocation">
    </div>
    <div class="form-group col-md-6">
      <label for="policestation">Ploice Station</label>
      <input type="policestation" class="form-control" id="policestation" placeholder="policestation" name="policestation">
    </div>
  </div>

     <div class="form-group col-md-6">
      <label for="distance">Distance</label>
      <input type="distance" class="form-control" id="distance" placeholder="distance" name="distance">
    </div>
  
  
  <button type="submit" name="create" class="btn btn-primary">Create</button>
</form>


<?php
if(isset($_POST['create']))
{$complaintno=$_GET['coid'];
 $complainantid=$_GET['id'];
 date_default_timezone_set('Asia/Kolkata');
 $current_time= date('h:i:s', time());
 $current_date= date('Y-m-d');
 $crime=$_POST['crime'];
 $section=$_POST['section'];
    $crimelocation=$_POST['crimelocation'];
    $policestation=$_POST['policestation'];
    $crime=$_POST['crime'];
    $distance=$_POST['distance'];
    $add=mysqli_query($conn,"INSERT INTO `fir` (`complaint_no`, `firno`, `date`, `time`, `crime`, `section`, `crime_location`, `police_station`, `distance_from_crime_in_km`, `status`, `complainant_id`) VALUES ('$complaintno', NULL, '$current_date', ' $current_time', '$crime', '$section', '$crimelocation', '$policestation', '$distance', 'y', ' $complainantid');");
 if($add)
 {
     ?><script>alert("successful");</script>
<?php
 }
    
    
    

}
?>










