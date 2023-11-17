
    <!-- main content start -->
    <div class="main-content login-panel login-panel-2">
        <h3 class="panel-title">Đăng Ký </h3>
        <div class="login-body login-body-2">
            <div class="top d-flex justify-content-between align-items-center">
                <a href="index.html"><i class="fa-duotone fa-house-chimney"></i></a>
            </div>
            <div class="bottom">
<<<<<<< HEAD
                <form action="index.php?act=dangky" method="POST">
               <div class="input-group mb-25">
                        <input type="mail" class="form-control" placeholder="Email:" name="email">
                        <span class="input-group-text"><i class="fa-regular fa-user"></i></span>
                    </div>
                    <div class="input-group mb-25">
                        <input type="text" class="form-control" placeholder="Tên đăng nhập" name="tendn">
                        <span class="input-group-text"><i class="fa-regular fa-user"></i></span>
=======
                <form action="index.php?act=dangky" method="post">
                    <div class="input-group mb-25">
                        <input type="text" class="form-control" placeholder="Tên" name="ten_dang_nhap">
                        <span class="input-group-text"><i class="fa-regular fa-user"></i></span>
                    </div>
                    <div class="input-group mb-25">
                        <input type="email" class="form-control" placeholder="Email" name="email">
                        <span class="input-group-text"><i class="fa-regular fa-envelope"></i></span>
>>>>>>> 96e964398757a3c884455016b9f9d77e7bc2ef32
                    </div>
                    
                    <div class="input-group mb-25">
<<<<<<< HEAD
                        <input type="password" class="form-control" placeholder="Mật khẩu" name="pass">
                        <span class="input-group-text"><i class="fa-regular fa-lock"></i></span>
                    </div>
                   
=======
                        <input type="password" class="form-control" placeholder="Mật Khẩu" name="mat_khau">
                        <span class="input-group-text"><i class="fa-regular fa-lock"></i></span>
                    </div>
                    
>>>>>>> 96e964398757a3c884455016b9f9d77e7bc2ef32
                    <div class="d-flex justify-content-end mb-25">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="loginCheckbox">
                            <label for="loginCheckbox">
                            Tôi đồng ý <a href="#">Điều khoản & Chính sách</a>
                            </label>
                        </div>
                    </div>
<<<<<<< HEAD
                   <input type="submit "class="btn btn-primary w-100 login-btn" value ="Đăng Ký" name="dangky">
                </form>
                <div class="other-option">
                    <p class="mb-0">Already have an account? <a href="index.php?act=dangnhap" class="text-white text-decoration-underline">Login</a></p>
=======
                    <input class="btn btn-primary w-100 login-btn" type="submit" value="Đăng Ký" name="dangky">
                    
                </form>
                <div class="other-option">
                    <p class="mb-0">Bạn có sẵn một tài khoản?<a href="index.php?act=dangnhap">Đăng Nhập</a></p>
>>>>>>> 96e964398757a3c884455016b9f9d77e7bc2ef32
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
<<<<<<< HEAD
        
=======
        <!-- <div class="footer">
            <p>Copyright© <script>document.write(new Date().getFullYear())</script> All Rights Reserved By <span class="text-primary">Digiboard</span></p>
        </div> -->
>>>>>>> 96e964398757a3c884455016b9f9d77e7bc2ef32
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