<?php
class Insert_hopdong extends Controller{
    public $hopdong;
    function __construct()
    {
        $this->hopdong=$this->model("Model_qlhopdong");
        $this->sv=$this->model("Model_qlsinhvien");
        $this->phg=$this->model("Model_qlphong");
    }
    function Themhopdong(){
    	$this->view("ViewMaster",[
            "page_insert_hopdong"=>"Themhopdong_view"
    	]);
    }
    function TrangChu(){
        $mdsv = $this->model("ModelSinhVien");
        // muốn sử dụng $teo ở trang Home.php thì phải khai báo đối tượng ($this->controller = new $this->controller) ở app.php
        echo $mdsv->GetSV();
    }
    function Ins_hopdong(){
        if(isset($_POST['submit_them'])){
            $mahopdong = $_POST['txtmahopdong'];
            $msv = $_POST['txtmasv'];
            $tsv = $_POST['txttensv'];
            $ngs = $_POST['txtngaysinh'];
            $qq = $_POST['txtquequan'];
            $gt = $_POST['ddgioitinh'];
            $sdt = $_POST['txtsdt'];
            $phg = $_POST['txtphong'];
            $tnh = $_POST['ddtoanha'];
            $chonhopdong = $_POST['ddhopdong'];
            $ngl = date('Y-m-d');
            $ngkt = date('Y-m-d', strtotime($ngl . "+ $chonhopdong months"));
            $tienpd = $_POST['txttienpd'];
            $tiendd = $_POST['txttiendd'];
            $trangthai=0;
            $tienct=0;
            $sosvo=$this->phg->sl_sv($phg,$tnh);
            if(is_numeric($tienpd)&&is_numeric($tiendd)){
                $tienct = ($tienpd-$tiendd);
            }
            if(isset($_SESSION['user'])){
                $nguoilp=$_SESSION['user'];
            }

            $check_mahopdong=$this->hopdong->check_isset_mahopdong($mahopdong);
            $check_msv=$this->sv->check_isset_msv($msv);
            $check_empty = false;
            if(!empty($mahopdong)&&!empty($msv)&&!empty($tsv)&&!empty($ngs)&&!empty($qq)&&!empty($gt)&&!empty($sdt)&&!empty($phg)&&!empty($tnh)&&!empty($tienpd)&&!empty($tiendd)){
                $check_empty = true;
            }
            // $phong_tk = $this->phg->phong_tk($phg,$tnh);
            // while ($row=mysqli_fetch_array($phong_tk)){
            //     $sosvo = $row['sosvo'];
            // }
            

            if($check_empty){
                if($check_mahopdong==false){
                    if($check_msv==false){
                        if($sosvo<8){
                            $sosvo = $sosvo + 1;
                            $kq = $this->hopdong->Insert_ins($mahopdong,$msv,$phg,$tnh,$ngl,$ngkt,$tienpd,$tiendd,$tienct,$nguoilp,$trangthai);
                            $res = $this->sv->Insert_ins($msv,$tsv,$ngs,$qq,$gt,$sdt);
                            $update_phong = $this->phg->phong_update($phg,$tnh,$sosvo);
                            // $ngs,$qq,$gt,$sdt
                            if($kq && $res && $update_phong){
                                $this->view("ViewMaster",[
                                    "thongbao_qlhopdong"=>"Thêm thành công",
                                    "page_find_hopdong"=>"Qlhopdong_view",
                                    'dl'=>$this->hopdong->hopdong_tk('','','','')
                                ]);
                                // $this->upd->phong_update('','',$sosvo);
                            }else{
                                $this->view("ViewMaster",[
                                    "thongbao_qlhopdong"=>"Thêm thất bại",
                                    "page_find_hopdong"=>"Qlhopdong_view",
                                    'dl'=>$this->hopdong->hopdong_tk('','','','')
                                ]);
                            }
                        }else{
                            $this->view("ViewMaster",[
                                "thongbao_hopdong_insert"=>"phòng đã đủ 8 người ở !",
                                "page_insert_hopdong"=>"Themhopdong_view",
                                'mahopdong'=>$mahopdong,
                                'msv'=>$msv,
                                'tsv'=>$tsv,
                                'ngs'=>$ngs,
                                'qq'=>$qq,
                                'gt'=>$gt,
                                'sdt'=>$sdt,
                                'phg'=>$phg,
                                'tnh'=>$tnh,
                                'ngl'=>$ngl,
                                'ngkt'=>$ngkt,
                                'tienpd'=>$tienpd,
                                'tiendd'=>$tiendd
                            ]);
                        }
                    }else{
                        $this->view("ViewMaster",[
                            "thongbao_hopdong_insert"=>"Mã sinh viên đã tồn tại !",
                            "page_insert_hopdong"=>"Themhopdong_view",
                            'mahopdong'=>$mahopdong,
                            'msv'=>$msv,
                            'tsv'=>$tsv,
                            'ngs'=>$ngs,
                            'qq'=>$qq,
                            'gt'=>$gt,
                            'sdt'=>$sdt,
                            'phg'=>$phg,
                            'tnh'=>$tnh,
                            'ngl'=>$ngl,
                            'ngkt'=>$ngkt,
                            'tienpd'=>$tienpd,
                            'tiendd'=>$tiendd
                        ]);
                    }
                }else{
                    $this->view("ViewMaster",[
                        "thongbao_hopdong_insert"=>"Mã hợp đồng đã tồn tại",
                        "page_insert_hopdong"=>"Themhopdong_view",
                        'mahopdong'=>$mahopdong,
                        'msv'=>$msv,
                        'tsv'=>$tsv,
                        'ngs'=>$ngs,
                        'qq'=>$qq,
                        'gt'=>$gt,
                        'sdt'=>$sdt,
                        'phg'=>$phg,
                        'tnh'=>$tnh,
                        'ngl'=>$ngl,
                        'ngkt'=>$ngkt,
                        'tienpd'=>$tienpd,
                        'tiendd'=>$tiendd
                    ]);
                }
            }else{
                $this->view("ViewMaster",[
                    "thongbao_hopdong_insert"=>$ngkt,
                    "page_insert_hopdong"=>"Themhopdong_view",
                    'mahopdong'=>$mahopdong,
                    'msv'=>$msv,
                    'tsv'=>$tsv,
                    'ngs'=>$ngs,
                    'qq'=>$qq,
                    'gt'=>$gt,
                    'sdt'=>$sdt,
                    'phg'=>$phg,
                    'tnh'=>$tnh,
                    'ngl'=>$ngl,
                    'ngkt'=>$ngkt,
                    'tienpd'=>$tienpd,
                    'tiendd'=>$tiendd
                ]);
            }
        }
    }
}
?>