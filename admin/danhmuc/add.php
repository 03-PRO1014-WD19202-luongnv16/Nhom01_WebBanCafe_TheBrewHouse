    <!-- Start main wrapper -->
    <main class="main-wrapper">
      <div class="main-content">
        <!-- start breadcrumb -->
        <div class="page-breadcrumb">
          <div class="breadcrumb-title">Thêm mới loại hàng</div>
        </div>
        <!-- end breadcrumb -->
        <div class="filter">
          <div class="col-auto">
            <div class="btn-ds">
              <a href="index.php?act=listdm">
                <button class="btn-primary">
                  Danh sách loại hàng
                </button>
              </a>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <form action="index.php?act=adddm" method="post">
              <div class="mb-4">
                <h5 class="mb-3">Mã loại hàng</h5>
                <input type="text" name="" id="" class="form-control" disabled>
              </div>
              <div class="mb-4 dm">
                <h5 class="mb-3">Danh mục loại hàng</h5>
                <select name="" id="">
                  <option value="0" selected>Tất cả</option>
                  <option value="1">Cà phê</option>
                </select>
              </div>
              <div class="mb-4">
                <button class="success">Lưu lại</button>
                <button class="danger">Hủy bỏ</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </main>
    <!-- End main wrapper -->

