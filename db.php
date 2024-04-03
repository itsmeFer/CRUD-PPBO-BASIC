<!-- 
  Nama  : Ferdinand Sianturi
  NIM   : 223303030414
  Kelas : 3 Malam A 
-->

<?php

class database{
  public function koneksi(){
    $host     = "localhost";
    $username = "root";
    $password = "";
    $database = "penilaian_mahasiswa";

    $connect = new mysqli($host, $username, $password, $database);

    return $connect;
  }
}