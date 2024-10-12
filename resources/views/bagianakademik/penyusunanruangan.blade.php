<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SATE - Pengisian Data Ruangan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: auto;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        header {
            background-color: #4CAF50;
            padding: 10px;
            color: white;
            text-align: left;
            font-size: 18px;
        }
        form {
            margin-top: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .buttons {
            margin-top: 20px;
            text-align: right;
        }
        .buttons button {
            padding: 10px 20px;
            margin-left: 10px;
            border: none;
            border-radius: 5px;
            color: white;
            cursor: pointer;
        }
        .save-btn {
            background-color: #0000FF;
        }
        .view-btn {
            background-color: #00FF00;
        }
        .back-btn {
            background-color: #4CAF50;
            padding: 10px 15px;
            text-decoration: none;
            color: white;
            display: inline-block;
            margin-bottom: 20px;
            border-radius: 5px;
        }
    </style>
</head>
<body>

    <header>
        <h1>SATE - Sistem Akademik Terpadu dan Efisien</h1>
    </header>

    <div class="container">
        <h2>Penyusunan Ruang Perkuliahan</h2>
        <h3>Pengisian Data Ruangan</h3>

        <form>
            <div class="form-group">
                <label for="kode">Kode Ruangan</label>
                <input type="text" id="kode" name="kode" placeholder="Masukkan kode ruangan">
            </div>
            <div class="form-group">
                <label for="gedung">Gedung</label>
                <input type="text" id="gedung" name="gedung" placeholder="Masukkan nama gedung">
            </div>
            <div class="form-group">
                <label for="kapasitas">Kapasitas</label>
                <input type="text" id="kapasitas" name="kapasitas" placeholder="Masukkan kapasitas ruangan">
            </div>

            <div class="buttons">
                <button type="submit" class="save-btn">SIMPAN</button>
            </div>
        </form>
    </div>

</body>
</html>
