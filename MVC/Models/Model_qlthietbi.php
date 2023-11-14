<?php
class Model_qlthietbi extends ConnectDB{
    public function check_isset_mtb($mtb,$phg,$tnh){
		$query = "SELECT mathietbi FROM thietbi
		WHERE phong='$phg' AND toanha='$tnh' AND
		mathietbi='$mtb'";
		$row = mysqli_query($this->con, $query);
		$result=false;
		if(mysqli_num_rows($row)>0){
			$result = true;
		}
		return $result;
	}
	public function Insert_thietbi($phg,$tnh,$mtb,$ttb,$sl,$tt){
		$sql="INSERT INTO thietbi VALUES('$phg','$tnh','$mtb','$ttb','$sl','$tt')";
		return mysqli_query($this->con,$sql);
	}
	function thietbi_tk($phg,$tnh,$mtb,$ttb,$tt){
		$sql = "SELECT * FROM thietbi, phong
		WHERE thietbi.phong = phong.phong AND thietbi.toanha = phong.toanha AND mathietbi like '%$mtb%' AND phong.phong like '%$phg%' AND tenthietbi like '%$ttb%' AND phong.toanha like '%$tnh%' AND tinhtrang like '%$tt%'";
		return mysqli_query($this->con,$sql);
	}
	function thietbi_update($phg,$tnh,$mtb,$ttb,$sl,$tt){
		$sql = "UPDATE thietbi SET mathietbi = '$mtb',tenthietbi='$ttb',soluong='$sl', tinhtrang='$tt' WHERE phong='$phg' AND toanha='$tnh'";
		return mysqli_query($this->con,$sql);
	}
	function thietbi_delete($phg,$tnh){
		$sql = "DELETE FROM thietbi WHERE phong='$phg' AND toanha='$tnh'";
		return mysqli_query($this->con,$sql);
	}
	
}
?>