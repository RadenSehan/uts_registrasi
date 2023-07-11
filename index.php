<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/concert.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>School Music Concert Festival</title>
    <style type="text/css">
        @media (min-width: 370px) {
            * {
                padding: 0;
                margin: 0;
            }

            body {
                margin-top: 30%;
                background-image: url("https://images.unsplash.com/photo-1514525253161-7a46d19cd819?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8Y29uY2VydHxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80");
                background-repeat: no-repeat;
                background-position: center;
                background-size: 290%;
            }

            .container {
                width: 80%;
                padding: 15px;
                background-color: #ffffff;
                border-radius: 10px;
                margin: 1cm auto;
                box-shadow: inset -2px 2px 2px white;
            }

            h2 {
                width: 80%;
                color: #ffffff;
                font-size: 20px;
                font-weight: 17px;
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
        }

        @media screen and (min-width: 839px) {
            * {
                padding: 0;
                margin: 0;
                box-sizing: border-box;
                font-family: Segoe UI;
            }

            body {
                margin-top: 10%;
                font-size: 14px;
                background-image: url("https://images.unsplash.com/photo-1514525253161-7a46d19cd819?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8Y29uY2VydHxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80");
                background-repeat: no-repeat;
                background-position: center;
                background-size: 140%;
            }

            .container {
                width: 70%;
                max-width: 600px;
                padding: 15px;
                background-color: #ffffff;
                border-radius: 10px;
                margin: 1cm auto;
                box-shadow: inset -2px 2px 2px white;
            }

            h2 {
                width: 80%;
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
                font-weight: 7px;
                margin: 5px;
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
                margin-left: 68%;
                height: 50px;
            }
        }
    </style>
</head>

<body>
    <div class="container">

        <h2>School Music Concert Festival</h2>

        <form action="" method="POST" enctype="multipart/form-data">
            <div class="main-input-info">
                <div class="input-box">
                    <label for="nama_lengkap">Nama Lengkap*</label>
                    <input id="name" type="text" name="nama_lengkap" placeholder="Masukkan Nama Lengkap" size="38"
                        required>
                </div>
                <div class="input-box">
                    <label for="alamat">Alamat*</label>
                    <textarea name="alamat" placeholder="Masukkan Alamat" required></textarea>
                </div>
                <div class="input-box">
                    <label for="email">Email*</label>
                    <input type="email" name="email" placeholder="Masukkan Email" required>
                </div>
                <div class="input-box">
                    <label for="konser">Pilih Festival Konser*</label>
                    <select name="konser" required>
                        <option value="">Pilih</option>
                        <?php
                        $db = new mysqli("localhost", "root", "", "db_konser");

                        $sql = ('SELECT * FROM tb_kegiatan');
                        $q = mysqli_query($db, $sql);
                        while($kegiatan = mysqli_fetch_array($q)) {
                            echo '<option value="'.$kegiatan['kegiatan'].'">'.$kegiatan['kegiatan'].'</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="input-box">
                    <label for="foto">Foto Kartu Pelajar*</label>
                    <input type="file" name="foto" accept="image/*" required />
                </div>

                <a href="login_admin.php" class="btn btn-warning" role="button"><i class="bi bi-person-fill"></i> Admin</a>
                <button type="submit" name="submit" class="btn btn-primary">SUBMIT</button>

            </div>
        </form>
    </div>
    <script src="script.js"></script>
    
    <?php
    if (isset($_POST['submit'])) {
        $db = new mysqli("localhost", "root", "", "db_konser");

        $nama = $_POST["nama_lengkap"];
        $alamat = $_POST["alamat"];
        $email = $_POST["email"];
        $konser = $_POST["konser"];
        $foto = $_FILES["foto"]["name"];
        $tempname = $_FILES["foto"]["tmp_name"];
        $folder = "images/" . $foto;
        move_uploaded_file($tempname, $folder);

        $db = new mysqli("localhost", "root", "", "db_konser");

        if (mysqli_connect_errno()) {
            die("Connection error: " . mysqli_connect_errno());
        } else {
            $sql = "INSERT INTO tb_form (nama_lengkap, alamat, email, konser, foto)
                VALUES ('$nama', '$alamat', '$email', '$konser', '$foto')";

            mysqli_query($db, $sql);
            echo "<script> alert ('Berhasil memasukkan data')</script>";
        }
    }
    ?>
</body>
</html>