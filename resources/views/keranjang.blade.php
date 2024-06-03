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
   <title>Keranjang</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
   <!-- style css -->
   <link rel="stylesheet" type="text/css" href="{{asset('css/keranjang.css')}}">
   <!-- Responsive-->
   <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
   <!-- fevicon -->
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="{{asset('css/jquery.mCustomScrollbar.min.css')}}">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <!-- owl stylesheets -->
   <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
   <link rel="stylesoeet" href="{{asset('css/owl.theme.default.min.css')}}">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
      media="screen">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<style>
  input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
</style>

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
<section class="h-100" style="background-color: #eee;">
    <div class="container h-100 py-5">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-10">
  
          <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-normal mb-0 text-black">Shopping Cart</h3>
          </div>
          <?php $index = 0 ?>
          @if(count($data->items) == 0)
          <div class="card rounded-3 mb-4">
            <p class="text-center" style="font-weight: bold; padding: 2rem;">Keranjang Kosong</p>
          </div>
          @else
          @foreach ($data->items as $cart)  
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
                  <button data-mdb-button-init data-mdb-ripple-init style="color:rgb(139, 139, 139);" id="minus" class="btn btn-link px-2"
                    onclick="return minus(this.parentNode)">
                    <i class="fa fa-minus"></i>
                  </button>
  
                  <input id="{{$index}}" min="0" name="qty{{$index}}" onkeypress="return isNumber(event)" onchange="return changeCount(this.parentNode)" value="{{$cart->qty}}" type="number"
                    class="form-control form-control-sm" />
                  <input name="id" value="{{$cart->product->id}}" type="hidden"
                     hidden />
                  <input name="idCart" value="{{$cart->id}}" type="hidden"
                     hidden />
  
                  <button data-mdb-button-init data-mdb-ripple-init style="color:rgb(139, 139, 139);" id="plus{{$index}}" class="btn btn-link px-2 plus"
                    onclick="return plus(this.parentNode)">
                    <i class="fa fa-plus"></i>
                  </button>
                </div>
                <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                  <h5 class="mb-0 total" id="qty{{$index++}}">{{ formatRupiah($cart->product->harga * $cart->qty)}}</h5>
                </div>
                <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                  <a href="#deleteEmployeeModal{{$cart->id}}" data-toggle="modal" class="text-danger"><i class="fa fa-trash fa-lg"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div id="deleteEmployeeModal{{$cart->id}}" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="/keranjang/{{$cart->id}}" method="GET">
                        <div class="modal-header">
                            <h4 class="modal-title">Delete Employee</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <p>Are you sure you want to delete these Records?</p>
                            <p class="text-warning"><small>This action cannot be undone.</small></p>
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="submit" class="btn btn-danger" value="Delete">
                        </div>
                    </form>
                </div>
            </div>
        </div>
          @endforeach
          @endif
          @if(count($data->items) != 0)
          <div class="card">
            <div class="card-body">
              <a href="/checkout"><button class="btn btn-warning btn-block btn-lg" id="edit-profile-btn">Checkout</button></a>
            </div>
          </div>
          @endif
        </div>
      </div>
    </div>
  </section>
  <script>
    let message = '{{Session::get('alert')}}'
    let exist = '{{Session::has('alert')}}'
    if (exist) {
      alert(message)
    }
    function changeCount(e) {
      let selector = e.querySelector('input[type=number]')
      let selectorId = e.querySelectorAll('input[type=hidden]')
      if (selector.value == 0) {
        $(`#deleteEmployeeModal${selectorId[1].value}`).modal('show')
      }
          $.ajax({
            url: `/keranjang/${selectorId[1].value}`,
            type: 'PUT',
            dataType: 'json',
            cache: false,
            data: {
              "qty": selector.value,
              '_token': "{{csrf_token()}}"
            },
            success: function (update) {
              $.each(document.querySelectorAll('.total'), function(i, v) {
            if(i == selector.id) {
              $(`#qty${i}`).empty()
              $.each(update.items, function(i, v) {
                if (v.product.id == selectorId[0].value) {
                  $(`#qty${i}`).append(Intl.NumberFormat('id-ID', {
                    style: 'currency',
                    currency: 'IDR'
                  }).format(v.product.harga * selector.value).replace(/(\.|,)00$/g, '')
                )
                }
              })
            }
          })
            },
            error: function(xhr, status, error) {
              console.log(error)
            }
          })
    }
    function plus(e) {
      let selector = e.querySelector('input[type=number]')
      let selectorId = e.querySelectorAll('input[type=hidden]')
      selector.stepUp()
          $.ajax({
            url: `/keranjang/${selectorId[1].value}`,
            type: 'PUT',
            dataType: 'json',
            cache: false,
            data: {
              "qty": selector.value,
              '_token': "{{csrf_token()}}"
            },
            success: function (update) {
              $.each(document.querySelectorAll('.total'), function(i, v) {
            if(i == selector.id) {
              $(`#qty${i}`).empty()
              $.each(update.items, function(i, v) {
                if (v.product.id == selectorId[0].value) {
                  $(`#qty${i}`).append(Intl.NumberFormat('id-ID', {
                    style: 'currency',
                    currency: 'IDR'
                  }).format(v.product.harga * selector.value).replace(/(\.|,)00$/g, '')
                )
                }
              })
            }
          })
            },
            error: function(xhr, status, error) {
              console.log(error)
            }
          })
        }
    function minus(e) {
      let selector = e.querySelector('input[type=number]')
      let selectorId = e.querySelectorAll('input[type=hidden]')
      selector.stepDown()
      if (selector.value == 0) {
        $(`#deleteEmployeeModal${selectorId[1].value}`).modal('show')
      }
      $.ajax({
            url: `/keranjang/${selectorId[1].value}`,
            type: 'PUT',
            dataType: 'json',
            cache: false,
            data: {
              "qty": selector.value,
              '_token': "{{csrf_token()}}"
            },
            success: function (update) {
              $.each(document.querySelectorAll('.total'), function(i, v) {
            if(i == selector.id) {
              $(`#qty${i}`).empty()
              $.each(update.items, function(i, v) {
                if (v.product.id == selectorId[0].value) {
                  $(`#qty${i}`).append(Intl.NumberFormat('id-ID', {
                    style: 'currency',
                    currency: 'IDR'
                  }).format(v.product.harga * selector.value).replace(/(\.|,)00$/g, '')
                )
                }
              })
            }
          })
            },
            error: function(xhr, status, error) {
              console.log(error)
            }
          })
    }

    function isNumber(evt) {
            var charCode = evt.which ? evt.which : event.keyCode;
            if (charCode > 31 && (charCode < 48 || charCode > 57)) return false;
            return true
        }
    </script>
  </script>
  