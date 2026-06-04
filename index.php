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
            <img src="/assets/images/hero_image.png" alt="Nishtha Jha">
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

            <form>

                <div class="form-group">
                    <label>Your name</label>
                    <input type="text">
                </div>

                <div class="form-group">
                    <label>Your email</label>
                    <input type="email">
                </div>

                <div class="form-group">
                    <label>Subject</label>
                    <input type="text">
                </div>

                <div class="form-group">
                    <label>Your message (optional)</label>
                    <textarea rows="7"></textarea>
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