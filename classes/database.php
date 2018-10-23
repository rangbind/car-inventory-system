<?php 
class database
{
	public $con = '';
	function __construct()
	{
		$this->con = new mysqli('host','username','password','database_name');		
	}
	public function create_manufature($value='')
	{	
		$db = $this->con;
		$name = $value['name'];
		$sql = "INSERT INTO `c_manufaturer`(`name`) VALUES ('$name')";
		$res = mysqli_query($db,$sql) or die(mysqli_error($db));		
		if ($res) {
			return 1;
		}
		//create manufature here
	}
	public function create_model($value='')
	{
		$db = $this->con;
		$manufacture = $value['manufacture'];
		$model = $value['model'];
		$color = $value['color'];
		$manufacturing_year = $value['manufacturing_year'];
		$reg_no = $value['reg_no'];
		$pic1_name = $value['pic1_name'];
		$pic2_name = $value['pic2_name'];
		$note = $value['note'];
		$sql = "INSERT INTO `c_model`(`manufacture_id`, `model_name`, `color`, `year`, `reg_no`, `note`, `pic1`, `pic2`) VALUES ('$manufacture','$model','$color','$manufacturing_year','$reg_no','$note','$pic1_name','$pic2_name')";
		$res = mysqli_query($db,$sql);
		if ($res) {
			return 1;
		}

	}
	public function get_manu_data($value='')
	{
		$db = $this->con;
		$manu_arr = array();
		$sql = "select id , name from c_manufaturer";
		$res = mysqli_query($db,$sql);
		while ($raw = mysqli_fetch_assoc($res)) {
			$manu_arr[$raw['id']] = $raw['name'];
		}
		return $manu_arr;
	}

	public function get_inventory($value='')
	{
		$db = $this->con;
		$data_arr = array();
		$i = 1;
		$sql = "SELECT count(id) as cnt,manufacture_id,model_name FROM `c_model` group by manufacture_id,model_name";
		$res = mysqli_query($db,$sql);
		while ($raw = mysqli_fetch_assoc($res)) {
			$data_arr[$i]['manufacture'] = $raw['manufacture_id'];
			$data_arr[$i]['model_name'] = $raw['model_name'];
			$data_arr[$i]['cnt'] = $raw['cnt'];
			$i++;
		}
		return $data_arr;
	}
	public function get_data($manu,$model)
	{
		$db = $this->con;
		$data_arr = array();
		$manu_arr = self::get_manu_data();

		$sql = "SELECT `id`, `manufacture_id`, `model_name`, `color`, `year`, `reg_no`, `note`, `pic1`, `pic2`, `created_on` FROM `c_model` WHERE `manufacture_id`='$manu' and `model_name`='$model'";
		$res = mysqli_query($db,$sql);
		while ($raw = mysqli_fetch_assoc($res)) {
			$data_arr[$raw['id']]['manufacture'] = $manu_arr[$raw['manufacture_id']];
			$data_arr[$raw['id']]['model_name'] = $raw['model_name'];
			$data_arr[$raw['id']]['color'] = $raw['color'];
			$data_arr[$raw['id']]['year'] = $raw['year'];
			$data_arr[$raw['id']]['reg_no'] = $raw['reg_no'];
			$data_arr[$raw['id']]['note'] = $raw['note'];
			$data_arr[$raw['id']]['pic1'] = $raw['pic1'];
			$data_arr[$raw['id']]['pic2'] = $raw['pic2'];
		}
		return $data_arr;
	}
	public function delete($id)
	{
		$db = $this->con;
		$sql = "delete from c_model where id='$id'";
		$res = mysqli_query($db,$sql);
		if ($res) {
			return 1;
		}
	}
}
?>
