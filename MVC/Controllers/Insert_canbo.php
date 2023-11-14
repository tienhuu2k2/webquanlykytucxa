<?php
class Insert_canbo extends Controller{
    public $cb;
    function __construct()
    {
        $this->cb=$this->model("Model_qlcanbo");
    }
    function Themcb(){
    	$this->view("ViewMaster",[
            "page_insert_cb"=>"Themcanbo_view"
    	]);
    }
    function TrangChu(){
        $mdsv = $this->model("ModelSinhVien");
        // muốn sử dụng $teo ở trang Home.php thì phải khai báo đối tượng ($this->controller = new $this->controller) ở app.php
        echo $mdsv->GetSV();
    }
    function Ins_canbo(){
        if(isset($_POST['submit_them'])){
            $tdn= $_POST['txttendn'];
            $mk= $_POST['txtmk'];
            $mcb = $_POST['txtmacb'];
            $tcb = $_POST['txttencb'];
            $email = $_POST['txtemail'];
            $sdt =  $_POST['txtsdt'];
            $dc =  $_POST['txtdc'];
            $check_mcb=$this->cb->check_isset_mcb($mcb);
            $check_tdn=$this->cb->check_isset_tdn($tdn);
            $check_empty = false;
            if(!empty($tdn)&&!empty($mk)&&!empty($mcb)&&!empty($tcb)&&!empty($email)&&!empty($sdt)&&!empty($dc)){
                $check_empty = true;
            }
            if($check_empty){
                if($check_tdn==false){
                    if($check_mcb==false){
                        $kq = $this->cb->Insert_canbo($tdn,$mk,$mcb,$tcb,$email,$sdt,$dc);                       
                        if($kq){
                            $this->view("ViewMaster",[
                                "thongbao_qlcb"=>"Thêm thành công",
                                "page_insert_cb"=>"Qlcanbo_view"
                            ]);
                        }else{
                            $this->view("ViewMaster",[
                                "thongbao_cb_insert"=>"Thêm thất bại",
                                "page_insert_cb"=>"Themcanbo_view"
                            ]);
                        }
                    }else{
                        $this->view("ViewMaster",[
                            "thongbao_cb_insert"=>"mã cán bộ đã tồn tại",
                            "page_insert_cb"=>"Themcanbo_view"
                        ]);
                    }
                }else{
                    $this->view("ViewMaster",[
                        "thongbao_cb_insert"=>"tên đăng nhập đã tồn tại",
                        "page_insert_cb"=>"Themcanbo_view"
                    ]);
                }
            }else{
                $this->view("ViewMaster",[
                    "thongbao_cb_insert"=>"xin vui lòng nhập đủ thông tin",
                    "page_insert_cb"=>"Themcanbo_view"
                ]);
            }
        }
    }
}
?>