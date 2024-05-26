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
   <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
   <!-- style css -->
   <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
   <!-- Responsive-->
   <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
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
</div>
          </div>
      </nav>
  </div>
   </div>
   <!-- header section end -->

   <!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Layout Example</title>
       <link rel="stylesheet" href="styles.css">
   </head>
   <body>
      <!DOCTYPE html>
      <html lang="en">
      <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Layout Example</title>
          <link rel="stylesheet" href="styles.css">
      </head>
      <body>
         <div class="container" style="max-width: 800px; margin: 0 auto; padding: 1px; text-align: center;">
            <h1 style="text-align: center;">{{$data['name']}}</h1>
            <div class="content" style="display: flex; justify-content: center; align-items: center; flex-wrap: wrap; margin-top: 20px;">
                <div class="image" style="margin-right: 20px;">
                    <img src="{{asset('uploads/products/'.$data['picture'])}}" alt="Gambar Artikel" style="max-width: 20rem; height: auto; max-height: 300px;">
                </div>
                <div class="text" style="width: calc(100% - 240px);">
                    <p style="margin-top: 50px;">Bahan :</p>
                    <p style="white-space: pre-wrap; text-align: center">{{$data['bahan']}}</p>
                </div>
            </div>
            <div class="bottom-paragraph" style="margin-top: 20px;">
                <p>Cara Masak :</p>
                <p style="white-space: pre-wrap">{{$data['masak']}}</p>
                <form action="/keranjang" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{$data['id']}}">
                    <button class="btn btn-primary btn-block mb-4" role="button">
                        Pesan
                    </button>
                </form>
            </div>
        </div>
    </body>
    </html>
      
   