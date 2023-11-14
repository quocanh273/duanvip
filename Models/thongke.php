<?php
    function loadall_thongke(){
        $sql=" select loai.ma_loai as ma_loai, loai.ten_loai as ten_loai, count(sanpham.id) as countsp, min(sanpham.gia) as minprice, max(sanpham.gia) as maxprice, avg(sanpham.gia) as avgprice";
        $sql.=" from sanpham inner join loai on loai.ma_loai=sanpham.ma_loai";
        $sql.=" group by loai.ma_loai order by loai.ma_loai desc";
        $listtk=pdo_query($sql);
        return $listtk;
    }
?>