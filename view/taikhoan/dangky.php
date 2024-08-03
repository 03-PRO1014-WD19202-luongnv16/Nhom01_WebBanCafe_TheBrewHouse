<br>
<!-- DANG KI TAI KHOAN -->
<div class="boxtitle">ĐĂNG KÍ TÀI KHOẢN</div>
<div class="dangki_container">
   
         <div class=" row boxcontent1 formtaikhoan">
     <form action="index.php?act=dangky" method="post">

        <div class="row ">
            <br>
            <br>
            <br>
            Tên đăng nhập <br>
        <input type="text" name="user">
        </div>

        <div class="row ">
            Mật khẩu <br>
        <input type="password" name="pass">
        </div>


        <div class="row ">
           Email <br>
        <input type="text" name="email">
        </div>
    
        <div class="row ">
           Số điện thoại <br>
        <input type="text" name="tel">
        </div>

        <div class="row ">
           Địa chỉ <br>
        <input type="text" name="address">
        </div>

        <div class="row">
        <input type="submit" value="Đăng kí" name="dangky">
        </div> 

    </form>
    <h2 class="thongbao">
         <?php
            
            
            if(isset($thongbao)&&($thongbao!=="")){
               echo $thongbao;
            }

        ?> 
         </h2>
            <a href="?act=dangnhap">Đăng nhập</a>    
         </div>
         
      <div class="anh_dangki">
        <img class="dangki_anh" src="img/dangki.webp" alt="">
      </div>
     
        </div>
</div>

</body>
</html>