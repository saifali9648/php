<!DOCTYPE html>
<html>
<head>
    <title>Insert Data from Form</title>
</head>
<body>
<?php

// Connect to MySQL database
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'lms';
$conn = mysqli_connect($host, $username, $password, $dbname);
if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Retrieve data from the form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Insert data into the database
    $sql = "INSERT INTO msg (name, email, message) VALUES ('$name', '$email', '$message')";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}

?>
    <h1>Insert Data from Form</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        Name: <input type="text" name="name"><br>
        Email: <input type="email" name="email"><br>
        Message: <textarea name="message"></textarea><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>