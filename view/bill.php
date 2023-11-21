<div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Thông Tin Khách Hàng</span></h5>
                <div class="bg-light p-30 mb-5">
                    <!-- Display customer information -->
                    <p><strong>Tên Khách Hàng:</strong> <?php echo $ten_nguoi_dung; ?></p>
                    <p><strong>E-mail:</strong> <?php echo $email; ?></p>
                    <p><strong>Số Điện Thoại:</strong> <?php echo $so_dien_thoai; ?></p>
                    <p><strong>Địa Chỉ:</strong> <?php echo $dia_chi; ?></p>
                </div>
            </div>

            <div class="col-lg-4">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Order Total</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="border-bottom">
                        <h6 class="mb-3">Các Sản Phẩm</h6>
                        <!-- Display ordered products -->
                        <?php
                        foreach ($_SESSION['giohang'] as $card) {
                            echo '<div class="d-flex justify-content-between">';
                            echo '<p>' . $card['1'] . '</p>';
                            echo '<p>' . $card['3'] . '</p>';
                            echo '</div>';
                        }
                        ?>
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
                    <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Phương Thức Thanh Toán</span></h5>
                    <div class="bg-light p-30">
                        <!-- Display selected payment method -->
                        <p><strong>Phương Thức Thanh Toán:</strong> Ví Shop (or Ngân Hàng, or Thanh Toán Khi Nhận Hàng)</p>
                        <!-- Add other payment details if needed -->
                    </div>
                </div>
            </div>
        </div>
    </div>