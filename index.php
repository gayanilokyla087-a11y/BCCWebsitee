<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BCC Official Website</title>

    <link rel="stylesheet" href="style.css">

    <!-- Font Awesome -->
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <!-- TOP HEADER -->
<div class="top-header">
    <div class="container top-flex">
        <div>
            <i class="fa-solid fa-clock"></i>
            Monday - Friday, 8AM to 5PM
        </div>

        <div>
            <i class="fa-solid fa-phone"></i>
            Call us now +63 9519565324
        </div>
    </div>
</div>
<!-- NAVBAR -->
<header>
    <div class="container navbar">

        <div class="logo.png">
            BCC
        </div>

        <nav>
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="pages/about.php">ABOUT</a></li>
                <li><a href="pages/courses.php">COURSES</a></li>
                <li><a href="pages/teachers.php">TEACHERS</a></li>
                <li><a href="pages/department.php">DEPARTMENT</a></li>
                <li><a href="pages/contact.php">CONTACT</a></li>
            </ul>
        </nav>
 <!-- MOBILE MENU -->
        <div class="menu-toggle" id="menu-toggle">
            <i class="fa-solid fa-bars"></i>
        </div>

    </div>
</header>


<!-- HERO SECTION -->
<section class="hero">
    <div class="container hero-grid">

        <div class="hero-image">
            <img src="bcc.png">
        </div>
                <div class="hero-content">
            <h1>WELCOME TO BCC</h1>
          
            <p>
            Binalbagan Catholic College is dedicated to nurturing students through holistic 
            education rooted in faith, excellence, and community service.

            The institution continues to provide meaningful learning experiences 
            that prepare students for professional and personal growth.
    
            </p>

            <button onclick="showMessage()">Learn More</button>
        </div>
         </div>
</section>


<!-- COURSES SECTION -->
<section class="courses-section">
    <div class="container">

        <h2 class="section-title">Our Courses</h2>

        <div class="course-grid">

            <div class="course-card">
                <i class="fa-solid fa-computer fa-3x"></i>
                <h3>BS Information Technology</h3>
                <p>Develop programming and technical skills for the digital world.</p>
            </div>
            <div class="course-card">
                <i class="fa-solid fa-chart-line fa-3x"></i>
                <h3>Business Administration</h3>
                <p>Learn management, finance, and entrepreneurship.</p>
            </div>

            <div class="course-card">
                <i class="fa-solid fa-graduation-cap fa-3x"></i>
                <h3>Education</h3>
                <p>Prepare future educators with modern teaching strategies.</p>
            </div>

        </div>

    </div>
</section>
<!-- CONTACT SECTION -->
<section class="contact-section">
    <div class="container contact-grid">

        <div>
            <h2>Contact Information</h2>

            <p><i class="fa-solid fa-location-dot"></i> Binalbagan Catholic College</p>
            <p><i class="fa-solid fa-phone"></i> +63 91234567890</p>
            <p><i class="fa-solid fa-envelope"></i> BinalbaganCatholicCollege@email.com</p>
        </div>


        <div>
            <h2>Send Message</h2>

            <form id="contactForm">
                <input type="text" placeholder="Your Name" required>
                <input type="email" placeholder="Your Email" required>
                <textarea rows="5" placeholder="Your Message" required></textarea>
                <button type="submit">Send Message</button>
            </form>
        </div>

    </div>
</section>


<!-- FOOTER -->
<footer>
    <p>All Copyrights Reserved to Binalbagan Catholic College</p>
</footer>


<script src="script.js"></script>
</body>
</html>