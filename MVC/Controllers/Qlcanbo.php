<?php
class Qlcanbo extends Controller{
    public $tk;
    function __construct()
    {
        $this->tk=$this->model("Model_qlcanbo");
    }
    function Canbo_find(){
    	$this->view("ViewMaster",[
            "page_find_cb"=>"Qlcanbo_view",
            'dl'=>$this->tk->canbo_tk('','')
    	]);
        
    }
    function TrangChu(){
        $mdsv = $this->model("ModelSinhVien");
        // muốn sử dụng $teo ở trang Home.php thì phải khai báo đối tượng ($this->controller = new $this->controller) ở app.php
        echo $mdsv->GetSV();
    }
    function Timkiem_cb(){
    	if(isset($_POST['submit_tk'])){
    		$mcb  = $_POST['txtmacb'];
    		$tencb  = $_POST['txttencb'];
    		$kq = $this->tk->canbo_tk($mcb,$tencb);
    		if(mysqli_num_rows($kq)>0){
    			$this->view('ViewMaster',[
		            'page_find_cb'=>'Qlcanbo_view',
                    'thongbao_qlcb'=>'tìm kiếm thành công',
                    'dl'=>$kq,
					'mcb'=>$mcb,
					'tcb'=>$tencb
		        ]);
    		}else{
    			$this->view('ViewMaster',[
					'page_find_cb'=>'Qlcanbo_view',
					'thongbao_qlcb'=>'Cán bộ tìm kiếm không có',
					'mcb'=>$mcb,
					'tcb'=>$tencb,
                    'dl'=>$this->tk->canbo_tk('','')
        		]);
    		}

    	}
    }
	function Sua_cb($mcb){
		$this->view('ViewMaster',[
			'page_find_cb'=>'Suacanbo_view',
			'dl'=>$this->tk->canbo_tk($mcb,'')
		]);
		
	}
	function Update_cb(){
		if(isset($_POST['submit_sua'])){
			$tendn =  $_POST['txttendn'];
			$mk =  $_POST['txtmk'];
			$mcb = $_POST['txtmacb'];
            $tcb = $_POST['txttencb'];
            $email = $_POST['txtemail'];
            $sdt =  $_POST['txtsdt'];
			$dc =  $_POST['txtdc'];
			$check_empty = false;
            if(!empty($tendn)&&!empty($mk)&&!empty($tcb)&&!empty($email)&&!empty($sdt)&&!empty($dc)){
                $check_empty = true;
            }
			if($check_empty){
				$result=$this->tk->canbo_update($tendn,$mk,$mcb,$tcb,$email,$sdt,$dc);
				if($result){
					$this->view('ViewMaster',[
						'page_find_cb'=>'Qlcanbo_view',
						'dl'=>$this->tk->canbo_tk('',''),
						'thongbao_qlcb'=>'sửa thành công'
					]);
				}else{
					$this->view('ViewMaster',[
						'page_find_cb'=>'Qlcanbo_view',
						'dl'=>$this->tk->canbo_tk('',''),
						'thongbao_qlcb'=>'sửa thất bại'
					]);
				}
			}else{
				$this->view('ViewMaster',[
					'page_find_cb'=>'Suacanbo_view',
					'thongbao_cb_sua'=>'không được để trống !',
					'tdn'=>$tendn,
					'mk'=>$mk,
					'tcb'=>$tcb,
					'mcb'=>$mcb,
					'email'=>$email,
					'sdt'=>$sdt,
					'dc'=>$dc
				]);
			}
			
		}
	}
	function Xoa_cb($mcb){
    	$kq = $this->tk->canbo_delete($mcb);
    	if($kq){
    		//echo '<script type="text/javascript">alert("xoa thanh cong")</script>';
    		$this->view('ViewMaster',[
	            'page_find_cb'=>'Qlcanbo_view',
	            'dl'=>$this->tk->canbo_tk('',''),
				'thongbao_qlcb'=>'xóa thành công'
        	]);
    	}else{
    		//echo '<script type="text/javascript">alert("xoa that bai")</script>';
    		$this->view('ViewMaster',[
	            'page_find_cb'=>'Qlcanbo_view',
	            'dl'=>$this->tk->canbo_tk('',''),
				'thongbao_qlcb'=>'xóa không thành công'
        	]);
    	}
    }
}
?>