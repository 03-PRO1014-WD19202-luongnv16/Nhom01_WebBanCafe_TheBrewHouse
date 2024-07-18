<div class="like">
  <form action="index.php?act=billcomfirm" method="post">
  <div class="like row cart">
                <div class="boxtitle"><h4>THÔNG TIN ĐẶT HÀNG</h4></div>
                    <div class="row" style="text-align: center">
                      <h2>Cảm ơn quý khách đã đặt hàng!</h2>
                    </div>
                </div>
  <div class="like row cart">
                <div class="boxtitle"><h4>PHƯƠNG THỨC THANH TOÁN</h4></div>
                    <table>
                      <tr>
                        <td><input type="radio" name="pttt" checked> Trả tiền khi nhận hàng</td>
                        <td><input type="radio" name="pttt" > Thanh toán online</td>
                      </tr>
                    </table>
                </div>
  <div class="like row cart">
                <div class="boxtitle"><h4>THÔNG TIN ĐƠN HÀNG</h4></div>
                    <table>
                      <?php
                          viewCart(0);
                      ?>
                    </table>
                    <div class="bill">
                      <a href="index.php?act=bill"><input type="button" value="ĐỒNG Ý ĐẶT HÀNG" name="dongydathang"></a>
                    </div>
                </div>
                
    </form>
</div>
