 <!-- Breadcrumb Start -->
 <div class="container-fluid">
     <div class="row px-xl-5">
         <div class="col-12">
             <nav class="breadcrumb bg-light mb-30">
                 <a class="breadcrumb-item text-dark" href="index.php">Home</a>
                 <a class="breadcrumb-item text-dark" href="#">Shop</a>
                 <span class="breadcrumb-item active">Checkout</span>
             </nav>
         </div>
     </div>
 </div>
 <!-- Breadcrumb End -->
 <?php 
 if (isset($_SESSION['ten_dang_nhap'])){
    $ten_nguoi_dung = $_SESSION['ten_dang_nhap']['ten_nguoi_dung'];
    $so_dien_thoai = $_SESSION['ten_dang_nhap']['so_dien_thoai'];
    $email = $_SESSION['ten_dang_nhap']['email'];
    $dia_chi= $_SESSION['ten_dang_nhap']['dia_chi'];
 }
 else{
    $ten_nguoi_dung = "";
    $so_dien_thoai = "";
    $email = "";
    $dia_chi= "";
 }
 
 ?>

 <!-- Checkout Start -->
 <div class="container-fluid">
     <form action="index.php?act=dathang" method="post">
         <div class="row px-xl-5">
             <div class="col-lg-8">
                 <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Thông
                         Tin Khách Hàng</span></h5>
                 <div class="bg-light p-30 mb-5">
                     <div class="row">
                         <div class="col-md-6 form-group">
                             <label>Tên Khách Hàng</label>
                             <input class="form-control" type="text" name="ten_nguoi_dung"
                                 value="<?= $ten_nguoi_dung?>">
                         </div>
                         <div class="col-md-6 form-group">
                             <label>E-mail</label>
                             <input class="form-control" type="text" name="email" value="<?= $email ?>">
                         </div>
                         <div class="col-md-6 form-group">
                             <label>Số Điện Thoại</label>
                             <input class="form-control" type="text" name="so_dien_thoai" value="<?= $so_dien_thoai ?>">
                         </div>
                         <div class="col-md-6 form-group">
                             <label>Địa Chỉ</label>
                             <input class="form-control" type="text" name="dia_chi" value="<?= $dia_chi ?>">
                         </div>

                     </div>
                 </div>

             </div>



             <div class="col-lg-4">
                 <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Order
                         Total</span></h5>

                 <div class="bg-light p-30 mb-5">
                     <div class="border-bottom">

                         <h6 class="mb-3">Các Sản Phẩm</h6>
                         <?php
                    //  var_dump($_SESSION['giohang']);
                     $tong = 0;
                     $i=0;
                     foreach($_SESSION['giohang'] as $card){
                         $img = isset($card['2']) ? "upload/" . $card['2'] : "";
                         $ttien = isset($card['3']) && isset($card['4']) ? $card['3'] * $card['4'] : 0;
                     
                         // Accumulate the total
                         $tong += $ttien;

                  ?>
                         <div class="d-flex justify-content-between">
                             <p><?= $card['1'] ?></p>
                             <p><?= $card['3'] ?></p>
                         </div>
                         <?php }?>

                     </div>


                     <div class="pt-2">
                         <div class="d-flex justify-content-between mt-2">
                             <h5>Tổng Giá</h5>
                             <h5><?=$tong ?></h5>
                             <input type="hidden" name="tong_gt_hd" value="<?=$tong ?>">
                             <input type="hidden" name="trang_thai" value="Thanh Toán">
                         </div>
                     </div>
                 </div>

                 <div class="mb-5">
                     <h5 class="section-title position-relative text-uppercase mb-3"><span
                             class="bg-secondary pr-3">Phương Thức Thanh Toán</span></h5>
                     <div class="bg-light p-30">
                         <div class="form-group">
                             <div class="custom-control custom-radio">
                                 <input type="radio" class="custom-control-input" value="Ví Shop" name="pt_tt"
                                     id="paypal">
                                 <label class="custom-control-label" for="paypal">Ví Shop</label>
                             </div>
                         </div>
                         <div class="form-group">
                             <div class="custom-control custom-radio">
                                 <input type="radio" class="custom-control-input" value="Ngân Hàng" name="pt_tt"
                                     id="directcheck">
                                 <label class="custom-control-label" for="directcheck">Ngân Hàng</label>
                             </div>
                         </div>
                         <div class="form-group mb-4">
                             <div class="custom-control custom-radio">
                                 <input type="radio" class="custom-control-input" value="Thanh Toán Khi Nhận Hàng"
                                     name="pt_tt" id="banktransfer">
                                 <label class="custom-control-label" for="banktransfer">Thanh Toán Khi Nhận Hàng</label>
                             </div>
                         </div>
                         <button type="submit" name="dat_hang"
                             class="btn btn-block btn-primary font-weight-bold py-3">Đặt
                             Hàng</button>

                     </div>
                 </div>
             </div>
         </div>
     </form>
 </div>

 <!-- Checkout End -->