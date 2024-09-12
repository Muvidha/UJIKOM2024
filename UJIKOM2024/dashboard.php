<?php
include 'functions.php';

// Baca data dari CSV
$data = readCSV('data/data.csv');

// Hitung statistik
$totalCalculations = count($data);
$shapesCount = calculateShapePercentage($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Data dan Statistik</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>Dashboard Data dan Statistik</h1>

    <h2>Data Siswa dan Hasil Perhitungan</h2>
    <table>
        <tr>
            <th>Tanggal</th>
            <th>Nama</th>
            <th>Sekolah</th>
            <th>Usia</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Bangun</th>
            <th>Hasil</th>
        </tr>
        <?php foreach ($data as $row): ?>
        <tr>
            <?php foreach ($row as $item): ?>
            <td><?php echo $item; ?></td>
            <?php endforeach; ?>
        </tr>
        <?php endforeach; ?>
    </table>

    <h2>Statistik</h2>
    <p>Total Penghitungan: <?php echo $totalCalculations; ?></p>
    <p>Persentase per Bangun:</p>
    <ul>
        <?php foreach ($shapesCount as $shape => $percentage): ?>
        <li><?php echo "$shape: $percentage%"; ?></li>
        <?php endforeach; ?>
    </ul>

    <a href="index.php">Back To Main Menu</a>
</body>
</html>
