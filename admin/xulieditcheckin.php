<?php

$id = $_POST['id'];

$dateout = $_POST['date_out'];
$con = new mysqli('localhost', 'root', '', 'myhotel');
if ($con->connect_error) {
    die('Connection Failed: ' . $con->connect_error);
} else {
    if ($stmt1 = $con->prepare("UPDATE booking set dateout=? where id = ?")) {
            $stmt1->bind_param('si', $dateout, $id);
            $stmt1->execute();
            $stmt1->close();
        }
}

header("Location: index.php?page=check_out");
?>