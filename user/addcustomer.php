<?php 

include 'conn.php';

if(isset($_POST['done'])){

	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
    $package = $_POST['package'];

	$sql = "INSERT INTO `datatable`(`name`, `email`, `phone`, `address`, `package`) VALUES ('$name', '$email', '$phone','$address', '$package')";
	$query=mysqli_query($con, $sql);

	// set message in session to display to the user after redirecting
	if($query){
		$_SESSION['success_message'] = ' data added successfully';
		header('Location:addcustomer.php?success_message=$success_message');
		exit();
	}else{
		$_SESSION['error_message'] = 'Error encountered while adding';
		header('Location:addcustomer.php');
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
	<div class="h3">Book Packages <span style="float: right;font-weight: 50;font-size: 20px;"><a href="index.php">Logout</a></span></div>
	</div>
</div>

<div class="container">
<div class="row">
<div class="col-md-12 text-right mb-3">
<!-- <a href="#" class="btn btn-primary">ADD</a> -->
</div>
</div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h5>Data / ADD</h5></div>
                <div class="card-body">

                    <form method="post">
                   
                    <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control">
                    </div>

                    <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control">
                    </div>

                    <div class="form-group">
                    <label>Phone</label>
                    <input type="number" name="phone" class="form-control">
                    </div>

                    <div class="form-group"> 
                    <label>Address</label>
                    <input type="text" name="address" class="form-control">
                     </div>

                     <div class="form-group"> 
                    <label>Package Name</label>
                    <input type="text" name="package" class="form-control">
                     </div>

                    <div class="form-group">
                    <button type="submit" name="done" class="btn btn-primary">Save Data</button>
                    </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

 </body>
 </html>