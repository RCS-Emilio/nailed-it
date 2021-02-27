<?php?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS Y FAVICON -->
    <link rel="shortcut icon" href="../assets/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../assets/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="../css/academy.css">
    <link id="theme" rel="stylesheet" type="text/css" href="">

    <!--JQUERY -->
    <script src="../cdn/jquery-3.5.1.min.js"></script>

     <!--JQUERY.UI -->
    <link rel="stylesheet" href="../cdn/jquery-ui-1.12.1.custom/jquery-ui.min.css">
    <script src="../cdn/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>

    <!--BXSLIDER-->
    <link rel="stylesheet" href="../cdn/bxslider-4-4.2.12/dist/jquery.bxslider.css">
    <script src="../cdn/bxslider-4-4.2.12/dist/jquery.bxslider.min.js"></script>

    <!--FONT AWSOME-->
    <link rel="stylesheet" href="../cdn/fontawesome-free-5.15.2-web/css/all.min.css">

    <!-- MAPBOX -->
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css" rel="stylesheet">
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js"></script>

    <!-- MAIN SCRIPT -->
    <script type="text/javascript" src="../js/script.js"></script>
    <script type="text/javascript" src="../cdn/mapbox.js"></script>


    <title>Nailed it! Academy</title>
</head>

<body>

    <!-- THEME CHANGER -->
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

    <!-- ACADEMY CONTENT -->
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

        <!-- SLIDER -->
        <div id="slider">
            <div class="bxslider">
                <div><img src="../assets/student.jpg" title="Image 1"></div>
                <div><img src="../assets/youngs.png" title="Image 2"></div>
                <div><img src="../assets/teachers.jpg" title="Image 3"></div>
            </div>
        </div>

        <!-- SECTION ACADEMY -->
        <section id="academy">
            <div id="accordion">
                <h3>Facilities</h3>
                <div class="accordion facilities">
                    <p>
                        In the heart of <i>Redacted</i> you have the academy with the teachers you are looking for. <br>
                        <ul>
                            <li>Bright, air-conditioned and well-equipped classes, where our teachers work with students' questions in a personalized way in small groups.</li>
                            <li>Free study room, with a support teacher, at the service of our students.</li>
                            <li>Secretariat where the administrative and managerial staff of the academy, informs and advises all interested clients about our services and other questions regarding their future.</li>
                        </ul>
                    </p> 
                    <br>
                    <img src="../assets/acc-facilities.jpg" alt="Meet the Academy">
                </div>

                <h3>Teachers</h3>
                <div class="accordion teachers">
                    <p>
                        "Nailed It!" Academy is made up of qualified professionals specialized in various university degrees, such as Mathematics, English, French, History and Physics.  <br>
                        All the staff that is part of this company have extensive experience in private classes, both individually and in groups, thus creating a multidisciplinary team that works with exclusive dedication for and for each of the students of the academy. <br>
                        The vast experience of each of our teachers allows us to satisfy any of the training needs that arise and show that learning does not have to be arduous or heavy. Our challenge as teachers is to train people in the most bearable way possible, but with solid results.
                    </p>
                    <br>
                    <img src="../assets/acc-teachers.jpg" alt="Meet the teachers">
                </div>

                <h3>Where?</h3>
                <div class="accordion">
                    We are located in <a href="https://www.google.com/maps/place/Alhambra/@37.1760783,-3.59033,17z/
                    data=!3m1!4b1!4m5!3m4!1s0xd71fcb7977fb93b:0x808dd1ef1221a27f!8m2!3d37.1760783!4d-3.5881413">Street Name, nº X</a>
                    You can navigate to Google Maps clicking the previous link.
                    <div id="map"></div>
                </div>

                <h3>Contact</h3>
                <div class="accordion form">
                    Use this form and we will get in contact with you as soon as possible.

                    <form id="academy-form" action="#" onsubmit="return false">
                        <input type="text" placeholder="Full name" autocomplete="off"/>

                        <input type="email" placeholder="Email" autocomplete="off"/>

                        <p>
                            <label for="topics">Related topic:</label><br>
                            <select name="topics">
                                    <option value="presentation">Prices</option>
                                    <option value="portfolio">Teachers</option>
                                    <option value="app">The academy</option>
                                    <option value="store">Other</option>
                            </select>
                        </p>
              

                        <textarea placeholder="Type your inquire here..." rows="6"></textarea>

                        <input type="submit" value="Send">

                    </form>
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
