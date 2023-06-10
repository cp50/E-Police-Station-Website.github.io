<?php include "header.php";?>
<?php include "database.php";?>
<html>
    <body style="background: url(https://www.marshallsindia.com/ImageBuckets/ItemImages/ZA%201903.jpg?id=75-background_118047-5945.jpg)">
        <button type="button" style="float:right" class="btn btn-outline-primary btn-lg"><a href="home.php">BACK</a></button>
<h1>LOGIN</h1>
<form method="get">
  <div class="form-group">
    User id
    <input type="text" class="form-control"   placeholder="Enter name" name="userid" required>
  </div>
    password
  <div class="form-group">
    <input type="password" class="form-control"  placeholder="Password" name="password" required>
  </div>
    <input type="submit" class="btn btn-primary mb-2"   name="submit">
</form>
<?php
if(isset($_GET['submit']))
{
    $passwd=$_GET['password'];
    $useid=$_GET['userid'];
    $select=mysqli_query($conn,"select password,userid from users where userid='$useid'");
    while($row=mysqli_fetch_assoc($select))
        {
            $password=$row['password'];
        }
    if($passwd==$password)
    {
        $_SESSION['userid']=$useid;
        ?>
<script>
    location.replace("home.php");
</script>
<?php
    
    }
    else
    {
        ?>
<script>
    alert("incorrect information");
</script>
<?php
        
    }
}?>
    </body>
</html>