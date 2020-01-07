<?php
    include 'connection.php';

    if (isset($_POST['submit'])){
        $courseName=htmlspecialchars($_POST['course']);
        $title=htmlspecialchars($_POST['title']);

        $target_file="uploads/".basename($_FILES["file"]["name"]);
        $fileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        if ($fileType=="jpg"||$fileType=="png"||$fileType=="jpeg"||$fileType=="gif"||$fileType=="pdf"){
            move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
            $fileName=basename( $_FILES["file"]["name"]);

            $sql="INSERT INTO `entries`(coursename, entryname, title) VALUES ('".$courseName."', '".$fileName."', '".$title."');";
            $result=$conn->query($sql);
            
            header ('location: ../index.php');
        }
        else {echo "<h1>Only jpg, png, jpeg, pdf files are allowed.</h1>";}
    }
?>
