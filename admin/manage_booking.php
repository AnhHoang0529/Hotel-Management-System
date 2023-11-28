<?php
include 'db_connect.php';
$rid = $_GET['rid'];
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
}
?>
<div class="container-fluid">

    <form action="xulibooking.php" method ="post" id="manage-check">
        <input type="hidden" name="id" value="<?php echo isset($get['id']) ? $get['id'] : '' ?>">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="<?php echo isset($get['name']) ? $get['name'] : '' ?>">
        </div>
        <?php
        if (isset($_GET['id'])):
            $rooms = $conn->query("SELECT * FROM rooms where status =0 and category_id = $rid order by id asc");
            ?>

            <div class="form-group">
                <label for="name">Room</label>
                <select name="rid" id="" class="custom-select browser-default">
                    <?php while ($row = $rooms->fetch_assoc()): ?>
                        <option value="<?php echo $row['id'] ?>" <?php echo $row['category_id'] == $rid ? "selected" : '' ?>><?php echo $row['room'] . " | " . ($cat_arr[$row['category_id']]['name']) ?></option>
                    <?php endwhile; ?>
                </select>
            </div>
        <?php else: ?>
            <input type="hidden" name="rid" value="<?php echo isset($_GET['rid']) ? $_GET['rid'] : '' ?>">
        <?php endif; ?>

        <div class="form-group">
            <label for="contact">Contact #</label>
            <input type="text" name="contact" id="contact" class="form-control" value="<?php echo isset($get['phone']) ? $get['phone'] : '' ?>">
        </div>
        <div class="form-group">
            <label for="date_in">Check-in Date</label>
            <input type="date" name="date_in" id="date_in" class="form-control" value="<?php echo isset($get['datein']) ? date("Y-m-d", strtotime($get['datein'])) : date("Y-m-d") ?>">
        </div>
        <div class="form-group">
            <label for="date_in_time">Check-in Time</label>
            <input type="time" name="date_in_time" id="date_in_time" class="form-control" value="<?php echo isset($get['datein']) ? date("H:i", strtotime($get['datein'])) : date("H:i") ?>">
        </div>
        <div class="form-group">
            <label for="days">Days of Stay</label>
            <input type="number" min ="1" name="days" id="days" class="form-control" value="<?php echo isset($calc_days) ? $calc_days : 1 ?>">
        </div>
    </form>
</div>


