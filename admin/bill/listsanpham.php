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
          <div class="table-responsive">
            <table class="table">
              <thead class="table-light">
                <tr>
                  <th>id đơn hàng</th>
                  <th>ID Sản phẩm</th>
                  <th>Tên sản phẩm</th>
                  <th>Ảnh sản phẩm</th>
                  <th>Giá</th>
                  <th>Số lượng</th>
                  <th>Thành tiền</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php
                $tong = 0; 

                if (is_array($listcart)) {
                    foreach ($listcart as $cart) {
                        if (is_array($cart)) {
                            extract($cart);
                            $hinhpath = "../upload/" . $img;
                            $imgTag = is_file($hinhpath) ? "<img src='" . $hinhpath . "' height='100' width='100'>" : "no photo";
                            
                            $thanhtien = $price * $soluong; 
                            $tong += $thanhtien; 

                            echo '<tr>
                                    <td>' . $cart['cart_id'] . '</td>
                                    <td>' . $cart['product_id'] . '</td>
                                    <td>' . $cart['name'] . '</td>
                                    <td>' . $imgTag . '</td>
                                    <td>' . $cart['price'] . '.000đ</td>
                                    <td>' . $cart['soluong'] . '</td>
                                    <td>' . $thanhtien . '.000đ</td>
                                    <td></td>
                                  </tr>';
                        } else {
                            echo '<tr><td colspan="8">Dữ liệu không hợp lệ.</td></tr>';
                        }
                    }
                } else {
                    echo '<tr><td colspan="8">Không có dữ liệu.</td></tr>';
                }
                ?>
              </tbody>
              <tfoot>
                <tr>
                    <td colspan="6">Tổng</td>
                    <td><?php echo number_format($tong, 0, '', '.') . '.000đ'; ?></td>
                </tr>
              </tfoot>                    
            </table>
          </div>
        </div>
        <div class="mb-4">
          CẬP NHẬT TÌNH TRẠNG ĐƠN HÀNG
          <select name="" id="" class="tinh_trang">
            <option value="" selected>__Chọn__</option>
            <option value="">Đơn hàng mới</option>
            <option value="">Đang xử lý</option>
            <option value="">Đang giao hàng</option>
            <option value="">Đã giao hàng</option>
          </select>
          <button name="capnhatbill" class="success">Cập nhật</button>
          <a href="index.php?act=listbill"><button class="danger">Trở về</button></a>
        </div>
      </div>
    </div>
  </div>
</main>
<!-- End main wrapper -->
