<br>
<!-- DANG NHAP-->
<div class="boxtitle">ĐĂNG NHẬP</div>
    <div class="dangki_container">

        <div class=" row boxcontent1 formtaikhoan">
        <?php
                        if(isset($_SESSION['user'])){
                            extract($_SESSION['user']);
        ?>
        <?php
                        }else{
        ?>
            <form action="index.php?act=dangnhap" method="post">

                <div class="row ">
                    <br>
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

                <input type="submit" value="Đăng Nhập" name="dangnhap">


            </form>
            <br>
            <li>
                <a href="#">Quên mật khẩu</a>
            </li>
            <?php }?>
        </div>

        <div class="anh_dangki">
            <img class="dangki_anh" src="img/dangki.webp" alt="">
        </div>

    </div>