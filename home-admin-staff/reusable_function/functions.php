<?php
function extract_name($fileName){
    $name = $fileName['name'];
    return $name;
}

function extract_tmp_name($fileName){
    $tmpName = $fileName['tmp_name'];
    return $tmpName; 
}

function extract_size($fileName){
    $size =  $fileName['size'];
    return $size;
}

function extract_error($fileName){
    $error = $fileName['error'];
    return $error;
}

function extract_ext($fileName){
    $partialExt = explode(".", $fileName);
    $extension = strtolower(end($partialExt));
    return $extension;
}

// End of Extraction function

function file_destination($directory ,$renamedFile){
    $fileUploadDestination = $directory.$renamedFile;
    return $fileUploadDestination;
}

function check_file_extension($fileActualExtention, $allowedExtension) {
    if (in_array($fileActualExtention, $allowedExtension)){
        return true;
    } else {
        return false;
    }
}
function check_upload_error($fileError){
    if ($fileError === 0){
        return true;
    } else {
        return false;
    }
}

function check_file_size($fileSize){
    if ($fileSize < 1000000){
        return true;
    } else {
        return false;
    }
}

function rename_file($extractedExt){
    $renamedFile = uniqid('', true).".".$extractedExt;
    return $renamedFile;
}
?>