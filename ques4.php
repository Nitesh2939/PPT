<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop Examples with User Input</title>
</head>
<body align="center" bgcolor="#FF01D6">
    <h1><u>Loop Examples with User Input</u></h1><br><br>

    <form method="post">
        <label for="start">Enter start number:</label>
        <input type="number" id="start" name="start" required><br><br>
        
        <label for="end">Enter end number:</label>
        <input type="number" id="end" name="end" required><br><br>
        
        <input type="submit" value="Generate Numbers">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $start = $_POST['start'];
        $end = $_POST['end'];

        echo "<h2>For Loop Example:</h2>";
        echo "<p>Printing numbers from $start to $end using a for loop:</p>";
        echo "<ul>";
        for ($i = $start; $i <= $end; $i++) {
            echo "$i  ";
        }
        echo "</ul>";

        echo "<h2>While Loop Example:</h2>";
        echo "<p>Printing numbers from $start to $end using a while loop:</p>";
        echo "<ul>";
        $j = $start;
        while ($j <= $end) {
            echo "$j  ";
            $j++;
        }
        echo "</ul>";

        echo "<h2>Do-While Loop Example:</h2>";
        echo "<p>Printing numbers from $start to $end using a do-while loop:</p>";
        echo "<ul>";
        $k = $start;
        do {
            echo "$k  ";
            $k++;
        } while ($k <= $end);
        echo "</ul>";
    }
    ?>
</body>
</html>
