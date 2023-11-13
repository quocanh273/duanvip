<main>
    <div class="head-title">
        <div class="left">
            <h1>Thêm Sản Phẩm</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="index.php">Trang Chủ</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>
                    <a class="" href="#">Sản Phẩm </a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>
                    <a class="active" href="#">Thêm Sản Phẩm </a>
                </li>
            </ul>
        </div>

    </div>

    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Sản Phẩm</h3>

            </div>
            <form action="index.php?act=createsp" class="form-input" method="post" enctype="multipart/form-data">
                <div class="form-group pb-4">
                   
                    <label for="" class="label pt-3">Danh Mục</label><br />
                    <select name="iddm">
                            <?php 
                            foreach ($listdanhmuc as $danhmuc) {
                                extract($danhmuc);
                                echo '  <option value="'.$id.'">'.$tendanhmuc.'</option>';
                            }
                            ?> 
                            </select><br />
                    <label for="" class="label pt-2">
                        Tên Sản Phẩm
                    </label><br />
                    <input type="text" name="tensp" id="" value="" placeholder="Nhập tên sản phẩm "
                        class="input w-75 rounded-2"><br />
                    <label for="" class="label pt-2">
                        Ảnh
                    </label><br />
                    <input type="file" name="image" id="" value="" width="150px" class="input w-75 rounded-2"><br />

                    <label for="" class="label pt-2">
                        Giá
                    </label><br />
                    <input type="number" name="giasp" id="" value="" placeholder="Nhập GIA "
                        class="input w-75 rounded-2"><br />

                    <label for="product_size" class="label pt-2">
                        Size:</label>
                    <select id="product_size" name="product_size">
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                    </select><br />
                   
                        Số Lượng
                    </label><br />
                    <input type="number" name="quantity" id="" value="" placeholder="Nhập số lượng "
                        class="input w-75 rounded-2 "><br />

                        <label for="product_color" class="label pt-2">Màu sắc:</label><br />
                    <input type="text" name="mausac" id="" value="" placeholder="Nhập màu sắc sản phẩm "
                        class="input w-75 rounded-2"><br />
                        Mô Tả
                    </label><br />
                    <textarea name="description" id="" cols="30" rows="10"></textarea><br />
                    <label for="" class="label pt-2">
                   
                      
                        <label for="trangthai" class="label pt-2">
                        Trạng Thái:</label>
                    <select id="trangthai" name="trangthai">
                    <option value="Còn Hàng">Còn hàng</option>
                        <option value="Hết hàng">Hết hàng</option>
                    </select><br />
                    Khuyến Mại:
                    <input type="text" name="khuyenmai" id="" value="" placeholder="Nhập khuyến mại "
                        class="input w-75 rounded-2"><br />
                        </label>
                    <br />
                </div>


                <a href="index.php?act=listsp"><input type="submit" name="themmoi" id="" value="Thêm"
                        class="btn btn-insert  status completed "> </a>
                <input type="reset" name="reset" id="" value="Nhập Lại" class=" btn btn-reset ">
                <?php
           if (isset($thongbao)&&($thongbao!="")) 
           echo $thongbao;
       ?>
          
            </form>
            <a href="index.php?act=listsp"><button class="btn btn-insert  status completed mt-4">Về Trang Danh Sách </button></button></a>
        </div>

    </div>
</main>