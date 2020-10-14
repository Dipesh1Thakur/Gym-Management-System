<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <title>Home</title>

</head>


<style type="text/css">
    *{
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }
    ul{
        float: right;
        text-transform: capitalize;
        list-style-type: none; 
        text-decoration: none;
        margin: 0;
        padding: 0;
</style>

<body style="background-color:lightgrey;">
  <?php require 'navbar.php'; ?>

<div class="container" style="margin-top: 10vh;">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                    <div class="card-body">
                       
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/6.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/3.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/7.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/8.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/5.jpg" alt="Third slide">
    </div>

  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="card mt-5">
 
     <div class="container d-flex"> 
      <div class="card-body">
        <h5 class="card-title">Packages</h5>
        <p class="card-text">This is your Destination for Acheiving your Goals.</p>
        <a href="package.php" class="btn btn-primary">View Packages >></a>
      </div>
       <div class="card-body">
        <h5 class="card-title">Facilities</h5>
        <p class="card-text">We Provide What You need to Be better than Before.</p>
        <a href="facili.php" class="btn btn-primary">View Facilities >></a>
      </div>
    </div>
    </div>
<div class="card bg-dark text-white">
  <div class="card-body">
    <div class="container">
    <h5 class="card-title">Grow your business with this Fitness Managment<strong class="text-primary"><h3>Software</h3></strong></h5>
    
    <a href="index.php" class=" text-primary">Home</a><br>
    <small class="card-text">You are not logged in.</small>
    <div class="copy"> &copy; 2020 Copyright ABOUT-FITNESS All Rights Reserved </div>
  </div>
  </div>
</div>




</body>
</html>