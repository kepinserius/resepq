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
              <a href="/beranda">
                  <img src="logoanjay.png" style="width: 130px; height: auto;">
              </a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
              aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                  <a href="/beranda" class="nav-item nav-link" href="index.html">Home</a>
                  <a href="/komentar" class="nav-item nav-link" href="about.html">Comment</a>
                  <a href="/tentang" class="nav-item nav-link" href="contact.html">About</a>
                  <a href="/keranjang" class="nav-item nav-link" href="contact.html">Keranjang</a>
              </div>
              <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
               <li style="position: relative;"> <!-- Tambahkan style position: relative; untuk membuat posisi absolut relatif terhadap elemen ini -->
                   <!-- Tombol untuk menampilkan opsi -->
                   <a href="#" class="btn btn-primary nav-link" type="button" id="user-dropdown" style="padding: 5px; background-color: rgb(255, 255, 255); display: inline-block; width: 50px; text-align: center; border-color:rgb(97, 150, 166)">
                       <img src="profile.png" alt="User Icon" style="max-width: 100%; height: auto;">
                   </a>
                   <!-- Opsi "Profile" dan "Logout" -->
                   <div id="dropdown-options" style="display: none; position: absolute; top: 100%; left: 0; background-color: #f3801f; border: 1px solid #ccc; padding: 5px; border-radius: 6px;">
                       <a href="/profile" class="dropdown-option">Profile</a>
                       <a href="/" class="dropdown-option">Logout</a>
                   </div>
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
   </div>
   <!-- header section end -->
    
   <!-- booking section start -->
   <div class="banner_section">
      <div class="container">
          <div class="banner_content">
             <h1>Selamat datang di Resep'Q</h1>
              <p>Selamat berbelanja dan menikmati resep kami</p>
              <img src="berandaatas.png" alt="Gambar">
          </div>
      </div>
  </div>
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
         <div class="services_section_2 layout_padding">
            <div class="row">
               <div class="col-md-6">
                  <a href="/detail" class="box_main">
                     <div class="left_main">
                         <div class="cup_img_1"><img src="bolaudang.png"></div>
                     </div>
                     <div class="middle_main">
                         <div class="border_10 active"></div>
                     </div>
                     <div class="right_main">
                         <h6 class="milk_text">Bola Udang</h6>
                         <h1 class="price_text">15k</h1>
                     </div>
                 </a>
                 
                  <a href="/detail" class="box_main">
                     <div class="left_main">
                        <div class="cup_img_1"><img src="ayamgoreng.png"></div>
                     </div>
                     <div class="middle_main">
                        <div class="border_10"></div>
                     </div>
                     <div class="right_main">
                        <h6 class="milk_text">Ayam Goreng</h6>
                        <h1 class="price_text">15k</h1>
                     </div>
                  </a>
                  <a href="/detail" class="box_main">
                     <div class="left_main">
                        <div class="cup_img_1"><img src="corndog.png"></div>
                     </div>
                     <div class="middle_main">
                        <div class="border_10"></div>
                     </div>
                     <div class="right_main">
                        <h6 class="milk_text">Corndog</h6>
                        <h1 class="price_text">13k</h1>
                     </div>
                  </a>
               </div>
               <div class="col-md-6">
                  <a href="/detail" class="box_main">
                     <div class="left_main">
                        <div class="cup_img_1"><img src="nasigorengayam.png"></div>
                     </div>
                     <div class="middle_main">
                        <div class="border_10"></div>
                     </div>
                     <div class="right_main">
                        <h6 class="milk_text">Nasi Goreng</h6>
                        <h1 class="price_text">15k</h1>
                     </div>
                  </a>
                  <a href="/detail" class="box_main">
                     <div class="left_main">
                        <div class="cup_img_1"><img src="lumpia.png"></div>
                     </div>
                     <div class="middle_main">
                        <div class="border_10"></div>
                     </div>
                     <div class="right_main">
                        <h6 class="milk_text">Lumpia</h6>
                        <h1 class="price_text">12k</h1>
                     </div>
                  </a>
                  <a href="/detail" class="box_main">
                     <div class="left_main">
                        <div class="cup_img_1"><img src="ayambakar.png"></div>
                     </div>
                     <div class="middle_main">
                        <div class="border_10"></div>
                     </div>
                     <div class="right_main">
                        <h6 class="milk_text">Ayam Bakar</h6>
                        <h1 class="price_text">20k</h1>
                     </div>
                  </a>
               </div>
            </div>
         </div>
         <div class="see_bt"><a href="/shop">Lihat Lainnya</a></div>
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
                  <div><img src="pancake.png" class="image_3"></div>
               </div>
            </div>
            <div class="carousel-item">
               <div class="container">
                  <h1 class="shop_taital">Top 3 Makanan Bulan Ini</h1>
                  <p class="shop_text">Makanan paling laris dilihat oleh para user dalam bulan ini/p>
                  <div><img src="burger.png" class="image_3"></div>
               </div>
            </div>
            <div class="carousel-item">
               <div class="container">
                  <h1 class="shop_taital">Top 3 Makanan Bulan Ini</h1>
                  <p class="shop_text">Makanan paling laris dilihat oleh para user dalam bulan ini</p>
                  <div><img src="nasitelur.png" class="image_3"></div>
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

        // <!-- Start Footer Section -->
		<footer class="footer-section" style="padding-bottom: 0.5px;">
			<div class="border-top copyright">
			<div class="container relative">

				<div class="row">
					<div class="col-lg-8">
					</div>
				</div>

				<div class="row g-5 mb-5">
					<div class="col-lg-4">
						<a class="navbar-brand" href="/beranda"><img src="logoanjay.png" alt="Logo Wedding" style="height: auto; width: auto; max-height: 150px; max-width: 200px;"></a>
					</div>

					<div class="col-lg-8">
						<div class="row links-wrap">
							<div class="col-6 col-sm-6 col-md-3">
							</div>														
							<div class="col-6 col-sm-6 col-md-3" style="display: flex; justify-content: flex-end;">
								<ul class="list-unstyled">
									<li style="margin-top: 80px;" > © 2024 Resep'Q. <span style="display: block; margin-top: 1px;">All Rights Reserved. </span></li>
								</ul>
							</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
</body>

</html>