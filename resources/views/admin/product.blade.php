<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Pesanan</title>
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
        <a href="/auth/logout" style="margin-top: 35rem;">Logout</a>
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
						<h2>Produk</h2>
					</div>
					<div class="col-sm-6">
                        <a href='#addEmployeeModal' class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Tambah Produk</span></a>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Bahan</th>
                        <th>Cara Masak</th>
                        <th>Harga</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 ?>
                    @foreach ($data as $item)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $item->name }}</td>
                        {{-- <td>
                            <ul>
                                @foreach(json_decode($item->bahan) as $bahan)
                                    <li>{{ $bahan }}</li>
                                @endforeach
                            </ul>
                        </td>
                        <td>
                            <ul>
                                @foreach(json_decode($item->masak) as $masak)
                                    <li>{{ $masak }}</li>
                                @endforeach
                            </ul>
                        </td> --}}
                        <td>{{formatRupiah($item->harga)}}</td>
                        <td>
                            <a href="#editEmployeeModal{{ $item->id }}" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <a href="#deleteEmployeeModal{{ $item->id }}" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
                    </tr>

                    <div id="deleteEmployeeModal{{ $item->id }}" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="/admin/product/{{ $item->id }}" method="GET">
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
                    
                    <div id="editEmployeeModal{{ $item->id }}" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action='/admin/product/{{ $item->id }}' method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div class="modal-header">
                                        <h4 class="modal-title">Edit Employee</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" class="form-control" value="{{$item->name}}" name="name" required>
                                            <input type="hidden" class="form-control" value="{{$item->id}}" name="count">
                                            <input type="hidden" class="form-control" value="{{$item->bahan}}" name="countBahan">
                                            <input type="hidden" class="form-control" value="{{$item->masak}}" name="countMasak">
                                        </div>
                                        <div class="form-group">
                                            <label>Bahan</label>
                                            <div id="fieldUpdate{{$item->id}}">
                                                <?php $indexBahan = 0 ?>
                                                {{-- @foreach(json_decode($item->bahan) as $bahan)
                                                <div class="input-group bahanUpdate" id="bahanUpdate{{$indexBahan}}" style="margin-bottom: 10px">
                                                    <input type="text" class="form-control" multiple="multiple" placeholder="Bahan" value="{{ $bahan }}" name="bahan[]" aria-describedby="basic-addon2">
                                                    <a class="input-group-addon glyphicon glyphicon-minus" onclick="return checkUpdate(event)" id="deleteUpdate{{$indexBahan++}}" style="background: none; border: none; text-decoration: none; "></a>
                                                </div>
                                                @endforeach --}}
                                            </div>
                                            <button class="btn btn-default addUpdate" type="button" id="addUpdate" style="border-radius: 10px"><i class="glyphicon glyphicon-plus"></i> Bahan</button>
                                        </div>
                                        <div class="form-group">
                                            <label>Cara Masak</label>
                                            <div id="fieldMasakUpdate{{$item->id}}">
                                                <?php $indexMasak = 0 ?>
                                                {{-- @foreach(json_decode($item->masak) as $masak)
                                                <div class="input-group masakUpdate" id="masakUpdate{{$indexMasak}}" style="margin-bottom: 10px">
                                                    <input type="text" class="form-control" placeholder="Cara Masak" value="{{$masak}}" name="masak[{{$indexMasak}}]" aria-describedby="basic-addon2">
                                                    <a class="input-group-addon glyphicon glyphicon-minus" onclick="return checkMasakUpdate(event)" id="rmvMasakUpdate{{$indexMasak++}}" style="background: none; border: none; text-decoration: none;"></a>
                                                </div>
                                            </div>
                                            @endforeach --}}
                                            <button class="btn btn-default addMasakUpdate" type="button" id="addMasakUpdate" style="border-radius: 10px"><i class="glyphicon glyphicon-plus"></i> Bahan</button>
                                        </div>
                                        <div class="form-group">
                                            <label>Harga</label>
                                            <div class="input-group">
                                                <span class="input-group-addon">Rp.</span>
                                                <input type="text" onkeypress="return isNumber(event)" value="{{$item->harga}}" class="form-control" name="harga" required>
                                            </div>
                                        </div>    
                                        <div class="form-group">
                                            <label>Gambar</label>
                                            <input type="file" class="form-control" accept="image/*" name="picture">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                        <input type="submit" class="btn btn-primary" value="Submit">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </tbody>
            </table>

            <div id="addEmployeeModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action='' method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-header">
                                <h4 class="modal-title">Add Product</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" class="form-control" name="name" required>
                                </div>
                                <div class="form-group">
                                    <label>Bahan</label>
                                    <div id="field">
                                        <div class="input-group bahan" id="bahan1" style="margin-bottom: 10px">
                                            <input type="text" class="form-control" placeholder="Bahan" name="bahan[0]" aria-describedby="basic-addon2">
                                            <a class="input-group-addon glyphicon glyphicon-minus" onclick="return check(event)" id="delete1" style="background: none; border: none; text-decoration: none; "></a>
                                        </div>
                                    </div>
                                    <button class="btn btn-default" type="button" id="add" style="border-radius: 10px"><i class="glyphicon glyphicon-plus"></i> Bahan</button>
                                </div>
                                <div class="form-group">
                                    <label>Cara Masak</label>
                                    <div id="fieldMasak">
                                        <div class="input-group masak" id="masak1" style="margin-bottom: 10px">
                                            <input type="text" class="form-control" placeholder="Cara Masak" name="masak[0]" aria-describedby="basic-addon2">
                                            <a class="input-group-addon glyphicon glyphicon-minus" onclick="return checkMasak(event)" id="rmvMasak1" style="background: none; border: none; text-decoration: none;"></a>
                                        </div>
                                    </div>
                                    <button class="btn btn-default" type="button" id="addMasak" style="border-radius: 10px"><i class="glyphicon glyphicon-plus"></i> Bahan</button>
                                </div>
                                <div class="form-group">
                                    <label>Harga</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">Rp.</span>
                                        <input type="text" onkeypress="return isNumber(event)" class="form-control" name="harga" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Gambar</label>
                                    <input type="file" class="form-control" accept="image/*" name="picture" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                <input type="submit" class="btn btn-success" value="Save">
                            </div>
                        </form>
                    </div>
                </div>
            </div>	
        </div>
    </div>
  </body>
    <script>
        $('#addMasak').click(function() {
            const index = document.querySelectorAll('.masak').length
            $('#fieldMasak').append(
                `<div class="input-group masak" id="masak${index}" style="margin-bottom: 10px">
                                            <input type="text" class="form-control" placeholder="Cara Masak" name="masak[${index-1}]" aria-describedby="basic-addon2">
                                            <a class="input-group-addon glyphicon glyphicon-minus" id="rmvMasak${index}" onclick="return checkMasak(event)" style="background: none; border: none; text-decoration: none;"></a>
                                        </div>`
            )
        });

        $('#add').click(function() {
            const index = document.querySelectorAll('.bahan').length
            $('#field').append(
                `<div class="input-group bahan" id="bahan${index}" style="margin-bottom: 10px">
                                            <input type="text" class="form-control" placeholder="Bahan" name="bahan[${index-1}]" aria-describedby="basic-addon2">
                                            <a class="input-group-addon glyphicon glyphicon-minus" id="delete${index}" onclick="return check(event)" style="background: none; border: none; text-decoration: none;"></a>
                                        </div>`
            )
        });

       function checkMasak(e) {
        const getId = e.target.id.split("rmvMasak")
        const selector = document.querySelectorAll(`.masak`)
        selector.forEach((element, index) => {
            const getTrig = element.id.split('masak')
            if (getTrig[1] == parseInt(getId[1])) {
                document.getElementById(element.id).remove()
            }
        });
    }

       function check(e) {
        const getId = e.target.id.split("delete")
        const selector = document.querySelectorAll(`.bahan`)
        selector.forEach((element, index) => {
            const getTrig = element.id.split('bahan')
            if (getTrig[1] == parseInt(getId[1])) {
                document.getElementById(element.id).remove()
            }
        });
    }

        $('.addMasakUpdate').click(function() {
            const index = document.querySelectorAll('.masakUpdate').length
            const count = $('input[name="count"]').val()
            $(`#fieldMasakUpdate${count}`).append(
                `<div class="input-group masakUpdate" id="masakUpdate${index-1}" style="margin-bottom: 10px">
                                            <input type="text" class="form-control" placeholder="Cara Masak" name="masak[]" aria-describedby="basic-addon2">
                                            <a class="input-group-addon glyphicon glyphicon-minus" id="rmvMasakUpdate${index-1}" onclick="return checkMasakUpdate(event)" style="background: none; border: none; text-decoration: none;"></a>
                                        </div>`
            )
        });

        $('.addUpdate').click(function() {
            const index = document.querySelectorAll('.bahanUpdate').length
            const count = $('input[name="count"]').val()
            const value = $('input[name="countBahan"]').val()
            console.log(value)
            $(`#fieldUpdate${count}`).append(
                `<div class="input-group bahanUpdate" multiple id="bahanUpdate${index-1}" style="margin-bottom: 10px">
                                            <input type="text" class="form-control" placeholder="Bahan" name="bahan[]" aria-describedby="basic-addon2">
                                            <a class="input-group-addon glyphicon glyphicon-minus" id="deleteUpdate${index-1}" onclick="return checkUpdate(event)" style="background: none; border: none; text-decoration: none;"></a>
                                        </div>`
            )
        });

       function checkMasakUpdate(e) {
        const getId = e.target.id.split("rmvMasakUpdate")
        const selector = document.querySelectorAll(`.masakUpdate`)
        selector.forEach((element, index) => {
            const getTrig = element.id.split('masakUpdate')
            if (getTrig[1] == parseInt(getId[1])) {
                document.getElementById(element.id).remove()
            }
        });
    }

       function checkUpdate(e) {
        const getId = e.target.id.split("deleteUpdate")
        const selector = document.querySelectorAll(`.bahanUpdate`)
        selector.forEach((element, index) => {
            const getTrig = element.id.split('bahanUpdate')
            if (getTrig[1] == parseInt(getId[1])) {
                document.getElementById(element.id).remove()
            }
        });
    }

    function isNumber(evt) {
            var charCode = evt.which ? evt.which : event.keyCode;
            if (charCode > 31 && (charCode < 48 || charCode > 57)) return false;
            return true
        }
    </script>
</html>