
    <!-- Main Content Start -->
    <div class="main-content login-panel">
        <div class="login-body">
            <div class="top d-flex justify-content-between align-items-center">
                <a href="index.html"><i class="fa-duotone fa-house-chimney"></i></a>
            </div>
            <div class="d-flex justify-content-center bottom">  
                <form action="index.php?act=quenmk" method="post" style="width:600px">
                <h3 class="panel-title">Quên Mật Khẩu</h3>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-regular fa-envelope"></i></span>
                        <input type="email" name="email" class="form-control" placeholder="Nhập email">
                    </div>
                    <input type="submit" name="guiemail"class="btn btn-primary w-100 login-btn" value="Gửi">
                 <?php 
                 if (isset($checkemail)&& $checkemail !='') {
                 echo $checkemail;
                 }
                 ?>
                  <div class="other-option">
                    <p class="mb-0">Nhớ mật khẩu? <a href="index.php?act=dangnhap">Đăng nhập</a></p>
                </div>
                </form>
               
            </div>
        </div>
    </div>
    <!-- Main Content End -->
    
    <script src="assets/vendor/js/jquery-3.6.0.min.js"></script>
    <script src="assets/vendor/js/jquery.overlayScrollbars.min.js"></script>
    <script src="assets/vendor/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
    <!-- For demo purpose -->
    <script>
        var rtlReady = $('html').attr('dir', 'ltr');
        if (rtlReady !== undefined) {
            localStorage.setItem('layoutDirection', 'ltr');
        }
    </script>
 
