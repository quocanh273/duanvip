<style>
/* Additional CSS for product size adjustments */
.custom-column {
    flex: 0 0 calc(33.333% - 20px);
    max-width: calc(33.333% - 20px);
    margin: 0 10px;
    transition: transform 0.3s ease;
}

.custom-column:hover {
    transform: scale(1.05);
    /* Zoom in a bit on hover */
}

.product-item {
    border: 1px solid #ddd;
    border-radius: 8px;
    overflow: hidden;
    transition: box-shadow 0.3s ease;
    margin-bottom: 20px;
    position: relative;
}

.product-item:hover {
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
    /* Add a subtle shadow on hover */
}

.product-img img {
    width: 100%;
    height: 250px;
    /* Increase the height of the image */
    object-fit: cover;
    transition: transform 0.3s ease;
}

.product-item:hover .product-img img {
    transform: scale(1.1);
    /* Zoom in the image on hover */
}

.product-item .text-center {
    padding: 15px;
}

/* ... (other styles remain unchanged) */
</style>

<!-- Container Start -->
<div class="container-fluid">

    <!-- Breadcrumb Start -->
    <!-- ... (breadcrumb remains unchanged) -->
    <!-- Breadcrumb End -->

    <!-- Shop Start -->
    <div class="container">
        <div class="row pb-3 custom-row">
            <!-- Shop Product Start -->
            <div class="col-lg-9 col-md-8 mx-auto shop-products">
                <div class="row pb-3">
                    <?php
                    foreach ($dssp as $sp) {
                        extract($sp);
                        $limitedDescription = implode(' ', array_slice(str_word_count($mo_ta, 2), 0, 3));
                        $hinhpath = "upload/" . $img;
                        $spct = "index.php?act=ctsanpham&id=" . $id;
                        if (is_file($hinhpath)) {
                            $imgTag = "<img class='img-fluid' style='width:100%; height:200px;' src='" . $hinhpath . "' alt='Product Image'>";
                        } else {
                            $imgTag = "<p>không có hình</p>";
                        }
                        echo '<div class="col-12 pb-2 custom-column">
                                    <div class="product-item bg-light mb-4 text-center">
                                        <div class="product-img position-relative overflow-hidden">
                                            ' . $imgTag . '
                                            <div class="product-action">
                                                <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                                                <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                                                <a class="btn btn-outline-dark btn-square" href="' . $spct . '"><i class="fa fa-search"></i></a>
                                            </div>
                                        </div>
                                        <div class="text-center py-4">
                                            <a class="h6 text-decoration-none text-truncate" href="">' . $ten_san_pham . '</a>
                                            <div class="d-flex align-items-center justify-content-center mt-2">
                                                <h5>' . $gia . '</h5>
                                            </div>
                                            <div class="product-details">
                                                <div class="column text-left">' . $limitedDescription . '</div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>';
                    }
                    ?>
                </div>

                <div class="col-12">
                    <!-- <nav>
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled"><a class="page-link" href="#">Previous</span></a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav> -->

                    <?php
                    // var_dump($list_page);
                    for ($i = 1; $i <= $list_page; $i++) {
                    ?>

                    <nav>
                        <ul class="pagination justify-content-center">

                            <!-- Nút Previous -->
                            <li class="page-item <?php echo ($page == 1) ? 'disabled' : ''; ?>">
                                <a class="page-link" href="index.php?act=sanpham&page=<?php echo max($page - 1, 1); ?>"
                                    aria-label="Previous">
                                    <span aria-hidden="true">&laquo; Previous</span>
                                </a>
                            </li>

                            <!-- Các trang -->
                            <?php
                                for ($i = 1; $i <= $list_page; $i++) {
                                    $activeClass = ($i == $page) ? 'active' : '';
                                    echo '<li class="page-item ' . $activeClass . '">
            <a href="index.php?act=sanpham&page=' . $i . '" class="page-link">' . $i . '</a>
          </li>';
                                }
                                ?>

                            <!-- Nút Next -->
                            <li class="page-item <?php echo ($page == $list_page) ? 'disabled' : ''; ?>">
                                <a class="page-link"
                                    href="index.php?act=sanpham&page=<?php echo min($page + 1, $list_page); ?>"
                                    aria-label="Next">
                                    <span aria-hidden="true">Next &raquo;</span>
                                </a>
                            </li>

                        </ul>
                    </nav>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <!-- Shop Product End -->
        </div>
    </div>
    <!-- Shop End -->

</div>
<!-- Container End -->