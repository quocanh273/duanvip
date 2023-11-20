  <!-- Shop Detail Start -->
  <div class="container-fluid mt-5" >
        <div class="row px-xl-5">
            <div class="col-lg-5 mb-30">
                <div id="product-carousel" class="carousel slide" data-ride="carousel" >
                    <div class="carousel-inner bg-light">
                    <?php 
extract($dhchitiet);

?>

                 

            <div class="col-lg-7 h-auto mb-30">
                <div class="h-100 bg-light p-30">
                   
                    <div class="d-flex mb-3">
                        <strong class="text-dark mr-3">Tên người dùng : </strong>
                        <form>
                            <div class="custom-control custom-radio custom-control-inline">
                                
                                <label class="custom-control-label" for="size-1"> <?php echo $ten_nguoi_dung?></label>
                            </div>
                        </form>
                    </div>
                    <div class="d-flex mb-3">
                        <strong class="text-dark mr-3">Giá Trị Đơn Hàng : </strong>
                        <form>
                            <div class="custom-control custom-radio custom-control-inline">
                                
                                <label class="custom-control-label" for="size-1"> <?php echo $tong_gt_hd?></label>
                            </div>
                        </form>
                    </div>
                    <div class="d-flex mb-3">
                        <strong class="text-dark mr-3">Thông tin khuyến mãi: </strong>
                        <form>
                            <div class="custom-control custom-radio custom-control-inline">
                                
                                <label class="custom-control-label" for="size-1"> <?php echo $thong_tin_km?></label>
                            </div>
                        </form>
                    </div>
                    <div class="d-flex mb-3">
                        <strong class="text-dark mr-3">Trạng Thái: </strong>
                        <form>
                            <div class="custom-control custom-radio custom-control-inline">
                                
                                <label class="custom-control-label" for="size-1"> <?php echo $trang_thai?></label>
                            </div>
                        </form>
                    </div>
                    <div class="d-flex mb-4">
                        <strong class="text-dark mr-3">Địa chỉ :</strong>
                        <form>
                            <div class="custom-control custom-radio custom-control-inline">
                                <label class="custom-control-label" for="color-1"> <?php echo $dia_chi?></label>
                            </div>
                        </form>
                    </div>
                    <div class="d-flex mb-3">
                        <strong class="text-dark mr-3">Ngày tạo hóa đơn : </strong>
                        <form>
                            <div class="custom-control custom-radio custom-control-inline">
                                
                                <label class="custom-control-label" for="size-1"> <?php echo $ngay_thd?></label>
                            </div>
                        </form>
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
    </div>
                   