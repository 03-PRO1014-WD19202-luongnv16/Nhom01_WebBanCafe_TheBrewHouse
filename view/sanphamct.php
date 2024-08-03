<div id="breadcrumb">
    <div class="container">
        <div class="row">
        <?php 
                extract($onesp);
            ?>
            <div class="col-md-12">
                <ol class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
                    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a href="index.php?act=sanphamall" target="_self">
                            <span itemprop="name">Sản Phẩm</span>
                        </a>
                        <meta itemprop="position" content="1">
                    </li>
                    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <?php 
                            foreach ($listdanhmuc as $danhmuc) {
                                extract($danhmuc);
                                if($id==$iddm){
                                    echo '
                                        <a href="index.php?act=sanpham&iddm='.$danhmuc['id'].'">
                                            <span itemprop="name">'.$danhmuc['name'].'</span>
                                        </a>
                                        ';
                                }
                            }
                        ?>
                        <meta itemprop="position" content="2">
                    </li>
                    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"  class="active">
                    <?php 
                extract($onesp);
                ?>
                <a href="#"><span itemprop="name"><?=$name?></span></a>;
                        <meta itemprop="position" content="2">
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="productinfor">
    <div class="product_infor_r">
        
        <?php
            extract($onesp);
            $anh = $img_path.$img;
            echo ' <div class="container">
            <div class="row box">
                <div class="box_img">
                    <img src="'.$anh.'" alt="">
                </div>
                <div class="box_info">
                    <div>
                        <div class="info_product">
                            <div>
                                <p class = "info_product_title">'.$name.'</p>
                                <div class="info_product_price">
                                    <span class="sale_price">'.$sale_price.'đ</span>
                                    <del class="listed_price">'.$listed_price.'đ</del>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="mota">
                            <span>Mô tả sản phẩm</span>
                            <p>'.$mota.'</p>
                        </div>
                        <form action="index.php?act=addToCart" method="post">
                            <input type="hidden" name="id" value="'.$id.'">
                            <input type="hidden" name="name" value="'.$name.'">
                            <input type="hidden" name="img" value="'.$img.'">
                            <input type="hidden" name="sale_price" value="'.$sale_price.'">
                            <input type="hidden" name="listed_price" value="'.$listed_price.'">
                            <input type="submit" name="addToCart" value="Thêm vào giỏ">
                        </form>
                    </div>
                </div>
            </div>
            '
            ?>
            <div class="like" id="binhluan">
             
             <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
                 <script>
                     $(document).ready(function(){
                     $("#binhluan").load("view/binhluan/binhluanform.php", {idpro: <?=$id?>});
                     });
                 </script>
                 </div>
    </div>
</div>