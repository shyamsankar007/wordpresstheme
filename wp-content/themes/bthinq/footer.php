</main></div>
<footer id="footer" role="contentinfo">

        <!-- Footer Start -->
        <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5 justify-content-center">
                    <div class="col-lg-4 text-start">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Links</h4>
                            <a href="#" class="btn-link"> About</a>
                            <a href="#" class="btn-link"> Service</a>
                            <a href="#" class="btn-link"> Team</a>
                            <a href="<?php echo site_url(); ?>/contact" class="btn-link"> Contact us</a>
                         </div>
                    </div>
                    <div class="col-lg-4 text-center">
                        <div class="footer-item">
                            <h4 class="mb-4 text-white">bthinq</h4>
                            <p class="text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.  
                            </p>
                            <div class="btn-link d-flex justify-content-center">
                                <a href="#" class="btn btn-md-square btn-light btn-light-outline-0 me-2"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="btn btn-md-square btn-light btn-light-outline-0 me-2"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="btn btn-md-square btn-light btn-light-outline-0 me-2"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="btn btn-md-square btn-light btn-light-outline-0 me-0"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 text-end">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Follow Us</h4>
                            <a href="#" class="btn-link"> Faceboock</a>
                            <a href="#" class="btn-link"> Instagram</a>
                            <a href="#" class="btn-link"> Twitter</a>
                            <h4 class="my-4 text-white">Contact Us</h4>
                            <a href="#" class="btn-link"><i class="fas fa-envelope text-secondary me-2"></i> info@example.com</a>
                            <a href="#" class="btn-link"><i class="fas fa-phone text-secondary me-2"></i> (+012) 3456 7890</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        



        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-md-0">
                        <span class="text-light"><a href="#">&copy; <?php echo esc_html( date_i18n( __( 'Y', 'blankslate' ) ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?></a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 text-center text-md-end text-white">
                         Designed By <a class="border-bottom" href="#"> Shyam Sankar </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->
        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top"><i class="fa fa-arrow-up"></i></a> 
 
</footer>
</div>
<?php wp_footer(); ?>
  <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo site_url(); ?>/wp-content/themes/bthinq//lib/wow/wow.min.js"></script>
    <script src="<?php echo site_url(); ?>/wp-content/themes/bthinq//lib/easing/easing.min.js"></script>
    <script src="<?php echo site_url(); ?>/wp-content/themes/bthinq//lib/waypoints/waypoints.min.js"></script>
    <script src="<?php echo site_url(); ?>/wp-content/themes/bthinq//lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?php echo site_url(); ?>/wp-content/themes/bthinq//js/main.js"></script>
</body>
</html>