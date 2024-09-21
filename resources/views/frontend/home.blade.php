<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - SATE</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            background-color: #4f653a;
            color: white;
            padding: 20px;
        }

        .sidebar h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar ul li {
            margin: 15px 0;
        }

        .sidebar ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
        }

        .sidebar .profile {
            margin-top: 50px;
            display: flex;
            align-items: center;
        }

        .sidebar .profile img {
            border-radius: 50%;
            width: 60px;
            height: 60px;
            margin-right: 10px;
        }

        .sidebar .profile div {
            line-height: 1.2;
        }

        /* Main content */
        .main {
            flex: 1;
            padding: 20px;
        }

        .main h1 {
            font-size: 32px;
            margin-bottom: 20px;
        }

        .card {
            background-color: #d2d8c7;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .card h3 {
            font-size: 24px;
            margin-bottom: 15px;
        }

        .card .status {
            color: blue;
            font-weight: bold;
        }

        .button-group {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .button-group button {
            background-color: #4f653a;
            color: white;
            border: none;
            padding: 15px 30px;
            border-radius: 10px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .button-group button:hover {
            background-color: #3b4c2d;
        }
    </style>
</head>

<body>

    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <h2>SATE</h2>
            <p>Sistem Akademik Terpadu Efisien</p>
            <ul>
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Notifikasi</a></li>
            </ul>
            <div class="profile">
                <img src="https://via.placeholder.com/60" alt="Profile Image">
                <div>
                    <p>Nama</p>
                    <p>NIP 66666666</p>
                    <p>Informatika</p>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <div class="main">
            <h1>Dashboard</h1>

            <div class="card">
                <h3>Status Dosen</h3>
                <p>Nama si dosen nya: [Nama Dosen]</p>
                <p>NIP si dosen nya: [NIP Dosen]</p>
                <p>Masa Jabatan: 2020-2025</p>
                <p>Fakultas: Fakultas Sains Matematika</p>
                <p>Status Dosen: <span class="status">AKTIF</span></p>
            </div>

            <div class="button-group">
                <a href="{{ route('monitoring') }}">
                    <button>MONITORING IRS</button>
                </a>
                <button>PENYUSUNAN JADWAL KULIAH</button>
            </div>
        </div>
    </div>

</body>

</html>
