<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS Registrasi</title>
    <style type="text/css">
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: Segoe UI;
        }

        body {
            margin-bottom: 1cm;
            justify-content: center;
            align-items: center;
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-size: 14px;
            background-image: url("https://images.unsplash.com/photo-1514525253161-7a46d19cd819?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8Y29uY2VydHxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80");
            background-repeat: no-repeat;
            background-position: center;
            background-size: 1400px;
        }

        .container {
            width: 90vw;
            max-width: 600px;
            padding: 0.5cm;
            background-color: #ffffff;
            border-radius: 0.5cm;
            margin: 1cm auto;
            box-shadow: inset -2px 2px 2px white;
        }

        .header {
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

        .input-box {
            display: flex;
            flex-wrap: wrap;
            width: 50%;
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

        .form-submit-btn input {
            width: 40%;
            border-radius: 5px;
            border: none;
            color: white;
            font-size: 20px;
            font-weight: 600;
            letter-spacing: 1px;
            cursor: pointer;
            transition: all 1ms ease;
            background: #1E90FF;
        }

        .form-submit-btn input:hover {
            color: black;
            background: #1E90FF;
        }
    </style>
</head>

<body>
    <div class="container">
        <p class="header">School Music Concert Festival</p>

        <form action="db_registrasi.php" method="POST" enctype="multipart/form-data" >
            <div class="main-input-info">
                <div class="input-box">
                    <label for="nama_lengkap">Nama Lengkap*</label>
                    <input id="name" type="text" name="nama_lengkap" placeholder="Masukkan Nama Lengkap" size="38" required>
                </div>
                <div class="input-box">
                    <label for="alamat">Alamat*</label>
                    <textarea name="alamat" placeholder="Masukkan Alamat" required></textarea>
                </div>
                <div class="input-box">
                    <label for="nomer_hp">Nomer HP*</label>
                    <input type="number" name="nomer_hp" placeholder="Masukkan Nomer Hp" required>
                </div>
                <div class="input-box">
                    <label for="konser">Pilih Festival Konser*</label>
                    <select name="konser" required>
                        <option>Tulus - 17 Mei 2024</option>
                        <option>Dewa 19 - 20 Mei 2024</option>
                        <option>Weird Genius - 23 Mei 2024</option>
                        <option>Sheila On 7 - 27 Mei 2024</option>
                        <option>Raisa Live in Concert - 29 Mei 2024</option>
                    </select>
                </div>
                <div class="input-box">
                    <label for="foto">Foto Kartu Pelajar*</label>
                    <input type="file" name="foto" accept="image/*" required />
                </div>
                <div class="form-submit-btn">
                    <td><br><input type="submit" name="tombol" value="Next" /></td>
                </div>
            </div>
        </form>
    </div>
</body>

</html>