<main>
    <div class="head-title">
        <div class="left">
            <h1>Thêm Danh Mục</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Trang Chủ</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>
                    <a class="" href="#">Danh Mục </a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>
                    <a class="active" href="#">Thêm Danh Mục </a>
                </li>
            </ul>
        </div>

    </div>

    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Danh Mục</h3>

            </div>
            <form action="index.php?act=createdm" class="form-input" method="post" enctype="multipart/form-data">
               <div class="form-group pb-4">
               <label for="">
                    Mã Danh Mục
                </label> <br />
                <input type="text" name="ma_Loai" readonly class="rounded-2 w-75"> <br />

                <label for="">
                   Ảnh danh mục
                    </label> <br />
                    <input type="file" name="img" id="" readonly class="rounded-2 w-75 px-3"><br />

                <label for="" class="label pt-2">
                    Tên Danh Mục
                </label><br />
                <input type="text" name="ten_loai" placeholder="Nhập tên danh mục "
                    class="input w-75 rounded-2">
               </div>


               <input type="submit" name="submitdm" id="" value="Thêm"
                        class="btn btn-insert  status completed ">
                <input type="reset" name="reset" id="" value="Nhập Lại" class=" btn btn-reset ">
               
            </form>
            <a href="index.php?act=danhmuc"><button class="btn btn-insert  status completed mt-4">Về Trang Danh Sách </button></button></a>
            <?php 
            if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
        </div>

    </div>
</main>