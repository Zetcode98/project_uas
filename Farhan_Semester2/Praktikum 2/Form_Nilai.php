<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<h1> From Nilai Siswa </h1>
<form method="GET">
  <div class="form-group row">
    <label for="Nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text"></div>
        </div> 
        <input id="nama_siswa" name="nama_siswa" placeholder="Nama Lengkap" type="text" class="form-control"> 
        <div class="input-group-append">
          <div class="input-group-text"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="select" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="mata_kuliah" name="mata_kuliah" class="custom-select">
        <option value="DDP">Dasar-Dasar Pemograman</option>
        <option value="WEB 1">Pemograman Web</option>
        <option value="BDI">Basis Data I</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_tugas " class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
    <div class="col-8">
      <input id="nilai_tugas " name="nilai_tugas " placeholder="Nilai Tugas/Praktikum" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
    </div>
  </div>
</form>

<?php
error_reporting(0);
$nama_siswa = $_GET['nama_siswa'];
$mata_kuliah = $_GET['mata_kuliah'];
$nilai_uts = $_GET['nilai_uts'];
$nilai_uas = $_GET['nilai_uas'];
$nilai_tugas = $_GET['nilai_tugas'];

  echo '<br/>Nama : ' .$nama_siswa;
  echo '<br/>Mata Kuliah : ' .$mata_kuliah;
  echo '<br/>Nilai UTS   : ' .$nilai_uts;
  echo '<br/>Nilai UTS   : ' .$nilai_uts;
  echo '<br/>Nilai Tugas Praktikum  : ' .$nilai_tugas;
?>  