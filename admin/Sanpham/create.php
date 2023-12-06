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
                    <select name="ma_loai">
                            <?php 
                            foreach ($listdanhmuc as $danhmuc) {
                                extract($danhmuc);
                                echo '  <option value="'.$ma_loai.'">'.$ten_loai.'</option>';
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

                  
                   
                        Số Lượng
                    </label><br />
                    <input type="number" name="quantity" id="" value="" placeholder="Nhập số lượng "
                        class="input w-75 rounded-2 "><br />

                        Mô Tả
                    </label><br />
                    <textarea name="description" id="" cols="30" rows="10"></textarea><br />
                    <label for="" class="label pt-2">
                   
                      
                        <label for="trangthai" class="label pt-2">
                        Trạng Thái:</label>
                    <select id="trangthai" name="trangthai">
                        <option value="Còn Hàng">Còn hàng</option>
                        <option value="Hết hàng">Hết hàng</option>
                        Khuyến Mại:
                    <input type="text" name="khuyenmai" id="" value="" placeholder="Nhập khuyến mại "
                        class="input w-75 rounded-2"><br />
                    </select><br />
                </div>


                <a href="index.php?act=listsp"><input type="submit" onclick="return thanhcong();" name="themmoi" id="" value="Thêm"
                        class="btn btn-insert  status completed "> </a>
                <input type="reset" name="reset" id="" value="Nhập Lại" class=" btn btn-reset ">
                <?php
           if (isset($thongbao)&&($thongbao!="")) 
           echo $thongbao;
       ?>
       <script>
    function xoa(){
        return confirm("ban co chac chan muon xoa k");
    }
    function thanhcong(){
        return alert("thanh cong");
    }
</script>
          
            </form>
            <a href="index.php?act=listsp"><button class="btn btn-insert  status completed mt-4">Về Trang Danh Sách </button></button></a>
        </div>

    </div>
</main>