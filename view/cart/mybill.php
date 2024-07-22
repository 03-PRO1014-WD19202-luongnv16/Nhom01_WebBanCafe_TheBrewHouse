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
                <?php foreach ($listbill as $bill): ?>
                      <tr>
                        <td><?php echo 'TBRH_VN'.$bill['bill_id']; ?></td>
                        <td><?php echo 'TBRH_VN_QRT'.$bill['user_id']; echo'TBRH_VN_QRT'?></td>
                        <td><?php echo $bill['full_name']; ?></td>
                        <td><?php echo $bill['address']; ?></td>
                        <td><?php echo $bill['phone_number']; ?></td>
                        <td><?php echo $bill['bill_payment_status']; ?></td>
                        <td><?php echo number_format($bill['total_price'], 0, ',', '.') . '.000đ'; ?></td>
                        <td><?php echo get_ttdh($bill['bill_status']); ?></td>
                      </tr>
                <?php endforeach; ?>

                    </table>
                </div>
  
</div>
