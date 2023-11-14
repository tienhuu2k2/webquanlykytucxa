<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type ="text/css">
        *{margin: 0px;}
        table{width: 100%;padding-top: 15px; padding-left: 20px; padding-right: 5px;
		}
		
		.col1{width:20%;padding-top: 20px; color:blue; padding-left: 60px;font-size: 18px;color: black;}
        .col2{width: 25%;padding-left: 60px;padding-top: 20px;}
        .col3{padding-left: 100px;padding-top: 20px;}
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
			width: 220px;
			height: 35px;
			display: inline-block;
		    border-radius: 5px;
		    border-color: #2980B9;
			font-size: 18px;
		    /* box-sizing: border-box; */
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
		.thongbao{
			color: red;
			/* padding-left: 500px; */
			padding-top:10px;
			text-align: center;
			/* padding-right:10px; */
		}
		.submit:hover{
			color: white;
			background-color: #2980B9;
		}
		.table td,th{
			/* border:1px solid #333; */
			padding: 5px 10px;
			font-size: 18px;
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
			border-radius: 3px;
		}

    </style>
</head>
<body>
			<form method="post" enctype="multipart/form-data" action="http://localhost/New-MVC/Qlsinhvien/Timkiem_sv">
				<label style="padding-left: 10px;color:#2980B9;"><i class="fa-solid fa-user"></i> Tên cán bộ: <?php if(isset($_SESSION['user'])){echo $_SESSION['user'];} ?></label>
				<label style="padding-left: 870px;color:#2980B9;"><i class="fa-solid fa-calendar-days"></i> <?php date_default_timezone_set('Asia/Ho_Chi_Minh'); echo date('d/m/Y');?></label>
				<table>
					
					<caption><h2>Quản lý sinh viên</h2></caption>
					<tr>
						<td class="col1">
							<label>Mã sinh viên: </label>
						</td>
						<td class="col2">
							<input class="input" type="text" name="txtmasv" value="<?php if(isset($data['msv'])){echo $data['msv'];} ?>">
						</td>

						<td class="col1"><label>Quê quán:</label></td>
						<td class="col2">
						<input class="input" type="text" name="txtquequan" value="<?php if(isset($data['qq'])){echo $data['qq'];} ?>">
						</td>
						<td  class="col3">
							<button class="submit" type="submit" name="submit_tk"><i class="fa-solid fa-magnifying-glass"></i> Tìm kiếm</button>
						</td>
						
					</tr>
					<tr>
						<td class="col1">
							<label>Họ và tên: </label>
						</td>
						<td class="col2">
							<input class="input" type="text"  name="txttensv" value="<?php if(isset($data['tensv'])){echo $data['tensv'];} ?>">
						</td>
					
		                <td class="col1"><label>Giới tính:</label> </td>
						<td class="col2">
							<select class="dd2" name="ddgioitinh">
								<option value="">--chọn giới tính--</option>
								<option value="nam" <?php if(isset($data['gt']) && $data['gt']=='nam'){echo 'selected';} ?>>nam</option>
								<option value="nữ" <?php if(isset($data['gt']) && $data['gt']=='nữ'){echo 'selected';} ?>>nữ</option>
								<option value="khác" <?php if(isset($data['gt']) && $data['gt']=='khác'){echo 'selected';} ?>>Khác</option>
							</select>
						</td>
						
						<td  class="col3">
							
						</td>
		            </tr>
					<tr>

					</tr>
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

					<tr>
						<td colspan="5" class="thongbao">
							<label>
								<?php if(isset($data["thongbao_qlsv"])){
									echo $data["thongbao_qlsv"];
								} ?>
							</label>
						</td>
					</tr>
					<!-- <tr>
						<td colspan="4" class="col3">
							<label style="color: red">fdsfdsfffds</label>
						</td>
					</tr> -->
				</table>

				<table class="table" >
       
		            <tr style="background: #e9dcdc;">
		                <th><i class="fa-solid fa-graduation-cap"></i> Mã sinh viên</th>
		                <th><i class="fa-solid fa-chess-queen"></i> Họ và tên</th>
						<th><i class="fa-solid fa-landmark"></i> phòng</th>
		                <th><i class="fa-solid fa-landmark"></i> Tòa nhà</th>
		                <th><i class="fa-solid fa-stopwatch-20"></i> Ngày sinh</th>
		                <th><i class="fa-solid fa-map-location-dot"></i> Quê quán</th>
		                <th><i class="fa-solid fa-transgender"></i> Giới tính</th>
		                <th><i class="fa-solid fa-mobile-screen-button"></i> Điện thoại</th>
                        <th><i class="fa-solid fa-wrench"></i> Sửa</th>
                        
		            </tr>
					<tr>
						<?php
						if(isset($data['dl']) && $data['dl']!=null){
							$dem=0;
							while($row=mysqli_fetch_assoc($data['dl'])){
							$dem++;
						?>
						<td><?php echo $row['masv'] ?></td>
						<td><?php echo $row['tensv'] ?></td>
						<td><?php echo $row['phong'] ?></td>
						<td><?php echo $row['toanha'] ?></td>
						<td><?php echo $row['ngaysinh'] ?></td>
						<td><?php echo $row['quequan'] ?></td>
						<td><?php echo $row['gioitinh'] ?></td>
						<td><?php echo $row['sdt'] ?></td>
						<td>
							<a href="http://localhost/New-MVC/Qlsinhvien/Sua_sv/<?php echo $row['masv']; ?>">
							<i class="fa-solid fa-wrench item"></i></a>
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