<?php
session_start();
include "view/header.php";
include "model/pdo.php";
include "model/taikhoan.php";

if(isset($_GET['act']) && $_GET['act'] !== "") {
    $act = $_GET['act'];
    switch ($act) {
        case 'chinhanh':
            include "view/chinhanh.php";
            break;

        case 'lienhe':
            include "view/lienhe.php";
            break;

        case 'gioithieu':
            include "view/gioithieu.php";
            break;

        case 'dangky':
            if(isset($_POST['dangky'])) { 
                $email = $_POST['email'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];                   
                insert_taikhoan($email, $user, $pass); 
            }
            include "view/taikhoan/dangky.php";
            break;
        
        case 'dangnhap':
            if(isset($_POST['dangnhap']) && $_POST['dangnhap']) { 
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $checkuser = checkuser($user, $pass);
                if(is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;
                    header('Location: index.php');
                    exit;
                } else {
                    $thongbao = "Tài khoản không tồn tại. Vui lòng kiểm tra hoặc đăng ký!";
                }
            }
            include "view/taikhoan/dangnhap.php";
            break;
            
        case 'thoat':
                session_unset();
                header('Location: index.php');
                break;
        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}
include "view/footer.php";

?>
