<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.digiboard.codebasket.xyz/login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 10 Nov 2023 12:47:12 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Digiboard</title>
    
    
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
    <div class="main-conten login-panel login-panel-2">
        <h3 class="panel-title">Đăng nhập</h3>
        <div class="login-body login-body-2">
            <div class="top d-flex justify-content-between align-items-center">
                
                <a href="index.html"><i class="fa-duotone fa-house-chimney"></i></a>
            </div>
            <div class="bottom">
                <form>
                    <div class="input-group mb-25">
                        <input type="text" class="form-control" placeholder="Username or email address">
                    </div>
                    <div class="input-group mb-20">
                        <input type="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="d-flex justify-content-between mb-25">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="loginCheckbox">
                            <label class="form-check-label text-white" for="loginCheckbox">
                                Remember Me
                            </label>
                        </div>
                        <a href="index.php?act=quenmk" class="text-white fs-14">Quên mật khẩu?</a>
                    </div>
                    <button class="btn btn-primary w-100 login-btn">Đăng Nhập</button>
                </form>
                <div class="other-option">
                    <p class="mb-0">Bạn chưa có tài khoản ? <a href="index.php?act=dangky" class="text-white text-decoration-underline">Tạo</a></p>
                </div>
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