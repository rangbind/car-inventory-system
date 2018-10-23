<?php 
include('database.php');

class manufacturer extends database
{
	
	public function create_new_manufaturer($value='')
	{
		$db = new database();
		return $db->create_manufature($value);
	}
	public function get_manufaturer_details($value='')
	{
		$db = new database();

	}
}
?>