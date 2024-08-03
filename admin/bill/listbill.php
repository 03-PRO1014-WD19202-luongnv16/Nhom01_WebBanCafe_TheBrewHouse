    <!-- Start main wrapper -->
    <main class="main-wrapper">
      <div class="main-content">
        <!-- start breadcrumb -->
        <div class="page-breadcrumb">
          <div class="breadcrumb-title">ĐƠN HÀNG</div>
        </div>
        <!-- end breadcrumb -->
        <div class="filter">
          <div class="col-auto">
          </div>
          <div class="col-auto">
          </div>
          <div class="col-auto">
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <div class="product-table">
              <form action="" method="post">
              <div class="table-responsive">
                <table class="table">
                  <thead class="table-light">
                    <tr>
                      <th>Mã đơn hàng</th>
                      <TH>Mã người nhận</TH>
                      <th>Tên khách hàng</th>
                      <th>Email</th>
                      <th>Địa chỉ</th>
                      <th>Số điện thoại</th>
                      <th>Ngày đặt hàng</th>
                      <th>Giá</th>
                      <th>Tình trạng đơn</th>
                      <th>Phương thức thanh toán</th>
                      <th>Thao tác</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <?php
                            foreach($listbill as $bill){
                              extract($bill);
                              $ttdh = get_ttdh($bill["bill_status"]); 
                              $bill_payment_status = get_pttt($bill["bill_payment_status"]); 
                              $suabill = "index.php?act=suabill&bill_id=".$bill_id;
                              $ngaydathang = date('h:i:sa d/m/Y', strtotime($bill['ngaydathang'])); 
                              echo '<tr>
                                      <td>TBRH_VN'.$bill['bill_id'].'</td>
                                      <td>TBRH_VN'.$bill['user_id'].'TBRH_VN</td>
                                      <td>'.$bill['full_name'].'</td>
                                      <td>'.$bill['email'].'</td>
                                      <td>'.$bill['phone_number'].'</td>
                                      <td>'.$bill['address'].'</td>
                                      <td>'.$ngaydathang.'</td>
                                      <td>'.$bill['total_price'].'.000đ</td>
                                      <td>'.$ttdh.'</td> <!-- Hiển thị tình trạng đơn hàng dưới dạng chữ -->
                                      <td>'.$bill_payment_status.'</td>
                                      <td>
                                        <a href="'.$suabill.'" class="sua">
                                        <i class="bi bi-pencil-square"></i>
                                        </a>
                                      </td>
                                    </tr>';
                          }
                          
                            
                        ?>
                    </tr>
                  </tbody>
                </table>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- End main wrapper -->
