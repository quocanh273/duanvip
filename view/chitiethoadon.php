<?php 
// var_dump( $chitiethd);
?>
<div class="container mt-5">
    <h2 class="custom-yellow-text">Thông Tin Sản Phẩm</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col" class="custom-yellow-text">Tên Sản Phẩm</th>
                <th scope="col" class="custom-yellow-text">Giá</th>
                <th scope="col" class="custom-yellow-text">Kích Thước</th>
                <th scope="col" class="custom-yellow-text">Số Lượng</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($chitiethd as $chitiethd) {
                extract($chitiethd);
                echo '<tr>
                <td>'.$name_product.'</td>
                <td>'.$price.'</td>
                <td>'.$size.'</td>
                <td>'.$quantity.'</td>
                </tr>';
            }
            ?>
        </tbody>
    </table>

    <!-- Nút để trở về trang trước -->
    <a href="javascript:history.go(-1)" class="btn btn-primary">Quay Lại</a>
</div>
