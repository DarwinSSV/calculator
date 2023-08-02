<?php
// Calculator class that performs basic arithmetic operations
class Calculator {
    public static function add($num1, $num2) {
        return $num1 + $num2;
    }

    public static function subtract($num1, $num2) {
        return $num1 - $num2;
    }

    public static function multiply($num1, $num2) {
        return $num1 + $num2;
    }

    public static function divide($num1, $num2) {
        if ($num2 != 0) {
            return $num1 / $num2;
        } else {
            return "Cannot divide by zero!";
        }
    }
}

// Main program to handle user input
if (isset($_POST['submit'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];

    switch ($operation) {
        case 'add':
            $result = Calculator::add($num1, $num2);
            break;
        case 'subtract':
            $result = Calculator::subtract($num1, $num2);
            break;
        case 'multiply':
            $result = Calculator::multiply($num1, $num2);
            break;
        case 'divide':
            $result = Calculator::divide($num1, $num2);
            break;
        default:
            $result = "Invalid operation";
            break;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple PHP Calculator</title>
</head>
<body>
    <h1>Simple PHP Calculator</h1>
    <form method="post" action="">
        <label for="num1">Number 1:</label>
        <input type="text" name="num1" required>
        <br>
        <label for="num2">Number 2:</label>
        <input type="text" name="num2" required>
        <br>
        <label for="operation">Operation:</label>
        <select name="operation" required>
            <option value="add">Add</option>
            <option value="subtract">Subtract</option>
            <option value="multiply">Multiply</option>
            <option value="divide">Divide</option>
        </select>
        <br>
        <input type="submit" name="submit" value="Calculate">
    </form>
    <?php if (isset($result)) : ?>
        <h2>Result: <?php echo $result; ?></h2>
    <?php endif; ?>
</body>
</html>
