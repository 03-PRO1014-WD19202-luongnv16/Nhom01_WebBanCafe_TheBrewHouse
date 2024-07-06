    <!-- Start main wrapper -->
    <main class="main-wrapper">
      <div class="main-content">
        <!-- start breadcrumb -->
        <div class="page-breadcrumb">
          <div class="breadcrumb-title">Cập nhật sản phẩm</div>
        </div>
        <!-- end breadcrumb -->
        <div class="filter">
          <div class="col-auto">
            <div class="btn-ds">
              <a href="index.php?act=listsp">
                <button class="btn-primary">
                  Danh sách sản phẩm
                </button>
              </a>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <div class="mb-4 dm">
              <h5 class="mb-3">Danh mục sản phẩm</h5>
              <select name="" id="">
                <option value="0" >Tất cả</option>
                <option value="1" selected>Cà phê</option>
              </select>
            </div>
            <div class="mb-4">
              <h5 class="mb-3">Tên sản phẩm</h5>
              <input
                type="text"
                name=""
                id=""
                class="form-control"
                placeholder="Nhập tên sản phẩm ở đây..."
                value="Cà Phê Sữa Đá Hòa Tan"
              />
            </div>
            <div class="mb-4">
              <h5 class="mb-3">Ảnh</h5>
              <input
                type="file"
                name=""
                id=""
                class="form-control"
              />
              <img src="./images/1.png" width="100px" height="100px" alt="">
            </div>
            <div class="mb-4">
              <h5 class="mb-3">Mô tả</h5>
              <textarea
                class="form-control"
                cols="4"
                rows="6"
                placeholder="Nhập mô tả ở đây.."
                style="height: 149px"
              >Cà phê ngon</textarea>
            </div>
            <div class="mb-4">
              <h5 class="mb-3">Giá</h5>
              <input
                type="number"
                name=""
                id=""
                class="form-control"
                placeholder="Nhập giá sản phẩm ở đây..."
                min="0"
                value="50000"
              />
            </div>
            <div class="mb-4">
              <h5 class="mb-3">Size</h5>
              <input
                type="text"
                name=""
                id=""
                class="form-control"
                placeholder="Nhập giá sản phẩm ở đây..."
                min="0"
                value="L"
              />
            </div>
            <div class="mb-4">
              <h5 class="mb-3">Số lượng</h5>
              <input
                type="number"
                name=""
                id=""
                class="form-control"
                placeholder="Nhập số lượng sản phẩm ở đây..."
                min="0"
                value="1"
              />
            </div>
          </div>
          <div class="mb-4">
            <button class="success">Lưu lại</button>
            <button class="danger">Hủy bỏ</button>
          </div>
        </div>
      </div>
    </main>
    <!-- End main wrapper -->