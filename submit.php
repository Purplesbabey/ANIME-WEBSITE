<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Validate form data (you can add more validation if needed)

    // Send email (example only, replace with your actual email sending code)
    $to = 'your_email@example.com';
    $subject = 'New Message from My Gym Website';
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    $headers = 'From: ' . $email;

    if (mail($to, $subject, $body, $headers)) {
        // Send success response to JavaScript
        echo json_encode(['success' => true]);
    } else {
        // Send error response to JavaScript
        echo json_encode(['success' => false]);
    }
} else {
    // Invalid request method
    echo json_encode(['success' => false]);
}
?>
