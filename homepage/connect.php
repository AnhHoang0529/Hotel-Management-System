<?php

include 'admin/db_connect.php';
$name = filter_input(INPUT_POST, 'name');
$i = true;
while ($i) {
    $ref = rand(0, 999999999);
    $checked = $conn->query("SELECT * FROM booking where ref_no = '$ref'");
    if (!mysqli_num_rows($checked)) {
        $i = false;
    }
}
$a = true;
while ($a) {
    $cus_id = rand(0, 99999999);
    $checked = $conn->query("SELECT * FROM customers where customer_id = '$cus_id'");
    if (!mysqli_num_rows($checked)) {
        $a = false;
    }
}

$mail = filter_input(INPUT_POST, 'mail');
$phone = filter_input(INPUT_POST, 'phone');
$room_type = filter_input(INPUT_POST, 'room_type');
$adult = filter_input(INPUT_POST, 'adult');
$children = filter_input(INPUT_POST, 'children');
$datein = filter_input(INPUT_POST, 'datein');
$dateout = filter_input(INPUT_POST, 'dateout');
$days_of_stay = filter_input(INPUT_POST, 'days_of_stay');
$status = 0;
$message = filter_input(INPUT_POST, 'message');
if ($room_type == 'Single Room') {
    $room_id = 1;
} elseif ($room_type == "Double Room") {
    $room_id = 2;
} else {
    $room_id = 3;
}
$con = new mysqli('localhost', 'root', '', 'myhotel');
if ($con->connect_error) {
    die('Connection Failed: ' . $con->connect_error);
} else {
    if ($stmt = $con->prepare('insert into booking(name,ref_no, mail, phone,room_type,room_id, adult, children, datein, dateout, days_of_stay,status, message) values(?,?,?,?,?,?,?,?,?,?,?,?,?)')) {
        $stmt->bind_param("sisisiiissiis", $name, $ref, $mail, $phone, $room_type, $room_id, $adult, $children, $datein, $dateout, $days_of_stay, $status, $message);
        $stmt->execute();
        $stmt->close();
    }
    $checked = $conn->query("SELECT * FROM customers where phone = '$phone'");
    if (!mysqli_num_rows($checked)) {
        if ($stmt1 = $con->prepare('INSERT INTO customers(name,customer_id, mail,phone) values(?,?,?,?)')) {
            $stmt1->bind_param("sisi", $name, $cus_id, $mail, $phone);
            $stmt1->execute();
            $stmt1->close();
        }
    }
}

header("Location: book.php");
?>