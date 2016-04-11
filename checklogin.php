<html>
<head>
<title>CHECK LOGIN PAGE</title>
</head>

<?php
session_start();


if(isset($_SESSION['user'])) {
    setcookie('user_cookie');
    setcookie('access_level', 'standarduser');
}


$newhtml =
    <<<NEWHTML



NEWHTML;

print($newhtml);

header('location: homepage.php');
?>

<header>

</header>
<body>

<main>


</main>
</body>

</html>


