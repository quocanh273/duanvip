<?php 
require_once 'connect.php';
 function loadall_sanpham() {
    $sql = "SELECT * FROM sanpham WHERE 1 ORDER BY id ASC";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadpaginate_sanpham($page = 1, $limit = 5)
{
    $page = isset($_GET['page']) ? intval($_GET['page']) : 1;
    $begin = max(0, ($page - 1) * $limit);

    $sql = "SELECT * FROM sanpham ORDER BY id DESC LIMIT $begin, $limit";

    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function total_page($limit = 5)
{
    $sql = "SELECT COUNT(*) as count FROM sanpham";
    $result = pdo_query($sql);
    $count = $result[0]['count'];
    $number_pages = ceil($count / $limit);
    return $number_pages;
}
function insert_sanpham($ma_loai,$tensp,$giasp,$quantity,$description,$product_size
,$mausac,$trangthai,$khuyenmai,$hinh){
    $sql= "INSERT INTO sanpham(ma_loai,ten_san_pham,gia,so_luong,mo_ta,loai_sp,mau_sac,trangthai,thong_tin_km,img)
     values ('$ma_loai','$tensp','$giasp','$quantity','$description','$product_size'
,'$mausac','$trangthai','$khuyenmai','$hinh')";
    pdo_execute($sql);
}
function delete_sanpham($id){
    
    $sql = "delete from sanpham where id=".$id;
    pdo_execute($sql);
}
function loadone_sanpham($id){
    $sql = "select * from sanpham where id=".$id;
    $sanpham=pdo_query_one($sql);
    return  $sanpham;
}
function  update_sanpham($id,$tensp,$giasp,$quantity,$description,$product_size
,$mausac,$trangthai,$khuyenmai,$hinh,$ma_loai){
    if ($hinh!="") 
        $sql = "update sanpham set ma_loai='".$ma_loai."',
     ten_san_pham='".$tensp."',
      gia='".$giasp."',
      so_luong='".$quantity."',
      mo_ta='".$description."',
      loai_sp='".$product_size."',
      mau_sac='".$mausac."',
      trangthai='".$trangthai."',
      thong_tin_km='".$khuyenmai."',
      img='".$hinh."'
      where id=".$id;
    else
    $sql = "update sanpham set ma_loai='".$ma_loai."',
    ten_san_pham='".$tensp."',
     gia='".$giasp."',
     so_luong='".$quantity."',
     mo_ta='".$description."',
     loai_sp='".$product_size."',
     mau_sac='".$mausac."',
     trangthai='".$trangthai."',
     thong_tin_km='".$khuyenmai."'
     
     where id=".$id;   
      pdo_execute($sql);
}



function loadall_sanpham_home() {
    $sql = "SELECT * FROM sanpham WHERE 1 ORDER BY id desc limit 0,12";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function hang_hoa_select_keyword($keyword){
    $sql = "SELECT * FROM hang_hoa hh "
            . " JOIN loai lo ON lo.ma_loai=hh.ma_loai "
            . " WHERE ten_hh LIKE ? OR ten_loai LIKE ?";
    return pdo_query($sql, '%'.$keyword.'%', '%'.$keyword.'%');
}

function loadall_sanpham_ok($kyw="",$ma_loai=0){
    $sql = "select * from sanpham where 1";
    if($kyw!=""){
        $sql.=" and name like '%".$kyw."%'";
    }
    if($ma_loai>0){
        $sql.=" and ma_loai= '".$ma_loai."'";
    }
    $sql.=" order by id desc";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
?>