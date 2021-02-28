<?php
$today_string = date("l");
include_once('./db.php');
$conexion = mysqli_connect("127.0.0.1", $dbuser, $dbpass, $dbname);

if ($conexion->connect_error) {
    die('Error de conexión: ' . $conexion->connect_error);
}

function dailySchedule($conexion, $today_string)
{
    // Query to check for the classes for this day
    $query = "SELECT * FROM schedule WHERE day = '$today_string' ";
    if ($result = mysqli_query($conexion, $query)) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo createRow($row);
        }

    } else {
        echo "Something has gone wrong! " . $sql->errorno;
    }
}

function createRow($row)
{
    //Creates the div with class info
    $start_hour = date("G:i", strtotime($row['start_hour']));
    $end_hour = date("G:i", strtotime($row['end_hour']));

    return <<<EOT
    <div class="row">
            <span class="hour">$start_hour - $end_hour</span>
            <span class="subject">{$row['subject']}</span>
    </div>
EOT;
}

function fillNoticeBoard($conexion)
{
    // Query to obtain all the notices (only the closest 3);
    $query = "SELECT * FROM notices ORDER BY write_date DESC LIMIT 3";
    if ($result = mysqli_query($conexion, $query)) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo createNotice($row);
        }

    } else {
        echo "Something has gone wrong! " . $sql->errorno;
    }
}

function createNotice($row)
{
    //Create a single notice with Title, Date and Description
    $notice_date = date("d F Y", strtotime($row['write_date']));

    return <<<EOT
    <article class="post">
        <h2>{$row['title']}</h2>
        <h3>$notice_date</h3>
        <p>{$row['notice_text']}</p>
    </article>
EOT;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS & FAVICON-->
    <link rel="shortcut icon" href="../assets/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../assets/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="../css/homepage.css">
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
                <div><img src="../assets/youngs.png" title="Young"></div>
                <div><img src="../assets/teachers.jpg" title="Teacher"></div>
            </div>
        </div>

        <!-- SECTION NEWS -->
        <section id="news">
            <h1>NOTICEBOARD</h1>
            <?php echo fillNoticeBoard($conexion); ?>
        </section>

        <!-- DAILY SCHEDULE ASIDE -->
        <aside id="daily-schedule">
            <h1>DAY SCHEDULE</h1>
            <?php echo dailySchedule($conexion, $today_string); ?>
        </aside>
    </main>

    <!-- FOOTER-->
    <footer>
        Created by <a href="https://emiliowebdev.com/">Emilio Marin</a> &copy; - Fictional Academy "Nailed It"
    </footer>

</body>

</html>