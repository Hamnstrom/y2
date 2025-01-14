<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    echo "ditt namn är: ".$_POST["name"]."<br>";
    echo "din ålder är: ".$_POST["alder"]."<br>";

    
    switch($_POST["dropdown"]) {
        case "+":
            $mathOut = $_POST["number1"] + $_POST["number2"];
            break;
        case "-":
            $mathOut = $_POST["number1"] - $_POST["number2"];
            break;
        case "*":
            $mathOut = $_POST["number1"] * $_POST["number2"];
            break;
        case "/":
            $mathOut = $_POST["number1"] / $_POST["number2"];
            break;
    }
    
    echo "Math: ".$_POST["number1"].$_POST["dropdown"].$_POST["number2"]."=".$mathOut."<br>";


    ?>
    
    <br>
    <a href="../Ovn2Extra.php">Tillbaka</a>

</body>
</html>