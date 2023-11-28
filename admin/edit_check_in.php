<?php
include 'db_connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = $conn->query("SELECT * FROM booking where id =" . $id);
    if ($query->num_rows > 0) {
        foreach ($query->fetch_array() as $a => $b) {
            $get[$a] = $b;
        }
    }
    $calc_days = abs(strtotime($get['dateout']) - strtotime($get['datein']));
    $calc_days = floor($calc_days / (60 * 60 * 24));
    $cat = $conn->query("SELECT * FROM room_categoricals");
    $cat_arr = array();
    while ($row = $cat->fetch_assoc()) {
        $cat_arr[$row['id']] = $row;
    }
    $room = "SELECT * FROM rooms";
    $room_arr = array();
    $result1 = mysqli_query($conn, $room) or die(mysqli_error($conn));

    if (mysqli_num_rows($result1) > 0) {
        while ($data = mysqli_fetch_assoc($result1)) {
            $room_arr[$data['id']] = $data;
        }
    }
}
?>
<div class="container-fluid">
    <form action="xulieditcheckin.php" method ="post" id="manage-check">
        <input type="hidden" name="id" value="<?php echo isset($get['id']) ? $get['id'] : '' ?>">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="<?php echo isset($get['name']) ? $get['name'] : '' ?>">
        </div>        
        <div class="form-group">
            <label for="room">Room</label>
            <input type="text" name="room" id="name" class="form-control" value="<?php echo isset($get['room']) ? $room_arr[$get['room']]['room'] : '' ?>">
        </div>
        <div class="form-group">
            <label for="contact">Contact #</label>
            <input type="text" name="contact" id="contact" class="form-control" value="<?php echo isset($get['phone']) ? $get['phone'] : '' ?>">
        </div>
        <div class="form-group">
            <label for="date_out">Check-out Date</label>
            <input type="date" name="date_out" id="date_out" class="form-control" value="<?php echo isset($get['dateout']) ? date("Y-m-d", strtotime($get['datein'])) : date("Y-m-d") ?>">
        </div>
        <div class="form-group">
            <label for="date_out_time">Check-out Time</label>
            <input type="time" name="date_out_time" id="date_out_time" class="form-control" value="<?php echo isset($get['dateout']) ? date("H:i", strtotime($get['dateout'])) : date("H:i") ?>">
        </div>

    </form>
</div>
