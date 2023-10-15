// Start the PHP session
<?php
    session_start();
?>
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
        
        .product-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            
        }

        
        .product {
          display: flex;
          flex-direction: column;
          align-items: center;
          justify-content: center;
          border: 1px solid #ccc;
          margin-left: 10px;
          margin-right: 10px;
    }

        @media (max-width: 768px) {
            .product {
                width: 100%; /* Full width when screen size is small */
            }
        }

        .product img:hover {
            transform: scale(1.4); /* Adjust the scale factor as needed for the desired zoom effect */
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


        /* Add styles for zooming effect */
.product img {
  transition: transform 0.5s;
  cursor: pointer;
}
    
    </style>
    <script>
        navbar = document.querySelector(".navbar").querySelectorAll("a");
        console.log(navbar);

        navbar.forEach(element => {
            element.addEventListener("click", function(){
                navbar.forEach(nav=>nav.classList.remove("active"))

                this.classList.add("active");
            })
        });
    </script>
    <!-- Your existing HTML head content -->
</head>

<body>
    
    <!-- Your header and other HTML content -->
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
                <li class="dropdown-toggle">
                    <a href="#" class="navbar1">🔐 Login</a>
                    <div class="dropdown">
                        <a href="user_login.php">👤 Login as User</a>
                        <a href="admin_login.php">👑 Login as Admin</a>
                    </div>
                </li>
                <li><a href="signup.php" class="navbar2">✍️ Sign Up</a></li>
            </ul>
        </nav>
    </header><br><br><br><br><br><br><br><br><br><br>
    <script>
    // Function to show the pop-up
    function showPopup(shoeId, price, tableName) {
        // Create a new pop-up window
        var popup = window.open('', 'Purchase Details', 'width=300, height=200');
        // Write the shoe_id, purchase price, and table name in the pop-up window
        popup.document.write('<h2>Purchase Details</h2>');
        popup.document.write('<p>Shoe ID: ' + shoeId + '</p>');
        popup.document.write('<p>Purchase Price: R' + price + '</p>');
        popup.document.write('<p>Table Name: ' + tableName + '</p>');
        // Close the pop-up after 5 seconds (you can adjust the delay as needed)
        setTimeout(function() {
            popup.close();
        }, 5000);
    }
</script>
    
    
<div class="product-container">
    <?php

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve the selected shoe_id and store it in a session variable
        if (isset($_POST['shoe_id'])) {
            $_SESSION['selected_shoe_id'] = $_POST['shoe_id'];
        }
    }

    // Connect to the database (You need to replace these with your actual database credentials)
    $servername = "cs3-dev.ict.ru.ac.za";
    $username = "G21M8916";
    $password = "G21M8916";
    $dbname = "group17";

    // Create a connection to the database
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch multiple sneakers from the database
    $sql = "SELECT shoe_id, shoe_description, shoe_price, shoe_image_path FROM jordan";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $sneaker_id = $row["shoe_id"];
            $shoe_description = $row["shoe_description"];
            $price = $row["shoe_price"];
            $picture = $row["shoe_image_path"];
            $table_name = "jordan"; // Modify this line to use the correct table name
    
            echo '<form method="POST" action="' . $_SERVER['PHP_SELF'] . '">
                <div class="product" id="fieldset-1" style="border:none;">
                    <h1>' . $shoe_description . '</h1>
                    <h2>Price: R' . $price . '</h2>
                    <h2>Size:
                        <select name="size" id="size" style="font-size: 20px;">
                            <option value="four">4 UK</option>
                            <option value="five">5 UK</option>
                            <!-- Add other size options as needed -->
                        </select>
                    </h2>
                    <img src="' . $picture . '" style="width: 300px; height: 300px;">
                    <!-- Add an onclick event to call the showPopup function with the table name -->
                    <button type="button" onclick="showPopup(' . $sneaker_id . ', ' . $price . ', \'' . $table_name . '\')" id="fieldset-3" style="border:none;">Purchase</button>
                </div>
            </form>';
        }
    } else {
        // Handle the case where no sneaker products are found
        echo 'No sneaker products found.';
    }

    // Close the database connection
    $conn->close();
    ?>
</div>

<!-- Display selected shoe details here -->
<div class="selected-shoe-details">
    <?php
    if (isset($_SESSION['selected_shoe_id'])) {
        // Retrieve the selected shoe_id from the session
        $selected_shoe_id = $_SESSION['selected_shoe_id'];

        // Display the details of the selected shoe here
        // Modify your SQL query to retrieve the details based on $selected_shoe_id
        $sql = "SELECT shoe_id, shoe_description, shoe_price, shoe_image_path FROM jordan WHERE shoe_id = $selected_shoe_id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Display the selected shoe's details
            $row = $result->fetch_assoc();
            $shoe_description = $row["shoe_description"];
            $price = $row["shoe_price"];
            $picture = $row["shoe_image_path"];

            // Display the details
            echo '<h2>Selected Shoe Details</h2>';
            echo '<p>Shoe ID: ' . $selected_shoe_id . '</p>';
            echo '<p>Shoe Description: ' . $shoe_description . '</p>';
            echo '<p>Price: R' . $price . '</p>';
            echo '<img src="' . $picture . '" alt="' . $shoe_description . '">';
        } else {
            // Handle the case where no shoe is found with the selected ID
            echo 'No shoe found with the selected ID.';
        }
    }
    ?>
</div>

    <!-- Your footer and other HTML content -->

    <!-- JavaScript imports -->
     <!-- javascript -->
     <script src="script.js"></script>

<!-- javascript Q1 - 2 -->
 <script src="Q1_2.js"></script>

 <!-- javascript Q7 -->
 <script src="Q7.js"></script>

 <!-- javascript Q7 -->
 <script src="drop-down.js"></script>

</body>
<footer class="footer" id = "fieldset-3" style = "border:none;">
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
