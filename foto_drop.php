<?php
ini_set("upload_max_filesize",2000000);

$truePhoto = 1;
if($_FILES["fileToUpload"]['error'] == UPLOAD_ERR_OK){
    echo "file Uploaded";
} elseif ($_FILES["fileToUpload"]['error'] == UPLOAD_ERR_INI_SIZE) {
    echo "there was a Problem with the file size";
    $truePhoto = 0;
} else {
    echo "there was a Problem with uploading";
    $truePhoto = 0;
}
if ($truePhoto == 1){
    $directoryPhoto = "photos/";
    $filePath = $directoryPhoto . $_FILES["fileToUpload"]["name"];
    //echo "<br>";
    //echo $filePath;
    move_uploaded_file( $_FILES["fileToUpload"]["tmp_name"],$filePath);
    echo "<br>";
    echo "<img src='$filePath' alt='Your photo'>";
    echo "<br>";
    var_dump(exif_read_data($filePath, 0, true));
}
?>