    
<?php

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["pathinfo(path)"]["name"]);

move_uploaded_file($_FILES["files"]["tmp_name"], "uploads/testaa.jpg");


$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["files"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["files"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;

}
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["files"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["files"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}



?>

<!-- 
    <!DOCTYPE html>
    <html>
    <body>

    <form action="image_uploader.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="files" id="files">
        <input type="submit" value="Upload Image" name="submit">
    </form>

    </body>
    </html>
 -->

