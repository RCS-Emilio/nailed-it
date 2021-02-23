<?php
$conexion = mysqli_connect("localhost", "root", "", "nailed_it");

if ($conexion->connect_error) {
    die('Error de conexión: ' . $conexion->connect_error);
}

function dailySchedule($conexion, $today_string) {
    // Query to check for the classes for this day
    $query = "SELECT * FROM schedule WHERE day = '$today_string' ";
    if ($result = mysqli_query($conexion, $query)) { 
        while ($row = mysqli_fetch_assoc($result)) 
            echo createRow($row);
    } else {
        echo "Something has gone wrong! ".$sql->errorno;
    }
}

function createRow($row) {
    //Creates the div with class info
    $start_hour = date("G:i", strtotime($row['start_hour']) ) ;
    $end_hour = date("G:i", strtotime($row['end_hour']) ) ;

    return <<<EOT
    <div class="row">
            <span class="hour">$start_hour - $end_hour</span>
            <span class="subject">{$row['subject']}</span>
    </div>
EOT;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--CSS Y FAVICON-->
    <link rel="shortcut icon" href="../assets/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../assets/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="../css/schedule.css">
    <link id="theme" rel="stylesheet" type="text/css" href="../css/themes/winter.css">

    <!--JQUERY Y BXSLIDER-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

    <!--FONT AWSOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />

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
                <li><a href="#">Academy</a></li>
                <li><a href="#">Teachers</a></li>
            </ul>
        </nav>

        <!-- SLIDER-->
        <div id="slider">
            <div class="bxslider">
                <div><img src="../assets/student.jpg" title="Image 1"></div>
                <div><img src="../assets/youngs.png" title="Image 2"></div>
                <div><img src="../assets/teachers.jpg" title="Image 3"></div>
            </div>
        </div>

        <!-- SECTION NEWS -->
        <section id="schedule">
            <h1>FULL SCHEDULE</h1>

            <div id="swipe-left"></div>
            <div id="swipe-right"></div>

            <div class="day active">
                <h2>Monday</h2>
                <div class="subjects"> <?= dailySchedule($conexion, "Monday"); ?> </div>
            </div>

            <div class="day hidden">
                <h2>Tuesday</h2>
                <div class="subjects"> <?= dailySchedule($conexion, "Tuesday"); ?> </div>
            </div>

            <div class="day hidden">
                <h2>Wednesday</h2>
                <div class="subjects"> <?= dailySchedule($conexion, "Wednesday"); ?> </div>
            </div>

            <div class="day hidden">
                <h2>Thursday</h2>
                <div class="subjects"> <?= dailySchedule($conexion, "Thursday"); ?> </div>
            </div>

            <div class="day hidden">
                <h2>Friday</h2>
                <div class="subjects"> <?= dailySchedule($conexion, "Friday"); ?> </div>
            </div>

        </section>
    </main>

    <!-- FOOTER-->
    <footer>
        Created by <a href="https://emiliowebdev.com/">Emilio Marin</a> &copy; - Fictional Academy "Nailed It"
    </footer>

</body>

</html>
