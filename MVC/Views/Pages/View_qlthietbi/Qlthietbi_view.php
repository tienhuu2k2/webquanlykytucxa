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
		
		.col1{width:15%; padding-top: 15px; padding-left: 30px;font-size: 18px;color: black;}
        .col2{width: 25%;padding-top: 15px;}
        .col3{padding-left: 30px;padding-top: 15px;}
        .dd1{height: 22px; width: 100px;}
		.link{
			width: 123px;
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
			width: 131px;	
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
			/* padding-right:10px; */
			text-align: center;
		}
		.submit:hover{
			color: white;
			background-color: #2980B9;
		}
		.table{
			padding-top:15px;
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
<form method="post" action="http://localhost/New-MVC/Qlthietbi/Timkiem_tb">
				<label style="padding-left: 10px;color:#2980B9;"><i class="fa-solid fa-user"></i> Tên cán bộ: <?php if(isset($_SESSION['user'])){echo $_SESSION['user'];} ?></label>
				<label style="padding-left: 870px;color:#2980B9;"><i class="fa-solid fa-calendar-days"></i> <?php date_default_timezone_set('Asia/Ho_Chi_Minh'); echo date('d/m/Y');?></label>
				<table>
					<caption><h2>Quản lý thiết bị</h2></caption>
					<tr>
						<td class="col1">
							<label>Mã thiết bị: </label>
						</td>
						<td class="col2">
							<input class="input" type="text" name="txtmatb" value="<?php if(isset($data['mtb'])){echo $data['mtb'];} ?>">
						</td>

						<td class="col1">
							<label>Phòng: </label>
						</td>
						<td class="col2">
							<input class="input" type="text" name="txtphong" value="<?php if(isset($data['phg'])){echo $data['phg'];} ?>">
						</td>
						<td  class="col3">
							<a class="link"  href="http://localhost/New-MVC/Insert_thietbi/Themtb"><i class="fa-solid fa-floppy-disk"></i> Insert</a>
						</td>
						
					</tr>
					<tr>
						<td class="col1">
							<label>Tên thiết bị: </label>
						</td>
						<td class="col2">
							<input class="input" type="text" name="txttentb" value="<?php if(isset($data['ttb'])){echo $data['ttb'];} ?>">
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
						<td class="col1">Tình trạng: </td>
						<td class="col2">
							<select class="dd2" name="ddtinhtrang">
								<option value="">--Tình trạng--</option>
								<option value="bình thường" <?php if(isset($data['tt']) && $data['tt']=='bình thường'){echo 'selected';} ?>>Bình thường</option>
								<option value="hỏng" <?php if(isset($data['tt']) && $data['tt']=='hỏng'){echo 'selected';} ?>>Hỏng</option>
								<option value="chưa có" <?php if(isset($data['tt']) && $data['tt']=='chưa có'){echo 'selected';} ?>>Chưa có</option>
							</select>
						</td>
						<td class="col1"></td>
						<td class="col2">
						</td>
						<td  class="col3">
							
							
						</td>
					</tr>
					
					<tr>
						<td colspan="5" class="thongbao">
							<label>
								<?php if(isset($data["thongbao_qltb"])){
									echo $data["thongbao_qltb"];
								} ?>
							</label>
						</td>
					</tr>
					
				</table>

				<table class="table" >
       
		            <tr style="background: #e9dcdc;">
		                <th><i class="fa-solid fa-person-shelter"></i> Phòng</th>
		                <th><i class="fa-solid fa-building"></i> Tòa nhà</th>
		                <th><i class="fa-solid fa-fan"></i> Mã thiết bị</th>
		                <th><i class="fa-solid fa-lightbulb"></i> Tên thiết bị</th>
		                <th><i class="fa-solid fa-arrow-up-wide-short"></i> Số lượng</th>
		                <th><i class="fa-solid fa-signal"></i> Tình trạng</th>
                        <th><i class="fa-solid fa-wrench"></i> Sửa</th>
                        <th><i class="fa-solid fa-trash"></i> Xóa</th>
		                
		            </tr>
					<tr>
						<?php
						if(isset($data['dl']) && $data['dl']!=null){
							$dem=0;
							while($row=mysqli_fetch_assoc($data['dl'])){  
								$dem++;      
						?>
						<td><?php echo $row['phong'] ?></td>
						<td><?php echo $row['toanha'] ?></td>
						<td><?php echo $row['mathietbi'] ?></td>
						<td><?php echo $row['tenthietbi'] ?></td>
						<td><?php echo $row['soluong'] ?></td>
						<td><?php echo $row['tinhtrang'] ?></td>
						
						<td>
							<a href="http://localhost/New-MVC/Qlthietbi/Sua_thietbi/<?php echo $row['phong']; ?>/<?php echo $row['toanha']; ?>">
							<i class="fa-solid fa-wrench item"></i></a>
						</td>
						<td>
							<a onclick="return confirm('Bạn có chắc chắn muốn xóa ?')" href="http://localhost/New-MVC/Qlthietbi/Xoa_tb/<?php echo $row['phong']; ?>/<?php echo $row['toanha']; ?>">
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