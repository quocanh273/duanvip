<main>
    <div class="head-title">
        <div class="left">
            <h1>Quản Lý Đơn Hàng</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Trang Chủ</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>
                    <a class="active" href="#">Chi Tiết Đơn Hàng </a>
                </li>
            </ul>
        </div>

    </div>

    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>

                <th>ID HÓA ĐƠN</th>
                <th>TÊN NGƯỜI DÙNG</th>
                <th>GIÁ HÓA ĐƠN</th>
                <th>TRẠNG THÁI</th>
                <th>THAO TÁC</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($dhchitiet  as $ct) {
                extract($ct);
                // $suadh = "index.php?act=editdh&ma_loai=".$id;
                // $xoadh = "index.php?act=xoadh&ma_loai=".$id; // đường liên kết 
                $xemchitiet = "index.php?act=donhangchitiet&id=" . $id;
                echo '  <tr>
                          <td>' . $id . '</td>
                          <td>' . $ten_nguoi_dung . '</td>
                          <td>' . $tong_gt_hd . '</td>
                        
                          <td>' . $trang_thai . '</td>
                          <td> 
                                
                                 <a href="' . $xemchitiet . '"><input type="button" class="btn btn-info" value="Xem chi tiết"></a> 
                                 </td>
                      </tr>';
            }

            ?>

        </tbody>
        <tfoot>
            <tr>
                <th>ID HÓA ĐƠN</th>
                <th>TÊN NGƯỜI DÙNG</th>
                <th>GIÁ HÓA ĐƠN</th>
                <th>TRẠNG THÁI</th>
                <th>THAO TÁC</th>
            </tr>
        </tfoot>
    </table>
    <script>
    function xoa() {
        return confirm("ban co chac chan muon xoa k");
    }
    </script>

    </div>

    </div>
</main>