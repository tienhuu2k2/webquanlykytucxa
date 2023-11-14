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
			width: 130px;	
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
<?php 

    ?>
    <form method="POST" action="http://localhost/New-MVC/Insert_hoadon/Ins_hoadon">
        <table>
            <caption><h2 style="color: #2980B9;">Lập hóa đơn</h2></caption>

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
                    <label>Số điện: </label>
                </td>
                <td class="col2">
                    <input class="input" type="number" name="txtsodien" value="<?php if(isset($data['sd'])){echo $data['sd'];} ?>">
                </td>
                <td class="col1">
                    <label>Số nước: </label>
                </td>
                <td class="col2">
                    <input class="input" type="number" name="txtsonuoc" value="<?php if(isset($data['sn'])){echo $data['sn'];} ?>">
                </td>
   
            </tr>
            
            <tr>
                <td class="col1">
                    <label>Giá điện /1 số: </label>
                </td>
                <td class="col2">
                    <input class="input" type="number" name="txtgiadien" value="<?php if(isset($data['gid'])){echo $data['gid'];} ?>">
                </td>
                <td class="col1">
                    <label>Giá nước /1 số: </label>
                </td>
                <td class="col2">
                    <input class="input" type="number" name="txtgianuoc" value="<?php if(isset($data['gin'])){echo $data['gin'];} ?>">
                </td>
                
            </tr>

            <tr>
                <td class="col1">
                    <label>Ngày : </label>
                </td>
                <td class="col2">
                    <input class="input" type="number" name="txtngay" value="<?php if(isset($data['ngay'])){echo $data['ngay'];} ?>">
                </td>
                <td class="col1">Loại wifi: </td>
                <td class="col2">
                    <select class="dd2" name="ddwifi">
                        <option value="">--Chọn wifi--</option>
                        <option value="loai1" <?php if(isset($data['lwf']) && $data['lwf']=='loai1'){echo 'selected';} ?>>Loại 1</option>
                        <option value="loai2" <?php if(isset($data['lwf']) && $data['lwf']=='loai2'){echo 'selected';} ?>>Loại 2</option>
                        <option value="loai3" <?php if(isset($data['lwf']) && $data['lwf']=='loai3'){echo 'selected';} ?>>Loại 3</option>
                    </select>
                </td>
                
                
            </tr>

            <tr>
                <td class="col1">Tháng: </td>
                <td class="col2">
                    <select class="dd2" name="ddthang">
                        <option value="">--Tháng--</option>
                        <option value='1' <?php if(isset($data['thang']) && $data['thang']=='1'){echo 'selected';} ?>>Tháng 1</option>
                        <option value='2' <?php if(isset($data['thang']) && $data['thang']=='2'){echo 'selected';} ?>>Tháng 2</option>
                        <option value='3' <?php if(isset($data['thang']) && $data['thang']=='3'){echo 'selected';} ?>>Tháng 3</option>
                        <option value='4' <?php if(isset($data['thang']) && $data['thang']=='4'){echo 'selected';} ?>>Tháng 4</option>
                        <option value='5' <?php if(isset($data['thang']) && $data['thang']=='5'){echo 'selected';} ?>>Tháng 5</option>
                        <option value='6' <?php if(isset($data['thang']) && $data['thang']=='6'){echo 'selected';} ?>>Tháng 6</option>
                        <option value='7' <?php if(isset($data['thang']) && $data['thang']=='7'){echo 'selected';} ?>>Tháng 7</option>
                        <option value='8' <?php if(isset($data['thang']) && $data['thang']=='8'){echo 'selected';} ?>>Tháng 8</option>
                        <option value='9' <?php if(isset($data['thang']) && $data['thang']=='9'){echo 'selected';} ?>>Tháng 9</option>
                        <option value='10' <?php if(isset($data['thang']) && $data['thang']=='10'){echo 'selected';} ?>>Tháng 10</option>
                        <option value='11' <?php if(isset($data['thang']) && $data['thang']=='11'){echo 'selected';} ?>>Tháng 11</option>
                        <option value='12' <?php if(isset($data['thang']) && $data['thang']=='12'){echo 'selected';} ?>>Tháng 12</option>
                    </select>
                </td>
                <td class="col1">
                    <label>Trạng thái: </label>
                </td>
                <td class="col2">
                    <select class="dd2" name="ddtrangthai">
                        <option value="">--Trạng thái--</option>
                        <option value="đã thanh toán" <?php if(isset($data['tt']) && $data['tt']=='đã thanh toán'){echo 'selected';} ?>>Đã thanh toán</option>
                        <option value="chưa thanh toán" <?php if(isset($data['tt']) && $data['tt']=='chưa thanh toán'){echo 'selected';} ?>>Chưa thanh toán</option>
                    </select>
                </td>
                
                
            </tr>
            
            <tr>
                <td class="col1">Năm: </td>
                <td class="col2">
                    <select class="dd2" name="ddnam">
                        <option value="">--Năm--</option>
                        <option value='2020' <?php if(isset($data['nam']) && $data['nam']=='2020'){echo 'selected';} ?>>2020</option>
                        <option value='2021' <?php if(isset($data['nam']) && $data['nam']=='2021'){echo 'selected';} ?>>2021</option>
                        <option value='2022' <?php if(isset($data['nam']) && $data['nam']=='2022'){echo 'selected';} ?>>2022</option>
                        <option value='2023' <?php if(isset($data['nam']) && $data['nam']=='2023'){echo 'selected';} ?>>2023</option>
                        <option value='2024' <?php if(isset($data['nam']) && $data['nam']=='2024'){echo 'selected';} ?>>2024</option>
                        <option value='2025' <?php if(isset($data['nam']) && $data['nam']=='2025'){echo 'selected';} ?>>2025</option>
                        <option value='2026' <?php if(isset($data['nam']) && $data['nam']=='2026'){echo 'selected';} ?>>2026</option>
                        <option value='2027' <?php if(isset($data['nam']) && $data['nam']=='2027'){echo 'selected';} ?>>2027</option>
                        <option value='2028' <?php if(isset($data['nam']) && $data['nam']=='2028'){echo 'selected';} ?>>2028</option>
                    </select>
                </td>
                
                
                
                
            </tr>
            
            <tr>
                <td class="col1">
                <label>Ghi chú: </label>
                </td>
                <td colspan="2" class="col2">
					<textarea name="txtghichu" rows="4" style="width: 95%; border-radius:5px;"><?php if(isset($data['ghch'])){echo $data['ghch'];} ?></textarea>
				</td>

                <td class="col3">
                    <button class="submit" type="submit" name="submit_them"><i class="fa-regular fa-calendar-plus"></i> Lập</button>
                </td>
            </tr>
            <tr>
                <td colspan="4" class="col3">
                    <label style="color: red">
                    <?php if(isset($data["thongbao_hd_insert"])){?>
                        <p ><?php echo $data["thongbao_hd_insert"] ?></p>
                    <?php }?>
                    </label>
                </td>
            </tr>

           
        </table>
    </form>
</body>
</html>