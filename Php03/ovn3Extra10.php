<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["citySelectorDropdown"])) {
            $city = $_POST["citySelectorDropdown"];
        }
    }
    $city = $_POST["citySelectorDropdown"];

?>



<html>
    <head>
        <link rel="stylesheet" href="./CityResults.css">
    </head>
    <body>
        <form action="" method="post">
            <select name="citySelectorDropdown" id="citySelectorDropdown">
                <option value="Helsingfors">Helsingfors</option>
                <option value="Oslo">Oslo</option>
                <option value="Köpenhamn">Köpenhamn</option>
                <option value="Tammerfors">Tammerfors</option>
                <option value="Bergen">Bergen</option>
                <option value="Trondheim">Trondheim</option>
            </select>
            <button type="submit">Choose</button>
        </form>

        <?php
            echo "$city";

        ?>
    </body>
</html>