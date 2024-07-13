<footer>
            <div class="footer_thongtin">
                <img class="hehe" src="img/ftthongtin.png" alt="">
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
