```php
<?php

if (isset($_POST['upload'])) {

    $fileName = $_FILES['profile']['name'];
    $fileTmpName = $_FILES['profile']['tmp_name'];
    $fileSize = $_FILES['profile']['size'];
    $fileError = $_FILES['profile']['error'];

    $allowedTypes = ['image/jpeg', 'image/png'];

    $fileType = mime_content_type($fileTmpName);

    if ($fileError !== 0) {
        echo "Error uploading file.";
    } 
    elseif (!in_array($fileType, $allowedTypes)) {
        echo "Only JPG and PNG images are allowed.";
    } 
    elseif ($fileSize > 2 * 1024 * 1024) {
        echo "File size must be less than 2 MB.";
    } 
    else {

        $uploadPath = "uploads/" . basename($fileName);

        if (move_uploaded_file($fileTmpName, $uploadPath)) {
            echo "Profile picture uploaded successfully!";
            echo "<br>File Name: " . htmlspecialchars($fileName);
        } else {
            echo "Failed to save the file.";
        }
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Image Upload</title>
</head>
<body>

<h2>Upload Profile Picture</h2>

<form method="POST" enctype="multipart/form-data">

    <label>Select Profile Picture:</label>
    <input type="file" name="profile" accept=".jpg,.jpeg,.png" required>

    <br><br>

    <button type="submit" name="upload">Upload</button>

</form>

</body>
</html>
```

**Important:** For file uploads, remember:

```html
enctype="multipart/form-data"
```

And PHP receives the uploaded file through:

```php
$_FILES
```
