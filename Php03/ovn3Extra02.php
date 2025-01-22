
<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style> 



        html {
            height: 100%;
        }
        body {
            height: 100%;
            display: block;
            align-content: center;

            background-color: <?php echo htmlspecialchars($_SESSION['bg_color']); ?>;
            transition: background-color 0.5s;
        }

        
    </style>
</head>
<body>
    
    <?php
        $globalColor = $_POST["abc"];

        echo "<style> body { background-color: " . htmlspecialchars($globalColor) . "; }</style>";

    ?>

    <a href="../Php03">Back</a>

    <div>
        <h2>select color: </h2>
        <form method="POST">
            <select name="abc">
                <option value="firebrick">Firebrick</option>
                <option value="#A47B5B">Color#5</option>
                <option value="#DBE718">Color#132</option>
            </select>
            <input type="submit" value="Change color">
        </form>
    </div>

</body>
</html>