<?php

$conn = mysqli_connect("localhost", "root", "", "insertimg");



    $fileName = $_FILES['image']['name'];
    $tmpName  = $_FILES['image']['tmp_name'];
    

    $uploadPath = "uploads/" . $fileName;

    if (move_uploaded_file($tmpName, $uploadPath)) {

        $sql = "INSERT INTO images (image_name, image_path)
                VALUES ('$fileName', '$uploadPath')";

        mysqli_query($conn, $sql);

        header('location:image.php');

    }
     else {
        echo "Upload failed";
    }




?>
