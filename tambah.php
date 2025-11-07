<?php
include 'koneksi.php';

if (isset($_POST['nama'])) {
    $nama = $_POST['nama'];
    $query = "INSERT INTO mahasiswa (nama) VALUES ('$nama')";
    mysqli_query($conn, $query);
    echo "Data berhasil ditambahkan!";
}
?>
