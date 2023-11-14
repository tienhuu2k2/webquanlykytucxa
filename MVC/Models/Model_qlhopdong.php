<?php
class Model_qlhopdong extends ConnectDB{
	
    public function check_isset_mahopdong($mahopdong){
		$query = "SELECT mahopdong FROM hopdong 
		WHERE mahopdong='$mahopdong'";
		$row = mysqli_query($this->con, $query);
		$result=false;
		if(mysqli_num_rows($row)>0){
			$result = true;
		}
		return $result;
	}
	public function Insert_ins($mahopdong,$msv,$phg,$tnh,$ngl,$ngkt,$tienpd,$tiendd,$tienct,$nguoilp,$trangthai){
		$sql="INSERT INTO hopdong VALUES('$mahopdong','$msv','$phg','$tnh','$ngl','$ngkt','$tienpd','$tiendd','$tienct','$nguoilp','$trangthai')";
		return mysqli_query($this->con,$sql);
	}

	function hopdong_tk($mahopdong,$masv,$phg,$tnh,$kyhan=''){
		// $sql = "SELECT * FROM hopdong
		// WHERE toanha like '%$tnh%' AND phong like '%$phg%' AND mahopdong like '%$mahopdong%' AND masv like '%$masv%' ".(!empty($kyhan))?$kyhan:''."";
		// return mysqli_query($this->con,$sql);
		if(!empty($kyhan)){
			$sql = "SELECT hopdong.*,sinhvien.tensv FROM hopdong JOIN sinhvien ON hopdong.masv=sinhvien.masv AND hopdong.toanha like '%$tnh%' AND hopdong.phong like '%$phg%' AND hopdong.mahopdong like '%$mahopdong%' AND hopdong.masv like '%$masv%' AND PERIOD_DIFF(EXTRACT(YEAR_MONTH FROM ngaykt), EXTRACT(YEAR_MONTH FROM ngaylap))=$kyhan";
		}else{
			$sql = "SELECT hopdong.*,sinhvien.tensv FROM hopdong JOIN sinhvien ON hopdong.masv=sinhvien.masv AND hopdong.toanha like '%$tnh%' AND hopdong.phong like '%$phg%' AND hopdong.mahopdong like '%$mahopdong%' AND hopdong.masv like '%$masv%'";
		}
		//return $sql;
		return mysqli_query($this->con,$sql);
	}
	
	
	function hopdong_update($mahopdong,$phg,$tnh,$ngl,$ngkt,$tienpd,$tiendd,$tienct,$nguoilp){
		$sql = "UPDATE hopdong SET phong='$phg', toanha='$tnh', ngaylap='$ngl', ngaykt='$ngkt', tienphaidong='$tienpd', tiendadong='$tiendd', tienconthieu='$tienct', macb='$nguoilp' WHERE mahopdong = '$mahopdong'";
		return mysqli_query($this->con,$sql);
	}
	function hopdong_update_trangthai($mahopdong,$trangthai){
		$sql = "UPDATE hopdong SET trangthai='$trangthai' WHERE mahopdong = '$mahopdong'";
		return mysqli_query($this->con,$sql);
	}
	function hopdong_update_ttsv($masv,$tsv,$mlp){
		$sql = "UPDATE hopdong SET tensv='$tsv', malop='$mlp' WHERE masv = '$masv'";
		return mysqli_query($this->con,$sql);
	}
	function hopdong_update2($mahopdong,$tienct,$tiendd){
		$sql = "UPDATE hopdong SET tienconthieu='$tienct', tiendadong='$tiendd' WHERE mahopdong = '$mahopdong'";
		return mysqli_query($this->con,$sql);
	}
	public function display_tien_thieu($mahopdong){
		
		$query="SELECT tienconthieu FROM hopdong
		WHERE mahopdong='$mahopdong'";
		$result=mysqli_query($this->con, $query);
		while($row = mysqli_fetch_array($result))
		{
				$bien=$row['tienconthieu'];
		}
		return $bien;
	}
	function hopdong_delete($mahopdong){
		$sql = "DELETE FROM hopdong WHERE mahopdong='$mahopdong'";
		return mysqli_query($this->con,$sql);
	}
}
?>