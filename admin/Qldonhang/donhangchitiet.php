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

<table id="example" class="table table-striped"  style="width:100%">
        <thead>
    <tr>
        
                    <th>ID HÓA ĐƠN</th>
                    <th>TÊN NGƯỜI DÙNG</th>
                    <th>SỐ LƯỢNG SẢN PHẨM</th>
                    <th>TỔNG GIÁ TRỊ ĐƠN HÀNG</th>
                    <th>TRẠNG THÁI</th>
                    <th>ĐỊA CHỈ</th>
                    <th>PHƯƠNG THỨC THANH TOÁN</th>
                    <th>KHUYẾN MÃI </th>
                    <th>NGÀY TẠO HÓA ĐƠN</th>
    </tr>
        </thead>
        <tbody>
        <?php 
                        foreach ($dhchitiet  as $ct) {
                            extract($ct);
                          echo '  <tr>
                          <td>'.$id.'</td>
                          <td>'.$ten_nguoi_dung.'</td>
                          <td>'.$sl_sp.'</td>
                          <td>'.$tong_gt_hd.'</td>
                          <td>'.$trang_thai.'</td>
                          <td>'.$dia_chi.'</td>
                          <td>'.$pt_tt.'</td>
                          <td>'.$thong_tin_km.'</td>
                          <td>'.$ngay_thd.'</td>
                      </tr>';
                        }
                        
                        ?>                    
    
        </tbody>
        <tfoot>
            <tr>
                    <th>ID HÓA ĐƠN</th>
                    <th>TÊN NGƯỜI DÙNG</th>
                    <th>SỐ LƯỢNG SẢN PHẨM</th>
                    <th>TỔNG GIÁ TRỊ ĐƠN HÀNG</th>
                    <th>TRẠNG THÁI</th>
                    <th>ĐỊA CHỈ</th>
                    <th>PHƯƠNG THỨC THANH TOÁN</th>
                    <th>KHUYẾN MÃI </th>
                    <th>NGÀY TẠO HÓA ĐƠN</th>
            </tr>
        </tfoot>
    </table>
        <script>
    function xoa(){
        return confirm("ban co chac chan muon xoa k");
    }
</script>
     
    </div>

</div>
</main>