<?php 
include "action.php";

if (isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $nim = $_POST['nim'];
    $nilai_kehadiran = $_POST['nilai_kehadiran'];
    $nilai_tugas = $_POST['nilai_tugas'];
    $nilai_uts = $_POST['nilai_uts'];
    $nilai_uas = $_POST['nilai_uas'];

    // Calculate nilai_akhir
    $nilai_akhir = ($nilai_kehadiran * 0.1) + ($nilai_tugas * 0.2) + ($nilai_uts * 0.3) + ($nilai_uas * 0.4);
    
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
    $proses->tambah_data($nama, $kelas, $nim, $nilai_kehadiran, $nilai_tugas, $nilai_uts, $nilai_uas, $nilai_akhir, $huruf_nilai);

    // Remove the simpan_nilai method, if not needed.

    header('location:index.php');
}
?>
