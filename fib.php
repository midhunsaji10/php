<html>
    <body align="center">
        <form method="post">
    Display Fibonacci series:<br><br><br>
    <input type="number" name="number" placeholder="Enter the limit" required>
    <input type="submit" value="Submit">
</form>
</body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $number = $_POST["number"];

    if ($number <= 0) {
        echo "Please enter a number greater than 0.";
        return;
    }

    $a = 0;
    $b = 1;

    if ($number > 0) {
        echo "$a";
    }

    if ($number > 1) {
        echo ", $b";
    }

    while (true) {
        $c = $a + $b;
        if ($c >= $number) {
            break;
        }
        echo ", $c";
        $a = $b;
        $b = $c;
    }
}
?>
