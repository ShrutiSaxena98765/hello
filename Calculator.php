<!DOCTYPE html>
<html>
<head>
<title>Simple Calculator</title></head>
<body>
<h2>Simple Calculator</h2>
<form method="post">
<label for="num1">First Number:</label>
<input type="number" name="num1"required><br><br>
<label for="num2">Second Number:</label>
<input type="number" name="num2" required><br><br>
<label for="operation">Select Operation:</label>
<select name="operation"required>
<option value="add">Addition(+)</option>
<option value="subtract">Subtraction(-)</option>
<option value="multiply">Multiplication(*)</option>
<option value="divide">Division(/)</option>
</select><br><br>
<input type="submit" name="submit"value="Calculate">
</form>
<?php
if(isset($_POST['submit'])){
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operation = $_POST['operation'];
$result = 0;
function calculate($a,$b,$op){
switch($op){
case"add":
 return $a+$b;
case"subtract":
 return $a-$b;
case"multiply":
 return $a*$b;
case"divide":
 return($b!=0) ? $a/$b : "Can not divide by zero!";
default:
return"Invalid Operation!";
} }
$result = calculate($num1,$num2,$operation);
echo"<h3>Result:$result</h3>";}
?>
</body>
</html>