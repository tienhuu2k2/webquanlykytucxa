<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        *{margin: 0px;}
        table{width: 100%;padding-top: 20px; padding-left: 70px; padding-right: 30px;
		}
		.col2{
			width: 30%;
			text-align: left;
			height: 25px;
			padding: 5px 0px;

		}
		.col1{
			    width: 20%;
    			text-align: left;
   				height: 25px;
   			    color: black;
   			    font-size: 18px;
		}
		.col3{
			width: 100%;
			text-align: center;
			padding: 20px 35px;
			/*padding-top: 30px;*/
		}
		.dd2{
			width: 70%;
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
            padding-top: 25px;
        }
    </style>
</head>
<body>
    <form method="POST" action="http://localhost/New-MVC/Insert_hopdong/Ins_hopdong">
        <table>
            <caption><h2>Tạo hợp đồng</h2></caption>
            <tr>
                <td class="col1">
                    <label>Mã hợp đồng: </label>
                </td>
                <td class="col2">
                    <input class="input" type="text" name="txtmahopdong" value="<?php if(isset($data['mahopdong'])){echo $data['mahopdong'];} ?>">
                </td>

                <td class="col1">
                    <label>Masv: </label>
                </td>
                <td class="col2">
                    <input class="input" type="text" name="txtmasv" value="<?php if(isset($data['msv'])){echo $data['msv'];} ?>">
                </td>
            </tr>
            <tr>
                <td class="col1">
                    <label>Họ và tên: </label>
                </td>
                <td class="col2">
                    <input class="input" type="text" name="txttensv" value="<?php if(isset($data['tsv'])){echo $data['tsv'];} ?>">
                </td>
                <td class="col1">Chọn loại hợp đồng : </td>
                <td class="col2">
                    <select class="dd2" name="ddhopdong">
                        <option value="">--Chọn hợp đồng--</option>
                        <option value="3" <?php if(isset($data['kthd']) && $data['kthd']=='3'){echo 'selected';} ?>>3 tháng</option>
                        <option value="6" <?php if(isset($data['kthd']) && $data['kthd']=='6'){echo 'selected';} ?>>6 tháng</option>
                        <option value="12" <?php if(isset($data['kthd']) && $data['kthd']=='12'){echo 'selected';} ?>>12 tháng</option>
                        <option value="24" <?php if(isset($data['kthd']) && $data['kthd']=='24'){echo 'selected';} ?>>24 tháng</option>
                    </select>
                </td>
                
            </tr>
            
            <tr>
                <td class="col1">  
                    <label>Ngày sinh: </label>
                </td>
                <td class="col2">
                    <input class="dd2" type="date" name="txtngaysinh" value="<?php if(isset($data['ngs'])){echo $data['ngs'];} ?>">
                </td>

                <td class="col1">
                    <label>Quê quán: </label>
                </td>
                <td class="col2">
                    <input class="input" type="text" name="txtquequan" value="<?php if(isset($data['qq'])){echo $data['qq'];} ?>">
                </td>	
            </tr>
            
            <tr>
                <td class="col1"><label>Giới tính:</label> </td>
                <td class="col2">
                    <select class="dd2" name="ddgioitinh">
                        <option value="">--chọn giới tính--</option>
                        <option value="nam" <?php if(isset($data['gt']) && $data['gt']=='nam'){echo 'selected';} ?>>nam</option>
                        <option value="nữ" <?php if(isset($data['gt']) && $data['gt']=='nữ'){echo 'selected';} ?>>nữ</option>
                        <option value="khác" <?php if(isset($data['gt']) && $data['gt']=='khác'){echo 'selected';} ?>>Khác</option>
                    </select>
                </td>

                <td class="col1">
                    <label>Sđt: </label>
                </td>
                <td class="col2">
                    <input class="input" type="tel" name="txtsdt" value="<?php if(isset($data['sdt'])){echo $data['sdt'];} ?>">
                </td>
            </tr>
            <tr>
                <td class="col1">
                    <label>Phòng: </label>
                </td>
                <td class="col2">
                    <input class="input" type="text" name="txtphong" value="<?php if(isset($data['phg'])){echo $data['phg'];} ?>">
                </td>

                <td class="col1">Toàn nhà: </td>
                <td class="col2">
                    <select class="dd2" name="ddtoanha">
                        <option value="">--Chọn tòa nhà--</option>
                        <option value="a" <?php if(isset($data['tnh']) && $data['tnh']=='a'){echo 'selected';} ?>>Tòa A</option>
                        <option value="b1" <?php if(isset($data['tnh']) && $data['tnh']=='b1'){echo 'selected';} ?>>Tòa B1</option>
                        <option value="b2" <?php if(isset($data['tnh']) && $data['tnh']=='b2'){echo 'selected';} ?>>Tòa B2</option>
                        <option value="c" <?php if(isset($data['tnh']) && $data['tnh']=='c'){echo 'selected';} ?>>Tòa C</option>
                    </select>
                </td>
            </tr>
            
            <tr>
                <td class="col1">
                    <label>Tiền phải đóng: </label>
                </td>
                <td class="col2">
                    <input class="input" type="number" name="txttienpd" value="<?php if(isset($data['tienpd'])){echo $data['tienpd'];} ?>">
                </td>	
                <td class="col1">
                    <label>Tiền đã đóng: </label>
                </td>
                <td class="col2">
                    <input class="input" type="number" name="txttiendd" value="<?php if(isset($data['tiendd'])){echo $data['tiendd'];} ?>">
                </td>
            </tr>

            <tr>
                <td colspan="4" class="col3">
                    <button class="submit" type="submit" name="submit_them"><i class="fa-solid fa-circle-plus"></i> Tạo hợp đồng</button>
                </td>
            </tr>
            <tr>
                <td colspan="4" class="col3" style="padding-top: 0px;">
                    <label style="color: red">
                    <?php if(isset($data["thongbao_hopdong_insert"])){?>
                        <p ><?php echo $data["thongbao_hopdong_insert"] ?></p>
                    <?php }?>
                    </label>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>