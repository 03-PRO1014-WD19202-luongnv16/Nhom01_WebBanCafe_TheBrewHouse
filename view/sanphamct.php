<div class="main_container">
            
            <div class="like">
                <?php 
                     extract($onesp);
                ?>
                <div class="boxtitle"><h4><?=$name?></h4></div>
                <div class="like">
                <?php

                     $img = $img_path.$img;
                     echo '<img style="width: 500px; height: 350px;" src="' .$img.'"><br>';
                     echo $mota;
                ?>
                </div>
                
            </div>




            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
            <script>
                $(document).ready(function(){
                $("#binhluan").load("view/binhluan/binhluanform.php", {idpro: <?=$id?>});
                });
            </script>


<div class="like" id="binhluan">
</div> 





</div>





        




        