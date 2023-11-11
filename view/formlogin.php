<html>
<head>
	<title>Login Please!</title>
<link rel="stylesheet" type="text/css" href="../asset/css/loginstyle.css">
</head>
<body>
<div class="login">
    <h2 class="login-header">Form Login</h2>
        <form class="login-container" action="../controller/login.php" method="POST">
            <p>
                <input type="text" placeholder="Username" name="username">
            </p>
            <p>
                <input type="password" placeholder="Password" name="pass">
            </p>
            <p>
                <input type="submit" value="Log in" name="submit">
            </p>
        </form>
</div>
</body>
</html>