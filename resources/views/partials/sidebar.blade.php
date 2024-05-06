<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar</title>
    <style>
        /* Sidebar CSS */
        .sidebar {
            position: fixed;
            top: 15;
            left: 0;
            height: 100%;
            width: 250px; /* Ubah lebar sesuai kebutuhan */
            background-color: #ffffff; /* Warna latar belakang */
            padding: 20px; /* Padding untuk konten di dalam sidebar */
            color: #000000; /* Warna teks */
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1); /* Shadow */
        }

        .sidebar h2 {
            color: #000000; /* Warna teks untuk judul sidebar */
        }

        .sidebar a {
            color: #000000; /* Warna tautan */
            text-decoration: none; /* Hapus garis bawah */
        }

        .sidebar a:hover {
            color: #ccc; /* Warna tautan saat dihover */
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Program Studi</h2>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="#">
                    <i class="fas fa-home mr-2"></i><span style="color: black;">S1-Sistem Informasi</span>
                </a>
            </li>
        </ul>
    </div>
</body>
</html>
