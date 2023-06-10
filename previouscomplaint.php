<?php include "header.php";?>
<?php include "database.php";?>
<button type="button" style="float:right" class="btn btn-outline-primary btn-lg"><a href="complaint.php">BACK</a></button>
<div class="container-fluid mt-5"> <!-- Page Heading -->
    
    <h1 class="h3 mb-2 text-gray-800">Complaint History</h1> 
     
    <!-- DataTales Example --> 
    <div class="card shadow mb-4">
        <div class="card-header py-3"> 
            <h6 class="m-0 font-weight-bold text-primary"></h6> 
        </div> <div class="card-body"> 
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"> 
                <thead> <tr> <th>complaint details</th> <th>Description</th> <th>Date and time</th> <th>FIR</th> </tr> </thead> 
                <tbody> 
                    <?php 
                    $complaints=mysqli_query($conn,"SELECT * from complaint  where complainant_id='".$_SESSION['userid']."'and status='Y'");
                    while($row=mysqli_fetch_assoc($complaints)){
                    echo "<tr>";
                        echo"<td>".$row['complaint_details']."</td>";
                        echo"<td>".$row['status_description']."</td>";
                        echo"<td>".$row['date']." ".$row['time']."</td>";
                        $fir=mysqli_query($conn,"select firno from fir where complaint_no='".$row['complaintno']."'");
                         while($rows=mysqli_fetch_assoc($fir))
                        echo"<td> <a href='officialfirview.php?id=".$rows['firno']."'>view</a>  </td>";
                        echo "</tr>";
                    }
                    ?> 
                </tbody> 
            </table>
        
        </div> 
        </div> 
    </div> 
</div>
