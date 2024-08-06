<?php
// Hàm lấy các tùy chọn trạng thái dựa trên trạng thái hiện tại
function getStatusOptions($current_status) {
    $options = [
        '0' => 'Chọn',
        '1' => 'Chờ xác nhận',
        '2' => 'Đã xác nhận',
        '3' => 'Đang giao hàng',
        '4' => 'Đã hủy',
        '5' => 'Giao hàng thành công',
        '6' => 'Giao hàng thất bại'
    ];

    $html = '';
    foreach ($options as $key => $value) {
        // Xác định xem tùy chọn có nên được chọn không
        $selected = ($key == $current_status) ? 'selected' : '';

        // Bỏ qua các tùy chọn không hợp lệ dựa trên trạng thái hiện tại
        if (($current_status == '0' && !in_array($key, ['1', '4'])) || 
            ($current_status == '1' && !in_array($key, ['2', '4'])) || 
            ($current_status == '2' && !in_array($key, ['3', '4'])) || 
            ($current_status == '3' && !in_array($key, ['5', '6'])) ||
            ($current_status == '4')) {
            continue;
        }

        $html .= "<option value=\"$key\" $selected>$value</option>";
    }

    return $html;
}

// Lấy thông tin đơn hàng
if (isset($_GET['bill_id']) && $_GET['bill_id'] > 0) {
    $bill_id = $_GET['bill_id'];
    $listcart = loadall_cart($bill_id);
    $bill = loadOne_bill($bill_id);
    $ttdh = $bill['bill_status'];  // Trạng thái hiện tại
}
?>

<!-- Bắt đầu phần chính -->
<main class="main-wrapper">
  <div class="main-content">
    <div class="page-breadcrumb">
      <div class="breadcrumb-title" style="text-align: center">CHI TIẾT ĐƠN HÀNG</div>
    </div>
    <div class="card">
      <div class="card-body">
        <div class="product-table">
          <div class="table-title">THÔNG TIN ĐƠN HÀNG</div>
          <div class="table-content">
            <div class="content1">
              <input type="text" name="" id="" placeholder="Mã đặt hàng" value="TBRH_VN<?=$bill_id?>" readonly>
              
              <!-- Chỉ hiển thị form cập nhật nếu trạng thái không phải là 'Giao hàng thành công' hoặc 'Giao hàng thất bại' -->
              <?php if ($ttdh != '5' && $ttdh != '6'): ?>
                <form action="index.php?act=updatebill" method="post">
                  <select name="ttdh" id="" class="tinh_trang">
                    <?= getStatusOptions($ttdh); ?>
                  </select>
                  <input type="hidden" name="bill_id" value="<?=$bill_id?>">
                  <br><br>
                  <input type="submit" name="capnhat" value="Cập nhật" class="danger">
                </form>
              <?php endif; ?>
              
            </div>
            <div class="content2">
              <input type="text" name="" id="" placeholder="Tên khách hàng" value="<?=$bill['full_name']?>" readonly>
              <input type="text" name="" id="" placeholder="Số điện thoại" value="<?=$bill['phone_number']?>" readonly>
              <input type="text" name="" id="" placeholder="Địa chỉ" value="<?=$bill['address']?>" readonly>
            </div>     
          </div>
        </div>
        <div class="product-table">
          <div class="table-title">THÔNG TIN SẢN PHẨM</div>
          <table class="table">
            <thead class="table-light">
              <tr>
                <th>STT</th>
                <th>Ảnh sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $tong = 0; 
              if (is_array($listcart)) {
                  foreach ($listcart as $key => $cart) {
                      if (is_array($cart)) {
                          extract($cart);
                          $hinhpath = "../upload/" . $img;
                          $imgTag = is_file($hinhpath) ? "<img src='" . $hinhpath . "' height='100' width='100'>" : "no photo";
                          $thanhtien = $price * $soluong; 
                          $tong += $thanhtien; 

                          echo '<tr>
                                  <td>' . ($key + 1) . '</td>
                                  <td>' . $imgTag . '</td>
                                  <td>' . $cart['name'] . '</td>
                                  <td>' . number_format($cart['price'], 0, '', '.') . '.000đ</td>
                                  <td>' . $cart['soluong'] . '</td>
                                  <td>' . number_format($thanhtien, 0, '', '.') . '.000đ</td>
                                </tr>';
                      } else {
                          echo '<tr><td colspan="6">Dữ liệu không hợp lệ.</td></tr>';
                      }
                  }
              } else {
                  echo '<tr><td colspan="6">Không có dữ liệu.</td></tr>';
              }
              ?>
            </tbody>
            <tfoot>
              <tr>
                  <td colspan="5">Tổng</td>
                  <td><?php echo number_format($tong, 0, '', '.') . '.000đ'; ?></td>
              </tr>
            </tfoot>                    
          </table>
        </div>
        <div class="mb-4">
          <a href="index.php?act=listbill"><button class="danger">Trở về</button></a>
        </div>
      </div>
    </div>
  </div>
</main>
<!-- Kết thúc phần chính -->
