<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Biodata Display</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            width: 70%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1 align="center">Biodata</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['name']);
        $dob = htmlspecialchars($_POST['dob']);
        $age = htmlspecialchars($_POST['age']);
        $gender = htmlspecialchars($_POST['gender']);
        $education = htmlspecialchars($_POST['education']);
        $father_name = htmlspecialchars($_POST['father_name']);
        $address = htmlspecialchars($_POST['address']);
        $email = htmlspecialchars($_POST['email']);
        $phone = htmlspecialchars($_POST['phone']);
        $nationality = htmlspecialchars($_POST['nationality']);
        $marital_status = htmlspecialchars($_POST['marital_status']);
        $hobbies = htmlspecialchars($_POST['hobbies']);

        echo "<center>
    <table>
        <tr><th>Name</th><td>$name</td></tr>
        <tr><th>Age</th><td>$age</td></tr>
        <tr><th>Gender</th><td>$gender</td></tr>
        <tr><th>Educational Qualification</th><td>$education</td></tr>
        <tr><th>Father's Name</th><td>$father_name</td></tr>
        <tr><th>Address</th><td>$address</td></tr>
        <tr><th>Email</th><td>$email</td></tr>
        <tr><th>Phone Number</th><td>$phone</td></tr>
        <tr><th>Nationality</th><td>$nationality</td></tr>
        <tr><th>Marital Status</th><td>$marital_status</td></tr>
        <tr><th>Hobbies</th><td>$hobbies</td></tr>
        <tr><th>Date of Birth</th><td>$dob</td></tr>
    </table>
</center>";
    } else {
        echo "<p>No data submitted.</p>";
    }
    ?>
</body>
</html>            