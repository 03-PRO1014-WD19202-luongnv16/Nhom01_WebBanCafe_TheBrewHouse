<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Brew House</title>
    <link rel="stylesheet" href="stylee.css">
</head>
<body>
    <div class="box_container">
        <div class="header_container">
            <div class="header_menu1">
                <ul>
                    <li><a href="index.php"><h4>Trang Chủ</h4></a></li>
                    <li class="dropdown" onmouseover="showProductDropdown()" onmouseout="hideProductDropdown()">
                        <li class="dropdown" onmouseover="showProductDropdown()" onmouseout="hideProductDropdown()">
                            <a href="#"><h4>Sản Phẩm</h4></a>
                            <div class="dropdown-content" id="productDropdownContent">
                                 <?php 
                                     foreach ($listdanhmuc as $danhmuc) {
                                        echo '<a href="index.php?act=sanpham&iddm='.$danhmuc['id'].'">'.$danhmuc['name'].'</a>';
                                    }
                                    
                                 ?>
                          </div>
                        </li>

                    <li><a href="index.php?act=chinhanh"><h4>Chi Nhánh</h4></a></li>
                </ul>
            </div>
            <div class="header_logo">
                <a href="#"><img class="logo_header" src="img/logo slider.png"></a>
            </div>
            <div class="header_menu2">
                <ul>
                    
                    <li><a href="index.php?act=lienhe"><h4>Liên Hệ</h4></a></li>
                    <li><a href="index.php?act=gioithieu"><h4>Giới Thiệu</h4></a></li>
                    <li class="dropdown" onmouseover="showDropdown()" onmouseout="hideDropdown()">
                        <?php if(isset($_SESSION['user'])): ?>
                            <li><a href="#"><h4>Giỏ Hàng</h4></a></li>
                            <li><a href="index.php?act=edit_taikhoan"><h4>Cập nhật tài khoản</h4></a></li>
                           <li><a href="index.php?act=thoat"><h4>Thoát</h4></a></li>
                           <p style="color:red";>XIN CHÀO!</p>
                            </div>
                        <?php else: ?>
                            <a href="index.php?act=dangnhap"><h4>Đăng Nhập</h4></a>
                            <div class="dropdown-content" id="dropdownContent">
                                <a href="index.php?act=dangky">Đăng Ký</a>
                            </div>
                        <?php endif; ?>
                    </li>
                </ul>
            </div>
        </div>
