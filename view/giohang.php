<<<<<<< HEAD
=======
 <!-- Breadcrumb Start -->
 <div class="container-fluid">
     <div class="row px-xl-5">
         <div class="col-12">
             <nav class="breadcrumb bg-light mb-30">
                 <a class="breadcrumb-item text-dark" href="index.php">Home</a>
                 <a class="breadcrumb-item text-dark" href="#">Shop</a>
                 <span class="breadcrumb-item active">Shopping Cart</span>
             </nav>
         </div>
     </div>
 </div>
 <!-- Breadcrumb End -->


 <!-- Cart Start -->
 <?php
if(isset($_SESSION['giohang']) && count($_SESSION['giohang']) != 0){
?>
 <div class="container-fluid">
     <div class="row px-xl-5">
         <div class="col-lg-8 table-responsive mb-5">
             <table class="table table-light table-borderless table-hover text-center mb-0">
                 <thead class="thead-dark">
                     <tr>
                         <th>Các sản phẩm</th>
                         <th>Giá</th>
                         <th>Số lượng</th>
                         <th>Tổng cộng</th>
                         <th>Xóa</th>
                     </tr>
                 </thead>
                 <tbody class="align-middle">

                     <?php
                     
                            $tong = 0;
                            foreach($_SESSION['giohang'] as $card){
                                $img = isset($card['2']) ? "upload/" . $card['2'] : "";
                                $ttien = isset($card['3']) && isset($card['4']) ? $card['3'] * $card['4'] : 0;
                            
                                // Accumulate the total
                                $tong += $ttien;

                         ?>
                       
                     <tr>
                         <td class="align-middle"><img src="<?= $img ?>" alt="" style="width: 50px;"><?= $card['1'] ?></td>
                         <td class="align-middle"><?= $card['3'] ?></td>
                         <td class="align-middle">
                             <div class="input-group quantity mx-auto" style="width: 100px;">
                                 <div class="input-group-btn">
                                     <button class="btn btn-sm btn-primary btn-minus">
                                         <i class="fa fa-minus"></i>
                                     </button>
                                 </div>
                                 <input type="text"
                                     class="form-control form-control-sm bg-secondary border-0 text-center" value="1">
                                 <div class="input-group-btn">
                                     <button class="btn btn-sm btn-primary btn-plus">
                                         <i class="fa fa-plus"></i>
                                     </button>
                                 </div>
                             </div>
                         </td>
                         <td class="align-middle"><?= $ttien ?></td>
                         <td class="align-middle"><button class="btn btn-sm btn-danger"><i
                                     class="fa fa-times"></i></button></td>
                     </tr>
                     <?php
                            }
                     ?>


                     <p>Total: <?= $tong ?></p>

                  

                 </tbody>
                
             </table>
         </div>
         <div class="col-lg-4">
             <form class="mb-30" action="">
                 <div class="input-group">
                     <input type="text" class="form-control border-0 p-4" placeholder="Coupon Code">
                     <div class="input-group-append">
                         <button class="btn btn-primary">Apply Coupon</button>
                     </div>
                 </div>
             </form>
             <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Cart
                     Summary</span></h5>
             <div class="bg-light p-30 mb-5">
                 <div class="border-bottom pb-2">
                     <div class="d-flex justify-content-between mb-3">
                         <h6>Subtotal</h6>
                         <h6>$150</h6>
                     </div>
                     <div class="d-flex justify-content-between">
                         <h6 class="font-weight-medium">Shipping</h6>
                         <h6 class="font-weight-medium">$10</h6>
                     </div>
                 </div>
                 <div class="pt-2">
                     <div class="d-flex justify-content-between mt-2">
                         <h5>Total</h5>
                         <h5>Total: <?= $tong ?></h5>
                     </div>
                     <button class="btn btn-block btn-primary font-weight-bold my-3 py-3">Proceed To Checkout</button>
                 </div>
             </div>
         </div>
     </div>
 </div> 
 
 <!-- Cart End -->
 <?php
} else {
    ?>
 <h2 class="text-center">no products</h2>
 <?php
}
    ?>
 </section>
>>>>>>> 506c9ddc97d64aebd25f03c10f9761bd45caf328
