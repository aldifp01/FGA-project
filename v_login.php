<html>

<head>
    <link rel="stylesheet" href="v_style.css">
    <title>Login Page</title>
</head>
<h1>Login akun Pengurus BEM</h1>
<p>Masukan data berikut untuk Login.</p>

<body>
    <form action="m_login.php" method="POST">
        <p> Username:
            <input type="text" name="Username" placeholder="Masukan username" size="30" maxlength="50">
        </p>
        <p> Password:
            <input type="password" name="Password" placeholder="Masukan password" size="20" maxlength="50">
        </p>
        <p>Level Otoritas:
            <input type="text" name="Level" placeholder="Masukan level otorisasi (1 untuk kepala
departemen dan 2 untuk menteri)" size="30" maxlength="50">
        </p>
        <input type="submit" class="registerbtn" value="Login" name="login">
    </form>
</body>

</html>