<?php 
if (is_array($dsdm)) {
    extract($dsdm);
}
?>
<main>
    <div class="head-title">
        <div class="left">
            <h1>Cập Nhật Danh Mục</h1>
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
                    <a class="active" href="#">Cập Nhật Danh Mục </a>
                </li>
            </ul>
        </div>

    </div>

    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Danh Mục</h3>

            </div>
            <form action="index.php?act=updatedm" class="form-input" method="post" enctype="multipart/form-data">
                <div class="form-group pb-4">
                    
                   
                    <label for="">
                   Ảnh danh mục
                    </label> <br />
                    <input type="file" name="img" id="" class="rounded-2 w-75 px-3"
                    value="<?= $img?>"> <br />

                    <!-- cách -->
                    <label for="" class="label pt-2">
                        Tên Danh Mục
                    </label><br />
                    <input type="text" name="ten_loai" id=""placeholder="Nhập tên danh mục "
                        value="<?= $ten_loai?>" class="input w-75 rounded-2 px-3">
                </div>
                <input type="hidden" name="ma_loai" value="<?= $ma_loai?>">
                <input type="submit" name="capnhat" value="Cập Nhật" class="btn btn-insert  status completed ">
                <input type="reset" name="reset" id="" value="Nhập Lại" class=" btn btn-reset ">
                
                <button class="btn btn-insert  status completed" >Về Trang Danh Sách</button>
            </form>
        </div>

    </div>
</main>