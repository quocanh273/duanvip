
<main>
<div class="head-title">
    <div class="left">
        <h1>Thống Kê</h1>
        <ul class="breadcrumb">
            <li>
                <a href="#">Trang Chủ</a>
            </li>
            <li><i class='bx bx-chevron-right'></i></li>
            <li>
            <a class="active" href="#">Thống Kê </a>
            </li>
        </ul>
    </div>

</div>

<div class="table-data" >
    <div class="order">
        <div class="head">
            <h3>Danh mục</h3>
        </div>
      <div class="form-group  d-flex ">
      <form action="index.php?act=createdm" method="post"class="pb-4" > 
          
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
      
      <table id="example" class="table table-striped"  style="width:100%">
        <thead>
    <tr>
        
                    <th>MÃ DANH MỤC</th>
                    <th>TÊN DANH MỤC</th>
                    <th>SÓ LƯỢNG</th>
                    <th>GIÁ CAO NHẤT</th>
                    <th>GIÁ THẤP NHẤT</th>
                    <th>GIÁ TRUNG BÌNH</th>
    </tr>
        </thead>
        <tbody>
        <?php 
                        foreach ($listthongke as $thongke){
                            extract($thongke);
                            echo '<tr>
                                <td>'.$ma_loai.'</td>
                                <td>'.$ten_loai.'</td>
                                <td>'.$countsp.'</td>
                                <td>'.$maxprice.'</td>
                                <td>'.$minprice.'</td>
                                <td>'.$avgprice.'</td>
                            </tr>';
    
                        }
                        
                        ?>                    
    
        </tbody>
        <tfoot>
            <tr>
                    <th>MÃ DANH MỤC</th>
                    <th>TÊN DANH MỤC</th>
                    <th>SÓ LƯỢNG</th>
                    <th>GIÁ CAO NHẤT</th>
                    <th>GIÁ THẤP NHẤT</th>
                    <th>GIÁ TRUNG BÌNH</th>
            </tr>
        </tfoot>
    </table>
    
     

        
     
    </div>

</div>
</main>