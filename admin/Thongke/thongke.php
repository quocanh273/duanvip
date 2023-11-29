<main>
    <div class="head-title">
        <div class="left">
            <h1>Thống Kê</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Trang Chủ</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>
                    <a class="active" href="#">Thống Kê </a>
                </li>
            </ul>
        </div>

    </div>

    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Thống kê</h3>
            </div>
            <div class="form-group  d-flex ">
                <form action="index.php?act=bieudo" method="post" class="pb-4">

                    <a href="index.php?act=bieudo"><button class="btn btn-insert">Xem Biểu Đồ</button></a>
                </form>
                <form action="" method="post" class="form-group form-search-sp">
                    <div class="form-input pb-2 d-flex    ">
                        <!-- <span class="w-25 pt-2 ">Tìm Kiếm </span>
              <input type="text" name="search" width="50px"  placeholder="Search..." class="form-control px-2" >	
                  <input type="submit" name="locsp" value="Lọc " class=" btn btn-insert px-2"> -->
                    </div>
                </form>
            </div>

            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>

                        <th>MÃ DANH MỤC</th>
                        <th>TÊN DANH MỤC</th>
                        <th>SÓ LƯỢNG</th>
                        <th>GIÁ CAO NHẤT</th>
                        <th>GIÁ THẤP NHẤT</th>
                        <th>GIÁ TRUNG BÌNH</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($listthongke as $thongke) {
                        extract($thongke);
                        echo '<tr>
                                <td>' . $ma_loai . '</td>
                                <td>' . $ten_loai . '</td>
                                <td>' . $countsp . '</td>
                                <td>' . $maxprice . '</td>
                                <td>' . $minprice . '</td>
                                <td>' . $avgprice . '</td>
                            </tr>';
                    }

                    ?>

                </tbody>
                <tfoot>
                    <tr>
                        <th>MÃ DANH MỤC</th>
                        <th>TÊN DANH MỤC</th>
                        <th>SÓ LƯỢNG</th>
                        <th>GIÁ CAO NHẤT</th>
                        <th>GIÁ THẤP NHẤT</th>
                        <th>GIÁ TRUNG BÌNH</th>
                    </tr>
                </tfoot>
            </table>

            <div class="table-responsive mt-5">
                <h3>Sản phẩm đang bán chạy nhất hiện nay</h3>
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th class="text-center">Tên sản phẩm</th>
                            <th class="text-center">Số lượng bán ra</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($listsphot as $item) {
        
                            extract($item);
                        ?>
                        <tr class="">
                            <td class="text-center"><?= $name_product ?></td>
                            <td class="text-center"><?= $product_count ?></td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="table-responsive mt-5">
                <h3>Tài khoản thường xuyên mua hàng</h3>
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th class="text-center">Tên người dùng</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Số hóa đơn đã thanh toán</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($listuserbuyhot as $item) {
        
                            extract($item);
                        ?>
                        <tr class="">
                            <td class="text-center"><?= $ten_dang_nhap ?></td>
                            <td class="text-center"><?= $email ?></td>
                            <td class="text-center"><?= $so_luong_hoa_don ?></td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>


</main>