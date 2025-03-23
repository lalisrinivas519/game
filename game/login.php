<!doctype html>
<html class="no-js scroll-smooth" lang="en">
   <head>
      <title>Login</title>
   </head>
   <?php include("php_include/head.php"); ?>
   <body>
      <!-- scroll-top done -->
      <button class="scroll__top scroll-to-target w-[45px] h-[45px] leading-[45px] fixed bottom-[-10%] text-xl z-[99] text-[#201f2a] text-center cursor-pointer transition-[0.8s] duration-500 rounded-[3px] border-[none] right-[50px] bg-[#45f882] after:absolute after:z-[-1] after:content-[''] after:h-2.5 after:w-[90%] after:opacity-100 after:left-[5%] after:top-full after:bg-[radial-gradient(ellipse_at_center,rgba(0,0,0,0.25)0%,rgba(0,0,0,0)80%)]  hover:text-[#201f2a] hover:bg-[#ffbe18]    
         lg:w-10 lg:h-10 lg:leading-10 lg:text-center lg:right-[30px] lg:text-[18px]
         md:w-[35px] md:h-[35px] md:leading-[35px] md:text-center md:right-[25px] md:text-[18px]
         sm:w-[30px] sm:h-[30px] sm:leading-[30px] sm:text-center sm:text-[16px] sm:right-[15px]
         xsm:w-[30px] xsm:h-[30px] xsm:leading-[30px] xsm:text-center xsm:text-[16px] xsm:right-[15px]
         " data-target="html">
      <i class="flaticon-right-arrow -rotate-90"></i>
      </button>
      <!-- scroll-top-end-->
      <!-- header-area done -->
      <?php include("php_include/header.php"); ?>
      <!-- header-area-end -->
      <!-- main-area -->
      <main class="main--area overflow-x-hidden">
         <!-- breadcrumb-area done -->
         
         <!-- breadcrumb-area-end -->
         <!-- services-area done -->
         <section class="services-area services__bg-color pt-[120px] pb-[120px] bg-[#040608]">
            <div class="container">
               <div class="services-row flex flex-wrap mx-[-15px]">
                  <div class="w-6/12 basis-6/12 xl:w-6/12 xl:basis-6/12 lg:w-6/12 lg:basis-6/12 md:w-full md:basis-full sm:w-full sm:basis-full xsm:w-full xsm:basis-full relative px-[15px]">
                     <div class="login-page__wrap">
                        <br> <br> <br>
                        <div style="text-align: center; margin-bottom: 20px;">
                           <h5 class="login-page__wrap__title" style="margin-bottom: 20px;">Login Here!</h5>
                           <br>
                           <form class="login-page__form" method="POST" action="login_process.php" style="display: flex; flex-direction: column; align-items: center; width: 100%; max-width: 290px; margin: 0 auto;">
                              <div class="form-group mb-4" style="width: 100%;">
                                 <input type="text" name="userid" placeholder="Enter Userid" style="width: 100%; padding: 10px; border-radius: 25px; border: 1px solid #ccc; box-sizing: border-box;" required>
                              </div>
							  <div class="form-group mb-4" style="width: 100%;">
                                 <input type="password" name="password" placeholder="Enter Password" style="width: 100%; padding: 10px; border-radius: 25px; border: 1px solid #ccc; box-sizing: border-box;" required>
                              </div>
							  <a href="forgot_password.php">Forgot Password?</a>
							  <div style="text-align: center; width: 150px;">
                                 <button type="submit" name="submit" style="background-color: #45f882; color: #ffffff; border: none; padding: 10px 20px; border-radius: 25px; font-size: 16px; cursor: pointer; transition: background-color 0.3s ease; width: 100%;" onmouseover="this.style.backgroundColor='#34d974'" onmouseout="this.style.backgroundColor='#45f882'">
                                 Submit
                                 </button>
                              </div>
                              <div style="text-align: center; margin-top: 16px; width: 100%;">
                                 <p class="mb-0" style="margin: 0;">Don't Have an Account? <a class="link style1" href="register.php" style="color: #45f882; text-decoration: none;">Register</a></p>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
                  <!-- Image Gallery Section -->
                  <div class="w-6/12 basis-6/12 xl:w-6/12 xl:basis-6/12 lg:w-6/12 lg:basis-6/12 md:w-full md:basis-full sm:w-full sm:basis-full xsm:w-full xsm:basis-full relative px-[15px]">
                     <div class="services__images relative h-[681px] ml-9 mr-0 mt-0 mb-[30px] md:m-[70px_0_30px_0] sm:h-[360px] xsm:h-[360px] lg:h-[490px] lg:m-[0_0_30px_20px] sm:m-[70px_0_30px_0] xsm:m-[70px_0_30px_0]">
                        <div class="services__images-item absolute w-full h-full transition-all duration-[0.1s] ease-[ease-in-out] z-[1] right-0 top-0 active">
                           <img class="w-full object-cover h-full animate-[defaultInset_0.8s_forwards_ease] clip-path-inset[0_100%_0_0]" src="images/l.jpg" alt="img">
                        </div>
                        <!-- Repeat for other images... -->
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- services-area-end -->
      </main>
      
      <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
      <script src="assets/js/jquery.magnific-popup.min.js"></script>
      <script src="assets/js/jquery.countdown.min.js"></script>
      <script src="assets/js/jquery.waypoints.min.js"></script>
      <script src="assets/js/jquery.odometer.min.js"></script>
      <script src="assets/js/simpleParallax.min.js"></script>
      <script src="assets/js/jquery-ui.min.js"></script>
      <script src="assets/js/gsap.min.js"></script>
      <script src="assets/js/scrollTrigger.min.js"></script>
      <script src="assets/js/splitText.min.js"></script>
      <script src="assets/js/jquery.appear.js"></script>
      <script src="assets/js/tg-cursor.min.js"></script>
      <script src="assets/js/swiper-bundle.js"></script>
      <script src="assets/js/jarallax.min.js"></script>
      <script src="assets/js/parallax.min.js"></script>
      <script src="assets/js/slick.min.js"></script>
      <script src="assets/js/ajax-form.js"></script>
      <script src="assets/js/vivus.min.js"></script>
      <script src="assets/js/wow.min.js"></script>
      <script src="assets/js/flowbite.min.js"></script>
      <script src="assets/js/main.js"></script>
   </body>
</html>
