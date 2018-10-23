<?php 
if (isset($_REQUEST['submit']) && $_REQUEST['name']!='') {	
	$arr['name'] = $_REQUEST['name'];
	
  include('classes/manufacturer.php');
	$obj = new manufacturer();  
	$res = $obj->create_new_manufaturer($arr);
	
  if($res==1){
		echo "<script>alert('new manufacture added suucessfully');</script>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>CI</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="height:1500px">

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand">CAR INVENTRY</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home.php">add manufacturer</a></li>
      <li><a href="add_model.php">add model</a></li>
      <li><a href="view_inventory.php">view Inventory</a></li>      
    </ul>
  </div>
</nav>
  
<div class="container" style="margin-top:50px">
  <h3>Add Manufacturer</h3>
  <div class="row">
  	<form action="" method="post">
  	<div class="col-md-4">
  		<label>Manufacture Name : </label>
        <input type="text" class="form-control" name="name" id="name" required="" placeholder="name">  
    </div>
    <div class="col-md-12"> <br>
      	<input type="submit" name="submit" class="btn btn-primary">
    </div>
  	</form>    
  </div>
</div>
</body>
</html>
