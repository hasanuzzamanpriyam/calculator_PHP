<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
        }
        .calculator {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .calculator input, .calculator select, .calculator button {
            margin: 5px 0;
            padding: 10px;
            width: 100%;
            font-size: 16px;
        }
        .result {
            margin-top: 10px;
            padding: 10px;
            background-color: #e0e0e0;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="calculator">
        <h2>Simple Calculator</h2>
        <form method="post" action="">
            <input type="number" name="num1" placeholder="Enter first number" required>
            <input type="number" name="num2" placeholder="Enter second number" required>
            <select name="operation">
                <option value="add">Add</option>
                <option value="subtract">Subtract</option>
                <option value="multiply">Multiply</option>
                <option value="divide">Divide</option>
            </select>
            <button type="submit" name="submit">Calculate</button>
        </form>
        <?php
        if (isset($_POST['submit'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operation = $_POST['operation'];
            $result = '';

            if ($operation == 'add') {
                $result = $num1 + $num2;
            } elseif ($operation == 'subtract') {
                $result = $num1 - $num2;
            } elseif ($operation == 'multiply') {
                $result = $num1 * $num2;
            } elseif ($operation == 'divide') {
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = 'Division by zero error!';
                }
            }
            echo "<div class='result'>Result: $result</div>";
        }
        ?>
    </div>
</body>
</html>