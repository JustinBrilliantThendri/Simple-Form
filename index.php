<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            font-family : calibri;
        }
    </style>
</head>
<body>
    <form action="submit.php" method="post">
        <label for="nama">Nama :&nbsp;</label>
        <input type="text" name="nama" id="nama" required>
        <br><br>
        <label for="tgl_lahir">Tanggal lahir :&nbsp;</label>
        <input type="date" name="tanggal_lahir" required>
        <br><br>
        <label>Jenis kelamin :&nbsp;</label>
        <label>
            <input type="radio" name="jenis_kelamin" value="Laki-Laki" required> Laki-Laki
        </label>
        <label>
            <input type="radio" name="jenis_kelamin" value="Perempuan" required> Perempuan
        </label>
        <br><br>
        <label for="alamat">Alamat :&nbsp;</label>
        <textarea name="alamat" id="alamat" rows="3" cols="30" style="vertical-align:text-top;" required></textarea>
        <br><br>
        <button type="submit">Submit</button>
    </form>
    <p>&copy; <?php echo date("Y"); ?></p>
</body>
</html>
