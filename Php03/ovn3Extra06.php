<?php 
    // Check if file was uploaded without errors
    if (isset($_FILES['file']) && $_FILES['file']['error'] == UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['file']['tmp_name'];
        $fileName = $_FILES['file']['name'];
        $fileSize = $_FILES['file']['size'];
        $fileType = $_FILES['file']['type'];
        $description = $_POST['description'];

        // Define the upload directory
        $uploadFileDir = 'uploads/';
        $dest_path = $uploadFileDir . $fileName;

        // Check if the upload directory exists, if not create it
        if (!is_dir($uploadFileDir)) {
            mkdir($uploadFileDir, 0755, true);
        }
        
        // Move the file to the upload directory
        if (move_uploaded_file($fileTmpPath, $dest_path)) {
            echo 'File is successfully uploaded. Description: ' . htmlspecialchars($description);
        } else {
            echo 'There was an error moving the uploaded file.';
        }
    } else {
        echo 'No file uploaded or there was an upload error.';
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
    <form action="" method="post" enctype="multipart/form-data">
        <label for="file">Choose a file to upload:</label>
        <input type="file" name="file" id="file" required>
        <br>
        <label for="description">Description:</label>
        <input type="text" name="description" id="description" required>
        <br>
        <input type="submit" value="Upload">
    </form>

</body>
</html>