<?php
include 'db_connect.php';
    session_start();
    $username = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');
    if (isset($username) && (isset($password))){
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        $uname = validate($username);
        $pass = validate($password);
        if (empty($uname)){
            header("Location: login.php?error=Username is required");
            exit();
        }else if (empty($pass)) {
            header("Location: login.php?error=Password is required");
            exit();
        }else{
            $sql = "SELECT * FROM users WHERE username='$uname' AND password='$pass'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) === 1){
                $row = mysqli_fetch_assoc($result);
                if ($row['username'] === $uname && $row['password'] === $pass){
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['login_type'] = $row['type'];
                    header("Location: index.php");
                    exit();
                }else {
                    header("Location: login.php?error=Incorrect username or password");
                    exit();
                }
            }else {
                header("Location: login.php?error=Incorrect username or password");
                exit();
            }
        }
    }
    else{
        header("Location: login.php");
        exit();
    }
?>
