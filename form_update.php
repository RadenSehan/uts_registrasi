<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Form Edit Data</title>
    <style type="text/css">
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: Segoe UI;
        }

        body {
            margin: 4cm;
            font-family: "Segoe UI";
            font-size: 14px;
            background-image: url("https://images.unsplash.com/photo-1514525253161-7a46d19cd819?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8Y29uY2VydHxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80");
            background-repeat: no-repeat;
            background-position: center;
            background-size: 2000px;
        }

        .container {
            width: 70%;
            max-width: 600px;
            padding: 0.5cm;
            background-color: #ffffff;
            border-radius: 0.5cm;
            margin: 1cm auto;
            box-shadow: inset -2px 2px 2px white;
        }

        h2 {
            width: 60%;
            color: #ffffff;
            font-size: 27px;
            font-weight: 700;
            font-family: Segoe UI;
            margin: 1cm auto;
            background-color: #1E90FF;
            border-radius: 5px;
            text-align: center;
        }

        .input-box {
            display: flex;
            flex-wrap: wrap;
            width: 105%;
            padding-bottom: 15px;
            font-family: Segoe UI;
        }

        .input-box label {
            width: 95%;
            font-size: 16px;
            font-weight: 600;
            margin: 5px 0;
        }

        .input-box input,
        textarea,
        select {
            height: 30px;
            width: 95%;
            border-radius: 5px;
            outline: none;
            border: 2px solid black;
            padding: 0 8px;
        }

        button {
            margin-left: 12.7cm;
            height: 50px;
        }
    </style>
</head>
<body>    
    <div class="container">
        <a href="admin.php" class="btn btn-primary btn-lg" role="button"><i class="bi bi-arrow-left-square"></i></a>
        <h2>Edit Data</h2>

    <?php
    $db = new mysqli("localhost", "root", "", "db_konser");

    $id=$_GET['id'];
    $sql = "SELECT * FROM tb_form WHERE id='$id'";
    $q=mysqli_query($db, $sql);
    while($data=mysqli_fetch_array($q)){
    ?>

        <form action="update.php" method="POST">
            <div class="main-input-info">
                <div class="input-box">
                    <label for="nama_lengkap">Nama Lengkap*</label>
                    <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                    <input type="text" name="nama_lengkap" placeholder="Masukkan Nama Lengkap" size="38" value="<?php echo $data['nama_lengkap'] ?>"
                        required>
                </div>
                <div class="input-box">
                    <label for="alamat">Alamat*</label>
                    <input type="text" name="alamat" placeholder="Masukkan Alamat" value="<?php echo $data['alamat'] ?>" required>
                </div>
                <div class="input-box">
                    <label for="email">Email*</label>
                    <input type="email" name="email" placeholder="Masukkan Email" value="<?php echo $data['email'] ?>" required>
                </div>
                <div class="input-box">
                    <label for="konser">Pilih Festival Konser*</label>
                    <select name="konser" value="<?php echo $data['konser'] ?>" required>
                        <option>Tulus - 17 Mei 2024</option>
                        <option>Dewa 19 - 20 Mei 2024</option>
                        <option>Weird Genius - 23 Mei 2024</option>
                        <option>Sheila On 7 - 27 Mei 2024</option>
                        <option>Raisa Live in Concert - 29 Mei 2024</option>
                    </select>
                </div>
                <div class="input-box">
                    <label for="foto">Foto Kartu Pelajar*</label>
                    <img src="/uts_registrasi/images/<?php echo $data['foto'] ?>" width="150" height="90">
                </div>

                <button type="submit" name="submit" class="btn btn-primary">Simpan</button>

            </div>
        </form>
        <?php }?>
    </div>
</body>
</html>