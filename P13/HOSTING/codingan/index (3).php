<?php
// Tidak ada logika PHP di halaman awal, jadi langsung HTML saja
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Penjadwalan Desa</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Inter', sans-serif;

            /* BACKGROUND IMAGE */
            background: url('Desa.jpg') no-repeat center center fixed;
            background-size: cover;
        }

        .container {
            width: 100%;
            max-width: 1100px;
            margin: 80px auto;
            background: white;
            padding: 50px;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.08);

            /* ANIMASI MASUK */
            opacity: 0;
            transform: translateY(20px);
            animation: fadeSlideIn 1s ease-out forwards;
        }

        @keyframes fadeSlideIn {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0px);
            }
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 40px;

            opacity: 0;
            transform: translateY(-20px);
            animation: fadeDown 0.8s ease-out forwards;
            animation-delay: .3s;
        }

        @keyframes fadeDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        header img {
            height: 55px;
        }

        header a {
            text-decoration: none;
            font-weight: 600;
            color: #0d2b63;
        }

        .content {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .left {
            max-width: 450px;

            /* animasi delay */
            opacity: 0;
            animation: fadeSlideIn 1s ease-out forwards;
            animation-delay: 0.5s;
        }

        .left h1 {
            font-size: 32px;
            color: #0d2b63;
            margin-bottom: 15px;
        }

        .left p {
            color: #555;
            margin-bottom: 25px;
        }

        .btn {
            padding: 14px 28px;
            background: #0d2b63;
            color: white;
            font-weight: 600;
            border-radius: 10px;
            text-decoration: none;
            display: inline-block;

            /* animasi */
            opacity: 0;
            transform: translateY(10px);
            animation: fadeSlideIn 1s ease-out forwards;
            animation-delay: .8s;
        }

        .right img {
            width: 400px;

            opacity: 0;
            transform: translateY(20px);
            animation: fadeSlideIn 1s ease-out forwards;
            animation-delay: 1s;
        }
    </style>

</head>

<body>

    <div class="container">

        <header>
            <img src="logodesa.png" alt="Logo Desa">
            <a href="login.php">Login</a>
        </header>

        <div class="content">
            <div class="left">
                <h1>SISTEM INFORMASI PENJADWALAN PROGRAM KEGIATAN DESA</h1>
                <p>Transparansi kegiatan desa untuk masyarakat</p>
                <a href="dasboard_publik.php" class="btn">Masuk ke Sistem</a>
            </div>

            <div class="right">
                <img src="illustrasi.png" alt="Ilustrasi Desa">
            </div>
        </div>

    </div>

</body>
</html>
