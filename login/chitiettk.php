<div class="container-fluid">
    <div class="row px-3 py-4">


        <div class="col-12">
            <nav class="breadcrumb bg-light mb-3">


                <a class="breadcrumb-item text-dark" href="index.php">Home</a>
                <a class="breadcrumb-item text-dark" href="#">Shop</a>
                <span class="breadcrumb-item active">Checkout</span>

                </n>
            </nav>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row px-3">
        <div class="col-lg-8">
            <h5 class="section-title bg-secondary text-uppercase mb-3 p-3 rounded">Cập nhật tài khoản</h5>
            <div class="bg-light p-3 mb-5">
                <?php
                if (isset($_SESSION['ten_dang_nhap']) && (is_array($_SESSION['ten_dang_nhap']))) {
                    extract($_SESSION['ten_dang_nhap']);
                    $hinhpath = "upload/" . $img;
                    if (is_file($hinhpath)) {
                        $img = "<img src='" . $hinhpath . "' width= '100%' height='200'>";
                    } else {
                        $img = "không có hình";
                    }
                }
                ?>
                <form action="index.php?act=updatetk" method="post" enctype="multipart/form-data">
                    <div class="row boxcontent formtaikhoan">
                        <div class="col-md-6 form-group">
                            <label>Tên đăng nhập</label>
                            <input class="form-control" type="text" name="tendn" value="<?php echo $ten_dang_nhap; ?>">
                        </div>
                        <div class="col-md-6 form-group">


                            <label>Số điện thoại</label>
                            <input class="form-control" type="text" name="sodienthoai"
                                value="<?php echo $so_dien_thoai; ?>">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Tên người dùng</label>


                            <input class="form-control" type="text" name="tenkh" value="<?php echo $ten_nguoi_dung; ?>">
                        </div>


                        <div class="col-md-6 form-group">
                            <label>Mật Khẩu</label>
                            <input class="form-control" type="text" name="pass" value="<?php echo $mat_khau; ?>">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>E-mail</label>


                            <input class="form-control" type="text" name="mail" value="<?php echo $email; ?>">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Ngày sinh</label>
                            <input class="form-control" type="date" name="ngaysinh" value="<?php echo $ngay_sinh; ?>">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Địa Chỉ</label>


                            <input class="form-control" type="text" name="diachi" value="<?php echo $dia_chi; ?>">
                        </div>

                        <div class="col-md-6 form-group">
                            <label>Ảnh Hiện Tại</label>
                            <div class="overflow-hidden" style="width: 50%; height: 200px;">
                                <?php echo $img ?>
                            </div>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Chọn ảnh mới</label>
                            <input class="form-control" type="file" name="image">
                        </div>

                        <div class="col-md-12 form-group">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <input type="submit" value="Cập nhật" name="capnhat" id="capnhat" class="btn btn-primary">
                            <input type="reset" value="Nhập lại" class="btn btn-secondary">
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>