<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type ="text/css">
        *{margin: 0px;}
        table{width: 100%;padding-top: 20px; padding-left: 20px; padding-right: 5px;
		}
		
		.col1{width:30%; padding-left: 50px;padding-top: 15px;font-size: 18px;color: black;}
        .col2{width: 30%;padding-top: 15px;padding-left: 40px;}
        .col3{padding-left: 70px;padding-top: 15px}
        .dd1{height: 22px; width: 100px;}
		.link{
			width: 128px;
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
			width: 134px;	
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
			/* padding-left: 570px; */
			text-align: center;
			padding-top:10px;
			padding-bottom:10px;
			padding-right:10px;
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
<form method="post" enctype="multipart/form-data" action="http://localhost/New-MVC/Qlhoadon/Timkiem_hoadon">
				<label style="padding-left: 10px; color:#2980B9;"><i class="fa-solid fa-user"></i> Tên cán bộ: <?php if(isset($_SESSION['user'])){echo $_SESSION['user'];} ?></label>
				<label style="padding-left: 870px;color:#2980B9;"><i class="fa-solid fa-calendar-days"></i> <?php date_default_timezone_set('Asia/Ho_Chi_Minh'); echo date('d/m/Y');?></label>
				<table>
					<caption><h2>Quản lý hóa đơn</h2></caption>
					<tr>
						<td class="col1">
							<label>Mã hóa đơn: </label>
						</td>
						<td class="col2">
							<input class="input" type="text"  name="txtmahd" value="<?php if(isset($data['mhd'])){echo $data['mhd'];} ?>">
						</td>

						<td class="col1">
							<label>Phòng: </label>
						</td>
						<td class="col2">
							<input class="input" type="text" name="txtphong" value="<?php if(isset($data['phg'])){echo $data['phg'];} ?>">
						</td>
						
						<td  class="col3">
							<a class="link"  href="http://localhost/New-MVC/Insert_hoadon/Themhd"><i class="fa-solid fa-floppy-disk"></i> Insert</a>
						</td>
					</tr>
					<tr>
						<td class="col1">Tháng: </td>
						<td class="col2">
							<select class="dd2" name="ddthang">
								<option value="">--Tháng--</option>
								<option value="1" <?php if(isset($data['thang']) && $data['thang']=="1"){echo 'selected';} ?>>Tháng 1</option>
								<option value="2" <?php if(isset($data['thang']) && $data['thang']=="2"){echo 'selected';} ?>>Tháng 2</option>
								<option value="3" <?php if(isset($data['thang']) && $data['thang']=="3"){echo 'selected';} ?>>Tháng 3</option>
								<option value="4" <?php if(isset($data['thang']) && $data['thang']=="4"){echo 'selected';} ?>>Tháng 4</option>
								<option value="5" <?php if(isset($data['thang']) && $data['thang']=="5"){echo 'selected';} ?>>Tháng 5</option>
								<option value="6" <?php if(isset($data['thang']) && $data['thang']=="6"){echo 'selected';} ?>>Tháng 6</option>
								<option value="7" <?php if(isset($data['thang']) && $data['thang']=="7"){echo 'selected';} ?>>Tháng 7</option>
								<option value="8" <?php if(isset($data['thang']) && $data['thang']=="8"){echo 'selected';} ?>>Tháng 8</option>
								<option value="9" <?php if(isset($data['thang']) && $data['thang']=="9"){echo 'selected';} ?>>Tháng 9</option>
								<option value="10" <?php if(isset($data['thang']) && $data['thang']=="10"){echo 'selected';} ?>>Tháng 10</option>
								<option value="11" <?php if(isset($data['thang']) && $data['thang']=="11"){echo 'selected';} ?>>Tháng 11</option>
								<option value="12" <?php if(isset($data['thang']) && $data['thang']=="12"){echo 'selected';} ?>>Tháng 12</option>
							</select>
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
						<td class="col1">Năm: </td>
						<td class="col2">
							<select class="dd2" name="ddnam">
								<option value="">--Năm--</option>
								<option value="2020" <?php if(isset($data['nam']) && $data['nam']=="2020"){echo 'selected';} ?>>2020</option>
								<option value="2021" <?php if(isset($data['nam']) && $data['nam']=="2021"){echo 'selected';} ?>>2021</option>
								<option value="2022" <?php if(isset($data['nam']) && $data['nam']=="2022"){echo 'selected';} ?>>2022</option>
								<option value="2023" <?php if(isset($data['nam']) && $data['nam']=="2023"){echo 'selected';} ?>>2023</option>
								<option value="2024" <?php if(isset($data['nam']) && $data['nam']=="2024"){echo 'selected';} ?>>2024</option>
								<option value="2025" <?php if(isset($data['nam']) && $data['nam']=="2025"){echo 'selected';} ?>>2025</option>
								<option value="2026" <?php if(isset($data['nam']) && $data['nam']=="2026"){echo 'selected';} ?>>2026</option>
								<option value="2027" <?php if(isset($data['nam']) && $data['nam']=="2027"){echo 'selected';} ?>>2027</option>
								<option value="2028" <?php if(isset($data['nam']) && $data['nam']=="2028"){echo 'selected';} ?>>2028</option>
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


						<td  class="col3">
							

						</td>
					</tr>

					<tr>
						<td colspan="5" class="thongbao">
							<label>
								<?php if(isset($data["thongbao_qlhd"])){
									echo $data["thongbao_qlhd"];
								} ?>
							</label>
						</td>
					</tr>
					
					
				</table>

				<table class="table">
       
		            <tr style="background: #e9dcdc;">
		                <th>Mã hđ</th>
		                <th>Phg</th>
		                <th>Tn</th>
						<th>Số đ</th>
						<th>Giá đ</th>
		                <th>Tiền đ</th>
						<th>Số n</th>
		                <th>Giá n</th>
		                <th>Tiền n</th>
		                <th>Tiền m</th>
						<th>Ngày</th>
						<th>Tháng</th>
						<th>Năm</th>
						<th>Thành tiền</th>
						<th>Người lập</th>
						<th>Trạng thái</th>
		                <th>Ghi ch</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
		                
		            </tr>

					<tr>
						<?php
						if(isset($data['dl']) && $data['dl']!=null){
							$dem=0;
							while($row=mysqli_fetch_assoc($data['dl'])){ 
								$dem++;       
						?>
						<td><?php echo $row['hoadon'] ?></td>
						<td><?php echo $row['phong'] ?></td>
						<td><?php echo $row['toanha'] ?></td>
						<td><?php echo $row['sodiendadung']?></td>
						<td><?php echo $row['giadien'] ?></td>
						<td><?php echo $row['tiendien'] ?></td>
						<td><?php echo $row['sonuocdadung'] ?></td>
						<td><?php echo $row['gianuoc'] ?></td>
						<td><?php echo $row['tiennuoc'] ?></td>
						<td><?php echo $row['giawifi'] ?></td>
						<td><?php echo $row['ngay'] ?></td>
						<td><?php echo $row['thang'] ?></td>
						<td><?php echo $row['nam'] ?></td>
						<td><?php echo $row['thanhtien'] ?></td>
						<td><?php echo $row['nguoilap'] ?></td>
						<td><?php echo $row['trangthai'] ?></td>
						<td><?php echo $row['ghichu'] ?></td>
						
						<td>
							<a href="http://localhost/New-MVC/Qlhoadon/Sua_hd/<?php echo $row['hoadon'];?>/<?php echo $row['thang'];?>/<?php echo $row['nam'];?>/<?php echo $row['phong'];?>/<?php echo $row['toanha'];?>">
							<i class="fa-solid fa-wrench item"></i></a>
						</td>
						<td>
							<a onclick="return confirm('Bạn có chắc chắn muốn xóa ?')" href="http://localhost/New-MVC/Qlhoadon/Xoa_hd/<?php echo $row['hoadon']; ?>">
							<i class="fa-solid fa-trash item"></i></a>
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