<?php include "header.php";?>
<?php include "database.php";?>
<html>
    <body style="background: url(https://www.marshallsindia.com/ImageBuckets/ItemImages/ZA%201903.jpg?id=75-background_118047-5945.jpg)">
        <button type="button" style="float:right" class="btn btn-outline-primary btn-lg"><a href="adminpage.php">BACK</a></button>
<div class="container-fluid mt-5"> <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800" align=center>Officials List</h1> 
    <!-- DataTales Example --> 
    <div class="card shadow mb-4">
        <div class="card-header py-3"> 
            <h6 class="m-0 font-weight-bold text-primary"></h6> 
        </div> <div class="card-body"> 
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"> 
                <thead> <tr> <th>employee id</th>  <th>Name</th> <th>Designation</th> <th>Mobile no</th></tr> </thead> 
                <tbody> 
                    <?php 
                    $complaints=mysqli_query($conn,"SELECT * from officials  ");
                    while($row=mysqli_fetch_assoc($complaints)){
                    echo "<tr>";
                        echo"<td>".$row['empid']."</td>";
                        echo"<td>".$row['name']."</td>";
                         echo"<td>".$row['designation']."</td>";
                        echo"<td>".$row['official_mobno']."</td>";
                        echo "</tr>";
                    }
                    ?> 
                </tbody> 
            </table>
        
        </div> 
        </div> 
    </div> 
</div>
    </body>
</html>
