<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome End Gem</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">
</head>
<body onload="animation()">
    <div class="container">
        <header><h1 class="heading">Welcome to END-GEM</h1></header>
        <div class="login">
            <form action="phpFiles/login.php" method="POST">
                <p style="color:red; font-size:70%;"><?php $dnmError=(empty($_GET)?"":$_GET['dnm']);
                if (!empty($dnmError)) {echo "* ".$dnmError;}?></p>
                <p>Username</p>
                <input type="text" name="username">
                <p>Password</p>
                <input type="password" name="password">
                <input type="submit" name="login-btn" value="Login" class="login-btn"></input>
                <pre style="font-size: 77%; display: inline;">Do not have an account? <button type="button" class="small-btn">Sign up here</button></pre>
            </form>
        </div>

        <div class="signup">
            <form action="phpFiles/login.php" method="POST">
                <!-- <p>Enrollment number</p>
                <input type="number" name="enroll"> -->
                <p>E-mail</p>
                <input type="text" name="email">
                <p>Username</p>
                <input type="text" name="username">
                <p>Password</p>
                <input type="password" name="password">
                <input type="submit" name="signup-btn" value="Signup" class="signup-btn"></input>
                <pre style="font-size: 77%; display: inline;">Have an account?  <button type="button" class="small-btn-login">login</button></pre>
            </form>
        </div>
    </div>
    <script src="js/login.js"></script>
</body>
</html>