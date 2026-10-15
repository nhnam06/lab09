
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cars Database</title>
</head>
<body>

    <h1>Used Cars Database</h1>

    <?php
    require_once("settings.php");

    $dbconn = mysqli_connect($host, $user, $pwd, $sql_db);

    if ($dbconn) {
        echo "<p>Database connected successfully!</p>";
    } else {
        echo "<p>Database connection failed.</p>";
    }

    mysqli_close($dbconn);
    ?>

</body>
</html>
