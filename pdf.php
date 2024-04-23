<?php
if(isset($_POST["submit"])) {
    $target_dir = "uploads/pdf.php";
    $target_file = $target_dir . basename($_FILES["pdf_file"]["name"]);
    $uploadOk = 1;
    $pdfFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if file is a PDF
    if($pdfFileType != "pdf") {
        echo "Sorry, only PDF files are allowed.";
        $uploadOk = 0;
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size (limit to 5MB)
    if ($_FILES["pdf_file"]["size"] > 5000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Upload file
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["pdf_file"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["pdf_file"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>
