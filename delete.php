<!-- 
  Nama  : Ferdinand Sianturi
  NIM   : 223303030414
  Kelas : 3 Malam A 
-->

<?php
include 'action.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $proses = new Proses();
    $proses->hapus($id);
    header('location:index.php');
}
?>

  