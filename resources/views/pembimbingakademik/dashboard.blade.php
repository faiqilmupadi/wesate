<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Pembimbing Akademik (RAMA)</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fff;
        }
        .header {
            background-color: #658345;
            color: black;
            padding: 30px;
            text-align: left;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .header h1 {
            margin: 0;
            font-size: 30px;
            margin-left: 120px; /* Tambahkan margin-left untuk menggeser teks */
        }
        .header img {
            height: 60px;
            margin-right: 20px;
        }
        .sidebar {
            width: 230px;
            background-color: #fff;
            height: 100vh;
            position: fixed;
            top: 10;
            left: 0;
            color: black;
            padding: 20px;
            border-right: 2px solid green;
            height: 589px;
            position: absolute;
            right: 10%;
        }
        .sidebar h2, .sidebar a {
            font-size: 18px; /* Ukuran font yang sama */
            font-weight: bold; /* Ketebalan font yang sama */
            margin-bottom: 20px; /* Jarak yang sama antar elemen */
            color: black;
            text-decoration: none;
        }
        .sidebar a {
            display: block;
        }
        .main-content {
            margin-left: 270px;
            padding: 30px;
        }
        .status-section {
            background-color: #658345;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .status-section h3 {
            margin: 0 0 15px 0;
        }
        .status-details {
            display: flex;
            flex-direction: column;
        }
        .status-details p {
            margin: 5px 0;
        }
        .status-section .status-button {
            background-color: #0014CB;
            color: black;
            padding: 10px;
            border-radius: 5px;
            text-decoration: none;
        }
        .empty-section {
            background-color: #658345;
            color: black;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            text-align: center;
        }
        .profile {
            position: fixed;
            bottom: 20px;
            left: 70px;
            text-align: center;
        }
        .profile img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
        }
        .profile-name {
            margin-top: 10px;
            font-size: 14px;
        }
    </style>
</head>
<body>

<div class="header">
    <div>
        <img src="sate_logo.png" alt="SATE Logo">
        <h1>SATE <br><small>Sistem Akademik Terpadu Efisien</small></h1>
    </div>
</div>

<div class="sidebar">
    <h2>Dashboard</h2>
    <a href="#">Profile</a> <!-- Profile disamakan -->
    <a href="#">Notifikasi</a> <!-- Notifikasi disamakan -->
</div>

<div class="main-content">
    <div class="status-section">
        <div class="status-details">
            <h3>Status Pegawai</h3>
            <p>Nama si Pegawai nya</p>
            <p>NIP si Pegawai nya</p>
            <p><strong>Masa Jabatan:</strong> 2018 - 2038</p>
            <p><strong>Fakultas:</strong> Fakultas Sains Matematika</p>
        </div>
        <a href="#" class="status-button">AKTIF</a>
    </div>

    <div class="empty-section">
        VERIFIKASI IRS
    </div>
</div>

<div class="profile">
    <img src="profile.png" alt="Profile Image">
    <div class="profile-name">
        <p>Nama: Nama Dekan</p>
        <p>NIP: 66666666</p>
        <p>Informatika</p>
    </div>
</div>

</body>
</html>
