    <!-- ======= Footer ======= -->
    <footer id="footer" class="section-bg">
    <div class="footer-top">
      <div class="container">

        <div class="row">

          <div class="col-lg-12">

            <div class="row">

                            <div class="col-sm-6">

                            <div class="footer-info" style="max-width: 300px">
                                <h3> Learnhub</h3>
                                <p><?= $setting['meta_description'] ?></p>
                            </div>

              </div>

              <div class="col-sm-3">
                <div class="footer-links">
                    <h4>Liên kết hữu ích</h4>
                    <ul>
                        <li><a href="/home" >Home</a></li>
                        <li><a href="/aboutus">About us</a></li>
                        <li><a href="/course">Courses</a></li>
                        <li><a href="#">Terms of service</a></li>
                        <li><a href="#">Privacy policy</a></li>
                    </ul>
                </div>
              </div>
              <div class="col-sm-3">
                    <div class="footer-links" style="max-width: 200px">
                        <h4>Liên hệ với chúng tôi</h4>
                        <p>
                            <strong>Address:</strong> <?= $setting['contact_address'] ?><br>
                            <strong>Phone:</strong> <?= $setting['contact_phone'] ?><br>
                            <strong>Email:</strong> <?= $setting['contact_email'] ?><br>
                        </p>
                    </div>
                    <div class="social-links">
                        <a href="#" class="twitter ml-5 mr-5"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook ml-5 mr-5"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram ml-5 mr-5"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="linkedin ml-5 mr-5"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>
            

          </div>

          

        </div>

      </div>
    </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><?= $setting['logo_url'] ?></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Rapid
      -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End  Footer -->

    <a href="#header" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= PATH_URL ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= PATH_URL ?>plugins/purecounter/purecounter_vanilla.js"></script>
    <script src="<?= PATH_URL ?>plugins/aos/aos.js"></script>
    <script src="<?= PATH_URL ?>plugins/glightbox/js/glightbox.min.js"></script>
    <script src="<?= PATH_URL ?>plugins/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= PATH_URL ?>plugins/swiper/swiper-bundle.min.js"></script>
    <script src="<?= PATH_URL ?>plugins/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= PATH_URL ?>js/main.js"></script>

    </body>

    </html>