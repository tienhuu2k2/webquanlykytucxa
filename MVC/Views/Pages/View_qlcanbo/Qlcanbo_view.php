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
		
		.col1{width:25%; color:blue; padding-left: 130px;font-size: 18px;color: black;}
        .col2{width: 30%;padding-top: 5px;padding-left: 70px;}
        .col3{padding-left: 30px;padding-top: 10px;padding-bottom: 10px;}
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
			width: 220px;
			height: 30px;
            text-align: center;
			display: inline-block;
		    border-radius: 5px;
		    border-color: white;
		    box-sizing: border-box;
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
			width: 138px;	
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
			/* padding-left: 530px; */
			padding-top:10px;
			text-align: center;
			/* padding-right:10px; */
		}
		.ins{
			padding-left: 970px;
			padding-top: 5px;
			padding-bottom: 15px;
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
<form method="post" action="http://localhost/New-MVC/Qlcanbo/Timkiem_cb">
				<label style="padding-left: 10px;color:#2980B9;"><i class="fa-solid fa-user"></i> Tên cán bộ: <?php if(isset($_SESSION['user'])){echo $_SESSION['user'];} ?></label>
				<label style="padding-left: 870px;color:#2980B9;"><i class="fa-solid fa-calendar-days"></i> <?php date_default_timezone_set('Asia/Ho_Chi_Minh'); echo date('d/m/Y');?></label>
				<table >
					<caption style="padding-left: 30px;"><h2>Quản lý cán bộ</h2></caption>
					<tr>
						<td class="col1">
							<label>Mã cán bộ: </label>
						</td>
						
						<td class="col2">
							<input class="input" type="text" name="txtmacb" value="<?php if(isset($data['mcb'])){echo $data['mcb'];} ?>">
						</td>

						<td class="col3" colspan="2">
							<a class="link"  href="http://localhost/New-MVC/Insert_canbo/Themcb">
							<i class="fa-solid fa-floppy-disk"></i>
							Insert</a>
						</td>
						
					</tr>
					
					
					<tr>
						<td class="col1">
							<label>Tên cán bộ: </label>
						</td>
						<td class="col2">
							<input class="input" type="text" name="txttencb" value="<?php if(isset($data['tcb'])){echo $data['tcb'];} ?>">
						</td>	

						<td class="col3" colspan="2">
							<!-- <input class="submit" type="submit" name="submit_tk"  value="Tìm kiếm" /> -->
							<button class="submit" type="submit" name="submit_tk">
							<i class="fa-solid fa-magnifying-glass"></i>
							Tìm kiếm</button>
						</td>
					
					</tr>
					<tr>
						<td colspan="3" class="thongbao">
							<label>
								<?php if(isset($data["thongbao_qlcb"])){
									echo $data["thongbao_qlcb"];
								} ?>
							</label>
						</td>
					</tr>
				</table>

				<table class="table">
       
		            <tr style="background: #e9dcdc;">
						<th><i class="fa-solid fa-file-signature"></i> Tên đăng nhập</th>
						<th><i class="fa-solid fa-key"></i> Mật khẩu</th>
		                <th><i class="fa-solid fa-user-nurse"></i> Mã cán bộ</th>
		                <th><i class="fa-solid fa-user-tie"></i> Tên cán bộ</th>
		                <th><i class="fa-solid fa-envelope"></i> Email</th>
		                <th><i class="fa-solid fa-mobile-screen-button"></i> Số điện thoại</th>
						<th><i class="fa-solid fa-location-dot"></i> địa chỉ</th>
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
						<td><?php echo $row['tendn'] ?></td>
						<td><?php echo $row['mk'] ?></td>
						<td><?php echo $row['macb'] ?></td>
						<td><?php echo $row['tencb'] ?></td>
						<td><?php echo $row['email'] ?></td>
						<td><?php echo $row['sdt'] ?></td>
						<td><?php echo $row['dc'] ?></td>
						
						<td>
							<a href="http://localhost/New-MVC/Qlcanbo/Sua_cb/<?php echo $row['macb']; ?>">
							<i class="fa-solid fa-wrench item"></i></a>
						</td>
						<td>
							<a onclick="return confirm('Bạn có chắc chắn muốn xóa ?')" href="http://localhost/New-MVC/Qlcanbo/Xoa_cb/<?php echo $row['macb']; ?>">
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