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
            <h1 style="text-align: center;">Judul Artikel</h1>
            <div class="content" style="display: flex; justify-content: center; align-items: center; flex-wrap: wrap; margin-top: 20px;">
                <div class="image" style="margin-right: 20px;">
                    <img src="ayambakar.png" alt="Gambar Artikel" style="max-width: 100%; height: auto; max-height: 300px;">
                </div>
                <div class="text" style="width: calc(100% - 240px);">
                    <p style="margin-top: 50px;">
                        <strong>BAHAN :</strong><br>
                        1 liter air<br>
                        1/2 kg ayam yang sudah dicuci bersih<br>
                        60 ml santan<br>
                        2 lembar daun salam<br>
                        1 batang sereh (memarkan)<br>
                        Secukupnya garam<br>
                        Secukupnya gula<br>
                        Secukupnya penyedap rasa<br>
                        Bumbu halus:<br>
                        4 buah bawang putih<br>
                        1 ruas kunyit<br>
                        2 buah kemiri<br>
                        1 sdm ketumbar<br>
                        1 sdt merica
                    </p>
                </div>
            </div>
            <div class="bottom-paragraph" style="margin-top: 20px;">
                <p>
                    CARA MASAK : <br>
                    Langkah 1<br>
                    Goreng ayam yang sudah dibersihkan sampai matang, lalu suwir menjadi kecil2. Sisihkan<br>
                    Langkah 2<br>
                    Blender semua bahan bumbu halus. Kemudian panaskan minyak, masukan bumbu halus, sereh dan daun salam, kemudian tumis bumbu halus sampai harum.<br>
                    Langkah 3<br>
                    Tuangkan 1 liter air lalu tambahkan garam, gula, dan penyedap rasa. (Jangan lupa cek rasa ya). Setelah itu tuangkan santan sambil terus diaduk, jika sudah mendidih matikan kompor.tum.<br>
                </p>
                <a href="/keranjang" class="btn btn-primary btn-block mb-4" role="button">
                 Pesan
                </a>
            </div>
        </div>
    </body>
    </html>
      
   