<!doctype html>
<html class="no-js" lang="zxx">

<head>
<?php include('links.php');?>
</head>

<body>
   <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->
   <!-- Preloader start -->
   <div class="preloader">
      <div class="loader rubix-cube">
         <div class="layer layer-1"></div>
         <div class="layer layer-2"></div>
         <div class="layer layer-3 color-1"></div>
         <div class="layer layer-4"></div>
         <div class="layer layer-5"></div>
         <div class="layer layer-6"></div>
         <div class="layer layer-7"></div>
         <div class="layer layer-8"></div>
      </div>
   </div>
   <!-- Preloader end -->
   <!-- header area start  -->
   <?php include('header.php');?>
   <!-- Add your site or application content here -->
   <main>
      <!-- Sidebar Area Start Here  -->
      <?php 
      include('main1.php');?>
      <!-- Sidebar Area Start Here  -->
      <div class="body-overlay"></div>
      <!-- page title area  -->
      <section class="page-title-area breadcrumb-spacing" data-background="assets/img/breadcrumb/breadcrumb-bg.png">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-xxl-9">
                  <div class="page-title-wrapper text-center">
                     <h3 class="page-title mb-25">Contact</h3>
                     <div class="breadcrumb-menu">
                        <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                           <ul class="trail-items">
                              <li class="trail-item trail-begin"><a href="index.php"><span>Home</span></a></li>
                              <li class="trail-item trail-end"><span>Contact</span></li>
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- page title area end -->
      <!-- contact area  -->
      <section class="contact-area contact--area pt-120 pb-110 wow fadeInUp" data-wow-duration="1.5s"
         data-wow-delay=".3s">
         <div class="container">
            <div class="row">
               <div class="col-xxl-5 col-xl-6 col-lg-5">
                  <div class="contact--wrapper mb-60">
                     <div class="section__title mb-25">
                        <span class="sub-title">contact with us</span>
                        <h2 class="title">Speak with our consultant</h2>
                     </div>
                     <div class="contact-info mr-20">
                        <div class="single-contact-info d-flex align-items-center">
                           <div class="contact-info-icon">
                              <a href="#"><i class="flaticon-telephone-call"></i></a>
                           </div>
                           <div class="contact-info-text">
                              <span>Call us now</span>
                              <h5><a href="tel:32622266600">326 222 666 00</a></h5>
                           </div>
                        </div>
                        <div class="single-contact-info d-flex align-items-center">
                           <div class="contact-info-icon">
                              <a href="#"><i class="flaticon-envelope"></i></a>
                           </div>
                           <div class="contact-info-text">
                              <span>send email</span>
                              <h5><a href="mailto:info@webdow.com">info@webdow.com</a> </h5>
                           </div>
                        </div>
                        <div class="single-contact-info d-flex align-items-center">
                           <div class="contact-info-icon">
                              <a href="#"><i class="flaticon-pin"></i></a>
                           </div>
                           <div class="contact-info-text">
                              <span>visit office</span>
                              <h5><a
                                    href="https://www.google.com/maps/search/12%2FA,+New+Boston+Hall/@42.5515021,-79.7879305,7z/data=!3m1!4b1">New
                                    york, united states</a></h5>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xxl-7 col-xl-6 col-lg-7">
                  <div class="contact-form mb-60">
                     <form action="mail.php" id="contact-form" method="POST">
                        <div class="row">
                           <div class="col-xxl-6 col-xl-6 col-lg-6">
                              <div class="single-input-field">
                                 <input name="name" type="text" placeholder="Your Name">
                                 <i class="fas fa-user"></i>
                              </div>
                           </div>
                           <div class="col-xxl-6 col-xl-6 col-lg-6">
                              <div class="single-input-field">
                                 <input name="email" type="email" placeholder="Email Adress">
                                 <i class="fas fa-envelope"></i>
                              </div>
                           </div>
                           <div class="col-xxl-6 col-xl-6 col-lg-6">
                              <div class="single-input-field">
                                 <input name="phone" type="text" placeholder="Phone">
                                 <i class="fas fa-phone-alt"></i>
                              </div>
                           </div>
                           <div class="col-xxl-6 col-xl-6 col-lg-6">
                              <div class="single-input-field select">
                                 <select name="subject">
                                    <option selected>Select Subject</option>
                                    <option value="subject one">Subject One</option>
                                    <option value="subject two">Subject Two</option>
                                    <option value="subject three">Subject Three</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-xxl-12 col-xl-12 col-lg-12">
                              <div class="single-input-field textarea">
                                 <textarea rows="10" cols="10" placeholder="Write Massage" name="massage"></textarea>
                                 <i class="fas fa-edit"></i>
                              </div>
                           </div>
                           <div class="col-xxl-12 col-xl-12">
                              <button type="submit" class="fill-btn clip-btn">Send a message</button>
                           </div>
                        </div>
                     </form>
                     <p class="ajax-response"></p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- contact area end -->
   </main>
   <!-- footer area start  -->
   <?php include('footer.php');?>
   <!-- footer area end  -->
   <!-- back to top start -->
   <div class="progress-wrap">
      <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
         <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
      </svg>
   </div>
   <!-- back to top end -->
   <!-- JS here -->
   <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
   <script src="assets/js/vendor/waypoints.min.js"></script>
   <script src="assets/js/bootstrap.bundle.min.js"></script>
   <script src="assets/js/meanmenu.js"></script>
   <script src="assets/js/swiper-bundle.min.js"></script>
   <script src="assets/js/owl.carousel.min.js"></script>
   <script src="assets/js/magnific-popup.min.js"></script>
   <script src="assets/js/parallax.min.js"></script>
   <script src="assets/js/backToTop.js"></script>
   <script src="assets/js/jquery-ui-slider-range.js"></script>
   <script src="assets/js/nice-select.min.js"></script>
   <script src="assets/js/counterup.min.js"></script>
   <script src="assets/js/ajax-form.js"></script>
   <script src="assets/js/wow.min.js"></script>
   <script src="assets/js/isotope.pkgd.min.js"></script>
   <script src="assets/js/imagesloaded.pkgd.min.js"></script>
   <script src="assets/js/rangeslider-js.min.js"></script>
   <script src="assets/js/main.js"></script>
</body>

</html>