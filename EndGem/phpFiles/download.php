<?php
include 'connection.php';

    $entryname=$_GET['entryname'];
    $query1="SELECT id, coursename, downloads FROM entries WHERE entryname='".$entryname."';";
    $result=$conn->query($query1);
    
    $row=$result->fetch_assoc();

    $currentDownloads=$row['downloads'];
    $currentDownloads=(int)$currentDownloads;
    $currentDownloads++;
    
    $query2="UPDATE entries SET downloads='".$currentDownloads."' WHERE id='".$row['id']."';";
    $conn->query($query2);
    header ('location: ../index.php?course='.$row['coursename']);
    
    //<p class=admin'>Uploaded by: <span class='userName'>".$username['username']."</span></p>
?>
