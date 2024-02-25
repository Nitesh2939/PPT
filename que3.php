<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic Operations</title>
</head>
<body bgcolor="#FAA40F">
  <div align="center"> <br><br><u> <h1>Arithmetic Operations</h1></u><br>
    <form method="post" action="">
        <label for="num1">Enter first number:</label>
        <input type="number" id="num1" name="num1" required><br><br>
        
        <label for="num2">Enter second number:</label>
        <input type="number" id="num2" name="num2" required><br><br>
        
        <label for="operation">Select operation:</label>
        <select id="operation" name="operation">
            <option value="add">Addition</option>
            <option value="subtract">Subtraction</option>
            <option value="multiply">Multiplication</option>
            <option value="divide">Division</option>
        </select><br><br>
        
        <input type="submit" value="Calculate">
    </form>

    <?php
    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        
        // Perform arithmetic operation based on selected option
        switch ($operation) {
            case 'add':
                $result = $num1 + $num2;
                echo "<p>Result of addition: $result</p>";
                break;
            case 'subtract':
                $result = $num1 - $num2;
                echo "<p>Result of subtraction: $result</p>";
                break;
            case 'multiply':
                $result = $num1 * $num2;
                echo "<p>Result of multiplication: $result</p>";
                break;
            case 'divide':
                if ($num2 == 0) {
                    echo "<p>Error: Cannot divide by zero</p>";
                } else {
                    $result = $num1 / $num2;
                    echo "<p>Result of division: $result</p>";
                }
                break;
            default:
                echo "<p>Error: Invalid operation</p>";
                break;
        }
    }
    ?>
    </div>
</body>
</html>
