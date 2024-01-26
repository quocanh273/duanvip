<?php 

function ds_khachhang(){
    $sql="select*from nguoi_dung order by id desc";
    $listkhachhang=pdo_query($sql);
    return $listkhachhang; 
}
function ds_khachhang_count(){
    $sql = "SELECT COUNT(*) as kh_count FROM nguoi_dung";
    $result = pdo_query($sql);

    // Lấy giá trị số lượng từ kết quả truy vấn
    $kh_count = $result[0]['kh_count'];

    return $kh_count;
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

function sendMail($email){
    $sql = "select * from nguoi_dung where email='".$email."'";
    $taikhoan=pdo_query_one($sql);
   if ($taikhoan !== false) {
    SendMailPass($email,$taikhoan['ten_dang_nhap'],$taikhoan['mat_khau']);
    return "Gui thanh cong";
}else{
    return "Email khong ton tai";
}
}
function sendMailPass($email,$username,$mat_khau){
    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';   

    $mail = new PHPMailer\PHPMailer\PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug =  PHPMailer\PHPMailer\SMTP::DEBUG_OFF;
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'sandbox.smtp.mailtrap.io';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'b6131530167e97';                     //SMTP username
    $mail->Password   = '9d59a1746fbae3';                               //SMTP password
    $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('PHP@example.com', 'PHP2');
    $mail->addAddress($email, $username);   //Add a recipient
    
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Quên Mật Khẩu';
    $mail->Body    = 'Mật khẩu của bạn là: http://localhost/duanvip/index.php?act=updatetk'.$mat_khau;
    

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}
?>