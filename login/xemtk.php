<div class="container-fluid">
    <div class="row px-3 py-4">
<div class="col-12">
            <nav class="breadcrumb bg-light mb-3">
                
<a class="breadcrumb-item text-dark" href="index.php">Home</a>
                <a class="breadcrumb-item text-dark" href="#">Tài khoản</a>
                <span class="breadcrumb-item active">Hồ sơ của bạn</span>
            
</n>
</nav>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row px-3">
        <div class="col-lg-8">
            <h5 class="section-title bg-secondary text-uppercase mb-3 p-3 rounded">Hồ sơ của bạn</h5>
            <div class="bg-light p-3 mb-5">
            <form action="index.php" method="post">
                <div class="row boxcontent formtaikhoan">

<?php
  if (isset($_SESSION['ten_dang_nhap'])&&(is_array($_SESSION['ten_dang_nhap']))) {
    extract($_SESSION['ten_dang_nhap']);
    $hinhpath = "upload/".$img;
    if (is_file($hinhpath)) {
        $img="<img src='".$hinhpath."' width= '100%' height='200'>" ;
    }else{
        $img = "không có hình";
    }

}
?>
        <div class="col-md-6 form-group">
            <label>Tên đăng nhập</label>
            <input class="form-control" type="button" name="ten_dang_nhap" value="<?php echo $ten_dang_nhap; ?>">
        </div>
        <div class="col-md-6 form-group">
        <label>Số điện thoại</label>
            <input class="form-control" type="button" name="so_dien_thoai" value="<?php echo $so_dien_thoai; ?>">
        </div>
        <div class="col-md-6 form-group">

            <label>Tên người dùng</label>
            

        <input class="form-control" type="button" name="ten_nguoi_dung" value="<?php echo $ten_nguoi_dung; ?>">
        </div>


        <div class="col-md-6 form-group">
            <label>Mật Khẩu</label>
            <input class="form-control" type="password" name="mat_khau"  value="<?php echo $mat_khau; ?> ">
        </div>

        <div class="col-md-6 form-group">
            <label>E-mail</label>
        <input class="form-control" type="button" name="email" value="<?php echo $email; ?>">
        </div>

        <div class="col-md-6 form-group">
            <label>Ngày sinh</label>
            <input class="form-control" type="button" name="ngay_sinh" value="<?php echo $ngay_sinh; ?>">
        </div>

        <div class="col-md-6 form-group">
            <label>Địa Chỉ</label>
        <input class="form-control" type="button" name="dia_chi" value="<?php echo $dia_chi; ?>">
        </div>

        <div class="col-md-6 form-group">
            <label>Ảnh</label>
            <div class="overflow-hidden" style="width: 50%; height: 200px;">
            <?php echo $img?>
                    </div>
        </div>

<div class="col-md-12 form-group">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <input type="submit" value="Về trang chủ"class="btn btn-primary">
    <!-- <input type="submit" value="Cập nhật" name="capnhat" class="btn btn-primary">
    <input type="reset" value="Nhập lại" class="btn btn-secondary"> -->
 </div>
</form>
</div>

            </div>
        </div>
    </div>
</div>