<?php
if(isset($data['dl'])){
    $kq=$data['dl'];
    while ($row=mysqli_fetch_array($kq)){
        $msv = $row['masv'];
        $tsv = $row['tensv'];
        $ngs = $row['ngaysinh'];
        $qq = $row['quequan'];
        $gt = $row['gioitinh'];
        $sdt = $row['sdt'];
        
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        *{margin: 0px;}
        table{width: 80%;height: 100%;padding-top: 20px; padding-left: 70px; padding-right: 30px;
		}
		.col2{
			width: 80%;
			text-align: left;
			height: 25px;
			padding: 7px 0px;

		}
		.col1{
			    width: 20%;
    			text-align: left;
   				height: 25px;
   			    color: black;
   			    font-size: 18px;
		}
		.col3{
			width: 20%;
			text-align: center;
			padding: 20px 0px;
			/*padding-top: 30px;*/
		}
		.dd2{
			width: 35%;
			height: 40px;
            text-align: center;
			display: inline-block;
		    border-radius: 5px;
		    border-color: white;
		    box-sizing: border-box;
		}
		.input{
			width: 70%;
			height: 40px;
			display: inline-block;
		    border-radius: 5px;
		    border-color: white;
		    box-sizing: border-box;
		}
		.submit{
			width: 148px;	
			height: 40px;
			background-color: white;
		    color: #2980B9;
		    border: 2px solid;
		    border-radius: 5px;
		    border-color: #2980B9;
		    cursor: pointer;
		    font-size: 17px;
		    
		}
		.submit:hover{
			color: white;
			background-color: #2980B9;
		}
		table caption{
            padding-top: 20px;
        }

    </style>
</head>
<body>
    <form method="POST" action="http://localhost/New-MVC/Qlsinhvien/Update_sv">
        <table>
            <caption><h2 style="color: #2980B9;">Sửa thông tin sinh viên</h2></caption>
            <tr>
                <td class="col1">
                    <label>Masv: </label>
                </td>
                <td class="col2">
                    <input class="input" type="text" name="txtmasv" value="<?php if(isset($data['msv'])){echo $data['msv'] ;}else{echo $msv;}?>" readonly style="color: red;">
                </td>
            </tr>
            <tr>
                <td class="col1">
                    <label>Họ và tên: </label>
                </td>
                <td class="col2">
                    <input class="input" type="text" name="txttensv" value="<?php if(isset($data['tsv'])){echo $data['tsv'] ;}else{echo $tsv;}?>">
                </td>
            </tr>
            
            
            
            <tr>
                <td class="col1">
                    <label>Ngày sinh: </label>
                </td>
                <td class="col2">
                    <input class="dd2" type="date" name="txtngaysinh" value="<?php if(isset($data['ngs'])){echo $data['ngs'] ;}else{echo $ngs;}?>">
                </td>	
            </tr>
            <tr>
                <td class="col1">
                    <label>Quê quán: </label>
                </td>
                <td class="col2">
                    <input class="input" type="text" name="txtquequan" value="<?php if(isset($data['qq'])){echo $data['qq'] ;}else{echo $qq;}?>">
                </td>	
            </tr>
            <tr>
                <td class="col1"><label>Giới tính:</label> </td>
                <td class="col2">
                    <select class="dd2" name="ddgioitinh">
                        <option value="">--chọn giới tính--</option>
                        <option value="nam" <?php if(isset($data['gt']) && $data['gt']=='nam'){echo 'selected';}else{if($gt=='nam'){echo 'selected';}} ?>>nam</option>
                        <option value="nữ" <?php if(isset($data['gt']) && $data['gt']=='nữ'){echo 'selected';}else{if($gt=='nữ'){echo 'selected';}} ?>>nữ</option>
                        <option value="khác"  <?php if(isset($data['gt']) && $data['gt']=='khác'){echo 'selected';}else{if($gt=='khác'){echo 'selected';}} ?>>Khác</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="col1">
                    <label>Sđt: </label>
                </td>
                <td class="col2">
                    <input class="input" type="tel"  name="txtsdt" value="<?php if(isset($data['sdt'])){echo $data['sdt'] ;}else{echo $sdt;}?>">
                </td>
            </tr>
            
            <tr>
                <td colspan="2" class="col3" style="padding: 10px 0px;">
                    <button class="submit" type="submit" name="submit_sua"><i class="fa-solid fa-pen-to-square"></i> Update</button>
                </td>
            </tr>
            <tr>
                <td colspan="2" class="col3" style="padding:0px 0px;">
                    <label style="color: red">
                    <?php if(isset($data["thongbao_sv_sua"])){?>
                        <p ><?php echo $data["thongbao_sv_sua"] ?></p>
                    <?php }?>
                    </label>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>