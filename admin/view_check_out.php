<?php
include('db_connect.php');
if ($_GET['id']) {
    $id = $_GET['id'];
    $query = $conn->query("SELECT * FROM booking where id =" . $id);
    if ($query->num_rows > 0) {
        foreach ($query->fetch_array() as $k => $v) {
            $$k = $v;
        }
    }
    if ($room > 0) {
        $rooms = $conn->query("SELECT * FROM rooms where id =" . $room)->fetch_array();
        $cat = $conn->query("SELECT * FROM room_categoricals where id =" . $rooms['category_id'])->fetch_array();
    }
    $calc_days = abs(strtotime($dateout) - strtotime($datein));
    $calc_days = floor($calc_days / (60 * 60 * 24));
}
?>
<style>
    .container-fluid p{
        margin: unset
    }
    #uni_modal .modal-footer{
        display: none;
    }
</style>
<div class="container-fluid">
    <p><b>Room : </b><?php echo isset($rooms['room']) ? $rooms['room'] : 'NA' ?></p>
    <p><b>Room Category : </b><?php echo $cat['name'] ?></p>
    <p><b>Room Price : </b><?php echo '$' . number_format($cat['price'], 2) ?></p>
    <p><b>Reference no : </b><?php echo $ref_no ?></p>
    <p><b>Checked In : </b><?php echo $name ?></p>
    <p><b>Contact no : </b><?php echo $phone ?></p>
    <p><b>Check-in Date/Time : </b><?php echo date("M d, Y h:i A", strtotime($datein)) ?></p>
    <p><b>Check-out Date/Time : </b><?php echo date("M d, Y h:i A", strtotime($dateout)) ?></p>
    <p><b>Days : </b><?php echo $calc_days ?></p>
    <p><b>Amount (Price * Days) : </b><?php echo '$' . number_format($cat['price'] * $calc_days, 2) ?></p>
</div>