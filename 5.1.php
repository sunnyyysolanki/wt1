<!DOCTYPE html>
<html>
<head>
    <title>Data Retrieval Example</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Items List</h1>
    
    <?php
    // Database connection configuration
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "myapp";

    // Create a connection to the database
    $connection = mysqli_connect($host, $username, $password, $database);

    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Retrieve data from the database
    $sql = "SELECT id, name FROM items";
    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo '<table>';
        echo '<tr><th>ID</th><th>Name</th></tr>';
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>' . $row["id"] . '</td>';
            echo '<td>' . $row["name"] . '</td>';
            echo '</tr>';
        }
        echo '</table>';
    } else {
        echo "No items found.";
    }

    // Close the database connection
    mysqli_close($connection);
    ?>
</body>
</html>
