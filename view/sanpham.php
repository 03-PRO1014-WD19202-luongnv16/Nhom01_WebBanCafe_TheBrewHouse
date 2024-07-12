<div class="main_container">
           
            <!-- Top sản phẩm yêu thích -->
            <div class="like">
                <div class="boxtitle"><h4>SẢN PHẨM</h4></div>
                <div class="like">
                <?php               
                foreach($dssp as $sp){
                    extract($sp);
                    $hinh = $img_path.$img;
                    echo '<div class="mb10 noibat">
                              <img src="'.$hinh.'" alt="">
                              <a href="#">'.$name.'</a>
                              <p>'.$sale_price.'</p>
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

            
</div>