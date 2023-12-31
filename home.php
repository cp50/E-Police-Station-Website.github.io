<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body {
            background: url(https://coolbackgrounds.io/images/backgrounds/white/white-unsplash-9d0375d2.jpg);
        }
        
        .card-deck {
            margin-top: 50px;
        }
        
        .card {
            max-width: 300px;
            margin-bottom: 20px;
        }
        
        .card img {
            height: 200px;
            object-fit: cover;
        }
        
        .card-title {
            font-size: 20px;
            font-weight: bold;
        }
        
        .card-text {
            font-size: 14px;
        }
        
        footer {
            background-color: rgba(0, 0, 0, 0.2);
            font-weight: bold;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>
    <button type="button" style="float:left" class="btn btn-outline-primary btn-lg"><a href="register.php">Register</a></button>
    <button type="button" style="float:right" class="btn btn-outline-primary btn-lg"><a href="login.php" style="text-decoration:none">Login</a></button>
    <button type="button" style="float:right" class="btn btn-outline-primary btn-lg"><a href="logout.php" style="text-decoration:none">Logout</a></button>
    <button type="button" style="float:right" class="btn btn-outline-primary btn-lg"><a href="officialslogin.php" style="text-decoration:none">Officials Login</a></button>
    <button type="button" style="float:left" class="btn btn-outline-primary btn-lg"><a href="getid.php">Forgot ID</a></button>
    <h1 align="center">E-POLICE STATION</h1><br><br>

    <div class="card-deck">
        <div class="card">
            <img class="card-img-top" src="https://www.shutterstock.com/image-vector/complaint-concept-claim-petition-man-260nw-1049123036.jpg">
            <div class="card-body">
                <h5 class="card-title">Complaint Registration</h5>
                <p class="card-text"><small class="text-muted"><a href="complaintreg.php">Click here</a></small></p>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTJBVcFIbUVbxKLlXm94xpj-iWD-3wTeQ1PADQpTFhFPQ&usqp=CAU&ec=48665701" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">View FIR</h5>
                <p class="card-text"><small class="text-muted"><a href="fir.php">View details</a></small></p>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="https://cdn5.vectorstock.com/i/1000x1000/64/24/complaint-rubber-stamp-vector-17746424.jpg">
            <div class="card-body">
                <h5 class="card-title">View Complaint</h5>
                <p class="card-text"><small class="text-muted"><a href="complaint.php">Click here</a></small></p>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="https://www.pngguru.in/storage/uploads/images/Red%20Live%20Text%20free%20transparent%20png_1657819996_531168101.webp" alt="">
            <div class="card-body">
                <h5 class="card-title">Live</h5>
                <p class="card-text"><small class="text-muted"><a href="live.php">Live Update</a></small></p>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="https://www.shutterstock.com/image-vector/official-grunge-rubber-stamp-vector-260nw-1101157175.jpg">
            <div class="card-body">
                <h5 class="card-title">Station Officers</h5>
                <p class="card-text"><small class="text-muted"><a href="officers.php">Click here</a></small></p>
            </div>
        </div>
    </div>

    <br><button type="button" style="float:right" class="btn btn-outline-primary btn-lg"><a href="adminlogin.php" style="text-decoration:none">Admin Login</a></button>
    <br><br><br><br><br>
    
    <footer class="bg-light text-center text-lg-start">
        <div class="text-center p-3">
            Email: helpcenter@gmail.com &nbsp;&nbsp; Phone: 123456778
        </div>
    </footer>
</body>
</html>
