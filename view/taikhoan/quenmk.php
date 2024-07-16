<br>
<!-- DANG KI TAI KHOAN -->
<div class="boxtitle">QUÊN MẬT KHẨU</div>
<div class="dangki_container">
   
         <div class=" row boxcontent1 formtaikhoan">
     <form action="index.php?act=quenmk" method="post">

        <div class="row ">
            <br>
            <br>
            <br>
            Email<br>
        <input type="text" name="email">
        </div>

        

        <div class="row">
        <input type="submit" value="Gửi mật khẩu" name="guiemail">
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