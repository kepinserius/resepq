<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sign Up - Resep'Q</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="{{ asset('css/login.css') }}" rel="stylesheet" type="text/css">

<style>
    body {
        background-image: url('flat-lay-composition-mexican-food-with-copyspace.jpg');
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
      color: rgb(243, 170, 81); /* Memberikan warna hitam pada teks dalam textbox */
      border: none; /* Menghapus border agar lebih rapi */
      padding: 10px; /* Menambahkan padding agar textbox terlihat lebih baik */
      margin-top: 20px; /* Menambahkan margin-top agar textbox sedikit lebih ke bawah */
    }

    /* Gaya CSS untuk label */
    .form-label {
      color: rgb(212, 156, 92); /* Memberikan warna biru pada label */
    }

/* Gaya CSS untuk label */
.form-label {
  color: rgb(212, 156, 92); /* Memberikan warna biru pada label */
}

</style>
</head>
<body>
<!-- Section: Design Block -->
<section class="background-radial-gradient overflow-hidden">
    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
      <div class="row gx-lg-5 align-items-center mb-5">
        <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
          <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
          <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>
  
          <div class="card bg-glass">
            <div class="card-body px-4 py-5 px-md-5">
              <form>
                <!-- Textbox for name -->
                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="text" id="name" class="form-control textbox" /> <!-- Menambahkan kelas "textbox" -->
                  <label class="form-label" for="name">Name</label>
                </div>

                <!-- Email input -->
                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="email" id="email" class="form-control textbox" /> <!-- Menambahkan kelas "textbox" -->
                  <label class="form-label" for="email">Email</label>
                </div>
  
                <!-- Password input -->
                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="password" id="password" class="form-control textbox" /> <!-- Menambahkan kelas "textbox" -->
                  <label class="form-label" for="password">Password</label>
                </div>

                <!-- Confirm Password input -->
                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="password" id="confirmPassword" class="form-control textbox" /> <!-- Menambahkan kelas "textbox" -->
                  <label class="form-label" for="confirmPassword">Confirm Password</label>
                </div>
  
                <!-- Submit button -->
                <a href="/login" class="btn btn-primary btn-block mb-4" role="button">
                  Sign up
              </a>
  
</body>
</html>
