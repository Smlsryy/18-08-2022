<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Form</title>
</head>

<body>
    <h3 style="font-family: sans-serif;">Form Biodata</h3>

    <div>
        <form method="POST" action="tampil2.php">
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" placeholder="">

            <label for="jKelamin">Jenis Kelamin</label> <br>
            <input type="radio" id="jKelamin" name="jKelamin" value="Laki-laki" placeholder="">

            <label for="laki-laki">Laki-laki</label>
            <input type="radio" id="jKelamin" name="jKelamin" value="Perempuan" placeholder="">
            <label for="perempuan">Perempuan</label><br>
            <br>

            <label for="agama">Agama</label>
            <select id="agama" name="agama">
                <option value="kristen">Kristen</option>
                <option value="katolik">Katolik</option>
                <option value="islam">Islam</option>
                <option value="hindu">Hindu</option>
                <option value="budha">Budha</option>
                <option value="konghucu">Konghucu</option>
            </select>

            <label for="tmLahir">Tempat lahir</label>
            <input type="text" id="tmLahir" name="tmLahir" placeholder="">

            <label for="tglLahir">Tanggal Lahir : </label>
            <input type="date" id="tglLahir" name="tglLahir"><br>
            <br>

            <label for="hobi">Hobi</label>
            <input type="text" id="hobi" name="hobi" placeholder="">

            <label for="ctCita">Cita-cita</label>
            <input type="text" id="ctCita" name="ctCita" placeholder="">

            <label for="usia">Usia</label>
            <input type="text" id="usia" name="usia" placeholder="">
            <label for="aSekolah">Asal Sekolah</label>
            <input type="text" id="aSekolah" name="aSekolah" placeholder="">


            <input type="submit" value="Submit">
        </form>
    </div>
</body>

</html>