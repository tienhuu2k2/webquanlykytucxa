<?php
class Insert_thietbi extends Controller{
    public $tb;
    function __construct()
    {
        $this->tb=$this->model("Model_qlthietbi");
    }
    function Themtb(){
    	$this->view("ViewMaster",[
            "page_insert_tb"=>"Themthietbi_view"
    	]);
    }
    function TrangChu(){
        $mdsv = $this->model("ModelSinhVien");
        // muốn sử dụng $teo ở trang Home.php thì phải khai báo đối tượng ($this->controller = new $this->controller) ở app.php
        echo $mdsv->GetSV();
    }
    function Ins_thietbi(){
        if(isset($_POST['submit_them'])){
            $phg = $_POST['txtphong'];
            $tt = $_POST['ddtinhtrang'];
            $mtb = $_POST['txtmatb'];
            $ttb = $_POST['txttentb'];
            $tnh = $_POST['ddtoanha'];
            $sl =  $_POST['txtslg'];
            $check_mtb=$this->tb->check_isset_mtb($mtb,$phg,$tnh);
            $check_empty = false;
            if(!empty($phg)&&!empty($tt)&&!empty($mtb)&&!empty($ttb)&&!empty($tnh)&&!empty($sl)){
                $check_empty = true;
            }
            if($check_empty){
                if($check_mtb==false){
                    $kq = $this->tb->Insert_thietbi($phg,$tnh,$mtb,$ttb,$sl,$tt);
                    if($kq){
                        $this->view("ViewMaster",[
                            "thongbao_tb_insert"=>"Thêm thành công",
                            "page_insert_tb"=>"Themthietbi_view"
                        ]);
                    }else{
                        $this->view("ViewMaster",[
                            "thongbao_tb_insert"=>"Thêm thất bại",
                            "page_insert_tb"=>"Themthietbi_view"
                        ]);
                 
                    }
                }else{
                    $this->view("ViewMaster",[
                        "thongbao_tb_insert"=>"mã thiết bị đã tồn tại",
                        "page_insert_tb"=>"Themthietbi_view"
                    ]);
                }
            }else{
                $this->view("ViewMaster",[
                    "thongbao_tb_insert"=>"xin vui lòng nhập đủ thông tin",
                    "page_insert_tb"=>"Themthietbi_view"
                ]);
            }
        }
    }
}
?>