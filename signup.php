<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = password_hash(password: $_POST['password'], algo: PASSWORD_BCRYPT);
    $email = $_POST['email'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];

    $conn = new mysqli(hostname: 'localhost', username: 'root', password: '', 'pos2');

    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }

    $stmt = $conn->prepare(query: "INSERT INTO users (username, password, email, fname, mname, lname) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param(types: "ssssss", var: $username, vars: $password, $email, $fname, $mname, $lname);

    if ($stmt->execute()) {
        echo "<div class='alert alert-success'>Signup successfully. <a href='login.php'>Click here to login </a></div>";
    } else {
        echo "<div class='alert alert-danger'>Error: " . $stmt->error . "</div>";
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Signup to web</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" a href="style2.css">
</head>
<body>
<div class="container">
<center><h1>Register Form</h1></center>
    <center><p>Please fill in this form to create an account.</p></center>
    <hr>
    <form method="post" action="">


    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="username" name="username" id="username" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Password" name="password" id="password" required>
    
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Email" name="email" id="email" required>

    <label for="fname"><b>First name</b></label>
    <input type="text" placeholder="First name" name="fname" id="fname" required>

    <label for="mname"><b>Middle name</b></label>
    <input type="text" placeholder="Middle name" name="mname" id="mname" required>

    <label for="lname"><b>Last name</b></label>
    <input type="text" placeholder="Last name" name="lname" id="lname" required>


    
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn">SUBMIT</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
  </div>
</form>

</body>
</html>