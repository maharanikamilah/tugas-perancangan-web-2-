<?php
session_start();
include "koneksi.php";

if (isset($_POST['login'])) {

    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $password = mysqli_real_escape_string($koneksi, $_POST['password']);

    $query = mysqli_query($koneksi, 
        "SELECT * FROM admin_desa 
         WHERE username='$username' AND password='$password'"
    );

    $data = mysqli_fetch_assoc($query);

    if ($data) {
        $_SESSION['username'] = $data['username'];
        $_SESSION['level'] = "admin";

        header("location: index.php");
        exit;
    } else {
        $error = "Username atau password salah!";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <title>Login Admin Desa</title>

    <style>
        body {
            margin: 0;
            height: 100vh;
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(rgba(0,0,0,.6), rgba(0,0,0,.6)),
                        url("desa.jpg.jpeg") center/cover no-repeat;
            overflow: hidden;
        }

        /* animasi background abstrak */
        .circle {
            position: absolute;
            border-radius: 50%;
            filter: blur(40px);
            opacity: 0.45;
            animation: float 8s infinite alternate ease-in-out;
            z-index: 1; /* supaya animasi ada di bawah */
        }
        .c1 { width: 220px; height: 220px; background: #2ba35a; top: 10%; left: 5%; }
        .c2 { width: 260px; height: 260px; background: #1c6f45; bottom: 12%; right: 10%; animation-delay: 2s; }
        .c3 { width: 180px; height: 180px; background: #0f5336; top: 55%; right: 40%; animation-delay: 4s; }

        @keyframes float {
            0% { transform: translateY(0px); }
            100% { transform: translateY(-35px); }
        }

        /* card login */
        .login-box {
            position: relative;
            width: 380px;
            padding: 32px;
            background: rgba(19, 63, 45, 0.85);
            border-radius: 15px;
            backdrop-filter: blur(8px);
            color: #dfffe6;
            box-shadow: 0 6px 18px rgba(0,0,0,.5);
            animation: fadeIn 1.1s ease-out;
            z-index: 9997; /* box harus di atas background */
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(35px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .login-box h2 {
            text-align: center;
            margin-bottom: 25px;
            font-size: 24px;
        }

        label {
            font-size: 14px;
            margin-top: 10px;
            display: block;
        }

        input {
            width: 100%;
            padding: 11px;
            margin-top: 6px;
            margin-bottom: 15px;
            border-radius: 8px;
            border: none;
            font-size: 14px;
        }

        button {
            width: 100%;
            padding: 12px;
            margin-top: 8px;
            background: #1e7a46;
            border: none;
            border-radius: 8px;
            color: white;
            font-weight: bold;
            font-size: 15px;
            cursor: pointer;
            transition: .3s;
        }

        button:hover {
            background: #2dbb6a;
            transform: translateY(-3px);
        }

        .error {
            background: rgba(255, 96, 96, 0.2);
            padding: 8px;
            border-left: 4px solid #ff6b6b;
            color: #ffc7c7;
            font-size: 13px;
            margin-bottom: 10px;
            border-radius: 6px;
        }

        .register {
            margin-top: 15px;
            text-align: center;
            font-size: 14px;
            position: relative;
            z-index: 9999; /* paling atas agar bisa diklik */
        }

        .register a {
            color: #a8ffd0;
            text-decoration: none;
            font-weight: bold;
            position: relative;
            z-index: 9999; /* link tidak tertutup animasi */
        }

        .register a:hover {
            color: white;
        }
    </style>
</head>

<body>

    <!-- background animasi abstrak -->
    <div class="circle c1"></div>
    <div class="circle c2"></div>
    <div class="circle c3"></div>

    <div class="login-box">

        <h2>Login Admin Desa</h2>

        <?php if (!empty($error)) echo "<div class='error'>$error</div>"; ?>

        <form method="POST">

            <label>Username</label>
            <input type="text" name="username" required>

            <label>Password</label>
            <input type="password" name="password" required>

            <button type="submit" name="login">Masuk</button>
        </form>

        <div class="register">
            <p><a href="regis.php">Daftar Admin Baru</a></p>
        </div>
    </div>

</body>
</html>
