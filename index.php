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
        
        /* Style for fieldset-1 */
        #fieldset-1 {
        background-color:  #4b576d;
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
        background-color:  #495268;
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
        background-color:  #384555;
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
        background-color:  #2e3d4f;
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
    <script>
        navbar = document.querySelector(".navbar").querySelectorAll("li");
        console.log(navbar);

        navbar.forEach(element => {
            element.addEventListener("click", function(){
                navbar.forEach(nav=>nav.classList.remove("active"))

                this.classList.add("active");
            })
        });
    </script>
</head>
<body>
     <!-- header -->
     <header class="header" >
        <a href="index.php"><img src="logo.png" alt="logo" width="100"></a>

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
    </header>

    <br> <br> <br> <br> <br><br><br>
    

    <fieldset id = "fieldset-1" style = "border:none;">
    <h1 class="h1"> RU Sneakers </h1>
    <h2 class="h2"> Step into Style, Stride with Confidence </h2>
    </fieldset>
   

    <img src="images/nike-jordan.gif" alt="nike-jordan" width="100%" height="600" id = "fieldset-3" style = "border:none;">

    <!-- image slider -->

    <!-- video -->
    <p class="p1"><strong>Cristiano Ronaldo</strong>, the 5 time ballon d'Or winner goes sneaker shopping at RU Sneakers</p>

    <center id = "fieldset-3" style = "border:none;">
        <video width="90%" height="700" controls>
            <source src="videos/x2mate.com-Cristiano Ronaldo Goes Sneaker Shopping With Complex-(1080p).mp4" type="video/mp4">
        </video>
    </center>

    <fieldset  id = "fieldset-2" style = "border:none;">
    <div>
   
        <div style = "padding-left: 250px; font-size: 40px;" id="caption"></div>

        <img id="sneakers" src="images/slide_show/slide_show1.jpg" alt="sneakers" width="800" height="500" id = "fieldset-2" style = "border:none;">
        <div id="caption"></div>
        <div>
            <h2 class="p2">
                Welcome to RU Sneakers, the ultimate destination for sneaker enthusiasts and collectors. 
                At RU Sneakers, we curate a meticulously crafted selection of the latest and most sought-after sneakers, catering to both style-conscious individuals and dedicated sneakerheads. 
                Our mission is to provide a seamless shopping experience, offering a diverse range of brands, styles, and sizes to suit every taste and need. 
                Whether you're on the hunt for limited edition releases, classic favorites, or exclusive collaborations, you'll find them all here. 
                Join our vibrant sneaker community, stay updated with the latest trends, and elevate your sneaker game with RU Sneakers
            </h2>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</fieldset>


    <!-- javascript -->
    <script src="Q5.js"></script>
    

    <!-- javascript -->
    <script src="script.js"></script>

   <!-- javascript Q1 - 2 -->
    <script src="Q1_2.js"></script>

    <!-- javascript Q7 -->
    <script src="Q7.js"></script>

    <!-- javascript Q7 -->
    <script src="drop-down.js"></script>
    
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