<html>
<head>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
<link rel="stylesheet" href="style2.css">
<title> Student's Portal</title>
</head>
<body>
<body background="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRHyR56jy5pX0cSD8O3jBApnWqDfKdTEXvvWQ&usqp=CAU">
<h1> My Profile </h1>
<hr style="height:5px;" color="#333" >
 <a href="home.html"><button> <strong> Home </strong> </button></a>
<br>
<hr style="height:5px" color="#333">
 <?php
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
<hr style="height:5px" color="#333">
  <footer>
<h3 style="color:yellow;"> <i> Follow us on </i></h3>
<a href="https://www.instagram.com/"><img src="https://cdn-icons-png.flaticon.com/512/3955/3955024.png" style="float:left;width:25px;height:25px;"></a>
<a href="https://www.facebook.com/"><img src="https://cdn-icons-png.flaticon.com/512/1177/1177566.png" style="float:left;width:25px;height:25px;"></a>
<a href="https://www.twitter.com/"><img src="https://cdn-icons-png.flaticon.com/512/1177/1177491.png" style="float:left;width:25px;height:25px;"></a>
<a href="https://www.youtube.com/"><img src="https://cdn-icons-png.flaticon.com/512/2965/2965363.png" style="float:left;width:25px;height:25px;"></a>
<br>
    <p style="text-align:center;">&copy 2023  ALL RIGHTS RESERVED</p>
  </footer>
<hr style="height:5px" color="#333">
</body>
</html>