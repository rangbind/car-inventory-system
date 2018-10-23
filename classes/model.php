<?php 
include('database.php');

class model extends database
{
	
	public function create_new_model($value='')
	{
		$db = new database();
		if (count($value)>0) {
			return $db->create_model($value);
		}
		
	}
	public function get_model_details($value='')
	{
		$db = new database();
		return $db->get_manu_data();
	}
}
?>