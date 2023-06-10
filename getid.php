<?php include "header.php";?>
<?php include "database.php";?>
<html>
     <body style="background: url(https://www.marshallsindia.com/ImageBuckets/ItemImages/ZA%201903.jpg?id=75-background_118047-5945.jpg)">
          <button type="button" style="float:right" class="btn btn-outline-primary btn-lg"><a href="home.php">BACK</a></button>
<h1>forgot id</h1>
<form method="get">
  <div class="form-group">
    Valid id
    <input type="text" class="form-control"   placeholder="Enter id" name="validid">
  </div>
   <input type="submit" class="btn btn-primary mb-2"   name="submit">
</form>
<?php
if(isset($_GET['submit'])&& $_GET['validid']!='')
{
    $id=$_GET['validid'];
    $user=mysqli_query($conn,"SELECT userid,validid FROM users where validid='$id'");
    while($row=mysqli_fetch_assoc($user))
    {
        if($row['validid']==$id){
            $userid=$row['userid'];
        }
    }
    echo $userid;
}
?>
    </body>
</html>