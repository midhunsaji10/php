<?php
$name = $age = $email = $address = $fname = $mname = $dob = $hby = $qual = $exp = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $age = htmlspecialchars($_POST['age']);
    $email = htmlspecialchars($_POST['email']);
    $address = htmlspecialchars($_POST['address']);
    $fname = htmlspecialchars($_POST['fname']);
    $mname = htmlspecialchars($_POST['mname']); 
    $dob = htmlspecialchars($_POST['dob']);
    $hby = htmlspecialchars($_POST['hby']);
    $qual = htmlspecialchars($_POST['qual']);
    $exp = htmlspecialchars($_POST['exp']);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Biodata Form</title>
</head>
    <center>
    <h1>Biodata Form</h1>

    <?php if ($_SERVER["REQUEST_METHOD"] !== "POST"): ?>
        <form action="bd.php" method="post">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" required><br><br>

            <label for="age">Age:</label><br>
            <input type="number" id="age" name="age" required><br><br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br><br>

            <label for="address">Address:</label><br>
            <textarea id="address" name="address" required></textarea><br><br>

            <label for="fname">Father's name:</label><br>
            <input type="text" id="fname" name="fname" required><br><br>

            <label for="mname">Mother's name:</label><br>
            <input type="text" id="mname" name="mname" required><br><br>

            <label for="dob">Date of birth:</label><br>
            <input type="date" id="dob" name="dob" required><br><br>

            <label for="hby">Hobby:</label><br> 
            <input type="text" id="hby" name="hby" required><br><br>

            <label for="qual">Qualification:</label><br>
            <input type="text" id="qual" name="qual" required><br><br>

            <label for="exp">Experience:</label><br>
            <input type="text" id="exp" name="exp" required><br><br>

            <input type="submit" value="Submit">
        </form>
    </center>
    <?php else: ?>
        <h2>Biodata</h2>
        <p><strong>Name:</strong> <?php echo $name; ?></p>
        <p><strong>Age:</strong> <?php echo $age; ?></p>
        <p><strong>Email:</strong> <?php echo $email; ?></p>
        <p><strong>Address:</strong> <?php echo nl2br($address); ?></p>
        <p><strong>Father's name:</strong> <?php echo $fname; ?></p>
        <p><strong>Mother's name:</strong> <?php echo $mname; ?></p>
        <p><strong>Date of birth:</strong> <?php echo $dob; ?></p>
        <p><strong>Hobby:</strong> <?php echo $hby; ?></p>
        <p><strong>Qualification:</strong> <?php echo $qual; ?></p>
        <p><strong>Experience:</strong> <?php echo $exp; ?></p>

        <a href="bd.php">Go Back</a>
    <?php endif; ?>
   
</body>
</html>