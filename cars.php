
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Used Cars Database</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Used Cars Database</h1>

    <?php
    require_once("settings.php");

    // Connect to the database
    $dbconn = mysqli_connect($host, $user, $pwd, $sql_db);

    if ($dbconn) {

        // Select all cars
        $query = "SELECT * FROM cars";
        $result = mysqli_query($dbconn, $query);

        if ($result) {

            if (mysqli_num_rows($result) > 0) {

                // Create HTML table
                echo "<table>";
                echo "<tr>";
                echo "<th>Car ID</th>";
                echo "<th>Make</th>";
                echo "<th>Model</th>";
                echo "<th>Price</th>";
                echo "<th>Year of Manufacture</th>";
                echo "</tr>";

                // Display each car
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['car_id'] . "</td>";
                    echo "<td>" . htmlspecialchars($row['make']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['model']) . "</td>";
                    echo "<td>" . $row['price'] . "</td>";
                    echo "<td>" . $row['yom'] . "</td>";
                    echo "</tr>";
                }

                echo "</table>";

            } else {
                echo "<p>There are no cars to display.</p>";
            }

            mysqli_free_result($result);

        } else {
            echo "<p>Error retrieving car records.</p>";
        }

        mysqli_close($dbconn);

    } else {
        echo "<p>Database connection failed.</p>";
    }
    ?>

</body>
</html>
