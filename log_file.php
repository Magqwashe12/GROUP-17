<?php
// Define the log file path
$logFilePath = 'user';

// Define the pattern to search for in log entries
$pattern = '/^\[\d{4}-\d{2}-\d{2} \d{2}:\d{2}:\d{2}\] LOGIN ATTEMPT: Username: (\w+), IP: (\d+\.\d+\.\d+\.\d+)/';

// Open the log file for reading
$file = fopen($logFilePath, 'r');

if ($file) {
    while (($line = fgets($file)) !== false) {
        if (preg_match($pattern, $line, $matches)) {
            // Extracted username and IP address
            $username = $matches[1];
            $ipAddress = $matches[2];
            
            // You can add your own logic here to handle the login attempt, e.g., log it, block the IP, etc.
            
            // For this example, we'll just print the results
            echo "Login Attempt Detected - Username: $username, IP: $ipAddress\n";
        }
    }

    fclose($file);
} else {
    echo "Failed to open the log file.";
}
?>
