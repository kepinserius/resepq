<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin Pesanan</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="{{ asset('css/admin.css') }}" rel="stylesheet" type="text/css" >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <body>
    <div class="sidebar">
        <a href="/admin_user">User</a>
        <a href="/admin_web">Produk</a>
        <a href="/admin_product">Keranjang</a>
        <a href="/admin_tema">Pesanan</a>
    </div>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Pesanan</h2>
					</div>
					<div class="col-sm-6">
											
					</div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
						<th>
							<div class="custom-checkbox">
                                <span class="checkbox-number"></span>
                            </div>
						</th>
                        <th>Nama</th>
                        <th>Cart</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
						<td>
							<div class="custom-checkbox">
                                <span class="checkbox-number">1</span>
                            </div>
						</td>
                        <td>Thomas Hardy</td>
                        <td>thomashardy@mail.com</td>
                        <td>
                            {{-- <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a> --}}
                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
						<td>
							<div class="custom-checkbox">
                                <span class="checkbox-number">2</span>
                            </div>
						</td>
                        <td>Dominique Perrier</td>
                        <td>dominiqueperrier@mail.com</td>
                        <td>
                            {{-- <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a> --}}
                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
                    </tr>
					<tr>
						<td>
							<div class="custom-checkbox">
                                <span class="checkbox-number">3</span>
                            </div>
						</td>
                        <td>Maria Anders</td>
                        <td>mariaanders@mail.com</td>
                        <td>
                            {{-- <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a> --}}
                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
						<td>
							<div class="custom-checkbox">
                                <span class="checkbox-number">4</span>
                            </div>
						</td>
                        <td>Fran Wilson</td>
                        <td>franwilson@mail.com</td>
                        <td>
                            {{-- <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a> --}}
                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
                    </tr>					
					<tr>
						<td>
							<div class="custom-checkbox">
                                <span class="checkbox-number">5</span>
                            </div>
						</td>
                        <td>Martin Blank</td>
                        <td>martinblank@mail.com</td>
                        <td>
                            {{-- <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a> --}}
                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
                    </tr> 
                </tbody>
            </table>

            <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Employee</span></a>	
        </div>
    </div>