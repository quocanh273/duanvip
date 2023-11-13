

<main>
<div class="head-title">
    <div class="left">
        <h1>Quản Lý Khách Hàng</h1>
        <ul class="breadcrumb">
            <li>
                <a href="#">Trang Chủ</a>
            </li>
            <li><i class='bx bx-chevron-right'></i></li>
            <li>
                <a class="active" href="#">Quản Lý Khách Hàng </a>
            </li>
        </ul>
    </div>

</div>

<div class="table-data" >
    <div class="order">
        <div class="head">
            <h3>Khách Hàng</h3>
        </div>
      <div class="form-group  d-flex ">
      <form action="index.php?act=createkh" method="post"class="pb-4" > 
          
          <a href="index.php?act=createkh"><button class="btn btn-insert">Thêm Khách Hàng</button></a>
      </form> 
      <form action="" method="post" class="form-group form-search-sp">
              <div class="form-input pb-2 d-flex    ">
                <!-- <span class="w-25 pt-2 ">Tìm Kiếm </span>
              <input type="text" name="search" width="50px"  placeholder="Search..." class="form-control px-2" >	 -->
                  <!-- <input type="submit" name="locsp" value="Lọc " class=" btn btn-insert px-2"> -->
              </div>
          </form>
      </div>
      <table id="example" class="table table-striped"  style="width:100%">
        <thead>
        <tr>
                            <th></th>
                            <th>ID</th>
                            <th>TÊN</th>
                            <th>MẬT KHẨU</th>
                            <th>EMAIL</th>
                            <th>NGÀY SINH</th>
                            <th>ĐỊA CHỈ</th>
                            <th>SỐ ĐIỆN THOẠI</th>
                            <th>IMG</th>
                            <th>THAO TÁC</th>
                            <th></th>                     
                          </tr>
        </thead>
        <tbody>
        <?php 
                       foreach($listkhachhang as $khachhang){
                        extract($khachhang);
                        $suakh = "index.php?act=suakh&id=".$id;
                        $xoakh = "index.php?act=xoakh&id=".$id; // đường liên kết 
                        $hinhpath = "../upload/".$img;
                        if (is_file($hinhpath)) {
                            $img="<img src='".$hinhpath."' height='80'>" ;
                        }else{
                            $img = "không có hình";
                        }
                        echo '<tr>
                       
                        <td>'.$id.'</td>
                        <td>'.$ten_nguoi_dung.'</td>
                        <td>'.$mat_khau.'</td>
                        <td>'.$email.'</td>
                        <td>'.$ngay_sinh.'</td>
                        <td>'.$dia_chi.'</td>
                        <td>'.$so_dien_thoai.'</td>
                        <td>'.$img.'</td>
                        <td>   
                        <a href="'.$suakh.'"><input type="button" value="Sửa"></a> 
                        <a href="'.$xoakh.'"><input type="button" onclick=""  value="Xóa"></a>
                        </td>
                    </tr>';
                    }
                    ?>

        </tbody>
        <tfoot>
        <tr>
                            <th></th>
                            <th>ID</th>
                            <th>TÊN</th>
                            <th>MẬT KHẨU</th>
                            <th>EMAIL</th>
                            <th>NGÀY SINH</th>
                            <th>ĐỊA CHỈ</th>
                            <th>SỐ ĐIỆN THOẠI</th>
                            <th>IMG</th>
                            <th>THAO TÁC</th>
                            <th></th>                     
                          </tr>
        </tfoot>
    </table>
            <!-- <tbody>
                <tr class="tr-shadow">
                    <td>
                       1
                    </td>
                    <td> Nguyễn Quang Phúc</td>
                    <td>phuckaka@gmail.com</td>
                    <td>0343014882</td>
                    <td >
                    <a href="index.php?act=deletekh"><button class="btn status pending">xóa</button></a>
                    <a href="'.$suadm.'"><button class=" btn status completed">Sửa</button>
                    </td>
                </tr>
                <tr class="tr-shadow">
                    <td>
                       1
                    </td>
                    <td> Nguyễn Quốc Anh</td>
                    <td>Anh@gmail.com</td>
                    <td>0343014882</td>
                    <td >
                    <a href="index.php?act=deletekh"><button class="btn status pending">xóa</button></a>
                    <a href="'.$suadm.'"><button class=" btn status completed">Sửa</button>
                    </td>
                </tr>
                <tr class="tr-shadow">
                    <td>
                       1
                    </td>
                    <td> Nguyễn Thị Trang</td>
                    <td>Trang@gmail.com</td>
                    <td>0343014882</td>
                    <td >
                    <a href="index.php?act=deletekh"><button class="btn status pending">xóa</button></a>
                    <a href="'.$suadm.'"><button class=" btn status completed">Sửa</button>
                    </td>
                </tr> -->
                
               
                
             
            <!-- </tbody>    -->
        </table>
       
    </div>

</div>
</main>