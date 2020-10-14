<?php

include 'conn.php';

if(isset($_POST['done'])){

    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];

    $sql = "INSERT INTO `users` (`username`, `email`, `phone`, `pass`, `repass`) VALUES ('$username', '$email', '$phone','$password', '$repassword')";
    $query=mysqli_query($con, $sql);

    // set message in session to display to the user after redirecting
    if($query){
        $_SESSION['success_message'] = ' data added successfully';
        header('reg:reg.php');
        exit();
    }else{
        $_SESSION['error_message'] = 'Error encountered while adding';
        header('Location:reg.php');
        exit();
    }
}
?>

<!DOCTYPE html>
 <html>
 <head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

 	<title></title>
 

<div class=" p-3 mb-2 bg-dark text-white">
	<div class="container">
	<div class="h3">User Department</div>
	</div>
</div>

<div class="container">
<div class="row">
<div class="col-md-12 text-right mb-3">
<a href="index.php" class="btn btn-primary">Back</a>
</div>
</div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h5>User Register Form</h5></div>
                <div class="card-body">

                    <form method="post" name="myform" id="formlogin">
                   
                    <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" id="username" class="form-control">
                    </div>

                    <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" id="email" class="form-control">
                    </div>

                    <div class="form-group">
                    <label>Phone</label>
                    <input type="number" name="phone" id="phone" class="form-control">
                    </div>

                    <div class="form-group"> 
                    <label>Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                    </div>

                    <div class="form-group"> 
                    <label>Confirm-Password</label>
                    <input type="password" name="repassword" id="repassword" class="form-control">
                    </div>

                    <div class="form-group">
                    <button type="submit" name="done" onclick="validate()" class="btn btn-primary mt-3">Register</button>
                    </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="card bg-dark text-white mt-5">
  <div class="card-body">
    <div class="container">
    <h5 class="card-title">Grow your business with this Fitness Managment<strong class="text-primary"><h3>Software</h3></strong></h5>
    
    <a href="index.php" class=" text-primary">Home</a><br>
    <small class="card-text">You are not logged in.</small>
    <div class="copy"> &copy; 2020 Copyright ABOUT-FITNESS All Rights Reserved </div>
  </div>
  </div>
</div>

<script type="text/javascript" src="reg.js"></script>

 </body>
 </html>