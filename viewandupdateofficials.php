<?php include "header.php"; ?>
<?php include "database.php"; ?>
<html>
    <body style="background: url(https://www.marshallsindia.com/ImageBuckets/ItemImages/ZA%201903.jpg?id=75-background_118047-5945.jpg)">
        <button type="button" style="float:right" class="btn btn-outline-primary btn-lg"><a href="adminpage.php">BACK</a></button>
        <div class="container-fluid mt-5">
            <h1 class="h3 mb-2 text-gray-800" align=center>Officials List</h1>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"></h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Employee ID</th>
                                    <th>Name</th>
                                    <th>Designation</th>
                                    <th>Mobile No</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $officials = mysqli_query($conn, "SELECT * FROM officials");
                                while ($row = mysqli_fetch_assoc($officials)) {
                                    echo "<tr>";
                                    echo "<form method='POST'>";
                                    echo "<input type='hidden' name='id' value='".$row['empid']."'>";
                                    echo "<td>".$row['empid']."</td>";
                                    echo "<td><input type='text' name='name' value='".$row['name']."'></td>";
                                    echo "<td><input type='text' name='designation' value='".$row['designation']."'></td>";
                                    echo "<td><input type='text' name='mobile' value='".$row['official_mobno']."'></td>";
                                    echo "<td><input type='submit' name='update' value='Update'></td>";
                                    echo "</form>";
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
<?php
    if(isset($_POST['update'])) {
        $id = $_POST['empid'];
        $name = $_POST['name'];
        $designation = $_POST['designation'];
        $mobile = $_POST['mobile'];
        
        $update = mysqli_query($conn, "UPDATE officials SET name='$name', designation='$designation', official_mobno='$mobile' WHERE empid='$id'");
        
        if($update) {
            echo "<script>alert('Official details updated successfully!');</script>";
            echo "<script>window.location.href = 'adminpage.php';</script>";
        } else {
            echo "<script>alert('Failed to update official details.');</script>";
        }
    }
?>
