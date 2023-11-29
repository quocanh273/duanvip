
<body class="light-theme">
    <!-- main content start -->
    <div class="main-conten login-panel login-panel-2">
        <h3 class="panel-title">Đăng nhập</h3>
        <div class="login-body login-body-2">


                <form action="index.php?act=dangnhap  " method="post">
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
                </form>


            </div>
            
            <?php
if (isset($thongbao) && ($thongbao != "")) {
    echo $thongbao;
}
?>
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