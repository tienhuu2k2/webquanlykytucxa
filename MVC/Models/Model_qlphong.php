<?php
class Model_qlphong extends ConnectDB{
    function phong_tk($phg,$tnh,$sosvo){
		$sql = "SELECT * FROM phong
		WHERE phong like '%$phg%' AND toanha like '%$tnh%' AND sosvo like '%$sosvo%'";
		return mysqli_query($this->con,$sql);
	}
	function phong_update($phg,$tnh,$sosvo){
		$sql = "UPDATE phong SET sosvo = '$sosvo' WHERE phong = '$phg' AND toanha='$tnh'";
		return mysqli_query($this->con,$sql);
	}
	public function sl_sv($phg,$tnh){
		$query="SELECT sosvo FROM phong
		WHERE toanha='$tnh' AND phong='$phg'";
		$result=mysqli_query($this->con, $query);
		$bien=0;
		while($row = mysqli_fetch_array($result))
		{
				$bien=$row['sosvo'];
		}
		return $bien;
	}

	public function check_isset_phong($phong,$toanha){
		$query = "SELECT * FROM phong
		WHERE phong='$phong' AND toanha='$toanha'";
		$row = mysqli_query($this->con, $query);
		$result=false;
		if(mysqli_num_rows($row)>0){
			$result = true;
		}
		return $result;
	}

	public function Insert_phong($phg,$tnh,$sosvo){
		$sql="INSERT INTO phong VALUES('$phg','$tnh','$sosvo')";
		return mysqli_query($this->con,$sql);
	}
	function phong_delete($phg,$tnh){
		$sql = "DELETE FROM phong WHERE phong = '$phg' AND toanha='$tnh'";
		return mysqli_query($this->con,$sql);
	}

}
?>