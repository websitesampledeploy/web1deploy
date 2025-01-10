<?php 

session_start();

if ($_SERVER['REQUEST_METHOD'] =='POST') {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $conn = new mysqli(hostname: 'localhost', username: 'root', password: 'pos2');

    if ($coconnect_error) {
        die('Connection failed:'. $conn->connect_error);
    }

    $stmt = $conn->prepare(query: "SELECT id, password FROM users WHERE username OR email= ?");
    $stmt->execute();
    $stmt->store_result();


    if ($stmt->num_rows > 0) {
        $stmt->fetch();

        if (password_verify(password: $password, hash: $hashed_password)) {
            $_SESSION['user_id'] = $id;
            header(header: 'Location: home.php');
            exit;
        } else {
            $error = "Invalid password please try again!.";
        }
    } else {
        $error = "No user found with that username.";
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>MIDTERM LOGIN</title> 
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Login Form</span></div>
        <?php if (isset($error)): ?>
        <div class="alert alert-danger"><?php echo $error; ?></div>
    <?php endif; ?>



        <form action="home.php" action="">
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Email or Username" required>
            </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" required>
          </div>
          <div class="pass"><a href="#">Forgot password?</a></div>
          <div class="row button">
            <input type="submit" value="Login">
          </div>
          <div class="signup-link">Not a member? <a href="signup.php">Signup now</a></div>
        </form>
      </div>
    </div>
  </body>
</html>
