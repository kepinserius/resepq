<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap CRUD Data Table for Database with Modal Form</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="{{ asset('css/login.css') }}" rel="stylesheet" type="text/css">

<style>
    body {
        background-image: url('tomatoes-sauce-with-ingredients-black-wooden-plank.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: bottom;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh; /* Set tinggi ke 100% dari viewport */
    }

    body::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5); /* Warna hitam transparan */
    backdrop-filter: blur(0.3px);
}

/* Gaya CSS untuk textbox */
.textbox {
      width: 100%; /* Setiap textbox memiliki lebar 100% */
      background-color: rgb(255, 255, 255); /* Memberikan warna biru pada latar belakang textbox */
      color: #FC6736; /* Memberikan warna hitam pada teks dalam textbox */
      border: none; /* Menghapus border agar lebih rapi */
      padding: 10px; /* Menambahkan padding agar textbox terlihat lebih baik */
      margin-top: 20px; /* Menambahkan margin-top agar textbox sedikit lebih ke bawah */
    }

    /* Gaya CSS untuk label */
    .form-label {
      color: #FC6736; /* Memberikan warna biru pada label */
    }

/* Gaya CSS untuk label */
.form-label {
  color: #FC6736; /* Memberikan warna biru pada label */
}

.button-link {
          display: inline-block;
          padding: 10px 20px;
          color: #FC6736;
          text-decoration: none;
          border-radius: 5px;
      }

</style>
</head>
<body>
<!-- Section: Design Block -->
<section class="background-radial-gradient overflow-hidden">
    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
      <div class="row gx-lg-5 align-items-center mb-5">
        <div class="col-lg-6 mb-5 mb-lg-0 text-center" style="z-index: 10">
          <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(40, 33%, 98%)">
            RESEP'Q <br />
            <span style="color: hsl(36, 6%, 65%)">Kualitas Terbaik, Pesan Sekarang</span>
          </h1>
          <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
            Resep'Q adalah platform pemesanan bahan makanan online yang menyediakan produk segar dari produsen lokal terpercaya. Pengguna dapat menjelajahi kategori bahan makanan dan memesan dengan mudah. Fitur rekomendasi resep berdasarkan bahan makanan membantu pengguna menciptakan hidangan baru. Layanan pengiriman cepat dan aman ditawarkan untuk kenyamanan pengguna. Dukungan pelanggan responsif memberikan pengalaman berbelanja yang memuaskan. Resep'Q mendukung misi untuk memudahkan akses terhadap bahan makanan berkualitas. Ini menjadi pilihan utama bagi mereka yang mengutamakan kualitas dan kepraktisan dalam berbelanja online.
          </p>
        </div>
  
        <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
          <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
          <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>
  
          <div class="card bg-glass">
            <div class="card-body px-4 py-5 px-md-5">
              <form>
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-12 mb-4"> <!-- Mengubah col-md-6 menjadi col-md-12 -->
                        <div data-mdb-input-init class="form-outline">
                            <input type="text" id="form3Example1" class="form-control textbox" style="width: 100%;" /> <!-- Menambahkan inline CSS untuk menetapkan lebar 100% -->
                            <label class="form-label" for="form3Example1">First name</label>
                        </div>
                    </div>
                </div>
  
                <!-- Email input -->
                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="email" id="form3Example3" class="form-control textbox" /> <!-- Menambahkan kelas "textbox" -->
                  <label class="form-label" for="form3Example3">Email</label>
                </div>
  
                <!-- Password input -->
                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="password" id="form3Example4" class="form-control textbox" /> <!-- Menambahkan kelas "textbox" -->
                  <label class="form-label" for="form3Example4">Password</label>
                </div>
  
                <!-- Submit button -->
                <a href="/beranda" class="btn btn-primary btn-block mb-4" role="button">
                  Sign in
              </a>
              
  
                <!-- Register buttons -->
                <div class="text-center">
                  <div class="text-center">
                    <a href="/signup" class="button-link">Buat Akun</a>
                </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section: Design Block -->
</body>
</html>