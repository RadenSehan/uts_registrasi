<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/concert.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Login Admin</title>
    <style type="text/css">
        * {
            padding: 0;
            margin: 0;
            font-family: Segoe UI;
        }

        body {
            margin: 9%;
            font-size: 14px;
            background-image: url("https://images.unsplash.com/photo-1514525253161-7a46d19cd819?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8Y29uY2VydHxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80");
            background-repeat: no-repeat;
            background-position: center;
            background-size: 100%;
        }

        .container { 
            width: 25%;
            padding: 0.5cm;
            background-color: #ffffff;
            border-radius: 0.5cm;
            margin: 1cm auto;
            box-shadow: inset -2px 2px 2px white;
        }
        h2 {
            width: 80%;
            color: #ffffff;
            font-size: 27px;
            font-weight: 20px;
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
        </style>
</head>

<body>
    <div class="container">
    <a href="index.php" class="btn btn-primary btn-lg" role="button"><i class="bi bi-arrow-left-square"></i></a>
        <div class="sign-in-container">
            <form action="" method="post">
                <h2>Login Admin</h2>
                <div class="input-box">
                <label for="nama_lengkap">Admin Username*</label>
                <input type="text" name="admin" placeholder="Masukkan Nama Admin" required />
                </div>
                <div class="input-box">
                <label for="nama_lengkap">Password*</label>
                <input type="password" name="password" placeholder="Password" required />
                </div>
                <button type="submit" name="login" class="btn btn-primary">Sign-in</button>
            </form>
        </div>
    </div>
    <script src="script.js"></script>

    <?php

    session_start();

    if (isset($_POST['login'])) {
        $db = new mysqli("localhost", "root", "", "db_konser");

        $admin = $_POST['admin'];
        $pass = $_POST['password'];

        $sql = " SELECT * FROM tb_login_admin WHERE admin='$admin' AND password='$pass' ";
        $hasil = mysqli_query($db, $sql);

        if ($hasil->num_rows == 0) {
            echo '<script language = "javascript">
            alert("Admin Username atau Password salah!"); 
            document.location="login_admin.php";</script>';
        } else {
            echo '<script language = "javascript"> 
            document.location="admin.php";</script>';
        }
    };
    ?>
</body>

</html>