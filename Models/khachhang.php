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


function insert_taikhoan($ten_dang_nhap,$email,$mat_khau){
    $sql="INSERT INTO nguoi_dung(ten_dang_nhap,email,mat_khau) 
    values
     (
    '$ten_dang_nhap',
     '$email',
     '$mat_khau')";
    pdo_execute($sql);
}

function checkemail($email){
    $sql = "select * from nguoi_dung where email='".$email."'";
    $taikhoan=pdo_query_one($sql);
   if ($taikhoan != false) {
    SendMailPass($email,$taikhoan['ten_dang_nhap'],$taikhoan['mat_khau']);
    return "Gửi email thành công";
   }else{
        return "Email bạn nhập không có trong hệ thống";
   }
}
function SendMailPass($email,$username,$mat_khau){
    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';
    $mail = new PHPMailer\PHPMailer\PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug =  PHPMailer\PHPMailer\SMTP::DEBUG_OFF ;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'sandbox.smtp.mailtrap.io';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'c04d1e77f73263';                     //SMTP username
            $mail->Password   = '49a9b7124808e7';                               //SMTP password
            $mail->SMTPSecure =  PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
            $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('duan1@example.com', 'duan1');
            $mail->addAddress($email, $username);     //Add a recipient
               

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Nguoi dung quen mat khau';
            $mail->Body    = 'Mat khau cua ban la :'.$mat_khau;
      

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
}

?>