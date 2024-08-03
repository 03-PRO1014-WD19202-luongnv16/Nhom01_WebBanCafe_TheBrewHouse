    <!-- Start main wrapper -->
    <main class="main-wrapper">
      <div class="main-content">
        <!-- start breadcrumb -->
        <div class="page-breadcrumb">
          <div class="breadcrumb-title">DANH SÁCH KHÁCH HÀNG</div>
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
                      <th>ID</th>
                      <TH>User</TH>
                      <th>Pass</th>
                      <th>Email</th>
                      <th>Địa chỉ</th>
                      <th>Số điện thoại</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                         <?php
                            foreach($listkhachhang as $khachhang){
                              extract($khachhang);
                                echo '<tr>
                                        <td></td>
                                        <td>'.$khachhang['id'].'</td>
                                        <td>'.$khachhang['user'].'</td>
                                        <td>'.$khachhang['pass'].'</td>
                                        <td>'.$khachhang['email'].'</td>
                                        <td>'.$khachhang['address'].'</td>
                                        <td>'.$khachhang['tel'].'</td>
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
