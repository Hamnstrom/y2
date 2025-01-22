
<?php
    $userInput = 0;
    $userInput = $_POST["userInputField"];
    
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


        echo "
            <form action=''>
                <select name='formName'>

        ";
                    if ($userInput > 0) {
                        echo "<option value=''>List of items:</option>";
                        for ($i=0; $i < $userInput; $i++) { 
                            echo "<option value=''>List item #" . $i+1 . "</option>";
                        };
                    } else {
                        echo "
                        <option value=''>List of items:</option>
                        <option value=''>List item #1</option>
                        <option value=''>List item #2</option>
                        <option value=''>List item #3</option>
                        ";
                    };

                    
        echo "
                </select>
            </form>
       ";
    
    ?>


    <form action="" method="post">
        <label for="userInputField"># of list elements: </label>
        <input type="number" name="userInputField" id="">
    </form>


</body>
</html>