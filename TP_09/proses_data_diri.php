
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nama = htmlspecialchars($_POST["nama"]);
    $tanggal = $_POST["tanggal_lahir"];

    // Mengubah format tanggal
    $bulanIndonesia = [
        1 => "Januari",
        2 => "Februari",
        3 => "Maret",
        4 => "April",
        5 => "Mei",
        6 => "Juni",
        7 => "Juli",
        8 => "Agustus",
        9 => "September",
        10 => "Oktober",
        11 => "November",
        12 => "Desember"
    ];

    $tanggalObj = DateTime::createFromFormat('!Y-m-d', $tanggal);

    if (!$tanggalObj || $tanggalObj->format('Y-m-d') !== $tanggal) {
        die("Tanggal lahir tidak valid.");
    }

    $hari = $tanggalObj->format('j');
    $bulan = $bulanIndonesia[(int)$tanggalObj->format('n')];
    $tahun = $tanggalObj->format('Y');

    $tanggalFormat = $hari . " " . $bulan . " " . $tahun;

    // Mengambil hobi
    $hobi = $_POST["hobi"] ?? [];

    if (count($hobi) > 0) {
        $hasilHobi = implode(", ", $hobi);
    } else {
        $hasilHobi = "Tidak ada hobi yang dipilih";
    }

    $hasilHobi = htmlspecialchars($hasilHobi);

} else {
    header("Location: form_data_diri.html");
    exit;
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Data Diri</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            padding: 30px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            padding: 25px;
            background: white;
            border: 1px solid #ddd;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        h1 {
            border-bottom: 1px solid #ddd;
            padding-bottom: 15px;
        }

        .data {
            display: flex;
            margin: 25px 0;
        }

        .judul {
            width: 150px;
            font-weight: bold;
        }

        a {
            color: #087bdf;
            text-decoration: none;
        }
    </style>
</head>
<body>

    <div class="container">

        <h1>Tampilan Data Anda</h1>

        <div class="data">
            <div class="judul">Nama Lengkap:</div>
            <div><?= $nama ?></div>
        </div>

        <div class="data">
            <div class="judul">Tanggal Lahir:</div>
            <div><?= $tanggalFormat ?></div>
        </div>

        <div class="data">
            <div class="judul">Hobi:</div>
            <div><?= $hasilHobi ?></div>
        </div>

        <a href="form_data_diri.html">« Kembali ke Form</a>

    </div>

</body>
</html>
