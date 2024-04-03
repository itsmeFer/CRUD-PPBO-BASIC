<!-- 
  Nama  : Ferdinand Sianturi
  NIM   : 223303030414
  Kelas : 3 Malam A 
-->

<?php
  include "action.php";

  $proses = new Proses();

  $no = 1;
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UAS PBO dengan CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>

  <body>
    <div class="container">
      <h1 class="judul m-4">Daftar Mahasiswa</h1>
      <table class="table caption-top">
        <thead>
          <tr>
            <th scope="col">NO</th>
            <th scope="col">NAMA</th>
            <th scope="col">KELAS</th>
            <th scope="col">NIM</th>
            <th scope="col">Nilai Kehadiran</th>
            <th scope="col">Nilai Tugas</th>
            <th scope="col">Nilai UTS</th>
            <th scope="col">Nilai UAS</th>
            <th scope="col">Nilai Akhir</th>
            <th scope="col">Huruf</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
        <?php
            $hasil = $proses->tampil_data();
            if (!empty($hasil)) {
              foreach ($hasil as $data):
          ?>
          <tr>
            <th scope="row"><?=$no++ ?></th>
            <td><?=$data->nama ?></td>
            <td><?=$data->kelas ?></td>
            <td><?=$data->nim ?></td>
            <td><?=$data->kehadiran?></td>
            <td><?=$data->tugas?></td>
            <td><?=$data->uts?></td>
            <td><?=$data->uas?></td>
            <td><?=$data->nilai_akhir?></td>
            <td><?=$data->huruf?></td>
            <td>
              <a href="edit.php?id=<?= $data->id ?>" type="button" class="btn btn-success">Edit</a>
              <a href="delete.php?id=<?= $data->id ?>" type="button" class="btn btn-danger">Delete</a>
            </td>
          </tr>
          <?php endforeach;
            } else{
          ?>
          <tr>
            <td>Masukkan data!</td>
          </tr>
          <?php
            }
          ?>
        </tbody>
      </table>
      <a href="create.php" type="button" class="btn btn-secondary">Add</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
