<html>
<head>
<title>CHECK LOGIN PAGE</title>

    <?php
    $username = $_POST['user'];

    ?>
</head>
<form action="homepage.php" method="post">
    <label for="user">Username: </label>
    <input type="text" id="user" name="user" value=$username readonly />
</form>

<?php
$username = $_POST['user'];
$password = $_POST['password'];

if($username == "Mike" && $password == '123456') {
    setcookie('user_cookie', $username);
    setcookie('access_level_cookie', 'standarduser');
}

?>

<header>

</header>
<body>

<main>


</main>
</body>

</html>


