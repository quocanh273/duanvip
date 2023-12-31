 <!-- Navbar End -->
 <!-- Carousel Start -->
 <div class="container-fluid mb-3">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#header-carousel" data-slide-to="1"></li>
                    
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item position-relative active" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="upload/imgbn4.jpg" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Thời Trang Nam</h1>
                                    <!-- <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Thời trang nam .Hệ thống thời trang cho phái mạnh hàng đầu Việt Nam, hướng tới phong cách nam tính, lịch lãm và trẻ trung.</p> -->
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="index.php?act=sanpham">Xem ngay</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item position-relative" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="upload/imgbn.jpg" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Thời Trang Nữ</h1>
                                    <!-- <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Mua Thời trang nữ đẹp, hợp thời trang, hàng hiệu, đa dạng mẫu mã, dễ dàng đổi trả. Giao nhanh trong 2h, miễn phí vận chuyển trên toàn quốc.</p> -->
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="index.php?act=sanpham">Xem ngay</a>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="product-offer mb-30" style="height: 200px;">
                    <img class="img-fluid" src="upload/imgbn1.jpg" alt="">
                    <div class="offer-text">
                        <!-- <h6 class="text-white text-uppercase">Tiết kiệm 20%</h6>
                        <h3 class="text-white mb-3">Đề nghị đặc biệt</h3> -->
                        <a href="index.php?act=sanpham" class="btn btn-primary">Xem ngay</a>
                    </div>
                </div>
                <div class="product-offer mb-30" style="height: 200px;">
                    <img class="img-fluid" src="upload/imgbn3.jpg" alt="">
                    <div class="offer-text">
                        <!-- <h6 class="text-white text-uppercase">Tiết kiệm 20%</h6>
                        <h3 class="text-white mb-3">Đề nghị đặc biệt</h3> -->
                        <a href="index.php?act=sanpham" class="btn btn-primary">Xem ngay</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Featured Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Sản Phẩm chất lượng</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
                    <h5 class="font-weight-semi-bold m-0">Miễn Phí Vận Chuyển</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Hoàn Trả Trong 14 Ngày</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Hỗ Trợ 24/7</h5>
                </div>
            </div>
        </div>
    </div>
   

    <!-- Categories Start -->
    <div class="container-fluid pt-5">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">DANH MỤC</span></h2>
        <div class="row px-xl-5 pb-3">
        <?php 
             foreach ($dmnew as $dm){
             extract($dm);
             $iddm = "index.php?act=sanphamdm&ma_loai=".$ma_loai;
        $hinhpath = "upload/".$img;
        if (is_file($hinhpath)) {
            $img="<img src='".$hinhpath."' width= '100%' height='200'>" ;
        }else{
            $img = "không có hình";
        }


        echo '
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <a class="text-decoration-none" href="'.$iddm.'">
                <div class="cat-item d-flex align-items-center mb-4">
                    <div class="overflow-hidden" style="width: 50%; height: 200px;">
                  '.$img.'
                    </div>
                    <div class="flex-fill pl-3">
                        <h6>'.$ten_loai.'</h6>
                        <small class="text-body"></small>
                    </div>
                </div>
            </a>
        </div>
        ';
    }
?>
</div>
      
    </div>
    <!-- Categories End -->
<!-- 
  load sản phẩm -->

    <div class="container-fluid pt-5 pb-3">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">SẢN PHẨM</span></h2>
    <div class="row px-xl-5">
        <?php 
    foreach ($spnew as $sp) {
       


        extract($sp);
        $limitedDescription = substr($mo_ta, 0, 50);
        
        $hinhpath = "upload/".$img;
        $spct= "index.php?act=ctsanpham&id=".$id;
        if (is_file($hinhpath)) {
            $imgTag = "<img class='img-fluid' style='width:100%; height:350px;' src='".$hinhpath."' alt='Product Image'>";
        } else {
            $imgTag = "<p>không có hình</p>";
        }

        echo '<div class="col-lg-3 col-md-4 col-sm-6 pb-1">
        <a  href="index.php?act=sanphamct&id='. $id. '">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    ' . $imgTag . '
                    <div class="product-action">
                       
                        <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                        <a class="btn btn-outline-dark btn-square" href="' . $spct . '"><i class="fa fa-search"></i></a>
                    </div>
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="' . $spct . '">' . $ten_san_pham . '</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h5>' . $gia . ' $</h5>
                    </div>
                    <div class="d-flex align-items-center justify-content-center mb-1">
                    '.$limitedDescription.'
                    </div>
                    <div class="d-flex align-items-center justify-content-center mb-1">
                        <form action="index.php?act=giohang" method="post">
                            <input type="hidden" name="id" value="' . $id . '">
                            <input type="hidden" name="ten_san_pham" value="' . $ten_san_pham . '">
                            <input type="hidden" name="gia" value="' . $gia . '">
                            <input type="hidden" name="img" value="' . $img . '">
                           
                        </form>
                    </div>
                </div>
            </div>
        </div>';
}
?>
        
        </div>
    </div>
    
    <!-- Vendor Start -->
    <div class="container-fluid py-5">
        <div class="row px-xl-5">
            <div class="col">
                <div class="owl-carousel vendor-carousel">
                    <div class="bg-light p-4">
                        <img src="view/img/vendor-1.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="view/img/vendor-2.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="view/img/vendor-3.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="view/img/vendor-4.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="view/img/vendor-5.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="view/img/vendor-6.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="view/img/vendor-7.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="view/img/vendor-8.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->