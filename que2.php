<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Eligibility Checker</title>
</head>
<body bgcolor="#0FFA6D">
<div align="center"> <br><br> <u><h1>Job Eligibility Checker</h1></u><br><br>
    <form action="" method="post">
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required>
        <br><br>
        <label for="income">Income (annual):</label>
        <input type="number" id="income" name="income" required>
        <br><br>
        <input type="submit" name="submit" value="Check Eligibility">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $age = $_POST['age'];
        $income = $_POST['income'];

        if ($age >= 18) {
            echo "You are eligible to apply for a job.   ";

            if ($income >= 30000) {
                echo " You meet the minimum income requirement.";
            } else {
                echo " You do not meet the minimum income requirement.";
            }
        } else {
            echo "You are not eligible to apply for a job because you are under 18 years old.";
        }
    }
    ?>
    </div>
</body>
</html>
