<?php
$id = $_POST['id'];
$rid = $_POST['rid'];
        $con = new mysqli('localhost', 'root', '', 'myhotel');
        if ($con->connect_error) {
            die('Connection Failed: ' . $con->connect_error);
        } else {
            if ($stmt = $con->prepare('UPDATE booking set status = 1 , room=? where id =?')) {
                $stmt->bind_param('ii',$rid, $id);
                $stmt->execute();
                $stmt->close();
                
            }
            if ($stmt2 = $con->prepare('UPDATE rooms set status = 1 where id =?')) {
                $stmt2->bind_param('i', $rid);
                $stmt2->execute();
                $stmt2->close();
                $con->close();
            }
        }
        header("Location: index.php?page=booked");
?>