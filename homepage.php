<html>
<head>
    <title>HOMEPAGE</title>

    <?PHP

    session_start();
    $access_level = $_SESSION['access_level'];
    print $_SESSION['access_level'];

    displayAccessLevelInformation($access_level);

    function displayAccessLevelInformation($access_level) {
    if ($access_level == 'standarduser') {
    echo "<p>You are currently logged in as a standard user</p>";
    }
    elseif ($access_level == "root") {
    echo "<p>You are currently logged in as a root user</p>";
    echo "<p>You now have access to additional administrative features</p>";
    }
    }

?>

</head>
<header>

</header>
<body>

<main>


</main>
</body>

</html>