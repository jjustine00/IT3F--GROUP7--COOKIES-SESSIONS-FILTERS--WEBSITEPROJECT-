<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Basic validation
    if (!empty($name) && !empty($email) && !empty($message)) {
        // Process the form (e.g., send an email or save to database)
        echo "Message sent successfully!";
    } else {
        echo "Please fill in all fields.";
    }
} else {
    echo "Invalid request method.";
}
?>
