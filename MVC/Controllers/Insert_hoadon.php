<?php
class Insert_hoadon extends Controller{
    public $hd;
    function __construct()
    {
        $this->hd=$this->model("Model_qlhoadon");
    }
    function Themhd(){
    	$this->view("ViewMaster",[
            "page_insert_hd"=>"Themhoadon_view"
    	]);
    }
    function TrangChu(){
        $mdsv = $this->model("ModelSinhVien");
        // muốn sử dụng $teo ở trang Home.php thì phải khai báo đối tượng ($this->controller = new $this->controller) ở app.php
        echo $mdsv->GetSV();
    }
    function Ins_hoadon(){
        if(isset($_POST['submit_them'])){
            $mhd = 'HD'.rand(1000, 1000000000);
            $phg = $_POST['txtphong'];
            $tnh = $_POST['ddtoanha'];
            $sd =  $_POST['txtsodien'];
            $gid =  $_POST['txtgiadien'];


            $sn =  $_POST['txtsonuoc'];
            $gin =  $_POST['txtgianuoc'];
            
            
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
           
            if(isset($_SESSION['user'])){
                $nguoilap=$_SESSION['user'];
            }
            $trangthai =  $_POST['ddtrangthai'];
            $ghichu =  $_POST['txtghichu'];
            $check_empty = false;
            if(!empty($phg)&&!empty($tnh)&&!empty($sd)&&!empty($gid)&&!empty($sn)&&!empty($gin)&&!empty($ngay)&&!empty($thang)&&!empty($nam)&&!empty($trangthai)){
                $check_empty = true;
            }
            $bien=[];
            $bien = $this->hd->query($thang,$nam,$phg,$tnh);
            $sdc = 0;
            $snc = 0;
            if(!empty($bien)){
                while($row=mysqli_fetch_assoc($bien)){
                    $sdc = $row["sodien"];
                    $snc = $row["sonuoc"];
                    // echo '<pre>';
                    // print_r($row);
                    // echo '</pre>';
                }
            }
            if(is_numeric($sd)&&is_numeric($sd)&&is_numeric($gid)){
                $tsd = ($sd-$sdc);
                $ttd = ($tsd*$gid);
            }
            if(is_numeric($sn)&&is_numeric($sn)&&is_numeric($gin)){
                $tsn = ($sn-$snc);
                $ttn = ($tsn*$gin);
            }
             if(is_numeric($gin)&&is_numeric($gid)){
                $ttien=$tsd*$gid+$tsn*$gin+$tienwf;
            }
            if($check_empty){
                    if(date('Y')==$nam){
                        $kq = $this->hd->Insert_hoadon($mhd,$phg,$tnh,$sd,$tsd,$gid,$ttd,$sn,$tsn,$gin,$ttn,$lwf,$tienwf,$ngay,$thang,$nam,$ttien,$nguoilap,$trangthai,$ghichu);
                        if($kq){
                            $this->view("ViewMaster",[
                                "thongbao_hd_insert"=>"Thêm thành công",
                                "page_insert_hd"=>"Themhoadon_view",
                                'bien'=>$bien
                            ]);
                        }else{
                            $this->view("ViewMaster",[
                                "thongbao_hd_insert"=>"Thêm thất bại",
                                "page_insert_hd"=>"Themhoadon_view",
                                'sd'=>$sd,
                                'gid'=>$gid,
                                'ngay'=>$ngay,
                                'thang'=>$thang,
                                'nam'=>$nam,
                                'ghch'=>$ghichu,
                                'phg'=>$phg,
                                'tnh'=>$tnh,
                                'sn'=>$sn,
                                'gin'=>$gin,
                                'lwf'=>$lwf,
                                'tt'=>$trangthai
                            ]);
                        }
                    }else{
                        $this->view("ViewMaster",[
                            "thongbao_hd_insert"=>"Năm không hợp lệ !",
                            "page_insert_hd"=>"Themhoadon_view",
                            'sd'=>$sd,
                            'gid'=>$gid,
                            'ngay'=>$ngay,
                            'thang'=>$thang,
                            'nam'=>$nam,
                            'ghch'=>$ghichu,
                            'phg'=>$phg,
                            'tnh'=>$tnh,
                            'sn'=>$sn,
                            'gin'=>$gin,
                            'lwf'=>$lwf,
                            'tt'=>$trangthai
                        ]);
                    }
            }else{
                $this->view("ViewMaster",[
                    "thongbao_hd_insert"=>"xin vui lòng nhập đủ thông tin",
                    "page_insert_hd"=>"Themhoadon_view",
                    'sd'=>$sd,
                    'gid'=>$gid,
                    'ngay'=>$ngay,
                    'thang'=>$thang,
                    'nam'=>$nam,
                    'ghch'=>$ghichu,
                    'phg'=>$phg,
                    'tnh'=>$tnh,
                    'sn'=>$sn,
                    'gin'=>$gin,
                    'lwf'=>$lwf,
                    'tt'=>$trangthai,
                    'bien'=>$bien
                ]);
            }
        }
    }
}
?>