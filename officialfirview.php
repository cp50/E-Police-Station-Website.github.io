<?php include "header.php";?>
<?php include "database.php";?>
<section class="h-100 h-custom" style="background-color: #8fc4b7;">
    <button type="button" style="float:right" class="btn btn-outline-primary btn-lg"><a href="firmanagement.php">BACK</a></button>
  <div class="container py-5 h-50">
    <div class="row d-flex justify-content-center align-items-center h-50">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          
          <div class="card-body p-3 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-5"><center>FIR</center></h3>
            </div><p align='center'><?php
            $fir=mysqli_query($conn,"select * from fir where firno='".$_GET['id']."'");
            while($row=mysqli_fetch_assoc($fir))
            {
                echo"Date: ".$row['date']."<br>";
                echo"time: ".$row['time']."<br>";
                echo"Crime Details: ".$row['crime']."<br>";
                echo"Crime Location: ".$row['crime_location']."<br>";
                echo"Section: ".$row['section']."<br>";
                echo"Police Station: ".$row['police_station']."<br>";
                echo"Distance of crime from Station: ".$row['distance_from_crime_in_km']."<br>";
                $user=mysqli_query($conn,"select * from users where userid='".$row['complainant_id']."'");
                 while($rows=mysqli_fetch_assoc($user))
                 {
                   echo"Complainant name: ".$rows['name']."<br>"; 
                     echo"PIN: ".$rows['pin']."<br>";
                     echo"Place: ".$rows['place']."<br>"; 
                     echo"District: ".$rows['district']."<br>"; 
                     echo"State: ".$rows['state']."<br>"; 
                 }
            }
            
            ?>
            </p></div></div></div></div></section>