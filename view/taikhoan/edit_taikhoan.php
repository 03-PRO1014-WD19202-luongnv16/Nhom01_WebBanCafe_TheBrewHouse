<br>
<!-- DANG KI TAI KHOAN -->
<div class="boxtitle">CẬP NHẬT TÀI KHOẢN</div>
<div class="dangki_container">
   
         <div class=" row boxcontent1 formtaikhoan">
         <?php
        if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
            extract($_SESSION['user']);

        }
        ?>
     <form action="index.php?act=edit_taikhoan" method="post">

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
           Địa chỉ <br>
        <input type="text" name="address">
        </div>

        <div class="row ">
           Số điện thoại <br>
        <input type="text" name="tel">
        </div>

        <div class="row">
        <input type="hidden" name="id" value="<?=$id?>">
        <input type="submit" value="Cập nhật" name="capnhat">
        </div> 

    </form>
    <h2 class="thongbao">
         <?php
            
            
            if(isset($thongbao)&&($thongbao!=="")){
               echo $thongbao;
            }

        ?> 
         </h2>    
         </div>
         
      <div class="anh_dangki">
        <img class="dangki_anh" src="img/dangki.webp" alt="">
      </div>
     
        </div>
</div>

</body>
</html>