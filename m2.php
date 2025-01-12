<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <h2>Simple Calculator</h2>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="number" name="num1" placeholder="Enter number 1" required>
        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="number" name="num2" placeholder="Enter number 2" required>
        <button type="submit" name="calculate">Calculate</button>
    </form>

    <?php
    // Check if the Calculate button is clicked
    if(isset($_POST['calculate'])){
        // Get the form input values
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];
        $result = 0;
        
        // Perform calculation based on the operator
        switch($operator){
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
                // Check if dividing by zero
                if($num2 != 0){
                    $result = $num1 / $num2;
                } else {
                    $result = "Cannot divide by zero!";
                }
                break;
            default:
                $result = "Invalid operator!";
        }

        // Display the result
        echo "<h3>Result: $result</h3>";
    }
    ?>
</body>
</html>
