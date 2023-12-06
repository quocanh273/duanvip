<!-- Breadcrumb Start -->
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-12">
            <nav class="breadcrumb bg-light mb-30">
                <a class="breadcrumb-item text-dark" href="index.php">Home</a>
                <a class="breadcrumb-item text-dark" href="#">Shop</a>
                <span class="breadcrumb-item active">Checkout</span>
            </nav>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<?php 
if (isset($_SESSION['ten_dang_nhap'])){
    $ten_nguoi_dung = $_SESSION['ten_dang_nhap']['ten_nguoi_dung'];
    $so_dien_thoai = $_SESSION['ten_dang_nhap']['so_dien_thoai'];
    $email = $_SESSION['ten_dang_nhap']['email'];
    $dia_chi= $_SESSION['ten_dang_nhap']['dia_chi'];
    $quan_huyen = isset($_SESSION['ten_dang_nhap']['quan_huyen']) ? $_SESSION['ten_dang_nhap']['quan_huyen'] : "";
    $xa_phuong = isset($_SESSION['ten_dang_nhap']['xa_phuong']) ? $_SESSION['ten_dang_nhap']['xa_phuong'] : "";
    $tinh_thanhpho = isset($_SESSION['ten_dang_nhap']['tinh_thanhpho']) ? $_SESSION['ten_dang_nhap']['tinh_thanhpho'] : "";
} else {
    $ten_nguoi_dung = "";
    $so_dien_thoai = "";
    $email = "";
    $dia_chi= "";
    $quan_huyen = "";
    $xa_phuong = "";
    $tinh_thanhpho = "";
}
?>

<!-- Checkout Start -->
<div class="container-fluid">
    <form action="index.php?act=dathang" method="post" name="checkoutForm" id="checkoutForm">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Thông Tin Khách Hàng</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>Tên Khách Hàng</label>
                            <input class="form-control" type="text" name="ten_nguoi_dung" value="<?= $ten_nguoi_dung?>">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>E-mail</label>
                            <input class="form-control" type="text" name="email" value="<?= $email ?>">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Số Điện Thoại</label>
                            <input class="form-control" type="text" name="so_dien_thoai" value="<?= $so_dien_thoai ?>">
                        </div>
                       
                        <div class="col-md-6 form-group">
                            <label>Phường/Xã</label>
                            <input class="form-control" type="text" name="quan_huyen" id="quan_huyen">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Quận/Huyện</label>
                            <input class="form-control" type="text" name="xa_phuong" id="xa_phuong">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Tỉnh/Thành phố</label>
                            <input class="form-control" type="text" name="tinh_thanhpho" id="tinh_thanhpho">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Địa chỉ chi tiết</label>
                            <input class="form-control" type="text" name="dia_chi" value="<?= $dia_chi ?>">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Tổng đặt hàng</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="border-bottom">
                        <h6 class="mb-3">Các Sản Phẩm</h6>
                        <?php
                        $tong = 0;
                        foreach($_SESSION['giohang'] as $card){
                            $img = isset($card['2']) ? "upload/" . $card['2'] : "";
                            $ttien = isset($card['3']) && isset($card['4']) ? $card['3'] * $card['4'] : 0;
                            $tong += $ttien;
                        ?>
                        <div class="d-flex justify-content-between">
                            <p><?= $card['1'] ?></p>
                            <p>x<?= $card['4'] ?></p>
                        </div>
                        <?php }?>
                    </div>
                    <div class="pt-2">
                        <div class="d-flex justify-content-between mt-2">
                            <h5>Tổng Giá</h5>
                            <span id="totalPrice"><?= $tong ?>$</span>
                            <input id="totalPrice" type="hidden" name="tong_gt_hd" value="<?=$tong ?>">
                            <input type="hidden" name="trang_thai" value="Đặt hàng thành công">
                        </div>
                    </div>
                </div>

                <div class="mb-5">
                    <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Phương Thức Thanh Toán</span></h5>
                    <div class="bg-light p-30">
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" value="Ví Shop" name="pt_tt" id="paypal">
                                <label class="custom-control-label" for="paypal">Ví Shop</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" value="Ngân Hàng" name="pt_tt" id="directcheck">
                                <label class="custom-control-label" for="directcheck">Ngân Hàng</label>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" value="Thanh Toán Khi Nhận Hàng" name="pt_tt" id="banktransfer">
                                <label class="custom-control-label" for="banktransfer">Thanh Toán Khi Nhận Hàng</label>
                            </div>
                        </div>
                        <button type="submit" name="dat_hang" class="btn btn-block btn-primary font-weight-bold py-3" onclick ="tb();">Đặt Hàng</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<!-- Checkout End -->

<script>
  document.addEventListener('DOMContentLoaded', function () {
    // Function to validate the form
    function validateForm() {
        var tenNguoiDung = document.forms["checkoutForm"]["ten_nguoi_dung"].value;
        var email = document.forms["checkoutForm"]["email"].value;
        var soDienThoai = document.forms["checkoutForm"]["so_dien_thoai"].value;
        var diaChi = document.forms["checkoutForm"]["dia_chi"].value;
        var quanHuyen = document.forms["checkoutForm"]["quan_huyen"].value;
        var xaPhuong = document.forms["checkoutForm"]["xa_phuong"].value;
        var tinhThanhPho = document.forms["checkoutForm"]["tinh_thanhpho"].value;

        // Check if any radio button is checked
        var selectedPayment = document.querySelector('input[name="pt_tt"]:checked');

        if (!selectedPayment) {
            alert("Vui lòng chọn một phương thức thanh toán.");
            return false;
        }

        // Simple validation for each field
        if (tenNguoiDung === "" || email === "" || soDienThoai === "" || diaChi === "" || quanHuyen === "" || xaPhuong === "" || tinhThanhPho === "") {
            alert("Vui lòng nhập đầy đủ thông tin khách hàng để tiến hành đặt hàng.");
            return false;
        }

        // Validate email format
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            alert("Vui lòng nhập một địa chỉ email hợp lệ.");
            return false;
        }

        // Validate phone number format (assuming a Vietnamese phone number)
        var phoneRegex = /^(0[0-9]{9,10})$/;
        if (!phoneRegex.test(soDienThoai)) {
            alert("Vui lòng nhập một số điện thoại hợp lệ.");
            return false;
        }

        // You can add more complex validation rules if needed

        return true;
    }

    // Attach the validation function to the form's onsubmit event
    document.getElementById("checkoutForm").onsubmit = function () {
        return validateForm();
    };
});
function tb(){
    alert("Đặt đơn hàng thành công.");
}

</script>
