
<?php
$filename = '/var/www/html/Php03/gastbok.txt'; // Use absolute path

if (is_writable($filename)) {
    $file = fopen($filename, 'a'); // Open for appending
    if ($file) {
        fwrite($file, "Test write at " . date('Y-m-d H:i:s') . "\n");
        fclose($file);
        echo "Write operation successful.";
    } else {
        echo "Can't open the file for writing.";
    }
} else {
    echo "The file $filename is not writable.";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>