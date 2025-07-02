<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to My Landing Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <div class="container">
            <h1>My Awesome Product</h1>
            <p>Your solution to everything, beautifully simple.</p>
            <a href="#contact" class="btn">Get Started</a>
        </div>
    </header>

    <section class="features">
        <div class="container">
            <h2>Why Choose Us?</h2>
            <div class="feature-box">
                <h3>Fast</h3>
                <p>Lightning-fast performance to meet your needs.</p>
            </div>
            <div class="feature-box">
                <h3>Reliable</h3>
                <p>Built with proven technologies for guaranteed uptime.</p>
            </div>
            <div class="feature-box">
                <h3>Easy to Use</h3>
                <p>User-friendly interface that anyone can master.</p>
            </div>
        </div>
    </section>

    <section id="contact" class="contact">
        <div class="container">
            <h2>Contact Us</h2>
            <form method="POST" action="">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Email Address" required>
                <textarea name="message" placeholder="Your Message" required></textarea>
                <button type="submit" name="submit">Send Message</button>
            </form>
            <?php
            if (isset($_POST['submit'])) {
                $name = htmlspecialchars($_POST['name']);
                $email = htmlspecialchars($_POST['email']);
                $message = htmlspecialchars($_POST['message']);

                echo "<p class='success'>Thank you, $name! We have received your message.</p>";
            }
            ?>
        </div>
    </section>

    <footer>
        <p>© <?= date("Y") ?> MyLandingPage.com | All Rights Reserved</p>
    </footer>

</body>
</html>
