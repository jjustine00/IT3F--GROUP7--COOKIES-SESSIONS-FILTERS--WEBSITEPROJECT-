<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us | Lia's Pet Shop</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include 'nav.php'; ?>

    <section id="contact">
        <h2>Contact Us</h2>
        <form action="process_contact.php" method="POST">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" placeholder="Your Message" required></textarea>
            <button type="submit">Send</button>
        </form>
    </section>

    <?php include 'footer.php'; ?>
</body>
</html>
