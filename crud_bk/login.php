<!DOCTYPE html>
<html>
<head>
    <title>Login BK</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="login-box">

    <img src="logo.png" class="logo">

    <h2 class="login-title">
    BIMBINGAN KONSELING <br>
    SMKN 2 BALEENDAH
</h2>

    <form action="proses_login.php" method="POST">

        <input type="text" name="username" placeholder="Username" required>

        <input type="password" name="password" placeholder="Password" required>

        <button type="submit" class="btn btn-login">
            Login
        </button>

    </form>

</div>

</body>
</html>