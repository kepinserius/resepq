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
<link href="{{ asset('css/admintambah.css') }}" rel="stylesheet" type="text/css" >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Manage <b>Employees</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Employee</span></a>						
					</div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>No Handphone</th>
						<th>Alamat</th>
                        <th>Pesanan</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                @if (count($data_admin) === 0)
                    <td colspan="8" style="text-align: center">DATA KOSONG</td>
                @else
                    <?php $no = 1; ?>
                    @foreach ($data_admin as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->no_hp }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>{{ $item->pesanan }}</td>
                            <td>{{ $item->jumlah }}</td>
                            <td>{{ $item->harga }}</td>
                            <td>
                                <a href="#editEmployeeModal{{ $item->id }}" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                <a href="/admin/delete/{{ $item->id }}" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                            </td>
                        </tr>
                        <div id="editEmployeeModal{{ $item->id }}" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form action="/admin/{{ $item->id }}" method="POST">
                                        @csrf 
                                        @method("PUT")
                                        <div class="modal-header">						
                                            <h4 class="modal-title">Edit Employee</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">					
                                            <div class="form-group">
                                                <label>Nama</label>
                                                <input type="text" class="form-control" name = 'nama' id = "nama" required>
                                            </div>
                                            <div class="form-group">
                                                <label>No Handphone</label>
                                                <input type="email" class="form-control" name = 'no_hp' id = "hp_hp" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <textarea class="form-control"name = 'alamat' id = "alamat" narequired></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Pesanan</label>
                                                <input type="text" class="form-control" name = 'pesanan' id = "pesanan" required>
                                            </div>	
                                            <div class="form-group">
                                                <label>Jumlah</label>
                                                <input type="text" class="form-control" name = 'jumlah' id = "jumlah"required>
                                            </div>	
                                            <div class="form-group">
                                                <label>Harga</label>
                                                <input type="text" class="form-control" name = 'harga' id = "harga"required>
                                            </div>			
                                        </div>
                                        <div class="modal-footer">
                                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                            <input type="submit" class="btn btn-success" value="Add">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
                </tbody>
            </table>
			<div class="clearfix">
                <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#">Previous</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                </ul>
            </div>
        </div>
    </div>

<!-- Tambah Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('admin.store') }}" method="POST">
                @csrf 
                <div class="modal-header">						
                    <h4 class="modal-title">Add Employee</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">					
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name = 'nama' id = "nama" required>
                    </div>
                    <div class="form-group">
                        <label>No Handphone</label>
                        <input type="text" class="form-control" name = 'no_hp' id = "no_hp" required>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea class="form-control"name = 'alamat' id = "alamat" narequired></textarea>
                    </div>
                    <div class="form-group">
                        <label>Pesanan</label>
                        <input type="text" class="form-control" name = 'pesanan' id = "pesanan" required>
                    </div>	
                    <div class="form-group">
                        <label>Jumlah</label>
                        <input type="text" class="form-control" name = 'jumlah' id = "jumlah"required>
                    </div>	
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="text" class="form-control" name = 'harga' id = "harga"required>
                    </div>			
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-success" value="Add">
                </div>
            </>
        </div>
    </div>
</div>

