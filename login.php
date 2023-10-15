<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RU Sneakers</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- icon -->
    <link rel="icon" type="image/png" href="logo.png"/>
</head>
<body class="login">

    <!-- header -->
    <header class="header">
        <a href="index.html"><img src="logo.png" alt="logo" width="100"></a>

        <!-- navigations -->
        <nav class="navbar">
            <a href="index.html">HOME</a>
        </nav>
    </header>

    <div class="wrapper">

        <form action="#" method="post">

            <h1>Login</h1>

            <div class="input-box">
                <input type="text" placeholder="Username" required>
                <i class='bx bxs-user'></i>
            </div>

            <div class="input-box">
                <input type="password" placeholder="Password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>

            <div class="remember-forgot">
                <label> <input type="checkbox">Remember me</label>
                <a href="#">Forgot password?</a>
            </div>

            <button type="submit" class="btn">Login</button>

            <div class="register-link">
                <p>Don't have an account? <a href="signup.html">Register</a></p>
            </div>
        </form>
    </div>
    
    <!-- javascript -->
    <script src="script.js"></script>

    <?php
   
      if ($_SERVER["REQUEST_METHOD"] === "POST") {
          $id_number = $_POST['id_number'];
          $password = $_POST['password'];

          $servername = "cs3-dev.ict.ru.ac.za";
          $username = "G21M8916";
          $password = "G21M8916";
          $dbname = "group17";
    
          $conn = new mysqli($servername, $username, $password, $dbname);
    
          // Check the connection
          if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
          }

          
          $query = "SELECT * FROM user WHERE user_IdentityNumber = ? AND user_Email  = ? AND user_Password  = ?  "         ;
          $stmt = mysqli_prepare($conn, $query);
          mysqli_stmt_bind_param($stmt, "ss", $id_number, $password);
          mysqli_stmt_execute($stmt);
      
          $result = mysqli_stmt_get_result($stmt);
      
          if (mysqli_num_rows($result) == 1) {
              $_SESSION['access'] = "yes";
              header("Location: index.php");
             // exit();
          } else {
              header("Location: login.php");
            //  exit();
          }
      
          mysqli_close($conn);
      }

    ?>
</body>
</html>