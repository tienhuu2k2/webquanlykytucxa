<?php
class Model_qlhoadon extends ConnectDB{
    public function check_isset_mhd($mhd){
		$query = "SELECT hoadon FROM hoadon 
		WHERE hoadon='$mhd'";
		$row = mysqli_query($this->con, $query);
		$result=false;
		if(mysqli_num_rows($row)>0){
			$result = true;
		}
		return $result;
	}
	public function Insert_hoadon($mhd,$phg,$tnh,$sd,$tsd,$gid,$td,$sn,$snd,$gin,$tn,$lwf,$tienwf,$ngay,$thang,$nam,$ttien,$nguoilap,$trangthai,$ghichu){
		$sql="INSERT INTO hoadon VALUES('$mhd','$phg','$tnh','$sd','$tsd','$gid','$td','$sn','$snd','$gin','$tn','$lwf','$tienwf','$ngay','$thang','$nam','$ttien','$nguoilap','$trangthai','$ghichu')";
		return mysqli_query($this->con,$sql);
	}
	function hoadon_tk($mhd,$phg,$tnh,$thang,$nam,$tt){
		$sql = "SELECT * FROM hoadon, phong
		WHERE hoadon.phong = phong.phong AND hoadon.toanha = phong.toanha AND hoadon like '%$mhd%' AND phong.phong like '%$phg%' AND phong.toanha like '%$tnh%' AND thang like'%$thang%' AND nam like '%$nam%' AND trangthai like '%$tt%'";
		return mysqli_query($this->con,$sql);
	}
	
	function hoadon_update($mhd,$phg,$tnh,$sdm,$sd,$gid,$td,$snm,$sn,$gin,$tn,$lwf,$tienwf,$ngay,$thang,$nam,$ttien,$nguoilap,$trangthai,$ghichu){
		$sql = "UPDATE hoadon SET toanha='$tnh',phong='$phg',sodien='$sdm', sodiendadung='$sd', giadien='$gid', tiendien='$td',sonuoc='$snm', sonuocdadung='$sn', gianuoc='$gin',tiennuoc='$tn', loaiwifi='$lwf', giawifi='$tienwf', ngay='$ngay', thang='$thang', nam='$nam', thanhtien='$ttien', nguoilap='$nguoilap', trangthai='$trangthai', ghichu='$ghichu' WHERE hoadon = '$mhd'";
		return mysqli_query($this->con,$sql);
	}
	function hoadon_delete($mhd){
		$sql = "DELETE FROM hoadon WHERE hoadon='$mhd'";
		return mysqli_query($this->con,$sql);
	}

	// hàm tìm kiếm tháng gần với tháng đã cho nhất
	function query($month,$year,$phg,$tnh){
		$sql ="SELECT sodien,sonuoc
		FROM hoadon
		WHERE thang=(SELECT MAX(thang)
		FROM hoadon
		WHERE thang<$month AND nam=$year) AND nam=$year";
		return mysqli_query($this->con,$sql);
	}
}
?>