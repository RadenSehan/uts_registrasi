<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Data Konser</title>
    <style type="text/css">
    body {
        margin: 1cm;
        font-family: Georgia, 'Times New Roman', Times, serif;
        font-size: 14px;
        background-image: url("https://images.unsplash.com/photo-1514525253161-7a46d19cd819?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8Y29uY2VydHxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80");
        background-repeat: no-repeat;
        background-position: center;
        background-size: 1400px;
    }

    h2 {
        width: 88%;
        color: #ffffff;
        font-size: 27px;
        font-weight: 700;
        font-family: Segoe UI;
        margin: 1cm auto;
        background-color: #1E90FF;
        border-radius: 5px;
        text-align: center;
    }

    .data-konser {
        width: 70%;
        padding: 0.5cm;
        background-color: #ffffff;
        border-radius: 0.5cm;
        margin: 1cm auto;
        box-shadow: inset -2px 2px 2px white;
    }
</style>
</head>
<body>
<?php

$db = new mysqli("localhost", "root", "", "db_konser");

$result = $db->query("SELECT * FROM tb_form");

$db->close();
?>

<div class="data-konser">
    <a href="index.php" class="btn btn-primary" role="button">Kembali</a>
    <h2>Data School Festival Consert</h2>
    <table border="1" cellspacing="0" cellpadding="9" align="center">
        <tr id="baris1">
            <th>Nama Lengkap</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>Konser</th>
            <th>Foto Kartu Pelajar</th>
        </tr>

        <?php foreach ($result as $row) { ?>
            <tr id="data">
                <td id=nama_lengkap>
                    <?= $row["nama_lengkap"]; ?>
                </td>
                <td id=alamat>
                    <?php echo $row["alamat"]; ?>
                </td>
                <td id=email>
                    <?= $row["email"]; ?>
                </td>
                <td id=konser>
                    <?= $row["konser"]; ?>
                </td>
                <td id=foto>
                    <img src="/uts_registrasi/images/<?php echo $row["foto"]; ?>" width="150" height="90">
                </td>
            </tr>
        <?php } ?>

    </table>
</div>
</body>
</html>
