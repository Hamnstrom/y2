<?php
    $text = "tomosarts future crypto site";
    $textLength = strlen($text);
    $str1 = "Future";
    $str2 = "future";
    $day = "Monday";
    $arrEx=[4,2,8,1,9]



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
        echo $textLength;
        // 3
        echo "<p>" . str_replace("future", "PAST", $text) . "</p>";
        // 4
        if($str1 == $str2) { 
            echo "$"."str1 och "."$"."str2 är samma";
        } else {
            echo "de är inte samma";
        };
        

        for($i=0;$i<10;$i++) {
            echo "<br>";
        };
        
        // 5
        echo readfile("./tomosart.txt");
        
        for($i=0;$i<10;$i++) {
            echo "<br>";
        };
        // 7
        switch ($day) {
            case "Monday":
                echo "$day, Go to the gym";
                
            break;
            case "Tuesday":
                echo "$day, Go running";
            break;
            
            case "Wednesday":
                echo "$day, Go swim";
            break;
            case "Thursday":
                echo "$day, Play tennis";
            break;
            case "Friday":
                echo "$day, sleep";
            break;
            case "Saturday":
                echo "$day, Run";
            break;
            case "Sunday":
                echo "$day, Play golf";
            break;
            default:
                echo "";
            break;   
        }

        for($i=0;$i<10;$i++) {
            echo "<br>";
        };

        //8
        sort($arrEx);
        for($i=0;$i<count($arrEx);$i++) {
            echo $arrEx[$i].",";
        }





    ?>


    <!--6,9,10-->
    <form action="out.php" method="POST">
        
        Namn: <input type="text" name="name"><br>
        Ålder: <input type="text" name="alder"><br>
        Nummer1: <input type="number" name="number1"><br>
        Nummber2: <input type="number" name="number2"><br>
        Dropdown: <select name="dropdown">

            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>

        </select><br>

        <input type="submit">
        
    </form>


    <?php
        for($i=0;$i<10;$i++) {
            echo "<br>";
        };
    ?>
</body>
</html>