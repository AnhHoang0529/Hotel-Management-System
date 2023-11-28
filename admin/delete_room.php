<?php

$id = $_POST['id'];
$con = new mysqli('localhost', 'root', '', 'myhotel');
if ($con->connect_error) {
    die('Connection Failed: ' . $con->connect_error);
} else {
    if ($stmt1 = $con->prepare("DELETE FROM rooms where id = ".$id)) {
            $stmt1->bind_param('i',$id);
            $stmt1->execute();
            $stmt1->close();
        }
}
header("Location: index.php?page=rooms");
?>
