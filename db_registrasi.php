<?php
$db = new mysqli("localhost", "root", "", "konser");

$nama = $_POST["nama_lengkap"];
$alamat = $_POST["alamat"];
$nomer_hp = filter_input(INPUT_POST, "nomer_hp", FILTER_VALIDATE_INT);
$konser = $_POST["konser"];

$foto = $_FILES["foto"]["name"];
$tempname = $_FILES["foto"]["tmp_name"];
$folder = "images/" . $foto;
move_uploaded_file($tempname, $folder);

$db = new mysqli("localhost", "root", "", "konser");

if (mysqli_connect_errno()) {
        die("Connection error: " . mysqli_connect_errno());
}

$sql = "INSERT INTO tb_form (nama_lengkap, alamat, nomer_hp, konser, foto)
                VALUES ('$nama', '$alamat', '$nomer_hp', '$konser', '$foto')";

mysqli_query($db, $sql);
echo "<script> alert ('Berhasil memasukkan data')</script>";
?>