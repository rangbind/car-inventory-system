<?php 
include('classes/model.php');
$obj = new model();
$manu_arr = $obj->get_manu_data();

$db = new database();
$inve_arr = $db->get_inventory();

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
<style type="text/css">
  .view_popup{
    cursor: pointer;    
  }
  .view_popup:hover{
    background-color: grey !important;
    color: white;
  }
  .popup{
    border:2px solid black;
    border-radius: 5px;
    position: absolute;
    z-index: 10000;
    background-color: grey;
    top: 20%;
    color: white;
    /*margin-left: 15%;*/
  }
  td,tr{
    border:1px solid black;    
    padding: 2%;
  }
  #mytable tr:hover{
    background-color: white;
    color: black;
  }
</style>
<body style="height:1500px">
<script type="text/javascript">
  $(document).ready(function (e) {
    $('.view_popup').click(function(){
      var ids = $(this).attr('id');
      var iddd = ids.split("_");
      var id = iddd[0];
      var manufacture = iddd[1];
      var model = iddd[2];
      var new_value = manufacture+'_'+model;
      $('#reduce_id').val(new_value.replace(" ", ""));

      var url = 'get_data.php?manufacture='+manufacture+"&model="+model;
      $('#popup').css('display','');
      $.get(url,function(data,status){
        //console.log(data);
        var tabl = JSON.parse(data);
        $.each(tabl, function( index, value ) {
          //console.log(index+'--'+value['manufacture']); 
          var manu = value['manufacture'];
          var model_name = value['model_name'];
          var color = value['color'];
          var year = value['year'];
          var reg_no = value['reg_no'];
          var note = value['note'];
          var pic1 = "<img src='uploads/"+value['pic1']+"' height='50' width='50'>";
          var pic2 = "<img src='uploads/"+value['pic2']+"' height='50' width='50'>";        
          var str  = "<tr><td>"+manu+"</td><td>"+model_name+"</td><td>"+color+"</td><td>"+year+"</td><td>"+reg_no+"</td><td>"+note+"</td><td>"+pic1+"</td><td>"+pic2+"</td><td><button class='btn btn-primary sale' id='"+index+"'>SALE</button></td></tr>";
          $('#mytable').prepend(str);
        });
      })
    })
    $('#mytable').on('click','.sale', function(){
      var id = $('#reduce_id').val();
      id = "#"+id;
      var ttl_cnt = parseInt($(id).html());
      ttl_cnt = ttl_cnt-1;
      $(id).html(ttl_cnt);
      $(this).parents("tr").remove();
      var this_id = $(this).attr('id');
      var url  = 'get_data.php?id='+this_id+"&type=delete";
      $.get(url,function(data,status){

      })
    })
  })
</script>
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
  <h3>Inventory</h3>  
  <div class="row">    
  	<div class="col-sm-12">
      <table class="table table-bordered">
        <thead>
          <tr>
            <td>Serial Number</td>
            <td>Manufacturer Name</td>
            <td>Model Name</td>
            <td>Count</td>
          </tr>
        </thead>
        <thead>
          <?php
          
          foreach ($inve_arr as $k => $val) {
            echo "<tr class='view_popup' id='".$k."_".$val['manufacture']."_".$val['model_name']."'>";
            echo "<td>".$k."</td>";
            echo "<td>".$manu_arr[$val['manufacture']]."</td>";
            echo "<td>".$val['model_name']."</td>";
            echo "<td><label id='".str_replace(" ",'',$val['manufacture']."_".$val['model_name'])."'>".$val['cnt']."</label></td>";
            echo "</tr>";
          }
          ?>          
        </thead>
      </table>
    </div>    
  </div>
  <input type="hidden" name="reduce_id" id="reduce_id" value="">
  <!-- popup code here -->
  <div id="popup" class="popup" style="display: none;">
    <div class="row">
      <div class="col-sm-12">
        <table id="mytable" class="table table-bordered">
          <thead>
            <tr>
              <td>Manufaturere Name</td>
              <td>Model</td>
              <td>color</td>
              <td>Manufacturing Year</td>
              <td>Registration Number</td>
              <td>Note</td>
              <td colspan="2">images</td>
              <td>Action</td>
            </tr>
          </thead>
        </table>
      </div>
    </div>      
  </div>
  <!-- popup code end here -->
</div>
</body>
</html>
