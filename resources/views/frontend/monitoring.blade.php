<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitoring IRS</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        color: #333;
    }

    .header {
        display: flex;
        align-items: center;
        background-color: #A5AE57;
        padding: 20px;
    }

    .logo img {
        height: 50px;
    }

    .title {
        margin-left: 20px;
    }

    .title h1 {
        font-size: 24px;
        margin-bottom: 5px;
        color: #000;
    }

    .title h2 {
        font-size: 18px;
        color: #000;
    }

    .section-title h3 {
        text-align: center;
        margin: 20px 0;
        color: #333;
    }

    .stats-box {
        background-color: #D5DFBA;
        padding: 20px;
        margin: 20px;
        border-radius: 8px;
    }

    .stats-box h4 {
        margin-bottom: 10px;
    }

    .stat-detail {
        display: flex;
        justify-content: space-between;
    }

    .stat-detail div {
        text-align: center;
    }

    .search-box {
        display: flex;
        justify-content: center;
        margin: 20px;
    }

    .search-box input {
        padding: 10px;
        width: 80%;
        border-radius: 20px;
        border: 1px solid #ccc;
    }

    .search-box button {
        background-color: transparent;
        border: none;
        font-size: 20px;
        margin-left: -40px;
        cursor: pointer;
    }

    .data-table {
        width: 100%;
        margin: 20px 0;
        border-collapse: collapse;
    }

    .data-table th,
    .data-table td {
        padding: 15px;
        text-align: center;
        border: 1px solid #ddd;
    }

    .data-table th {
        background-color: #f8f8f8;
    }

    .status {
        padding: 5px 10px;
        border-radius: 5px;
        color: white;
        font-weight: bold;
    }

    .status.approved {
        background-color: #4CAF50;
    }

    .status.not-approved {
        background-color: #FF4F4F;
    }

    .back-btn {
        background-color: #A5AE57;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        position: fixed;
        bottom: 20px;
        left: 20px;
    }
</style>

<body>

    <header class="header">
        <div class="logo">
            <img src="logo.png" alt="SATE Logo">
        </div>
        <div class="title">
            <h1>SATE</h1>
            <h2>Sistem Akademik Terpadu dan Efisien</h2>
        </div>
    </header>

    <section class="content">
        <div class="section-title">
            <h3>MONITORING IRS</h3>
        </div>

        <div class="stats-box">
            <div class="statistic">
                <h4>Statistik Mahasiswa</h4>
                <p>Informasi selengkapnya mengenai statistik mahasiswa seperti mahasiswa aktif, mahasiswa yang telah
                    mengisi IRS, dan mahasiswa yang menunggu verifikasi.</p>
                <div class="stat-detail">
                    <div>
                        <p>Mahasiswa Aktif</p>
                        <h3>4</h3>
                    </div>
                    <div>
                        <p>Mahasiswa Yang Sudah Diverifikasi</p>
                        <h3>2</h3>
                    </div>
                    <div>
                        <p>Mahasiswa Yang Sudah Mengisi IRS</p>
                        <h3>3</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="search-box">
            <input type="text" placeholder="Cari Mahasiswa">
            <button type="button">🔍</button>
        </div>

        <table class="data-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Angkatan</th>
                    <th>Tahun Akademik</th>
                    <th>Status Persetujuan IRS</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>24060122130076</td>
                    <td>Azzam Saefudin Rosyidi</td>
                    <td>2022</td>
                    <td>2024/2025 Gasal/5</td>
                    <td><span class="status approved">Sudah Disetujui</span></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>240601221...</td>
                    <td>Muhammad</td>
                    <td>2022</td>
                    <td>2024/2025 Gasal/5</td>
                    <td><span class="status approved">Sudah Disetujui</span></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>240601221...</td>
                    <td>Abdul</td>
                    <td>2021</td>
                    <td>2024/2025 Gasal/7</td>
                    <td><span class="status not-approved">Belum Disetujui</span></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>240601221...</td>
                    <td>Bakir</td>
                    <td>2023</td>
                    <td>2024/2025 Gasal/3</td>
                    <td><span class="status approved">Sudah Disetujui</span></td>
                </tr>
            </tbody>
        </table>
    </section>

    <footer>
        <button type="button" class="back-btn">⬅</button>
    </footer>

</body>

</html>
