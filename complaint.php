<?php include "header.php";?>
<?php include "database.php";?>
<DOCTYPE html>
    <head>
        <button type="button" style="float:right" class="btn btn-outline-primary btn-lg"><a href="home.php">BACK</a></button>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
                <link rel="stylesheet" href="design.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <style>* { box-sizing: border-box; } body { font-family: Arial, Helvetica, sans-serif; } /* Float four columns side by side */ .column { float: left; width: 25%; padding: 0 10px; } /* Remove extra left and right margins, due to padding */ .row {margin: 0 -5px;} /* Clear floats after the columns */ .row:after { content: ""; display: table; clear: both; } /* Responsive columns */ @media screen and (max-width: 600px) { .column { width: 100%; display: block; margin-bottom: 20px; } } /* Style the counter cards */ .card { box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); padding: 16px; text-align: center; background-color: #f1f1f1; } </style>

    </head>
    <body style="background: url(https://media.istockphoto.com/id/1007122208/vector/grey-and-white-geometric-triangles-backgorund.jpg?s=612x612&w=0&k=20&c=Qk4uuwQUj4ElhWZ-E1qfnHIezG2ljxc2uAjtgEZxYWs=)"><h1 align=center>complaints</h1>

      <div class="row">
          <div class="column">
              <div class="card">
                  <h3>Previous complaints</h3>
                  <a href="previouscomplaint.php">click here</a>
                  <img class="card-img-top" src="https://prod-assets.mycivicapps.com/production/50fcbb1aa0e7601ef3aaa791609bdefa/issue_category_image/276654211.png">
              </div>
          </div>
          <div class="column">
              <div class="card">
              <h3>Active complaints</h3>
                  <a href="activecomplaint.php">click here</a>
                  <img class="card-img-top" src="https://w7.pngwing.com/pngs/296/66/png-transparent-computer-icons-complaint-complaints-cdr-angle-logo.png">
                  
              </div>
          </div>
        </div>
    </body>

    
</html>