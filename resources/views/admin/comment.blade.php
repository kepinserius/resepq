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
						<h2>Komentar</h2>
					</div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Komentar</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 ?>
                    @foreach ($data as $item)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $item->user->name }}</td>
                        <td>{{ $item->user->email }}</td>
                        <td>{{$item->comment}}</td>
                        <td>
                            <a href="#deleteEmployeeModal{{ $item->id }}" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
                    </tr>
                    <div id="deleteEmployeeModal{{ $item->id }}" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="/admin/comment/{{ $item->id }}" method="GET">
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
                </tbody>
            </table>
        </div>
    </div>
  </body>
</html>