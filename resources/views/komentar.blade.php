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
   <title>Komen</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
   <!-- style css -->
   <link rel="stylesheet" type="text/css" href="{{asset('css/komentar.css')}}">
   <!-- Responsive-->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="{{asset('css/jquery.mCustomScrollbar.min.css')}}">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <!-- owl stylesheets -->
   <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
   <link rel="stylesoeet" href="{{asset('css/owl.theme.default.min.css')}}">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
      media="screen">
</head>

<body>
   <!-- header section start -->
   <div class="header_section">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="logo">
            <a href="/beranda">
                <img src="{{asset('logoanjay.png')}}" style="width: 130px; height: auto;">
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
                   <img src="{{asset('profile.png')}}" alt="User Icon" style="max-width: 100%; height: auto;">
                   {{session('name')}}
               </a>
               <!-- Opsi "Profile" dan "Logout" -->
               <div id="dropdown-options" style="display: none; position: absolute; top: 100%; left: 0; background-color: #f3801f; border: 1px solid #ccc; padding: 5px; border-radius: 6px;">
                   <a href="/profile" class="dropdown-option">Profile</a>
                   <a href="/auth/logout" class="dropdown-option">Logout</a>
               </div>  
               @else
               <a href="#" class="btn btn-primary nav-link" type="button" id="user-dropdown" style="padding: 5px; background-color: rgb(255, 255, 255); border: none; margin-right: 5rem; display: inline-block; width: 50px; text-align: center; border-color:rgb(97, 150, 166)">
                 <img src="{{asset('profile.png')}}" alt="User Icon" style="max-width: 100%; height: auto;">
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

        {{-- start comment --}}
        <div class="container">
            <div class="be-comment-block">
                <h1 class="comments-title">Comments</h1>
                    @foreach($data as $items)
                    <div class="be-comment">
                        <div class="be-img-comment">	
                            <a href="blog-detail-2.html">
                                <img src="{{asset('uploads/users/'.$items->user->picture)}}" alt="" class="be-ava-comment">
                            </a>
                        </div>
                    <div class="be-comment-content">
                            <span class="be-comment-name">
                                <a href="blog-detail-2.html" style="text-decoration: none;">{{$items->user->email}}</a>
                                </span>
                            <span class="be-comment-time">
                            </span>
                        <p class="be-comment-text">
                            {{$items->comment}}
                        </p>
                    </div>
                </div>
                    @endforeach
                <form class="form-block" action="" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                        <div class="col-xs-12">									
                            <div class="form-group">
                                <textarea class="form-input" required name="comment" style="width: 59.2rem; color: black; border: 1px solid rgb(198, 198, 198)" placeholder="Komentar"></textarea>
                            </div>
                        </div>
                        <button class="btn btn-success" style="width: 59.2rem">submit</button>
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
						<a class="navbar-brand" href="/beranda"><img src="{{asset('logoanjay.png')}}" alt="Logo Wedding" style="height: auto; width: auto; max-height: 150px; max-width: 200px;"></a>
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
    <script>
        let message = '{{Session::get('alert')}}'
        let exist = '{{Session::has('alert')}}'
        if(exist) {
            alert(message)
        }
    </script>