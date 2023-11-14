<?php
// session_start();
class Login extends Controller{
    public $sv;
    function __construct()
    {
        $this->sv=$this->model("Model_login");
    }
    function Dangnhap(){
    	$this->view_dangnhap("Dangnhap",[
            "page_dn"=>"Dangnhap"
    	]);
    }
    function TrangChu(){
        $mdsv = $this->model("ModelSinhVien");
        // muốn sử dụng $teo ở trang Home.php thì phải khai báo đối tượng ($this->controller = new $this->controller) ở app.php
        echo $mdsv->GetSV();
    }
    function khachhangdangnhap(){
        if(isset($_POST['btndangnhap'])){
            $check_phanquyen = false;
            $tdn = $_POST['txtusername'];
            $mk = $_POST['txtpassword'];
            if (empty($tdn) || empty($mk)){
                $this->view_dangnhap("Dangnhap",[
                    "kt_nhap"=>'Chưa nhập "tên đăng nhập" hoặc "mật khẩu"!',
                    'tdn'=>$tdn,
                    'mk'=>$mk
                ]);
            }else{
                $check_dn = $this->sv->check_isset_username($tdn);
                $check_mk = $this->sv->check_mk($tdn,$mk);
                
                if($check_dn&&$check_mk){
                    $kq=$this->sv->display_usernam($tdn);
                    $phanquyen=$this->sv->check_phanquyen($tdn,$mk);
                    ?>
                        <script>
                            alert('Đăng nhập thành công');
                        </script>
                    <?php
                    $_SESSION['user']=$kq;
                    $_SESSION['login']=true;
                    $_SESSION['phanquyen']=$phanquyen;
                    $this->view("ViewMaster",[
                        'jpg'=>'Home_view'
                    ]);
                }else{
                    $this->view_dangnhap("Dangnhap",[
                        "tb_thatbai"=>"Tên đăng nhập hoặc mật khẩu không đúng",
                        'tdn'=>$tdn,
                        'mk'=>$mk
                    ]);
                }
            }
            
        }
        

    }
    function dang_xuat(){
        if(isset($_SESSION['login'])){
            ?>
                <script>
                    alert('Bạn đã đăng xuất khỏi hệ thống');
                </script>
            <?php
            unset($_SESSION['login']);
            unset($_SESSION['user']);
            unset($_SESSION['phanquyen']);
            $this->view_dangnhap("Dangnhap",[
                
            ]);
        // header('location:http://localhost/New-MVC/Login/Dangnhap');
        }else{
            $this->view_dangnhap("Dangnhap",[
                
            ]);
        }
    }
    function xu_ly_chua_dn(){
        echo "<script>alert('Bạn chưa đăng nhập. xin vui lòng đăng nhập !');</script>";
        $this->view("ViewMaster",[
            "page_dn"=>"Dangnhap"
        ]);

    }
    
    

}
?>
