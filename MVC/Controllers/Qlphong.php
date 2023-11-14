<?php
class Qlphong extends Controller{
    public $tk;
    function __construct()
    {
        $this->tk=$this->model("Model_qlphong");
    }
    function Phong_find(){
    	$this->view("ViewMaster",[
            "page_find_phong"=>"Qlphong_view",
            'dl'=>$this->tk->phong_tk('','','')
    	]);
        
    }
    function TrangChu(){
        $mdsv = $this->model("ModelSinhVien");
        // muốn sử dụng $teo ở trang Home.php thì phải khai báo đối tượng ($this->controller = new $this->controller) ở app.php
        echo $mdsv->GetSV();
    }
    function Timkiem_phong(){
    	if(isset($_POST['submit_tk'])){
    		$phg  = $_POST['txtphong'];
    		$tnh  = $_POST['ddtoanha'];
            $sosvo  = $_POST['txtsno'];
    		$kq = $this->tk->phong_tk($phg,$tnh,$sosvo);
    		if(mysqli_num_rows($kq)>0){
    			$this->view('ViewMaster',[
		            'page_find_phong'=>'Qlphong_view',
                    'thongbao_qlphong'=>'tìm kiếm thành công',
                    'dl'=>$kq,
                    'phg'=>$phg,
					'tnh'=>$tnh,
                    'sosvo'=>$sosvo
		        ]);
    		}else{
    			$this->view('ViewMaster',[
					'page_find_phong'=>'Qlphong_view',
                    'thongbao_qlphong'=>'không tìm kiếm thấy',
                    'phg'=>$phg,
					'tnh'=>$tnh,
                    'sosvo'=>$sosvo,
                    'dl'=>$this->tk->phong_tk('','','')

        		]);
    		}

    	}

		
    }
    function Sua_phong($phg,$tnh){
		$this->view('ViewMaster',[
			'page_find_phong'=>'Suaphong_view',
			'dl'=>$this->tk->phong_tk($phg,$tnh,'')
		]);
		
	}

	function Update_phong(){
		if(isset($_POST['submit_sua'])){
			$phg  = $_POST['txtphong'];
    		$tnh  = $_POST['txttoanha'];
    		$sosvo  = $_POST['txtsosvo'];
            
            $check_empty = false;
            if(!empty($phg)&&!empty($tnh)&&!empty($sosvo)){
                $check_empty = true;
            }

            $checkIssetPhong = $this->tk->check_isset_phong($phg,$tnh);
            if($check_empty){
                if(!$checkIssetPhong){
                    $result=$this->tk->phong_update($phg,$tnh,$sosvo);
                    if($result){
                        $this->view('ViewMaster',[
                            'page_find_phong'=>'Qlphong_view',
                            'thongbao_qlphong'=>'Sửa phòng thành công',
                            'dl'=>$this->tk->phong_tk('','','')
                            
                        ]);
                    }else{
                        $this->view('ViewMaster',[
                            'page_find_phong'=>'Suaphong_view',
                            'thongbao_qlphong'=>'sửa thất bại vui lòng kiểm tra lại dl nhập vào',
                            'phg'=>$phg,
                            'tnh'=>$tnh,
                            'sosvo'=>$sosvo
                        ]);
                    }
                }else{
                    $this->view('ViewMaster',[
                        'page_find_phong'=>'Suaphong_view',
                        'thongbao_qlphong'=>'Phòng đã tồn tại trên hệ thống',
                        'phg'=>$phg,
                        'tnh'=>$tnh,
                        'sosvo'=>$sosvo
                    ]);
                }
            }else{
                $this->view('ViewMaster',[
                    'page_find_phong'=>'Suaphong_view',
                    'thongbao_qlphong'=>'Vui lòng nhập đầy đủ thông tin',
                    'phg'=>$phg,
                    'tnh'=>$tnh,
                    'sosvo'=>$sosvo
                ]);
            }
		}
	}
    function Xoa_phong($phg,$tnh){
    	$kq = $this->tk->phong_delete($phg,$tnh);
    	if($kq){
    		//echo '<script type="text/javascript">alert("xoa thanh cong")</script>';
    		$this->view('ViewMaster',[
	            'page_find_phong'=>'Qlphong_view',
                'thongbao_qlphong'=>'Xóa thành công phòng '.$phg.' tòa nhà '.$tnh,
                'dl'=>$this->tk->phong_tk('','','')
        	]);
    	}else{
    		$this->view('ViewMaster',[
	            'page_find_phong'=>'Qlphong_view',
                'thongbao_qlphong'=>'Xóa phòng thành công',
                'dl'=>$this->tk->phong_tk('','','')
        	]);
    	}
    }
    
} 
?>