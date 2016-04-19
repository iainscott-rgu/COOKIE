<html>
<head>
<title>CHECK LOGIN PAGE</title>
</head>

<?php
$username = $_POST['user'];
$password = $_POST['password'];
session_start();
$_SESSION['user'] = $username;
$_SESSION['password'] = $password;

if(isset($_SESSION['user'])) {
    $access_level = "standarduser";
}
header('location: homepage.php');
?>

<header>

</header>
<body>

<main>


</main>
</body>

</html>


