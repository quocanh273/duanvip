<?php 
if (is_array($dhchitiet)) {
    extract($dhchitiet);
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
                <h3>Đơn hàng</h3>

            </div>
            <form action="index.php?act=update_order" class="form-input" method="post">
                <div class="form-group pb-4">
                    
                   
                <label for="trang_thai" class="label pt-2">
                            Trạng Thái:</label>
                        <select id="trang_thai" name="trang_thai">
                            <option value=""><?= $trang_thai ?></option>
                            <option value="dathang">Đặt hàng thành công</option>
                            <option value="vanchuyen">Đang vận chuyển</option>
                            <option value="thanhcong">Thành công</option>
                        </select><br />
                </div>
                <input type="hidden" name="id" value="<?= $id?>">
                <input type="submit" name="updatedh" value="Cập Nhật" class="btn btn-insert  status completed ">
                <input type="reset" name="reset" id="" value="Nhập Lại" class=" btn btn-reset ">
                
                <button class="btn btn-insert  status completed" >Về Trang Danh Sách</button>
            </form>
        </div>

    </div>
</main>