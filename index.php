<?php
session_start();
if (isset ($_POST['Login'])) {
$user = $_POST['user'];
$pass = $_POST['pass'];
//periksa login
if ($user == "admin" && $pass = "password") {
//menciptakan session
$_SESSION['login'] = $user;
//menuju ke halaman pemeriksaan session
echo "<h1>Anda berhasil LOGIN</h1>";
echo "<h2>Klik <a href='session2.php'>di sini
</a>
untuk menuju ke halaman pemeriksaan session";
} else {
    echo "<h1>LOGIN anda gagal</h1>";
    echo "<h2>Klik <a href='index.php'>di sini
    </a>
    untuk LOGIN kembali";
}
} else {
?>
<html>
<head>
<title>Login here...</title>
</head>
<body>
<form action="" method="post">
<h2>Login Here...</h2>
Username : <input type="text" name="user"><br>
Password : <input type="password" name="pass"><br>
<input type="submit" name="Login" value="Log In">
</form>
</body>
</html>
<?php
}
?>