
<section class="w3l-footer-29-main" id="footer">
    <div class="footer-29 py-5">
        <div class="container pb-lg-3">
            <div class="row footer-top-29">
                <div class="col-lg-4 col-md-6 footer-list-29 footer-1 mt-md-4">
                    <h6 class="footer-title-29">Contact Us</h6>
                    <ul>
                        <li>
                            <p><span class="fa fa-map-marker"></span> IND,
                                TRICHY - 620001</p>
                        </li>
                        <li><a href="mailto:mailid@mail.com" class="mail"><span class="fa fa-envelope-open-o"></span>
                                mailid@mail.com</a></li>
                    </ul>
                    <div class="main-social-footer-29">
                        <a href="#facebook" class="facebook bg-primary"><span class="fa fa-facebook"></span></a>
                        <a href="#twitter" class="twitter bg-primary"><span class="fa fa-twitter"></span></a>
                        <a href="#instagram" class="instagram bg-primary"><span class="fa fa-instagram"></span></a>
                        <a href="#google-plus" class="google-plus bg-primary"><span
                                class="fa fa-google-plus"></span></a>
                        <a href="#linkedin" class="linkedin bg-primary"><span class="fa fa-linkedin"></span></a>
                    </div>
                </div>
               
               
                <div class="col-lg-2 col-md-6 footer-list-29 footer-4 mt-4">
                    <ul>
                        <h6 class="footer-title-29">Quick Links</h6>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="officerlogin.php">Admin</a></li>
                        <li><a href="login.php">User</a></li>
                        <li><a href="adminlogin.php">University Admin</a></li>

                    </ul>
                </div>
            </div>
            <div class="row bottom-copies">
                <p class="copy-footer-29 col-lg-8">© All rights reserved | Design by <a
                    href="index.php">Online Ticket Management System</a></p>
                <ul class="list-btm-29 col-lg-4">
                    <li><a href="#link">Privacy policy</a></li>
                    <li><a href="#link">Terms of service</a></li>
                    <li><select name="carlist" form="carform">
                            <option value="Language">Tamil</option>
                            <option value="Language">English</option>

                        </select>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" class="bg-primary" title="Go to top">
        <span class="fa fa-angle-up"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- /move top -->
</section>
<!-- // footer -->

<!-- jQuery -->
<script src="assets/js/jquery-3.4.1.slim.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- disable body scroll which navbar is in active -->
<script>
    $(function () {
        $('.navbar-toggler').click(function () {
            $('body').toggleClass('noscroll');
        })
    });
</script>
<!-- disable body scroll which navbar is in active -->

<!-- jQuery-Photo-filter-lightbox-portfolio-plugin -->
<script src="assets/js/jquery-1.7.2.js"></script>
<script src="assets/js/jquery.quicksand.js"></script>
<script src="assets/js/script.js"></script>
<script src="assets/js/jquery.prettyPhoto.js"></script>
<!-- jQuery-Photo-filter-lightbox-portfolio-plugin -->