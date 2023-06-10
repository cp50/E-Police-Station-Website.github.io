<?php include "header.php";?>
<?php include "database.php";?>
<html>
    <body style="background: url(https://www.marshallsindia.com/ImageBuckets/ItemImages/ZA%201903.jpg?id=75-background_118047-5945.jpg)">
         <button type="button" style="float:right" class="btn btn-outline-primary btn-lg"><a href="home.php">BACK</a></button>
<h1 align="center">REGISTRATION</h1>
<form method="get" action="useridgeneration.php">
    
  <div class="form-group">
    Name
    <input type="text" class="form-control"   placeholder="Enter name" name="name">
  </div>
    password
  <div class="form-group">
    <input type="password" class="form-control"  placeholder="Password should be at least 8 characters in length and should include at least one uppercase letter, one number, and one special character" name="password">
  </div>
    <div class="form-group">
    valid id
    <input type="text" class="form-control"   placeholder="Enter id" name="validid">
    <small id="emailHelp" class="form-text text-muted">.</small>
  </div>
     <div class="form-group">
    email
    <input type="text" class="form-control"   placeholder="Enter email" name="email">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
     <div class="form-group">
    mobile number
    <input type="text" class="form-control"   placeholder="Enter moble number" name="mobile">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
     <div class="form-group">
    home name
    <input type="text" class="form-control"   placeholder="Enter home name" name="housename">
    <small id="emailHelp" class="form-text text-muted">.</small>
  </div>
    <div>
 pin
    <input type="text" class="form-control"   placeholder="Enter pin" name="pin">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div> 
 state
    <div>
    <input type="text" class="form-control"   placeholder="Enter state" name="state">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div> 
 district
    <div>
    <input type="text" class="form-control"   placeholder="Enter district" name="district">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div> 
 place
    <div>
    <input type="text" class="form-control"   placeholder="Enter place" name="place">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div> 
<input type="submit" class="btn btn-primary mb-2"   name="submit">
</form>
    </body>
</html>
