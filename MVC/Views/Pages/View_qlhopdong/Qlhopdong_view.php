<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type ="text/css">
        *{margin: 0px;}
        table{width: 100%;padding-top: 25px; padding-left: 20px; padding-right: 5px;
		}
		
		.col1{width:20%; color:blue; padding-left: 40px;font-size: 18px;color: black;}
        .col2{width: 25%;padding-top: 10px;padding-left: 80px;}
        .col3{padding-left: 30px;padding-top: 15px;padding-bottom: 10px;}
		.link{
			width: 130px;
			height: 20px;
			text-decoration: none;
			background-color: white;
		    color: #2980B9;
		    border: 2px solid;
		    border-radius: 5px;
		    border-color: #2980B9;
		    cursor: pointer;
		    font-size: 17px;
			font-family:arial;
			display: inline-block;
			padding-top: 9px;
			padding-left: 5px;
			padding-bottom: 9px;
		}
		.link:hover{
			color: white;
			opacity: 0.9;
			background-color: #2980B9;

		}
        .dd1{height: 22px; width: 100px;}

        .dd2{
			width: 228px;
			height: 40px;
            text-align: center;
			display: inline-block;
		    border-radius: 5px;
		    border-color: #2980B9;
		    /* box-sizing: border-box; */
		}
        .input{
			/*width: 20%;*/
			width: 220px;
			height: 35px;
			display: inline-block;
		    border-radius: 5px;
		    border-color: #2980B9;
			font-size: 18px;
		    /* box-sizing: border-box; */
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
		.thongbao{
			color: red;
			/* padding-left: 400px; */
			padding-top:10px;
			padding-bottom:10px;
			text-align: center;
			/* padding-right:10px; */
		}
		.table{
			padding-top:0px;
		}
		.table td,th{
			/* border:1px solid #333; */
			padding: 5px 10px;
			font-size: 16px;
		}
		.table th{
			background: #2980B9;
			color: white;
		}
		.table tbody tr:nth-child(odd){
			background: white;
			/* color: white; */
		}
		.table tr:hover{
			background: #6C757D;
			color: white;
		}
		.table tbody tr:nth-child(odd):hover{
			background: #6C757D;
			color: white;
		}
		.item{
			color:#0005C5;
			text-decoration:none;
			font-weight: bold;
		}
		.dem{
			width:30px;
			margin-left:22px;
			margin-bottom: 10px;
			border-radius: 3px;
		}
		
    </style>
</head>
<body>
			<form method="post" enctype="multipart/form-data" action="http://localhost/New-MVC/Qlhopdong/Timkiem_hopdong">
				<label style="padding-left: 10px;color:#2980B9;"><i class="fa-solid fa-user"></i> Tên cán bộ: <?php if(isset($_SESSION['user'])){echo $_SESSION['user'];} ?></label>
				<label style="padding-left: 870px;color:#2980B9;"><i class="fa-solid fa-calendar-days"></i> <?php date_default_timezone_set('Asia/Ho_Chi_Minh'); echo date('d/m/Y');?></label>
				<table>
					<caption><h2>Quản lý hợp đồng</h2></caption>
					<tr>
                        <td class="col1">
							<label>Mã hợp đồng: </label>
						</td>
						<td class="col2">
							<input class="input" type="text" name="txtmahopdong" value="<?php if(isset($data['mahopdong'])){echo $data['mahopdong'];} ?>">
						</td>

						<td class="col1">
						<label>Mã sinh viên: </label>
						</td>
						<td class="col2">
							<input class="input" type="text" name="txtmasv" value="<?php if(isset($data['msv'])){echo $data['msv'];} ?>">
						</td>

						
						<td  class="col3">
								<a class="link" style="width: 140px;"  href="http://localhost/New-MVC/Insert_hopdong/Themhopdong"><i class="fa-solid fa-floppy-disk"></i> Tạo hợp đồng</a>
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
						<td  class="col3">
							<button class="submit" type="submit" name="submit_tk"><i class="fa-solid fa-magnifying-glass"></i> Tìm kiếm</button>
						</td>
		            </tr>

					<tr>
					<td class="col1">Kỳ hạn hợp đồng: </td>
                        <td class="col2">
                            <select class="dd2" name="ddhopdong">
                            <option value="">--Chọn loại hợp đồng--</option>
                            <option value="3" <?php if(isset($data['tkhopdong']) && $data['tkhopdong']=='3'){echo 'selected';} ?>>3 tháng</option>
                            <option value="6" <?php if(isset($data['tkhopdong']) && $data['tkhopdong']=='6'){echo 'selected';} ?>>6 tháng</option>
                            <option value="12" <?php if(isset($data['tkhopdong']) && $data['tkhopdong']=='12'){echo 'selected';} ?>>1 năm</option>
                            <option value="24" <?php if(isset($data['tkhopdong']) && $data['tkhopdong']=='24'){echo 'selected';} ?>>2 năm</option>
                            </select>
                        </td>
					</tr>
                    
					
					<tr>
						<td colspan="5" class="thongbao">
							<label>
								<?php if(isset($data["thongbao_qlhopdong"])){
									echo $data["thongbao_qlhopdong"];
								} ?>
							</label>
						</td>
					</tr>
					
				</table>

				<table class="table">
		            <tr style="background: #e9dcdc;">
		                <th>Mã hợp đ</th>
		                <th>Mã sv</th>
		                <th>Tên sv</th>
		                <th>Phòng</th>
		                <th>Tn</th>
		                <th>Ngày lập</th>
                        <th>Ngày kt</th>
                        <th>Tiền pđ</th>
                        <th>Tiền đđ</th>
                        <th>Tiền ct</th>
                        <th>Người lập</th>
						<th>TT</th>
                        <th>Sửa</th>
						<th>KTHĐ</th>
                        <th>Xóa</th>
                        
		            </tr>
					<tr>
						<?php
						if(isset($data['dl']) && $data['dl']!=null){
							$dem=0;
							while($row=mysqli_fetch_assoc($data['dl'])){
								$dem++;
						?>
						<td><?php echo $row['mahopdong'] ?></td>
						<td><?php echo $row['masv'] ?></td>
						<td><?php echo $row['tensv'] ?></td>
						<td><?php echo $row['phong'] ?></td>
						<td><?php echo $row['toanha'] ?></td>
						<td><?php echo $row['ngaylap'] ?></td>
                        <td><?php echo $row['ngaykt'] ?></td>
                        <td><?php echo $row['tienphaidong'] ?></td>
                        <td><?php echo $row['tiendadong'] ?></td>
                        <td><?php echo $row['tienconthieu'] ?></td>
                        <td><?php echo $row['macb'] ?></td>
						<td><?php echo ($row['trangthai']==0)?'Đã KT':'Đang HĐ'; ?></td>
                        
						<td>
							<a class="item"  href="http://localhost/New-MVC/Qlhopdong/Sua_hopdong/<?php echo $row['mahopdong']; ?>">
									Sửa</a>
						</td>
						<td>
							<a class="item"  href="http://localhost/New-MVC/Qlhopdong/Ketthuc_hopdong/<?php echo $row['mahopdong']; ?>">
									KT</a>
						</td>
						<td>
							<a class="item" onclick="return confirm('Bạn có chắc chắn muốn xóa ?')" href="http://localhost/New-MVC/Qlhopdong/Xoa_hopdong/<?php echo $row['mahopdong']; ?>/<?php echo $row['trangthai']; ?>/<?php echo $row['masv']; ?>">
							Xóa</a>
						</td>
					</tr>
						<?php
							}
						}
						if(!empty($data['dl'])){
							echo '<input class="dem" type="text" value="'.$dem.'" readonly>';
						}
						?>
		        </table>
    		</form>
</body>
</html>