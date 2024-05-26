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
<link href="{{ asset('css/admin.css') }}" rel="stylesheet" type="text/css" >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
  <body>
    <div class="sidebar">
        <a href="/admin/user">User</a>
        <a href="/admin/product">Produk</a>
        <a href="/admin/cart">Keranjang</a>
        <a href="/admin/pesanan">Pesanan</a>
        <a href="/admin/comment">Komentar</a>
        <a href="/auth/logout" style="margin-top: 31rem;">Logout</a>
    </div>
    <div class="container">
        <div class="table-wrapper">
            @if (Session::has('success'))
                <div class="pt-3">
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                </div>
            @endif
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Keranjang</h2>
					</div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Product</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 ?>
                    @foreach ($data as $item)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $item->user->name }}</td>
                        <td>
                            <ul>
                                @foreach ($item->items as $products)
                                <li>{{$products->product->name}}</li>
                                @endforeach
                            </ul>
                        </td>
                        <td>{{formatRupiah($item->total)}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
  </body>
</html>