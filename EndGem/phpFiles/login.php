<?php
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    $dnmError="";

    if (isset($_POST['login-btn'])){
        $username=htmlspecialchars($_POST['username']);
        $password=htmlspecialchars($_POST['password']);

        if (empty($username)||empty($password)){
            $dnmError="all the fields are mandatory.";
            header ('location: ../welcome.php?dnm='.$dnmError);
        }

        else {
            include 'connection.php';

            $sql1="SELECT * FROM users WHERE username LIKE "."'".$username."'"." AND password LIKE "."'".$password."';"; //doubt: why this is working without %
            $result=$conn->query($sql1);
            if ($result->num_rows==1){
                $row=$result->fetch_assoc();

                session_start();
                $_SESSION["username"]=$username;

                header ('location: ../index.php?username='.$username);
            }
            else {
                $dnmError="either Username or password is incorrect or user is not registered.";
                header ('location: ../welcome.php?dnm='.$dnmError);
            }
        }
    }
    elseif (isset($_POST['signup-btn'])) {
        //$enroll=htmlspecialchars($_POST['enroll']);
        $email=htmlspecialchars($_POST['email']);
        $username=htmlspecialchars($_POST['username']);
        $password=htmlspecialchars($_POST['password']);

        if (empty($email)||empty($username)||empty($password)){
            $dnmError="all the fields are mandatory.";
            header ('location: ../welcome.php?dnm='.$dnmError);
        }

        else if (strlen($email)<99 && strlen($username)<99 && strlen($password)<99){
            include 'connection.php';

            $sql2="INSERT INTO `users`(email, username, password) VALUES ('$email', '$username', '$password');";
            $conn->query($sql2);
            header ('location: ../index.php?username='.$username);
        }
        else {
            $dnmError="either username or password is too big.";
            header ('location: ../welcome.php?dnm='.$dnmError);
        }
    }
?>