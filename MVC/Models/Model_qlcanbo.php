<?php
class Model_qlcanbo extends ConnectDB{
    public function check_isset_mcb($mcb){
		$query = "SELECT macb FROM canbo 
		WHERE macb='$mcb'";
		$row = mysqli_query($this->con, $query);
		$result=false;
		if(mysqli_num_rows($row)>0){
			$result = true;
		}
		return $result;
	}

	public function check_isset_tdn($tdn){
		$query = "SELECT tendn FROM canbo 
		WHERE tendn='$tdn'";
		$row = mysqli_query($this->con, $query);
		$result=false;
		if(mysqli_num_rows($row)>0){
			$result = true;
		}
		return $result;
	}
	
	public function Insert_canbo($tdn,$mk,$mcb,$tcb,$email,$sdt,$dc){
		$sql="INSERT INTO canbo VALUES('$tdn','$mk','$mcb','$tcb','$email','$sdt','$dc')";
		return mysqli_query($this->con,$sql);
	}
	function canbo_tk($mcb,$tencb){
		$sql = "SELECT * FROM canbo
		WHERE macb like '%$mcb%' AND tencb like '%$tencb%'";
		return mysqli_query($this->con,$sql);
	}
	function canbo_update($tendn,$mk,$mcb,$tcb,$email,$sdt,$dc){
		$sql = "UPDATE canbo SET tendn='$tendn', mk='$mk',tencb = '$tcb',email='$email',sdt='$sdt',dc='$dc' WHERE macb = '$mcb'";
		return mysqli_query($this->con,$sql);
	}
	function canbo_delete($mcb){
		$sql = "DELETE FROM canbo WHERE macb='$mcb'";
		return mysqli_query($this->con,$sql);
	}
}
?>