<?php
if (is_array($sanpham)) {
    extract($sanpham);
}
?>
<main>
    <div class="head-title">
        <div class="left">
            <h1>Sửa Sản Phẩm</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Trang Chủ</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>
                    <a class="" href="#">Sản Phẩm </a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>
                    <a class="active" href="#">Sửa Sản Phẩm </a>
                </li>
            </ul>
        </div>

    </div>

    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Sản Phẩm</h3>

            </div>
            <form action="index.php?act=updatesp" class="form-input" method="post" enctype="multipart/form-data">
                <div class="form-group pb-4">

                    <label for="" class="label pt-3">Danh Mục</label><br />
                    <select name="ma_loai">
                        <?php
                        foreach ($listdanhmuc as $danhmuc) {
                            extract($danhmuc);
                            echo '  <option value="' . $ma_loai . '">' . $ten_loai . '</option>';
                        }
                        ?>
                    </select><br />
                    <label for="" class="label pt-2">
                        Tên Sản Phẩm
                    </label><br />
                    <input type="text" name="tensp" id="" value="<?= $ten_san_pham ?>"
                        class="input w-75 rounded-2"><br />
                    <label for="" class="label pt-2">
                        Ảnh
                    </label><br />
                    <input type="file" name="image" id="" value="" width="150px" class="input w-75 rounded-2"><br />

                    <label for="" class="label pt-2">
                        Giá
                    </label><br />
                    <input type="number" name="giasp" id="" value="<?= $gia ?>" class="input w-75 rounded-2"><br />

                    <label for="product_size" class="label pt-2">
                        Size:</label>
                    <select id="product_size" name="product_size">
                        <option value=""><?= $loai_sp ?></option>
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                    </select><br />

                    Số Lượng
                    </label><br />
                    <input type="number" name="quantity" id="" value="<?= $so_luong ?>" placeholder="Nhập số lượng "
                        class="input w-75 rounded-2 "><br />
                    Mô Tả
                    </label><br />
                    <textarea name="description" id="" cols="30" rows="10" value=""><?= $mo_ta ?></textarea><br />
                    <label for="" class="label pt-2">
                        <label for="trangthai" class="label pt-2">
                            Trạng Thái:</label>
                        <select id="trangthai" name="trangthai">
                            <option value=""><?= $trangthai ?></option>
                            <option value="Còn Hàng">Còn hàng</option>
                            <option value="Hết hàng">Hết hàng</option>
                        </select><br />
                        Khuyến Mại:
                        <input type="text" name="khuyenmai" id="" value="<?= $thong_tin_km ?>"
                            class="input w-75 rounded-2"><br />
                    </label>
                    <br />
                    <input type="hidden" name="id" value="<?= $id ?>">
                </div>


                <a href="index.php?act=listsp"><input type="submit" name="sua" id="" value="Sửa"
                        class="btn btn-insert  status completed "> </a>
                <input type="reset" name="reset" id="" value="Nhập Lại" class=" btn btn-reset ">
                <?php
                if (isset($thongbao) && ($thongbao != ""))
                    echo $thongbao;

                ?>
            </form>
        </div>

    </div>
</main>