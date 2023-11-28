<?php

$id = $_POST['id'];
$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$type = $_POST['type'];
$con = new mysqli('localhost', 'root', '', 'myhotel');
if ($con->connect_error) {
    die('Connection Failed: ' . $con->connect_error);
} else {
    if (empty($id)) {
        if ($stmt = $con->prepare('insert into users(name, username, password, type) values(?,?,?,?)')) {
            $stmt->bind_param('sssi', $name, $username, $password, $type);
            $stmt->execute();
            $stmt->close();
        }
    } else {
        if ($stmt1 = $con->prepare("UPDATE users set name=?, username=?, password=?, type=? where id = ?")) {
            $stmt1->bind_param('sssii', $name, $username, $password, $type, $id);
            $stmt1->execute();
            $stmt1->close();
        }
    }
}

header("Location: index.php?page=users");
?>