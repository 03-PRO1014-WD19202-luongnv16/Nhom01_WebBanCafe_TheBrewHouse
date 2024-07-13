<div class="main_container">
            <!-- Danh mục Slideshow Tài khoản -->
            <div class="main_danhmuc_slideshow_taikhoan">
                <!-- Slideshow -->
                <div class="main_slideshow">
                    <div class="slideshow-container">
                        <div class="mySlides fade">
                            <div class="numbertext">1 / 3</div>
                            <img src="img/slideshow.jpg" style="height:300px; border-radius: 20px;">
                        </div>
                        <div class="mySlides fade">
                            <div class="numbertext">2 / 3</div>
                            <img src="img/slideshow2.webp" style="height:300px; border-radius: 20px;">
                        </div>
                        <div class="mySlides fade">
                            <div class="numbertext">3 / 3</div>
                            <img src="img/slideshow3.webp" style="height:300px; border-radius: 20px;">
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

            <!-- Sản phẩm nổi bật -->
            <div class="like">
                <div class="boxtitle"><h4>SẢN PHẨM NỔI BẬT</h4></div>
                <div class="like">
                    <?php foreach($spnew as $sp){
                        extract($sp);
                        $linksp="index.php?act=sanphamct&idsp=".$id;
                        $hinh = $img_path.$img;
                    echo '
                        <div class="product-card">
                            <div class="product-img_container">
                                <div class="product_img">
                                    <img src="'.$hinh.'" alt="">
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-title">
                                    <a href="'.$linksp.'">'.$name.'</a>
                                </div>
                                <div class="product-price">
                                    <div class="product-sale-price">'.$sale_price.'đ</div>
                                    <div class="product-listed-price">'.$listed_price.'đ</div>
                                </div>
                                <div class="product-button">
                                    <a href="#"><button>Đặt ngay</button></a>
                                </div>
                            </div>
                        </div>
                    ';
                }?>
                    <!-- Các sản phẩm yêu thích khác -->
                </div>
            </div>
            
            <!-- Top sản phẩm yêu thích -->
            <div class="like">
                <div class="boxtitle"><h4>SẢN PHẨM YÊU THÍCH</h4></div>
                <div class="like">
                    <?php foreach($spyeuthich as $sp){
                        extract($sp);
                        $linksp="index.php?act=sanphamct&idsp=".$id;
                        $hinh = $img_path.$img;
                    echo '
                        <div class="product-card">
                            <div class="product-img_container">
                                <div class="product_img">
                                    <img src="'.$hinh.'" alt="">
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-title">
                                    <a href="'.$linksp.'">'.$name.'</a>
                                </div>
                                <div class="product-price">
                                    <div class="product-sale-price">'.$sale_price.'đ</div>
                                    <div class="product-listed-price">'.$listed_price.'đ</div>
                                </div>
                                <div class="product-button">
                                    <a href="#"><button>Đặt ngay</button></a>
                                </div>
                            </div>
                        </div>
                    ';
                }?>
                    <!-- Các sản phẩm yêu thích khác -->
                </div>
            </div>

            <div class="gioithieu">
                <img class="anh_gioithieu" src="./img/about_us_new.png" alt="">
            </div>

            
        </div>