<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
</head>
<body class="light-theme">
<div class="main-conten login-panel login-panel-2">
        
        <div class="login-body login-body-2">
            <div class="top d-flex justify-content-between align-items-center">
                
                <!-- <a href="index.html"><i class="fa-duotone fa-house-chimney"></i></a> -->
            </div>
            <div class="d-flex justify-content-center bottom">  

                <form action="index.php?act=dangnhap  " method="post" style="width:600px">
                <h3 class="panel-title">Đăng nhập</h3>
                    <div class="input-group mb-25">
                        <input type="text" class="form-control" placeholder="Tên đăng nhập" name="ten_dang_nhap">
                    </div>
                    <div class="input-group mb-20">
                        <input type="text" class="form-control" placeholder="Mât khẩu" name="mat_khau">
                    </div>
                    <div class="d-flex justify-content-between mb-25">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="loginCheckbox">
                            <label  for="loginCheckbox">
                                Remember Me
                            </label>
                        </div>
                    </div>
                   <input type="submit" value="Đăng nhập" name="dangnhap" class="btn btn-primary btn-block">
                               
    
                                    <?php
                    if (isset($thongbao) && ($thongbao != "")) {
                        echo $thongbao;
                    }
                    ?>
    
                </form>

            </div>
    </div>

        <!-- footer start -->
       
    <!-- main content end -->
    
    <script src="assets/vendor/js/jquery-3.6.0.min.js"></script>
    <script src="assets/vendor/js/jquery.overlayScrollbars.min.js"></script>
    <script src="assets/vendor/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
    <!-- for demo purpose -->
    <script>
        var rtlReady = $('html').attr('dir', 'ltr');
        if (rtlReady !== undefined) {
            localStorage.setItem('layoutDirection', 'ltr');
        }
    </script>
    <!-- for demo purpose -->
</body>

<!-- Mirrored from html.digiboard.codebasket.xyz/login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 10 Nov 2023 12:47:25 GMT -->
</html>

