<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_latihan";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  echo "Koneksi Berhasil";
} catch(PDOException $e) {
  echo "Koneksi gagal: " . $e->getMessage();
}
?>
