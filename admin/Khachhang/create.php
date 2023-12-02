<main>
    <div class="head-title">
        <div class="left">
            <h1>Thêm khách hàng</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="index.php">Trang Chủ</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>
                    <a class="" href="index.php?act=listkhachhang">Quản lý khách hàng </a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>
                    <a class="active" href="#">Thêm khách hàng </a>
                </li>
            </ul>
        </div>

    </div>

    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Sản Phẩm</h3>

            </div>
            <form action="index.php?act=createkh" class="form-input" method="post" enctype="multipart/form-data">
                <div class="form-group pb-4">
                
                    <label for="" class="label pt-2">
                        Tên Khách: 
                    </label><br />
                    <input type="text" name="tenkh" id="" value="" placeholder="Nhập họ tên "
                        class="input w-75 rounded-2"><br />
                        <label for="" class="label pt-2">
                        Tên Đăng Nhập: 
                    </label><br />
                    <input type="text" name="tendn" id="" value="" placeholder="Nhập tên đăng nhập "
                        class="input w-75 rounded-2"><br />
                        <label for="" class="label pt-2">
                        Mật Khẩu: 
                    </label><br />
                    <input type="text" name="pass" id="" value="" placeholder="Nhập mật khẩu "
                        class="input w-75 rounded-2"><br />
                    
                        <label for="" class="label pt-2">
                        Email: 
                    </label><br />
                    <input type="text" name="mail" id="" value="" placeholder="Nhập tên email "
                        class="input w-75 rounded-2"><br />
                    
                        <label for="" class="label pt-2">
                        Ngày Sinh: 
                    </label><br />
                    <input type="date" name="ngaysinh" id="" value="" placeholder="Nhập ngày sinh "
                        class="input w-75 rounded-2"><br />
                        <label for="" class="label pt-2">
                        Địa Chỉ: 
                    </label><br />
                    <input type="text" name="diachi" id="" value="" placeholder="Nhập địa chỉ "
                        class="input w-75 rounded-2"><br />
                        <label for="" class="label pt-2">
                        Số Điện Thoại: 
                    </label><br />
                    <input type="number" name="sodienthoai" id="" value="" placeholder="Nhập SDT"
                        class="input w-75 rounded-2"><br />
                    <label for="" class="label pt-2">
                        Ảnh
                    </label><br />
                    <input type="file" name="image" id="" value="" width="150px" class="input w-75 rounded-2"><br />
                </div>


                <a href="index.php?act=listkhachhang">
                    <input type="submit" name="themmoi" id="" value="Thêm"
                        class="btn btn-insert  status completed "> </a>
                <input type="reset" name="reset" id="" value="Nhập Lại" class=" btn btn-reset ">
                
                <?php
           if (isset($thongbao)&&($thongbao!="")) 
           echo $thongbao;
       ?>
          
            </form>
            <a href="index.php?act=listkhachhang"><button class="btn btn-insert  status completed mt-4">Về Trang Danh Sách </button></button></a>
        </div>

    </div>
</main>