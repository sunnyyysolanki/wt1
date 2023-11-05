<!DOCTYPE html>
<html>
<head>
    <title>Employee Records</title>
</head>
<body>
    <h1>Employee Records</h1>
    <a href="add_employee.php">Add Employee</a>
    
    <table border="1">
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Job Title</th>
            <th>Hire Date</th>
        </tr>
        <?php
        // Connect to the database
        $conn = mysqli_connect('localhost', 'root', '', 'EmployeeRecords');

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Fetch and display employee records
        $sql = "SELECT * FROM Employees";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['first_name'] . "</td>";
                echo "<td>" . $row['last_name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['job_title'] . "</td>";
                echo "<td>" . $row['hire_date'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "No employee records found.";
        }

        mysqli_close($conn);
        ?>
    </table>
</body>
</html>
