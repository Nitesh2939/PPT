<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorting Algorithms</title>
</head>
<body bgcolor="#01B4FF">
    <h1>Sorting Algorithms</h1>

    <form method="post">
        <label for="numbers">Enter numbers (comma-separated):</label>
        <input type="text" id="numbers" name="numbers" required>
        <input type="submit" value="Sort">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = $_POST['numbers'];
        $numbers = explode(',', $input);
        
        // Remove any leading/trailing whitespace and convert strings to integers
        $numbers = array_map('trim', $numbers);
        $numbers = array_map('intval', $numbers);

        echo "<h2>Original Array:</h2>";
        printArray($numbers);

        // Bubble Sort
        $bubbleSorted = bubbleSort($numbers);
        echo "<h2>Bubble Sort:</h2>";
        printArray($bubbleSorted);

        // Selection Sort
        $selectionSorted = selectionSort($numbers);
        echo "<h2>Selection Sort:</h2>";
        printArray($selectionSorted);
        
        // Insertion Sort
        $insertionSorted = insertionSort($numbers);
        echo "<h2>Insertion Sort:</h2>";
        printArray($insertionSorted);

        // Quick Sort
        $quickSorted = quickSort($numbers);
        echo "<h2>Quick Sort:</h2>";
        printArray($quickSorted);
    }

    function bubbleSort($arr) {
        $n = count($arr);
        for ($i = 0; $i < $n - 1; $i++) {
            for ($j = 0; $j < $n - $i - 1; $j++) {
                if ($arr[$j] > $arr[$j + 1]) {
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$j + 1];
                    $arr[$j + 1] = $temp;
                }
            }
        }
        return $arr;
    }

    function selectionSort($arr) {
        $n = count($arr);
        for ($i = 0; $i < $n - 1; $i++) {
            $minIndex = $i;
            for ($j = $i + 1; $j < $n; $j++) {
                if ($arr[$j] < $arr[$minIndex]) {
                    $minIndex = $j;
                }
            }
            $temp = $arr[$i];
            $arr[$i] = $arr[$minIndex];
            $arr[$minIndex] = $temp;
        }
        return $arr;
    }

    function insertionSort($arr) {
        $n = count($arr);
        for ($i = 1; $i < $n; $i++) {
            $key = $arr[$i];
            $j = $i - 1;
            while ($j >= 0 && $arr[$j] > $key) {
                $arr[$j + 1] = $arr[$j];
                $j = $j - 1;
            }
            $arr[$j + 1] = $key;
        }
        return $arr;
    }

    function quickSort($arr) {
        $n = count($arr);
        if ($n <= 1) {
            return $arr;
        }
        $pivot = $arr[0];
        $left = $right = [];
        for ($i = 1; $i < $n; $i++) {
            if ($arr[$i] < $pivot) {
                $left[] = $arr[$i];
            } else {
                $right[] = $arr[$i];
            }
        }
        return array_merge(quickSort($left), [$pivot], quickSort($right));
    }

    function printArray($arr) {
        echo "<pre>";
        print_r($arr);
        echo "</pre>";
    }
    ?>
</body>
</html>
