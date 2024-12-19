<?php
if(isset($_POST['number']) && isset($_POST['limit'])){
$number = intval($_POST['number']);
$limit = intval($_POST['limit']);
$output = "<h3>Multiplication Table for {$number}:</h3>";
for($i = 1; $i <= $limit; $i++){
$result = $number * $i;
$output .= "{$number} x {$i} = {$result}<br>";
}
$output .= "";
echo $output;
}
?>