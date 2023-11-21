<?php 
session_start();
include "../../Models/connect.php";
include "../../Models/binhluan.php";

$idpro =$_REQUEST['idpro'];

$dsbl=binhluan_select_all($idpro);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <!-- Favicon -->
   <link href="img/favicon.ico" rel="icon">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">  
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">                        

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.png">
    <style>
        .binhluan table{
            width: 90%;
            margin-left: 5%;
        }
        .binhluan table td:nth-child(1){
            width: 50%;
        }
        .binhluan table td:nth-child(2){
            width: 20%;
        }
        .binhluan table td:nth-child(3){
            width: 30%;
        }
    </style>
</head>
<body>
            <div class="col">
               
                <div class="bg-light p-30">
                    <div class="nav nav-tabs mb-4">
                        <h3>Bình Luận</h3>
                    </div>
                    <div class="tab-content">
                        <div id="tab-pane-3">
                            <div class="row">
                                <div class="col-md-6">
                                <div class="boxcontent2 binhluan">
                                <table>
                                    <?php
               
                                    foreach ($dsbl as $bl) {
                                        extract($bl);
                                        echo '<tr><td>'.$noi_dung.'</td>';
                                        echo '<td>'.$id_user.'</td>';
                                        echo '<td>'.$ngay_bluan.'</td> </tr>';
                                    }
                                    ?>
                                       </table>
                                     </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                <?php 
                        if(isset($_SESSION['ten_dang_nhap'])){
                            extract($_SESSION['ten_dang_nhap']);
                        ?>
                                    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                                        <input type="hidden" name="idpro" value="<?= $idpro?>">
                                        
                                        <div class="form-group">
                                          
                                            <input type="text"  name="noidung"class="form-control" >
                                        </div>
                                        <div class="form-group mb-0">
                                            <input type="submit" name="guibinhluan" value="Bình Luận" class="btn btn-primary px-3">
                                        </div>
                                    </form>
                                    <?php 
                                }else{
                
                                    ?>
                                    <br>
                                    <div class="form-group mb-0">
                                           <a href="index.php?act=dangnhap"><input type="button"  value="Bạn cần đăng nhập để bình luận" class="btn btn-primary px-3"></a> 
                                        </div>
                                    <?php }?>
                                </div>
                                <?php
                                if (isset($_POST['guibinhluan'])&& ($_POST['guibinhluan'])) {
                                    $noi_dung=$_POST['noidung'];
                                    $idpro=$_POST['idpro'];
                                    $id_user = $_SESSION['ten_dang_nhap']['id'];
                                    $ngay_bluan= date(' d/m/Y');
                                    
                                    binhluan_insert($noi_dung,$id_user,$idpro,$ngay_bluan);
                                    header("location: ". $_SERVER['HTTP_REFERER']);
                                }
                                
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            </body>
</html>
