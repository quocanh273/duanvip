<style>
    .container-fluid {
        margin-top: 20px;
    }

    .section-title {
        border-bottom: 2px solid #343a40;
        padding-bottom: 5px;
        margin-bottom: 20px;
    }

    .bg-light {
        background-color: #ffffff;
        border: 1px solid #dee2e6;
        border-radius: 5px;
        padding: 20px;
    }

    .border-bottom {
        border-bottom: 1px solid #dee2e6;
        padding-bottom: 10px;
        margin-bottom: 10px;
    }

    .mb-5 {
        margin-bottom: 30px;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }
</style>
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-lg-8">
            <h5 class="section-title position-relative text-uppercase"><span class="bg-secondary pr-3">Thông Tin Khách
                    Hàng</span></h5>
            <div class="bg-light p-4">
                <!-- Display customer information -->
                <p><strong>Tên Khách Hàng:</strong> <?php echo $ten_nguoi_dung; ?></p>
                <p><strong>E-mail:</strong> <?php echo $email; ?></p>
                <p><strong>Số Điện Thoại:</strong> <?php echo $so_dien_thoai; ?></p>
                <p><strong>Địa Chỉ:</strong> <?php echo $dia_chi; ?></p>
            </div>
        </div>

        <div class="col-lg-4">
            <h5 class="section-title position-relative text-uppercase"><span class="bg-secondary pr-3">Order
                    Total</span></h5>
            <div class="bg-light p-4">
                <div class="border-bottom">
                    <h6 class="mb-3">Các Sản Phẩm</h6>
                    <!-- Display ordered products -->
                    <?php
                    //  var_dump($_SESSION['giohang']);
                    $tong = 0;
                    $i = 0;
                    foreach ($_SESSION['giohang'] as $card) {
                        $img = isset($card['2']) ? "upload/" . $card['2'] : "";
                        $ttien = isset($card['3']) && isset($card['4']) ? $card['3'] * $card['4'] : 0;

                        // Accumulate the total
                        $tong += $ttien;

                    ?>
                        <div class="d-flex justify-content-between">
                            <p><?= $card['1'] ?></p>
                            <p><?= $card['3'] ?></p>
                        </div>
                    <?php } ?>
                    <div class="pt-2">
                        <div class="d-flex justify-content-between mt-2">
                            <h5>Tổng Giá</h5>
                            <!-- Display total price -->
                            <h5><?php echo $tong; ?></h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-5">
                <h5 class="section-title position-relative text-uppercase"><span class="bg-secondary pr-3">Phương Thức
                        Thanh Toán</span></h5>
                <div class="bg-light p-4">
                    <!-- Display selected payment method -->
                    <p><strong>Phương Thức Thanh Toán:</strong> <?php echo $pt_tt; ?></p>
                    <!-- Add other payment details if needed -->
                </div>
            </div>

        </div>
    </div>
</div>