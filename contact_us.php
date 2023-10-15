<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RU Sneakers</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <!-- icon -->
    <link rel="icon" type="image/png" href="logo.png"/>
    <style>
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
        <a href="index.html"><img src="logo.png" alt="logo" width="100" ></a>

        <!-- navigations -->
        <nav class="navbar" id = "fieldset-1" style = "border:none;">
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class='bx bx-menu'></i>
            </label>
            <ul>
                <li><a href="index.html" class="active">🏠 Home</a></li>

                <li><a href="nike.html">Nike</a></li>
                <li><a href="jordan.html">Jordan</a></li>
                <li><a href="adidas.html">Adidas</a></li>
                <li class="dropdown-toggle">
                    <a href="#" class="navbar1">🔐 Login</a>
                    <div class="dropdown">
                        <a href="user_login.html">👤 Login as User</a>
                        <a href="admin_login.php">👑 Login as Admin</a>
                    </div>
                </li>
                <li><a href="signup.html" class="navbar2">✍️ Sign Up</a></li>
            </ul>
        </nav>
    </header>

    <br> <br> <br> <br> <br> <br> <br> <br> <br>

        <fieldset class = "intro">
            <h1 class = "header_text"> Welcome to RU Sneakers
            </h1>


        <p class = "intro_paragraph">
            We value and Appreciate your Fedback
        </p>
    </fieldset>
    <main>
        <fieldset class = "main">
            <div class = "main">
                <h2 class  = "main">
                    CONTACT FORM
                </h2>

                <p>
                    Leave your details below and We'll get back to you!
                </p>

                <p>--------------------------------------------------------------------------------------------------------------------------------</p>

                <form action="contact_us.html" method = "GET">
                    
                            <label for = "first_name" class = "first_name">First Name: </label><br>
                            <input type = "text" name = "first_name" class = "first_name" placeholder="John" required><span class="error">*</span><br>

                            <label for = "last_name" class = "last_name">Last Name: </label><br>
                            <input type = "text" name = "last_name" class = "last_name" placeholder="Smith" required><span class="error">*</span><br>

                            <label for = "email" class = "email">Email: </label><br>
                            <input type = "email" name = "email" class = "email" placeholder="johnsmith@gmail.com" required><span class="error">*</span><br>

                            <label for = "cellphone_number" class = "cellphone_number">Number: </label><br>
                            <input type = "text" name = "cellphone_number" class = "cellphone_number" placeholder="0834561235" required><span class="error">*</span><br><br>

                            <label for = "contact_method" class = "contact_method">Preffered Contact Method:<span class="error">*</span> </label><br>
                            <input type = "radio" class = "contact_method" >SMS<br>
                            <input type = "radio" class = "contact_method" >Email<br><br>


                            <input type="submit" name="submit" value="Submit Details">
                <p>--------------------------------------------------------------------------------------------------------------------------------</p>
                </form>
            </div class = "main">

            <?php
        // define variables and set to empty values
        $firstnameErr = $lastnameErr = $emailErr = $cell_numErr = "";
        $firstname = $lastname = $email = $cell_num = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Function to sanitize input data
            function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }

            function countDigits($cell_num) {
                $cell_num= preg_replace('/\D/', '', $cell_num);
                $numDigits = strlen($cell_num);
                return $numDigits;
            }

            if (empty($_POST["first_name"])) {
                $firstnameErr = "First Name is required";
            } else {
                $firstname = test_input($_POST["first_name"]);
                if (!preg_match("/^[a-zA-Z-' ]*$/", $firstname)) {
                    $firstnameErr = "Only letters and white space allowed";
                }
            }

            if (empty($_POST["last_name"])) {
                $lastnameErr = "Last Name is required";
            } else {
                $lastname = test_input($_POST["last_name"]);
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

            if (empty($_POST["cellphone_number"])) {
                $cell_numErr = "ID number is required";
            } else {
                $cell_num = test_input($_POST["cellphone_number"]);
                $num_digits = countDigits($cell_num);
                if (preg_match('/^[0-9]+$/', $cell_num) || $num_digits !== 10) {
                    $cell_numErr = "Invalid ID number";
                }
            }

            if (empty($firstnameErr) && empty($lastnameErr) && empty($emailErr) && empty($cell_numErr)) {
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

                // Bind parameters
                $stmt->bind_param("sssss", $firstname, $lastname, $id_number, $email, $pword);

                // Execute the statement
                if ($stmt->execute()) {
                    header("Location: signup_success.php");
                } else {
                    echo "Error: " . $stmt->error;
                }

                // Close the database connection
                $stmt->close();
                $conn->close();

                // Redirect to a success page after processing
                //header("Location: index.html");
                exit();
                }
        }
    ?>
        </main>
    

<!-- javascript -->
<script src="script.js"></script>
 
</body>

 <!-- footer -->
 <footer class="footer">
    <p><h3>Author</h3> Group 17: Computer Science 301 - Web dev <br> 
        Email address: <a href= "mailto:CompilingGirls@cg.co.za"> rusneakers@ru.ac.za</a> </p> <br>
        <a class = "contact_us" href = "contact_us.php"><h2 class = "contactus_hyperlink">Contact Us</h2></a></td>
        <a class = "about_us" href = "about_us.php"><h2 class = "aboutus_hyperlink">About Us</h2></a></td>
        <br> 
    <div class="link">
        <a href="https://www.facebook.com/groups/httpswww.instagram.comsneakerheadsaauthentic/"><i class='bx bxl-facebook-square' ></i></a><br>
        <a href="https://www.tiktok.com/@sneakerpage"><i class='bx bxl-tiktok' ></i></a><br>
        <a href="https://twitter.com/sneakernews?lang=en"><i class='bx bxl-twitter' ></i></a><br>
        <a href="https://chat.whatsapp.com/Hijwu3eAQ2d2liiKLgU56V"><i class='bx bxl-whatsapp' ></i></a><br>
        <a href="https://t.me/s/snkrempire"><i class='bx bxl-telegram' ></i></a><br>
    </div>
        <p style="text-align: center;">
            <i> &copy 2023 RU_Sneakers : All rights reserved.</i>
        </p>
</footer>

</html>