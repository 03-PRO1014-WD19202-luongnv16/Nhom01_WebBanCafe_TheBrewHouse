<?php
session_start();
include "model/pdo.php";
include "model/sanpham.php";
include "model/danhmuc.php";
include "model/taikhoan.php";
include "global.php";
$listdanhmuc = loadAll_danhmuc();
$spnew = loadall_sanpham_home();
$dstop10 = loadall_sanpham_top10();
include "./view/header.php";


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

        case 'sanphamct':
            if(isset($_GET['idsp'])&&($_GET['idsp']>0)){
                $id = $_GET['idsp'];
                $onesp = loadone_sanpham($id);
                include "view/sanphamct.php";
            }else{
                include "view/home.php";
            }
            break;

            case 'sanpham':
                if(isset($_GET['iddm']) && ($_GET['iddm'] > 0)){
                    $iddm = $_GET['iddm'];
                    $dssp = loadall_sanpham_dm($iddm);
                    include "view/sanpham.php";
                } else {
                    include "view/home.php";
                }
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
