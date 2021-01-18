<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PENJUMLAHAN</title>
</head>

<body>
    <form action="hitung.php" method="POST">
        <h1>Hitung Nilai Akhir Mahasiswa</h1>
        Nama Mahasiswa :
        <input type="text" name="nama" /><br />
        Mata Kuliah :
        <input type="text" name="makul" /><br />
        Nilai Absen :
        <input type="text" name="absen" /><br />
        Nilai Tugas :
        <input type="text" name="tugas" /><br />
        Nilai UTS :
        <input type="text" name="uts" /><br />
        Nilai UAS : <br />
        <input type="text" name="uas" /><br /><br />

        <button type="”submit”" name="submit">Hitung</button>
    </form>
</body>

</html>