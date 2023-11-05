<!DOCTYPE html>
<html>
<head>
    <title>Add Employee</title>
</head>
<body>
    <h1>Add Employee</h1>
    <a href="5.5.php">Back to Employee Records</a>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Connect to the database
        $conn = mysqli_connect('localhost', 'username', 'password', 'EmployeeRecords');

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Retrieve and sanitize form data
        $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
        $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $job_title = mysqli_real_escape_string($conn, $_POST['job_title']);
        $hire_date = $_POST['hire_date'];

        // Insert new employee record
        $sql = "INSERT INTO Employees (first_name, last_name, email, job_title, hire_date) VALUES ('$first_name', '$last_name', '$email', '$job_title', '$hire_date')";

        if (mysqli_query($conn, $sql)) {
            echo "Employee record added successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
    }
    ?>
    
    <form method="post" action="">
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" required><br>
        
        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" required><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>
        
        <label for="job_title">Job Title:</label>
        <input type="text" id="job_title" name="job_title" required><br>
        
        <label for="hire_date">Hire Date:</label>
        <input type="date" id="hire_date" name="hire_date" required><br>
        
        <input type="submit" value="Add Employee">
    </form>
</body>
</html>
