<?php include "header.php";?>
<?php include "database.php";?>
<?php
if(isset($_GET['submit']) && $_GET['name']!="" && $_GET['password']!="" && $_GET['validid']!="" && $_GET['email']!="" && $_GET['mobile']!="" && $_GET['housename']!="" && $_GET['pin']!="" && $_GET['state']!="" && $_GET['district']!="" && $_GET['place']!="")
{
    $name = $_GET['name'];
    $passw = $_GET['password'];
    $id = $_GET['validid'];
    $email = $_GET['email'];
    $mono = $_GET['mobile'];
    $homnam = $_GET['housename'];
    $pin = $_GET['pin'];
    $state = $_GET['state'];
    $distri = $_GET['district'];
    $place = $_GET['place'];

    if(strlen($passw) < 8 || !preg_match('/^(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*])/', $passw)) {
        echo "Invalid Password. Password should be at least 8 characters in length and should include at least one uppercase letter, one number, and one special character.";
    }
    else {
        // Check if the password already exists in the database
        $checkPassword = mysqli_query($conn, "SELECT * FROM users WHERE password = '$passw'");
        if(mysqli_num_rows($checkPassword) > 0) {
            echo "Password already exists in the database.";
        }
        else {
            // Perform database insertion
            $insert = mysqli_query($conn, "INSERT INTO `users` (`userid`, `name`, `validid`, `mobileno`, `email`, `housename`, `pin`, `place`, `district`, `state`, `password`) VALUES (NULL, '$name', '$id', '$mono', '$email', '$homnam', '$pin', '$place', '$distri', '$state', '$passw')");

            if($insert) {
                $useid = mysqli_query($conn, "SELECT userid FROM users WHERE validid='$id'");
                while($row = mysqli_fetch_assoc($useid))
                {
                    $userid = $row['userid'];
                }
                echo "<h1>Your ID is: ".$userid."</h1>";
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        }
    }
}
else if(isset($_GET['submit']))
{
    echo "Enter all the required information.";
}
?>

<a href="register.php" ><button>ok</button></a>