<?php

session_start();


include "Models/connect.php";
include "Models/sanpham.php";
include "Models/danhmuc.php";
include "Models/khachhang.php";
include "Models/cart.php";


if (!isset($_SESSION['giohang'])) $_SESSION['giohang'] = [];;
$spnew = loadall_sanpham_home();
$dmnew = loadall_danhmuc_home();
include "header.php";

if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {

        case 'ctsanpham':
            if ($_GET['id'] && $_GET['id'] > 0) {
                $id = $_GET['id'];
                $onesp = loadone_sanpham($id);
                include "view/chitiet.php";
            } else {
                include "home.php";
            }

            break;

        case 'gioithieu':

            include "view/gioithieu.php";
            break;

        case 'sanphamdm':
            if (isset($_GET['ma_loai']) && ($_GET['ma_loai'] > 0)) {
                $ma_loai = $_GET['ma_loai'];
                $dssp = loadall_sanpham_ok("", $ma_loai);
                include "view/sanphamdm.php";
            } else {
                include "home.php";
            }
            break;

        case 'sanpham':
            $dssp = loadall_sanpham();
            if (isset($_GET['page'])) {
                $page = $_GET['page'];
            } else {
                $page = 0;
            }
            $list_page = total_page();
            $dssp = loadpaginate_sanpham($page);
            include "view/sanpham.php";
            break;


        case 'giohang':
            if (isset($_POST['giohang'])) {
                $id = $_POST['id'];
                $ten_san_pham = $_POST['ten_san_pham'];
                $img = $_POST['img'];
                $gia = $_POST['gia'];
                $soluong = 1;
                // $color = $_POST['color'];
                $size = $_POST['size'];
                $thanhtien = $gia * $soluong; // Add a semicolon here
                $spadd = [$id, $ten_san_pham, $img, $gia, $soluong, $thanhtien, $size];

                array_push($_SESSION['giohang'], $spadd);
            }
            include "view/giohang.php";
            break;

        case 'delcard':
            if (isset($_GET['idcard'])) {
                array_splice($_SESSION['giohang'], $_GET['idcard'], 1);
            } else {
                $_SESSION['giohang'] = [];
            }
            include "view/giohang.php";
            break;

        case 'thanhtoan':
            include "view/thanhtoan.php";
            break;
        case 'dathang':
            if (isset($_POST['dat_hang'])) {
                $ten_nguoi_dung = $_POST['ten_nguoi_dung'];
                $email = $_POST['email'];
                $so_dien_thoai = $_POST['so_dien_thoai'];
                $tong_gt_hd = $_POST['tong_gt_hd'];
                $trang_thai = $_POST['trang_thai'];
                $dia_chi = $_POST['dia_chi'];
                $pt_tt = $_POST['pt_tt'];
                $thong_tin_km = '50%';
                $ngay_thd = date('Y/m/d');


                $id_bill = insert_bill($ten_nguoi_dung, $email, $so_dien_thoai, $tong_gt_hd, $trang_thai, $dia_chi, $pt_tt, $thong_tin_km, $ngay_thd);

                foreach ($_SESSION['giohang'] as $cart) {
                    // insert_cart($name_product, $image, $price, $size, $color, $quantity, $id_bill, $id_user);
                    insert_cart($cart['1'],  $cart['3'], $cart['7'], $cart['6'], 1, $id_bill, $_SESSION['ten_dang_nhap']['id'],);
                }
            }

            include "view/bill.php";
            break;

        case 'lienhe':
            include "view/lienhe.php";
            break;
        case 'dangky':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $ten_dang_nhap = $_POST['ten_dang_nhap'];
                $email = $_POST['email'];
                $mat_khau = $_POST['mat_khau'];
                insert_taikhoan($ten_dang_nhap, $email, $mat_khau);
                $thong_bao = "Đã đăng ký thành công ! Vui lòng đăng nhập";
            }
            include "login/dangky.php";
            break;

        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $ten_dang_nhap = $_POST['ten_dang_nhap'];
                $mat_khau = $_POST['mat_khau'];
                $checkuser = checkuser($ten_dang_nhap, $mat_khau);
                if (is_array($checkuser)) {
                    $_SESSION['ten_dang_nhap'] = $checkuser;

                    // header('location:index.php');
                    echo '<script>
            window.location.href = "index.php";
            </script>';
                } else {
                    $thong_bao = "Tài khoản không tồn tại.Vui lòng kiểm tra!";
                }
            }
            include "login/dangnhap.php";
            break;

        case 'updatetk':
            if (isset($_POST['capnhat'])) {
                $id = $_POST['id'];
                $tenkh = $_POST['tenkh'];
                $tendn = $_POST['tendn'];
                $pass = $_POST['pass'];
                $mail = $_POST['mail'];
                $ngaysinh = $_POST['ngaysinh'];
                $diachi = $_POST['diachi'];
                $sodienthoai = $_POST['sodienthoai'];
                $image = $_FILES['image']['name'];
                $target_dir = "upload/";
                $target_file = $target_dir . basename($_FILES["image"]["name"]);

                if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                    // File upload success
                } else {
                    // File upload error
                }
                suakh($id, $tenkh, $tendn, $pass, $mail, $ngaysinh, $diachi, $sodienthoai, $image);
                $checkuser = checkuser($tendn, $pass);
                if (is_array($checkuser)) {
                    $_SESSION['ten_dang_nhap'] = $checkuser;
                }
            }
            include "login/chitiettk.php";
            break;



        case 'xemtk':
            include "login/xemtk.php";
            break;

        case 'quenmk':
            if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {
                $email = $_POST['email'];
                $checkemail = checkemail($email);
            }
            include "login/quenmk.php";
            break;
        case 'doimk':
            include "login/doimk.php";
            break;

        case 'thoat':
            session_unset();
            echo '<script>
        window.location.href = "index.php";
        </script>';
            break;
        default:
            # code...
            break;
    }
} else {

    include "home.php";
}

include "footer.php";