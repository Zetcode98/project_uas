<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Belanja Online</title>
</head>

<body>
    <h2>Belanja Online</h2>
    <form method="post">

    <div class="container">
        <div class="row">
            <div class="col-8">

                <br/>

                <div class="col-12 form-group row">
                <label for="text" class="col-2 col-form-label">Customer</label> 
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-addon">
                            <i class="fa fa-address-card"></i>
                </div> 
                <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
                    </div>
                        </div>
                            </div>

                <div class="col-12 form-group row">
                <label class="col-2">Pilih Produk</label> 
                    <div class="col-8">
                    <label class="custom-control custom-radio">
                    <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV"> 
                    <span class="custom-control-indicator"></span> 
                    <span class="custom-control-description">TV</span>
                </label>

                <label class="custom-control custom-radio">
                    <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas"> 
                    <span class="custom-control-indicator"></span> 
                    <span class="custom-control-description">Kulkas</span>
                </label>

                <label class="custom-control custom-radio">
                    <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesin cuci"> 
                    <span class="custom-control-indicator"></span> 
                    <span class="custom-control-description">Mesin Cuci</span>
                </label>
                    </div>
                </div>

                 <div class="col-12 form-group row">
                 <label for="text" class="col-2 col-form-label">Jumlah</label> 
                    <div class="col-4">
                     <input id="jumlah" name="jumlah" type="text" required="required" class="form-control">
                    </div>
                </div> 

                    <div class="col-2 col-6 form-group row">
                        <div class="offset-4 col-12">
                            <button name="submit" type="submit" class="btn btn-success">Kirim</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-12 col-md-4">
                <ul class="list-group">
                    <li class="list-group-item active">Daftar Harga</li>
                    <li class="list-group-item">TV : 4.200.000</li>
                    <li class="list-group-item">Kulkas : 3.100.000</li>
                    <li class="list-group-item">Mesin Cuci : 3.800.000</li>
                    <li class="list-group-item active">Harga Dapat Berubah Setiap Saat</li>
                </ul>
            </div>
        </div>
    </div>

</body>
</html>

<?php
error_reporting(0);
// tangkap input form
$customer = $_POST['customer'];
$produk = $_POST['produk'];
$jumlah = $_POST['jumlah'];

// list harga produk
$harga = [
    'TV' => 4200000, 'Kulkas' => 3100000, 'Mesin Cuci' => 3800000
];

// menghitung total harga
$total = $jumlah * $harga [$produk];

// format harga
$total = number_format($total);

// tampilkan hasil form
echo "Nama Customer: $customer";
echo "<br> Pilihan Produk: $produk";
echo "<br> Jumlah Belanja: $jumlah";
echo "<br> Total Belanja: $total";