<?php
    session_start();
    define('USER', 'root');
    define('PASSWORD', '');
    define('HOST', 'localhost');
    define('DATABASE', 'login_reg');
    try {
        $connection = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
    } catch (PDOException $e) {
        exit("Error: " . $e->getMessage());
    }
    if (isset($_POST['regg'])) {
        $username = $_POST['fullname'];
        $email = $_POST['mail2'];
        $password = $_POST['password'];
        $phone = $_POST['phone'];
        $rojgar = $_POST['rojgar'];
        $profession = $_POST['prof'];
        $adhaar = $_POST['adhaar'];
        $password_hash = password_hash($password, PASSWORD_BCRYPT);
        $my_date = date("Y-m-d H:i:s");
        $query = $connection->prepare("SELECT * FROM users WHERE mail=:mail");
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $query->execute();
        if ($query->rowCount() > 0) {
            echo '<p class="error">The email address is already registered!</p>';
        }
        if ($query->rowCount() == 0) {
            $query = $connection->prepare("INSERT INTO reg(fullname,password,mail,rojgar,adhaar,profession,phone,create_datetime) VALUES (:username,:password_hash,:email,:rojgar,:adhaar,:profession,:phone,:mydate)");
            $query->bindParam("fullname", $fullname, PDO::PARAM_STR);
            $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
            $query->bindParam("email", $email, PDO::PARAM_STR);
            $query->bindParam("email", $email, PDO::PARAM_STR);
            
            $result = $query->execute();
            if ($result) {
                echo '<p class="success">Your registration was successful!</p>';
            } else {
                echo '<p class="error">Something went wrong!</p>';
            }
        }
    }
?>