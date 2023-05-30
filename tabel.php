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

    .data-konser a {
        text-decoration: none;
        text-align: center;
        padding: 8px;
        border-radius: 5px;
        color: white;
        font-family: "Segoe UI";
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        background: #1E90FF;
    }

    .data-konser a:hover {
        color: black;
        background: #1E90FF;
    }
</style>

<?php

$db = new mysqli("localhost", "root", "", "konser");

$result = $db->query("SELECT * FROM tb_form");

$db->close();
?>

<div class="data-konser">
    <a href="index.php" class="back">Kembali</a>
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
                    <img src="/uts_registrasi/images/<?php echo $row["foto"];?>"width="150" height="90">
                </td>
            </tr>
        <?php } ?>

    </table>
</div>