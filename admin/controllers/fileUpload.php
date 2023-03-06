<?php

function uploadFile ($target_dir, $file){
    $response = [];

    $time = strtotime("now");
    $name = $time . basename($file["name"]);
    $target_file = $target_dir .$name;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($file["tmp_name"]);
        if($check !== false) {
            $response['message'] = "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            $response['message'] =  "File is not an image.";
            $uploadOk = 0;
        }
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        $response['message'] =  "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($file["size"] > 500000) {
        $response['message'] =  "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        $response['message'] =  "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
    // $response['message'] =  "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($file["tmp_name"], $target_file)) {
            $response['message'] =  $name;
        } else {
            $response['message'] =  "Sorry, there was an error uploading your file.";
        }
    }

    if($uploadOk == 0){
        $response['status'] = false;
    }else{
        $response['status'] = true;
    }
    return $response;
}
?>