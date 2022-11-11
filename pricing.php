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
                     <h3 class="page-title mb-25">Pricing</h3>
                     <div class="breadcrumb-menu">
                        <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                           <ul class="trail-items">
                              <li class="trail-item trail-begin"><a href="index.php"><span>Home</span></a></li>
                              <li class="trail-item trail-end"><span>Pricing</span></li>
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- page title area end -->
      <!-- Pricing Table Start Here  -->
      <section class="pricing__area grey-bg pt-120 pb-85">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-lg-7">
                  <div class="section__title mb-55 text-center ">
                     <span class="sub-title">Pricing Table</span>
                     <h2 class="title">choose your best plan</h2>
                  </div>
                  <div class="pricing-tab mb-75">
                     <ul class="nav nav-tabs justify-content-center" id="priceTab" role="tablist">
                        <li class="nav-item" role="presentation">
                           <button class="nav-link active" id="monthly-tab" data-bs-toggle="tab"
                              data-bs-target="#monthly" type="button" role="tab" aria-controls="monthly"
                              aria-selected="true">monthly</button>
                        </li>
                        <li class="nav-item" role="presentation">
                           <button class="nav-link" id="yearly-tab" data-bs-toggle="tab" data-bs-target="#yearly"
                              type="button" role="tab" aria-controls="yearly" aria-selected="false">yearly</button>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="tab-content" id="priceTabContent">
               <div class="tab-pane fade active show" id="monthly" role="tabpanel" aria-labelledby="monthly-tab">
                  <div class="row">
                     <div class="col-xl-3 col-md-6">
                        <div class="pricing__box mb-50">
                           <div class="pricing__header">
                              <h4 class="pricing__package-name">Startup Plan</h4>
                              <span class="pricing__package-price"> <span class="pricing__package-currency">$</span> 39
                                 <span class="pricing__package-period">.99</span> </span>
                           </div>
                           <div class="pricing__content">
                              <div class="pricing__features-list">
                                 <ul>
                                    <li>5 Email Account</li>
                                    <li>100 GB Data Transfer</li>
                                    <li>10 Download File</li>
                                    <li>Free Domain Transfer</li>
                                    <li>2 Sub Domain</li>
                                    <li>100 GB Cloud Storage</li>
                                 </ul>
                              </div>
                              <div class="pricing__btn lh-1">
                                 <a href="contact.php" class="fill-btn clip-btn">Get Started</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-3 col-md-6">
                        <div class="pricing__box active mb-50">
                           <div class="pricing__header">
                              <div class="pricing__badge">
                                 <span>Popular</span>
                              </div>
                              <h4 class="pricing__package-name">Business Plan</h4>
                              <span class="pricing__package-price"> <span class="pricing__package-currency">$</span> 59
                                 <span class="pricing__package-period">.99</span> </span>
                           </div>
                           <div class="pricing__content">
                              <div class="pricing__features-list">
                                 <ul>
                                    <li>5 Email Account</li>
                                    <li>100 GB Data Transfer</li>
                                    <li>10 Download File</li>
                                    <li>Free Domain Transfer</li>
                                    <li>2 Sub Domain</li>
                                    <li>100 GB Cloud Storage</li>
                                 </ul>
                              </div>
                              <div class="pricing__btn lh-1">
                                 <a href="contact.php" class="fill-btn clip-btn">Get Started</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-3 col-md-6">
                        <div class="pricing__box mb-50">
                           <div class="pricing__header">
                              <h4 class="pricing__package-name">Enterprise Plan</h4>
                              <span class="pricing__package-price"> <span class="pricing__package-currency">$</span> 69
                                 <span class="pricing__package-period">.99</span> </span>
                           </div>
                           <div class="pricing__content">
                              <div class="pricing__features-list">
                                 <ul>
                                    <li>5 Email Account</li>
                                    <li>100 GB Data Transfer</li>
                                    <li>10 Download File</li>
                                    <li>Free Domain Transfer</li>
                                    <li>2 Sub Domain</li>
                                    <li>100 GB Cloud Storage</li>
                                 </ul>
                              </div>
                              <div class="pricing__btn lh-1">
                                 <a href="contact.php" class="fill-btn clip-btn">Get Started</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-3 col-md-6">
                        <div class="pricing__box mb-50">
                           <div class="pricing__header">
                              <h4 class="pricing__package-name">Extra Enterprise Plan</h4>
                              <span class="pricing__package-price"> <span class="pricing__package-currency">$</span> 79
                                 <span class="pricing__package-period">.99</span> </span>
                           </div>
                           <div class="pricing__content">
                              <div class="pricing__features-list">
                                 <ul>
                                    <li>5 Email Account</li>
                                    <li>100 GB Data Transfer</li>
                                    <li>10 Download File</li>
                                    <li>Free Domain Transfer</li>
                                    <li>2 Sub Domain</li>
                                    <li>100 GB Cloud Storage</li>
                                 </ul>
                              </div>
                              <div class="pricing__btn lh-1">
                                 <a href="contact.php" class="fill-btn clip-btn">Get Started</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane fade" id="yearly" role="tabpanel" aria-labelledby="yearly-tab">
                  <div class="row">
                     <div class="col-xl-3">
                        <div class="pricing__box mb-50">
                           <div class="pricing__header">
                              <h4 class="pricing__package-name">Startup Plan</h4>
                              <span class="pricing__package-price"> <span class="pricing__package-currency">$</span> 89
                                 <span class="pricing__package-period">.99</span> </span>
                           </div>
                           <div class="pricing__content">
                              <div class="pricing__features-list">
                                 <ul>
                                    <li>5 Email Account</li>
                                    <li>100 GB Data Transfer</li>
                                    <li>10 Download File</li>
                                    <li>Free Domain Transfer</li>
                                    <li>2 Sub Domain</li>
                                    <li>100 GB Cloud Storage</li>
                                 </ul>
                              </div>
                              <div class="pricing__btn lh-1">
                                 <a href="#" class="fill-btn clip-btn">Get Started</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-3">
                        <div class="pricing__box mb-50">
                           <div class="pricing__header">
                              <h4 class="pricing__package-name">Business Plan</h4>
                              <span class="pricing__package-price"> <span class="pricing__package-currency">$</span> 109
                                 <span class="pricing__package-period">.99</span> </span>
                           </div>
                           <div class="pricing__content">
                              <div class="pricing__features-list">
                                 <ul>
                                    <li>5 Email Account</li>
                                    <li>100 GB Data Transfer</li>
                                    <li>10 Download File</li>
                                    <li>Free Domain Transfer</li>
                                    <li>2 Sub Domain</li>
                                    <li>100 GB Cloud Storage</li>
                                 </ul>
                              </div>
                              <div class="pricing__btn lh-1">
                                 <a href="#" class="fill-btn clip-btn">Get Started</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-3">
                        <div class="pricing__box active mb-50">
                           <div class="pricing__header">
                              <div class="pricing__badge">
                                 <span>Popular</span>
                              </div>
                              <h4 class="pricing__package-name">Enterprise Plan</h4>
                              <span class="pricing__package-price"> <span class="pricing__package-currency">$</span> 119
                                 <span class="pricing__package-period">.99</span> </span>
                           </div>
                           <div class="pricing__content">
                              <div class="pricing__features-list">
                                 <ul>
                                    <li>5 Email Account</li>
                                    <li>100 GB Data Transfer</li>
                                    <li>10 Download File</li>
                                    <li>Free Domain Transfer</li>
                                    <li>2 Sub Domain</li>
                                    <li>100 GB Cloud Storage</li>
                                 </ul>
                              </div>
                              <div class="pricing__btn lh-1">
                                 <a href="#" class="fill-btn clip-btn">Get Started</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-3">
                        <div class="pricing__box mb-50">
                           <div class="pricing__header">
                              <h4 class="pricing__package-name">Extra Enterprise Plan</h4>
                              <span class="pricing__package-price"> <span class="pricing__package-currency">$</span> 159
                                 <span class="pricing__package-period">.99</span> </span>
                           </div>
                           <div class="pricing__content">
                              <div class="pricing__features-list">
                                 <ul>
                                    <li>5 Email Account</li>
                                    <li>100 GB Data Transfer</li>
                                    <li>10 Download File</li>
                                    <li>Free Domain Transfer</li>
                                    <li>2 Sub Domain</li>
                                    <li>100 GB Cloud Storage</li>
                                 </ul>
                              </div>
                              <div class="pricing__btn lh-1">
                                 <a href="#" class="fill-btn clip-btn">Get Started</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Pricing Table End Here  -->
      <!-- testimonial-area-start -->
      <section class="testimonial-area pb-100 pt-120 bg-css wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s"
         data-background="assets/img/testimonial/testimonial-bg.png">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-xl-5">
                  <div class="section__title text-center mb-35">
                     <span class="sub-title">testimonials</span>
                     <h2 class="title">user feedbacks</h2>
                  </div>
               </div>
            </div>
            <!-- Slider main container -->
            <div class="testimonial-box">
               <div class="swiper-container testimonial-active testimonial-one">
                  <!-- Additional required wrapper -->
                  <div class="swiper-wrapper">
                     <!-- Slides -->
                     <div class="swiper-slide">
                        <div class="testimonial-shadow">
                           <div class="testimonial-items">
                              <div class="testimonial__icon rate">
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                              </div>
                              <div class="testimonial__text">
                                 <p>“ It is a long established fact that a reader will be distracted by the readable
                                    content of a page when”</p>
                              </div>
                              <div class="testimonial__auth">
                                 <div class="testimonial__auth-img f-left mr-20">
                                    <img src="assets/img/testimonial/auth-1.png" alt="Testimonial">
                                 </div>
                                 <div class="testimonial__auth-text fix">
                                    <h4>Oliver D. Dummer</h4>
                                    <span>General manager</span>
                                 </div>
                              </div>
                              <div class="testimonial__quote-icon quote">
                                 <i class="fas fa-quote-left"></i>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="testimonial-shadow">
                           <div class="testimonial-items">
                              <div class="testimonial__icon rate">
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                              </div>
                              <div class="testimonial__text">
                                 <p>“ more recently with desktop publishing software like Aldus PageMaker including
                                    versions of.”</p>
                              </div>
                              <div class="testimonial__auth">
                                 <div class="testimonial__auth-img f-left mr-20">
                                    <img src="assets/img/testimonial/auth-2.png" alt="Testimonial">
                                 </div>
                                 <div class="testimonial__auth-text fix">
                                    <h4>Miranda Helson</h4>
                                    <span>Head Of Idea</span>
                                 </div>
                              </div>
                              <div class="testimonial__quote-icon quote">
                                 <i class="fas fa-quote-left"></i>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="testimonial-shadow">
                           <div class="testimonial-items">
                              <div class="testimonial__icon rate">
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                              </div>
                              <div class="testimonial__text">
                                 <p>“Those who do not know how to pursu pleasure snall encounter consequence that are
                                    extre.”</p>
                              </div>
                              <div class="testimonial__auth">
                                 <div class="testimonial__auth-img f-left mr-20">
                                    <img src="assets/img/testimonial/auth-3.png" alt="Testimonial">
                                 </div>
                                 <div class="testimonial__auth-text fix">
                                    <h4>Dewey M. Lewis</h4>
                                    <span>ceo</span>
                                 </div>
                              </div>
                              <div class="testimonial__quote-icon quote">
                                 <i class="fas fa-quote-left"></i>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Testimonial Area End Here -->
   </main>
   <!-- footer area start  -->
   <?php include('footer.php');?>
   <!-- footer area end  -->
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