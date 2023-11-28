
<?php
include 'db_connect.php';
$id = $_POST['id'];
$room = $_POST['room'];
$phone = $_POST['phone'];
$price = $_POST['payment'];
$con = new mysqli('localhost', 'root', '', 'myhotel');
if ($con->connect_error) {
    die('Connection Failed: ' . $con->connect_error);
} else {
    if ($stmt1 = $con->prepare("UPDATE booking set status=2, price=? where id = ?")) {
            $stmt1->bind_param('ii', $price, $id);
            $stmt1->execute();
            $stmt1->close();
        }
        if ($stmt3 = $con->prepare('UPDATE customers set charges = charges + ? where phone = ?')) {
            $stmt3->bind_param("ii", $price, $phone);
            $stmt3->execute();
            $stmt3->close();
        }
        if ($stmt2 = $con->prepare("UPDATE rooms set status=0 where room = ?")) {
            $stmt2->bind_param('s', $room);
            $stmt2->execute();
            $stmt2->close();
        }

        
    }
header("Location: index.php?page=check_out");
?>

