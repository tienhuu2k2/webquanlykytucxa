<?php
class Insert_phong extends Controller{
    public $phg;
    function __construct()
    {
        $this->phg=$this->model("Model_qlphong");
    }
    function Themphong(){
    	$this->view("ViewMaster",[
            "page_find_phong"=>"Themphong_view"
    	]);
    }
    function TrangChu(){
        $mdsv = $this->model("ModelSinhVien");
        // muốn sử dụng $teo ở trang Home.php thì phải khai báo đối tượng ($this->controller = new $this->controller) ở app.php
        echo $mdsv->GetSV();
    }
    function Ins_phong(){
        if(isset($_POST['submit_them'])){
            $phg= $_POST['txtphong'];
            $tnh= $_POST['txttoanha'];
            $slsvo = 0;
            $check_phong = $this->phg->check_isset_phong($phg,$tnh);
            $check_empty = false;
            if(!empty($phg)&&!empty($tnh)){
                $check_empty = true;
            }
            
            if($check_empty){
                if(!$check_phong){
                    $kq = $this->phg->Insert_phong($phg,$tnh,$slsvo);                   
                    if($kq){
                        $this->view("ViewMaster",[
                            "thongbao_qlphong"=>"Thêm phòng thành công",
                            "page_find_phong"=>"Qlphong_view"
                        ]);
                    }else{
                        $this->view("ViewMaster",[
                            "thongbao_qlphong"=>"Thêm thất bại",
                            "page_find_phong"=>"Themcanbo_view"
                        ]);
                    }
                }else{
                    $this->view("ViewMaster",[
                        "thongbao_qlphong"=>"Phòng đã tồn tại",
                        "page_find_phong"=>"Themphong_view",
                        "phg"=>$phg,
                        "tnh"=>$tnh
                    ]);
                }
                
            }else{
                $this->view("ViewMaster",[
                    "thongbao_qlphong"=>"xin vui lòng nhập đủ thông tin",
                    "page_find_phong"=>"Themphong_view",
                    "phg"=>$phg,
                    "tnh"=>$tnh
                ]);
            }
        }
    }
}
?>