<div class="like">
  <form action="index.php?act=billcomfirm" method="post">
  <div class="like row cart">
                <div class="boxtitle"><h4>ĐƠN HÀNG CỦA TÔI </h4></div>
                    <table  class="tt">
                <tr>
                    <th>MÃ ĐƠN</th>
                    <th>MÃ NGƯỜI NHẬN</th>
                    <th>TÊN KHÁCH HÀNG</th>
                    <th>SỐ ĐIỆN THOẠI</th>
                    <th>ĐỊA CHỈ</th>
                    <th>NGÀY ĐẶT HÀNG</th>
                    <th>TỔNG GIÁ TRỊ</th>
                    <th>TÌNH TRẠNG ĐƠN</th>
                </tr>
                <?php
                            foreach($listbill as $bill){
                              extract($bill);
                              $ttdh = get_ttdh($bill["bill_status"]);
                              echo '<tr>
                                      <td>VN '.$bill['bill_id'].'</td>
                                      <td>TBRH_VN '.$bill['user_id'].'</td>
                                      <td>'.$bill['full_name'].'</td>
                                      <td>'.$bill['phone_number'].'</td>
                                      <td>'.$bill['address'].'</td>
                                      <td>'.$bill['ngaydathang'].'</td>
                                      <td>'.$bill['total_price'].'.000đ</td>
                                      <td>'.$ttdh.'</td>
                                    </tr>';
                          }
                          
                            
                        ?>

                    </table>
                </div>
  
</div>




<!-- <?php
                            foreach($listbill as $bill){
                              extract($bill);
                              echo '<tr>
                                      <td>'.$bill['bill_id'].'</td>
                                      <td>'.$bill['user_id'].'</td>
                                      <td>'.$bill['full_name'].'</td>
                                      <td>'.$bill['email'].'</td>
                                      <td>'.$bill['phone_number'].'</td>
                                      <td>'.$bill['address'].'</td>
                                      <td>'.$bill['ngaydathang'].'</td>
                                      <td>'.$bill['bill_status'].'</td>
                                    </tr>';
                          }
                          
                            
                        ?>  -->

<!-- <td><?php echo get_ttdh($bill['bill_status']); ?></td> -->