<?php
    // 1
    $code = array("CPP","JavaScript","PHP","Cobol");
    // 3a
    $arrEx = [
        ["Bulla","Kaka","Pirog"],
        [1.50,5.00,2.50],
        [10,4,12]
    ];

    // 3d
    $arrExStock = 0;





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        // 2
        for($i = 0; $i < count($code); $i++) {
            echo "<p>".$code[$i]."</p>";
        };
        // 3b
        echo "<p>".$arrEx[1][0]."</p>";
        echo "<p>".$arrEx[2][2]."</p>";
        // 3c
        echo "<p>".count($arrEx[0])."</p>";

        // 3d
        for( $i = 0; $i < count($arrEx[2]); $i++) {
            $arrExStock += $arrEx[2][$i];
        };
        echo "<p>".$arrExStock."</p>";

    ?>
    
    
    <a href="./ovn3Extra01.php">Extra 1</a><br>
    <a href="./ovn3Extra02.php">Extra 2</a><br>
    <a href="./ovn3Extra03.php">Extra 3</a><br>
    <a href="./ovn3Extra04.php">Extra 4</a><br>
    <a href="./ovn3Extra05.php">Extra 5</a><br>
    <a href="./ovn3Extra06.php">Extra 6</a><br>
    <a href="./ovn3Extra07.php">Extra 7</a><br>
    <a href="./ovn3Extra08.php">Extra 8</a><br>
    <a href="./ovn3Extra09.php">Extra 9</a><br>
    <a href="./ovn3Extra10.php">Extra 10</a><br>
    <a href="./ovn3Extra11.php">Extra 11</a><br>
    <a href="./ovn3Extra12.php">Extra 12</a><br>
</body>
</html>