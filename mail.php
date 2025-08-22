<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars(trim($_POST["name"]));
    $email   = htmlspecialchars(trim($_POST["email"]));
    $phone   = htmlspecialchars(trim($_POST["phone"]));
    $message = nl2br(htmlspecialchars(trim($_POST["message"]))); // keep line breaks

    // Your receiving email
    $to = "mudrasmp@gmail.com"; 

    $subject = "Enquiry Mail";

    // HTML message with table
    $body = "
    <html>
    <head>
        <style>
            table {
                border-collapse: collapse;
                width: 100%;
                font-family: Arial, sans-serif;
            }
            td, th {
                border: 1px solid #ddd;
                padding: 8px;
            }
            th {
                background-color: #f4f4f4;
                text-align: left;
            }
        </style>
    </head>
    <body>
        <h2>New Enquiry Received</h2>
        <table>
            <tr>
                <th>Name</th>
                <td>$name</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>$email</td>
            </tr>
            <tr>
                <th>Phone</th>
                <td>$phone</td>
            </tr>
            <tr>
                <th>Message</th>
                <td>$message</td>
            </tr>
        </table>
    </body>
    </html>
    ";

    // Headers
    $headers  = "From: Website Enquiry <contact@selvalakshmifoundation.org>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n"; // HTML type

    if (mail($to, $subject, $body, $headers)) {
        echo "✅ Message sent successfully!";
    } else {
        echo "❌ Failed to send message. Please try again later.";
    }
} else {
    echo "Invalid request!";
}
?>
