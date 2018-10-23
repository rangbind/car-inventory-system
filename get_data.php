<?php 
include('classes/database.php');
$manufacture = $_REQUEST['manufacture'];
$model = $_REQUEST['model'];
$type = $_REQUEST['type'];
$id = $_REQUEST['id'];
$obj = new database();

if ($type=='delete') {
 	echo $obj->delete($id);
}else{
	$res = $obj->get_data($manufacture,$model);
	$res = json_encode($res);
	echo $res;
}

?>