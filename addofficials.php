<?php include "header.php";?>
<?php include "database.php";?>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body style="background: url(https://www.marshallsindia.com/ImageBuckets/ItemImages/ZA%201903.jpg?id=75-background_118047-5945.jpg)">
<button type="button" style="float:right" class="btn btn-outline-primary btn-lg"><a href="adminpage.php">BACK</a></button>
<h1 align=center>Add Officials</h1>
<form method="get">
    <div class="form-group">
    Employee id
    <input type="text" class="form-control"   placeholder="Employee ID should be less than 7 digits and consist of numbers only." name="empid">
  </div>
    <div class="form-group">
    Name
    <input type="text" class="form-control"   placeholder="Name" name="name">
  </div>

    <div class="form-group">
    Designation
    <input type="text" class="form-control"   placeholder="Designation" name="desig">
  </div>
    <div class="form-group">
    Official Mobile no
    <input type="text" class="form-control"   placeholder="official mobile no" name="offmo">
  </div>
   <div class="form-group">
    Password
    <input type="password" class="form-control"   placeholder="Password should be at least 8 characters in length and should include at least one uppercase letter, one number, and one special character" name="password">
  </div>
    <button type="submit" name="submit" class="btn btn-primary">submit</button>
   <?php
if (isset($_GET['submit']) && $_GET['empid'] != "" && $_GET['name'] != "" && $_GET['desig'] != "" && $_GET['offmo'] != "" && $_GET['password'] != "") {
    $empid = $_GET['empid'];
    $name = $_GET['name'];
    $desig = $_GET['desig'];
    $offmo = $_GET['offmo'];
    $password = $_GET['password'];

    if (strlen($empid) >= 7 || !preg_match('/^[0-9]+$/', $empid)) {
        echo "Employee ID should be less than 7 digits and consist of numbers only.";
    } elseif (strlen($password) < 8 || !preg_match('/^(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*])/', $password)) {
        echo "Invalid Password. Password should be at least 8 characters in length and should include at least one uppercase letter, one number, and one special character.";
    } else {
    
        $query = mysqli_query($conn, "SELECT * FROM officials WHERE empid='$empid' AND password='$password'");
        $existingRecords = mysqli_num_rows($query);
        if ($existingRecords > 0) {
            echo "Employee ID and password already exist in the database.";
        } else {
            $insert = mysqli_query($conn, "INSERT INTO `officials` (`empid`, `name`, `designation`, `official_mobno`, `password`) VALUES ('$empid', '$name', '$desig', '$offmo', '$password')");

            if ($insert) {
                echo "Record added successfully!";
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        }
    }
}
?>
    </form></body>







