<?php

if (isset($_POST["submit"])) {

    $target_dir = "uploads/";
    $target_file =  basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));



    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Vec postoji fajl sa tim imenom.<br>";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 300) {
        echo "Izvinite, vas fajl je previse veliki.<br>";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if (
        $imageFileType != "doc" && $imageFileType != "docx" && $imageFileType != "txt"
        && $imageFileType != "pdf"
    ) {
        echo "samo DOC, DOCX, TXT, PDF fajlovi su dozvoljeni.<br>";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo " fajl se nije uploadovao.<br>";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "Fajl " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " je uploadovan.<br>";
        } else {
            echo " bila je greska tokom uploadovanja fajla.<br>";
        }
    }
}
