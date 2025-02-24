<?php
// Database connection settings
session_start();
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "pj";

// Create a new MySQLi connection
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process the login form if submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize form data
    $email = trim($_POST['email']);
    $password = trim($_POST['password']); // plain text password

    $errors = [];

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }
    
    if (empty($password)) {
        $errors[] = "Password is required.";
    }

    // If there are no errors, check credentials in the database
    if (empty($errors)) {
        // Prepare the SQL statement
        $stmt = $conn->prepare("SELECT id, name, email, PASSWORD FROM users WHERE email = ?");
        if (!$stmt) {
            die("Prepare failed: " . $conn->error);
        }
        
        // Bind the email parameter
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();
        
        // Check if a user with that email exists
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($id, $username,$email, $stored_password);
            $stmt->fetch();
            
            // Compare the plain text password
            if ($password === $stored_password) {
                header("Location: Dashboard.php");
                $_SESSION['userId']=$id;
                $_SESSION['username']=$username;
                $_SESSION['email']=$email;
                exit();
                // echo "<p style='color:green;'>Login successful! Welcome, " . htmlspecialchars($username) . ".</p>";
            } else {
                // header("Location: loginForm.php");
                $errors[] = "Incorrect password.";
            }
        } else {
            $errors[] = "No account found with this email.";
        }
        $stmt->close();
    }
    
    // Display errors, if any
    if (!empty($errors)) {
        // foreach ($errors as $error) {
            $_SESSION['error']="Incorrect username or password:";
            header("Location: loginForm.php");
            exit();
            // echo "<p style='color:red;'>" . htmlspecialchars($error) . "</p>";
            // echo <script>alert("<?php echo $error;;
        // }
    }
}

$conn->close();
?>

