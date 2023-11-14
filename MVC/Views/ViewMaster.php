<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Quản lý ktx</title>
	<style type="text/css">
		* {
			margin: 0px;
		}

		.wrapper {
			width: 100%;
			/*960px*/
			margin: 0px auto;
			background: #B3B3B3;
		}

		.header {
			height: 70px;
			background: #1C6CA2;
			padding: 10px 15px;
		}

		.menu {
			height: 40px;
			background: #17A2B7;
			/* background: #F03E1F; */
		}

		.menu>ul>li {
			float: left;
			list-style: none;
			padding: 10px 25px;
			position: relative;
		}

		.menu>ul>li>a {
			text-decoration: none;
			color: white;
		}

		.menu>ul>li:hover {
			display: block;
			background: #036774;
			/*#00bb55;*/
		}

		.menu>ul>li>ul {
			display: none;
			background: #3e454c;
			width: 200px;
			position: absolute;
			padding: 0px;
			top: 38px;
			left: 0px;
		}

		.menu>ul>li:hover ul {
			display: block;
			background: #036774;
			/*#1a1b1a;*/
		}

		.menu>ul>li>ul>li {
			list-style: none;
			padding: 10px 10px;
			border: 1px dotted gray;
		}

		.menu>ul>li>ul>li>a {
			text-decoration: none;
			color: white;
		}

		.menu>ul>li>ul>li:hover {
			display: block;
			background: #00bb55;
		}

		h1 {
			text-shadow: 0 0 3px black;
			text-align: right;
			padding-right: 270px;
			padding-top: 18px;
			color: white;
		}

		.article {
			width: 20%;
			/* background-color: #1C578F; */
			background-color: #1C6CA2;
			float: left;
			height: 580px;

		}

		.article>ul {
			padding: 0px;
		}

		.article>ul>li {
			list-style: none;
			padding: 14.5px 20px;
			border: #B1B1B1 dotted 1px;
		}

		.article>ul>li>a {
			text-decoration: none;
			display: block;
			color: white;
			width: 100%;
			font-size: 17px;
		}

		.article>ul>li:hover {
			display: block;
			background: black;
			opacity: 0.6;
		}

		.article>ul>.active {
			display: block;
			background: black;
			opacity: 0.6;
		}

		.article img {
			width: 304px;
			height: 123px;
		}

		table {
			width: 60%;
			padding-top: 30px;
			padding-left: 70px;
			padding-right: 30px;
		}

		.col2 {
			width: 80%;
			text-align: left;
			height: 25px;
		}

		.col1 {
			width: 20%;
			text-align: left;
			height: 25px;
			color: #0008ff;
		}

		.col3 {
			width: 100%;
			text-align: center;
			padding: 5px 35px;
		}

		.aside {
			height: 570px;
			background-color: #f3f1f0;
			padding-top: 10px;
			border-right: solid 10px #211161;
			/* overflow-x:initial; */
			overflow-y: scroll;
		}

		footer {
			height: 70px;
			background: #56A4FE;
		}

		footer p {
			float: left;
			padding-top: 10px;
			padding-left: 10px;
			font-size: 17px;
			color: white;
			float: left;
		}

		.dc {
			padding-left: 860px;
		}

		cation {
			text-align: center;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="http://localhost/New-MVC/Public/fontawesome-free-6.2.1-web/css/all.css">
</head>

<body>

	<div class="wrapper">
		<div class="header">
			<h1>Website quản lý ký túc xá trường Đại Học CN GTVT cơ sở Vĩnh Phúc</h1>
		</div>
		<div class="menu">
			<ul>
				<li><a href="<?php if (isset($_SESSION['login']) && $_SESSION['login']) {
									echo 'http://localhost/New-MVC/Home';
								} ?>"><i class="fa-solid fa-house-user"></i> Trang chủ</a></li>
				<li><a href="http://localhost/New-MVC/Login/dang_xuat"><?php if (isset($_SESSION['login'])) {
																			echo '<i class="fa-solid fa-right-from-bracket"></i>  Đăng xuất';
																		} else echo '<i class="fa-solid fa-right-to-bracket"></i> Đăng nhập'; ?></a>
					<!-- <li><a href="">Chức năng</a>
					<ul>
						<li><a href="http://localhost/New-MVC/Insert_sinhvien/Themsv">Thêm</a></li>
						<li><a href="">Tìm kiếm</a></li>
						<li><a href="">Thống kê</a></li>
					</ul>
				</li> -->
					<!-- <li><a href="http://localhost/New-MVC/Login/dang_xuat">Thoát</a></li> -->
				<li><a href=""><i class="fa-solid fa-phone"></i> Liên hệ</a></li>
				<li><a href=""><i class="fa-solid fa-question"></i> Hướng dẫn</a></li>
			</ul>
		</div>
		<?php
		// echo '<pre>';
		// print_r($_GET['url']); 
		// echo '</pre>';
		//echo $_GET['url'];
		if (!empty($_GET['url'])) {
			$str = $_GET['url'];
			$arr = explode("/", $str);
			// Lấy phần tử đầu tiên của mảng
			$chuoi = $arr[0];
			//echo $chuoi;
		}
		?>
		<div class="article">
			<ul>
				<li <?php echo (!empty($chuoi) && $chuoi == 'Qlsinhvien') ? "class='active'" : false; ?>><a href="<?php if (isset($_SESSION['login']) && $_SESSION['login']) {
																												echo 'http://localhost/New-MVC/Qlsinhvien/Sinhvien_find';
																											} else {
																												echo 'http://localhost/New-MVC/Login/xu_ly_chua_dn';
																											} ?>"><i class="fa-solid fa-people-roof"></i> Quản lý sinh viên</a></li>
				<li <?php echo (!empty($chuoi) && $chuoi == 'Qlcanbo' || $chuoi == 'Insert_canbo') ? "class='active'" : false; ?>>
					<a href="<?php if (isset($_SESSION['login']) && $_SESSION['login']) {
									if (isset($_SESSION['phanquyen']) && $_SESSION['phanquyen'] == 'cb001') {
										echo 'http://localhost/New-MVC/Qlcanbo/Canbo_find';
									}
								} ?>"><i class="fa-solid fa-user-gear"></i> Quản lý cán bộ</a>
				</li>
				<li <?php echo (!empty($chuoi) && $chuoi == 'Qlphong' || $chuoi == 'Insert_phong') ? "class='active'" : false; ?>>
					<a href="<?php if (isset($_SESSION['login']) && $_SESSION['login']) {
									echo 'http://localhost/New-MVC/Qlphong/Phong_find';
								} else {
									echo 'http://localhost/New-MVC/Login/xu_ly_chua_dn';
								} ?>"><i class="fa-solid fa-person-shelter"></i> Quản lý phòng</a>
				</li>
				<li <?php echo (!empty($chuoi) && $chuoi == 'Qlthietbi' || $chuoi == 'Insert_thietbi') ? "class='active'" : false; ?>>
					<a href="<?php if (isset($_SESSION['login']) && $_SESSION['login']) {
									echo 'http://localhost/New-MVC/Qlthietbi/Thietbi_find';
								} else {
									echo 'http://localhost/New-MVC/Login/xu_ly_chua_dn';
								} ?>"><i class="fa-solid fa-computer"></i> Quản lý thiết bị</a>
				</li>
				<li <?php echo (!empty($chuoi) && $chuoi == 'Qlhoadon' || $chuoi == 'Insert_hoadon') ? "class='active'" : false; ?>>
					<a href="<?php if (isset($_SESSION['login']) && $_SESSION['login']) {
									echo 'http://localhost/New-MVC/Qlhoadon/Hoadon_find';
								} else {
									echo 'http://localhost/New-MVC/Login/xu_ly_chua_dn';
								} ?>"><i class="fa-solid fa-file-invoice-dollar"></i> Quản lý hóa đơn</a>
				</li>
				<li <?php echo (!empty($chuoi) && $chuoi == 'Qlhopdong' || $chuoi == 'Insert_hopdong') ? "class='active'" : false; ?>>
					<a href="<?php if (isset($_SESSION['login']) && $_SESSION['login']) {
									echo 'http://localhost/New-MVC/Qlhopdong/Hopdong_find';
								} else {
									echo 'http://localhost/New-MVC/Login/xu_ly_chua_dn';
								} ?>"><i class="fa-solid fa-file-signature"></i> Quản lý hợp đồng</a>
				</li>
				<li style="color: white;">------------------------------------------------</li>
			</ul>
			<img src="http://localhost/New-MVC/Public/Image/logo.jpg">
		</div>

		<div class="aside">


			<?php
			if (isset($data["jpg"])) {
				require_once "./MVC/Views/Pages/" . $data["jpg"] . ".php";
			}

			if (isset($data["page_dn"])) {
				require_once "./MVC/Views/Pages/" . $data["page_dn"] . ".php";
			}
			if (isset($data["page"])) {
				require_once "./MVC/Views/Pages/" . $data["page"] . ".php";
			}

			// if(isset($data["page_insert_sv"])){
			// 	require_once "http://localhost/New-MVC/MVC/Views/Pages/View_qlsinhvien/".$data["page_insert_sv"].".php";
			// }
			if (isset($data["page_find_sv"])) {
				require_once "./MVC/Views/Pages/View_qlsinhvien/" . $data["page_find_sv"] . ".php";
			}

			if (isset($data["page_find_cb"])) {
				require_once "./MVC/Views/Pages/View_qlcanbo/" . $data["page_find_cb"] . ".php";
			}
			if (isset($data["page_insert_cb"])) {
				require_once "./MVC/Views/Pages/View_qlcanbo/" . $data["page_insert_cb"] . ".php";
			}

			if (isset($data["page_find_lp"])) {
				require_once "./MVC/Views/Pages/View_qllop/" . $data["page_find_lp"] . ".php";
			}
			if (isset($data["page_insert_lp"])) {
				require_once "./MVC/Views/Pages/View_qllop/" . $data["page_insert_lp"] . ".php";
			}


			if (isset($data["page_find_hd"])) {
				require_once "./MVC/Views/Pages/View_qlhoadon/" . $data["page_find_hd"] . ".php";
			}
			if (isset($data["page_insert_hd"])) {
				require_once "./MVC/Views/Pages/View_qlhoadon/" . $data["page_insert_hd"] . ".php";
			}


			if (isset($data["page_find_tb"])) {
				require_once "./MVC/Views/Pages/View_qlthietbi/" . $data["page_find_tb"] . ".php";
			}
			if (isset($data["page_insert_tb"])) {
				require_once "./MVC/Views/Pages/View_qlthietbi/" . $data["page_insert_tb"] . ".php";
			}

			if (isset($data["page_find_hopdong"])) {
				require_once "./MVC/Views/Pages/View_qlhopdong/" . $data["page_find_hopdong"] . ".php";
			}
			if (isset($data["page_insert_hopdong"])) {
				require_once "./MVC/Views/Pages/View_qlhopdong/" . $data["page_insert_hopdong"] . ".php";
			}


			if (isset($data["page_find_ketthuchopdong"])) {
				require_once "./MVC/Views/Pages/View_qlketthuchopdong/" . $data["page_find_ketthuchopdong"] . ".php";
			}


			if (isset($data["page_find_phong"])) {
				require_once "./MVC/Views/Pages/View_qlphong/" . $data["page_find_phong"] . ".php";
			}

			?>


		</div>
		<footer>
			<p>Ðường dây nóng<br>
				0966149525
			</p>
			<p class="dc">Đc: 278/Phường Đồng tâm/Thành phố Vĩnh Yên/Tỉnh Vĩnh Phúc.
			</p>
		</footer>
	</div>
</body>

</html>