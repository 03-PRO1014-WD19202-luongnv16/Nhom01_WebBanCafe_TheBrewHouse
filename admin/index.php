<?php
  include './component/header.php';
  include './component/sidebar.php';
  include '../model/sanpham.php';
  include '../model/danhmuc.php';
  include '../model/pdo.php';
  include '../model/cart.php';

  // controller
  if(isset($_GET['act'])){
    $act = $_GET['act'];
    switch ($act) {
      // danh mục
      case 'adddm':
        if(isset($_POST['luulai'])&&$_POST['luulai']){
          $name = $_POST['name'];
          insert_danhmuc($name);
          $thongbao= "Thêm mới thành công!";
        }
        include './danhmuc/add.php';
        break;
      case 'listdm':
        $listdanhmuc = loadAll_danhmuc();
        include './danhmuc/list.php';
        break;
      case 'xoadm':
        if(isset($_GET['id'])&&$_GET['id']>0){
          delete_danhmuc($_GET['id']);
        }
        $listdanhmuc = loadAll_danhmuc();
        include './danhmuc/list.php';
        break;  
      case 'suadm':
        if(isset($_GET['id'])&&$_GET['id']>0){
          $dm = loadOne_danhmuc($_GET['id']);
        }
        include './danhmuc/update.php';
        break;
      case 'updatedm':
        if(isset($_POST['luulai'])&&$_POST['luulai']){
          $id = $_POST['id'];
          $name = $_POST['name'];
          update_danhmuc($id,$name);
          $thongbao= "Cập nhật thành công!";
        }
        $listdanhmuc = loadAll_danhmuc();
        include './danhmuc/list.php';
        break;
      //Sản phẩm
      case 'addsp':
        if(isset($_POST['luulai'])&&$_POST['luulai']){
          $name =$_POST['name'];
          $mota =$_POST['mota'];
          $target_dir = '../upload/';
          $img=$_FILES['img']['name'];
          $target_file = $target_dir . basename( $_FILES["img"]["name"]);
          if(move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)){
            // echo 'upload thành công';
          }else{
            // echo 'Không upload được';
          }
          $import_price =$_POST['import_price'];
          $sale_price =$_POST['sale_price'];
          $listed_price =$_POST['listed_price'];
          $stock =$_POST['stock'];
          $iddm =$_POST['iddm'];
          insert_sanpham($name,$mota,$img,$import_price,$sale_price,$listed_price,$stock,$iddm);
          $thongbao= "Thêm mới thành công!";
        }
        $listdanhmuc = loadAll_danhmuc();
        include './sanpham/add.php';
        break;
      case 'listsp':
        if(isset($_POST['listOK'])&&($_POST['listOK'])){
          $kyw=$_POST['search'];
          $iddm=$_POST['iddm'];
        }else{
          $kyw='';
          $iddm=0;
        }
        $listdanhmuc=loadAll_danhmuc();
        $listsanpham=loadall_sanpham_dm_search($kyw,$iddm);
        include './sanpham/list.php';
        break;
      case 'suasp':
        if(isset($_GET['id'])&&$_GET['id']>0){
          $sp = loadOne_sanpham($_GET['id']);
        }
        $listdanhmuc = loadAll_danhmuc();
        include './sanpham/update.php';
        break;
      case 'xoasp':
        if(isset($_GET['id'])&&$_GET['id']>0){
          delete_sanpham($_GET['id']);
        }
        $listdanhmuc = loadAll_danhmuc();
        $listsanpham = loadAll_sanpham();
        include './sanpham/list.php';
        break;
      case 'updatesp':
        if(isset($_POST['luulai'])&&$_POST['luulai']){
          $id =$_POST['id'];
          $name =$_POST['name'];
          $mota =$_POST['mota'];
          $target_dir = '../upload/';
          $img=$_FILES['img']['name'];
          $target_file = $target_dir . basename( $_FILES["img"]["name"]);
          if(move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)){
            // echo 'upload thành công';
          }else{
            // echo 'Không upload được';
          }
          $import_price =$_POST['import_price'];
          $sale_price =$_POST['sale_price'];
          $listed_price =$_POST['listed_price'];
          $stock =$_POST['stock'];
          $iddm =$_POST['iddm'];
          update_sanpham($id,$name,$mota,$img,$import_price,$sale_price,$listed_price,$stock,$iddm);
          $thongbao= "Cập nhật thành công!";
        }
        $listdanhmuc = loadAll_danhmuc();
        $listsanpham = loadAll_sanpham();
        include './sanpham/list.php';
        break;
      //Giỏ hàng  
      case 'listbill':
        $listbill=loadall_bill(0);
        include './bill/listbill.php';
        break;
      // index.php
      case 'suabill':
        if(isset($_GET['bill_id'])&&$_GET['bill_id']>0){
          $listcart = loadall_cart($_GET['bill_id']);
          $sql="select * from bill where bill_id=".$_GET['bill_id'];
          $bill=pdo_query_one($sql); 
        }
        include './bill/updatebill.php';
        break;
        case 'updatebill':
          if (isset($_POST['capnhat']) && $_POST['capnhat']) {
              $ttdh = $_POST['ttdh'];
              $bill_id = $_POST['bill_id'];
              $sql = "UPDATE bill SET bill_status='" . $ttdh . "' WHERE bill_id=" . $bill_id;
              pdo_execute($sql);
              $listbill = loadall_bill(0);
              include './bill/listbill.php';
              exit(); 
            }
            $sql = "SELECT * FROM bill ORDER BY bill_id DESC";
            $listbill = loadall_bill(0);
          include './bill/listbill.php';
          break;
      case 'thoat':
        session_unset();
        header('Location: index.php');
        break;
      default:
        include './component/home.php';
        break;
    }
  }else{
    include './component/home.php';
  }

  include './component/footer.php';
?>