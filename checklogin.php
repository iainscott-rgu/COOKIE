<html>
<head>
<title>CHECK LOGIN PAGE</title>
</head>

<?php
$username = $_POST['user'];
$password = $_POST['password'];

if($username == "Mike" && $password == '123456') {
    setcookie('user_cookie', $username);
    setcookie('access_level_cookie', 'standarduser');
}


$newhtml =
    <<<NEWHTML



<form action="homepage.php" method="post">
    <label for="user">Username: </label>
    <input type="text" id="user" name="user" value = $username readonly />
</form>

NEWHTML;



?>

<header>

</header>
<body>

<main>


</main>
</body>

</html>


