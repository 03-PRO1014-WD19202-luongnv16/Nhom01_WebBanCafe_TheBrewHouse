<?php

  include './component/header.php';
  include './component/sidebar.php';
  // controller
  if(isset($_GET['act'])){
    $act = $_GET['act'];
    switch ($act) {
      // danh mục
      case 'adddm':
        include './danhmuc/add.php';
        break;
      case 'listdm':
        include './danhmuc/list.php';
        break;
      case 'updatedm':
        include './danhmuc/update.php';
        break;
      //Sản phẩm
      case 'addsp':
        include './sanpham/add.php';
        break;
      case 'listsp':
        include './sanpham/list.php';
        break;
      case 'updatesp':
        include './sanpham/update.php';
        break;
      //Giỏ hàng  
      default:
        include './component/home.php';
        break;
    }
  }else{
    include './component/home.php';
  }

  include './component/footer.php';
?>