<?php include "header.php";?>
<?php include "database.php";?>
<html>
   <body style="background: url(https://media.istockphoto.com/id/1007122208/vector/grey-and-white-geometric-triangles-backgorund.jpg?s=612x612&w=0&k=20&c=Qk4uuwQUj4ElhWZ-E1qfnHIezG2ljxc2uAjtgEZxYWs=)"> 
           <button type="button" style="float:right" class="btn btn-outline-primary btn-lg"><a href="home.php">BACK</a></button>
<h1 align=center>OFFICIALS LOGIN</h1>
   
<form method="get">
  <div class="form-group">
    Employee id
    <input type="text" class="form-control"   placeholder="Enter name" name="userid">
  </div>
    password
  <div class="form-group">
    <input type="password" class="form-control"  placeholder="Password" name="password">
  </div>
    <input type="submit" class="btn btn-outline-primary btn-lg"   name="submit">
</form>
<?php
if(isset($_GET['submit']))
{
    $passwd=$_GET['password'];
    $useid=$_GET['userid'];
    $select=mysqli_query($conn,"select password,empid from officials where empid='$useid'");
    while($row=mysqli_fetch_assoc($select))
        {
            $password=$row['password'];
        }
    if($passwd==$password)
    {
        $_SESSION['empid']=$useid;
        ?>
<script>
    location.replace("officialspage.php");
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