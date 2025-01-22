
<?php
    $userIdInput = $userPasswordInput = "";
    $userIdReal = "admin"; $userPasswordReal = "admin";

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
        $userIdInput = $_POST["userIdField"];
        $userPasswordInput = $_POST["userPasswordField"];

        if ($userIdInput == $userIdReal && $userPasswordInput == $userPasswordReal) {
            echo "Login successful";
        } else {
            echo "Login Failed";
        };
    ?>

    <div class="login">
        <h2>Login</h2>
        <form action="" method="post">

            <label for="userIdField">User ID: </label><br>
            <input type="password" name="userIdField" id="userIdFieldId" placeholder="..."><br>

            <label for="userPasswordField">Password: </label><br>
            <input type="password" name="userPasswordField" id="userPasswordFieldId" placeholder="..."><br>

            <button type="submit">Login</button>

        </form>
    </div>




</body>
</html>