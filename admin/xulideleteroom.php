<?php

$id = $_POST['id'];
$room = $_POST['room'];
$category = $_POST['category'];
$status = $_POST['status'];

$con = new mysqli('localhost', 'root', '', 'myhotel');
if ($con->connect_error) {
    die('Connection Failed: ' . $con->connect_error);
} else {
    if (empty($id)) {
        if ($stmt = $con->prepare('insert into rooms(room, category_id, status) values(?,?,?)')) {
            $stmt->bind_param('sii', $room, $category, $status);
            $stmt->execute();
            $stmt->close();
        }
    } else {
        if ($stmt1 = $con->prepare("UPDATE rooms set room=?, category_id=?, status=? where id = ?")) {
            $stmt1->bind_param('siii', $room, $category, $status,$id);
            $stmt1->execute();
            $stmt1->close();
        }
    }
}

header("Location: index.php?page=rooms");
?>