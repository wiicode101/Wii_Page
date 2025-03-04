<!-- <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form dan sanitasi
    $fullname = htmlspecialchars(trim($_POST['fullname']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Validasi data
    if (empty($fullname) || empty($email) || empty($message)) {
        echo "All fields are required.";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
        exit;
    }

    // Tentukan penerima dan subjek email
    $to = "arifputera2001@gmail.com";
    $subject = "New Contact Form Submission";

    // Siapkan isi email
    $body = "Name: $fullname\n";
    $body .= "Email: $email\n";
    $body .= "Message:\n$message\n";

    // Tentukan header email
    $headers = "From: $email";

    // Kirim email
    if (mail($to, $subject, $body, $headers)) {
        echo "Your message has been sent successfully!";
    } else {
        echo "There was an error sending your message.";
    }
}
?> -->
