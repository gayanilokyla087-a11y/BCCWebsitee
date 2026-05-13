<?php
$schoolName = "BCC";
$mission = "To provide quality Catholic education that nurtures faith, knowledge, discipline, and service.";
$vision = "To develop globally competitive and God-centered individuals committed to excellence and community service.";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About <?php echo $schoolName; ?></title>

    <link rel="stylesheet" href="../style.css">

    <style>
        .about-page {
            padding: 80px 0;
            min-height: 100vh;
        }

        .about-box {
            background: white;
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .about-box h1 {
            color: #173a8b;
            margin-bottom: 20px;
            font-size: 48px;
        }

        .about-box h2 {
            color: #173a8b;
            margin-top: 30px;
            margin-bottom: 15px;
        }

        .about-box p {
            line-height: 2;
            margin-bottom: 20px;
            font-size: 17px;
        }

        .about-btns {
            margin-top: 30px;
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        .about-btns button,
        .about-btns a {
            padding: 14px 25px;
            border: none;
            text-decoration: none;
            background: #173a8b;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        .about-btns button:hover,
        .about-btns a:hover {
            background: #0f2761;
        }

        .stats {
            margin-top: 40px;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .stat-card {
            background: #f5f5f5;
            padding: 30px;
            text-align: center;
            border-radius: 10px;
        }

        .stat-card h3 {
            font-size: 40px;
            color: #173a8b;
        }

        .stat-card p {
            margin-top: 10px;
        }

        @media(max-width: 768px) {
            .stats {
                grid-template-columns: 1fr;
            }

            .about-box {
                padding: 30px;
            }

            .about-box h1 {
                font-size: 36px;
            }
        }
    </style>
</head>
<body>

<!-- HEADER -->
<div class="top-header">
    <div class="container top-flex">
        <div>
            Monday - Friday, 8AM to 5PM
        </div>

        <div>
            Call us now +63 9519565324
        </div>
    </div>
</div>

<header>
    <div class="container navbar">

        <div class="logo">
            BCC
        </div>

        <nav>
            <ul>
                <li><a href="../index.php">HOME</a></li>
                <li><a href="about.php">ABOUT</a></li>
                <li><a href="courses.php">COURSES</a></li>
                <li><a href="teachers.php">TEACHERS</a></li>
                <li><a href="department.php">DEPARTMENT</a></li>
                <li><a href="contact.php">CONTACT</a></li>
            </ul>
        </nav>

    </div>
</header>

<!-- ABOUT SECTION -->
<section class="about-page">
    <div class="container">

        <div class="about-box">

            <h1>About <?php echo $schoolName; ?></h1>

            <p>
                Welcome to <?php echo $schoolName; ?>.
                We are committed to delivering quality education,
                leadership, innovation, and excellence.
            </p>

            <p>
                Our institution develops students into responsible,
                globally competitive, and highly skilled professionals.
            </p>

            <!-- MISSION -->
            <h2>Mission</h2>

            <p>
                <?php echo $mission; ?>
            </p>

            <!-- VISION -->
            <h2>Vision</h2>

            <p>
                <?php echo $vision; ?>
            </p>

            <!-- HISTORY -->
            <h2>School History</h2>

            <p>
                BCC has served students for many years by providing
                accessible and high-quality education.
                The institution continues to grow and improve
                through modern technology and academic excellence.
            </p>

            <!-- BUTTONS -->
            <div class="about-btns">

                <button onclick="showMission()">
                    Show Mission
                </button>

                <button onclick="showVision()">
                    Show Vision
                </button>

                <button onclick="showHistory()">
                    Show History
                </button>

                <a href="../index.php">
                    ← Back to Home
                </a>

            </div>

            <!-- SCHOOL STATS -->
            <div class="stats">

                <div class="stat-card">
                    <h3 id="students">0</h3>
                    <p>Students</p>
                </div>

                <div class="stat-card">
                    <h3 id="teachers">0</h3>
                    <p>Teachers</p>
                </div>

                <div class="stat-card">
                    <h3 id="courses">0</h3>
                    <p>Courses</p>
                </div>

            </div>

        </div>

    </div>
</section>

<!-- FOOTER -->
<footer>
    <p>All Copyrights Reserved to BCC</p>
</footer>

<script>

// FUNCTIONS
function showMission() {
    alert("Mission: <?php echo $mission; ?>");
}

function showVision() {
    alert("Vision: <?php echo $vision; ?>");
}

function showHistory() {
    alert("BCC has been providing quality education for many years.");
}


// COUNTER ANIMATION
function animateValue(id, start, end, duration) {

    let range = end - start;
    let current = start;
    let increment = end > start ? 1 : -1;

    let stepTime = Math.abs(Math.floor(duration / range));

    let obj = document.getElementById(id);

    let timer = setInterval(function() {

        current += increment;

        obj.innerHTML = current + "+";

        if (current == end) {
            clearInterval(timer);
        }

    }, stepTime);
}


// START COUNTERS
window.onload = function() {

    animateValue("students", 0, 2220, 2000);
    animateValue("teachers", 0, 47, 2000);
    animateValue("courses", 0, 4, 2000);

}

</script>

</body>
</html>