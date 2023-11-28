<?php

include 'db_connect.php';
$id = $_POST['id'];
$name = $_POST['name'];
$a=true;
if (empty($id)) {
    while ($a) {
        $cus_id = rand(0, 99999999);
        $checked = $conn->query("SELECT * FROM customers where customer_id = '$cus_id'");
        if (!mysqli_num_rows($checked)) {
            $a = false;
        }
    }
} else {
    $cus_id = $_POST['cus_id'];
}

$name = $_POST['name'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];
$address = $_POST['address'];

$con = new mysqli('localhost', 'root', '', 'myhotel');
if ($con->connect_error) {
    die('Connection Failed: ' . $con->connect_error);
} else {
    if (empty($id)) {
        $checked = $conn->query("SELECT * FROM customers where phone = '$phone'");
    if (!mysqli_num_rows($checked)) {
        if ($stmt1 = $con->prepare('INSERT INTO customers(name,customer_id, mail,phone,address) values(?,?,?,?,?)')) {
            $stmt1->bind_param("sisis", $name, $cus_id, $mail, $phone, $address);
            $stmt1->execute();
            $stmt1->close();
        }
    }
    }else {
        if ($stmt1 = $con->prepare("UPDATE customers set name=?, mail=?, phone=?, address=? where id = ?")) {
            $stmt1->bind_param("ssisi", $name, $mail, $phone, $address, $id);
            $stmt1->execute();
            $stmt1->close();
        }
    }
}
        

header("Location: index.php?page=customers");
?>