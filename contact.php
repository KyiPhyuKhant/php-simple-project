<?php include 'header.php'; ?>

<div class="container mx-auto px-4 py-6">
  <h1 class="text-3xl font-bold mb-4">Contact Us</h1>
  <section>
    <p class="mb-6">If you have any questions, please reach out to us via the form below.</p>

    <!-- Contact Form -->
    <form action="contact.php" method="POST" class="space-y-4 bg-white p-6 rounded-lg shadow-lg">
      <div>
        <label for="name" class="block text-lg font-medium text-gray-700">Name:</label>
        <input type="text" id="name" name="name" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
      </div>
      <div>
        <label for="email" class="block text-lg font-medium text-gray-700">Email:</label>
        <input type="email" id="email" name="email" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
      </div>
      <div>
        <label for="subject" class="block text-lg font-medium text-gray-700">Subject:</label>
        <input type="text" id="subject" name="subject" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
      </div>
      <div>
        <label for="message" class="block text-lg font-medium text-gray-700">Message:</label>
        <textarea id="message" name="message" rows="5" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500"></textarea>
      </div>
      <div>
        <button type="submit" name="submit" class="w-full py-2 px-4 bg-blue-500 text-white font-semibold rounded-md shadow hover:bg-blue-600 transition duration-300">Send Message</button>
      </div>
    </form>
  </section>
</div>

<?php
// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Basic validation
    if (!empty($name) && !empty($email) && !empty($subject) && !empty($message)) {
        // You can send an email using PHP's mail() function or perform other actions
        // Example for sending an email (replace with your actual email):
        $to = "your-email@example.com"; // Replace with your actual email address
        $headers = "From: $email\r\nReply-To: $email\r\n";
        $mailBody = "Name: $name\nEmail: $email\nSubject: $subject\n\nMessage:\n$message";

        if (mail($to, $subject, $mailBody, $headers)) {
            echo "<p class='mt-4 text-green-500 font-semibold'>Thank you, $name. Your message has been sent!</p>";
        } else {
            echo "<p class='mt-4 text-red-500 font-semibold'>Sorry, there was a problem sending your message. Please try again later.</p>";
        }
    } else {
        echo "<p class='mt-4 text-red-500 font-semibold'>Please fill in all fields.</p>";
    }
}
?>

<?php include 'footer.php'; ?>
