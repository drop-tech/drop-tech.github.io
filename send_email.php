if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];
  $to = "support@drop-tech.co";
  $subject = "New Contact Form Submission";
  $body = "Name: " . $name . "\n\nEmail: " . $email . "\n\nMessage: " . $message;
  $headers = "From: " . $email;

  if (mail($to, $subject, $body, $headers)) {
    echo "Thank you for contacting us. We'll get back to you shortly!";
  } else {
    echo "Oops! Something went wrong. Please try again later.";
  }
}
?>