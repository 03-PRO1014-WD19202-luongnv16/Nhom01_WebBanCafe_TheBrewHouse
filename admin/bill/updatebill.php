<?php
  if(array($bill)){
    extract($bill);
  }
  ?>
<!-- Start main wrapper -->
<main class="main-wrapper">
  <div class="main-content">
    <!-- start breadcrumb -->
    <div class="page-breadcrumb">
      <div class="breadcrumb-title" style="text-align: center">CHI TIẾT ĐƠN HÀNG</div>
    </div>
    <!-- end breadcrumb -->
    <div class="card">
      <div class="card-body">
      <div class="product-table">
          <div class="table-title">THÔNG TIN ĐƠN HÀNG</div>
          <div class="table-content">
            <div class="content1">
            <input type="text" name="" id=""  placeholder="Mã đặt hàng" value="TBRH_VN<?=$bill_id?>">
            <form action="index.php?act=updatebill" method="post">
            <select name="ttdh" id="" class="tinh_trang">
                  <option>__Chọn__</option>
                  <option value="0" <?php if(isset($ttdh) && $ttdh == "0") echo 'selected'; ?>>Chờ xác nhận</option>
                  <option value="1" <?php if(isset($ttdh) && $ttdh == "1") echo 'selected'; ?>>Đã xác nhận</option>
                  <option value="2" <?php if(isset($ttdh) && $ttdh == "2") echo 'selected'; ?>>Đang giao hàng</option>
                  <option value="3" <?php if(isset($ttdh) && $ttdh == "3") echo 'selected'; ?>>Đã hủy</option>
                  <option value="4" <?php if(isset($ttdh) && $ttdh == "4") echo 'selected'; ?>>Giao hàng thành công</option>
                  <option value="5" <?php if(isset($ttdh) && $ttdh == "5") echo 'selected'; ?>>Giao hàng thất bại</option>
            </select>
            <input type="hidden" name="bill_id" value="<?php if(isset($bill_id) && $bill_id > 0) echo $bill_id; ?>">
            <br>
            <br>
            <input type="submit" name="capnhat" value="Cập nhật" class="danger">
             </form>
            </div>
            <div class="content2">
                  <input type="text" name="" id="" placeholder="Tên khách hàng" value="<?=$full_name?>">
                      <input type="text" name="" id="" placeholder="Số điện thoại" value="<?=$phone_number?>">
                      <input type="text" name="" id="" placeholder="Địa chỉ" value="<?=$address?>">
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
<!-- End main wrapper -->
