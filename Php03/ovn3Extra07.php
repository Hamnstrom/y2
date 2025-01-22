<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $number1 = $_POST["number1"];
    $modifier1 = $_POST["modifier1"];
    $number2 = $_POST["number2"];
    
    
    switch ($modifier1) {
        case '+':
            $result = $number1 + $number2;
            break;
        case '-':
            $result = $number1 - $number2;
            break;
        case '*':
            $result = $number1 * $number2;
            break;
        case '/':
            $result = $number2 != 0 ? $number1 / $number2 : 'Division by zero error';
            break;
        default:
            $result = 'Invalid operation';
            break;
    }

    
    $_SESSION["mathHistory"][] = array(
        'expression' => "$number1 $modifier1 $number2 = $result"
    );
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./CalculatorAlaSession.css">
</head>
<body>
    
    <form action="" method="POST"> 
        <label for="number1">Choose number to math with: </label>
        <input type="number" name="number1" required><br> 
        
        <label for="modifier1">Choose Calculate: </label>
        <select name="modifier1" id="modifier1" required> 
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select><br>

        <label for="number2">Choose another number to math with: </label>
        <input type="number" name="number2" required><br> 

        <button type="submit">Calculate</button>
    </form>

    <h3>History: </h3>
    <div id="historyDiv">
        <?php
            if (isset($_SESSION["mathHistory"])) {  
                foreach ($_SESSION["mathHistory"] as $calculation) {
                    echo $calculation['expression'] . "<br>";
                }
            }
        ?>
    </div>

    <script>

        const historyDiv = document.getElementById('historyDiv');
        historyDiv.scrollTop = historyDiv.scrollHeight;
    </script>

</body>
</html>