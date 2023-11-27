<main>
    <div class="head-title">
        <div class="left">
            <h1>Danh mục</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Trang Chủ</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>
                    <a class="active" href="#">Danh mục</a>
                </li>
            </ul>
        </div>

    </div>
    <!-- danh mục -->
    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Danh mục</h3>
            </div>
            <div class="form-group  d-flex ">
                <form action="index.php?act=createdm" method="post" class="pb-4">

                    <a href="index.php?act=createdm"><button class="btn btn-insert">Thêm danh mục</button></a>
                </form>
                <form action="" method="post" class="form-group form-search-sp">
                    <div class="form-input pb-2 d-flex    ">
                        <!-- <span class="w-25 pt-2 ">Tìm Kiếm </span>
              <input type="text" name="search" width="50px"  placeholder="Search..." class="form-control px-2" >	
                  <input type="submit" name="locsp" value="Lọc " class=" btn btn-insert px-2"> -->
                    </div>
                </form>
            </div>

            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>

                        <th>MÃ DANH MỤC</th>
                        <th>ẢNH DANH MỤC</th>
                        <th>TÊN SẢN PHẨM</th>
                        <th>THAO TÁC</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($dsdm as $dm) {
                        extract($dm);
                        $suadm = "index.php?act=editdm&ma_loai=" . $ma_loai;
                        $xoadm = "index.php?act=xoadm&ma_loai=" . $ma_loai; // đường liên kết 
                        $hinhpath = "../upload/" . $img;
                        if (is_file($hinhpath)) {
                            $img = "<img src='" . $hinhpath . "' height='80'>";
                        } else {
                            $img = "không có hình";
                        }
                        echo '  <tr>
                          <td>' . $ma_loai . '</td>
                          <td>' . $img . '</td>
                          <td>' . $ten_loai . '</td>
                          
                          <td>   <a href="' . $suadm . '"><input type="button" value="Sửa" class="btn btn-info"></a> 
                                 <a href="' . $xoadm . '"><input type="button" value="Xóa" class="btn btn-danger"></a>
                                 
                                 </td>
                      </tr>';
                    }

                    ?>
                    <script>
                    function xoa() {
                        return confirm("ban co chac chan muon xoa k");
                    }

                    function thanhcong() {
                        return alert("thanh cong");
                    }
                    </script>

                </tbody>
                <tfoot>
                    <tr>
                        <th>MÃ DANH MỤC</th>
                        <th>TÊN DANH MỤC</th>
                        <th>ẢNH</th>
                        <th>THAO TÁC</th>
                    </tr>
                </tfoot>
            </table>



            <!-- <table>
       
            <thead class="tr-shadow">
                <tr>
                    <th>Mã Sản Phẩm</th>
                    <th >Tên Sản Phẩm</th>
                    <th colspan="2"> Ảnh </th>
                    <th>Giá </th>
                    <th>Mô Tả </th>
                    <th>Số Lượng </th>  
                    <th> Lượt Xem</th>  
                    <th>Mã Danh Mục</th>
                    <th >Thao Tác</th>
                </tr>
            </thead>
            <tbody>
                <tr class="tr-shadow">
                    <td>
                     1
                    </td>
                    <td >Quần Đùi</td>
                    <td colspan="2">Ảnh</td>
                    <td>Giá</td>
                    <td>Mô Tả</td>
                    <td>Số Lượng</td>
                    <td>Lượt Xem</td>
                    <td>Mã Danh Mục</td>
                    <td >
                        <a href="index.php?act=updatesp"><button class=" btn status completed">Sửa </button></a>
                    <a href="index.php?act=deletesp"><button class="btn status pending">xóa</button></a>
                    </td>
            
                </tr>
             <tr class="tr-shadow">
                    <td>
                     1
                    </td>
                    <td >Quần Đùi</td>
                    <td colspan="2">Ảnh</td>
                    <td>Giá</td>
                    <td>Mô Tả</td>
                    <td>Số Lượng</td>
                    <td>Lượt Xem</td>
                    <td>Mã Danh Mục</td>
                    <td >
                        <a href="index.php?act=updatesp"><button class=" btn status completed">Sửa </button></a>
                    <a href="index.php?act=deletesp"><button class="btn status pending">xóa</button></a>
                    </td>
                </tr>
                <tr class="tr-shadow">
                    <td>
                     1
                    </td>
                    <td >Quần Đùi</td>
                    <td colspan="2">Ảnh</td>
                    <td>Giá</td>
                    <td>Mô Tả</td>
                    <td>Số Lượng</td>
                    <td>Lượt Xem</td>
                    <td>Mã Danh Mục</td>
                    <td >
                        <a href="index.php?act=updatesp"><button class=" btn status completed">Sửa </button></a>
                    <a href="index.php?act=deletesp"><button class="btn status pending">xóa</button></a>
                    </td>
                </tr> 
              
                
             
            </tbody>    
        </table> -->
            <script>
            function xoa() {
                return confirm("ban co chac chan muon xoa k");
            }
            </script>

        </div>

    </div>
</main>