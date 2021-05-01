<!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-12 form-group">
            <div class="footer-info">
              <h3>Medicio</h3>
              <p>
A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-12 form-group footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-12 form-group footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-12 form-group footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <!-- 
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
            -->

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Medicio</span></strong>. All Rights Reserved
</div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medicio-free-bootstrap-theme/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- REGISTER COVID MODAL -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
          <a href="index.php"><img src="assets/img/logo.png" alt=""></a>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body co_test">
       <section id="appointment" class="appointment section-bg">
      <div class="container aos-init aos-animate" data-aos="fade-up">

        <div class="section-title">
          <h2>Register Covid Test</h2>
        </div>

        <form action="{{route('register')}}" method="post" role="form" class="php-email-form aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
          <div class="form-row">
            <div class="col-md-12 form-group form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter Your Name">
              <div class="validate"></div>
            </div>
            <div class="col-md-12 form-group form-group">
              <input type="text" class="form-control" name="father_name" id="fa_name" placeholder="Father Name" data-msg="Please enter Father Name">
              <div class="validate"></div>
            </div>
            <div class="col-md-12 form-group form-group">
              <input type="text" class="form-control" name="mother_name" id="ma_name" placeholder="Mother Name" data-msg="Please enter Mother Name">
              <div class="validate"></div>
            </div>
            <div class="col-md-12 form-group form-group">
              <input type="date" class="form-control" name="dob" id="dob" placeholder="Date of Birth" data-msg="Please enter Date of Birth">
              <div class="validate"></div>
            </div>
            <div class="col-md-12 form-group form-group">
              <input type="tel" class="form-control" name="contact" id="phone" placeholder="Contact" data-rule="minlen:4" data-msg="Please enter Contact">
              <div class="validate"></div>
            </div>
            <div class="col-md-12 form-group form-group">
              <input type="text" class="form-control" name="nid" id="nid" placeholder="NID Number" data-rule="minlen:4" data-msg="Please enter NID Number">
              <div class="validate"></div>
            </div>
            <div class="col-md-12 form-group form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="minlen:4" data-msg="Please enter valid email">
              <div class="validate"></div>
            </div>

          </div>

          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
          </div>
            <input type="hidden" name="_token" value="{{csrf_token()}}">
          <div class="text-center"><button type="submit">Register</button></div>
        </form>

      </div>
    </section>
      </div>
    </div>
  </div>
</div>

  <!-- END REGISTER COVID MODAL -->

 
  <input value="{{ URL::to('/') }}" type="hidden" name="base_url" id="base_url">

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="{{asset('backend')}}/plugins/jquery-ui/jquery-ui.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  @yield('scripts')

</body>

</html>
