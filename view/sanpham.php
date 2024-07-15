<div class="main_container">
           
            <!-- Top sản phẩm yêu thích -->
            <div class="like">
                <div class="boxtitle"><h4>SẢN PHẨM</h4></div>
                <div class="like">
                <?php               
                foreach($dssp as $sp){
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
                                    <form action="index.php?act=addToCart" method="post">
                                        <input type="hidden" name="id" value="'.$id.'">
                                        <input type="hidden" name="name" value="'.$name.'">
                                        <input type="hidden" name="img" value="'.$img.'">
                                        <input type="hidden" name="sale_price" value="'.$sale_price.'">
                                        <input type="hidden" name="listed_price" value="'.$listed_price.'">
                                        <input type="submit" name="addToCart" value="Thêm vào giỏ">
                                        <a href="#"><button>Mua ngay</button></a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    ';
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

            
</div>