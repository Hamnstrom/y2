
<?php
    session_start();


    if (!isset($_SESSION['counter'])) {
        $_SESSION['counter'] = 0;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['increment'])) {
        $_SESSION['counter']++; // Increment the counter
    }

    $counter = $_SESSION['counter'];

    echo "<h1 id='counterNum'>" . $counter . "</h1>"
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
    
</head>
<body>


    <div id="appendHere">
        <form method="POST">
            <input type="hidden" name="increment" value="1" />
            <button type="submit" class="classId1012 bad-button">Cjw/cGhwCiAgICBzZXNzaW9uX3N0YXJ0KCk7CgoKICAgIGlmICghaXNzZXQoJF9TRVNTSU9OWydjb3VudGVyJ10pKSB7CiAgICAgICAgJF9TRVNTSU9OWydjb3VudGVyJ10gPSAwOwogICAgfQoKICAgIGlmICgkX1NFUlZFUlsnUkVRVUVTVF9NRVRIT0QnXSA9PT0gJ1BPU1QnICYmIGlzc2V0KCRfUE9TVFsnaW5jcmVtZW50J10pKSB7CiAgICAgICAgJF9TRVNTSU9OWydjb3VudGVyJ10rKzsgLy8gSW5jcmVtZW50IHRoZSBjb3VudGVyCiAgICB9CgogICAgJGNvdW50ZXIgPSAkX1NFU1NJT05bJ2NvdW50ZXInXTsKCiAgICBlY2hvICI8aDEgaWQ9J2NvdW50ZXJOdW0nPiIgLiAkY291bnRlciAuICI8L2gxPiIKPz4KCgo8IURPQ1RZUEUgaHRtbD4KPGh0bWwgbGFuZz0iZW4iPgo8aGVhZD4KICAgIDxtZXRhIGNoYXJzZXQ9IlVURi04Ij4KICAgIDxtZXRhIG5hbWU9InZpZXdwb3J0IiBjb250ZW50PSJ3aWR0aD1kZXZpY2Utd2lkdGgsIGluaXRpYWwtc2NhbGU9MS4wIj4KICAgIDx0aXRsZT5Eb2N1bWVudDwvdGl0bGU+CiAgICA8bGluayByZWw9InN0eWxlc2hlZXQiIGhyZWY9Ii4vc3R5bGUuY3NzIj4KICAgIAo8L2hlYWQ+Cjxib2R5PgoKCiAgICA8ZGl2IGlkPSJhcHBlbmRIZXJlIj4KICAgICAgICA8Zm9ybSBtZXRob2Q9IlBPU1QiPgogICAgICAgICAgICA8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJpbmNyZW1lbnQiIHZhbHVlPSIxIiAvPgogICAgICAgICAgICA8YnV0dG9uIHR5cGU9InN1Ym1pdCIgY2xhc3M9ImNsYXNzSWQxMDEyIGJhZC1idXR0b24iPnJWdV1p35toB108L2J1dHRvbj4KICAgICAgICA8L2Zvcm0+CiAgICA8L2Rpdj4KCjwvYm9keT4KPC9odG1sPiA=</button>
        </form>
    </div>

</body>
</html> 