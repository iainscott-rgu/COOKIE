<html>
<head>
<title>CHECK LOGIN PAGE</title>
    <?php
    $username = $_POST['user'];
    $password = $_POST['password'];

    if($username == "Mike" && $password == '123456') {
        setcookie('user', $username);
        setcookie('access_level_cookie', 'standarduser');
    }
    header('location: loggedin.php');
    ?>

</head>
<header>

</header>
<body>

<main>


</main>
</body>

</html>


