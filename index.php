
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nishtha Jha Portfolio</title>

    <link rel="stylesheet" href="style.css">

    <!-- Font Awesome -->
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>

<header class="hero">
<nav class="navbar">

    <div class="logo">Nishtha Jha</div>

    <ul class="nav-links">
        <li><a href="#">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#blog">Blog</a></li>
        <li><a href="#contact">Contact</a></li>
    </ul>

    <a href="cv.pdf" class="btn">Get my CV</a>

    <button class="hamburger" id="hamburger">
        <i class="fas fa-bars"></i>
    </button>

    <div class="mobile-menu" id="mobileMenu">
        <ul class="nav-links">
            <li><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#blog">Blog</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>

        <a href="cv.pdf" class="btn">Get my CV</a>
    </div>

</nav>
    <!-- Hero Content -->
    <div class="hero-content">

        <div class="hero-text">

            <h4>ACCOUNTING & FINANCE SPECIALIST</h4>

            <div class="line"></div>

            <h1>NISHTHA JHA</h1>

            <p>
                Finance Professional with 23 months of experience in
                Accounts Payable (AP) and Accounts Receivable (AR)
                across diverse industries.
            </p>

            <div class="hero-buttons">

                <a href="cv.pdf" class="btn">Get my CV</a>

                <a href="https://linkedin.com" class="social">
                    <i class="fab fa-linkedin-in"></i>
                </a>

                <a href="mailto:your@email.com" class="social">
                    <i class="fas fa-envelope"></i>
                </a>

            </div>

        </div>

        <div class="hero-image">
            <img src="/PROJECT_PRACTICE/Onepage_Portfolio/assets/images/hero_image.png" alt="Nishtha Jha">
        </div>

    </div>

</header>

<script>
const hamburger = document.getElementById("hamburger");
const mobileMenu = document.getElementById("mobileMenu");

hamburger.addEventListener("click", () => {
    mobileMenu.classList.toggle("active");
});
</script>




<section class="stats-section">

    <div class="stats-container">

        <!-- Left Side -->
        <div class="stats-content">

            <h2>Results Don't Lie.</h2>

            <p>
                Consistent performance and measurable impact define my journey in finance.
                From processing 100+ invoices daily to ensuring 100% GST compliance and
                reducing turnaround times through automation—every result reflects
                dedication, accuracy, and growth. In finance, results speak louder than
                promises—and mine tell a story of reliability and efficiency.
            </p>

        </div>

        <!-- Right Side -->
        <div class="stats-grid">

            <div class="stat-card">
                <h3>100+</h3>
                <p>Processed invoices and payments daily</p>
            </div>

            <div class="stat-card">
                <h3>20+</h3>
                <p>Experience in AP & AR Management</p>
            </div>

            <div class="stat-card">
                <h3>100%</h3>
                <p>Ensured GST compliance for all transactions during my tenure</p>
            </div>

            <div class="stat-card">
                <h3>1K+</h3>
                <p>Over 1,000 invoices and payments processed efficiently across industries</p>
            </div>

        </div>

    </div>

</section>




<section class="contact-section" id="contact">

    <div class="contact-container">

        <!-- Left Side -->
        <div class="contact-info">

            <h2>Let's Collaborate</h2>

            <div class="contact-line"></div>

            <p>
                I'm always open to connecting with like-minded professionals
                and exploring opportunities to create value together.
            </p>

            <div class="contact-buttons">

                <a href="cv.pdf" class="btn">
                    Download CV
                </a>

                <a href="#" class="social">
                    <i class="fab fa-linkedin-in"></i>
                </a>

                <a href="#" class="social">
                    <i class="fas fa-envelope"></i>
                </a>

            </div>

        </div>

        <!-- Right Side -->
        <div class="contact-form">

            <form action="contact_process.php" method="POST">

                <div class="form-group">
                    <label>Your name</label>
                    <input type="text" name="name">
                </div>

                <div class="form-group">
                    <label>Your email</label>
                    <input type="email" name="email">
                </div>

                <div class="form-group">
                    <label>Subject</label>
                    <input type="text" name="subject">
                </div>

                <div class="form-group" >
                    <label>Your message (optional)</label>
                    <textarea rows="7" name="message"></textarea>
                </div>

                <button type="submit" class="btn">
                    Submit
                </button>

            </form>

        </div>

    </div>

</section>

</body>
</html>