 
<html>
<head>
<title> Student's Portal</title>
</head>
<body><?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST["username"];
    $firstName = $_POST["first_name"];
    $lastName = $_POST["last_name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    // Display the data
    echo "<p>Username: " . $username . "</p>";
    echo "<p>First Name: " . $firstName . "</p>";
    echo "<p>Last Name: " . $lastName . "</p>";
    echo "<p>Email: " . $email . "</p>";
    echo "<p>Phone: " . $phone . "</p>";
  }
  ?>
</body>
</html>