<?php
    $gender = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['gender'])) {
            $gender = htmlspecialchars($_POST['gender']);
        }
    }

?>

<style>
    html{height:100%;width:100%;}body{height:100%;width:100%;}
</style>
<head>
    <link rel="stylesheet" href="./ManFemale.css">
</head>


<html>
<body>
        
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label>
            <input type="radio" name="gender" value="male" <?php echo ($gender == "male") ? 'checked' : ''; ?>>
            Male
        </label><br>
        <label>
            <input type="radio" name="gender" value="female" <?php echo ($gender == "female") ? 'checked' : ''; ?>>
            Female
        </label><br>
        <input type="submit" value="Submit">
    </form>


    
    <?php
        if ($gender) {
            echo "<h3>$gender</h3>";
        };
        
        switch ($gender) {
            case 'male':
                ?>
                <body style="background-color:blue;">
                    <?php
                break;
            case 'female':
                ?>
                <body style="background-color:red;">
                <?php
                break;
        
            default:
                ?>
                <body style="background-color:lightgray;">
                <?php
                break;
        }
    ?>
</body>
</html>