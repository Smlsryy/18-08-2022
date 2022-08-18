<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
    <title>Tampil</title>
</head>

<body>
    <div class="call">
        <?php

        // menangkap data nama dengan method post

        $nama = $_POST['nama'];
        $jKelamin = $_POST['jKelamin'];
        $agama = $_POST['agama'];
        $tmLahir = $_POST['tmLahir'];
        $tglLahir = $_POST['tglLahir'];
        $hobi = $_POST['hobi'];
        $ctCita = $_POST['ctCita'];
        $usia = $_POST['usia'];
        $aSekolah = $_POST['aSekolah'];

        echo "Nama kamu adalah : " . $nama;
        echo "<br>";
        echo "Jenis Kelamin : " . $jKelamin;
        echo "<br>";
        echo "Agama : " . $agama;
        echo "<br>";
        echo "Tempat Tanggal Lahir : "  . $tmLahir, " ",  $tglLahir;
        echo "<br>";
        echo "Hobi : " . $hobi;
        echo "<br>";
        echo "Cita-cita : " . $ctCita;
        echo "<br>";
        echo "Usia : " . $usia;
        echo "<br>";
        echo "Asal Sekolah : " . $aSekolah;




        ?>
    </div>

    <style>
        .call {
            font-family: 'Work Sans', sans-serif;
            margin: 0;
        }
    </style>

</body>

</html>