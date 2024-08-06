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
                      <th>Nội dung</th>
                      <TH>ID người dùng</TH>
                      <th>Thời gian bình luận</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                         <?php
                            foreach( $list_bl as $bl){
                              extract($bl);
                              echo '<tr>
                                      <td>'.$bl['noidung'].'</td>
                                      <td>'.$bl['idpro'].'</td>
                                      <td>'.$bl['ngaybinhluan'].'</td>
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
