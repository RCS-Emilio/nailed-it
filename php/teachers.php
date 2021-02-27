<?php?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--CSS Y FAVICON-->
    <link rel="shortcut icon" href="../assets/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../assets/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="../css/teachers.css">
    <link id="theme" rel="stylesheet" type="text/css" href="">

    <!--JQUERY -->
    <script src="../cdn/jquery-3.5.1.min.js"></script>

    <!--BXSLIDER-->
    <link rel="stylesheet" href="../cdn/bxslider-4-4.2.12/dist/jquery.bxslider.css">
    <script src="../cdn/bxslider-4-4.2.12/dist/jquery.bxslider.min.js"></script>

    <!--FONT AWSOME-->
    <link rel="stylesheet" href="../cdn/fontawesome-free-5.15.2-web/css/all.min.css">

    <!--MAIN SCRIPT-->
    <script type="text/javascript" src="../js/script.js"></script>


    <title>Nailed it! Academy</title>
</head>

<body>

    <!-- THEME CHANGER-->
    <aside id="theme-changer">
        <div id="spring">
            <i class="icon fas fa-dove"></i>
        </div>

        <div id="summer">
            <i class="icon fas fa-sun"></i>
        </div>

        <div id="autumn">
            <i class="icon fab fa-canadian-maple-leaf"></i>
        </div>

        <div id="winter">
            <i class="icon fas fa-snowflake"></i>
        </div>

        <div id="toggler">></div>
    </aside>

    <!-- ACADEMY CONTENT-->
    <main>
        <!-- LOGO -->
        <div id="logo">
            Nailed It! Academy
        </div>

        <!-- NAVBAR -->
        <nav id="menu">
            <ul>
                <li><a href="./homepage.php">Home</a></li>
                <li><a href="./schedule.php">Schedule</a></li>
                <li><a href="./teachers.php">Teachers</a></li>
                <li><a href="./academy.php">Academy</a></li>
            </ul>
        </nav>

        <!-- SLIDER-->
        <div id="slider">
            <div class="bxslider">
                <div><img src="../assets/student.jpg" title="Student"></div>
                <div><img src="../assets/youngs.png" title="Youngs"></div>
                <div><img src="../assets/teachers.jpg" title="Teachers"></div>
            </div>
        </div>

        <!-- SECTION TEACHERS -->
        <section id="teachers">
            <div class="teacher-block">
                <div class="photo">
                    <img src="../assets/teach1.jpg" alt="Loussa Gomez">
                    <h3>Loussa Gomez</h3>
                </div>

                <div class="motivational">
                    <h3>Mathematics and Physics Teacher</h3>
                    <em>"Teachers who make physics boring are criminals. I'm innocent of course."</em>
                </div>
            </div>

            <div class="teacher-block">
                <div class="photo">
                    <img src="../assets/teach2.jpg" alt="Francisco Watts">
                    <h3>Francisco Watts</h3>
                </div>

                <div class="motivational">
                    <h3>French and English Teacher</h3>
                    <em>"The best way to learn the languague is speaking all day long!"</em>
                </div>
            </div>

            <div class="teacher-block">
                <div class="photo">
                    <img src="../assets/teach3.jpg" alt="Angela Flores">
                    <h3>Angela Flores</h3>
                </div>

                <div class="motivational">
                    <h3>History and English Teacher</h3>
                    <em>"The more you know about the past, the better prepared you are for the future."</em>
                </div>
            </div>

            <div class="teacher-block">
                <div class="photo">
                    <img src="../assets/teach4.jpg" alt="Wade Johnson">
                    <h3>Wade Johnson</h3>
                </div>

                <div class="motivational">
                    <h3>French and Physics Teacher</h3>
                    <em>"I understand that my subjects are hard. But <strong>c'est la vie...</strong>."</em>
                </div>
            </div>
        </section>

    </main>

    <!-- FOOTER-->
    <footer>
        Created by <a href="https://emiliowebdev.com/">Emilio Marin</a> &copy; - Fictional Academy "Nailed It"
    </footer>

</body>

</html>
