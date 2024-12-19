<!DOCTYPE html>
<html>
<head>
    <title>Last Visit</title>
</head>
<body>
    <center>
    <?php
    function LastVisit() {
        if (isset($_COOKIE['lastVisit'])) {
            echo "<b>Your last visit was on:</b> " . $_COOKIE['lastVisit'];
        } else {
            echo "<b>This is your first visit!</b>";
        }
        $currentVisit = date("Y-m-d H:i:s");
        setcookie('lastVisit', $currentVisit, time() + 60 * 60 * 30, "/");
    }
    LastVisit();
    ?>
    </center>
</body>
</html>
