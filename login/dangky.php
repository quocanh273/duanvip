<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.digiboard.codebasket.xyz/registration-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 10 Nov 2023 12:51:58 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration | Digiboard</title>
    
    <link rel="shortcut icon" href="favicon.png">
    <link rel="stylesheet" href="assets/vendor/css/all.min.css">
    <link rel="stylesheet" href="assets/vendor/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="assets/vendor/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" id="primaryColor" href="assets/css/blue-color.css">
    <link rel="stylesheet" id="rtlStyle" href="#">
</head>
<body class="light-theme">
    <!-- preloader start -->
    <div class="preloader d-none">
        <div class="loader">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- preloader end -->

    <!-- main content start -->
    <div class="main-content login-panel login-panel-2">
        <h3 class="panel-title">Đăng Ký </h3>
        <div class="login-body login-body-2">
            <div class="top d-flex justify-content-between align-items-center">
                <a href="index.html"><i class="fa-duotone fa-house-chimney"></i></a>
            </div>
            <div class="bottom">
                <form action="index.php?act=dangky" method="post">
                    <div class="input-group mb-25">
                        <input type="text" class="form-control" placeholder="Tên" name="ten_dang_nhap">
                        <span class="input-group-text"><i class="fa-regular fa-user"></i></span>
                    </div>
                    <div class="input-group mb-25">
                        <input type="email" class="form-control" placeholder="Email" name="email">
                        <span class="input-group-text"><i class="fa-regular fa-envelope"></i></span>
                    </div>
                    <div class="input-group mb-25">
                        <input type="password" class="form-control" placeholder="Mật Khẩu" name="mat_khau">
                        <span class="input-group-text"><i class="fa-regular fa-lock"></i></span>
                    </div>
                    
                    <div class="d-flex justify-content-end mb-25">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="loginCheckbox">
                            <label for="loginCheckbox">
                            Tôi đồng ý <a href="#">Điều khoản & Chính sách</a>
                            </label>
                        </div>
                    </div>
                    <input class="btn btn-primary w-100 login-btn" type="submit" value="Đăng Ký" name="dangky">
                    
                </form>
                <div class="other-option">
                    <p class="mb-0">Bạn có sẵn một tài khoản?<a href="login-2.html">Đăng Nhập</a></p>
                </div>
                <h2 class="thongbao">
                <?php
              
                if(isset($thong_bao)&&($thong_bao!="")){
                    echo $thong_bao;
                }
                
                ?>
                </h2>
            </div>
        </div>

        <!-- footer start -->
        <!-- <div class="footer">
            <p>Copyright© <script>document.write(new Date().getFullYear())</script> All Rights Reserved By <span class="text-primary">Digiboard</span></p>
        </div> -->
        <!-- footer end -->
    </div>
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

<!-- Mirrored from html.digiboard.codebasket.xyz/registration-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 10 Nov 2023 12:51:58 GMT -->
</html>