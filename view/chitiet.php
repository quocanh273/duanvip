 <style>
    #product-carousel img {
    height: 400px; /* Điều chỉnh chiều cao tùy theo thiết kế của bạn */
}

/* Nút chuyển đổi trong carousel */
.carousel-control-prev, .carousel-control-next {
    font-size: 30px;
    color: #333;
}

/* Giao diện chọn size và số lượng */
.custom-control-label {
    font-size: 16px;
}

.input-group-btn button {
    font-size: 18px;
}

/* Bình luận sản phẩm */
#binhluan {
    margin-top: 30px;
}

/* Sản phẩm cùng loại */
.related-carousel .product-item {
    margin-right: 15px;
    margin-bottom: 20px;
}

.related-carousel .product-item img {
    height: 200px;
}
 </style>
 <!-- Breadcrumb Start -->
 <div class="container-fluid">
     <div class="row px-xl-5">
         <div class="col-12">
             <nav class="breadcrumb bg-light mb-30">
                 <a class="breadcrumb-item text-dark" href="index.php">Trang chủ</a>
                 <a class="breadcrumb-item text-dark" href="#">Sản phẩm</a>
                 <span class="breadcrumb-item active">Sản phẩm chi tiết</span>
             </nav>
         </div>
     </div>
 </div>
 <!-- Breadcrumb End -->


 <!-- Shop Detail Start -->
 <div class="container-fluid pb-5">
     <div class="row px-xl-5">
         <div class="col-lg-5 mb-30">
             <div id="product-carousel" class="carousel slide" data-ride="carousel">
                 <div class="carousel-inner bg-light">
                     <?php
                        extract($onesp);

                        $hinhpath = "./upload/" . $img;
                        if (is_file($hinhpath)) {
                            $imgTag = "<img src='" . $hinhpath . "' height='599px' width='100%'> ";
                        } else {
                            $imgTag = "<p>không có hình</p>";
                        }
                        echo $imgTag;


                        ?>
                 </div>
              
             </div>
         </div>

         <div class="col-lg-7 h-auto mb-30">
             <div class="h-100 bg-light p-30">
                 <h3><?= $ten_san_pham ?></h3>

                 <h3 class="font-weight-semi-bold mb-4"><?= $gia ?>$</h3>
                 <p class="mb-4"><?= $mo_ta ?></p>
                 <form action="index.php?act=giohang" method="post" onsubmit="return validateForm()">
                     <div class="d-flex mb-3">
                         <strong class="text-dark mr-3">Sizes:</strong>
                         <div class="custom-control custom-radio custom-control-inline">
                             <input type="radio" class="custom-control-input" id="size-1" name="size" value="XS">
                             <label class="custom-control-label" for="size-1">XS</label>
                         </div>
                         <div class="custom-control custom-radio custom-control-inline">
                             <input type="radio" class="custom-control-input" id="size-2" name="size" value="S">
                             <label class="custom-control-label" for="size-2">S</label>
                         </div>
                         <div class="custom-control custom-radio custom-control-inline">
                             <input type="radio" class="custom-control-input" id="size-3" name="size" value="M">
                             <label class="custom-control-label" for="size-3">M</label>
                         </div>
                         <div class="custom-control custom-radio custom-control-inline">
                             <input type="radio" class="custom-control-input" id="size-4" name="size" value="L">
                             <label class="custom-control-label" for="size-4">L</label>
                         </div>
                         <div class="custom-control custom-radio custom-control-inline">
                             <input type="radio" class="custom-control-input" id="size-5" name="size" value="XL">
                             <label class="custom-control-label" for="size-5">XL</label>
                         </div>
                     </div>
                     <!-- <div class="d-flex mb-4">
                         <strong class="text-dark mr-3">Colors:</strong>

                         <div class="custom-control custom-radio custom-control-inline">
                             <input type="radio" class="custom-control-input" id="color-1" name="color" value="black">
                             <label class="custom-control-label" for="color-1">Black</label>
                         </div>
                         <div class="custom-control custom-radio custom-control-inline">
                             <input type="radio" class="custom-control-input" id="color-2" name="color" value="white">
                             <label class="custom-control-label" for="color-2">White</label>
                         </div>
                         <div class="custom-control custom-radio custom-control-inline">
                             <input type="radio" class="custom-control-input" id="color-3" name="color" value="red">
                             <label class="custom-control-label" for="color-3">Red</label>
                         </div>
                         <div class="custom-control custom-radio custom-control-inline">
                             <input type="radio" class="custom-control-input" id="color-4" name="color" value="blue">
                             <label class="custom-control-label" for="color-4">Blue</label>
                         </div>
                         <div class="custom-control custom-radio custom-control-inline">
                             <input type="radio" class="custom-control-input" id="color-5" name="color" value="green">
                             <label class="custom-control-label" for="color-5">Green</label>
                         </div>

                     </div> -->
                     <div class="d-flex align-items-center mb-4 pt-2">
                         <div class="input-group quantity mr-3" style="width: 130px;">
                             <div class="input-group-btn">
                                 <button class="btn btn-primary btn-minus" onclick="updateQuantity(-1)">
                                     <i class="fa fa-minus"></i>
                                 </button>
                             </div>
                             <input type="text" class="form-control bg-secondary border-0 text-center" value="1"
                                 id="quantityInput">
                             <div class="input-group-btn">
                                 <button class="btn btn-primary btn-plus" onclick="updateQuantity(1)">
                                     <i class="fa fa-plus"></i>
                                 </button>
                             </div>
                         </div>
                     </div>

                     <script>
                     // Get the quantity input element
                     var quantityInput = document.getElementById('quantityInput');

                     // Function to update quantity
                     function updateQuantity(change) {
                         // Ensure quantity doesn't go below 1
                         if (parseInt(quantityInput.value) + change >= 1) {
                             quantityInput.value = parseInt(quantityInput.value) + change;
                         }
                     }
                     </script>

                     <input type="hidden" name="id" value="<?= $id ?>">
                     <input type="hidden" name="ten_san_pham" value="<?= $ten_san_pham ?>">
                     <input type="hidden" name="img" value="<?= $img ?>">
                     <input type="hidden" name="gia" value="<?= $gia ?>">
                     <button type="submit" name="giohang" class="btn btn-primary px-3"><i class="fa fa-shopping-cart mr-1"></i> Thêm Vào Giỏ Hàng</button>
                 </form>




             </div>
             <div class="d-flex pt-2">
                 <strong class="text-dark mr-2">Share on:</strong>
                 <div class="d-inline-flex">
                     <a class="text-dark px-2" href="">
                         <i class="fab fa-facebook-f"></i>
                     </a>
                     <a class="text-dark px-2" href="">
                         <i class="fab fa-twitter"></i>
                     </a>
                     <a class="text-dark px-2" href="">
                         <i class="fab fa-linkedin-in"></i>
                     </a>
                     <a class="text-dark px-2" href="">
                         <i class="fab fa-pinterest"></i>
                     </a>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"> </script>
 <script>
