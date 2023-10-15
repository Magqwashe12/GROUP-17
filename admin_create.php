<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin Success</title>
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


/* Add a style for the navigation fieldset */
#navigation-fieldset {
    background-color: #b0b0b0;
    border: 1px solid #787878;
    padding: 20px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.9);
    transition: background-color 0.3s ease-in-out;
    position: relative;
    width: 100%; /* Make it full-width */
    margin-top: 20px; /* Add some top margin for separation */
}

/* Add a style for the navigation list */
nav ul {
    list-style: none;
    padding: 0;
    text-align: center; /* Center the links */
}

/* Style for the navigation links */
nav li {
    display: inline-block;
    margin: 0 20px; /* Adjust the margin as needed for even spacing */
}

/* Style for the navigation links */
nav a {
    text-decoration: none;
    color: white;
    font-size: 18px;
}

/* Add hover effect for navigation links if needed */
nav a:hover {
    color: #c8c8c8;
}


/* Styles for buttons */
.button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4d4d4d;
            color: white;
            text-decoration: none;
            font-size: 18px;
            border: none;
            border-radius: 5px;
            margin: 5px;
            cursor: pointer;
        }

        .button:hover {
            background-color: #5f5f5f;
        }

        /* Additional styles for larger font size */
        .button-large {
            font-size: 41px;
            padding: 15px 30px;
        }

    
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

    <br> <br> <br> <br> <br> <br>

    <fieldset id = "fieldset-4" style = "border:none;">
    <fieldset id = "fieldset-1" style = "border:none;">
    <h1 style = "color:green; text-align: center;">You have Successfully logged in as an admin</h1>
    </fieldset>
    <br><br>

    <p style = "color:white; text-align: center; font-size: 35px; font-weight: bold;">You have chosen to perform the following CRUD Database Operation :</p><br>
    <p style = "color:black; text-align: center; font-size: 35px;">📝✏️🆕 CREATE </p>

    </fieldset>

    <fieldset id="navigation-fieldset">

        <ul>
            <li id = "fieldset-2" style = "border:none;"><a href="admin_create_table.php" class="button button-large">📄 Add new shoe details</a></li>
            <li id = "fieldset-1" style = "border:none;"><a href="admin_create_record.php" class="button button-large">📝 CREATE new Record:</a></li>
        </ul>
    
    </fieldset>

    <!-- javascript -->
    <script src="script.js"></script>
    <!-- javascript Q7 -->
    <script src="prac3.js"></script>

    <!-- javascript Q7 -->
    <script src="drop-down.js"></script>



</body>

 <!-- footer -->
 <footer class="footer" id = "fieldset-3" style = "border:none;">
    <p><h3>Author</h3> Group 17: Computer Science 301 - Web dev <br> 
        Email address: <a href= "mailto:CompilingGirls@cg.co.za"> rusneakers@ru.ac.za</a> </p> <br>
        <a class = "contact_us" href = "contact_us.html"><h2 class = "contactus_hyperlink">Contact Us</h2></a></td>
        <a class = "about_us" href = "about_us.html"><h2 class = "aboutus_hyperlink">About Us</h2></a></td>
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