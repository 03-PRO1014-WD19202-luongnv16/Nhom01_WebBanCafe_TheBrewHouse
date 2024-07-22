<?php
  function viewCart($del){
    global $img_path;
    $tong = 0;
      $i = 0;
      if($del==1){
        $xoasp_th='<th>Thao tác</th>';
        $xoasp_td2='<td></td>';
      }else{
        $xoasp_th='';
        $xoasp_td2='';
      }
      echo '
              <tr>
                    <th>Hình</th>
                    <th>Sản phẩm</th>
                    <th>Đơn giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                    '.$xoasp_th.'
                  </tr>
              ';
      foreach ($_SESSION['myCart'] as $key => $cart) {
          $anh = $img_path . $cart[2];
          $total = $cart[3] * $cart[4];
          $tong += $total;
          if($del==1){
            $xoasp_td = '<td><a href="index.php?act=delCart&idcart=' . $key . '">
                      <i class="bi bi-trash-fill"></i>
                    </a></td>';
            $giamSoLuong = '<a href="index.php?act=updateCart&type=decrease&idcart='.$key.'">
                    <i class="bi bi-dash"></i>
                </a>';   
            $tangSoLuong = '<a href="index.php?act=updateCart&type=increase&idcart=' . $key . '">
                <i class="bi bi-plus"></i>
            </a>';         
          }else{
            $xoasp_td = '';
            $giamSoLuong = '';
            $tangSoLuong = '';
          }
          echo '
                
              <tr>
                <td><img src="' . $anh . '" width="100px" alt=""></td>
                <td>' . $cart[1] . '</td>
                <td>' . number_format($cart[3], 0, '', '.') . '.000đ</td>
                <td>
                  '.$giamSoLuong.'
                    <input type="number" name="soluong" id="" value="' . $cart[4] . '" readonly>
                  ' . $tangSoLuong . '
                </td>
                <td>' . number_format($total, 0, '', '.') . '.000đ</td>
                ' . $xoasp_td . '
              </tr>';
      }

      echo '
          <tr>
            <td colspan="4">Tổng đơn hàng</td>
            <td>' . number_format($tong, 0, '', '.') . '.000đ</td>
            '.$xoasp_td2.'
          </tr>';
}

function tongdonhang(){
  $tong = 0;
    foreach ($_SESSION['myCart'] as $key => $cart) {
        $total = $cart[3] * $cart[4];
        $tong += $total;
    }
    return $tong;
}
function insert_bill($user_id,$user, $email, $address, $tel, $pttt, $ngaydathang, $tongdonhang) {
  // Tạo câu lệnh SQL
  $sql = " INSERT INTO bill(user_id,full_name, email, phone_number, address, ngaydathang, bill_payment_status, total_price) VALUES('$user_id','$user', '$email', '$address', '$tel', '$pttt', '$ngaydathang', '$tongdonhang' ) ";
  // Thực thi câu lệnh SQL trả id mới khi vừa mới insert
  return pdo_execute_return_lastInsertID($sql);
}
function insert_cart($user_id, $product_id, $img, $name, $price, $soluong, $thanhtien,$idbill) {
  // Tạo câu lệnh SQL
  $sql = "INSERT INTO cart (user_id, product_id, img, name, price, soluong, thanhtien,idbill)
          VALUES ('$user_id', '$product_id', '$img', '$name', '$price', '$soluong', '$thanhtien','$idbill')";
  // Thực thi câu lệnh SQL
  return pdo_execute($sql);
}
function loadOne_bill($bill_id) {
  $sql = "SELECT * FROM bill WHERE bill_id=".$bill_id;
  $bill = pdo_query_one($sql);
  return $bill;
}
function loadOne_cart($bill_id){
  $sql="SELECT * FROM cart WHERE idbill = $bill_id ";
  $bill=pdo_query_one($sql);
  return $bill;
}
function loadall_bill($user_id){
  $sql="select * from bill where 1";
  if($user_id>0) $sql.=" AND user_id=".$user_id;
  $sql.=" order by bill_id desc";
  $listbill=pdo_query($sql);
  return $listbill;
}

function get_ttdh($n){
  switch ($n){
    case '1':
      $tt="Đơn hàng mới";
      break;
      case '2':
        $tt="Đang xử lý";
        break;
        case '3':
          $tt="Đang giao hàng";
          break;
          case '4':
            $tt="Hoàn tất";
            break;
            default:
            $tt="Đơn hàng mới";
            break;
  }
  return $tt;
}
?>