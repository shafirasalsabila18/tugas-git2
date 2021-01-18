<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengambilan Get</title>

</head>
<?php

//menghitung nilai dari yang tadi kita input
$nama = $_POST["nama"];
$makul = $_POST["makul"];
$nilai_absen = $_POST["absen"] * 0.1;
$nilai_tugas = $_POST["tugas"] * 0.2;
$nilai_uts   = $_POST["uts"] * 0.3;
$nilai_uas   = $_POST["uas"] * 0.4;



//penjumlahan dari nilai-nilai yang sudah diinput

$nilai_akhir = $nilai_absen + $nilai_tugas + $nilai_uts + $nilai_uas;

?>

//menampilkan grade berdasarkan hasil nilai akhir



<body>
    <h1>Hitung Nilai AKhir Mahasiswa</h1>

    Nama Mahasiswa : <?php echo $nama; ?> <br><br>

    Mata Kuliah : <?php echo $makul; ?> <br><br>

    Nilai Absen : <b> <?php echo $nilai_absen; ?></b><br>

    Nilai Tugas : <b><?php echo $nilai_tugas ?></b><br>

    Nilai UTS : <b><?php echo $nilai_uts ?></b><br>

    Nilai UAS : <b><?php echo $nilai_uas ?></b><br>



    <h4>Nilai Akhir : <?php echo $nilai_akhir ?></h4>

    <?php
    if ($nilai_akhir >= 80) {
        $grade = "A";
    } elseif ($nilai_akhir >= 70) {
        $grade = "B";
    } elseif ($nilai_akhir >= 50) {
        $grade = "C";
    } elseif ($nilai_akhir >= 40) {
        $grade = "D";
    } else {
        $grade = "E";
    }
    ?>

    <h4>Grade : <?php echo $grade; ?></h4>
    <br>
    <br>
    <a <a href="Index.php"> Hitung Kembali </a>
</body>

</html>