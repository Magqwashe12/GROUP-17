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

    <br> <br> <br> <br> <br> <br> <br> <br> <br>

    <fieldset class = "outerfeild">
        <fieldset class = "header_text">
      
            <h1 class = "header_text"> Meet the Team
            </h1>
    
    
        <p class = "intro_paragraph">
            At RU Sneakers, we're not just sneaker enthusiasts; 
            we're a team of tech-savvy computer science majors who are passionate about keeping you one step ahead of the game. <br>
            Our love for the latest sneakers meets our expertise in cutting-edge technology, resulting in a unique online destination where style and innovation converge. <br>
            We're on a mission to deliver the freshest kicks to your doorstep while leveraging our technical know-how to create an unforgettable shopping experience. <br>
            Join us on this exciting journey as we blend fashion with code, and together, we'll walk the walk in style and sophistication. 
            Welcome to the future of sneaker culture!
        </p>
    </fieldset>
       
            <fieldset class = "Lihle_Magqwashe">
                <h2 class = "Lihle_Magqwashe">
                    Lihle Magqwashe - <em>Back-End Developer</em>
                </h2>
                <img src="lihle.jpeg" style="width:500px;height:500px; float:left; width: 450px; border: black solid 1px;"> 
                
                <nav class = "Lihle_Magqwashe">
                    
                    <p class = "Lihle_Magqwashe" > <b>Proficiency</b> <br><br>
                        * Proficiency in server-side programming languages such as Python, Node.js, Ruby, or Java. <br>
                        * Experience with web development frameworks like Django, Express.js, Ruby on Rails, or Spring.<br>
                        * Database management skills, including SQL or NoSQL databases (e.g., MySQL, MongoDB). <br>
                        * API design and development for smooth data exchange between the front-end and back-end.<br>
                        * Security knowledge to protect against common web vulnerabilities (e.g., XSS, CSRF).
                    </p>
    
                </nav>
            </fieldset>
    
    
    
            <fieldset class = "Sandile_Cengani">
                <h2 class = "Sandile_Cengani">
                    Sandile Cengani - <em>Full-Stack Developer</em>
                </h2>
                <img src="suaze.jpeg" style="width:500px;height:500px; float:left; width: 450px; border: black solid 1px;"> 
                
                <nav class = "Sandile_Cengani">
                    
                    <p class = "Sandile_Cengani" > <b>Proficiency</b> <br><br>
                        * A combination of front-end and back-end development skills to handle both client-side and server-side tasks. <br>
                        * Proficiency in the entire web development stack, including HTML, CSS, JavaScript, and a server-side language (e.g., Python, Node.js).<br>
                        * Familiarity with front-end and back-end frameworks to streamline development processes.<br>
                        * Database management skills for designing, implementing, and maintaining databases.<br>
                        * Problem-solving abilities and adaptability to work on various aspects of web development.
                    </p>
    
                </nav>
            </fieldset>
    
            <fieldset class = "Sicelo_Mduna">
                <h2 class = "Sicelo_Mduna">
                    Sicelo Mduna - <em>Front-End Developer</em>
                </h2>
                <img src="images\lihle_backimage.jpg" style="width:500px;height:500px; float:left; width: 450px; border: black solid 1px;"> 
                
                <nav class = "Sicelo_Mduna">
                    
                    <p class = "Sicelo_Mduna" > <b>Proficiency</b> <br><br>
                        * Proficiency in HTML, CSS, and JavaScript for creating interactive and visually appealing user interfaces. <br>
                        * Experience with front-end frameworks like React, Angular, or Vue.js.<br>
                        * Knowledge of responsive web design to ensure the website functions seamlessly across different devices and screen sizes.<br>
                        * Understanding of UI/UX principles to enhance user experience.<br>
                        * Familiarity with version control systems like Git.
                    </p>
    
                </nav>
            </fieldset>
    </fieldset class = "outerfeild">

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