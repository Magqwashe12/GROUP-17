<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Sign Up</title>
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


    </style>
</head>
<body>

  <!-- header -->
  <header class="header">
    <a href="index.php"><img src="logo.png" alt="logo" width="100"></a>

    <!-- navigations -->
    <nav class="navbar">
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class='bx bx-menu'></i>
        </label>
        <ul>
            <li><a href="index.php" class="active">🏠 Home</a></li>
            <li><a href="nike.php">Nike</a></li>
            <li><a href="jordan.php">Jordan</a></li>
            <li><a href="adidas.php">Adidas</a></li>
            <li class="dropdown-toggle">
                <a href="#" class="navbar1">🔐 Login</a>
                <div class="dropdown">
                    <a href="user_login.php">👤 Login as User</a>
                    <a href="admin_login.php">👑 Login as Admin</a>
                </div>
            </li>
            
        </ul>
    </nav>
</header>

<br> <br> <br> <br> <br> <br> <br> <br> 

    <?php
    // Define variables and set them to empty values
    $firstnameErr = $lastnameErr = $emailErr = $id_numberErr = $passwordErr = $cpasswordErr = "";
    $firstname = $lastname = $email = $id_number = $pword = $cpassword = "";

    if (isset($_POST['submit'])) {

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Function to sanitize input data
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        function countDigits($id_number) {
            $id_number = preg_replace('/\D/', '', $id_number);
            $numDigits = strlen($id_number);
            return $numDigits;
        }

        if (empty($_POST["fname"])) {
            $firstnameErr = "First Name is required";
        } else {
            $firstname = test_input($_POST["fname"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/", $firstname)) {
                $firstnameErr = "Only letters and white space allowed";
            }
        }

        if (empty($_POST["lname"])) {
            $lastnameErr = "Last Name is required";
        } else {
            $lastname = test_input($_POST["lname"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/", $lastname)) {
                $lastnameErr = "Only letters and white space allowed";
            }
        }

        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
        }

        if (empty($_POST["idnum"])) {
            $id_numberErr = "ID number is required";
        } else {
            $id_number = test_input($_POST["idnum"]);
            $num_digits = countDigits($id_number);
            if (!preg_match('/^[0-9]+$/', $id_number) || $num_digits !== 13) {
                $id_numberErr = "Invalid ID number";
            }
        }

        if (empty($_POST["password"])) {
            $passwordErr = "Password is required";
        } else {
            $pword = test_input($_POST["password"]);
            // Check if password is 8 characters or more
            if (strlen($pword) < 8) {
                $passwordErr = "Password must be 8 characters long or more";
            }
        }

        if (empty($_POST["cpassword"])) {
            $cpasswordErr = "Confirming your password is required";
        } else {
            $cpassword = test_input($_POST["cpassword"]);
            // Check if confirm password matches the password and is 8 characters or more
            if (strlen($cpassword) < 8 || $cpassword != $pword) {
                $cpasswordErr = "Confirm password must match your password and must be 8 characters long or more";
            }
        }

        if (empty($firstnameErr) && empty($lastnameErr) && empty($emailErr) && empty($id_numberErr) && empty($passwordErr) && empty($cpasswordErr)) {
            // Database connection details
            $servername = "cs3-dev.ict.ru.ac.za";
            $username = "G21C9926";
            $password = "G21C9926";
            $dbname = "group17";

            // Create a new MySQLi instance
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Prepare the SQL statement using placeholders
            $stmt = $conn->prepare("INSERT INTO user (user_FirstName, user_LastName, user_IdentityNumber, user_Email, user_Password) VALUES (?, ?, ?, ?, ?)");

            // Hash the password
            $hashed_password = password_hash($pword, PASSWORD_DEFAULT);

            // Bind parameters
            $stmt->bind_param("sssss", $firstname, $lastname, $id_number, $email, $hashed_password);

            // Execute the statement
            if ($stmt->execute()) {
                // Redirect to a success page after processing
                header("Location: signup_user_success.php");
            } else {
                echo "Error: " . $stmt->error;
            }

            // Close the database connection
            $stmt->close();
            $conn->close();

            exit();
        }
    }

    }

    ?>

  <div class="center">
        <h1 style="font-size: 45px;">👤 Sign Up:</h1>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="txt_field">
                <input type="text" name="fname" id="fname" required>
                <label for="fname">First Name:<span class="error">* <?php echo $firstnameErr;?></span></label>
            </div>

            <div class="txt_field">
                <input type="text" name="lname" id="lname" required>
                <label for="lname">Last Name:<span class="error">* <?php echo $lastnameErr;?></span></label>
            </div>

            <div class="txt_field">
                <input type="text" name="idnum" id="idnum" required>
                <label for="idnum">Identity Number:<span class="error">* <?php echo $id_numberErr;?></span></label>
            </div>

            <div class="txt_field">
                <input type="text" name="email" id="email" required>
                <label for="email">Email:<span class="error">*<?php echo $emailErr;?></span></label>
            </div>

            <div class="txt_field">
                <input type="password" name="password" id="password" required>
                <label for="password">Password:<span class="error">*<?php echo $passwordErr;?></span></label>
                <i class="eye-icon" id="togglePassword" style="font-size: 30px;">👁️</i>
            </div>

            <div class="txt_field">
                <input type="password" name="cpassword" id="cpassword" required>
                <label for="cpassword">Confirm Password:<span class="error">*<?php echo $cpasswordErr;?></span></label>
                <i class="eye-icon" id="toggleCPassword" style="font-size: 30px;">👁️</i>
            </div>

            <script src="security_eye.js"></script>

            <input name="submit" type="submit" value="Sign Up">
            <div class="signup_link">
                <p style="font-size: 16px; color: #666666;">Already have an account? <a href="user_login.php">Login</a></p>
            </div>
        </form>
    </div>



<!-- javascript Q7 -->
<script src="drop-down.js"></script> 

</body>
</html>