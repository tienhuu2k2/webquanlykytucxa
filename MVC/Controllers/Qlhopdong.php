<?php
class Qlhopdong extends Controller{
    public $tk;
    function __construct()
    {
        $this->tk=$this->model("Model_qlhopdong");
        $this->sv=$this->model("Model_qlsinhvien");
        $this->phg=$this->model("Model_qlphong");
        $this->hd=$this->model("Model_qlhoadon");
    }
    function Hopdong_find(){
    	$this->view("ViewMaster",[
            "page_find_hopdong"=>"Qlhopdong_view",
			'dl'=>$this->tk->hopdong_tk('','','','')
    	]);
        
    }
    function TrangChu(){
        $mdsv = $this->model("ModelSinhVien");
        // muốn sử dụng $teo ở trang Home.php thì phải khai báo đối tượng ($this->controller = new $this->controller) ở app.php
        echo $mdsv->GetSV();
    }
    function Timkiem_hopdong(){
    	if(isset($_POST['submit_tk'])){
    		$mahopdong  = $_POST['txtmahopdong'];
    		$masv  = $_POST['txtmasv'];
    		$phg  = $_POST['txtphong'];
    		$tnh  = $_POST['ddtoanha'];
            $kyhan  = $_POST['ddhopdong'];
           
    		$kq = $this->tk->hopdong_tk($mahopdong,$masv,$phg,$tnh,$kyhan);
    		if(mysqli_num_rows($kq)>0){
    			$this->view('ViewMaster',[
		            "page_find_hopdong"=>"Qlhopdong_view",
                    'thongbao_qlhopdong'=>'Tìm kiếm thành công',
					'mahopdong'=>$mahopdong,
					'msv'=>$masv,
					'tnh'=>$tnh,
					'phg'=>$phg,
                    'tkhopdong'=>$kyhan,
		            'dl'=>$kq,
		        ]);
    		}else{
    			$this->view('ViewMaster',[
					"page_find_hopdong"=>"Qlhopdong_view",
                    'thongbao_qlhopdong'=>'Tìm kiếm không thành công',
                    'mahopdong'=>$mahopdong,
					'msv'=>$masv,
					'tnh'=>$tnh,
                    'tkhopdong'=>$kyhan,
					'phg'=>$phg
        		]);
    		}

    	}
    }
	function Ketthuc_hopdong($mahopdong){
        $tienthieu= $this->tk->display_tien_thieu($mahopdong);
        $kq_tk = $this->tk->hopdong_tk($mahopdong,'','','');
        while ($row=mysqli_fetch_array($kq_tk)){// lấy ra phòng và tòa nhà của bảng hợp đồng
            $phg = $row['phong'];
            $tnh = $row['toanha'];
        }

        $kt_hoadon = $this->hd->hoadon_tk('',$phg,$tnh,'','','','');
        $trangthai='';
        if(mysqli_num_rows($kt_hoadon)>0){ //kiểm tra xem có tồn tại hàng này hay k, tránh tình trạng lỗi không xác định biến "$trangthai"
			while ($row=mysqli_fetch_array($kt_hoadon)){//lấy ra ô trạng thái theo phòng và tòa nhà lấy được ở trên
                $trangthai = $row['trangthai'];
                $thang = $row['thang'];
                $nam = $row['nam'];
            }
		}
        

        if($tienthieu==0){
            if($trangthai=='chưa thanh toán'){
                $this->view('ViewMaster',[
                    "page_find_hopdong"=>"Qlhopdong_view",
                    'thongbao_qlhopdong'=>'không kết thúc hợp đồng được vì phòng: "'.$phg.'" tòa: "'.$tnh.'"  chưa thanh toán hóa đơn tháng '.$thang.' năm '.$nam.' !',
                    'dl'=>$this->tk->hopdong_tk('','','','')
                ]);
            }else{
                $sosvo=$this->phg->sl_sv($phg,$tnh);
                $sosvo = $sosvo - 1;
                $this->phg->phong_update($phg,$tnh,$sosvo);
                $tt='0';
                $updateResult = $this->tk->hopdong_update_trangthai($mahopdong,$tt);
                if($updateResult){
                    $this->view('ViewMaster',[
                        "page_find_hopdong"=>"Qlhopdong_view",
                        'thongbao_qlhopdong'=>'Kết thúc hợp đồng thành công',
                        'dl'=>$this->tk->hopdong_tk('','','','')
                    ]);
                }
                
            }
            
        }else{
            $this->view('ViewMaster',[
                "page_find_hopdong"=>"Qlhopdong_view",
                'thongbao_qlhopdong'=>'không Kết thúc hợp đồng được vì hợp đồng: "'.$mahopdong.'" chưa đóng đủ tiền !',
                'dl'=>$this->tk->hopdong_tk('','','','')
            ]);
        }
		
	}
    function Sua_hopdong($mhd){
		$this->view('ViewMaster',[
            "page_find_hopdong"=>"Suahopdong_view",
            'dl'=>$this->tk->hopdong_tk($mhd,'','','')
        ]);
		
	}
	function Update_hopdong(){
		if(isset($_POST['submit_giahan'])){
			$mahopdong = $_POST['txtmahopdong'];
            $msv = $_POST['txtmasv'];
            $tsv = $_POST['txttensv'];
            $phg = $_POST['txtphong'];
            $tnh = $_POST['ddtoanha'];
            $ngl = $_POST['txtngaylap'];
            $ngkt = $_POST['txtngaykt'];
            $tienpd = $_POST['txttienpd'];
            $tiendd = $_POST['txttiendd'];
            $tienct=0;
            if(is_numeric($tienpd)&&is_numeric($tiendd)){
                $tienct = ($tienpd-$tiendd);
            }
			if(isset($_SESSION['user'])){
                $nguoilp=$_SESSION['user'];
            }
            $check_empty = false;
            if(!empty($mahopdong)&&!empty($phg)&&!empty($tnh)&&!empty($ngl)&&!empty($ngkt)&&!empty($tienpd)&&!empty($tiendd)){
                $check_empty = true;
            }

			if($check_empty){
                $result=$this->tk->hopdong_update($mahopdong,$phg,$tnh,$ngl,$ngkt,$tienpd,$tiendd,$tienct,$nguoilp);
                if($result){
                    $this->view('ViewMaster',[
                        "page_find_hopdong"=>"Qlhopdong_view",
                        'dl'=>$this->tk->hopdong_tk('','','',''),
                        'thongbao_qlhopdong'=>'Sửa thành công'
                    ]);
                }else{
                    $this->view('ViewMaster',[
                        "page_find_hopdong"=>"Qlhopdong_view",
                        'dl'=>$this->tk->hopdong_tk('','','',''),
                        'thongbao_qlhopdong'=>'Sửa thất bại !',
                    ]);
                }
            }else{
                $this->view('ViewMaster',[
                    "page_find_hopdong"=>"Suahopdong_view",
                    'thongbao_hopdong_giahan'=>'không được để trống !',
                    'mahopdong'=>$mahopdong,
                    'msv'=>$msv,
                    'tsv'=>$tsv,
                    'mlp'=>$mlp,
                    'phg'=>$phg,
                    'tnh'=>$tnh,
                    'ngl'=>$ngl,
                    'ngkt'=>$ngkt,
                    'tienpd'=>$tienpd,
                    'tiendd'=>$tiendd,
                    'tienct'=>$tienct,
                ]);
            }
			
		}
	}

	function Xoa_hopdong($mhd,$trangthai,$msv){
        if($trangthai==0){
            $this->sv->sinhvien_delete($msv);
            $kq = $this->tk->hopdong_delete($mhd);
            if($kq){
                //echo '<script type="text/javascript">alert("xoa thanh cong")</script>';
                $this->view('ViewMaster',[
                    "page_find_hopdong"=>"Qlhopdong_view",
                    'dl'=>$this->tk->hopdong_tk('','','',''),
                    'thongbao_qlhopdong'=>'Xóa thành công'
                ]);
            }else{
                $this->view('ViewMaster',[
                    "page_find_hopdong"=>"Qlhopdong_view",
                    'dl'=>$this->tk->hopdong_tk('','','',''),
                    'thongbao_qlhopdong'=>'Xóa thất bại'
                ]);
            }
        }else{
            $this->view('ViewMaster',[
                "page_find_hopdong"=>"Qlhopdong_view",
                'dl'=>$this->tk->hopdong_tk('','','',''),
                'thongbao_qlhopdong'=>'Không thể xóa hợp đồng chưa kết thúc'
            ]);
        }
    	
    }
}
?>