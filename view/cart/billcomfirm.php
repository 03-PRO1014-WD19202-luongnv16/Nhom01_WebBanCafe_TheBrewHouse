<div class="like">
  <form action="index.php?act=billcomfirm" method="post">
    <div class="like row cart">
      <div class="boxtitle"><h4>CẢM ƠN </h4></div>
      <div class="row" style="text-align: center">
        <h2>Cảm ơn quý khách đã đặt hàng!</h2> 
      </div>
    </div>
    <?php if (isset($bill) && is_array($bill)) { extract($bill); } ?>
    <div class="like row cart">
      <div class="boxtitle"><h4>THÔNG TIN ĐẶT HÀNG</h4></div>
      <div class="row" style="text-align: center">
        <h1>TBRH_VN : <?= $bill['bill_id']; ?></h1>
        <h1>NGÀY ĐẶT HÀNG : <?= $bill['ngaydathang']; ?></h1>
      </div>
    </div>

    <div class="like row cart">
      <div class="boxtitle"><h4>THÔNG TIN KHÁCH HÀNG</h4></div>
      <div class="row" style="text-align: center">
        <h1>TÊN KHÁCH HÀNG : <?= $bill['full_name']; ?></h1>
        <h1>EMAIL : <?= $bill['email']; ?></h1>
        <h1>SỐ ĐIỆN THOẠI : <?= $bill['address']; ?></h1>
        <h1>ĐỊA CHỈ : <?= $bill['phone_number']; ?></h1>
      </div>
    </div>
    
  </form>
</div>