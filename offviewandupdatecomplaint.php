<?php include "header.php";?>
<?php include "database.php";?>
<html>
    <body style="background: url(https://media.istockphoto.com/id/1007122208/vector/grey-and-white-geometric-triangles-backgorund.jpg?s=612x612&w=0&k=20&c=Qk4uuwQUj4ElhWZ-E1qfnHIezG2ljxc2uAjtgEZxYWs=)"> 
        <button type="button" style="float:right" class="btn btn-outline-primary btn-lg"><a href="officialspage.php">BACK</a></button>
<div class="container-fluid mt-5"> <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800" align=center>View and upadte complaints</h1> 
    <!-- DataTales Example --> 
    <div class="card shadow mb-4">
        <div class="card-header py-3"> 
            <h6 class="m-0 font-weight-bold text-primary"></h6> 
        </div> <div class="card-body"> 
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"> 
                <thead> <tr><th> name</th><th>complaint details</th> <th>Description</th> <th>Date and time</th><th>address</th><th>contact</th><th>Update</th>  <th>create FIR</th> </tr> </thead> 
                <tbody> 
                    <?php 
                    $complaints=mysqli_query($conn,"SELECT * from complaint  where  status='N'");
                    while($row=mysqli_fetch_assoc($complaints)){
                    echo "<tr>";
                        $cid=$row['complainant_id'];
                        $id=$row['complaintno'];
                         $user=mysqli_query($conn,"SELECT * from users  where  userid='$cid'");
                        echo "<form method='GET' > ";
                    while($rows=mysqli_fetch_assoc($user))
                    {
                        echo "<input type='text' name='id' hidden value='$id'>";
                        echo"<td>".$rows['name']."</td>";
                                                                        
                        echo"<td>".$row['complaint_details']."</td>";
                        echo"<td><select value='".$row['status_description']."' name='description' >
    <option value='inprogress' hidden>inprogress</option>
    <option value='inprogress'>inprogress</option>
    <option value='fir created'>fir created</option>
</select></td>";
                        echo"<td>".$row['date']." ".$row['time']."</td>";
                        echo"<td>".$rows['housename']."<br>".$rows['place']."<br>".$rows['district']."<br>".$rows['state']."<br>".$rows['pin']."</td>"; 
                         echo"<td>".$rows['mobileno']."<br>".$rows['email']."</td>";
                        echo "<td><input type='submit' name='submit'></td>";
                        echo"<td> <a href='createFIR.php?id=$cid&coid=".$row['complaintno']."'>go</a> </td>";
                        echo "</tr>";
                    }}
                    echo"</form>"
                    ?> 
                </tbody> 
            </table>
        
        </div> 
        </div> 
    </div> 
</div>
    </body>
</html>
<?php
                        if(isset($_GET['description'])){
   if($_GET['description']=='fir created') 
$update=mysqli_query($conn,"UPDATE `complaint` SET `status_description` = '".$_GET['description']."' ,`status` = 'Y' WHERE `complaint`.`complaintno` = '".$_GET['id']."';");
                            else
                              $update=mysqli_query($conn,"UPDATE `complaint` SET `status_description` = '".$_GET['description']."' WHERE `complaint`.`complaintno` = '".$_GET['id']."';");  
                    if($update){
                        ?><script>location.replace("offviewandupdatecomplaint.php");</script><?php
                    }
                          }
?>
