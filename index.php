<?php
session_start();
include "model/pdo.php";
include "model/sanpham.php";
include "model/danhmuc.php";
include "model/taikhoan.php";
include "global.php";
$listdanhmuc = loadAll_danhmuc();
include "./view/header.php";
$spnew = loadAll_sanpham_new();
$spyeuthich = loadAll_sanpham_yeuthich();

if(!isset($_SESSION['myCart'])) $_SESSION['myCart']=[];

if(isset($_GET['act']) && $_GET['act'] !== "") {
    $act = $_GET['act'];
    switch ($act) {
        case 'quenmk':
            if(isset($_POST['guiemail'])&&($_POST['guiemail'])){     
                $email = $_POST['email'];
                $checkemail=checkemail($email);
                if(is_array($checkemail)){
                $thongbao="Mật khẩu của bạn là:".$checkemail['pass'];
                }else{
                $thongbao="Email này không tồn tại";
                }          
                }
                include "view/taikhoan/quenmk.php";
             break;
        case 'edit_taikhoan':
            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){ 
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                $id = $_POST['id'];
                update_taikhoan($id,$user,$pass,$email,$address,$tel);
                $_SESSION['user']=checkuser($user,$pass);
                header('Location: index.php?act=edit_taikhoan');             
                }
                include "view/taikhoan/edit_taikhoan.php";
            break;
        case 'viewCart':
            include "view/viewcart.php";
            break;
        case 'delCart':
            if(isset($_GET['idcart'])){
                array_splice($_SESSION['myCart'], $_GET['idcart'], 1);
            }else{
                $_SESSION['myCart'] = [];
            }
            // include "view/viewcart.php";
            header('Location: index.php?act=viewCart');
            break;
        case 'addToCart':
            if (isset($_POST['addToCart']) && $_POST['addToCart']) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $img = $_POST['img'];
                $sale_price = $_POST['sale_price'];
                $listed_price = $_POST['listed_price'];
                $quantity = 1;
                $total = round($sale_price * $quantity);
            
                $itemExists = false;
                
                // Kiểm tra xem sản phẩm đã tồn tại trong giỏ hàng hay chưa
                foreach ($_SESSION['myCart'] as &$item) {
                    if ($item[0] == $id) {  // $item[0] là id sản phẩm
                        $item[4] += $quantity;  // Tăng số lượng
                        $item[5] = $item[3] * $item[4];  // Cập nhật tổng tiền
                        $itemExists = true;
                        break;
                    }
                }
            
                // Nếu sản phẩm chưa tồn tại trong giỏ hàng, thêm sản phẩm mới
                if (!$itemExists) {
                    $spadd = [$id, $name, $img, $sale_price, $quantity, $total];
                    array_push($_SESSION['myCart'], $spadd);
                }
            }
            
            include "view/viewcart.php";
            break;
        case 'sanphamall':
            $dssp = loadAll_sanpham();
            include "view/sanpham.php";
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
