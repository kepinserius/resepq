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
   <title>Resep'Q</title>
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
   <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
      
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
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
      </nav>
  </div>
   <!-- header section end -->
    
   <!-- booking section start -->
   <div class="banner_section">
      <div class="container" data-aos="zoom-in-up" data-aos-duration="1000">
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
              <div class="row" data-aos="fade-up" data-aos-duration="1000">
                  <?php $i = 0; ?>
                  @foreach ($data as $item)
                  <div class="col-md-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="{{ 100 * $i }}">
                      <a href="/detail/{{$item->id}}" class="box_main" id="{{ $i }}">
                          <div class="left_main">
                              <div class="cup_img_1"><img src="{{ asset('uploads/products/' . $item->picture) }}" style="max-width: 15rem"></div>
                          </div>
                          <div class="middle_main">
                              <div class="border_10 active"></div>
                          </div>
                          <div class="right_main">
                              <h6 class="milk_text">{{ $item->name }}</h6>
                              <h1 class="price_text">{{ $item->harga }}</h1>
                          </div>
                      </a>
                  </div>
                  <?php $i++; ?>
                  @endforeach
              </div>
          </div>
          <div class="see_bt"><a href="/home#10">Lihat Lainnya</a></div>
      </div>
  </div>
  
   <!-- services section end -->
   <!-- shop section start -->
   <div class="shop_section layout_padding">
      <div id="my_slider" class="carousel slide" data-ride="carousel">
         <div class="carousel-inner">
            <div class="carousel-item active">
               <div class="container" >
                  <h1 class="shop_taital">Top 3 Makanan Bulan Ini</h1>
                  <p class="shop_text">Soto adalah sup tradisional Indonesia yang kaya akan rempah-rempah, biasanya berisi daging (ayam, sapi, atau kambing), bihun, tauge, dan telur rebus. Hidangan ini disajikan dengan pelengkap seperti kerupuk, bawang goreng, dan sambal untuk menambah cita rasa. Soto memiliki banyak variasi regional, seperti Soto Ayam, Soto Betawi, dan Soto Lamongan.</p>
                  <div><img src="sotopanjang.png" class="image_3"></div>
               </div>
            </div>
            <div class="carousel-item">
               <div class="container" >
                  <h1 class="shop_taital">Top 3 Makanan Bulan Ini</h1>
                  <p class="shop_text">Sate adalah hidangan khas Indonesia yang terdiri dari potongan daging (ayam, kambing, sapi, atau lainnya) yang ditusuk menggunakan tusukan bambu, kemudian dipanggang di atas arang. Daging sate biasanya disajikan dengan bumbu kacang, kecap manis, atau sambal, serta dilengkapi dengan potongan lontong atau nasi. Sate memiliki banyak variasi regional, termasuk Sate Madura, Sate Padang, dan Sate Lilit Bali.</p>
                  <div><img src="satepanjang.png" class="image_3"></div>
               </div>
            </div>
            <div class="carousel-item">
               <div class="container">
                  <h1 class="shop_taital">Top 3 Makanan Bulan Ini</h1>
                  <p class="shop_text">
                     Bakso adalah hidangan khas Indonesia berupa bola daging yang terbuat dari campuran daging sapi giling, tepung tapioka, dan bumbu-bumbu. Bakso biasanya disajikan dalam kuah kaldu yang gurih, dilengkapi dengan mie, bihun, tahu, dan sayuran, serta diberi taburan daun seledri dan bawang goreng.</p>
                  <div><img src="baksopanjang.png" class="image_3"></div>
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
      })
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

<script>
   let message = '{{Session::get('alert')}}'
   let exist = '{{Session::has('alert')}}'
   if(exist) {
      alert(message)
   }
   </script>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>