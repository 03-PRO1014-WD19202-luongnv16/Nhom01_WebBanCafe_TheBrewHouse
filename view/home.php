<div class="main_container">
<form style="text-align: right;" action="index.php?act=sanpham" method="POST" >
    <input style = "width: 250px; height: 30px" type="text" name="kyw">
    <input style = "width: 100px; height: 30px" type="submit" name="timkiem" value="TÌM KIẾM" style="margin-left: 10px;">
</form>
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
                                    <a href="'.$linksp.'"><img src="'.$hinh.'" alt=""></a>
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
                                    <form action="index.php?act=addToCart" method="post">
                                        <input type="hidden" name="id" value="'.$id.'">
                                        <input type="hidden" name="name" value="'.$name.'">
                                        <input type="hidden" name="img" value="'.$img.'">
                                        <input type="hidden" name="sale_price" value="'.$sale_price.'">
                                        <input type="hidden" name="listed_price" value="'.$listed_price.'">
                                        <input type="submit" name="addToCart" value="Thêm vào giỏ">
                                        </form>
                                        <a href="#"><button>Mua ngay</button></a>
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
                                    <a href="'.$linksp.'"><img src="'.$hinh.'" alt=""></a>
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
                                    <form action="index.php?act=addToCart" method="post">
                                        <input type="hidden" name="id" value="'.$id.'">
                                        <input type="hidden" name="name" value="'.$name.'">
                                        <input type="hidden" name="img" value="'.$img.'">
                                        <input type="hidden" name="sale_price" value="'.$sale_price.'">
                                        <input type="hidden" name="listed_price" value="'.$listed_price.'">
                                        <input type="submit" name="addToCart" value="Thêm vào giỏ">
                                    </form>
                                        <a href="#"><button>Mua ngay</button></a>
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