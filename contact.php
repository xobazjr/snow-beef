<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            table-layout: fixed;
        }

        th, td {
            font-size: 20px;
            text-align: left;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $company = $_POST["fcompany"];
            $phone = $_POST["fphone"];
            $name = $_POST["fname"];

            echo "<table>"."<br>";
            echo "<tr>"."<br>";
            echo "<th>"."Company"."</th>"."<br>";
            echo "<th>"."Phone"."</th>"."<br>";
            echo "<th>"."Name"."</th>"."<br>";
            echo "</tr>"."<br>";

            echo "<tr>"."<br>";
            echo "<td>".$company."</td>"."<br>";
            echo "<td>".$phone."</td>"."<br>";
            echo "<td>".$name."</td>"."<br>";
            echo "</tr>"."<br>";

            echo "</table>";
        }
    ?>
</body>
</html>