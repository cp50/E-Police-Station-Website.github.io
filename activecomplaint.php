<?php include "header.php";?>
<?php include "database.php";?>
<button type="button" style="float:right" class="btn btn-outline-primary btn-lg"><a href="complaint.php">BACK</a></button>
<div class="container-fluid mt-5"> <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Active complaints</h1> 
    <!-- DataTales Example --> 
    <div class="card shadow mb-4">
        <div class="card-header py-3"> 
            <h6 class="m-0 font-weight-bold text-primary"></h6> 
        </div> <div class="card-body"> 
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"> 
                <thead> <tr> <th>complaint details</th>  <th>Date and time</th> </tr> </thead> 
                <tbody> 
                    <?php 
                    $complaints=mysqli_query($conn,"SELECT * from complaint  where complainant_id='".$_SESSION['userid']."'and status='N'");
                    while($row=mysqli_fetch_assoc($complaints)){
                    echo "<tr>";
                        echo"<td>".$row['complaint_details']."</td>";
                        echo"<td>".$row['date']." ".$row['time']."</td>";
                        echo "</tr>";
                    }
                    ?> 
                </tbody> 
            </table>
        
        </div> 
        </div> 
    </div> 
</div>
