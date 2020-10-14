<?php

if ($_SERVER['REQUEST_METHOD']=='POST'){
$username = $_POST['username'];
$password = $_POST['password'];
require_once('conn.php');
$sql= "SELECT * FROM admin WHERE username = '$username' AND password = '$password' ";
$result = mysqli_query($con,$sql);
$check = mysqli_fetch_array($result);
if(isset($check)){
$_SESSION['success_message'] = ' login successfull';
    header('Location:insert.php');
    exit();
}else{
$_SESSION['error_message'] = 'login failed';
    header('Location:adminlogin.php');
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

	<title>Login</title>
</head>

<style type="text/css"><style type="text/css">
  #cover {
    background: #222 url('https://unsplash.it/1920/1080/?random') center center no-repeat;
    background-size: cover;
    height: 100%;
    text-align: center;
    display: flex;
    align-items: center;
    position: relative;
}

#cover-caption {
    width: 100%;
    position: relative;
    z-index: 1;
}

/* only used for background overlay not needed for centering */
form:before {
    content: '';
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
    background-color: rgba(0,0,0,0.3);
    z-index: -1;
    border-radius: 10px;
}
</style>

<body style="background-color:lightblue;">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand ml-5" href="#">About Fitness Health</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  
</nav>

<section id="cover" class="min-vh-100" style="margin-top: 20vh;">
    <div id="cover-caption">
        <div class="container">
            <div class="row text-white">
                <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
                    <h3 class="display-4 py-4 text-truncate" style="font-size: 3rem;
                    font-weight: 350;
                    "> Admin Login </h3>
                    <div class="px-2">
                        
                        <form id="formlogin" method="post" name="myform" class="justify-content-center">
                            <div class="form-group">
                                <input type="text" class="form-control" name="username" id="username" placeholder="username" >
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" id="password" placeholder="password">
                            </div>
                            <button type="submit" id="submit" onclick="validate()" class="btn btn-primary">Login</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
	
	<div class="card bg-dark text-white">
  <div class="card-body">
    <div class="container">
    <h5 class="card-title">Grow your business with this Fitness Managment<strong class="text-primary"><h3>Software</h3></strong></h5>
    

    <small class="card-text">You are not logged in.</small>
    <div class="copy"> &copy; 2020 Copyright ABOUT-FITNESS All Rights Reserved </div>
  </div>
  </div>
</div>

  <script type="text/javascript">
    function validate(){
var username = document.getElementById("username").value;
var password = document.getElementById("password").value;

if(username == ""){
    alert("Please enter a User Name")
    formlogin.username.focus()
    return false
}
// password validattion
if(password == ""){
    alert("Please enter a Password")
    formLogin.password.focus()
    return false
    }
}
  </script>

</body>
</html>