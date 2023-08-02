<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            font-family : calibri;
            text-align : center;
        }
    </style>
</head>
<body>
    <?php 
        $connection = mysqli_connect("localhost", "root", "", "simple_form");
        if(!$connection){
            die(mysqli_connect_error());
        }
        $nama = $_POST["nama"];
        $tanggal_lahir = $_POST["tanggal_lahir"];
        $jenis_kelamin = $_POST["jenis_kelamin"];
        $alamat = $_POST["alamat"];
        $command = "INSERT INTO identitas (nama, tanggal_lahir, jenis_kelamin, alamat) VALUES ('$nama', '$tanggal_lahir', '$jenis_kelamin', '$alamat')";
        if(mysqli_query($connection, $command)){
            echo "<h1>Jawaban anda telah dikirim</h1>";
        }else{
            echo "<h1>" . mysqli_error($connection) . "</h1>";
        }
    ?>
    <a href="<?php echo dirname($_SERVER["PHP_SELF"]); ?>">Go back</a>
</body>
</html>