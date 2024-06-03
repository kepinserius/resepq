<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Resep'Q</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="{{ asset('css/profile.css') }}" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #c1c0c0;">
    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
        <div class="profile">
            <div class="profile-left">
                <div class="profile-image">
                    <img id="user-avatar" src="{{asset('uploads/users/'.$data['picture'])}}" alt="User Avatar" class="rounded-circle">
                </div>
                <div class="email">
                    <p>{{$data['name']}}</p>
                    <div class="button-container">
                        <input type="file" name="picture" id="upload-avatar" style="display:none;">
                        <button id="upload-avatar-btn" type="button" class="btn-upload">Upload Gambar</button>
                    </div>
                </div>
            </div>
            <div class="profile-right">
                <div class="form-group" style="margin-top: 10px;"> <!-- Tambahkan margin-top di sini -->
                    <label for="name">Nama:</label>
                    <input type="text" id="name" name="name" value="{{$data['name']}}" style="width: 600px;" required> <!-- Atur lebar input -->
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="{{$data['email']}}" style="width: 600px;" required> <!-- Atur lebar input -->
                </div>
                <div class="form-group">
                    <label for="phone">Nomor HP:</label>
                    <input type="text" id="phone" name="phone" value="{{$data['no_hp']}}" style="width: 600px;" required> <!-- Atur lebar input -->
                </div>
                <div class="form-group">
                    <label for="address">Alamat:</label>
                    <input type="text" id="address" name="address" value="{{$data['alamat']}}" style="width: 600px;" required> <!-- Atur lebar input -->
                </div>
                <a href="/profile"><button id="edit-profile-btn" type="submit" class="bn632-hover bn20">Simpan</button></a>
            </div>
        </div>
        </form>
    </div>

    <script>
        $(document).ready(function(){
            $("#upload-avatar-btn").click(function(){
                $("#upload-avatar").click();
            });

            $("#upload-avatar").change(function(){
                var file = this.files[0];
                if (file) {
                    var reader = new FileReader();
                    reader.onload = function(event) {
                        $("#user-avatar").attr("src", event.target.result);
                    };
                    reader.readAsDataURL(file);
                }
            });
        });
    </script>

    <style>
        /* CSS untuk mengatur form berada di tengah layar */
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* CSS untuk mengatur tata letak profile dan form */
        .profile {
            display: flex;
            justify-content: flex-start;
            align-items: center;
        }

        /* CSS untuk mengatur tata letak elemen pada bagian kiri profile */
        .profile-left {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-right: 20px; /* Menambahkan margin kanan untuk memberi jarak antara profile dan form */
        }

        /* CSS yang telah Anda sediakan */
        .email {
            margin-top: 10px; /* Menambahkan margin atas untuk memberi jarak antara email dan form */
        }

        .button-container {
            margin-top: 10px;
        }
    </style>
</body>
</html>