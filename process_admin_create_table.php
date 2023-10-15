<?php
// Include your database configuration
define("SERVERNAME", "cs3-dev.ict.ru.ac.za");
define("USERNAME", "G21M7267");
define("PASSWORD", "G21M7267");
define("DATABASE", "group17");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input
    $table_name = $_POST['table_name'];
    $shoe_description = $_POST['shoe_description'];
    $shoe_price = $_POST['shoe_price'];

    // Check if a file was uploaded
    if (isset($_FILES['shoe_image']) && $_FILES['shoe_image']['error'] === UPLOAD_ERR_OK) {
        // Get the uploaded file's name
        $shoe_image = $_FILES['shoe_image']['name'];

        // Create a new directory for each upload
        $uploadDirectory = 'TEMPORARY_IMAGE_UPLOAD_FOLDER/uploaded_image/' . uniqid() . '/';

        // Ensure the directory exists, or create it if not
        if (!is_dir($uploadDirectory)) {
            mkdir($uploadDirectory, 0755, true);
        }

        // Set the destination path for the uploaded image
        $destination = $uploadDirectory . $shoe_image;

        // Move the uploaded file to the destination directory
        if (move_uploaded_file($_FILES['shoe_image']['tmp_name'], $destination)) {
            // Create a database connection
            $conn = new mysqli(SERVERNAME, USERNAME, PASSWORD, DATABASE);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // SQL query to create the table
            $sql_create_table = "CREATE TABLE IF NOT EXISTS $table_name (
                shoe_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                shoe_description VARCHAR(100) DEFAULT NULL,
                shoe_price INT NOT NULL, 
                shoe_image_path VARCHAR(255) DEFAULT NULL,
                shoe_image_name VARCHAR(255) DEFAULT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";

            if ($conn->query($sql_create_table) === TRUE) {
                echo "Table created successfully!<br>";

                // Extract the filename from the full path
                $shoe_image_filename = basename($shoe_image);

                // Insert data into the table using prepared statements
                $sql_insert_data = "INSERT INTO $table_name (shoe_description, shoe_price, shoe_image_path, shoe_image_name) VALUES (?, ?, ?, ?)";

                $stmt = $conn->prepare($sql_insert_data);
                $stmt->bind_param("siss", $shoe_description, $shoe_price, $destination, $shoe_image_filename);

                if ($stmt->execute()) {
                    echo "Data inserted successfully!";
                } else {
                    echo "Error inserting data: " . $stmt->error;
                }
                $stmt->close();
            } else {
                echo "Error creating table: " . $conn->error;
            }

            // Close the database connection
            $conn->close();
        } else {
            echo "Error moving the uploaded file.";
        }
    } else {
        echo "Error: " . $_FILES['shoe_image']['error']; // Display the specific error code
    }
}
?>











