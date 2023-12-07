<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<!-- list -->
	<script defer src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
	<!-- list -->

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="path/to/boxicons.min.css">
	<!-- My CSS -->
	<link rel="stylesheet" href="css/style.css">

	<script src="scrip.js"></script>

	<title>AdminHub</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="index.php?act=home" class="brand">
			<i class='bx bxs-alarm-add	'></i>
			<span class="text">PATShop</span>
		</a>
		<ul class="side-menu top">
			<li class="<?php echo (!isset($_GET['act']) || $_GET['act'] === 'home') ? 'active' : ''; ?>">
				<a href="index.php?act=home">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Trang Chủ</span>
				</a>
			</li>
			<?php
			if (isset($_SESSION['ten_dang_nhap'])) {?>
<li class="<?php echo (!isset($_GET['act']) || $_GET['act'] === 'listdm') ? 'active' : ''; ?>" >
				<a href="index.php?act=danhmuc">
					<i class='bx bxs-category' ></i>
					<span class="text">Danh Mục</span>
				</a>
			</li>
			
			<li class="<?php echo (!isset($_GET['act']) || $_GET['act'] === 'listsp') ? 'active' : ''; ?>">
				<a href="index.php?act=listsp">
					<i class='bx bxs-shopping-bag' ></i>
					<span class="text">Sản Phẩm</span>
				</a>
			</li>
			
			<li class="<?php echo (!isset($_GET['act']) || $_GET['act'] === 'listkhachhang') ? 'active' : ''; ?>">
				<a href="index.php?act=listkhachhang">
					<i class='bx bxs-group' ></i>
					<span class="text">Khách Hàng</span>
				</a>
			</li>
			<!-- <li class="<?php echo (!isset($_GET['act']) || $_GET['act'] === 'listbinhluan') ? 'active' : ''; ?>">
				<a href="index.php?act=listbinhluan">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Bình Luận</span>
				</a>
			</li> -->
			<li class="<?php echo (!isset($_GET['act']) || $_GET['act'] === 'listdonhang') ? 'active' : ''; ?>">
				<a href="index.php?act=listdonhang">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Quản Lý Đơn Hàng</span>
				</a>
			</li>
            <li class="<?php echo (!isset($_GET['act']) || $_GET['act'] === 'listthongke') ? 'active' : ''; ?>">
				<a href="index.php?act=listthongke">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Thống Kê</span>
				</a>
			</li>
			<?php
			}else{?>
			
			<li class="<?php echo (!isset($_GET['act']) || $_GET['act'] === 'listdm') ? 'active' : ''; ?>" >
				<a href="index.php?act=dangnhap">
					<i class='bx bxs-category' ></i>
					<span class="text">Danh Mục</span>
				</a>
			</li>
			
			<li class="<?php echo (!isset($_GET['act']) || $_GET['act'] === 'listsp') ? 'active' : ''; ?>">
				<a href="index.php?act=dangnhap">
					<i class='bx bxs-shopping-bag' ></i>
					<span class="text">Sản Phẩm</span>
				</a>
			</li>
			
			<li class="<?php echo (!isset($_GET['act']) || $_GET['act'] === 'listkhachhang') ? 'active' : ''; ?>">
				<a href="index.php?act=dangnhap">
					<i class='bx bxs-group' ></i>
					<span class="text">Khách Hàng</span>
				</a>
			</li>
			<!-- <li class="<?php echo (!isset($_GET['act']) || $_GET['act'] === 'listbinhluan') ? 'active' : ''; ?>">
				<a href="index.php?act=listbinhluan">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Bình Luận</span>
				</a>
			</li> -->
			<li class="<?php echo (!isset($_GET['act']) || $_GET['act'] === 'listdonhang') ? 'active' : ''; ?>">
				<a href="index.php?act=dangnhap">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Quản Lý Đơn Hàng</span>
				</a>
			</li>
            <li class="<?php echo (!isset($_GET['act']) || $_GET['act'] === 'listthongke') ? 'active' : ''; ?>">
				<a href="index.php?act=dangnhap">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Thống Kê</span>
				</a>
			</li>
			<?php }?>
            <!-- <li class="">
				<a href="index.php?act=dangnhap">
					<i class='bx bxs-chart' ></i>
					<span class="text">Biểu Đồ</span>
				</a>
			</li> -->
		
		</ul>
		
	</section>
    <section id="content">
    <nav>
	<?php
        if (isset($_SESSION['ten_dang_nhap'])) {
			?>
			<i class='bx bx-menu' ></i>
	
	<form action="index?act=thoat">
		<div class="form-input">
			<!-- <input type="search" placeholder="Search..."> -->
			<!-- <button type="submit" class="search-btn"><i class='bx bx-search' ></i></button> -->
		</div>
	</form>
	<input type="checkbox" id="switch-mode" hidden>
	<label for="switch-mode" class="switch-mode"></label>
	
	<a href="#" class="profile">
		<img src="img/people.png">
	</a>
	<ul class="side-menu pt-3 px-3">

	<li>

		<a href="index.php?act=thoat" class="logout">
			<i class='bx bxs-log-out-circle' ></i>
			<span class="text">Logout</span> 


		</a>
	</li>
</ul>
       <?php }else{?>
		<ul class="side-menu pt-3 px-3">

	<li>

		<a href="index.php?act=dangnhap" class="logout">
			<i class='bx bxs-log-out-circle' ></i>
			<span class="text">Đăng nhập</span> 


		</a>
	</li>
            
			
		<?php }?>
		</nav>
		