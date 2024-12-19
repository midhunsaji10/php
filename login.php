<?php
$name=$_POST['uname'];
$passwd=$_POST['pwd'];
$db = pg_connect("host=localhost port=5433 dbname=postgres user=postgres password=devagiri");
$rs=pg_query($db,"select * from login1 where username='$name' and password='$passwd' ");
$count=pg_num_rows($rs);
if($count==1)
{
echo "<h1 align = center>Welcome $name !!!! </h1> ";
}
else
{
echo "<h1 align = center>Incorrect username or password</h1>";
}
?>
