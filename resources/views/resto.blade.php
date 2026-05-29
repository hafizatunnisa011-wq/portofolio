<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>
        Detail Project
    </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <style>

        body{
            background:#fff5f8;
            font-family:Arial;
            padding:50px;
        }

        .card-custom{
            background:white;
            border-radius:20px;
            padding:40px;
            box-shadow:0 0 15px rgba(0,0,0,0.08);
        }

        .title{
            color:#ff4f9a;
            font-weight:bold;
            margin-bottom:20px;
        }

        .shadow{
            box-shadow:0 5px 15px rgba(0,0,0,0.15) !important;
        }

        img{
            transition:0.3s;
        }

        img:hover{
            transform:scale(1.02);
        }

        .btn-pink{
            background:#ff4f9a;
            color:white;
            padding:12px 25px;
            border-radius:10px;
            text-decoration:none;
            display:inline-block;
            margin-bottom:30px;
        }

    </style>

</head>

<body>

    <a href="/"
       class="btn-pink">

        ← Kembali

    </a>

    <div class="card-custom">

        <h2 class="title">
            Website Reservasi Restoran
        </h2>

        <p>
           Website reservasi restoran berbasis HTML, CSS, JavaScript, PHP, dan MySQL 
yang memungkinkan pengguna melakukan pemesanan meja secara online serta admin 
dapat mengelola data reservasi dengan mudah.
        </p>

        <h4 class="mt-4">
            Fitur Website
        </h4>

        <ul>
            <li>Reservasi meja online</li>
            <li>Login admin</li>
            <li>Dashboard admin</li>
            <li>CRUD data reservasi</li>
            <li>Manajemen meja restoran</li>
        </ul>

        <p>
            <b>Teknologi:</b>
            HTML, CSS, JavaScript, PHP, MySQL, XAMPP
        </p>

        <hr class="my-5">

        <h3 class="mb-4">
            Screenshot Project
        </h3>

        <div class="row justify-content-center">

            <!-- GAMBAR 1 -->
            <div class="col-md-6 mb-5">

                <img src="{{ asset('assets/img/resto1.png') }}"
                     class="img-fluid rounded shadow">

                <div class="mt-3">

                    <h5>Halaman Pertama</h5>

                    <p>
                        Halaman utama website restoran adalah halaman yang menampilkan fitur reservasi untuk pelanggan memilih meja restoran secara online dengan
                        memilih tanggal, waktu,
                        dan jumlah tamu.
                    </p>

                </div>

            </div>

            <!-- GAMBAR 2 -->
            <div class="col-md-6 mb-5">

                <img src="{{ asset('assets/img/resto2.png') }}"
                     class="img-fluid rounded shadow">

                <div class="mt-3">

                    <h5>Halaman Menu</h5>

                    <p>
                        Pengguna dapat menambahkan menu saat melakukan reservasi meja melalui halaman menu ini.
        
                    </p>

                </div>

            </div>

            <!-- GAMBAR 3 -->
            <div class="col-md-6 mb-5">

                <img src="{{ asset('assets/img/resto3.png') }}"
                     class="img-fluid rounded shadow">

                <div class="mt-3">

                    <h5>Kartu Reservasi</h5>

                    <p>
                        Kartu ini ditampilkan setelah pelanggan berhasil
                        melakukan reservasi untuk ditunjukkan ke kasir restoran.
                        Kartu berisi informasi reservasi seperti nama pelanggan, tanggal Reservasi,
                        nomor meja, dan detail pesanan.
                    </p>

                </div>

            </div>

            <!-- GAMBAR 4 -->
            <div class="col-md-6 mb-5">

                <img src="{{ asset('assets/img/resto4.png') }}"
                     class="img-fluid rounded shadow">

                <div class="mt-3">

                    <h5>Panel Admin</h5>

                    <p>
                        Merupakan halaman khusus yang hanya dapat diaksees oleh
                         staff restoran. Admin harus memasukkan username 
                         dan password untuklogin ke sistem.
                    </p>

                </div>

            </div>

            <!-- GAMBAR 5 -->
            <div class="col-md-8 mb-5 text-center">

                <img src="{{ asset('assets/img/resto5.png') }}"
                     class="img-fluid rounded shadow">

                <div class="mt-3">

                    <h5>Dashboard Admin</h5>

                    <p>
                        Dashboard admin digunakan untuk
                        mengelola data reservasi pelanggan
                        dan memantau aktivitas website.
                    </p>

                </div>

            </div>

        </div>

    </div>

</body>
</html>