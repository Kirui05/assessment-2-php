class Calculator {
public function add($a, $b) {
return $a + $b;
}

public function subtract($a, $b) {
return $a - $b;
}

public function multiply($a, $b) {
return $a * $b;
}

public function divide($a, $b) {
if ($b == 0) {
throw new Exception('Division by zero');
}
return $a / $b;
}
}

// example usage
$calculator = new Calculator();
echo "2 + 3 = " . $calculator->add(2, 3) . "<br>"; // output: 2 + 3 = 5
echo "5 - 2 = " . $calculator->subtract(5, 2) . "<br>"; // output: 5 - 2 = 3
echo "4 * 6 = " . $calculator->multiply(4, 6) . "<br>"; // output: 4 * 6 = 24
echo "10 / 2 = " . $calculator->divide(10, 2) . "<br>"; // output: 10 / 2 = 5

// interactive interface
if (isset($_POST['submit'])) {
$calculator = new Calculator();
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operator = $_POST['operator'];
try {
switch ($operator) {
case 'add':
$result = $calculator->add($num1, $num2);
break;
case 'subtract':
$result = $calculator->subtract($num1, $num2);
break;
case 'multiply':
$result = $calculator->multiply($num1, $num2);
break;
case 'divide':
$result = $calculator->divide($num1, $num2);
break;
default:
throw new Exception('Invalid operator');
}
echo "Result: " . $result;
} catch (Exception $e) {
echo "Error: " . $e->getMessage();
}
}