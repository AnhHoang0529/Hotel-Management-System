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
<div class="container-fluid">

    <form action="xulicheckout.php" method="post" id="manage-check">
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <input type="hidden" name="phone" value="<?php echo $phone ?>">
        <input type="hidden" name="room" value="<?php echo $rooms['room']?>">

        <p><b>Room : </b><?php echo isset($rooms['room']) ? $rooms['room'] : 'NA' ?></p>
        <p><b>Room Category : </b><?php echo $cat['name'] ?></p>
        <p><b>Room Price : </b><?php echo '$' . number_format($cat['price'], 2) ?></p>
        <p><b>Reference no : </b><?php echo $ref_no ?></p>
        <p><b>Phone : </b><?php echo $phone ?></p>
        <p><b>Check-in Date/Time : </b><?php echo date("M d, Y h:i A", strtotime($datein)) ?></p>
        <p><b>Check-out Date/Time : </b><?php echo date("M d, Y h:i A", strtotime($dateout)) ?></p>
        <p><b>Days : </b><?php echo $calc_days ?></p>
        <p><b>Amount (Price * Days) : </b><?php echo '$' . number_format($cat['price'] * $calc_days, 2) ?></p>
        <div class="form-group">
            <label><b>Payment</b></label>
            <input type="number" class="form-control" name="payment" id="payment" placeholder="Please Enter Amounts Here.." min="<?php echo number_format($cat['price'] * $calc_days, 2) ?>">
        </div>
        
    </form>

</div>

