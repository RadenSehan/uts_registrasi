<?php

    $db = new mysqli("localhost", "root", "", "konser");

    $result = $db->query("SELECT * FROM tb_form");

    $db->close();
    ?>

    <div id="data siswa">
        <h2 align="center">Data School Festival Consert</h2>
        <div id="table data siswa" align="center">
            <table border="1" cellspacing="0" cellpadding="9" align="center">
                <tr id="baris1">
                    <th>Nama Lengkap</th>
                    <th>Alamat</th>
                    <th>Nomer HP</th>
                    <th>Konser</th>
                    <th>Foto</th>
                </tr>

                <?php foreach ($result as $row) { ?>
                    <tr>
                        <td id=nama_lengkap>
                            <?= $row["nama_lengkap"]; ?>
                        </td>
                        <td id=alamat>
                            <?php echo $row["alamat"]; ?>
                        </td>                     
                        <td id=nomer_hp>
                            <?= $row["nomer_hp"]; ?>
                        </td>
                        <td id=konser>
                            <?= $row["konser"]; ?>
                        </td>
                        <td id=foto><img src="images/
                                <?php echo $row["foto"]; ?>" width="100" height="90">
                        </td>
                    </tr>
                <?php } ?>

            </table>
        </div>