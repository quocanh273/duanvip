<style>
    .quantity {
        display: flex;
        align-items: center;
    }

    .quantity-input {
        text-align: center;
        width: 60px;
        font-size: 14px;
        font-weight: bold;
        border: 1px solid #ced4da;
        border-radius: 5px;
        padding: 5px;
    }

    .quantity button {
        background-color: #FFC800;
        color: #fff;
        border: none;
        padding: 8px;
        cursor: pointer;
        border-radius: 5px;
        transition: background-color 0.3s;
    }

    .quantity button:hover {
        background-color: #0056b3;
    }
</style>
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-12">
            <nav class="breadcrumb bg-light mb-30">
                <a class="breadcrumb-item text-dark" href="index.php">Trang chủ</a>
                <a class="breadcrumb-item text-dark" href="#">Cửa hàng</a>
                <span class="breadcrumb-item active">Giỏ hàng</span>
            </nav>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Giỏ hàng Start -->
<?php
if (isset($_SESSION['giohang']) && count($_SESSION['giohang']) != 0) {
?>
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-lg-8 table-responsive mb-5">
            <table class="table table-bordered table-hover text-center">
                <thead class="thead-dark">
                    <tr>
                        <th>Sản phẩm</th>
                        <th>Giá</th>
                        <th>Size</th>
                        <th>Số lượng</th>
                        <th>Tổng cộng</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                        $tong = 0;
                        $i = 0;
                        foreach ($_SESSION['giohang'] as $card) {
                            $img = isset($card['2']) ? "upload/" . $card['2'] : "";
                            $ttien = isset($card['3']) && isset($card['4']) ? $card['3'] * $card['4'] : 0;

                            // Tính tổng cộng
                            $tong += $ttien;
                        ?>

                    <tr>
                        <td>
                            <div class="media">
                                <img src="<?= $img ?>" class="mr-3" alt="Hình ảnh sản phẩm" style="width: 50px;">
                                <div class="media-body align-self-center">
                                    <?= $card['1'] ?>
                                </div>
                            </div>
                        </td>
                        <td><?= $card['6'] ?></td>
                        <td><?= $card['3'] ?>$</td>
                        <td>
                            <div class="input-group quantity" style="width: 100px;">
                                <div class="input-group-prepend">
                                    <button class="btn btn-danger quantity-decrease" data-id="<?= $card[0] ?>"
                                        data-size="<?= $card[6] ?>">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <input type="number"
                                    class="form-control bg-secondary border-0 text-center quantity-input"
                                    value="<?= $card['4'] ?>" data-index="<?= $i ?>">
                                <div class="input-group-append">
                                <button class="btn btn-success quantity-increase" data-id="<?= $card[0] ?>"
                                        data-size="<?= $card[6] ?>">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </td>
                        <td><?= $ttien ?>$</td>
                        <td>
                            <a href="index.php?act=delcard&idcard=<?= $i ?>" class="btn btn-sm btn-danger">
                                <i class="fa fa-times"></i> Xóa
                            </a>
                        </td>
                    </tr>
                    <?php
                            $i += 1;
                        }
                        ?>
                </tbody>
               
            </table>
        </div>
        <div class="col-lg-4">
            <form class="mb-3" action="">
                <div class="input-group">
                    <input type="text" class="form-control border-0 p-3" placeholder="Mã giảm giá">
                    <div class="input-group-append">
                        <button class="btn btn-primary">Áp dụng mã giảm giá</button>
                    </div>
                </div>
            </form>
            <div class="bg-light p-4 mb-4">
                <div class="d-flex justify-content-between mb-3">
                    <span>Tổng cộng</span>
                    <span><?= $tong ?>$</span>
                </div>
                <div class="d-flex justify-content-between">
                    <span>Vận chuyển</span>
                    <span>Miễn phí</span>
                </div>
            </div>
            <div class="bg-light p-4">
                <div class="d-flex justify-content-between">
                    <h5>Tổng</h5>
                    <h5><?= $tong ?>$</h5>
                </div>



                <a href="index.php?act=thanhtoan" class="btn btn-block btn-primary font-weight-bold my-3 py-3">Tiến hành
                    thanh toán</a>

            </div>
        </div>
    </div>
</div>
<?php
} else {
?>
<div class="container text-center">
    <h2>Không có sản phẩm trong giỏ hàng</h2>
</div>
<?php
}
?>
<!-- Giỏ hàng End -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
$(document).ready(function() {
    // Handle quantity increase
    $(".quantity-increase").click(function() {
        var id = $(this).data("id");
        var size = $(this).data("size");

        // Disable the button to prevent multiple clicks
        $(this).prop('disabled', true);

        // Make an AJAX request to increase the quantity
        $.ajax({
            type: "POST",
            url: "index.php?act=increase_quantity",
            data: {
                id: id,
                size: size
            },
success: function(response) {
                // Update the quantity on the page dynamically
                $(this).closest('tr').find('.quantity-input').val(response);
                // location.reload();
                var newUrl = "index.php?act=giohang"; // Replace with your desired URL
                window.location.href = newUrl;
            },
            error: function(error) {
                console.log("Error increasing quantity: " + error);
            },
            complete: function() {
                // Enable the button after the request is completed
                $(".quantity-increase").prop('disabled', false);
            }
        });
    });

    // Handle quantity decrease
    $(".quantity-decrease").click(function() {
        var id = $(this).data("id");
        var size = $(this).data("size");

        // Disable the button to prevent multiple clicks
        $(this).prop('disabled', true);

        // Make an AJAX request to decrease the quantity
        $.ajax({
            type: "POST",
            url: "index.php?act=decrease_quantity",
            data: {
                id: id,
                size: size
            },
            success: function(response) {
                // Update the table or handle the response as needed
                // For simplicity, you can reload the page to reflect the changes
                $(this).closest('tr').find('.quantity-input').val(response);
                var newUrl = "index.php?act=giohang"; // Replace with your desired URL
                window.location.href = newUrl;
            },
            error: function(error) {
                console.log("Error decreasing quantity: " + error);
            },
            complete: function() {
                // Enable the button after the request is completed
                $(".quantity-decrease").prop('disabled', false);
            }
        });
    });
});
</script>
