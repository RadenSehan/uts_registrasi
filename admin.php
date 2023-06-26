<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Data Konser</title>
    <style type="text/css">
        body {
            margin: 1cm;
            font-family: "Segoe UI";
            font-size: 14px;
            background-image: url("https://images.unsplash.com/photo-1514525253161-7a46d19cd819?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8Y29uY2VydHxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80");
            background-repeat: no-repeat;
            background-position: center;
            background-size: 100%;
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

        .container {
            width: auto;
            padding: 0.5cm;
            background-color: #ffffff;
            border-radius: 0.5cm;
            margin: 1cm auto;
            box-shadow: inset -2px 2px 2px white;
        }

        #tambah_data {
            margin-left: 5%;
        }

        #tambah_keg {
            margin-left: 62%;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Data School Festival Consert</h2>
        <hr>
        <div class="tambah">
            <a id="tambah_data" href="index.php" class="btn btn-primary" role="button"><i class="bi bi-person-plus-fill"></i> Tambah Data</a>
            <a id="tambah_keg" href="tambah_kegiatan.php" class="btn btn-warning" role="button"><i class="bi bi-plus-square-fill"></i> Tambah Kegiatan</a>
        </div>
        <br>
        <table border="1" cellpadding="9" align="center">
            <tr id="baris1" align="center">
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>Konser</th>
                <th>Foto Kartu Pelajar</th>
                <th>Aksi</th>
            </tr>

            <?php
            $db = new mysqli("localhost", "root", "", "db_konser");

            $result = $db->query("SELECT * FROM tb_form");
        
            $db->close();

            $no = 1;
            foreach ($result as $row) { ?>
                <tr id="data">
                    <td>
                        <?php echo $no++ ?>
                    </td>
                    <td id="nama_lengkap">
                        <?= $row["nama_lengkap"]; ?>
                    </td>
                    <td id="alamat">
                        <?php echo $row["alamat"]; ?>
                    </td>
                    <td id="email">
                        <?= $row["email"]; ?>
                    </td>
                    <td id="konser">
                        <?= $row["konser"]; ?>
                    </td>
                    <td id="foto">
                        <img src="/uts_registrasi/images/<?php echo $row["foto"]; ?>" width="150" height="90">
                    </td>
                    <td id="aksi">
                        <a href="form_update.php?id=<?php echo $row['id'] ?>" class="btn btn-success" role="button"><i
                                class="bi bi-pencil-square"></i></a>
                        <a href="?proses=hapus&&id=<?php echo $row['id'] ?>" class="btn btn-danger" role="button" onclick="return confirm('Apakah Anda yakin menghapus data ini?')"><i
                                class="bi bi-trash-fill"></i></a>
                    </td>
                </tr>
            <?php } ?>

        </table>
    </div>
    <script src="script.js"></script>

    <?php
    $db = new mysqli("localhost", "root", "", "db_konser");

    if (@$_GET['proses'] == 'hapus') {
        $id = $_GET['id'];
        $sql = "DELETE FROM tb_form WHERE id='$id'";
        mysqli_query($db, $sql);

        echo '<script> alert ("Berhasil menghapus data");
        document.location="admin.php";</script>';

    } ?>
</body>

</html>