<?php
// For the Custom Order Grids 
$name = $_POST['name'];
$email = $_POST['email'];
$description = $_POST['description'];
$images = $_FILES['images'];

// Example: Save data to a database, send an email, etc.
echo "Received: $name, $email, $description";

// Handle file uploads
if (!empty($images)) {
    foreach ($images['name'] as $index => $imageName) {
        // Save each image, for example
        $targetPath = "uploads/" . basename($imageName);
        if (move_uploaded_file($images['tmp_name'][$index], $targetPath)) {
            echo "The file $imageName has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>