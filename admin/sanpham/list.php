    <!-- Start main wrapper -->
    <main class="main-wrapper">
      <div class="main-content">
        <!-- start breadcrumb -->
        <div class="page-breadcrumb">
          <div class="breadcrumb-title">Sản phẩm</div>
        </div>
        <!-- end breadcrumb -->
        <div class="filter">
       <form action="index.php?act=listsp" method="post">
          <div class="col-auto">
                <div class="search">
                  <input
                    type="search"
                    class="form-control"
                    name="search"
                    placeholder="Nhập sản phẩm cần tìm..."
                  />
                  <span>
                  </span>
                </div>
                <select name="iddm" id="">
                    <option value="" selected> Tất cả </option>
                  <?php 
                    foreach($listdanhmuc as $danhmuc){
                      extract($danhmuc);
                      echo '<option value="'.$id.'">'.$name.'</option>';
                    }
                  ?>
                </select>
                <input class="listOk" type="submit" name="listOK" value="Search">
              </div>
              
            </form>
            <div class="col-auto">
              <div class="btn">
                <a href="index.php?act=addsp">
                  <button class="btn-primary">
                    <i class="bi bi-plus-lg"></i>
                    Thêm sản phẩm
                  </button>
                </a>
              </div>
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
                      <th>Tên sản phẩm</th>
                      <th>Giá nhập</th>
                      <th>Giá sale</th>
                      <th>Giá niêm yết</th>
                      <th>Tồn kho</th>
                      <th>Chức năng</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($listsanpham as $sp){
                      extract($sp);
                      $suasp="index.php?act=suasp&id=".$id;
                      $xoasp="index.php?act=xoasp&id=".$id;
                      $hinhpath= ".././upload/".$img;
                      if(is_file($hinhpath)){
                        $img="<img src='".$hinhpath."'height='100' width='100'>";
                      }else{
                        $img="no photo";
                      }
                      echo '
                        <tr>
                      <td>
                        <input type="checkbox" class="form-check-input" />
                      </td>
                      <td>
                        <div class="product">
                          <div class="product-box">
                            <a href="'.$suasp.'">'.$img.'</a>
                          </div>
                          <div class="product-info">
                            <a href="#" class="product-title"
                              >'.$name.'</a>
                          </div>
                        </div>
                      </td>
                      <td>'.$import_price.'<u>đ</u></td>
                      <td>'.$sale_price.'<u>đ</u></td>
                      <td>'.$listed_price.'<u>đ</u></td>
                      <td>'.$stock.'</td>
                      <td>
                        <a href="'.$suasp.'" class="sua">
                          <i class="bi bi-pencil-square"></i>
                        </a>
                        <a onclick="return confirm(\'Bạn có muốn xoá không?\')" href="'.$xoasp.'" class="xoa">
                          <i class="bi bi-trash"></i>
                        </a>
                      </td>
                    </tr>
                      ';
                    }
                    ?>
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
