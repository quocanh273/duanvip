
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
        <th>Thao tác</th>
      </tr>
    </thead>
    <tbody>
    <?php
foreach ($listbill as $listbill){
    extract($listbill);
    $huydh = "index.php?act=huydh&id=" . $id;
    $chitiethd = "index.php?act=ctbill&id=" . $id."&id_user=".$id_user;
    
    echo '<tr>
            <td>'.$ten_nguoi_dung.'</td>
            <td>'.$email.'</td>
            <td>'.$so_dien_thoai.'</td>
            <td>'.$tong_gt_hd.'</td>
            <td>'.$dia_chi.'</td>
            <td>'.$pt_tt.'</td>
            <td>'.$trang_thai.'</td>
            <td>'.$ngay_thd.'</td>
            <td>';
    
    // Kiểm tra nếu trạng thái là "Thanh toán"
    if ($trang_thai == 'Đặt hàng thành công') {
      echo '<input type="button" class="btn btn-danger" value="Hủy đơn hàng" onclick="confirmCancelOrder('.$id.')">';    }

    echo '<a href="' . $chitiethd . '"><input type="button" class="btn btn-success" value="Xem chi tiết"></a>
          </td>
        </tr>';
}
?>

<script>
  function showNotification() {
    alert('Không thể hủy đơn hàng vì trạng thái không phải là "Thanh toán".');
  }
</script>
<script>
  function confirmCancelOrder(orderId) {
    var confirmCancel = confirm('Bạn có chắc chắn muốn hủy đơn hàng không?');
    if (confirmCancel) {
      window.location.href = 'index.php?act=huydh&id=' + orderId;
    }
  }
</script>
    </tbody>
  </table>
