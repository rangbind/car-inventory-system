<?php 
include('classes/model.php');
$obj = new model();
$manu_arr = $obj->get_manu_data();

if (isset($_REQUEST['submit']) && $_REQUEST['manufacture']!='' && $_REQUEST['model']!='' && $_REQUEST['color']!='' && $_REQUEST['manufacturing_year']!='' && $_REQUEST['reg_no']!='' && $_REQUEST['pic1_name']!='' && $_REQUEST['pic2_name']!='') { 

  $arr['manufacture'] = $_REQUEST['manufacture'];
  $arr['model'] = $_REQUEST['model'];
  $arr['color'] = $_REQUEST['color'];
  $arr['manufacturing_year'] = $_REQUEST['manufacturing_year'];
  $arr['reg_no'] = $_REQUEST['reg_no'];
  $arr['pic1_name'] = $_REQUEST['pic1_name'];
  $arr['pic2_name'] = $_REQUEST['pic2_name'];
  $arr['note'] = $_REQUEST['note'];

  $res = $obj->create_new_model($arr);
  if ($res==1) {
    echo "<script>alert('new manufacture added sucessfully');</script>";
  }else{
    echo "<script>alert('new manufacture not added');</script>";
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
  <link rel="stylesheet" href="js/jquery.dropdown.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/jquery.dropdown.min.js"></script>
  <script src="js/script.js"></script>  
</head>
<body style="height:1500px">

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand">CAR INVENTRY</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="home.php">add manufacturer</a></li>
      <li class="active"><a href="add_model.php">add model</a></li>
      <li><a href="view_inventory.php">view Inventory</a></li>      
    </ul>
  </div>
</nav>
  
<div class="container" style="margin-top:50px">
  <h3>Add Model</h3>
  <div class="row">
  	<form action="" method="post">
  	<div class="col-md-5">
  		<label>Select Manufacture : <font color="red"> * </font> </label>
        <select class="form-control" name="manufacture" id="manufacture" class="form-control">
            <option value="">--select--</option>
            <?php
            foreach ($manu_arr as $k => $val) {
              echo "<option value='".$k."'>".$val."</option>";
            }
            ?>
        </select>  
    </div>
    <div class="col-md-5">
      <label>Model Name : <font color="red"> * </font></label>
      <input type="text" name="model" id="model" class="form-control" required="" placeholder="model name">
    </div>
    <div class="col-md-10">
      <label>Color : <font color="red"> * </font></label>
      <input type="text" name="color" id="color" class="form-control" required="" placeholder="color">
    </div>
    <div class="col-md-10">
      <label>Manufacturing Year : <font color="red"> * </font></label>
      <select class="form-control" name="manufacturing_year" id='manufacturing_year' required="">
          <option value="2018">2018</option>
          <option value="2017">2017</option>
          <option value="2016">2016</option>
          <option value="2015">2015</option>
      </select>
    </div>
    <div class="col-md-10">
      <label>Registration Number : <font color="red"> * </font></label>
      <input type="text" class="form-control" name="reg_no" id="reg_no" required="" placeholder="Registration No.">
    </div>
    <div class="col-md-10">
      <label>Note : </label>
      <textarea class="form-control" id="note" name="note">
        
      </textarea>
    </div>

    <div class="col-md-5">
      <label>Pic 1 :</label><br>
      <input type="file" name="pic1" id="pic1" class="form-control">
    </div>
    <div class="col-md-5">      
      <label>Pic 2 :</label><br>
      <input type="file" name="pic2" id="pic2" class="form-control"><br>
    </div>    
    
    <div class="col-md-5">     
      <img id='preview1' src="" style="display: none;">
      <input type="hidden" name="pic1_name" id="pic1_name">
    </div>
    <div class="col-md-5"> <br>
      <img id='preview2' src="" style="display: none;">
      <input type="hidden" name="pic2_name" id="pic2_name">
    </div>

    <div class="col-md-12"> <br>
        <input type="submit" name="submit" class="btn btn-primary">
    </div>  
  	</form>    
  </div>
</div>
</body>
</html>
