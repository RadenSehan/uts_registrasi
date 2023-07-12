<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/concert.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Tambah Kegiatan</title>
    <style type="text/css">
        @media screen and (max-width: 1042px) {
            
            * {
                padding: 0;
                margin: 0;
            }

            body {
                margin-top: 30%;
                background-image: url("https://images.unsplash.com/photo-1514525253161-7a46d19cd819?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8Y29uY2VydHxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80");
                background-position: center;
                background-size: 100%;
            }

            .container {
                width: 70%;
                padding: 0.5cm;
                background-color: #ffffff;
                border-radius: 0.5cm;
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

            .input-box input {
                height: 30px;
                width: 95%;
                border-radius: 5px;
                outline: none;
                border: 2px solid black;
                padding: 0 8px;
            }

            button {
                margin-left: 30%;
                width: 40%;
            }
        }

        @media screen and (min-width: 1043px) {
            * {
                padding: 0;
                margin: 0;
                font-family: Segoe UI;
            }

            body {
                margin: 4%;
                background-image: url("https://images.unsplash.com/photo-1514525253161-7a46d19cd819?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8Y29uY2VydHxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80");
                background-position: center;
                background-size: 100%;
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

            .input-box input {
                height: 30px;
                width: 95%;
                border-radius: 5px;
                outline: none;
                border: 2px solid black;
                padding: 0 8px;
            }

            button {
                margin-left: 30%;
                width: 40%;
            }
        }    
    </style>
</head>

<body>
    <div class="container">
        <a href="admin.php" class="btn btn-primary btn-lg" role="button"><i class="bi bi-arrow-left-square"></i></a>
        <h2>Tambah Kegiatan</h2>

        <form action="" method="POST" enctype="multipart/form-data">
            <div class="input-box">
                <label for="kegiatan">Nama Kegiatan*</label>
                <input type="text" name="kegiatan" placeholder="Masukkan Nama Kegiatan" required>
            </div>
            <div class="input-box">
                <label for="tanggal">Tanggal*</label>
                <input type="date" name="tanggal" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
    <script src="script.js"></script>
    
    <?php
    if (isset($_POST['submit'])) {
        $db = new mysqli("localhost", "root", "", "db_konser");

        $kegiatan = $_POST["kegiatan"];
        $tanggal = $_POST["tanggal"];

        $db = new mysqli("localhost", "root", "", "db_konser");

        if (mysqli_connect_errno()) {
            die("Connection error: " . mysqli_connect_errno());
        } else {
            $sql = "INSERT INTO tb_kegiatan (kegiatan, tanggal) VALUES ('$kegiatan', '$tanggal')";

            mysqli_query($db, $sql);
            echo '<script language = "javascript">
            alert("Berhasil menambahkan kegiatan."); 
            document.location="admin.php";</script>';
        }
    }
    ?>
</body>
</html>