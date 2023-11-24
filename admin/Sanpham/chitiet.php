

    <!-- Shop Detail Start -->
    <div class="container-fluid pb-5">
        <div class="row px-xl-5">
            <div class="col-lg-5 mb-30">
                <div id="product-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner bg-light">
                                    <?php 
                extract($sanpham);
                $hinhpath = "../upload/".$img;
                        if (is_file($hinhpath)) {
                            $img="<img   src='".$hinhpath."' height='599px'> " ;
                        }else{
                            $img = "không có hình";
                        }
                echo $img;
                ?>
                    </div>
                    <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                        <i class="fa fa-2x fa-angle-left text-dark"></i>
                    </a>
                    <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                        <i class="fa fa-2x fa-angle-right text-dark"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-7 h-auto mb-30">
                <div class="h-100 bg-light p-30">
                    <h3><?php echo $ten_san_pham?></h3>
                    <div class="d-flex mb-3">
                        <div class="text-primary mr-2">
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star-half-alt"></small>
                            <small class="far fa-star"></small>
                        </div>
                        <small class="pt-1">(99 Reviews)</small>
                    </div>
                    <h3 class="font-weight-semi-bold mb-4"><?=$gia?></h3>
                    <p class="mb-4"><?php echo $mo_ta?></p>
                    <div class="d-flex mb-3">
                        <strong class="text-dark mr-3">Sizes : </strong>
                        <form>
                            <div class="custom-control custom-radio custom-control-inline">
                                
                                <label class="custom-control-label" for="size-1"> <?php echo $loai_sp?></label>
                            </div>
                        </form>
                    </div>
                    <!-- <div class="d-flex mb-4">
                        <strong class="text-dark mr-3">MÀU :</strong>
                        <form>
                            <div class="custom-control custom-radio custom-control-inline">
                                <label class="custom-control-label" for="color-1"> <?php echo $mau_sac?></label>
                            </div>
                        </form>
                    </div> -->

<!-- Bình luận Start -->
<div class="comments-section">
    <h4>Bình luận</h4>

    
</div>
<!-- Bình luận End -->

                    <div class="d-flex align-items-center mb-4 pt-2">
                        <div class="input-group quantity mr-3" style="width: 130px;">
                            <!-- <div class="input-group-btn">
                                <button class="btn btn-primary btn-minus">
                                    <i class="fa fa-minus"></i>
                                </button>
                            </div> -->
                            <!-- <input type="text" class="form-control bg-secondary border-0 text-center" value="1">
                            <div class="input-group-btn">
                                <button class="btn btn-primary btn-plus">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div> -->
                        </div>
                        <!-- <button class="btn btn-primary px-3"><i class="fa fa-shopping-cart mr-1"></i> Add To
                            Cart</button>
                    </div> -->
                    <!-- <div class="d-flex pt-2">
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
                    </div> -->
                </div>
            </div>
        </div>
        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Products End -->
