<?php
class Qlhoadon extends Controller{
    public $tk;
    function __construct()
    {
        $this->tk=$this->model("Model_qlhoadon");
    }
    function Hoadon_find(){
    	$this->view("ViewMaster",[
            "page_find_hd"=>"Qlhoadon_view",
            'dl'=>$this->tk->hoadon_tk('','','','','','')
    	]);
        
    }
    function TrangChu(){
        $mdsv = $this->model("ModelSinhVien");
        // muốn sử dụng $teo ở trang Home.php thì phải khai báo đối tượng ($this->controller = new $this->controller) ở app.php
        echo $mdsv->GetSV();
    }
    function Timkiem_hoadon(){
    	if(isset($_POST['submit_tk'])){
    		$mhd  = $_POST['txtmahd'];
    		$phg  = $_POST['txtphong'];
    		$tnh  = $_POST['ddtoanha'];
			$thang  = $_POST["ddthang"];
			$nam  = $_POST['ddnam'];
			$tt  = $_POST['ddtrangthai'];

    		$kq = $this->tk->hoadon_tk($mhd,$phg,$tnh,$thang,$nam,$tt);
    		if(mysqli_num_rows($kq)>0){
    			$this->view('ViewMaster',[
		            'page_find_hd'=>'Qlhoadon_view',
                    'thongbao_qlhd'=>'tìm kiếm thành công',
					'mhd'=>$mhd,
					'phg'=>$phg,
					'tnh'=>$tnh,
		            'dl'=>$kq,
					'thang'=>$thang,
					'nam'=>$nam,
					'tt'=>$tt
		        ]);
    		}else{
    			$this->view('ViewMaster',[
					'page_find_hd'=>'Qlhoadon_view',
                    'thongbao_qlhd'=>'hóa đơn tìm kiếm không có',
					'mhd'=>$mhd,
					'phg'=>$phg,
					'tnh'=>$tnh,
					'thang'=>$thang,
					'nam'=>$nam,
					'tt'=>$tt,
		            'dl'=>$this->tk->hoadon_tk('','','','','','')

        		]);
    		}

    	}
		if(isset($_POST['btnImportExcel'])){
			require_once "./Public/Classes/PHPExcel.php";
            $file=$_FILES['file']['tmp_name'];
            $objReader=PHPExcel_IOFactory::createReaderForFile($file);
            $objExcel=$objReader->load($file);
            //Lấy sheet hiện tại
            $sheet=$objExcel->getSheet(0);
            $sheetData=$sheet->toArray(null,true,true,true);
            for($i=2;$i<=count($sheetData);$i++){
                $mhd=$sheetData[$i]["A"];
                $phg=$sheetData[$i]["B"];
				$phg=(int)$phg;
				$tnh=$sheetData[$i]["C"];
                $sdc=$sheetData[$i]["D"];
				$sdm=$sheetData[$i]["E"];
				$gid=$sheetData[$i]["F"];
				$gid=(int)$gid;
				$sd=0;
				//$td=0;
				if(is_numeric($sdc)&&is_numeric($sdm)&&is_numeric($gid)){
					$sd = ($sdm-$sdc);
					$td = ($sd*$gid);
				}
				$sd=(int)$sd;
				
				$snc=$sheetData[$i]["G"];
				$snm=$sheetData[$i]["H"];
				$gin=$sheetData[$i]["I"];
				$gin=(int)$gin;
				$sn =0;
				//$tn=0;
				if(is_numeric($snc)&&is_numeric($snm)&&is_numeric($gin)){
					$sn = ($snm-$snc);
					$tn = ($sn*$gin);
				}
				$sn=(int)$sn;
				
				$lwf=$sheetData[$i]["J"];
				$tienwf = 0;
				if($lwf=='loai1'){
					$tienwf = 200000;
				}else if($lwf=='loai2'){
					$tienwf = 300000;
				}else if($lwf=='loai3'){
					$tienwf = 400000;
				}
				$tienwf=(int)$tienwf;

				$ngay=$sheetData[$i]["K"];
				$ngay=(string)$ngay;
				$thang=$sheetData[$i]["L"];
				$thang=(string)$thang;
				$nam=$sheetData[$i]["M"];
				$nam=(string)$nam;
				$ttien=0;
				if(is_numeric($gin)&&is_numeric($gid)){
					$ttien=$td+$tn+$tienwf;
				}
				
				if(isset($_SESSION['user'])){
					$nguoilap=$_SESSION['user'];
				}
				$trangthai=$sheetData[$i]["N"];
				$ghichu=$sheetData[$i]["O"];
				$check_msv=$this->tk->check_isset_mhd($mhd);
				if($check_msv==false){
					$kq = $this->tk->Insert_hoadon($mhd,$phg,$tnh,$sd,$gid,$td,$sn,$gin,$tn,$lwf,$tienwf,$ngay,$thang,$nam,$ttien,$nguoilap,$trangthai,$ghichu);
				}
                
            }
				if($kq){
					$this->view('ViewMaster',[
						'page_find_hd'=>'Qlhoadon_view',
						'thongbao_qlhd'=>'Nhập excel thành công !',
						'dl'=>$this->tk->hoadon_tk('','','','','','')
					]);
				}else{
					$this->view('ViewMaster',[
						'page_find_hd'=>'Qlhoadon_view',
						'thongbao_qlhd'=>'Nhập excel không thành công !',
						'dl'=>$this->tk->hoadon_tk('','','','','','')
					]);
				}

        }

		if(isset($_POST['xuat_excel'])){
            require_once "./Public/Classes/PHPExcel.php";
            //code xuất excel
            $objExcel=new PHPExcel();
            $objExcel->setActiveSheetIndex(0);
            $sheet=$objExcel->getActiveSheet()->setTitle('DSSV');
            $rowCount=1;
            //Tạo tiêu đề cho cột trong excel
            $sheet->setCellValue('A'.$rowCount,'Mã hóa đơn');
            $sheet->setCellValue('B'.$rowCount,'Phòng');
            $sheet->setCellValue('C'.$rowCount,'Tòa nhà');
            $sheet->setCellValue('D'.$rowCount,'Số điện');
            $sheet->setCellValue('E'.$rowCount,'Giá điện');
            $sheet->setCellValue('F'.$rowCount,'Tiền điện');
            $sheet->setCellValue('G'.$rowCount,'Số nước');
			$sheet->setCellValue('H'.$rowCount,'Giá nước');
			$sheet->setCellValue('I'.$rowCount,'Tiền nước');
			$sheet->setCellValue('J'.$rowCount,'Tiền mạng');
			$sheet->setCellValue('K'.$rowCount,'Ngày');
			$sheet->setCellValue('L'.$rowCount,'Tháng');
			$sheet->setCellValue('M'.$rowCount,'Năm');
			$sheet->setCellValue('N'.$rowCount,'Thành tiền');
			$sheet->setCellValue('O'.$rowCount,'Người lập');
			$sheet->setCellValue('P'.$rowCount,'Trạng thái');
			$sheet->setCellValue('Q'.$rowCount,'Ghi chú');
        
            //định dạng cột tiêu đề
            $sheet->getColumnDimension('A')->setAutoSize(true);
            $sheet->getColumnDimension('B')->setAutoSize(true);
			$sheet->getColumnDimension('C')->setAutoSize(true);
			$sheet->getColumnDimension('D')->setAutoSize(true);
			$sheet->getColumnDimension('E')->setAutoSize(true);
			$sheet->getColumnDimension('F')->setAutoSize(true);
			$sheet->getColumnDimension('G')->setAutoSize(true);
			$sheet->getColumnDimension('H')->setAutoSize(true);
			$sheet->getColumnDimension('I')->setAutoSize(true);
			$sheet->getColumnDimension('J')->setAutoSize(true);
			$sheet->getColumnDimension('K')->setAutoSize(true);
			$sheet->getColumnDimension('L')->setAutoSize(true);
			$sheet->getColumnDimension('M')->setAutoSize(true);
			$sheet->getColumnDimension('N')->setAutoSize(true);
			$sheet->getColumnDimension('O')->setAutoSize(true);
            $sheet->getColumnDimension('P')->setAutoSize(true);
			$sheet->getColumnDimension('Q')->setAutoSize(true);
            //gán màu nền
            $sheet->getStyle('A1:Q1')->getFill()->setFillType(\PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('00FF00');
            //căn giữa
            $sheet->getStyle('A1:Q1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            //Điền dữ liệu vào các dòng. Dữ liệu lấy từ DB
            $mhd  = $_POST['txtmahd'];
    		$phg  = $_POST['txtphong'];
    		$tnh  = $_POST['ddtoanha'];
			$thang  = $_POST["ddthang"];
			$nam  = $_POST['ddnam'];
			$tt  = $_POST['ddtrangthai'];
            $kq = $this->tk->hoadon_tk($mhd,$phg,$tnh,$thang,$nam,$tt);
			
            while($row=mysqli_fetch_array($kq)){
                $rowCount++;
                $sheet->setCellValue('A'.$rowCount,$row['hoadon']);
                $sheet->setCellValue('B'.$rowCount,$row['phong']);
                $sheet->setCellValue('C'.$rowCount,$row['toanha']);
                $sheet->setCellValue('D'.$rowCount,$row['sodiendadung']);
                $sheet->setCellValue('E'.$rowCount,$row['giadien']);
                $sheet->setCellValue('F'.$rowCount,$row['tiendien']);
                $sheet->setCellValue('G'.$rowCount,$row['sonuocdadung']);
				$sheet->setCellValue('H'.$rowCount,$row['gianuoc']);
                $sheet->setCellValue('I'.$rowCount,$row['tiennuoc']);
                $sheet->setCellValue('J'.$rowCount,$row['giawifi']);
                $sheet->setCellValue('K'.$rowCount,$row['ngay']);
                $sheet->setCellValue('L'.$rowCount,$row['thang']);
                $sheet->setCellValue('M'.$rowCount,$row['nam']);
                $sheet->setCellValue('N'.$rowCount,$row['thanhtien']);
				$sheet->setCellValue('O'.$rowCount,$row['nguoilap']);
                $sheet->setCellValue('P'.$rowCount,$row['trangthai']);
                $sheet->setCellValue('Q'.$rowCount,$row['ghichu']);
                
            }
			
            //Kẻ bảng 
            $styleAray=array(
                'borders'=>array(
                    'allborders'=>array(
                        'style'=>PHPExcel_Style_Border::BORDER_THIN
                    )
                )
                );
            $sheet->getStyle('A1:'.'Q'.($rowCount))->applyFromArray($styleAray);
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
	function Sua_hd($mhd,$thang,$nam,$phg,$tnh){
		$bien=[];
        $bien = $this->tk->query($thang,$nam,$phg,$tnh);

		$this->view('ViewMaster',[
			'page_find_hd'=>'Suahoadon_view',
			'dl'=>$this->tk->hoadon_tk($mhd,'','','','',''),
			'hd'=>$bien
		]);
	}
	function Update_hd(){
		if(isset($_POST['submit_sua'])){
			$mhd = $_POST['txtmahd'];
            $phg = $_POST['txtphong'];
            $tnh = $_POST['ddtoanha'];
            $sdc =  $_POST['txtsodiencu'];
            $sdm =  $_POST['txtsodienmoi'];
            $gid =  $_POST['txtgiadien'];
			$sd=0;
            if(is_numeric($sdc)&&is_numeric($sdm)&&is_numeric($gid)){
                $sd = ($sdm-$sdc);
                $td = ($sd*$gid);
            }
           
            $snc =  $_POST['txtsonuoccu'];
            $snm =  $_POST['txtsonuocmoi'];
            $gin =  $_POST['txtgianuoc'];
			$sn =0;
            if(is_numeric($snc)&&is_numeric($snm)&&is_numeric($gin)){
                $sn = ($snm-$snc);
                $tn = ($sn*$gin);
            }
            
            $lwf =  $_POST['ddwifi'];
            $tienwf = 0;
            if($lwf=='loai1'){
                $tienwf = 200000;
            }else if($lwf=='loai2'){
                $tienwf = 300000;
            }else if($lwf=='loai3'){
                $tienwf = 400000;
            }
            $ngay =  $_POST['txtngay'];
            $thang =  $_POST['ddthang'];
            $nam =  $_POST['ddnam'];
            if(is_numeric($gin)&&is_numeric($gid)){
                $ttien=$sd*$gid+$sn*$gin+$tienwf;
            }
            if(isset($_SESSION['user'])){
                $nguoilap=$_SESSION['user'];
            }
            $trangthai =  $_POST['ddtrangthai'];
            $ghichu =  $_POST['txtghichu'];
			$check_empty = false;
			if(!empty($mhd)&&!empty($phg)&&!empty($tnh)&&!empty($sdc)&&!empty($sdm)&&!empty($gid)&&!empty($snc)&&!empty($snm)&&!empty($gin)&&!empty($ngay)&&!empty($thang)&&!empty($nam)&&!empty($trangthai)){
                $check_empty = true;
            }
			if($check_empty){
				$result=$this->tk->hoadon_update($mhd,$phg,$tnh,$sdm,$sd,$gid,$td,$snm,$sn,$gin,$tn,$lwf,$tienwf,$ngay,$thang,$nam,$ttien,$nguoilap,$trangthai,$ghichu);
				if($result){
					$this->view('ViewMaster',[
						'page_find_hd'=>'Qlhoadon_view',
						'dl'=>$this->tk->hoadon_tk('','','','','',''),
						'thongbao_qlhd'=>'sửa thành công',
					]);
				}else{
					$this->view('ViewMaster',[
						'page_find_hd'=>'Qlhoadon_view',
						'dl'=>$this->tk->hoadon_tk('','','','','',''),
						'thongbao_qlhd'=>'sửa thất bại'
					]);
				}
			}else{
				$this->view('ViewMaster',[
					'page_find_hd'=>'Suahoadon_view',
					'dl'=>$this->tk->hoadon_tk('','','','','',''),
					'thongbao_hd_insert'=>'không được để trống !',
					'mhd'=>$mhd,
					'sdc'=>$sdc,
					'sdm'=>$sdm,
					'gid'=>$gid,
					'ngay'=>$ngay,
					'thang'=>$thang,
					'nam'=>$nam,
					'ghch'=>$ghichu,
					'phg'=>$phg,
					'tnh'=>$tnh,
					'snc'=>$snc,
					'snm'=>$snm,
					'gin'=>$gin,
					'lwf'=>$lwf,
					'tt'=>$trangthai
				]);
			}
		}
	}
	function Xoa_hd($mhd){
		
		if(isset($_SESSION['phanquyen'])&&$_SESSION['phanquyen']=='cb001'){
			$kq = $this->tk->hoadon_delete($mhd);
			if($kq){
				//echo '<script type="text/javascript">alert("xoa thanh cong")</script>';
				$this->view('ViewMaster',[
					'page_find_hd'=>'Qlhoadon_view',
					'dl'=>$this->tk->hoadon_tk('','','','','',''),
					'thongbao_qlhd'=>'xóa thành công'
				]);
			}else{
				//echo '<script type="text/javascript">alert("xoa that bai")</script>';
				$this->view('ViewMaster',[
					'page_find_hd'=>'Qlhoadon_view',
					'dl'=>$this->tk->hoadon_tk('','','','','',''),
					'thongbao_qlhd'=>'xóa không thành công'
				]);
			}
		}else{
			$this->view('ViewMaster',[
				'page_find_hd'=>'Qlhoadon_view',
				'dl'=>$this->tk->hoadon_tk('','','','','',''),
				'thongbao_qlhd'=>'chức năng xóa chỉ admin mới dùng được !'
			]);
		}
    	
    }
}
?>