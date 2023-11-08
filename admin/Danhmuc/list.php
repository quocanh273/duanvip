<main>
<div class="head-title">
    <div class="left">
        <h1>Danh Mục</h1>
        <ul class="breadcrumb">
            <li>
                <a href="#">Trang Chủ</a>
            </li>
            <li><i class='bx bx-chevron-right'></i></li>
            <li>
                <a class="active" href="#">Danh Mục </a>
            </li>
        </ul>
    </div>

</div>

<div class="table-data">
    <div class="order">
        <div class="head">
            <h3>Danh Mục</h3>
          
        </div>
        <form action="index.php?act=createdm" method="post" class="pb-4"> 
            <a href="index.php?act=createdm"><button class="btn btn-insert">Thêm Danh Mục</button></a>
        </form>
        <table>
            <thead>
                <tr>
                    <th>Mã Danh Mục</th>
                    <th colspan="5">Tên Danh Mục</th>
                    <th >Thao Tác</th>
                </tr>
            </thead>
            <tbody>
            <?php
                   // echo var_dump($dsdm);
                    foreach ($dsdm as $dm) {

                        extract($dm);
                        $suadm = "index.php?act=editdm";
                        $xoadm = "index.php?act=xoadm&ma_loai=".$ma_loai; // đường liên kết 
                        echo '<tr>
                        <td>'.$ma_loai.'</td>
                        <td>'.$ten_loai.'</td>
                        <td> <a href="'.$suadm.'"><button class=" btn status completed">Sửa</button></a> 
                        <a href="'.$xoadm.'"><button class="btn status pending">xóa</button></a></td>
                    </tr>';
                    }
                ?>

                <!-- danh mục con  -->
                 <!-- $category_items= "index.php?act=listdm_items&id_cate=".$category_id; -->
                <!-- // <td> <a href="'.$category_items.'"><button class=" btn status process">Danh Mục Con </button></a>
                // </td> -->
              
             
            </tbody>    
        </table>
      
    </div>

</div>
</main>