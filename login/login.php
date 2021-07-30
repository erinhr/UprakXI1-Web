<?php 
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'loginyu';

$conn = mysqli_connect($host, $user, $password);
mysqli_select_db($conn, $db);

if (isset($_POST['username'])) {
	$nama = $_POST['username'];
	$pass = $_POST['password'];

	$sql = "SELECT * FROM users WHERE user = '" . $nama ."' AND pass = '". $pass ."'";
	$r = mysqli_query($conn, $sql);

	if (mysqli_num_rows($r) == 1) {
		header("location:../halamanpenulis/halamanpenulis.php");
		exit();
	} else {
		echo "Login Failed";
		exit();
	}
}


 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		Login Page
	</title>
	<link rel="stylesheet" href="login.css">
	<link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
</head>

<body>

	<div class="home card">
		<h1 class="login">LOGIN</h1>
		<form method="POST" action="">
			<div class="masukan">
				<input type="text" name="username" placeholder="Enter Your Username" class="username"><br><br>
				<input type="password" name="password" placeholder="Enter Your Password" class="password"><br><br>
			</div>
				<input type="submit" name="submit" value="LOGIN" class="tombol_login"/>
		</form>
	</div>

</body>

</html>