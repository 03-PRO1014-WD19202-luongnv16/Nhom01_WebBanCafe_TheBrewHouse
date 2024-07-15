<div class="like">
                <div class="boxtitle"><h4>GIỎ HÀNG</h4></div>
                <div class="like row cart">
                    <table>
                      <tr>
                        <th>Hình</th>
                        <th>Sản phẩm</th>
                        <th>Đơn giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                        <th>Thao tác</th>
                      </tr>
                      <?php
                        $tong=0;
                        $i=0;
                        foreach ($_SESSION['myCart'] as $cart){
                          $anh=$img_path.$cart[2];
                          $total=$cart[3] * $cart[4];
                          $tong+=$total ;
                          $xoasp = '<a href="index.php?act=delCart&idcart='.$i.'">
                                      <i class="bi bi-trash-fill"></i>
                                    </a>';
                          echo '
                            <tr>
                              <td><img src="'.$anh.'" width="100px" alt=""></td>
                              <td>'.$cart[1].'</td>
                              <td>'.number_format($cart[3], 0, '', '.').'.000đ</td>
                              <td>
                                '.$cart[4].'
                              </td>
                              <td>'.number_format($total, 0, '', '.').'.000đ</td>
                              <td>
                                '.$xoasp.'
                              </td>
                            </tr>';
                          $i+=1;  
                        }
                        echo '
                            <tr>
                              <td colspan="4">Tổng đơn hàng</td>
                              <td>'.number_format($tong, 0, '', '.').'.000đ</td>
                              <td></td>
                              
                            </tr>';
                      ?>
                      <!-- <tr>
                        <td>1</td>
                        <td><img src="./img/cp1.jpg" width="100px" alt=""></td>
                        <td>Cà phê</td>
                        <td>50.000đ</td>
                        <td>1</td>
                        <td>50.000đ</td>
                        <td>
                          <input type="button" value="Sửa">
                          <input type="button" value="Xóa">
                        </td>
                      </tr> -->
                    </table>
                </div>
            </div>
