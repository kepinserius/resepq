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
<link href="{{ asset('css/signup.css') }}" rel="stylesheet" type="text/css">

<style>
  .textbox {
    width: 100%; 
    max-width: 800px; 
    border-radius: 150px;
    margin-bottom: 15px;
    padding-left: 50px;  /* Menambahkan padding kiri */
    padding-right: 50px;
  }

  .btn-block {
    width: 100%; 
    border-radius: 200px;
    max-width: 800px;
    margin: auto;
    background-color: black;
    color: white; 
  }

  body {
    background-image: url('/flat-lay-composition-mexican-food-with-copyspace.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh; /* Set tinggi ke 100% dari viewport */
    position: relative;
    margin: 0;
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
    z-index: -1;
  }

  .form-label {
    color: rgb(255, 255, 255); 
  }

  .signup-title {
    text-align: center; /* Memposisikan teks ke tengah */
    color: #ffffff;
    margin-bottom: 20px; /* Memberikan jarak antara judul dan form */ 
    font-size: 100px; /* Ukuran font */
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; /* Font family */
  }

  .container {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    padding: 0;
  }

  .card {
    justify-content: flex-start;
    background-color: #FC6736;
    border-radius: 15px;
    padding: 40px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  .form-outline {
    display: flex;
    flex-direction: column;
    align-items: center;
  }
</style>
</head>
<body>
<section class="background-radial-gradient overflow-hidden">
  <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
    <div class="signup-title">
      <h2>Signup</h2>
    </div>
    <div class="card bg-glass">
      <div class="card-body px-4 py-5 px-md-5">
        <form action="/auth/sign" method="post">
          @csrf
          <!-- Textbox for name -->
          <div data-mdb-input-init class="form-outline mb-4">
            <input type="text" id="name" name="name" class="form-control textbox" /> <!-- Menambahkan kelas "textbox" -->
            <label class="form-label" for="name">Name</label>
          </div>

          <!-- Email input -->
          <div data-mdb-input-init class="form-outline mb-4">
            <input type="email" id="email" name="email" class="form-control textbox" /> <!-- Menambahkan kelas "textbox" -->
            <label class="form-label" for="email">Email</label>
          </div>

          <!-- Password input -->
          <div data-mdb-input-init class="form-outline mb-4">
            <input type="password" id="password" name="password" class="form-control textbox" /> <!-- Menambahkan kelas "textbox" -->
            <label class="form-label" for="password">Password</label>
          </div>

          <!-- Confirm Password input -->
          <div data-mdb-input-init class="form-outline mb-4">
            <input type="password" id="confirmPassword" name="confirm" class="form-control textbox" /> <!-- Menambahkan kelas "textbox" -->
            <label class="form-label" for="confirmPassword">Confirm Password</label>
          </div>

          <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-block">
            Sign up
          </button>
        </form>
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
</script>
</body>
</html>
