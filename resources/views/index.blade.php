<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>Teab</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <!-- owl stylesheets -->
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <link rel="stylesoeet" href="css/owl.theme.default.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
      media="screen">
</head>

<body>
   <!-- header section start -->
   <div class="header_section">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="logo">
              <a href="/login">
                  <img src="logoanjay.png" style="width: 130px; height: auto;">
              </a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
              aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          {{-- <div class="login_menu">
            <a href="#"><img src="search-icon.png" alt="Search"></a>
        </div> --}}
          <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                  <a href="/login" class="nav-item nav-link" href="index.html">Home</a>
                  <a href="/login" class="nav-item nav-link" href="about.html">Comment</a>
                  <a href="/login" class="nav-item nav-link" href="contact.html">About</a>
              </div>
              <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
               <li style="position: relative;"> <!-- Tambahkan style position: relative; untuk membuat posisi absolut relatif terhadap elemen ini -->
                   <!-- Tombol untuk menampilkan opsi -->
                   @if(session()->has('email'))
                   <a href="#" class="btn btn-primary nav-link" type="button" id="user-dropdown" style="padding: 5px; background-color: rgb(255, 255, 255); border: none; margin-right: 5rem; display: inline-block; width: 50px; text-align: center; border-color:rgb(97, 150, 166)">
                     <img src="profile.png" alt="User Icon" style="max-width: 100%; height: auto;">
                     {{session('name')}}
                 </a>
                 <!-- Opsi "Profile" dan "Logout" -->
                 <div id="dropdown-options" style="display: none; position: absolute; top: 100%; left: 0; background-color: #f3801f; border: 1px solid #ccc; padding: 5px; border-radius: 6px;">
                     <a href="/profile" class="dropdown-option">Profile</a>
                     <a href="/auth/logout" class="dropdown-option">Logout</a>
                 </div>  
                 @else
                 <a href="#" class="btn btn-primary nav-link" type="button" id="user-dropdown" style="padding: 5px; background-color: rgb(255, 255, 255); border: none; margin-right: 5rem; display: inline-block; width: 50px; text-align: center; border-color:rgb(97, 150, 166)">
                   <img src="profile.png" alt="User Icon" style="max-width: 100%; height: auto;">
                   Login
               </a>
               <!-- Opsi "Profile" dan "Logout" -->
               <div id="dropdown-options" style="display: none; position: absolute; top: 100%; left: 0; background-color: #f3801f; border: 1px solid #ccc; padding: 5px; border-radius: 6px;">
                   <a href="/auth/login" class="dropdown-option">Login</a>
               </div>  
                   @endif
               </li>
           </ul>
           
           
           <script>
               document.addEventListener('DOMContentLoaded', function () {
                   var dropdownButton = document.getElementById('user-dropdown');
                   var dropdownOptions = document.getElementById('dropdown-options');
           
                   // Tambahkan event listener untuk tombol dropdown
                   dropdownButton.addEventListener('click', function (event) {
                       event.preventDefault(); // Untuk mencegah navigasi
           
                       // Toggle tampilan opsi
                       if (dropdownOptions.style.display === 'none') {
                           dropdownOptions.style.display = 'block';
                       } else {
                           dropdownOptions.style.display = 'none';
                       }
                   });
               });
           </script>
           
      
   </div>
