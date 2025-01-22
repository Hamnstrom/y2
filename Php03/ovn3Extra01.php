<?php
$file_path = './gastbok.txt';
echo "File Path: " . $file_path . "\n";

// Check PHP can write to the directory
if (!is_writable(dirname($file_path))) {
    echo "Unable to write to directory " . dirname($file_path) . "\n";
} else {
    echo "Directory is writable.\n";
}

// Sanitize and store the message
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['message'])) {
    $message = trim($_POST['message']); // Not whitespaces
    $message = htmlspecialchars($message); // XSS

    // Append message
    $file = fopen($file_path, 'a');
    if (!$file) {
        echo 'Unable to open file';
    } else {
        fwrite($file, $message . "\n"); // Write message
        fclose($file);
    }
}

// Load messages
$messages = [];
if (file_exists($file_path)) {
    $messages = file($file_path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES); // Read file contents
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message Board</title>
</head>
<body>
    <h1>Gästbok</h1>
    
    <form action="" method="post">
        <textarea name="message" rows="4" cols="50" placeholder="Type your message here..." required></textarea><br>
        <button type="submit">Submit</button>
    </form>

    <h2>Previous Messages:</h2>
    <ul>
        <?php if (!empty($messages)): ?>
            <?php foreach ($messages as $msg): ?>
                <li><?= htmlspecialchars($msg) ?></li> <!-- Output each message safely -->
            <?php endforeach; ?>
        <?php else: ?>
            <li>No messages yet!</li>
        <?php endif; ?>
    </ul>
</body>
</html>