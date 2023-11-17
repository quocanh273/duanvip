<!-- <?php 
if(is_array($nguoi_dung)){
    extract($nguoi_dung);
  
}
?> -->
<main>
    <div class="head-title">
        <div class="left">
            <h1>Khách Hàng</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="index.php">Trang Chủ</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>
                    <a class="" href="#">Khách Hàng </a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>
                    <a class="active" href="#">Sửa Khách Hàng </a>
                </li>
            </ul>
        </div>

    </div>

    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Sản Phẩm</h3>

            </div>
            <form action="index.php?act=updatekh" class="form-input" method="post" enctype="multipart/form-data">
                <div class="form-group pb-4">
                <input type="hidden" name="id" id="" value="<?= $id ?>" >
                    <label for="" class="label pt-2">
                        Tên Khách: 
                    </label><br />
                    <input type="text" name="tenkh" id="" value="<?= $ten_nguoi_dung ?>" 
                        class="input w-75 rounded-2"><br />
                        <label for="" class="label pt-2">
                        Tên Đăng Nhập: 
                    </label><br />
                    <input type="text" name="tendn" id="" value="<?= $ten_dang_nhap ?>" 
                        class="input w-75 rounded-2"><br />
                        <label for="" class="label pt-2">
                        Mật Khẩu: 
                    </label><br />
                    <input type="text" name="pass" id="" value="<?= $mat_khau ?>" 
                        class="input w-75 rounded-2"><br />
                    
                        <label for="" class="label pt-2">
                        Email: 
                    </label><br />
                    <input type="text" name="mail" id="" value="<?=$email?>"  
                        class="input w-75 rounded-2"><br />
                    
                        <label for="" class="label pt-2">
                        Ngày Sinh: 
                    </label><br />
                    <input type="date" name="ngaysinh" id="" value="<?=$ngay_sinh?>" 
                         class="input w-75 rounded-2"><br/>
                         <label for="" class="label pt-2">       
                        Địa Chỉ: 
                    </label><br />
                    <input type="text" name="diachi" id="" value="<?=$dia_chi?>"  
                        class="input w-75 rounded-2"><br />
                        <label for="" class="label pt-2">
                        Số Điện Thoại: 
                    </label><br />
                    <input type="number" name="sodienthoai" id="" value="<?=$so_dien_thoai?>" 
                        class="input w-75 rounded-2"><br />
                    <label for="" class="label pt-2">
                        Ảnh
                    </label><br />
                    <input type="file" name="image"  width="150px" class="input w-75 rounded-2"><br />
                </div>


               
                    <input type="submit" value="Sửa" name="update"
                        class="btn btn-insert  status completed ">
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