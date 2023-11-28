<?php

$id = $_POST['id'];
$rid = $_POST['rid'];
include 'db_connect.php';
$cat = "SELECT * FROM room_categoricals";
$cat_arr = array();
$result = mysqli_query($conn, $cat) or die(mysqli_error($conn));

if (mysqli_num_rows($result) > 0) {
    while ($data = mysqli_fetch_assoc($result)) {
        $cat_arr[$data['id']] = $data;
    }
}

$checked = $conn->query("SELECT * FROM rooms where id = $rid order by id asc");
while ($row = $checked->fetch_assoc()):
    $room_type = $cat_arr[$row['category_id']]['name'];
endwhile;

if ($room_type == 'Single Room') {
    $room_id = 1;
} elseif ($room_type == "Double Room") {
    $room_id = 2;
} else {
    $room_id = 3;
}
$name = $_POST['name'];
$i = true;
while ($i) {
    $ref = rand(0, 999999999);
    $checked = $conn->query("SELECT * FROM booking where ref_no = '$ref'");
    if (!mysqli_num_rows($checked)) {
        $i = false;
    }
}
$mail = $_POST['mail'];
$phone = $_POST['phone'];
$status = 1;
$adult = $_POST['adult'];
$children = $_POST['children'];
$datein = $_POST['date_in'];
$days = $_POST['days'];
$dateout = date('Y-m-d', strtotime($datein) + (24 * 60 * 60 * $days));
$message = $_POST['message'];
$a = true;
while ($a) {
    $cus_id = rand(0, 99999999);
    $checked = $conn->query("SELECT * FROM customers where customer_id = '$cus_id'");
    if (!mysqli_num_rows($checked)) {
        $a = false;
    }
}

$con = new mysqli('localhost', 'root', '', 'myhotel');
if ($con->connect_error) {
    die('Connection Failed: ' . $con->connect_error);
} else {
    if ($stmt = $con->prepare('insert into booking(name,ref_no, mail, phone,room_type,room_id, room, adult, children, datein, dateout, days_of_stay,status, message) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?)')) {
        $stmt->bind_param("sisisiiiissiis", $name, $ref, $mail, $phone, $room_type, $room_id, $rid, $adult, $children, $datein, $dateout, $days, $status, $message);
        $stmt->execute();
        $stmt->close();
    }
   
    if ($stmt2 = $con->prepare('UPDATE rooms set status = 1 where id =?')) {
        $stmt2->bind_param('i', $rid);
        $stmt2->execute();
        $stmt2->close();
        $con->close();
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
header("Location: index.php?page=check_in");
?>