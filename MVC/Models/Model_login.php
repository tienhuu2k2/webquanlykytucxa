<?php
class Model_login extends ConnectDB{
    public function check_isset_username($tdn){
		$query = "SELECT tendn FROM canbo 
		WHERE tendn='$tdn'";
		$row = mysqli_query($this->con, $query);
		$result=false;
		if(mysqli_num_rows($row)>0){
			$result = true;
		}
		return $result;
	}
	// public function check_isset_password($tdn,$mk){
	// 	$query = "SELECT mk FROM canbo 
	// 	WHERE mk='$mk'";
	// 	$row = mysqli_query($this->con, $query);
	// 	$result=false;
	// 	if(mysqli_num_rows($row)>0){
	// 		$result = true;
	// 	}
	// 	return $result;

	// 	//sai!
	// 	// $query = "SELECT mk FROM register";
	// 	// $row = $this->con->query($query)->fetch_assoc();
	// 	// $result=true;
	// 	// if ($mk != $row['mk']){
	// 	// 	$result=false;
	// 	// }
	// 	// return $result;
	// }
	public function check_mk($tdn,$mk){
		$boolean=false;
		$bien='';
		$query="SELECT mk FROM canbo
		WHERE tendn='$tdn'";
		$result=mysqli_query($this->con, $query);
		if(mysqli_num_rows($result)>0){
			while($row = mysqli_fetch_array($result))
			{
				$bien=$row['mk'];
			}
		}
		
		if($mk==$bien){
			$boolean=true;
		}
		return $boolean;
	}

	public function display_usernam($tdn){
		
		$query="SELECT tencb FROM canbo
		WHERE tendn='$tdn'";
		$result=mysqli_query($this->con, $query);
		while($row = mysqli_fetch_array($result))
		{
				$bien=$row['tencb'];
		}
		return $bien;
	}
	public function check_phanquyen($tdn,$mk){
		
		$query="SELECT macb FROM canbo
		WHERE tendn='$tdn' AND mk='$mk'";
		$result=mysqli_query($this->con, $query);
		while($row = mysqli_fetch_array($result))
		{
				$macb=$row['macb'];
		}
		return $macb;
	}
}
?>