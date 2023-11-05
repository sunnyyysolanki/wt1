<!DOCTYPE html>
<html>
<head>
    <title>PHP Session and Cookie Example</title>
</head>
<body>
    <h1>PHP Session and Cookie Example</h1>

    <?php
    // Start a session
    session_start();

    // Check if the user is logged in
    if (isset($_SESSION['user'])) {
        echo "Welcome, " . $_SESSION['user'] . "!<br>";
        echo '<a href="logout.php">Log out</a>';
    } else {
        echo "You are not logged in.<br>";
        echo '<a href="login.php">Log in</a>';
    }
    ?>

    <?php
    // Check for a cookie
    if (isset($_COOKIE['visited'])) {
        $visits = $_COOKIE['visited'] + 1;
        setcookie('visited', $visits, time() + 3600 * 24 * 30); // Extend the cookie's expiration
    } else {
        $visits = 1;
        setcookie('visited', $visits, time() + 3600 * 24 * 30); // Create a new cookie
    }

    echo "<p>You've visited this page $visits times.</p>";
    ?>
</body>
</html>
