<!-- 
  Nama  : Ferdinand Sianturi
  NIM   : 223303030414
  Kelas : 3 Malam A 
-->

<<?php
  include "action.php";

  if (isset($_POST['simpan'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $nim = $_POST['nim'];
    $kehadiran = $_POST['kehadiran'];
    $tugas = $_POST['tugas'];
    $uts = $_POST['uts'];
    $uas = $_POST['uas'];

    // Calculate nilai_akhir
    $nilai_akhir = ($kehadiran * 0.1) + ($tugas * 0.2) + ($uts * 0.3) + ($uas * 0.4);

    // Determine huruf_nilai
    $huruf_nilai = '';
    if ($nilai_akhir >= 80) {
        $huruf_nilai = 'A';
    } elseif ($nilai_akhir >= 70) {
        $huruf_nilai = 'B';
    } elseif ($nilai_akhir >= 60) {
        $huruf_nilai = 'C';
    } elseif ($nilai_akhir >= 50) {
        $huruf_nilai = 'D';
    } else {
        $huruf_nilai = 'E';
    }

    $proses = new Proses();
    $proses->ubah_data($id, $nama, $kelas, $nim, $kehadiran, $tugas, $uts, $uas, $nilai_akhir, $huruf_nilai);
    
    header('location:index.php');
  }

  $id = $_GET['id'];
  include 'action.php';
  $proses = new Proses();
  $data = $proses->ubah($id);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Edit Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
    <h1>Form Edit Data Mahasiswa</h1>
    <form action="ubah.php" method="post">
    <input name="id" type="hidden" class="form-control" value="<?php echo $data->id ?>">
    <div class="mb-3">
        <label for="exampleInputText1" class="form-label">Nama Mahasiswa</label>
        <input name="nama" type="text" class="form-control" placeholder="Masukan nama yang ingin di input" required value="<?php echo $data->nama ?>">
    </div>
    <div class="mb-3">
        <label for="exampleInputText1" class="form-label">NIM Mahasiswa</label>
        <input name="nim" type="number" class="form-control" placeholder="Masukan NIM mahasiswa yang valid" required value="<?php echo $data->nim ?>">
    </div>
    <div class="mb-3">
        <label for="exampleInputText1" class="form-label">Kelas Mahasiswa</label>
        <input name="kelas" type="text" class="form-control" placeholder="Masukan kelas dengan detail" required value="<?php echo $data->kelas ?>">
    </div>
    <div class="mb-3">
        <label for="exampleInputText1" class="form-label">Nilai Kehadiran</label>
        <input name="kehadiran" type="number" class="form-control" placeholder="Masukan nilai kehadiran" required value="<?php echo $data->kehadiran ?>">
    </div>
    <div class="mb-3">
        <label for="exampleInputText1" class="form-label">Nilai Tugas</label>
        <input name="tugas" type="number" class="form-control" placeholder="Masukan nilai tugas" required value="<?php echo $data->tugas ?>">
    </div>
    <div class="mb-3">
        <label for="exampleInputText1" class="form-label">Nilai UTS</label>
        <input name="uts" type="number" class="form-control" placeholder="Masukan nilai UTS" required value="<?php echo $data->uts ?>">
    </div>
    <div class="mb-3">
        <label for="exampleInputText1" class="form-label">Nilai UAS</label>
        <input name="uas" type="number" class="form-control" placeholder="Masukan nilai UAS" required value="<?php echo $data->uas ?>">
    </div>
    <button name="simpan" type="submit" class="btn btn-primary">Save</button>
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
