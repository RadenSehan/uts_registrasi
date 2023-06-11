<?php
$db = new mysqli("localhost", "root", "", "db_konser");

$id = $_POST['id'];
$nama = $_POST["nama_lengkap"];
$alamat = $_POST["alamat"];
$email = $_POST["email"];
$konser = $_POST["konser"];

if (mysqli_connect_errno()) {
    die("Connection error: " . mysqli_connect_errno());
} else {
    $sql = "UPDATE tb_form SET nama_lengkap='$nama', alamat='$alamat', email='$email', konser='$konser' WHERE id='$id'";

    mysqli_query($db, $sql);
    echo "<script> alert ('Berhasil mengubah data')</script>";
    header("Location: admin.php");
}
    ?>
    