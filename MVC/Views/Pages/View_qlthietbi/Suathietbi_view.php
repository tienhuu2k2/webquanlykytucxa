<?php
if(isset($data['dl'])){
    $kq=$data['dl'];
    while ($row=mysqli_fetch_array($kq)){
        $phg = $row['phong'];
        $tnh = $row['toanha'];
        $mtb = $row['mathietbi'];
        $ttb = $row['tenthietbi'];
        $sl = $row['soluong'];
        $tt = $row['tinhtrang'];
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
        table{width: 80%;padding-top: 20px; padding-left: 70px; padding-right: 30px;
		}
		.col2{
			width: 80%;
			text-align: left;
			height: 25px;
			padding: 9px 0px;
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
    <form method="POST" action="http://localhost/New-MVC/Qlthietbi/Update_thietbi">
        <table>
            <caption><h2 style="color: #2980B9;">Sửa thiết bị</h2></caption>
            <tr>
                <td class="col1">
                    <label>Phòng: </label>
                </td>
                <td class="col2">
                    <input class="input" type="text" name="txtphong" value="<?php if(isset($data['phg'])){echo $data['phg'] ;}else{echo $phg;}?>" readonly style="color: red;">
                </td>
            </tr>
            <tr>
                <td class="col1">Toàn nhà</td>
                <td class="col2">
                    <select class="dd2" name="ddtoanha" readonly style="color: red;">
                        <option value="">--Chọn tòa nhà--</option>
                        <option value="a" <?php if(isset($data['tnh']) && $data['tnh']=='a'){echo 'selected';}else{if($tnh=='a'){echo 'selected';}} ?> >Tòa A</option>
                        <option value="b1" <?php if(isset($data['tnh']) && $data['tnh']=='b1'){echo 'selected';}else{if($tnh=='b1'){echo 'selected';}} ?> >Tòa B1</option>
                        <option value="b2" <?php if(isset($data['tnh']) && $data['tnh']=='b2'){echo 'selected';}else{if($tnh=='b2'){echo 'selected';}} ?> >Tòa B2</option>
                        <option value="c" <?php if(isset($data['tnh']) && $data['tnh']=='c'){echo 'selected';}else{if($tnh=='c'){echo 'selected';}} ?> >Tòa C</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="col1">
                    <label>Mã tb: </label>
                </td>
                <td class="col2">
                    <input class="input" type="text"  name="txtmatb" value="<?php if(isset($data['mtb'])){echo $data['mtb'] ;}else{echo $mtb;}?>">
                </td>
            </tr>
            <tr>
                <td class="col1">
                    <label>Tên tb: </label>
                </td>
                <td class="col2">
                    <input class="input" type="text" name="txttentb" value="<?php if(isset($data['ttb'])){echo $data['ttb'] ;}else{echo $ttb;}?>">
                </td>
            </tr>
            
            <tr>
                <td class="col1">
                    <label>Số lượng: </label>
                </td>
                <td class="col2">
                    <input class="input" type="number" name="txtslg" value="<?php if(isset($data['sl'])){echo $data['sl'] ;}else{echo $sl;}?>">
                </td>
            </tr>
            <tr>
                <td class="col1">Tình trạng: </td>
                <td class="col2">
                    <select class="dd2" name="ddtinhtrang">
                        <option value="">--Tình trạng--</option>
                        <option value="bình thường" <?php if(isset($data['tt']) && $data['tt']=='bình thường'){echo 'selected';}else{if($tt=='bình thường'){echo 'selected';}} ?>>Bình thường</option>
                        <option value="hỏng" <?php if(isset($data['tt']) && $data['tt']=='hỏng'){echo 'selected';}else{if($tt=='hỏng'){echo 'selected';}} ?>>Hỏng</option>
                        <option value="chưa có" <?php if(isset($data['tt']) && $data['tt']=='chưa có'){echo 'selected';}else{if($tt=='chưa có'){echo 'selected';}} ?>>Chưa có</option>
                    </select>
                </td>
            </tr>
            
            <tr>
                <td colspan="2" class="col3">
                    <button class="submit" type="submit" name="submit_sua"><i class="fa-solid fa-pen-to-square"></i> Update</button>
                </td>
            </tr>
            <tr>
                <td colspan="2" class="col3">
                    <label style="color: red">
                    <?php if(isset($data["thongbao_tb_sua"])){?>
                        <p ><?php echo $data["thongbao_tb_sua"] ?></p>
                    <?php }?>
                    </label>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>