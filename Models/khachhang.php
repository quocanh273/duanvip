<?php 

function ds_khachhang(){
    $sql="select*from nguoi_dung order by id desc";
    $listkhachhang=pdo_query($sql);
    return $listkhachhang; 
}

function insert_khachhang($tenkh,$tendn,$pass,$mail,$ngaysinh,$diachi,$sodienthoai,$image){
    $sql="INSERT INTO nguoi_dung(ten_nguoi_dung,ten_dang_nhap,mat_khau,email,ngay_sinh,dia_chi,so_dien_thoai,img) 
    values
     (
    '$tenkh',
    '$tendn',
     '$pass',
     '$mail',
     '$ngaysinh',
     '$diachi',
     '$sodienthoai',
     '$image')";
    pdo_execute($sql);
}

function loadone_kh($id){
    $sql = "select * from nguoi_dung where id=".$id;
    $nguoi_dung =pdo_query_one($sql);
    return  $nguoi_dung;
}
function suakh($id, $tenkh, $tendn, $pass, $mail, $ngaysinh, $diachi, $sodienthoai, $image) {
    
    try {
        if($image != "")
        $sql ="UPDATE `nguoi_dung` SET `ten_nguoi_dung`='$tenkh',`ten_dang_nhap`='$tendn',`img`='$image',`mat_khau`='$pass',`email`='$mail',`ngay_sinh`='$ngaysinh',`dia_chi`='$diachi',`so_dien_thoai`='$sodienthoai' WHERE id=".$id;
        else
        $sql ="UPDATE `nguoi_dung` SET `ten_nguoi_dung`='$tenkh',`ten_dang_nhap`='$tendn',`mat_khau`='$pass',`email`='$mail',`ngay_sinh`='$ngaysinh',`dia_chi`='$diachi',`so_dien_thoai`='$sodienthoai' WHERE `id`=".$id;
    
        // Execute the SQL query here (not included in your provided code)
        pdo_execute($sql);
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    
}

function delete_kh($id){
    $sql="delete from nguoi_dung where id=".$id;
    pdo_execute($sql);
}



function checkuser($ten_dang_nhap,$mat_khau){
    $sql = "select * from nguoi_dung where ten_dang_nhap='".$ten_dang_nhap."' AND mat_khau='".$mat_khau."'";
    $sp =pdo_query_one($sql);
    return  $sp;
}

?>