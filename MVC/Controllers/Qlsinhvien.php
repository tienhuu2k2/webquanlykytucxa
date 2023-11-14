<?php
class Qlsinhvien extends Controller{
    public $tk;
    function __construct()
    {
        $this->tk=$this->model("Model_qlsinhvien");
		$this->hopdong=$this->model("Model_qlhopdong");
    }
    function Sinhvien_find(){
    	$this->view("ViewMaster",[
            "page_find_sv"=>"Qlsinhvien_view",
			'dl'=>$this->tk->sinhvien_tk('','','','','','')
    	]);
        
    }
    function TrangChu(){
        $mdsv = $this->model("ModelSinhVien");
        // muốn sử dụng $teo ở trang Home.php thì phải khai báo đối tượng ($this->controller = new $this->controller) ở app.php
        echo $mdsv->GetSV();
    }
    function Timkiem_sv(){
    	if(isset($_POST['submit_tk'])){
    		$msv  = $_POST['txtmasv'];
    		$tensv  = $_POST['txttensv'];
    		$gt  = $_POST['ddgioitinh'];
            $qq  = $_POST['txtquequan'];
            $phg = $_POST['txtphong'];
            $tnh = $_POST['ddtoanha'];
    		$kq = $this->tk->sinhvien_tk($msv,$tensv,$qq,$gt,$phg,$tnh);
            //var_dump($kq);
    		if(mysqli_num_rows($kq)>0){
    			$this->view('ViewMaster',[
		            'page_find_sv'=>'Qlsinhvien_view',
                    'thongbao_qlsv'=>'tìm kiếm thành công',
					'msv'=>$msv,
					'tensv'=>$tensv,
					'gt'=>$gt,
                    'qq'=>$qq,
                    'phg'=>$phg,
                    'tnh'=>$tnh,
		            'dl'=>$kq
		        ]);
    		}else{
    			$this->view('ViewMaster',[
					'page_find_sv'=>'Qlsinhvien_view',
					'thongbao_qlsv'=>'sinh viên tìm kiếm không có',
					'msv'=>$msv,
					'tensv'=>$tensv,
					'gt'=>$gt,
                    'qq'=>$qq,
                    'phg'=>$phg,
                    'tnh'=>$tnh,
		            'dl'=>$kq
        		]);
    		}

    	}
    }
	function Sua_sv($msv){
		$this->view('ViewMaster',[
			'page_find_sv'=>'Suasinhvien_view',
			'dl'=>$this->tk->sinhvien_tk($msv,'','','','','')
		]);
		
	}
	function Update_sv(){
		if(isset($_POST['submit_sua'])){
			$msv = $_POST['txtmasv'];
            $tsv = $_POST['txttensv'];
            $ngs = $_POST['txtngaysinh'];
            $qq = $_POST['txtquequan'];
            $gt = $_POST['ddgioitinh'];
            $sdt = $_POST['txtsdt'];
			$check_empty = false;
            if(!empty($tsv)&&!empty($ngs)&&!empty($qq)&&!empty($gt)&&!empty($sdt)){
                $check_empty = true;
            }
            if($check_empty){
                $result=$this->tk->sinhvien_update($msv,$tsv,$ngs,$qq,$gt,$sdt);
                //$update_hopdong = $this->hopdong->hopdong_update_ttsv($msv,$tsv);
                if($result && $update_hopdong){
                    $this->view('ViewMaster',[
                        'page_find_sv'=>'Qlsinhvien_view',
                        'dl'=>$this->tk->sinhvien_tk('','','','','',''),
                        'thongbao_qlsv'=>'sửa thành công'

                    ]);
                }else{
                    $this->view('ViewMaster',[
                        'page_find_sv'=>'Qlsinhvien_view',
                        'dl'=>$this->tk->sinhvien_tk('','','','','',''),
                        'thongbao_qlsv'=>'sửa thất bại'
                    ]);
                }
            }else{
                $this->view('ViewMaster',[
                    'page_find_sv'=>'Suasinhvien_view',
                    'thongbao_sv_sua'=>'không được để trống !',
                    'msv'=>$msv,
                    'tsv'=>$tsv,
                    'mlp'=>$mlp,
                    'ngs'=>$ngs,
                    'qq'=>$qq,
                    'gt'=>$gt,
                    'sdt'=>$sdt
                ]);
            }
			
			
		}
	}

	// function Xoa_sv($msv){
    // 	$kq = $this->tk->sinhvien_delete($msv);
    // 	if($kq){
    // 		//echo '<script type="text/javascript">alert("xoa thanh cong")</script>';
    // 		$this->view('ViewMaster',[
	//             'page_find_sv'=>'Qlsinhvien_view',
	//             'dl'=>$this->tk->sinhvien_tk('','','',''),
	// 			'thongbao_qlsv'=>'xóa thành công',
	// 			'result'=>$this->tk->lophoc_all(),
	// 			'dl'=>$this->tk->sinhvien_tk('','','','')
    //     	]);
    // 	}else{
    // 		//echo '<script type="text/javascript">alert("xoa that bai")</script>';
    // 		$this->view('ViewMaster',[
	//             'page_find_sv'=>'Qlsinhvien_view',
	//             'dl'=>$this->tk->sinhvien_tk('','','',''),
	// 			'thongbao_qlsv'=>'xóa không thành công',
	// 			'result'=>$this->tk->lophoc_all(),
	// 			'dl'=>$this->tk->sinhvien_tk('','','','')
    //     	]);
    // 	}
    // }
}
?>