$(document).ready(function() {
    $("#binhluan").load("view/binhluan/binhluan.php", {
        idpro: <?= $id ?>
    });
});
 </script>
 <script>
function validateForm() {
    // Check if a size is selected
    var sizeSelected = document.querySelector('input[name="size"]:checked');
    // If both size and color are not selected, show an alert and prevent form submission
    if (!sizeSelected) {
        alert("Vui lòng chọn size ");
        return false; // Prevent form submission
    }
    return true;
}
</script>
 <div class="row px-xl-5" id="binhluan">

 </div>
 </div>

 </div>
 </div>
 </div>
 <!-- Shop Detail End -->


 <!-- Products Start -->
 <div class="container-fluid py-5">
     <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Sản Phẩm
             cùng Loại</span></h2>
     <div class="row px-xl-5">
         <div class="col">
             <div class="owl-carousel related-carousel">
                 <div class="product-item bg-light">
                     <div class="product-img position-relative overflow-hidden">
                         <img class="img-fluid w-100" src="view/img/product-1.jpg" alt="">
                         <div class="product-action">
                             <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                             <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                             <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                             <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                         </div>
                     </div>
                     <div class="text-center py-4">
                         <a class="h6 text-decoration-none text-truncate" href="">Product Name Goes Here</a>
                         <div class="d-flex align-items-center justify-content-center mt-2">
                             <h5>$123.00</h5>
                             <h6 class="text-muted ml-2"><del>$123.00</del></h6>
                         </div>
                         <div class="d-flex align-items-center justify-content-center mb-1">
                             <small class="fa fa-star text-primary mr-1"></small>
                             <small class="fa fa-star text-primary mr-1"></small>
                             <small class="fa fa-star text-primary mr-1"></small>
                             <small class="fa fa-star text-primary mr-1"></small>
                             <small class="fa fa-star text-primary mr-1"></small>
                             <small>(99)</small>
                         </div>
                     </div>
                 </div>
                 <div class="product-item bg-light">
                     <div class="product-img position-relative overflow-hidden">
                         <img class="img-fluid w-100" src="view/img/product-2.jpg" alt="">
                         <div class="product-action">
                             <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                             <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                             <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                             <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                         </div>
                     </div>
                     <div class="text-center py-4">
                         <a class="h6 text-decoration-none text-truncate" href="">Product Name Goes Here</a>
                         <div class="d-flex align-items-center justify-content-center mt-2">
                             <h5>$123.00</h5>
                             <h6 class="text-muted ml-2"><del>$123.00</del></h6>
                         </div>
                         <div class="d-flex align-items-center justify-content-center mb-1">
                             <small class="fa fa-star text-primary mr-1"></small>
                             <small class="fa fa-star text-primary mr-1"></small>
                             <small class="fa fa-star text-primary mr-1"></small>
                             <small class="fa fa-star text-primary mr-1"></small>
                             <small class="fa fa-star text-primary mr-1"></small>
                             <small>(99)</small>
                         </div>
                     </div>
                 </div>
                 <div class="product-item bg-light">
                     <div class="product-img position-relative overflow-hidden">
                         <img class="img-fluid w-100" src="view/img/product-3.jpg" alt="">
                         <div class="product-action">
                             <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                             <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                             <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                             <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                         </div>
                     </div>
                     <div class="text-center py-4">
                         <a class="h6 text-decoration-none text-truncate" href="">Product Name Goes Here</a>
                         <div class="d-flex align-items-center justify-content-center mt-2">
                             <h5>$123.00</h5>
                             <h6 class="text-muted ml-2"><del>$123.00</del></h6>
                         </div>
                         <div class="d-flex align-items-center justify-content-center mb-1">
                             <small class="fa fa-star text-primary mr-1"></small>
                             <small class="fa fa-star text-primary mr-1"></small>
                             <small class="fa fa-star text-primary mr-1"></small>
                             <small class="fa fa-star text-primary mr-1"></small>
                             <small class="fa fa-star text-primary mr-1"></small>
                             <small>(99)</small>
                         </div>
                     </div>
                 </div>
                 <div class="product-item bg-light">
                     <div class="product-img position-relative overflow-hidden">
                         <img class="img-fluid w-100" src="view/img/product-4.jpg" alt="">
                         <div class="product-action">
                             <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                             <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                             <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                             <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                         </div>
                     </div>
                     <div class="text-center py-4">
                         <a class="h6 text-decoration-none text-truncate" href="">Product Name Goes Here</a>
                         <div class="d-flex align-items-center justify-content-center mt-2">
                             <h5>$123.00</h5>
                             <h6 class="text-muted ml-2"><del>$123.00</del></h6>
                         </div>
                         <div class="d-flex align-items-center justify-content-center mb-1">
                             <small class="fa fa-star text-primary mr-1"></small>
                             <small class="fa fa-star text-primary mr-1"></small>
                             <small class="fa fa-star text-primary mr-1"></small>
                             <small class="fa fa-star text-primary mr-1"></small>
                             <small class="fa fa-star text-primary mr-1"></small>
                             <small>(99)</small>
                         </div>
                     </div>
                 </div>
                 <div class="product-item bg-light">
                     <div class="product-img position-relative overflow-hidden">
                         <img class="img-fluid w-100" src="view/img/product-5.jpg" alt="">
                         <div class="product-action">
                             <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                             <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                             <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                             <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                         </div>
                     </div>
                     <div class="text-center py-4">
                         <a class="h6 text-decoration-none text-truncate" href="">Product Name Goes Here</a>
                         <div class="d-flex align-items-center justify-content-center mt-2">
                             <h5>$123.00</h5>
                             <h6 class="text-muted ml-2"><del>$123.00</del></h6>
                         </div>
                         <div class="d-flex align-items-center justify-content-center mb-1">
                             <small class="fa fa-star text-primary mr-1"></small>
                             <small class="fa fa-star text-primary mr-1"></small>
                             <small class="fa fa-star text-primary mr-1"></small>
                             <small class="fa fa-star text-primary mr-1"></small>
                             <small class="fa fa-star text-primary mr-1"></small>
                             <small>(99)</small>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Products End -->