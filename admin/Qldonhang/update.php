<?php 
if (is_array($dhchitiet)) {
    extract($dhchitiet);
}
?>
<main>
    <div class="head-title">
        <div class="left">
            <h1>Sửa đơn hàng</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="index.php">Trang Chủ</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>
                    <a class="" href="index.php?act=listdonhang">Quản lý đơn hàng </a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>
                    <a class="active" href="#">Sửa đơn hàng </a>
                </li>
            </ul>
        </div>

    </div>

    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Đơn hàng</h3>

            </div>
            <form action="index.php?act=updatedh" class="form-input" method="post">
                <div class="form-group pb-4">
                    
                   
                <label for="trang_thai" class="label pt-2">
                            Trạng Thái:</label>
                        <select id="trang_thai" name="trang_thai">
                            <option value=""><?= $trang_thai?></option>
                            <option value="Đặt hàng thành công">Đặt hàng thành công</option>
                            <option value="Đang vận chuyển">Đang vận chuyển</option>
                            <option value="Thành công">Thành công</option>
                        </select><br />
                </div>
                <input type="hidden" name="id" value="<?= $id?>">
                <input type="submit" name="capnhat" value="Cập Nhật" class="btn btn-insert  status completed ">
                <input type="reset" name="reset" id="" value="Nhập Lại" class=" btn btn-reset ">
                
              <a href="index.php?act=listdonhang"> <button class="btn btn-insert  status completed" >Về Trang Danh Sách</button> </a> 
            </form>
        </div>

    </div>
</main>