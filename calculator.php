<?php
echo "Enter first number: ";
$num1 = trim(fgets(STDIN));

echo "Enter second number: ";
$num2 = trim(fgets(STDIN));

echo "Choose operation (+, -, *, /): ";
$op = trim(fgets(STDIN));

switch ($op) {
    case '+':
        $result = $num1 + $num2;
        break;
    case '-':
        $result = $num1 - $num2;
        break;
    case '*':
        $result = $num1 * $num2;
        break;
    case '/':
        if ($num2 == 0) {
            echo "Division by zero not allowed!\n";
            exit;
        }
        $result = $num1 / $num2;
        break;
    default:
        echo "Invalid operation!\n";
        exit;
}

echo "Result: $result\n";
?>
