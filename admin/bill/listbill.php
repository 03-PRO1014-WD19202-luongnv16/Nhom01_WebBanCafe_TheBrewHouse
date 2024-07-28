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
                      <th></th>
                      <th>Mã đơn hàng</th>
                      <TH>Mã người nhận</TH>
                      <th>Tên khách hàng</th>
                      <th>Email</th>
                      <th>Địa chỉ</th>
                      <th>Số điện thoại</th>
                      <th>Ngày đặt hàng</th>
                      <th>Giá</th>
                      <th>Tình trạng đơn</th>
                      <th>Thao tác</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <?php
                            foreach($listbill as $bill){
                                $ttdh = get_ttdh($bill["bill_status"]);
                                echo '<tr>
                                        <td></td>
                                        <td>TBRH_VN'.$bill['bill_id'].'</td>
                                        <td>TBRH_VN'.$bill['user_id'].'TBRH_VN</td>
                                        <td>'.$bill['full_name'].'</td>
                                        <td>'.$bill['email'].'</td>
                                        <td>'.$bill['phone_number'].'</td>
                                        <td>'.$bill['address'].'</td>
                                        <td>'.$bill['bill_payment_status'].'</td>
                                        <td>'.$bill['total_price'].'.000đ</td>
                                        <td>'.$ttdh.'</td>
                                        <td>
                                          <a href="index.php?act=updatedh" class="sua">
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
