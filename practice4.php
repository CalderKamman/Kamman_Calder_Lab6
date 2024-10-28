<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice 4</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Multiplication Table</h1>

    <form method="POST" style="text-align: center;">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" min="1" required>
        <button type="submit">Generate Table</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = intval($_POST['number']);

        echo "<table>";
        echo "<tr><th>x</th>";
        for ($i = 1; $i <= $number; $i++) {
            echo "<th>$i</th>";
        }
        echo "</tr>";

        for ($i = 1; $i <= $number; $i++) {
            echo "<tr>";
            echo "<th>$i</th>"; 
            for ($j = 1; $j <= $number; $j++) {
                echo "<td>" . ($i * $j) . "</td"; 
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>