</div>
          </div>
      </nav>
  </div>
  
      <!-- banner section end -->
      <div class="banner_section layout_padding">
         <div id="main_slider" class="carousel slide" data-ride="carousel">
             <div class="carousel-inner">
                 <div class="carousel-item active">
                     <div class="container">
                         <div class="row">
                             <div class="col-md-6">
                                 <h1 class="banner_taital">Pesan Bahan? <span style="color: #f3801f;">Disini!</span></h1>
                             </div>
                             <div class="col-md-6">
                                 <div><img src="foto_atas.png" class="image_1"></div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="carousel-item">
                     <div class="container">
                         <div class="row">
                             <div class="col-md-6">
                                 <h1 class="banner_taital">Lihat Resep? <span style="color: #f3801f;">Disini!</span></h1>
                             </div>
                             <div class="col-md-6">
                                 <div><img src="foto_atas.png" class="image_1"></div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="carousel-item">
                     <div class="container">
                         <div class="row">
                             <div class="col-md-6">
                                 <h1 class="banner_taital">Mager Belanja? <span style="color: #f3801f;">Disini!</span></h1>
                             </div>
                             <div class="col-md-6">
                                 <div><img src="foto_atas.png" class="image_1"></div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                 <i class="fa fa-angle-left"></i>
             </a>
             <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                 <i class="fa fa-angle-right"></i>
             </a>
         </div>
     </div>
     <div class="container">
         <div class="play_icon"><a href="/login"><img src="play-icon.png"></a></div>
     </div>
     
      <!-- banner section end -->
   </div>
   <!-- header section end -->
   <!-- about section start -->
   <div class="about_section layout_padding">
      <div id="my_main_slider" class="carousel slide" data-ride="carousel">
         <div class="carousel-inner">
            <div class="carousel-item active">
               <div class="container">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="about_main">
                           <h1 class="about_taital">Tentang Kami</h1>
                           <p class="about_text">Website resep dengan tata cara serta bahan yang harus digunakan paling lengkap
                           </p>
                           <div href = "/login" class="readmore_bt"><a href="/login">Read More</a></div>
                        </div>
                     </div>
                     <div class="col-md-6 ">
                        <div class="image_2"><img src="about.png"></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <div class="container">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="about_main">
                           <h1 class="about_taital">Tujuan Kami</h1>
                           <p class="about_text">Memudahkan para Ibu Ibu atau para mahasiswa untuk memasak karena tidak harus membeli bahan makanan secara terpisah
                           </p>
                           <div href = "/login" class="readmore_bt"><a href="/login">Read More</a></div>
                        </div>
                     </div>
                     <div class="col-md-6 ">
                        <div class="image_2"><img src="about.png"></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <div class="container">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="about_main">
                           <h1 class="about_taital">Kelebihan Kami</h1>
                           <p class="about_text">Efisiensi waktu untuk berbelanja bahan makanan dan juga dapat melihat resep makanan indonesia secara lengkap beserta tata cara memasaknya
                           </p>
                           <div href = "/login" class="readmore_bt"><a href="/login">Read More</a></div>
                        </div>
                     </div>
                     <div class="col-md-6 ">
                        <a class="image_2"><img src="about.png"></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <a class="carousel-control-prev" href="#my_main_slider" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i>
         </a>
         <a class="carousel-control-next" href="#my_main_slider" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i>
         </a>
      </div>
   </div>
   <!-- about section end -->
   <!-- booking section start -->
   <div class="booking_section">
      <div class="container">
         <div class="row">
            <div class="col-md-6">
               <h1 class="booking_taital">Book Now Table</h1>
               <p class="booking_text">It is a long established fact that a reader will be </p>
            </div>
            <div class="col-md-6">
               <div class="booking_bt"><a href="#">Book Table For Tea</a></div>
            </div>
         </div>
      </div>
   </div>
   <!-- booking section end -->
   <!-- services section start -->
   <div class="services_section layout_padding">
      <div class="container">
         <h1 class="services_taital">Makanan Favorit</h1>
         <p class="services_text">Makanan favorit minggu ini dengan bumbu khas Indonesia</p>
         <div class="services_section_2 layout_padding">
            <div class="row">
               <div class="col-md-6">
                  <div class="box_main active">
                     <div class="left_main">
                        <div class="cup_img_1"><img src="cup-img-1.png"></div>
                     </div>
                     <div class="middle_main">
                        <div class="border_10 active"></div>
                     </div>
                     <div class="right_main">
                        <h6 class="milk_text">Milk Tea</h6>
                        <h1 class="price_text">$10</h1>
                     </div>
                  </div>
                  <div class="box_main">
                     <div class="left_main">
                        <div class="cup_img_1"><img src="cup-img-2.png"></div>
                     </div>
                     <div class="middle_main">
                        <div class="border_10"></div>
                     </div>
                     <div class="right_main">
                        <h6 class="milk_text">Yellow Tea</h6>
                        <h1 class="price_text">$20</h1>
                     </div>
                  </div>
                  <div class="box_main">
                     <div class="left_main">
                        <div class="cup_img_1"><img src="cup-img-3.png"></div>
                     </div>
                     <div class="middle_main">
                        <div class="border_10"></div>
                     </div>
                     <div class="right_main">
                        <h6 class="milk_text">Green Tea</h6>
                        <h1 class="price_text">$20</h1>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="box_main">
                     <div class="left_main">
                        <div class="cup_img_1"><img src="cup-img-4.png"></div>
                     </div>
                     <div class="middle_main">
                        <div class="border_10"></div>
                     </div>
                     <div class="right_main">
                        <h6 class="milk_text">Red Tea</h6>
                        <h1 class="price_text">$10</h1>
                     </div>
                  </div>
                  <div class="box_main">
                     <div class="left_main">
                        <div class="cup_img_1"><img src="cup-img-5.png"></div>
                     </div>
                     <div class="middle_main">
                        <div class="border_10"></div>
                     </div>
                     <div class="right_main">
                        <h6 class="milk_text">Red Tea</h6>
                        <h1 class="price_text">$10</h1>
                     </div>
                  </div>
                  <div class="box_main">
                     <div class="left_main">
                        <div class="cup_img_1"><img src="cup-img-5.png"></div>
                     </div>
                     <div class="middle_main">
                        <div class="border_10"></div>
                     </div>
                     <div class="right_main">
                        <h6 class="milk_text">Red Tea</h6>
                        <h1 class="price_text">$10</h1>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="see_bt"><a href="/login">See More</a></div>
      </div>
   </div>
   <!-- services section end -->
   <!-- shop section start -->
   <div class="shop_section layout_padding">
      <div id="my_slider" class="carousel slide" data-ride="carousel">
         <div class="carousel-inner">
            <div class="carousel-item active">
               <div class="container">
                  <h1 class="shop_taital">Top 3 Makanan Bulan Ini</h1>
                  <p class="shop_text">Makanan paling laris dilihat oleh para user dalam bulan ini</p>
                  <div><img src="foto_awal.png" class="image_3"></div>
               </div>
            </div>
            <div class="carousel-item">
               <div class="container">
                  <h1 class="shop_taital">Top 3 Makanan Bulan Ini</h1>
                  <p class="shop_text">Makanan paling laris dilihat oleh para user dalam bulan ini/p>
                  <div><img src="foto_awal.png" class="image_3"></div>
               </div>
            </div>
            <div class="carousel-item">
               <div class="container">
                  <h1 class="shop_taital">Top 3 Makanan Bulan Ini</h1>
                  <p class="shop_text">Makanan paling laris dilihat oleh para user dalam bulan ini</p>
                  <div><img src="foto_awal.png" class="image_3"></div>
               </div>
            </div>
         </div>
         <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
            <i class="fa fa-arrow-left"></i>
         </a>
         <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
            <i class="fa fa-arrow-right" style="text-align: left;"></i>
         </a>
      </div>
   </div>
   <!-- shop section end -->
   <!-- Javascript files-->
   <script src="js/jquery.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.0.0.min.js"></script>
   <script src="js/plugin.js"></script>
   <!-- sidebar -->
   <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="js/custom.js"></script>
   <!-- javascript -->
   <script src="js/owl.carousel.js"></script>
   <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   <script>
      $(document).ready(function () {
         $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
         });

   </script>
   <script>
            $(document).ready(function () {
               // Add minus icon for collapse element which is open by default
               $(".collapse.show").each(function () {
                  $(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
               });

               // Toggle plus minus icon on show hide of collapse element
               $(".collapse").on('show.bs.collapse', function () {
                  $(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
               }).on('hide.bs.collapse', function () {
                  $(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
               });
            });
   </script>
   <script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/tiny-slider.js"></script>
		<script src="js/custom.js"></script>
</body>

</html>