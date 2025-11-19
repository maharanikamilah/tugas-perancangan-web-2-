<!DOCTYPE html>
<html lang="id">
<head>
    <title>Daftar Admin Desa</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            padding: 70px; /* diperbesar supaya tidak penuh */
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: calc(100vh - 140px);
            background: linear-gradient(rgba(0,0,0,.6), rgba(0,0,0,.6)),
                        url("desa.jpg.jpeg") center/cover no-repeat;
            overflow: hidden;
        }

        /* Animasi blur background */
        .circle {
            position: absolute;
            border-radius: 50%;
            filter: blur(40px);
            opacity: 0.45;
            animation: float 8s infinite alternate ease-in-out;
        }
        .c1 { width: 180px; height: 180px; background: #2ba35a; top: 12%; left: 10%; }
        .c2 { width: 200px; height: 200px; background: #1c6f45; bottom: 10%; right: 14%; animation-delay: 2s; }
        .c3 { width: 150px; height: 150px; background: #0f5336; top: 55%; right: 40%; animation-delay: 4s; }

        @keyframes float {
            0% { transform: translateY(0px); }
            100% { transform: translateY(-35px); }
        }

        /* Card lebih kecil */
        .register-box {
            width: 320px; /* DIPERKECIL */
            background: rgba(19, 63, 45, 0.85);
            padding: 22px;
            border-radius: 15px;
            color: #eaffea;
            backdrop-filter: blur(8px);
            box-shadow: 0 6px 20px rgba(0,0,0,.4);
            animation: fadeIn 1s ease-out;
            z-index: 10;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(35px); }
            to { opacity: 1; transform: translateY(0); }
        }

        h2 {
            text-align: center;
            margin-bottom: 15px;
            font-size: 20px;
            font-weight: 600;
        }

        label {
            font-size: 13px;
            margin-top: 8px;
            display: block;
        }

        input {
            width: 100%;
            padding: 9px;
            margin-top: 5px;
            border-radius: 8px;
            border: none;
            background: #f4fff6;
            font-size: 13px;
        }

        button {
            width: 100%;
            padding: 10px;
            margin-top: 12px;
            background: #1e7a46;
            border: none;
            border-radius: 8px;
            color: white;
            font-weight: bold;
            font-size: 14px;
            cursor: pointer;
            transition: .3s;
        }

        button:hover {
            background: #2ad76d;
            transform: translateY(-3px);
        }

        .login-link {
            margin-top: 12px;
            text-align: center;
            font-size: 13px;
        }

        .login-link a {
            color: #a8ffd0;
            text-decoration: none;
        }
        .login-link a:hover { color: white; }
    </style>
</head>

<body>

    <!-- background blur animasi -->
    <div class="circle c1"></div>
    <div class="circle c2"></div>
    <div class="circle c3"></div>

    <div class="register-box">
        <h2>Daftar Admin</h2>

        <form action="proses_regis.php" method="POST">

            <label>Nama Lengkap</label>
            <input type="text" name="nama_lengkap" required>

            <label>Username</label>
            <input type="text" name="username" required>

            <label>Password</label>
            <input type="password" name="password" required>

            <label>Email</label>
            <input type="email" name="email" required>

            <label>No. Telepon</label>
            <input type="text" name="no_telp" required>

            <button type="submit" name="register">Daftar</button>
        </form>

        <div class="login-link">
            <p><a href="login.php">Kembali ke Login</a></p>
        </div>
    </div>

</body>
</html>
