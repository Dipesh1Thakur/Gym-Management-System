

<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	<title>Details</title>
</head>
<body>


<div class=" p-3 mb-2 bg-dark text-white">
    <div class="container">
        <div class="h3">Admin Department 
        	<span style="float: right;">
        		<a href="search.php" style="text-decoration: none;color: white;">Search</a>
        	</span>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12 text-right mb-3">
        <a href="index.php" class="btn btn-primary">Back</a>
        </div>
    </div>
</div>

	<div class="container">
		<div class="col-lg-12">
			<div class="bg-light"><h2>Data / List</h2></div>
			<table class="table table-bordered mt-1">
				<tr class="bg-dark text-white">
					<th>ID</th>
					<th>Name</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Address</th>
					<th>Package</th>
				</tr>


<?php

	include 'conn.php';

	
	$sql = "select * from datatable";
	$query=mysqli_query($con, $sql);
	while ($res = mysqli_fetch_array($query)) {

?>

				<tr>
					<td> <?php echo $res['id']; ?> </td>
					<td> <?php echo $res['name']; ?> </td>
					<td> <?php echo $res['email']; ?> </td>
					<td> <?php echo $res['phone']; ?> </td>
					<td> <?php echo $res['address']; ?> </td>
					<td> <?php echo $res['package']; ?> </td>
					
				</tr>

<?php
 }
 ?>

			</table>
		</div>
	</div>

</body>
</html>