<?php
if(isset($data['dl'])){
    $kq=$data['dl'];
    while ($row=mysqli_fetch_array($kq)){
        $mahopdong = $row['mahopdong'];
        $masv = $row['masv'];
        $tsv = $row['tensv'];
        $phg=$row['phong'];
        $tnh=$row['toanha'];
        $ngl=$row['ngaylap'];
        $ngkt=$row['ngaykt'];
        $tienpd=$row['tienphaidong'];
        $tiendd=$row['tiendadong'];
        $tienct=$row['tienconthieu'];
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
        table{width: 100%;padding-top: 20px; padding-left: 70px; padding-right: 30px;
		}
		.col2{
			width: 30%;
			text-align: left;
			height: 25px;
			padding: 10px 0px;

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
    <form method="POST" action="http://localhost/New-MVC/Qlhopdong/Update_hopdong">
        <table>
            <caption><h2 style="color: #2980B9;">Sửa hợp đồng</h2></caption>
            <tr>
                <td class="col1">
                    <label>Mã hợp đồng: </label>
                </td>
                <td class="col2">
                    <input class="input" type="text" name="txtmahopdong" value="<?php if(isset($data['mahopdong'])){echo $data['mahopdong'] ;}else{echo $mahopdong;}?>" readonly style="color: red;">
                </td>

                <td class="col1">
                    <label>Masv: </label>
                </td>
                <td class="col2">
                    <input class="input" type="text" name="txtmasv" value="<?php if(isset($data['msv'])){echo $data['msv'] ;}else{echo $masv;}?>" readonly style="color: red;">
                </td>
            </tr>
            <tr>
                <td class="col1">
                    <label>Họ và tên: </label>
                </td>
                <td class="col2">
                    <input class="input" type="text" name="txttensv" value="<?php if(isset($data['tsv'])){echo $data['tsv'] ;}else{echo $tsv;}?>" readonly style="color: red;">
                </td>
                <td class="col1">Toàn nhà: </td>
                <td class="col2">
                    <select class="dd2" name="ddtoanha">
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
                    <label>Phòng: </label>
                </td>
                <td class="col2">
                    <input class="input" type="text" name="txtphong" value="<?php if(isset($data['phg'])){echo $data['phg'] ;}else{echo $phg;}?>">
                </td>
                <td class="col1">
                    <label>Tiền phải đóng: </label>
                </td>
                <td class="col2">
                    <input class="input" type="number" name="txttienpd" value="<?php if(isset($data['tienpd'])){echo $data['tienpd'] ;}else echo $tienpd;?>">
                </td>
                
            </tr>

            <tr>
                <td class="col1">
                    <label>Ngày lập: </label>
                </td>
                <td class="col2">
                    <input class="dd2" type="date" name="txtngaylap" value="<?php if(isset($data['ngl'])){echo $data['ngl'] ;}else echo $ngl;?>" >
                </td>	
                <td class="col1">
                    <label>Tiền đã đóng: </label>
                </td>
                <td class="col2">
                    <input class="input" type="number" name="txttiendd" value="<?php if(isset($data['tiendd'])){echo $data['tiendd'] ;}else echo $tiendd;?>">
                </td>
                	
            </tr>
            
            <tr>
                <td class="col1">
                    <label>Ngày kết thúc: </label>
                </td>
                <td class="col2">
                    <input class="dd2" type="date" name="txtngaykt" value="<?php if(isset($data['ngkt'])){echo $data['ngkt'] ;}else echo $ngkt;?>">
                </td>	
                
                <td class="col1">
                    <label>Tiền còn thiếu: </label>
                </td>
                <td class="col2">
                    <input class="input" type="number" name="txttienct" value="<?php if(isset($data['tienct'])){echo $data['tienct'] ;}else echo $tienct;?>" readonly style="color: red;">
                </td>
            </tr>
            

            <tr>
                <td colspan="4" class="col3">
                    <button class="submit" type="submit"  name="submit_giahan"><i class="fa-solid fa-chess-pawn"></i> Thay đổi</button>
                </td>
            </tr>
            <tr>
                <td colspan="4" class="col3">
                    <label style="color: red">
                    <?php if(isset($data["thongbao_hopdong_giahan"])){?>
                        <p ><?php echo $data["thongbao_hopdong_giahan"] ?></p>
                    <?php }?>
                    </label>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>