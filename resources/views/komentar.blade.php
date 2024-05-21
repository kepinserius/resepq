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
   <link rel="stylesheet" type="text/css" href="css/komentar.css">
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

        {{-- start comment --}}
        <div class="container">
            <div class="be-comment-block">
                <h1 class="comments-title">Comments</h1>
                <div class="be-comment">
                    <div class="be-img-comment">	
                        <a href="blog-detail-2.html">
                            <img src="images/223140707111074.jpeg" alt="" class="be-ava-comment">
                        </a>
                    </div>
                    <div class="be-comment-content">
                        
                            <span class="be-comment-name">
                                <a href="blog-detail-2.html" style="text-decoration: none;">fatraayu17@gmail.com</a>
                                </span>
                            <span class="be-comment-time">
                            </span>
                        <p class="be-comment-text">
                            Pelayanannya gaada yang judes, semuanya ramah meskipun aku banyak request, good job!!
                        </p>
                    </div>
                </div>
                <div class="be-comment">
                    <div class="be-img-comment">	
                        <a href="blog-detail-2.html">
                            <img src="images/WhatsApp Image 2024-05-13 at 15.51.40.jpeg" alt="" class="be-ava-comment">
                        </a>
                    </div>
                    <div class="be-comment-content">
                        <span class="be-comment-name">
                            <a href="blog-detail-2.html" style="text-decoration: none;">kevingw@gmail.com</a>
                        </span>
                        <span class="be-comment-time">
                        </span>
                        <p class="be-comment-text">
                            Mau banget langganan disini lagi kalo sodara/ponakan ada yang nikah, se bagus ituuu.
                        </p>
                    </div>
                </div>
                <div class="be-comment">
                    <div class="be-img-comment">	
                        <a href="blog-detail-2.html" style="text-decoration: none;">
                            <img src="images/cewe.jpg" alt="" class="be-ava-comment">
                        </a>
                    </div>
                    <div class="be-comment-content">
                        <span class="be-comment-name">
                            <a href="blog-detail-2.html" style="text-decoration: none;">cicpi45@gmail.com</a>
                        </span>
                        <span class="be-comment-time">
                        </span>
                        <p class="be-comment-text">
                            Ngga nyesel sama sekali pake jasa Moon Wedding pilih yang paket, malah diluar ekspektasi akuuu! kalian jgn ragu deh pesen jasa disini.
                        </p>
                    </div>
                </div>
                <form class="form-block">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group fl_icon">
                                <input class="form-input" type="text" placeholder="Nama">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 fl_icon">
                            <div class="form-group fl_icon">
                                <input class="form-input" type="text" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-xs-12">									
                            <div class="form-group">
                                <textarea class="form-input" required="" placeholder="Komentar"></textarea>
                            </div>
                        </div>
                        <a class="btn btn-success pull-right">submit</a>
                    </div>
                </form>
            </div>
            </div>
        {{-- end comment --}}
        <footer class="footer-section" style="padding-bottom: 0.5px;">
			<div class="border-top copyright">
			<div class="container relative">

				<div class="row">
					<div class="col-lg-8">
					</div>
				</div>

				<div class="row g-5 mb-5">
					<div class="col-lg-4">
						<a class="navbar-brand" href="index.html"><img src="logoanjay.png" alt="Logo Wedding" style="height: auto; width: auto; max-height: 150px; max-width: 200px;"></a>
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