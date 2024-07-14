<?php
require_once 'dbkoneksi.php'; // Sertakan file koneksi ke database

if(isset($_POST['submit'])) {
    // Ambil data dari formulir
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $tmp_lahir = $_POST['tmp_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $kelurahan_id = $_POST['kelurahan_id'];

    // Validasi data
    $errors = array();
    if(empty($kode)) {
        $errors[] = "Kode is required";
    }
    // Tambahkan validasi untuk data lainnya sesuai kebutuhan

    if(empty($errors)) {
        // Buat pernyataan SQL INSERT
        $sql = "INSERT INTO pasien (kode, nama, tmp_lahir, tgl_lahir, gender, email, alamat, kelurahan_id) VALUES (:kode, :nama, :tmp_lahir, :tgl_lahir, :gender, :email, :alamat, :kelurahan_id)";
        $stmt = $dbh->prepare($sql);

        // Bind parameter ke pernyataan SQL
        $stmt->bindParam(':kode', $kode);
        $stmt->bindParam(':nama', $nama);
        $stmt->bindParam(':tmp_lahir', $tmp_lahir);
        $stmt->bindParam(':tgl_lahir', $tgl_lahir);
        $stmt->bindParam(':gender', $gender);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':alamat', $alamat);
        $stmt->bindParam(':kelurahan_id', $kelurahan_id);

        // Eksekusi pernyataan SQL
        if($stmt->execute()) {
            // Redirect ke halaman data pasien setelah berhasil ditambahkan
            header("Location: data_pasien.php");
            exit();
        } else {
            // Tampilkan pesan error jika gagal menyimpan data
            echo "Error: " . $stmt->errorInfo()[2];
        }
    } else {
        // Tampilkan pesan kesalahan jika ada validasi yang gagal
        foreach($errors as $error) {
            echo $error . "<br>";
        }
    }
}
?>


