<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $company = $_POST["fcompany"];
            $phone = $_POST["fphone"];
            $name = $_POST["fname"];

            echo "<table>"."<br>";
            echo "<tr>"."<br>";
            echo "<th>"."Company";
            echo "</tr>"."<br>";
            echo "</table>";

        }
    ?>
</body>
</html>