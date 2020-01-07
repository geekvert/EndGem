<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>End Gem</title>
    <link rel="stylesheet" href="css/homepage.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f6992e24ac.js" crossorigin="anonymous"></script>
    
</head>
<body>
    <header class="header">
        <a  class="imageLogo" href="index.php">
            <img class="logo" src="images/logo.png" alt="EndGem Logo" max-width="350px" height="60px">
            <div style="color:white; font-size:90%;"><?php session_start(); echo "Hello, ".$_SESSION["username"]."!"; ?></div>
        </a>
        <div class="name"></div>
        <button class="add-btn" title="Add Material"><i class="fas fa-plus" style="color:white;"></i></button>
        <button class="leaderboard-btn" title="View Leaderboard"><i class="fas fa-bars" style="color:white;"></i></button>
    </header>

    <ul class="nav-bar">
        <?php
        include 'phpFiles/connection.php';
            $q1="SELECT DISTINCT coursename FROM entries;";
            $result1=$conn->query($q1);

            while ($row1=$result1->fetch_assoc()){
                echo "<li class='course'>".$row1['coursename']."</li>";
            }
        ?>
    </ul>

    <div class="container">

        <?php
        if (!empty($_GET['course'])){

            $coursename=$_GET['course'];
        
            $query="SELECT * FROM entries WHERE coursename='".$coursename."';";
            $content=$conn->query($query);
        
            while ($row2=$content->fetch_assoc()){
            echo
                "<div class='entry'>
                <h3 class='title'>".$row2['title']."</h3>
                <p class='date'>".$row2['date']."</p>
                <p class='counter'>Total Downloads: <span class='totalDownloads'>".$row2['downloads']."</span></p>
                <button class='download'><a class='download_link' id='".$row2['entryname']."' href='phpFiles/uploads/".$row2['entryname']."' download>Download</a></button>
                </div>";
            }   
        }
        else {echo "<center>Please select the course from above navigation bar.</center>";}
        ?>

            <!-- <div class='entry'>
                <h3 class='title'>anything</h3>
                <p class='date'>anything</p>
                <p class='counter'>Total Downloads: <span class='totalDownloads'>anything</span></p>
                <button class='download'><a class='download_link id='anything' href='phpFiles/uploads/".$row2['entryname']."' download>Download</a></button>
            </div> -->
    </div>
    
    <div class="addEntry">
        <div class="entryForm"> 
            <button class="close">&#215;</button>
            <h1 style="text-align:center;padding:20px;font-weight:lighter;">Add Material</h1>
            <form action="phpFiles/add.php" method="POST" enctype="multipart/form-data">
            <input class="courseSelect" type="text" name="course" placeholder="Course name">
            <input class="materialName" type="text" name="title" placeholder="Title for material">
            <input class="file" type="file" name="file">
            <input class="submit" name="submit" type="submit">
            </form>
        </div>
    </div>

    <div class="leaderboard">
        <h1 class="topGems" style="color: white;text-align:center;">TOP GEMS</h1>
        <?php
            $lbd_query="SELECT title, downloads FROM entries ORDER BY downloads DESC;";
            $lbd_result=$conn->query($lbd_query);

            while ($lbd_row=$lbd_result->fetch_assoc())
            {
                echo "
                <div class='gemClass'><p class='gemTitle'>".$lbd_row['title']."</p><p class='gemDownloads'>".$lbd_row['downloads']." Downloads</p></div>
                ";
            }
        ?>        
    </div>
    
    <footer style="text-align:center; ">
        Made with <i class="fas fa-heart" style="color:red;"></i> by <a href="https://www.facebook.com/profile.php?id=100040462189378" style="text-decoration:none;color:black;" target="_new">Rahul</a>
    </footer>
            
    <style>
    .download_link{
        display: block;
        width:100%;
        border-radius: 60px;
        color: white;
        text-decoration: none;
    }
    </style>
    <script src="js/homepage.js"></script>
</body>
</html>
