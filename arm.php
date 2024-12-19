<CENTER>
<body>
  <h1>ARMSTRONG NUMBER</h1>
<form method="post">
Enter the number:
<input type="number" name="number">
<input type="submit" name="Submit">
</form>
</body></CENTER>
</html>
<?php
 if($_POST)
 {
   $number=$_POST['number'];
   $a=$number;
   $sum=0;
   while($a!=0)
   {
     $rem=$a%10;
     $sum=$sum+($rem*$rem*$rem);
     $a=$a/10;
   }
   if($number==$sum)
   {
     echo "<center>Yes $number an Armstrong Number</center>";
   }
   else
   {
     echo "<center>$number is not an Armstrong Number</center>";
   }
  }
?>