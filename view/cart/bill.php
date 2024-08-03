<div class="like">
  <form action="index.php?act=billcomfirm" method="post">
  <div class="like row cart">
                <div class="boxtitle"><h4>THÔNG TIN ĐẶT HÀNG</h4></div>
                    <table class="tt">
                      <?php
                        if(isset($_SESSION['user'])){
                          $user=$_SESSION['user']['user'];
                          $email=$_SESSION['user']['email'];
                          $address=$_SESSION['user']['address'];
                          $tel=$_SESSION['user']['tel'];
                        }else{
                          $user="";
                          $email="";
                          $address="";
                          $tel="";
                        }
                      ?>
                      <tr>
                        <td>Người đặt hàng</td>
                        <td><input type="text" name="user" value="<?=$user?>"></td>
                      </tr>  
                      <tr>
                        <td>Địa chỉ</td>
                        <td><input type="text" name="address" value="<?=$address?>"></td>
                      </tr>  
                      <tr>
                        <td>Email</td>
                        <td><input type="text" name="email" value="<?=$email?>"></td>
                      </tr>  
                      <tr>
                        <td>SDT</td>
                        <td><input type="text"  name="phone_number" value="<?=$tel?>"></td>
                      </tr>
                    </table>
                </div>
  <div class="like row cart">
                <div class="boxtitle"><h4>PHƯƠNG THỨC THANH TOÁN</h4></div>
                    <table>
                      <tr>
                        <td><input type="radio" name="bill_payment_status" checked> Trả tiền khi nhận hàng</td>
                        <td><input type="radio" name="bill_payment_status" > Thanh toán online</td>
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
                      <a href="index.php?act=billcomfirm"><input type="submit" value="ĐỒNG Ý ĐẶT HÀNG" name="dongydathang"></a>
                    </div>
                </div>
                
    </form>
</div>
