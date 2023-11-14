<?php
class Model_qlsinhvien extends ConnectDB{
	function lophoc_all(){
		$sql = "SELECT * FROM lophoc";
		return mysqli_query($this->con,$sql);
	}
    public function check_isset_msv($msv){
		$query = "SELECT masv FROM sinhvien 
		WHERE masv='$msv'";
		$row = mysqli_query($this->con, $query);
		$result=false;
		if(mysqli_num_rows($row)>0){
			$result = true;
		}
		return $result;
	}
	public function Insert_ins($msv,$tsv,$ngs,$qq,$gt,$sdt){
		$sql="INSERT INTO sinhvien VALUES('$msv','$tsv','$ngs','$qq','$gt','$sdt')";
		return mysqli_query($this->con,$sql);
	}

	function sinhvien_tk($msv,$tensv,$qq,$gt,$phg,$tnh){
		$sql = "SELECT sinhvien.*, hopdong.phong, hopdong.toanha
		FROM sinhvien
		JOIN hopdong ON sinhvien.masv = hopdong.masv
		WHERE sinhvien.masv like '%$msv%' AND  sinhvien.tensv like '%$tensv%' AND sinhvien.quequan like '%$qq%' AND sinhvien.gioitinh like '%$gt%' AND hopdong.phong like '%$phg%' AND hopdong.toanha like '%$tnh%'";
		return mysqli_query($this->con,$sql);
	}
	function sinhvien_delete($msv){
		$sql = "DELETE FROM sinhvien WHERE masv='$msv'";
		return mysqli_query($this->con,$sql);
	}
	
	function sinhvien_update($msv,$tsv,$ngs,$qq,$gt,$sdt){
		$sql = "UPDATE sinhvien SET tensv = '$tsv', ngaysinh='$ngs', quequan='$qq', gioitinh='$gt', sdt='$sdt' WHERE masv = '$msv'";
		return mysqli_query($this->con,$sql);
	}
}
?>