<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reverse</title>
</head>
<body>
    <center>
    <h1>Reverse a string</h1>
    <form method="post">
        Enter a String:  <input type="text" name="str">
        <br><br>
        <input type="submit" value="reverse">
    </form>
    <?php
        $str = $_POST['str'];
        function reverse($str){
            $str = strrev($str);
            return $str;
        }
        echo reverse($str);
    ?>
    </center>
</body>
</html>