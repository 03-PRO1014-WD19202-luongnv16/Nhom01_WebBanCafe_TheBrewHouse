<div class="main_container">
            <!-- Danh mục Slideshow Tài khoản -->
            <div class="main_danhmuc_slideshow_taikhoan">
                <!-- Slideshow -->
                <div class="main_slideshow">
                    <div class="slideshow-container">
                        <div class="mySlides fade">
                            <div class="numbertext">1 / 3</div>
                            <img src="img/slideshow1.webp" style="height:280px; border-radius: 20px;">
                        </div>
                        <div class="mySlides fade">
                            <div class="numbertext">2 / 3</div>
                            <img src="img/slideshow2.webp" style="height:280px; border-radius: 20px;">
                        </div>
                        <div class="mySlides fade">
                            <div class="numbertext">3 / 3</div>
                            <img src="img/slideshow3.webp" style="height:280px; border-radius: 20px;">
                        </div>
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    </div>
                    <br>
                </div>
            </div>

            <div class="gioithieu">
                <img class="anh_gioithieu" src="img/anhgioithieu.png" alt="">
            </div>

            <!-- Top sản phẩm yêu thích -->
            <div class="like">
                <div class="boxtitle"><h4>SẢN PHẨM YÊU THÍCH</h4></div>
                <div class="like">
                <?php
                            foreach($dstop10 as $sp){
                                extract($sp);
                                $linksp="index.php?act=sanphamct&idsp=".$id;
                                $img=$img_path.$img;
                                echo '<div class="mb10 noibat">
                                          <img src="'.$img.'" alt="">
                                          <a href="'.$linksp.'">'.$name.'</a>
                                      </div>';
                            }
                        ?>
                    <!-- <div class="mb10 top">
                        <img src="./img/logo slider.png" alt="">
                        <a href="#">Đồ uống</a>
                    </div>
                    <div class="mb10 top">
                        <img src="./img/logo slider.png" alt="">
                        <a href="#">Đồ uống</a>
                    </div>
                    <div class="mb10 top">
                        <img src="./img/logo slider.png" alt="">
                        <a href="#">Đồ uống</a>
                    </div>
                    <div class="mb10 top">
                        <img src="./img/logo slider.png" alt="">
                        <a href="#">Đồ uống</a>
                    </div>
                    <div class="mb10 top">
                        <img src="./img/logo slider.png" alt="">
                        <a href="#">Đồ uống</a>
                    </div>
                    <div class="mb10 top">
                        <img src="./img/logo slider.png" alt="">
                        <a href="#">Đồ uống</a>
                    </div>
                    <div class="mb10 top">
                        <img src="./img/logo slider.png" alt="">
                        <a href="#">Đồ uống</a>
                    </div>
                    <div class="mb10 top">
                        <img src="./img/logo slider.png" alt="">
                        <a href="#">Đồ uống</a>
                    </div> -->
                    
                    <!-- Các sản phẩm yêu thích khác -->
                </div>
            </div>

            <div class="gioithieu">
                <img class="anh_gioithieu" src="img/anhgioithieu.png" alt="">
            </div>

            <!-- Sản phẩm nổi bật -->
            <div class="like">
                <div class="boxtitle"><h4>SẢN PHẨM NỔI BẬT</h4></div>
                <div class="like">
                <?php
                
                         foreach($spnew as $sp){
                                extract($sp);
                                $hinh=$img_path.$img;
                                echo '<div class="mb10 noibat">
                                           <img src="'.$hinh.'" alt="">
                                           <a href="#">'.$name.'</a>
                                           <p>'.$sale_price.'</p>
                                    </div>';
                            
                         }
                    ?>
                    <!-- <div class="mb10 noibat">
                        <img src="./img/logo slider.png" alt="">
                        <a href="#">Đồ uống</a>
                    </div>
                    <div class="mb10 noibat">
                        <img src="./img/logo slider.png" alt="">
                        <a href="#">Đồ uống</a>
                    </div>
                    <div class="mb10 noibat">
                        <img src="./img/logo slider.png" alt="">
                        <a href="#">Đồ uống</a>
                    </div>
                    <div class="mb10 noibat">
                        <img src="./img/logo slider.png" alt="">
                        <a href="#">Đồ uống</a>
                    </div>
                    <div class="mb10 noibat">
                        <img src="./img/logo slider.png" alt="">
                        <a href="#">Đồ uống</a>
                    </div>
                    <div class="mb10 noibat">
                        <img src="./img/logo slider.png" alt="">
                        <a href="#">Đồ uống</a>
                    </div>
                    <div class="mb10 noibat">
                        <img src="./img/logo slider.png" alt="">
                        <a href="#">Đồ uống</a>
                    </div>
                    <div class="mb10 noibat">
                        <img src="./img/logo slider.png" alt="">
                        <a href="#">Đồ uống</a>
                    </div> -->
                    <!-- Các sản phẩm nổi bật khác -->
                </div>
            </div>

        </div>