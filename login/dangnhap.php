    <!-- main content start -->
    <div class="main-conten login-panel login-panel-2">
        <h3 class="panel-title">Đăng nhập</h3>
        <div class="login-body login-body-2">
            <div class="top d-flex justify-content-between align-items-center">
                
                <!-- <a href="index.html"><i class="fa-duotone fa-house-chimney"></i></a> -->
            </div>
            <div class="bottom">
            <form action="index.php?act=dangnhap" method="post">
                    <div class="input-group mb-25">
                        <input type="text" class="form-control" placeholder="Tên" name="ten_dang_nhap">
                        <span class="input-group-text"><i class="fa-regular fa-user"></i></span>
                    </div>
                    <br>
                    <div class="input-group mb-25">
                        <input type="password" class="form-control" placeholder="Mật Khẩu" name="mat_khau">
                        <span class="input-group-text"><i class="fa-regular fa-lock"></i></span>
                    </div>
                  
                    <input class="btn btn-primary w-100 login-btn" type="submit" value="Đăng nhập" name="dangnhap">
                    
                </form>
                <div class="other-option">
                    <p class="mb-0">Bạn chưa có tài khoản ? <a href="index.php?act=dangky" >Tạo</a></p>
                </div>
                <?php
              
              if(isset($thong_bao)&&($thong_bao!="")){
                  echo $thong_bao;
              }
              
              ?>
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