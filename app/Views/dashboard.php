<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Dashboard TERANAP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        .sidebar {
            background-color: #a3d8f4;
            height: 100vh;
            padding: 20px;
        }
        .sidebar a {
            display: block;
            padding: 10px;
            margin-bottom: 10px;
            color: black;
            text-decoration: none;
            border-radius: 10px;
        }
        .sidebar a:hover, .sidebar a.active {
            background-color: #75b3dc;
            color: white;
        }
        .header {
            background-color: #80c9f0;
            padding: 10px 20px;
            color: black;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .content {
            padding: 20px;
            background-color: #d7ecf8;
            height: calc(100vh - 60px);
        }
    </style>
</head>
<body>
    <div class="header">
        <div><strong>TERANAP</strong></div>
        <div>
            <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Admin" style="width:40px; border-radius:50%; margin-right:10px;">
            <strong><?= session()->get('username') ?></strong>
            <a href="/auth/logout" class="btn btn-sm btn-danger ms-3">Logout</a>
        </div>
    </div>
    <div class="d-flex">
        <nav class="sidebar">
            <a href="#" class="active">Dashboard</a>
            <a href="#">Kelola TT</a>
            <a href="#">Pemesanan</a>
            <a href="#">Laporan Hunian</a>
        </nav>
        <main class="content">
            <h4>Selamat Datang Admin di Sistem Manajemen Tempat Tidur Rawat Inap.</h4>
            <p><em>by. kelompok 3_Gol 4B</em></p>
        </main>
    </div>
</body>
</html>
