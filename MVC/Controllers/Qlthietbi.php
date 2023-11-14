<?php
class Qlthietbi extends Controller{
    public $tk;
    function __construct()
    {
        $this->tk=$this->model("Model_qlthietbi");
    }
    function Thietbi_find(){
    	$this->view("ViewMaster",[
            "page_find_tb"=>"Qlthietbi_view",
            'dl'=>$this->tk->thietbi_tk('','','','','')
    	]);
        
    }
    function TrangChu(){
        $mdsv = $this->model("ModelSinhVien");
        // muốn sử dụng $teo ở trang Home.php thì phải khai báo đối tượng ($this->controller = new $this->controller) ở app.php
        echo $mdsv->GetSV();
    }
    function Timkiem_tb(){
    	if(isset($_POST['submit_tk'])){
    		$phg  = $_POST['txtphong'];
    		$tnh  = $_POST['ddtoanha'];
    		$mtb  = $_POST['txtmatb'];
            $ttb  = $_POST['txttentb'];
            $tt  = $_POST['ddtinhtrang'];
    		$kq = $this->tk->thietbi_tk($phg,$tnh,$mtb,$ttb,$tt);
    		if(mysqli_num_rows($kq)>0){
    			$this->view('ViewMaster',[
		            'page_find_tb'=>'Qlthietbi_view',
                    'thongbao_qltb'=>'tìm kiếm thành công',
                    'dl'=>$kq,
					'phg'=>$phg,
					'tnh'=>$tnh,
					'mtb'=>$mtb,
                    'ttb'=>$ttb,
                    'tt'=>$tt
		        ]);
    		}else{
    			$this->view('ViewMaster',[
					'page_find_tb'=>'Qlthietbi_view',
                    'thongbao_qltb'=>'thông tin tìm kiếm không có',
					'phg'=>$phg,
					'tnh'=>$tnh,
					'mtb'=>$mtb,
                    'ttb'=>$ttb,
                    'tt'=>$tt,
                    'dl'=>$this->tk->thietbi_tk('','','','','')
        		]);
    		}

    	}
		if(isset($_POST['xuat_excel'])){
            require_once "./Public/Classes/PHPExcel.php";
            //code xuất excel
            $objExcel=new PHPExcel();
            $objExcel->setActiveSheetIndex(0);
            $sheet=$objExcel->getActiveSheet()->setTitle('DSTB');
            $rowCount=1;
            //Tạo tiêu đề cho cột trong excel
            $sheet->setCellValue('A'.$rowCount,'Phòng');
            $sheet->setCellValue('B'.$rowCount,'Tòa nhà');
            $sheet->setCellValue('C'.$rowCount,'Mã thiết bị');
            $sheet->setCellValue('D'.$rowCount,'Tên thiết bị');
            $sheet->setCellValue('E'.$rowCount,'Số lượng');
            $sheet->setCellValue('F'.$rowCount,'Tình trạng');
           
            //định dạng cột tiêu đề
            $sheet->getColumnDimension('A')->setAutoSize(true);
            $sheet->getColumnDimension('B')->setAutoSize(true);
			$sheet->getColumnDimension('C')->setAutoSize(true);
			$sheet->getColumnDimension('D')->setAutoSize(true);
			$sheet->getColumnDimension('E')->setAutoSize(true);
			$sheet->getColumnDimension('F')->setAutoSize(true);
			
            //gán màu nền
            $sheet->getStyle('A1:F1')->getFill()->setFillType(\PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('00FF00');
            //căn giữa
            $sheet->getStyle('A1:F1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            //Điền dữ liệu vào các dòng. Dữ liệu lấy từ DB
            $phg  = $_POST['txtphong'];
    		$tnh  = $_POST['ddtoanha'];
    		$mtb  = $_POST['txtmatb'];
            $ttb  = $_POST['txttentb'];
            $tt  = $_POST['ddtinhtrang'];
    		$kq = $this->tk->thietbi_tk($phg,$tnh,$mtb,$ttb,$tt);
			
            while($row=mysqli_fetch_array($kq)){
                $rowCount++;
                $sheet->setCellValue('A'.$rowCount,$row['phong']);
                $sheet->setCellValue('B'.$rowCount,$row['toanha']);
                $sheet->setCellValue('C'.$rowCount,$row['mathietbi']);
                $sheet->setCellValue('D'.$rowCount,$row['tenthietbi']);
                $sheet->setCellValue('E'.$rowCount,$row['soluong']);
                $sheet->setCellValue('F'.$rowCount,$row['tinhtrang']);
                
            }
			
            //Kẻ bảng 
            $styleAray=array(
                'borders'=>array(
                    'allborders'=>array(
                        'style'=>PHPExcel_Style_Border::BORDER_THIN
                    )
                )
                );
            $sheet->getStyle('A1:'.'F'.($rowCount))->applyFromArray($styleAray);
            $objWriter=new PHPExcel_Writer_Excel2007($objExcel);
            $fileName='ExportExcel.xlsx';
            $objWriter->save($fileName);
            header('Content-Disposition: attachment; filename="'.$fileName.'"');
            header('Content-Type: application/vnd.openxlmformatsofficedocument.speadsheetml.sheet');
			header('Content-Length: '.filesize($fileName));
            header('Content-Transfer-Encoding:binary');
            header('Cache-Control: must-revalidate');
            header('Pragma: no-cache');
            readfile($fileName);
			

        }
    }
    function Sua_thietbi($phg,$tnh){
		$this->view('ViewMaster',[
			'page_find_tb'=>'Suathietbi_view',
			'dl'=>$this->tk->thietbi_tk($phg,$tnh,'','','')
		]);
		
	}
	function Update_thietbi(){
		if(isset($_POST['submit_sua'])){
			$phg  = $_POST['txtphong'];
    		$tnh  = $_POST['ddtoanha'];
    		$mtb  = $_POST['txtmatb'];
            $ttb  = $_POST['txttentb'];
            $sl  = $_POST['txtslg'];
            $tt  = $_POST['ddtinhtrang'];
            $check_empty = false;
            if(!empty($mtb)&&!empty($ttb)&&!empty($sl)&&!empty($tt)){
                $check_empty = true;
            }
            if($check_empty){
                $result=$this->tk->thietbi_update($phg,$tnh,$mtb,$ttb,$sl,$tt);
                if($result){
                    $this->view('ViewMaster',[
                        'page_find_tb'=>'Qlthietbi_view',
                        'dl'=>$this->tk->thietbi_tk('','','','',''),
                        'thongbao_qltb'=>'sửa thành công'
                    ]);
                }else{
                    $this->view('ViewMaster',[
                        'page_find_tb'=>'Qlthietbi_view',
                        'dl'=>$this->tk->thietbi_tk('','','','',''),
                        'thongbao_qltb'=>'sửa thất bại'
                    ]);
                }
            }else{
                $this->view('ViewMaster',[
                    'page_find_tb'=>'Suathietbi_view',
                    'thongbao_tb_sua'=>'không được để trống !',
                    'phg'=>$phg,
                    'tnh'=>$tnh,
                    'mtb'=>$mtb,
                    'ttb'=>$ttb,
                    'sl'=>$sl,
                    'tt'=>$tt
                ]);
            }
		}
	}
	function Xoa_tb($phg,$tnh){
    	$kq = $this->tk->thietbi_delete($phg,$tnh);
    	if($kq){
    		//echo '<script type="text/javascript">alert("xoa thanh cong")</script>';
    		$this->view('ViewMaster',[
	            'page_find_tb'=>'Qlthietbi_view',
	            'dl'=>$this->tk->thietbi_tk('','','','',''),
				'thongbao_qltb'=>'xóa thành công'
        	]);
    	}else{
    		//echo '<script type="text/javascript">alert("xoa that bai")</script>';
    		$this->view('ViewMaster',[
	            'page_find_tb'=>'Qlthietbi_view',
	            'dl'=>$this->tk->thietbi_tk('','','','',''),
				'thongbao_qltb'=>'xóa thành công'
        	]);
    	}
    }
}
?>