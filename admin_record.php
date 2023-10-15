<?php 
                // Database connection details
                $servername = "cs3-dev.ict.ru.ac.za";
                $username = "G21C9926";
                $password = "G21C9926";
                $dbname = "group17";

                $admin_id = "0212115328081";
                $admin_email = "admin@ru.ac.za";
                $admin_password = "admin@123";
    
                // Create a new MySQLi instance
                $conn = new mysqli($servername, $username, $password, $dbname);
    
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
    
                // Prepare the SQL statement using placeholders
                $stmt = $conn->prepare("INSERT INTO admin (admin_IdentityNumber, admin_Email, admin_Password) VALUES (?, ?, ?)");
                
                // Hash the password
                $hashed_password = password_hash($admin_password, PASSWORD_DEFAULT);
    
                // Bind parameters
                $stmt->bind_param("sss", $admin_id, $admin_email, $hashed_password);
    
                // Execute the statement
                if ($stmt->execute()) {
                    echo "New record added successfully";
                } else {
                    echo "Error: " . $stmt->error;
                }
    
                // Close the database connection
                $stmt->close();
                $conn->close();
    
                exit();
?>