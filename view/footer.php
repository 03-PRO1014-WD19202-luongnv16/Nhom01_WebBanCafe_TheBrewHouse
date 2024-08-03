<footer class="page-footer">
        <div class="footer-content">
          <div class="footer-top-wrapper">
            <div class="footer-logo-wrapper">
              <img src="img/logo slider.png" alt="Yonex Logo" />
            </div>
            <div class="footer-social-wrapper">
              <ul>
                <li class="facebook">
                  <a
                    href="#"
                    target="_blank"
                  >
                    <img src="img/facebook_icon.svg" alt="Facebook" />
                  </a>
                </li>
                <li class="twitter" target="_blank">
                  <a href="#">
                    <img src="img/twitter_icon.svg" alt="Twitter" />
                  </a>
                </li>
                <li class="youtuber">
                  <a
                    href="#"
                    target="_blank"
                  >
                    <img src="img/youtube_icon.svg" alt="Youtuber" />
                  </a>
                </li>
                <li class="instagram">
                  <a
                    href="#"
                    target="_blank"
                  >
                    <img src="img/instagram_icon.svg" alt="Instagram" />
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="footer-middle-wrapper">
            <div class="categories">
              <div class="contents">
                <ul>
                    <?php 
                        foreach ($listdanhmuc as $danhmuc) {
                        echo '<li><a href="index.php?act=sanpham&iddm='.$danhmuc['id'].'">'.$danhmuc['name'].'</a></li>';
                        }
                    
                    ?>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-bottom-wrapper">
            <div class="nav">
              <ul class="footer-links-wrapper">
                <li class="nav-item"><a href="index.php">Trang chủ </a> |</li>
                <li class="nav-item"><a href="?act=sanphamall"> Sản phẩm </a> |</li>
                <li class="nav-item"><a href="#">Liên hệ</a> |</li>
                <li class="nav-item">
                  <a href="#">Giới thiệu</a>
                </li>
              </ul>
            </div>
            <small class="copyright">
              <span>© 2024 - TheBrewHouse</span>
            </small>
          </div>
        </div>
      </footer>
    </div>

    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) { slideIndex = 1 }
            slides[slideIndex - 1].style.display = "block";
            setTimeout(showSlides, 3000);
        }

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function showDropdown() {
            document.getElementById("dropdownContent").style.display = "block";
        }

        function hideDropdown() {
            document.getElementById("dropdownContent").style.display = "none";
        }

        function showProductDropdown() {
            document.getElementById("productDropdownContent").style.display = "block";
        }

        function hideProductDropdown() {
            document.getElementById("productDropdownContent").style.display = "none";
        }
    </script>
</body>
</html>
