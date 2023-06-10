<?php include "header.php";?>
<?php include "database.php";?>
<html>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <body style="background: url(https://www.marshallsindia.com/ImageBuckets/ItemImages/ZA%201903.jpg?id=75-background_118047-5945.jpg)">
         <button type="button" style="float:right" class="btn btn-outline-primary btn-lg"><a href="home.php">BACK</a></button>
<h1 align=center>FIR Search</h1>
<form method="get">
  <div class="form-group">
    
    <input type="text" class="form-control"   placeholder="search" name="name">
    </div>
    <button type="submit" style="float:center" class="btn btn-outline-primary btn-lg" name="submit">search</button>
</form>
        <?php
        if(isset($_GET['name']))
           {
               
           
        
        $fir=mysqli_query($conn,"select * from fir where crime_location like '%".$_GET['name']."%' or police_station like '%".$_GET['name']."%'");
        while($row=mysqli_fetch_assoc($fir))
            {
            echo'<section class="h-100 h-custom" style="background-color: #8fc4b7;">
  <div class="container py-5 h-50">
    <div class="row d-flex justify-content-center align-items-center h-50">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          
          <div class="card-body p-3 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-5"><center>FIR</center></h3>
            </div><p align="center">';
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
            echo"</p></div></div></div></div></section><hr/>";
        }}
        ?>
    </body>
</html>