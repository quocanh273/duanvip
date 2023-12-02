
<style>
  h3 {
    font-size: 38px;
    margin-top: 20px;
    margin-bottom: 25px;
    color: #333;
}
</style>
<h3>Lịch sử hóa đơn</h3>
<table class="table table-bordered table-hover">
    <thead class="thead-dark">
      <tr>
        
        <th>Tên người dùng</th>
        <th>Email</th>
        <th>Số điện thoại</th>
        <th>Tổng giá trị hóa đơn</th>
        <th>Địa chỉ</th>
        <th>Phương thức thanh toán</th>
        <th>Trạng thái</th>
        <th>Ngày tạo hóa đơn</th>
        
      </tr>
    </thead>
    <tbody>
          <?php
        foreach ($listbill as $listbill){
          extract($listbill);
          $xoabill = "index.php?act=huybill&id=" . $id;
        echo ' <tr>
            
                  <td>'.$ten_nguoi_dung.'</td>
                  <td>'.$email.'</td>
                  <td>'.$so_dien_thoai.'</td>
                  <td>'.$tong_gt_hd.'</td>
                  <td>'.$dia_chi.'</td>
                  <td>'.$pt_tt.'</td>
                  <td>'.$trang_thai.'</td>
                  <td>'.$ngay_thd.'</td>
                  <td>   <a href="' . $xoabill . '"><input type="button" value="Xóa" class="btn btn-info"></a> 
                  </td>
            </tr>';
        }
      ?>
    </tbody>
  </table>
