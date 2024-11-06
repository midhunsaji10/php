<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>armstrong</title>
    <?php 
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $number=$_POST['number'];
        $a=$number;
        $sum= 0;

        $digits=strlen((string)$number);

        while($a!=0){
            $rem=$a%10;
            $sum=$sum+ pow($rem,$digits);
            $a=$a/10;

        }
            if($number == $sum){
                echo "$number an armstrong number";
                break;
            }else{
                echo "$number is not an armstrong number";
                break;
            }
        

    }
    ?>
</head>
<body>
    <form method="post" action="arm.php">
        Enter the number:
        <input type="number" name="number">
        <input type="submit" name="Submit">
</form>
</body>
</html>