<?php  

include 'conn.php';

if(isset($_POST['edit'])){

	$id = $_GET['id'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$sql = "update datatable set id=$id, name='$name', email='$email', phone=$phone, address= '$address' where id=$id";

	$query=mysqli_query($con, $sql);
	// header('location:display.php');


// set message in session to display to the user after redirecting
	if($query){
		$_SESSION['success_message'] = 'User data updated successfully';
		header('Location:display.php');
		exit();
	}else{
		$_SESSION['error_message'] = 'Error encountered while updating';
		header('Location:update.php');
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

 </head>
 <body>
 

<div class=" p-3 mb-2 bg-dark text-white">
	<div class="container">
	<div class="h3">Admin Department</div>
	</div>
</div>

<div class="container">
<div class="row">
<div class="col-md-12 text-right mb-3">
<a href="display.php" class="btn btn-primary">Back</a>
</div>
</div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h5>Data / Update</h5></div>
                <div class="card-body">

                    <form method="POST">
                   
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
                    <button type="submit" name="edit" class="btn btn-primary">Update Data</button>
                    </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>



 </body>
 </html>