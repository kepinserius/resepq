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
   <title>Check Out</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
   <!-- style css -->
   <link rel="stylesheet" type="text/css" href="{{asset('css/checkout.css')}}">
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
      
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
        <div class="collapse navbar-collapse justify-content-end" style="margin-left: 50rem" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a href="/beranda" class="nav-item nav-link" href="index.html">Home</a>
                <a href="/komentar" class="nav-item nav-link" href="about.html">Comment</a>
                <a href="/tentang" class="nav-item nav-link" href="contact.html">About</a>
            </div>
            <ul class="custom-navbar-cta navbar-nav mb-5 mb-md-0 ms-5"">
             <li style="position: relative;"> <!-- Tambahkan style position: relative; untuk membuat posisi absolut relatif terhadap elemen ini -->
                 <!-- Tombol untuk menampilkan opsi -->
                 @if(session()->has('email'))
                 <a href="#" class="btn btn-primary nav-link" type="button" id="user-dropdown" style="padding: 5px; background-color: transparent; border: none; margin: 0 5rem 0.5rem 0; display: inline-block; width: 50px; text-align: center; border-color:rgb(97, 150, 166)">
                   <img src="{{asset('profile.png')}}" alt="User Icon" style="max-width: 100%; height: auto;">
                   {{session('name')}}
               </a>
               <!-- Opsi "Profile" dan "Logout" -->
               <div id="dropdown-options" style="display: none; position: absolute; top: 100%; left: 0; background-color: #f3801f; border: 1px solid #ccc; padding: 5px; border-radius: 6px;">
                   <a href="/profile" class="dropdown-option">Profile</a>
                   <a href="/auth/logout" class="dropdown-option">Logout</a>
               </div>  
               @else
               <a href="#" class="btn btn-primary nav-link" type="button" id="user-dropdown" style="padding: 5px; background-color: transparent; border: none; margin-right: 5rem; display: inline-block; width: 50px; text-align: center; border-color:rgb(97, 150, 166)">
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
    <!-- header section end -->
<section class="h-100" style="background-color: #ffffff;">
    <div class="container h-100 py-5">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-10">
  
          <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-bold mb-0 text-black">Checkout</h3>
          </div>

          <p class="lead fw-normal mb-2" style = "margin-bottom : 20px;">Alamat Pengiriman: <br>{{$data->user->name}}<br>
        {{$data->user->no_hp}}<br>{{$data->user->alamat}}</p>
        <hr style="border-top: 1px solid black;">
  
            @foreach($data->items as $cart)
            <div class="card rounded-3 mb-4">
              <div class="card-body p-4">
                <div class="row d-flex justify-content-between align-items-center">
                  <div class="col-md-2 col-lg-2 col-xl-2">
                    <img
                      src="{{asset('uploads/products/'.$cart->product->picture)}}"
                      class="img-fluid rounded-3" alt="Cotton T-shirt">
                  </div>
                  <div class="col-md-3 col-lg-3 col-xl-3">
                    <p class="lead fw-normal mb-2">{{$cart->product->name}}</p>
                  </div>
                  <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                    <input id="form1" min="0" name="quantity" value="{{$cart->qty}}" type="text" disabled
                      class="form-control form-control-sm" style="background: transparent; border: none; padding-bottom: 1em" />
                  </div>
                  <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                    <h5 class="mb-0">{{formatRupiah($cart->qty * $cart->product->harga)}}</h5>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          <p class="lead fw-normal mb-2" style = "margin-bottom : 20px;">Metode Pembayaran: <br>COD</p>
            <hr style="border-top: 1px solid black;">

            <p class="lead fw-normal mb-2" style = "margin-bottom : 20px;">Total Pemesanan: <br>{{formatRupiah($data->total)}},-</p>

          <div class="card">
            <div class="card-body">
              <a href="#deleteEmployeeModal" data-toggle="modal"  data-mdb-button-init data-mdb-ripple-init class="btn btn-warning btn-block btn-lg">Checkout</a>
            </div>
          </div>
  
          <div id="deleteEmployeeModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="/checkout/{{$data->id}}" method="GET">
                        <div class="modal-header">
                            <h4 class="modal-title">Konfirmasi Pesanan</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <p>Yakin melanjutkan pesanan ?</p>
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="submit" class="btn btn-primary" value="Iya">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        </div>
      </div>
    </div>
  </section>