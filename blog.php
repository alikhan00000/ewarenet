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
                     <h3 class="page-title mb-25">Blog</h3>
                     <div class="breadcrumb-menu">
                        <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                           <ul class="trail-items">
                              <li class="trail-item trail-begin"><a href="index.php"><span>Home</span></a></li>
                              <li class="trail-item trail-end"><span>Blog</span></li>
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- page title area end -->
      <!-- postbox area start -->
      <div class="postbox-area pt-120 pb-60">
         <div class="container">
            <div class="row">
               <div class="col-lg-8">
                  <div class="postbox__wrapper pb-60">
                     <article class="postbox__item format-image mb-70">
                        <div class="postbox__thumb w-img mb-35">
                           <a href="blog-details.php">
                              <img src="assets/img/blog/blog-page-img-1.jpg" alt="blog-thumg">
                           </a>
                        </div>
                        <div class="postbox__content">
                           <div class="postbox__meta mb-10">
                              <div class="blog__meta">
                                 <span> <a href="#"><i class="fas fa-user"></i> Hunhu La.</a></span>
                                 <span><i class="fas fa-alarm-clock"></i> Aug 10,2022</span>
                                 <span><a href="blog-details.php"><i class="fas fa-comments"></i>5 comments</a></span>
                              </div>
                           </div>
                           <h3 class="postbox__title mb-20">
                              <a href="blog-details.php">Need an emergency car service. </a>
                           </h3>
                           <div class="postbox__text mb-25">
                              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                 laudantium, aperiam ipsquae ab illo inventore veritatis et quasi architecto beatae
                                 vitae dicta sunt explicabo. Nemo enim voluptatem voluptas sit aspernatur aut odit aut
                                 fugit...</p>
                           </div>
                           <div class="postbox__read-more">
                              <a href="blog-details.php" class="fill-btn clip-btn">Reade more</a>
                           </div>
                        </div>
                     </article>
                     <article class="postbox__item format-image mb-70">
                        <div class="postbox__thumb postbox-active swiper-container w-img p-relative mb-35">
                           <div class="swiper-wrapper">
                              <div class="postbox__slider-item swiper-slide">
                                 <img src="assets/img/blog/blog-page-img-2.jpg" alt="Blog">
                              </div>
                              <div class="postbox__slider-item swiper-slide">
                                 <img src="assets/img/blog/blog-page-img-3.jpg" alt="|Blog">
                              </div>
                              <div class="postbox__slider-item swiper-slide">
                                 <img src="assets/img/blog/blog-page-img-1.jpg" alt="Blog">
                              </div>
                           </div>
                           <div class="postbox-nav">
                              <button class="postbox-slider-button-next"><i
                                    class="fas fa-long-arrow-right"></i></button>
                              <button class="postbox-slider-button-prev"><i class="fas fa-long-arrow-left"></i></button>
                           </div>
                        </div>
                        <div class="postbox__content">
                           <div class="postbox__meta mb-10">
                              <div class="blog__meta">
                                 <span> <a href="#"><i class="fas fa-user"></i> Hunhu La.</a></span>
                                 <span><i class="fas fa-alarm-clock"></i> Aug 10,2022</span>
                                 <span><a href="blog-details.php"><i class="fas fa-comments"></i>5 comments</a></span>
                              </div>
                           </div>
                           <h3 class="postbox__title mb-20">
                              <a href="blog-details.php">Lavoratories used for scientic reseach take many froms.</a>
                           </h3>
                           <div class="postbox__text mb-25">
                              <p>Laboratories used for scientific research take many forms because of the differing
                                 requirements of specialists in the various fields of science and engineering. A physics
                                 laboratory</p>
                           </div>
                           <div class="postbox__read-more">
                              <a href="blog-details.php" class="fill-btn clip-btn">read more</a>
                           </div>
                        </div>
                     </article>
                     <article class="postbox__item format-video mb-70">
                        <div class="postbox__thumb postbox__video p-relative w-img mb-35">
                           <a href="blog-details.php">
                              <img src="assets/img/blog/blog-page-img-3.jpg" alt="postbox__thumb">
                           </a>
                           <a href="https://www.youtube.com/watch?v=4U5WBzqYbnc" class="play-btn popup-video"><i
                                 class="fas fa-play"></i></a>
                        </div>
                        <div class="postbox__content">
                           <div class="postbox__meta mb-10">
                              <div class="blog__meta">
                                 <span> <a href="#"><i class="fas fa-user"></i> Hunhu La.</a></span>
                                 <span><i class="fas fa-alarm-clock"></i> Aug 10,2022</span>
                                 <span><a href="blog-details.php"><i class="fas fa-comments"></i>5 comments</a></span>
                              </div>
                           </div>
                           <h3 class="postbox__title mb-20">
                              <a href="blog-details.php">Four Ways to Fullfill Your Task For Makes Parents Happy and
                                 Healthy</a>
                           </h3>
                           <div class="postbox__text mb-25">
                              <p>Compellingly exploit B2B vortals with emerging total linkage. Appropriately pursue
                                 strategic leadership whe intermandated ideas. Proactively revolutionize interoperable
                                 "outside the box" thinking with fully researched innovation. Dramatically facilitate
                                 exceptional architectures and bricks-and-clicks data. Progressively genera extensible
                                 e-services for.</p>
                           </div>
                           <div class="postbox__read-more">
                              <a href="blog-details.php" class="fill-btn clip-btn">read more</a>
                           </div>
                        </div>
                     </article>
                     <div class="basic-pagination">
                        <nav>
                           <ul>
                              <li>
                                 <a href="blog.php">
                                    <i class="fas fa-long-arrow-left"></i>
                                 </a>
                              </li>
                              <li>
                                 <a href="blog.php">1</a>
                              </li>
                              <li>
                                 <span class="current">2</span>
                              </li>
                              <li>
                                 <a href="blog.php">3</a>
                              </li>
                              <li>
                                 <a href="blog.php">...</a>
                              </li>
                              <li>
                                 <a href="blog.php">
                                    <i class="fas fa-long-arrow-right"></i>
                                 </a>
                              </li>
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="blog__sidebar-wrapper pb-60">
                     <div class="sidebar__widget mb-40">
                        <div class="sidebar__widget-content">
                           <h3 class="sidebar__widget-title mb-25">Search</h3>
                           <div class="sidebar__search">
                              <form action="#">
                                 <div class="single-input-field">
                                    <input name="name" type="text" placeholder="Search Here">
                                    <i class="fas fa-search"></i>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                     <div class="sidebar__widget mb-40">
                        <h3 class="sidebar__widget-title mb-25">Category</h3>
                        <div class="sidebar__widget-content">
                           <ul>
                              <li><a href="blog-details.php">Chemistry<span>03</span></a></li>
                              <li><a href="blog-details.php">Forensic science <span>07</span></a></li>
                              <li><a href="blog-details.php">Gemological <span>09</span></a></li>
                              <li><a href="blog-details.php">Covid Analysis <span>01</span></a></li>
                              <li><a href="blog-details.php">Becteriology <span>00</span></a></li>
                              <li><a href="blog-details.php">Angiosperm <span>26</span></a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="sidebar__widget mb-40">
                        <h3 class="sidebar__widget-title mb-25">Recent Post</h3>
                        <div class="sidebar__widget-content">
                           <div class="sidebar__post rc__post">
                              <div class="rc__post mb-20">
                                 <div class="rc__post-thumb">
                                    <a href="blog-details.php"><img src="assets/img/blog/b-1.jpg"
                                          alt="blog-sidebar"></a>
                                 </div>
                                 <div class="rc__post-content">
                                    <div class="rc__meta">
                                       <span>4 March. 2022</span>
                                    </div>
                                    <h3 class="rc__post-title">
                                       <a href="blog-details.php">Don't Underestimate Tree for Medicine</a>
                                    </h3>
                                 </div>
                              </div>
                              <div class="rc__post mb-20">
                                 <div class="rc__post-thumb">
                                    <a href="blog-details.php"><img src="assets/img/blog/b-2.jpg"
                                          alt="blog-sidebar"></a>
                                 </div>
                                 <div class="rc__post-content">
                                    <div class="rc__meta">
                                       <span>12 February. 2022</span>
                                    </div>
                                    <h3 class="rc__post-title">
                                       <a href="blog-details.php">Equipping Researchers in the Developing World</a>
                                    </h3>
                                 </div>
                              </div>
                              <div class="rc__post mb-20">
                                 <div class="rc__post-thumb">
                                    <a href="blog-details.php"><img src="assets/img/blog/b-3.jpg"
                                          alt="blog-sidebar"></a>
                                 </div>
                                 <div class="rc__post-content">
                                    <div class="rc__meta">
                                       <span>14 January. 2022</span>
                                    </div>
                                    <h3 class="rc__post-title">
                                       <a href="blog-details.php">Role of Genetics in treating Heigh-grade glioma</a>
                                    </h3>
                                 </div>
                              </div>
                              <div class="rc__post">
                                 <!-- <div class="rc__post-thumb">
                                       <a href="blog-details.php"><img src="assets/img/blog/sidebar/blog-sm-4.jpg" alt="blog-sidebar"></a>
                                       </div> -->
                                 <div class="rc__post-content">
                                    <div class="rc__meta">
                                       <span>18 March. 2021</span>
                                    </div>
                                    <h3 class="rc__post-title">
                                       <a href="blog-details.php">Research And Verify of a Covid-19 Virus</a>
                                    </h3>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="sidebar__widget">
                        <h3 class="sidebar__widget-title mb-25">Popular Tag</h3>
                        <div class="sidebar__widget-content">
                           <div class="tagcloud">
                              <a href="blog-details.php">Covid-19</a>
                              <a href="blog-details.php">Gene</a>
                              <a href="blog-details.php">Test</a>
                              <a href="blog-details.php">Lab</a>
                              <a href="blog-details.php">data</a>
                              <a href="blog-details.php">Virus</a>
                              <a href="blog-details.php">Pandemic </a>
                              <a href="blog-details.php">Symptoms</a>
                              <a href="blog-details.php">Medicine</a>
                              <a href="blog-details.php">Bacteria</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- postbox area end -->
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