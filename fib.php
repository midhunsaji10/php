<form method="post">
    Display the fibonacci series:<br><br><br>
    <input type="number" name="number" placeholder="enter the limit" required>
    <input type="submit" value="Submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $number = $_POST["number"];
    $a = 0;
    $b = 1;
    echo "$a, $b";
    for ($i = 2; $i < $number; $i++) {
        $c = $a + $b;
        echo ", $c";
        $a = $b;
        $b = $c;
    }
}
?>
