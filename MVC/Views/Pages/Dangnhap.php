<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/css/reset.css">
    <link rel="stylesheet" href="../Public/css/app.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <title>Đăng nhập</title>
</head>

<body>
    <div id="wrapper">
        <form method="post" id="form-login" action="http://localhost/New-MVC/Login/khachhangdangnhap" >
            <h1 class="form-heading">Đăng nhập</h1>
            <div class="form-group">
                <i class="far fa-user"></i>
                <input type="text" class="form-input" name='txtusername' value="<?php if(isset($data['tdn'])){echo $data['tdn'];} ?>" placeholder="Tên đăng nhập">
            </div>
            <div class="form-group">
                <i class="fas fa-key"></i>
                <input type="password" class="form-input" name='txtpassword' value="<?php if(isset($data['mk'])){echo $data['mk'];} ?>" placeholder="Mật khẩu">
                <div id="eye">
                    <i class="far fa-eye"></i>
                </div>
            </div>
            <input type="submit" value="Đăng nhập" name="btndangnhap" class="form-submit">

			<?php if(isset($data["kt_nhap"])){?>
        		<p style="color:red; font-size:15px; text-align:center; padding-top: 15px;"><?php echo $data["kt_nhap"] ?></p>
			<?php }?>

			<?php if(isset($data["tb_thatbai"])){?>
				<p style="color:red; font-size:15px; text-align:center; padding-top: 15px;"><?php echo $data["tb_thatbai"] ?></p>
			<?php }?>
        </form>
    </div>
    
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="../Public/js/app.js"></script>
</html>